@extends('layouts.home_layout')

@section('content')
    <main class="main">
        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">
            <img src="{{ asset('assets/img/hero-bg.jpg') }}" alt="" data-aos="fade-in" />

            <div class="container pt-4 px-4 ">
                <div class="row g-4 ">

                    <div class="col-md-6 mx-auto">
                        <div class="bg-secondary rounded p-4">
                            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row gy-4">
                                    <!-- Product ID -->
                                    <div class="col-md-12">
                                        <label class="form-label">Product ID</label>
                                        <input type="text" placeholder="{{ 'PROD0000' . $pro + 1 }}" value="{{ 'PROD0000' . $pro + 1 }}" name="product_id"
                                            class="form-control py-3" />
                                    </div>

                                    <!-- Product Name -->
                                    <div class="col-md-12">
                                        <label class="form-label">Product Name</label>
                                        <input type="text" name="product_name" class="form-control py-3" />
                                    </div>

                                    <!-- Manufacturing Date -->
                                    <div class="col-md-12">
                                        <label class="form-label">Manufacturing Date</label>
                                        <input type="date" name="mfg_date" class="form-control py-3" />
                                    </div>

                                    <!-- Status -->
                                    <div class="col-md-12" style="display:none;">
                                        <label class="form-label">Status</label>
                                        <input type="text" value="Pending" name="status" disabled
                                            class="form-control py-3" />
                                    </div>

                                    <!-- Image Upload -->
                                    <div class="col-md-12">
                                        <label class="form-label">Product Image</label>
                                        <input type="file" name="image" class="form-control" accept="image/*" />
                                    </div>

                                    <!-- Category Dropdown -->
                                    <div class="col-md-12">
                                        <label class="form-label">Product Category</label>
                                        <select name="category_id" class="form-select py-3">
                                            <option selected disabled>Select Category</option>
                                            @foreach ($products->take(5) as $product)
                                                <option value="{{ $product->category->id }}">
                                                    {{ $product->category->category_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <!-- Submit Button -->
                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn btn-primary">Add Product</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </main>
@endsection
