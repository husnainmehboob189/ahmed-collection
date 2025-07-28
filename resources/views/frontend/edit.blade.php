@extends('frontend.layout.main')
@section('main-container')

<style>
    .upload-box {
        border: 2px dashed #ced4da;
        border-radius: 10px;
        text-align: center;
        padding: 30px;
        background-color: #fff;
        cursor: pointer;
        transition: background-color 0.2s ease;
    }

    .upload-box:hover {
        background-color: #f1f1f1;
    }

    .upload-box i {
        font-size: 48px;
        color: #6c757d;
    }
</style>

<div class="container py-5" style="max-width: 1050px; margin-left:270px;">
    <h3 class="mb-4 text-center mt-4">Edit Product</h3>
    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="productImage" class="form-label w-100">
            <div class="upload-box border rounded text-center py-4" id="uploadBox" style="cursor: pointer;">
                <img id="imagePreview"
                    src="{{ $product->image && file_exists(public_path('storage/' . $product->image)) ? asset('storage/' . $product->image) : '' }}"
                    alt="Product Image"
                    class="mb-2 d-block mx-auto {{ $product->image ? '' : 'd-none' }}"
                    width="100" height="100" style="object-fit: cover;" />

                <i class="bi bi-upload fs-3"></i>
                <p class="mt-2 mb-0">Click to upload or drag and drop</p>
                <small id="fileName" class="text-muted">
                    {{ $product->image ? basename($product->image) : 'No file selected' }}
                </small>
            </div>
        </label>

        <input name="image" type="file" class="form-control d-none" id="productImage" accept="image/*">

        </div>

        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" class="form-control" value="{{ $product->title }}" required>
        </div>

        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control" rows="3">{{ $product->description }}</textarea>
        </div>

        <div class="mb-3">
            <label>Price (PKR)</label>
            <input type="number" name="price" class="form-control" value="{{ $product->price }}" required>
        </div>

        <div class="mb-3">
            <label>Discount (%)</label>
            <input type="number" name="discount" class="form-control" value="{{ $product->discount }}">
        </div>

        <div class="mb-3">
            <!-- <label>Category</label> -->
            <div class="mb-3">
                <label for="productPrice" class="form-label">Category</label>
                <select name="category" class="form-control" required>
                    @foreach($categories as $category)
                        <option value="{{ $category->name }}" {{ (isset($product) && $product->category == $category->name) ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>

        </div>



        <div class="text-end">
            <button type="submit" class="btn btn-primary">Update Product</button>
        </div>
    </form>
</div>



<script>
    // ✅ Just handle preview logic only
document.getElementById('productImage').addEventListener('change', function () {
    const file = this.files[0];
    if (file) {
        document.getElementById('fileName').textContent = file.name;

        const reader = new FileReader();
        reader.onload = function (e) {
            const imagePreview = document.getElementById('imagePreview');
            imagePreview.src = e.target.result;
            imagePreview.classList.remove('d-none');
        };
        reader.readAsDataURL(file);
    }
});

</script>


@endsection