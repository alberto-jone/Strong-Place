<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleManager
{
    /**
     * Manipula uma requisição recebida, verificando o papel do usuário.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     * @param  string  $role  Papel exigido para acessar a rota
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        // Verifica se o usuário está autenticado
        if (!Auth::check()) {
            // Se não estiver autenticado, redireciona para a página de login
            return redirect()->route('login');
        }

        // Obtém o papel do usuário autenticado
        $authUserRole = Auth::user()->role;

        // Verifica se o usuário possui o papel exigido para acessar a rota
        switch ($role) {
            case 'admin':
                // Se o papel for 'admin' e o usuário for administrador (0), permite acesso
                if ($authUserRole == 0) {
                    return $next($request);
                }
                break;
            case 'vendor':
                // Se o papel for 'vendor' e o usuário for vendedor (1), permite acesso
                if ($authUserRole == 1) {
                    return $next($request);
                }
                break;
            case 'customer':
                // Se o papel for 'customer' e o usuário for cliente (2), permite acesso
                if ($authUserRole == 2) {
                    return $next($request);
                }
                break;
        }

        // Se o usuário não tiver o papel exigido, redireciona para o dashboard correspondente ao seu papel
        switch ($authUserRole) {
            case 0:
                // Usuário administrador
                return redirect()->route('admin.dashboard');
            case 1:
                // Usuário vendedor
                return redirect()->route('vendor.dashboard');
            case 2:
                // Usuário cliente
                return redirect()->route('dashboard');
        }

        // Caso não se enquadre em nenhum papel, redireciona para login com mensagem de erro
        return redirect()->route('login')->with('error', 'Acesso negado');
    }
}
