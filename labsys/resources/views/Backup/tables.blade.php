<div id="users" class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h3 class="mb-4 text-center">Products</h3>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Image</th>
                                <th scope="col">Product ID</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Manufacturing</th>
                                <th scope="col">Category</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <th scope="row">{{ $product->id }}</th>
                                    <td>
                                        @if ($product->image)
                                            <img src="{{ asset('images/' . $product->image) }}" alt="User Image"
                                                width="40" height="40" class="rounded-circle">
                                        @else
                                            <img src="{{ asset('images/default-user.jpg') }}" alt="Default Image"
                                                width="40" height="40" class="rounded-circle">
                                        @endif
                                    </td>
                                    <td>{{ $product->product_id }}</td>
                                    <td>{{ $product->product_name }}</td>
                                    <td>{{ $product->mfg_date }}</td>
                                    <td>{{ $product->category->category_name ?? 'N/A' }}</td>
                                    <td><a href="{{ route('update', $product->id) }}"
                                            class="btn btn-sm btn-warning">Update</a>
                                        <a href="#" class="btn btn-sm btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
