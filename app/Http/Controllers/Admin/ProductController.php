<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
    {
        // Retorna a view de gestão de produtos
        return view('admin.product.manage');
    }
    public function review_manage()
    {
        // Retorna a view de gestão de avaliações de produtos
        return view('admin.product.manage_product_review');
    }
}
