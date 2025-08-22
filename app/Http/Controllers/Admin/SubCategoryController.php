<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    //
    public function index()
    {
        // Retorna a view de criação de subcategoria
        return view('admin.sub_category.create');
    }
    public function manage()
    {
        // Retorna a view de gestão de subcategorias
        return view('admin.sub_category.manage');
    }
}
