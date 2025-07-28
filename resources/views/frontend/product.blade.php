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
  .upload-box {
    cursor: pointer;
    background-color: #f8f9fa;
    border: 2px dashed #dee2e6;
    padding: 1.5rem;
    transition: background-color 0.3s ease;
    min-height: 200px;
  }

  .upload-box:hover {
    background-color: #e9ecef;
  }

  .upload-box img {
    max-width: 100%;
    max-height: 150px;
    object-fit: contain;
  }
  @media (min-width: 1024px) {
    .responsive-padding {
      padding-left:200px !important;
    }
  }

  @media (min-width: 769px) {
    .responsive-padding {
      padding-left: 250px;
    }
  }
  </style>
 <div class="py-5">
  <div class="card shadow-sm mt-4 update-product-container mx-auto ml-0" style="width: 800px;margin-right:430px !important;">
    <div class="card-body mt-4" style="">
      <h2 class="text-center mb-4 mt-3">Add New Product</h2>

      <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
        <!-- Image Upload -->
        <div class="mb-4">
          <label for="productImage" class="form-label w-100">
            <div class="upload-box text-center p-3 border rounded position-relative" id="uploadBox">
              <i class="bi bi-upload fs-1" id="uploadIcon"></i>
              <p class="mt-2 mb-0" id="uploadText">Click to upload or drag and drop</p>
              <small id="fileName" class="text-muted d-block">No file selected</small>

              <!-- Image Preview inside upload box -->
              <img id="previewImage" src="#" alt="Preview" class="img-fluid mt-2 d-none" style="max-height: 150px;">
            </div>
          </label>

          <input name="image" type="file" class="form-control d-none" id="productImage" accept="image/*">
        </div>

        <!-- Product Title -->
        <div class="mb-3">
          <label for="productTitle" class="form-label">Product Title</label>
          <input type="text" class="form-control" id="productTitle" placeholder="e.g. Men's T-Shirt" name="title">
        </div>

        <!-- Product description-->
        <div class="mb-3">
          <label for="productTitle" class="form-label">Product description</label>
          <input type="text" class="form-control" id="productTitle" placeholder="" name="description">
        </div>
        {{--        Category --}}
          <div class="mb-3">
              <label for="productPrice" class="form-label">Category</label>
              <select name="category" class="form-control">
                  @foreach($categories as $category)
                      <option value="{{ $category->name }}">{{ $category->name }}</option>
                  @endforeach
              </select>
          </div>
        <!-- Price -->
        <div class="mb-3">
          <label for="productPrice" class="form-label">Price ($)</label>
          <input type="number" class="form-control" id="productPrice" placeholder="e.g. 29.99" name="price">
        </div>

        <!-- Discount -->
        <div class="mb-4">
          <label for="productDiscount" class="form-label">Discount (%)</label>
          <input type="number" class="form-control" id="productDiscount" placeholder="e.g. 10" name="discount">
        </div>

        <!-- Submit Button -->
        <div class="text-center">
          <button type="submit" class="btn btn-primary px-4">Add Product</button>
        </div>
      </form>
    </div>
  </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

<script>
document.getElementById('productImage').addEventListener('change', function (event) {
  const file = event.target.files[0];

  if (file) {
    document.getElementById('fileName').textContent = file.name;

    const reader = new FileReader();
    reader.onload = function (e) {
      const previewImage = document.getElementById('previewImage');
      previewImage.src = e.target.result;
      previewImage.classList.remove('d-none');

      // Optionally hide icon and text
      document.getElementById('uploadIcon').style.display = 'none';
      document.getElementById('uploadText').style.display = 'none';
    };
    reader.readAsDataURL(file);
  }
});
</script>


@endsection
