@extends('layouts.layout')
@section('content')
    <!-- Products Status End -->

    <div id="users" class="container-fluid pt-4 px-4">
        <h1 class="text-center">PRODUCTS</h1>
        <div class="row g-4">
            <div class="col-12">
                @foreach ($products as $product)
                    <div class="product-card d-flex align-items-start">
                        <div class="px-2">{{ $product->id }}</div>
                        <img src="{{ asset('storage/'.$product->image) }}" class="product-img me-4"
                            alt="{{ $product->product_name }}">
                        <div class="product-details flex-grow-1">
                            <div>ProductID - {{ $product->product_id }}</div>
                            <div class="dropdown-divider"></div>
                            <h5 class="text-reset">{{ $product->product_name }}</h5>
                            <p>High-quality wireless headphones with noise cancellation and long battery life. Perfect for
                                travel
                                and office
                                use.</p>
                            @if ($product->status == 'Pass')
                                Test : <span class="product-price text-success">
                                    {{ 'Pass' }}
                                </span>
                            @else
                                Test : <span class="product-price text-danger">
                                    {{ 'Fail' }}
                                </span>
                            @endif
                            <div class="dropdown-divider"></div>
                            <div class="action-buttons mt-3 d-flex">
                                <a class="btn btn-sm btn-warning"
                                    href="{{ route('products.edit', $product->id) }}">Update</a>
                                <form action="{{ route('products.destroy', $product->id) }}" method="post">
                                    @csrf
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
