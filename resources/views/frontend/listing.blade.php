@extends('frontend.layout.main')
@section('main-container')

@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show position-fixed top-0 end-0 m-3 z-3" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close bg-transparent border-0 text-white" data-bs-dismiss="alert" aria-label="Close">X</button>
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show position-fixed top-0 end-0 m-3 z-3" role="alert">
        {{ session('error') }}
        <button type="button" class="btn-close bg-transparent border-0 text-white" data-bs-dismiss="alert" aria-label="Close">X</button>
    </div>
@endif

<!-- Full wrapper without scroll -->
<div class="d-flex flex-column flex-lg-row min-vh-100 overflow-hidden m-0 p-0" style="max-width: 100vw; overflow-x: hidden;">

    <!-- Sidebar: visible only on large screens and up (≥992px) -->
    <aside class="d-none d-lg-block bg-dark text-white" style="width: 270px; min-height: 92vh;">
        <!-- Optional sidebar content -->
    </aside>

    <!-- Main content -->
    <main class="flex-grow-1 w-100 bg-white overflow-auto">
        <div class="container-fluid py-5 px-3 px-md-5">
            <h4 class="text-center mb-4 mt-5 fs-5 fs-md-4">Product Listing Table</h4>

            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover">
                    <thead class="text-center fs-6 fs-md-6">
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Discount (%)</th>
                            <th>Category</th>
                            <th>Created At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-center align-middle fs-6">
                        @forelse($products as $index => $product)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>
                                    @if($product->image)
                                        <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image" width="60" height="60">
                                    @else
                                        <span class="text-muted">No Image</span>
                                    @endif
                                </td>
                                <td>{{ Str::limit($product->title, 30) }}</td>
                                <td>{{ Str::limit($product->description, 40) }}</td>
                                <td>{{ $product->price }} PKR</td>
                                <td>{{ $product->discount ?? 0 }}%</td>
                                <td>{{ $product->category ?? 'N/A' }}</td>
                                <td>{{ \Carbon\Carbon::parse($product->created_at)->format('d M Y') }}</td>
                                <td class="d-flex flex-column flex-md-row gap-1 justify-content-center">
                                    <a href="{{ route('products.view', $product->id) }}" class="btn btn-sm btn-primary">View</a>
                                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <form action="{{ route('products.delete', $product->id) }}" method="POST" class="mb-0">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="9" class="text-center">No products found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="d-flex justify-content-center mt-3">
                {{ $products->links() }}
            </div>
        </div>
    </main>
</div>

            
@endsection
