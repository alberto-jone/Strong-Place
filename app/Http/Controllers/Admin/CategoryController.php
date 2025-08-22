<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index()
    {
        // Retorna a view de criação de categoria
        return view('admin.category.create');
    }
    public function manage()
    {
        // Retorna a view de gestão de categorias
        return view('admin.category.manage');
    }
}
