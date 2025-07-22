<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fashion Website Banner</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!-- Google Fonts -->
  <link rel="stylesheet" href="{{ asset('style.css') }}">


  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Brush+Script+MT&display=swap"
    rel="stylesheet">

</head>

<body>

  <!-- Navbar -->
  <div class="container-fluid px-0">
    <div class="bg-light">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light px-0">

          <!-- LOGO -->
          <a class="navbar-brand" href="#">
           <img src="{{ asset('frontend/img/d8ff10cd-fa61-425f-9cd9-553548395382-removebg-preview.png') }}" alt="Logo" style="height: 50px;">
          </a>

          <!-- TOGGLER for small screens -->
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <!-- Offcanvas Menu -->
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
            aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3 custom_menu">
                <li class="nav-item fw-bold"><a class="nav-link" href="#">Home</a></li>
                <li class="nav-item fw-bold"><a class="nav-link" href="#">About</a></li>
                <li class="nav-item fw-bold"><a class="nav-link" href="#">Service</a></li>
                <li class="nav-item fw-bold"><a class="nav-link" href="#">Today's Deals</a></li>
                <li class="nav-item fw-bold"><a class="nav-link" href="#">Customer Service</a></li>
              </ul>
            </div>
          </div>

        </nav>
      </div>
    </div>
  </div>
