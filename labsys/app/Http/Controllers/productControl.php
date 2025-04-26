<?php

namespace App\Http\Controllers;
use App\Models\category;
use App\Models\products;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;


class productControl extends Controller
{

    public function index()
    {
        $products = products::with(['category', 'tester.users'])->get();

        $stats = [
            'totalusers' => User::count(),
            'totalproducts' => $products->count(),
            'passproduct' => $products->where('status', 'Pass')->count(),
            'failproduct' => $products->where('status', 'Fail')->count(),
            'pendingproduct' => $products->where('status', 'Pending')->count(),
        ];

        if (Auth::user()->role == 0) {

            return view('products.products', array_merge(['products' => $products, 'users' => User::all()], $stats));
        } else {
            return view('index');
        }
    }

    // Redirect to Upload Form
    public function create()
    {
        $products = products::with('category')->get();
        $pro = products::count('product_id');
        return view('products.upload_products', compact('products', 'pro'));
    }


    // UPLOAD / CREATE PRODUCTS , fill the form and products will uploaded to database
    public function store(Request $request)
    {

        $image = $request->file('image')->store('product', 'public');


        products::create([
            "product_id" => $request->product_id,
            "product_name" => $request->product_name,
            "mfg_date" => $request->mfg_date,
            "category_id" => $request->category_id,
            "status" => "pending",
            "image" => 'product/' . $image,
        ]);

        return redirect()->route('product.index');
    }


    // EDIT PRODUCTS , ye update k form pr redirect krega jaha ID se values get ho rhi hongi
    public function edit($id)
    {
        $products = products::with('category')->findOrFail($id);
        $category = category::all();
        return view('products.update_products', compact('products', 'category'));
    }


    // UPDATE PRODUCTS , is form se product ko update kr skenge
    public function update(Request $request, $id)
    {
        $product = products::findOrFail($id);

        $data = $request->only([
            'product_name',
            'mfg_date',
            'category_id'
        ]);

        if ($request->hasFile('image')) {

            $image = $request->file('image')->store('product', 'public');


            $data['image'] = $image;
        }

        $product->update($data);

        return redirect()->route('product.index');
    }

    // DELETE PRODUCTS
    public function destroy($id)
    {
        $product = products::findOrFail($id);
        $product->delete();
        return redirect()->back();
    }

}