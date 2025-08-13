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
}
