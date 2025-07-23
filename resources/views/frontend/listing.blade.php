
 @extends('frontend.layout.main')
@section('main-container')
<div class="container py-5" style="max-width: 1050px; margin-left:270px;">
    <h4 class="text-center mb-3 mt-5">Product Listing Table</h4>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped table-hover">
        <thead class="text-center">
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
        <tbody class="text-center align-middle">
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
                    <td class="d-flex gap-1 justify-content-center">
                        <a href="{{ route('products.view', $product->id) }}" class="btn btn-sm btn-primary">View</a>
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('products.delete', $product->id) }}" method="POST">
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

    <div class="d-flex justify-content-center">
        {{ $products->links() }}
    </div>
</div>


@endsection
