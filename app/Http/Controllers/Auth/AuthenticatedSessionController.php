<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Exibe a tela de login.
     */
    public function create(): View
    {
        // Retorna a view de login
        return view('auth.login');
    }

    /**
     * Processa uma requisição de autenticação.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        // Realiza a autenticação do usuário
        $request->authenticate();

        // Regenera a sessão para evitar fixação de sessão
        $request->session()->regenerate();

        // Obtém o papel do usuário autenticado
        $authUserRole = Auth::user()->role;

        // Redireciona conforme o papel do usuário
        if($authUserRole==0){
            // Redireciona para a rota do administrador
            return redirect()->intended(route('admin.dashboard', absolute: false));
        }else if($authUserRole==1){
            // Redireciona para a rota do vendedor
            return redirect()->intended(route('vendor.dashboard', absolute: false));
        }else{
            // Redireciona para o dashboard padrão
            return redirect()->intended(route('dashboard', absolute: false));
        }

    }

    /**
     * Encerra a sessão autenticada.
     */
    public function destroy(Request $request): RedirectResponse
    {
        // Realiza o logout do usuário
        Auth::guard('web')->logout();

        // Invalida a sessão atual
        $request->session()->invalidate();

        // Regenera o token da sessão
        $request->session()->regenerateToken();

        // Redireciona para a página inicial
        return redirect('/');
    }
}
