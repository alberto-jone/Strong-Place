<?php

use App\Http\Middleware\RoleManager; // Importa o middleware de gerenciamento de papéis
use Illuminate\Foundation\Application; // Importa a classe principal da aplicação Laravel
use Illuminate\Foundation\Configuration\Exceptions; // Importa configuração de exceções
use Illuminate\Foundation\Configuration\Middleware; // Importa configuração de middlewares

// Configura e retorna a instância da aplicação Laravel
return Application::configure(basePath: dirname(__DIR__)) // Define o diretório base do projeto
    ->withRouting(
        web: __DIR__.'/../routes/web.php', // Define o arquivo de rotas web
        commands: __DIR__.'/../routes/console.php', // Define o arquivo de comandos/artisan
        health: '/up', // Define rota de verificação de saúde da aplicação
    )
    ->withMiddleware(function (Middleware $middleware): void {
        // Configura os middlewares da aplicação
        $middleware->alias([
            'rolemanager'=>RoleManager::class, // Cria um alias 'rolemanager' para o middleware RoleManager
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        // Configura o tratamento de exceções (pode ser personalizado)
    })->create(); // Cria e retorna a instância final da
