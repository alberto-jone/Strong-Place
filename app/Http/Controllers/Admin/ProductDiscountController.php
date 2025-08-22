<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductDiscountController extends Controller
{
    //
    public function index()
    {
        // Retorna a view de criação de desconto
        return view('admin.discount.create');
    }
    public function manage()
    {
        // Retorna a view de gestão de descontos
        return view('admin.discount.manage');
    }
}
