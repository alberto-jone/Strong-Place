<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminMainController extends Controller
{
    //

    public function index()
    {
        // Retorna a view principal do admin
        return view('admin.admin');
    }

    public function dashboard()
    {
        // Retorna a view do dashboard do admin
        return view('admin.dashboard');
    }

    public function setting()
    {
        // Retorna a view de configurações do admin
        return view('admin.setting');
    }

    public function manage_user()
    {
        // Retorna a view de gestão de usuários do admin
        return view('admin.manage.user');
    }
    public function manage_stores()
    {
        // Retorna a view de gestão de lojas do admin
        return view('admin.manage.store');
    }
    public function cart_history()
    {
        // Retorna a view de histórico de carrinhos do admin
        return view('admin.cart.history');
    }
    public function order_history()
    {
        // Retorna a view de histórico de pedidos do admin
        return view('admin.order.history');
    }
}
