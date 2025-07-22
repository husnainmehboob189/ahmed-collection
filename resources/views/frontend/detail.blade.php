<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>3 Piece - Digital Printed Suit</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .thumb-img {
      width: 100%;
      cursor: pointer;
      margin-bottom: 10px;
      border: 1px solid #ddd;
    }
    .product-image {
      width: 100%;
      object-fit: cover;
    }
    .product-info h5 {
      font-weight: bold;
    }
    .product-info p {
      margin-bottom: 8px;
    }
    .price {
      font-size: 1.5rem;
      color: #000;
      font-weight: bold;
    }
  </style>
</head>
<body>


    <!-- Breadcrumb Section -->
<div class="bg-light border-bottom py-2">
  <div class="container d-flex justify-content-between align-items-center">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item"><a href="detail.html">UNSTITCHED</a></li>
        <li class="breadcrumb-item active" aria-current="page">3 Piece - Digital Printed Suit - 42502086</li>
      </ol>
    </nav>
    <div>
      <button class="btn btn-link text-dark"><i class="bi bi-chevron-left"></i></button>
      <button class="btn btn-link text-dark"><i class="bi bi-grid"></i></button>
      <button class="btn btn-link text-dark"><i class="bi bi-chevron-right"></i></button>
    </div>
  </div>
</div>


<div class="container py-5">
  <div class="row">
    <!-- Left Side Image Gallery -->
    <div class="col-md-6">
      <div class="row">
        <div class="col-3">
          <img src="images/img112.webp" class="thumb-img" onclick="changeImage('images/main.jpg')" alt="">
          <img src="images/img111.webp" class="thumb-img" onclick="changeImage('images/main2.jpg')" alt="">
          <img src="images/img113.webp" class="thumb-img" onclick="changeImage('images/main3.jpg')" alt="">
        </div>
        <div class="col-9">
          <img id="mainImage" src="images/img114.webp" class="product-image" alt="Main Product">
        </div>
      </div>
    </div>

    <!-- Right Side Product Detail -->
    <div class="col-md-6 product-info">
      <h2>3 Piece - Digital Printed Suit - 42502086</h2>
      <p class="price">Rs. 4,990.00</p>
      <p><strong>SKU:</strong> 001450620108</p>
      
      

      <p>Every print is a masterpiece of confidence with this digitally printed three-piece suit from our latest Summer Collection, crafted to reflect bold elegance, vibrant expression, and seasonal charm.</p>

      <h5>Product Detail:</h5>
      <p>Geometric & Floral Print Style Shirt with Dupatta & Trousers</p>

      <h5>SHIRT</h5>
      <p>Digital Printed Cambric Shirt: 3 Meter<br>
      <strong>Fabric:</strong> Cambric<br>
      <strong>Color:</strong> Dark Sky Blue</p>

      <h5>DUPATTA</h5>
      <p>Digital Printed Voile Dupatta: 2.5 Meter<br>
      <strong>Fabric:</strong> Voile<br>
      <strong>Color:</strong> Dark Sky Blue</p>

      <h5>TROUSER</h5>
      <p>Solid Cambric Trouser: 2.5 Meter<br>
      <strong>Fabric:</strong> Cambric<br>
      <strong>Color:</strong> Dark Sky Blue</p>

      <p class="text-muted"><em>Note:</em> Product color may slightly vary due to photographic lighting sources or your device settings.</p>
    </div>
  </div>
</div>

 @endsection

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
