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
 <div class="container py-5">
  <div class="card shadow-sm" >
    <div class="card-body responsive-padding mt-4">
      <h2 class="text-center mb-4 mt-3">Add New Categories</h2>

      <form>
        <!-- Image Upload -->
        <div class="mb-4">
          <label for="productImage" class="form-label w-100">
            <div class="upload-box" id="uploadBox">
              <i class="bi bi-upload"></i>
              <p class="mt-2 mb-0">Click to upload or drag and drop</p>
              <small id="fileName" class="text-muted">No file selected</small>
            </div>
          </label>
          <input type="file" class="form-control d-none" id="productImage" accept="image/*">
        </div>

        <!-- Product Title -->
        <div class="mb-3">
          <label for="productTitle" class="form-label">Product Title</label>
          <input type="text" class="form-control" id="productTitle" placeholder="">
        </div>

        <!-- Product description-->
        <div class="mb-3">
          <label for="productTitle" class="form-label">Product description</label>
          <input type="text" class="form-control" id="productTitle" placeholder="">
        </div>

        <!-- Price -->
        <div class="mb-3">
          <label for="productPrice" class="form-label">Price ($)</label>
          <input type="number" class="form-control" id="productPrice" placeholder="">
        </div>

        <!-- Discount -->
        <div class="mb-4">
          <label for="productDiscount" class="form-label">Discount (%)</label>
          <input type="number" class="form-control" id="productDiscount" placeholder="">
        </div>

        <!-- Category -->
<label for="productCategory" class="form-label">Category</label>
<select class="form-control" id="productCategory">
  <option selected disabled>Select Category</option>
  <option value="men">Men</option>
  <option value="women">Women</option>
</select>

        <!-- Submit Button -->
        <div class="text-center mt-4 mb-4">
          <button type="submit" class="btn btn-primary px-4">Add Product</button>
        </div>
      </form>
    </div>
  </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

<script>
  const fileInput = document.getElementById('productImage');
  const uploadBox = document.getElementById('uploadBox');
  const fileName = document.getElementById('fileName');

  uploadBox.addEventListener('click', () => fileInput.click());

  fileInput.addEventListener('change', () => {
    if (fileInput.files.length > 0) {
      fileName.textContent = fileInput.files[0].name;
    } else {
      fileName.textContent = "No file selected";
    }
  });

  uploadBox.addEventListener('dragover', (e) => {
    e.preventDefault();
    uploadBox.style.backgroundColor = '#e9ecef';
  });

  uploadBox.addEventListener('dragleave', () => {
    uploadBox.style.backgroundColor = '';
  });

  uploadBox.addEventListener('drop', (e) => {
    e.preventDefault();
    fileInput.files = e.dataTransfer.files;
    fileName.textContent = fileInput.files[0].name;
    uploadBox.style.backgroundColor = '';
  });
</script>

@endsection