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

<div class="py-5">
  <div class="card shadow-sm mt-4" style="margin-left: 23%; width: 1000px;">
    <div class="card-body mt-4">
      <h2 class="text-center mb-4 mt-3">Create New Blog</h2>

      @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
      @endif

      <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
        @csrf

       <!-- Image Upload -->
<div class="mb-4">
  <label for="blogImage" class="form-label w-100">
    <div class="upload-box" id="uploadBox">
      <i class="bi bi-upload"></i>
      <p class="mt-2 mb-0">Click to upload or drag and drop</p>
      <small id="fileName" class="text-muted">No file selected</small>
      <div class="mt-3">
        <img id="previewImage" src="#" alt="" style="display: none; max-width: 100%; height: auto; border-radius: 10px;" />
      </div>
    </div>
  </label>
  <input name="image" type="file" class="form-control d-none" id="blogImage" accept="image/*">
</div>


        <!-- Blog Title -->
        <div class="mb-3">
          <label class="form-label">Title</label>
          <input type="text" class="form-control" name="title" required>
        </div>

        <!-- Blog Description -->
        <div class="mb-3">
          <label class="form-label">Description</label>
          <textarea class="form-control" name="description" rows="5" required></textarea>
        </div>

        <!-- Submit Button -->
        <div class="text-center">
          <button type="submit" class="btn btn-primary px-4">Create Blog</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection


<script>
  const uploadBox = document.getElementById("uploadBox");
  const blogImage = document.getElementById("blogImage");
  const fileName = document.getElementById("fileName");
  const previewImage = document.getElementById("previewImage");

  // When the upload box is clicked, open file input
  // uploadBox.addEventListener("click", () => blogImage.click());

  // Show file name and image preview
  blogImage.addEventListener("change", () => {
    const file = blogImage.files[0];

    if (file) {
      fileName.textContent = file.name;

      const reader = new FileReader();
      reader.onload = (e) => {
        previewImage.src = e.target.result;
        previewImage.style.display = "block";
      };
      reader.readAsDataURL(file);
    } else {
      fileName.textContent = "No file selected";
      previewImage.style.display = "none";
    }
  });
</script>
