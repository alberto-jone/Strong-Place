<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductAttributeController extends Controller
{
    //
    public function index()
    {
        // Retorna a view de gestão de atributos de produtos
        return view('admin.product_attribute.create');
    }
    public function manage()
    {
        // Retorna a view de gestão de atributos de produtos
        return view('admin.product_attribute.manage');
    }
}
