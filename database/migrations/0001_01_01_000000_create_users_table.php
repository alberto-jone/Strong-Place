<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Executa as migrações.
     */
    public function up(): void
    {
        // Cria a tabela de usuários
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Chave primária
            $table->string('name'); // Nome do usuário
            $table->string('email')->unique(); // E-mail único
            $table->tinyInteger('role')->default(2); // Papel do usuário (padrão: 2)
            $table->timestamp('email_verified_at')->nullable(); // Data de verificação do e-mail
            $table->string('password'); // Senha
            $table->rememberToken(); // Token de "lembrar-me"
            $table->timestamps(); // Datas de criação e atualização
        });

        // Cria a tabela de tokens para redefinição de senha
        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary(); // E-mail como chave primária
            $table->string('token'); // Token de redefinição
            $table->timestamp('created_at')->nullable(); // Data de criação do token
        });

        // Cria a tabela de sessões
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary(); // ID da sessão como chave primária
            $table->foreignId('user_id')->nullable()->index(); // ID do usuário (relacionamento)
            $table->string('ip_address', 45)->nullable(); // Endereço IP
            $table->text('user_agent')->nullable(); // Agente do usuário (navegador)
            $table->longText('payload'); // Dados da sessão
            $table->integer('last_activity')->index(); // Última atividade
        });
    }

    /**
     * Reverte as migrações.
     */
    public function down(): void
    {
        // Remove as tabelas criadas
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
