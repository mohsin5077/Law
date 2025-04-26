<?php

namespace App\Http\Controllers;

use App\Models\products;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class testedProduct extends Controller
{
    public function index()
    {
        $products = products::with(['category', 'tester.users'])->get();

        $stats = [
            'passproduct' => $products->where('status', 'Pass'),
            'failproduct' => $products->where('status', 'Fail'),
            'pendingproduct' => $products->where('status', 'Pending')->count(),
        ];

            return view('products.tested_product', array_merge(['products' => $products, 'users' => User::all()], $stats));
    }
}
