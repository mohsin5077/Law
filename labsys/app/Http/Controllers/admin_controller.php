<?php

namespace App\Http\Controllers;
use App\Models\category;
use App\Models\products;
use App\Models\User;
use Illuminate\Http\Request;

class admin_controller extends Controller
{
    public function index()
    {
        $users = User::all();
        $products = products::all();

        $stats = [
            'totalusers' => $users->count(),
            'totalproducts' => $products->count(),
            'passproduct' => $products->where('status', 'Pass')->count(),
            'failproduct' => $products->where('status', 'Fail')->count(),
            'pendingproduct' => $products->where('status', 'Pending')->count(),
        ];

        return view('admin.admin', array_merge(['users' => $users, 'products' => $products], $stats));
    }   


    // DELETE Users
    public function destroy($id)
    {
        $users = user::findOrFail($id);
        $users->delete();
        return redirect()->back();
    }


}