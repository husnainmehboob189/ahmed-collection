@extends("Frontend.layouts.main")

@section("mains-container")
  <!--  -->
  <div class="banner_bg_main">
  </div>
  <!-- For LARGE SCREENS ONLY -->
  <div class="container d-none d-lg-block">
    <div class="row text-center">
      <!-- Each image -->
      <div class="col-lg-1-7 mb-2 mt-5">
       <img src="{{ asset('frontend/img/13_165ba1ca-c2ff-444f-8ca2-51d99c7bdf82_940x.webp') }}" class="img-fluid rounded-circle" alt="">

      </div>

      <div class="col-lg-1-7 mb-2 mt-5">
        <img src="{{ asset('frontend/img/18_cfa0e9a2-28aa-495b-ae3b-fcab75dfffbc_940x.webp') }}" class="img-fluid rounded-circle" alt="">

      </div>

      <div class="col-lg-1-7 mb-2 mt-5">
        <img src=" {{ asset('frontend/img/19_8dff739e-af9c-411f-b91f-e17372894704_940x.webp') }}" class="img-fluid rounded-circle" alt="">

      </div>

      <div class="col-lg-1-7 mb-2 mt-5">
        <img src="  {{ asset('frontend/img/14_0be2b615-4481-4ed0-8532-60f57093c5c2_940x.webp') }}" class="img-fluid rounded-circle" alt="">

      </div>

      <div class="col-lg-1-7 mb-2  mt-5">
       <img src="{{ asset('frontend/img/16_96cb2b89-3f47-4584-bc6d-a6a4f726571a_940x.webp') }}" class="img-fluid rounded-circle" alt="">
      </div>

      <div class="col-lg-1-7 mb-2 mt-5">
        <img src="{{ asset('frontend/img/New_Arrivals_1000_x_1200_px_8f8fdfdb-cc56-478f-b610-94e080062b99_940x.webp') }}"
     class="img-fluid rounded-circle" alt="">


      </div>

      <div class="col-lg-1-7 mb-2 mt-5">
       <img src="{{ asset('frontend/img/17_905f8aec-03bf-45dd-9419-749ad98e6f7e_940x.webp') }}" class="img-fluid rounded-circle" alt="">


      </div>
      <!-- Repeat for all 7 images -->
    </div>
  </div>

  <!-- For MEDIUM and SMALL SCREENS ONLY -->
  <div class="container d-block d-lg-none ">
    <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">

        <!-- Slide 1 (showing 2 or 3 images in one slide) -->
        <div class="carousel-item active">
          <div class="d-flex justify-content-center gap-3">
            <div class="text-center">
              <img src="{{ asset('frontend/img/14_0be2b615-4481-4ed0-8532-60f57093c5c2_940x.webp') }}"
               class="img-fluid rounded-circle" alt="" style="width: 150px;">
            </div>
            <div class="text-center">
             <img src="{{ asset('frontend/img/16_96cb2b89-3f47-4584-bc6d-a6a4f726571a_940x.webp') }}"
            class="img-fluid rounded-circle" alt="" style="width: 150px;">
            </div>

            <div class="text-center">
              <img src=" {{ asset('frontend/img/16_96cb2b89-3f47-4584-bc6d-a6a4f726571a_940x.webp') }}" class="img-fluid rounded-circle"
                alt="" style="width: 150px;">
            </div>

            <div class="text-center">
              <img src="{{ asset('frontend/img/16_96cb2b89-3f47-4584-bc6d-a6a4f726571a_940x.webp') }}" class="img-fluid rounded-circle"
                alt="" style="width: 150px;">
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
          <div class="d-flex justify-content-center gap-3">
            <div class="text-center">
              <img src=" {{ asset('frontend/img/17_905f8aec-03bf-45dd-9419-749ad98e6f7e_940x.webp') }}" class="img-fluid rounded-circle"
                alt="" style="width: 150px;">
            </div>
            <div class="text-center">
              <img src="{{ asset('frontend/img/13_165ba1ca-c2ff-444f-8ca2-51d99c7bdf82_940x.webp') }}" class="img-fluid rounded-circle"
                alt="" style="width: 150px;">
            </div>

            <div class="text-center">
              <img src="{{ asset('frontend/img/13_165ba1ca-c2ff-444f-8ca2-51d99c7bdf82_940x.webp') }}" class="img-fluid rounded-circle"
                alt="" style="width: 150px;">
            </div>

            <div class="text-center">
              <img src="{{ asset('frontend/img/13_165ba1ca-c2ff-444f-8ca2-51d99c7bdf82_940x.webp') }}" class="img-fluid rounded-circle"
                alt="" style="width: 150px;">
            </div>

          </div>
        </div>

        <!-- Add more slides as needed... -->

      </div>

      <!-- Carousel Controls -->
      <!-- Carousel Indicators -->


    </div>
  </div>

  <!--  -->

  <section>
    <div class="container">

      <div class="text-start my-5 px-3">
        <h3 class="title scroll-trigger animate--slide-in" style="padding-bottom: 0px;">
          <span class="text">Top Picks</span>
        </h3>
      </div>



      <div class="row gy-4">

        <!-- Product 1 -->

        <div class="col-12 col-sm-6 col-lg-3">
          <div class="card product-card">

            <!-- Image + icon wrapper -->
            <div class="product-image-wrapper">
              <span class="sale-badge">Sale 50%</span>

              <!-- Eye icon on hover -->
              <a href="{{ asset('frontend/img/WhatsApp Image 2025-07-14 at 18.26.01_b2e00cf3.jpg') }}" class="hover-icon-link"
                target="_blank" title="Quick View">
                <i class="fas fa-eye"></i>
              </a>

              <!-- Product Image -->
              <img src="{{ asset('frontend/img/WhatsApp Image 2025-07-14 at 18.26.01_b2e00cf3.jpg') }}" alt="Product 1"
                class="product-image">
            </div>

            <!-- Product Info -->
            <div class="card-body px-0 pt-3">
              <h6 class="product-title">Mohagni - 3PC Lawn Embroidered Suit - BFU0073</h6>
            </div>
          </div>
        </div>
        <!-- Product 2 -->

        <div class="col-12 col-sm-6 col-lg-3">
          <div class="card product-card">

            <!-- Image + icon wrapper -->
            <div class="product-image-wrapper">
              <span class="sale-badge">Sale 50%</span>

              <!-- Eye icon on hover -->
              <a href="{{ asset('frontend/img/WhatsApp Image 2025-07-14 at 18.26.01_b2e00cf3.jpg') }}" class="hover-icon-link" target="_blank" title="Quick View">
                <i class="fas fa-eye"></i>
              </a>

              <!-- Product Image -->
              <img src="{{ asset('frontend/img/WhatsApp Image 2025-07-14 at 18.26.01_b2e00cf3.jpg') }}" alt="Product 1" class="product-image">
            </div>

            <!-- Product Info -->
            <div class="card-body px-0 pt-3">
              <h6 class="product-title">Mohagni - 3PC Lawn Embroidered Suit - BFU0073</h6>
            </div>
          </div>
        </div>
        <!-- Product 3 -->

        <div class="col-12 col-sm-6 col-lg-3">
          <div class="card product-card">

            <!-- Image + icon wrapper -->
            <div class="product-image-wrapper">
              <span class="sale-badge">Sale 50%</span>

              <!-- Eye icon on hover -->
              <a href="{{ asset('frontend/img/WhatsApp Image 2025-07-14 at 18.26.01_b2e00cf3.jpg') }}" class="hover-icon-link" target="_blank" title="Quick View">
                <i class="fas fa-eye"></i>
              </a>

              <!-- Product Image -->
              <img src="{{ asset('frontend/img/WhatsApp Image 2025-07-14 at 18.26.01_b2e00cf3.jpg') }}" alt="Product 1" class="product-image">
            </div>

            <!-- Product Info -->
            <div class="card-body px-0 pt-3">
              <h6 class="product-title">Mohagni - 3PC Lawn Embroidered Suit - BFU0073</h6>
            </div>
          </div>
        </div>

        <!-- Product 4 -->

        <div class="col-12 col-sm-6 col-lg-3">
          <div class="card product-card">

            <!-- Image + icon wrapper -->
            <div class="product-image-wrapper">
              <span class="sale-badge">Sale 50%</span>

              <!-- Eye icon on hover -->
              <a href="{{ asset('frontend/img/WhatsApp Image 2025-07-14 at 18.26.01_b2e00cf3.jpg') }}" class="hover-icon-link" target="_blank" title="Quick View">
                <i class="fas fa-eye"></i>
              </a>

              <!-- Product Image -->
              <img src="{{ asset('frontend/img/WhatsApp Image 2025-07-14 at 18.26.01_b2e00cf3.jpg') }}" alt="Product 1" class="product-image">
            </div>

            <!-- Product Info -->
            <div class="card-body px-0 pt-3">
              <h6 class="product-title">Mohagni - 3PC Lawn Embroidered Suit - BFU0073</h6>
            </div>
          </div>
        </div>

      </div>
      <div class="row gy-4">

        <!-- Product 1 -->

        <div class="col-12 col-sm-6 col-lg-3">
          <div class="card product-card">

            <!-- Image + icon wrapper -->
            <div class="product-image-wrapper">
              <span class="sale-badge">Sale 50%</span>

              <!-- Eye icon on hover -->
              <a href="{{ asset('frontend/img/WhatsApp Image 2025-07-14 at 18.26.01_b2e00cf3.jpg') }}" class="hover-icon-link" target="_blank" title="Quick View">
                <i class="fas fa-eye"></i>
              </a>

              <!-- Product Image -->
              <img src="{{ asset('frontend/img/WhatsApp Image 2025-07-14 at 18.26.01_b2e00cf3.jpg') }}" alt="Product 1" class="product-image">
            </div>

            <!-- Product Info -->
            <div class="card-body px-0 pt-3">
              <h6 class="product-title">Mohagni - 3PC Lawn Embroidered Suit - BFU0073</h6>
            </div>
          </div>
        </div>
        <!-- Product 2 -->

        <div class="col-12 col-sm-6 col-lg-3">
          <div class="card product-card">

            <!-- Image + icon wrapper -->
            <div class="product-image-wrapper">
              <span class="sale-badge">Sale 50%</span>

              <!-- Eye icon on hover -->
              <a href="{{ asset('frontend/img/WhatsApp Image 2025-07-14 at 18.26.01_b2e00cf3.jpg') }}" class="hover-icon-link" target="_blank" title="Quick View">
                <i class="fas fa-eye"></i>
              </a>

              <!-- Product Image -->
              <img src="{{ asset('frontend/img/WhatsApp Image 2025-07-14 at 18.26.01_b2e00cf3.jpg') }}" alt="Product 1" class="product-image">
            </div>

            <!-- Product Info -->
            <div class="card-body px-0 pt-3">
              <h6 class="product-title">Mohagni - 3PC Lawn Embroidered Suit - BFU0073</h6>
            </div>
          </div>
        </div>

        <!-- Product 3 -->

        <div class="col-12 col-sm-6 col-lg-3">
          <div class="card product-card">

            <!-- Image + icon wrapper -->
            <div class="product-image-wrapper">
              <span class="sale-badge">Sale 50%</span>

              <!-- Eye icon on hover -->
              <a href="{{ asset('frontend/img/WhatsApp Image 2025-07-14 at 18.26.01_b2e00cf3.jpg') }}" class="hover-icon-link" target="_blank" title="Quick View">
                <i class="fas fa-eye"></i>
              </a>

              <!-- Product Image -->
              <img src="{{ asset('frontend/img/WhatsApp Image 2025-07-14 at 18.26.01_b2e00cf3.jpg') }}" alt="Product 1" class="product-image">
            </div>

            <!-- Product Info -->
            <div class="card-body px-0 pt-3">
              <h6 class="product-title">Mohagni - 3PC Lawn Embroidered Suit - BFU0073</h6>
            </div>
          </div>
        </div>
        <!-- Product 4 -->

        <div class="col-12 col-sm-6 col-lg-3">
          <div class="card product-card">

            <!-- Image + icon wrapper -->
            <div class="product-image-wrapper">
              <span class="sale-badge">Sale 50%</span>

              <!-- Eye icon on hover -->
              <a href="{{ asset('frontend/img/WhatsApp Image 2025-07-14 at 18.26.01_b2e00cf3.jpg') }}" class="hover-icon-link" target="_blank" title="Quick View">
                <i class="fas fa-eye"></i>
              </a>

              <!-- Product Image -->
              <img src="{{ asset('frontend/img/WhatsApp Image 2025-07-14 at 18.26.01_b2e00cf3.jpg') }}" alt="Product 1" class="product-image">
            </div>

            <!-- Product Info -->
            <div class="card-body px-0 pt-3">
              <h6 class="product-title">Mohagni - 3PC Lawn Embroidered Suit - BFU0073</h6>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>
  <section>
    <div class="container">
      <div class="text-start my-5 px-3">
        <h3 class="title scroll-trigger animate--slide-in" style="padding-bottom: 0px;">
          <span class="text">Gents</span>
        </h3>
      </div>
      <div class="row gy-4">

        <!-- Product 1 -->

        <div class="col-12 col-sm-6 col-lg-3">
          <div class="card product-card">

            <!-- Image + icon wrapper -->
            <div class="product-image-wrapper">
              <span class="sale-badge">Sale 50%</span>

              <!-- Eye icon on hover -->
              <a href="detail.html" class="hover-icon-link" target="_blank" title="Quick View">
                <i class="fas fa-eye"></i>
              </a>

              <img src="{{ asset('frontend/img/img111.webp')}}" alt="Product 1" class="product-image">
            </div>

            <!-- Product Info -->
            <div class="card-body px-0 pt-3">
              <h6 class="product-title">2 Piece - Naqsh Suit - 42508147</h6>
            </div>
          </div>
        </div>

        <!-- Product 2 -->

        <div class="col-12 col-sm-6 col-lg-3">
          <div class="card product-card">

            <!-- Image + icon wrapper -->
            <div class="product-image-wrapper">
              <span class="sale-badge">Sale 50%</span>

              <!-- Eye icon on hover -->
              <a href="detail.html" class="hover-icon-link" target="_blank" title="Quick View">
                <i class="fas fa-eye"></i>
              </a>

              <!-- Product Image -->
              <img src="{{ asset('frontend/img/img112.webp')}}" alt="Product 1" class="product-image">
            </div>

            <!-- Product Info -->
            <div class="card-body px-0 pt-3">
              <h6 class="product-title">2 Piece - Naqsh Suit - 42407056</h6>
            </div>
          </div>
        </div>

        <!-- Product 3 -->

        <div class="col-12 col-sm-6 col-lg-3">
          <div class="card product-card">

            <!-- Image + icon wrapper -->
            <div class="product-image-wrapper">
              <span class="sale-badge">Sale 50%</span>

              <!-- Eye icon on hover -->
              <a href="detail.html" class="hover-icon-link" target="_blank" title="Quick View">
                <i class="fas fa-eye"></i>
              </a>

              <!-- Product Image -->
              <img src="{{ asset('frontend/img/img114.webp')}}" alt="Product 1" class="product-image">
            </div>

            <!-- Product Info -->
            <div class="card-body px-0 pt-3">
              <h6 class="product-title">Cotton Suit - Slim Fit</h6>
            </div>
          </div>
        </div>
        <!-- Product 4 -->

        <div class="col-12 col-sm-6 col-lg-3">
          <div class="card product-card">

            <!-- Image + icon wrapper -->
            <div class="product-image-wrapper">
              <span class="sale-badge">Sale 50%</span>

              <!-- Eye icon on hover -->
              <a href="detail.html" class="hover-icon-link" target="_blank" title="Quick View">
                <i class="fas fa-eye"></i>
              </a>

              <!-- Product Image -->
              <img src="{{ asset('frontend/img/img115.webp')}}" alt="Product 1" class="product-image">
            </div>

            <!-- Product Info -->
            <div class="card-body px-0 pt-3">
              <h6 class="product-title">Graphite Grey Styling Suit SK-PSD24-014</h6>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section>
    <div class="container">

      <div class="text-start my-5 px-3">
        <h3 class="title scroll-trigger animate--slide-in" style="padding-bottom: 0px;">
          <span class="text">New Article</span>
        </h3>
      </div>



      <div class="row gy-4">

        <!-- Product 1 -->

        <div class="col-12 col-sm-6 col-lg-3">
          <div class="card product-card">

            <!-- Image + icon wrapper -->
            <div class="product-image-wrapper">
              <span class="sale-badge">Sale 50%</span>

              <!-- Eye icon on hover -->
              <a href="images/WhatsApp Image 2025-07-14 at 18.26.01_b2e00cf3.jpg" class="hover-icon-link"
                target="_blank" title="Quick View">
                <i class="fas fa-eye"></i>
              </a>

              <!-- Product Image -->
              <img src="{{ asset('frontend/img/WhatsApp Image 2025-07-14 at 18.26.01_b2e00cf3.jpg')}}" alt="Product 1"
                class="product-image">
            </div>

            <!-- Product Info -->
            <div class="card-body px-0 pt-3">
              <h6 class="product-title">Mohagni - 3PC Lawn Embroidered Suit - BFU0073</h6>
            </div>
          </div>
        </div>
        <!-- Product 2 -->

        <div class="col-12 col-sm-6 col-lg-3">
          <div class="card product-card">

            <!-- Image + icon wrapper -->
            <div class="product-image-wrapper">
              <span class="sale-badge">Sale 50%</span>

              <!-- Eye icon on hover -->
              <a href="images/img 1.webp" class="hover-icon-link" target="_blank" title="Quick View">
                <i class="fas fa-eye"></i>
              </a>

              <!-- Product Image -->
              <img src="{{ asset('frontend/img/img 1.webp')}}" alt="Product 1" class="product-image">
            </div>

            <!-- Product Info -->
            <div class="card-body px-0 pt-3">
              <h6 class="product-title">Mohagni - 3PC Lawn Embroidered Suit - BFU0073</h6>
            </div>
          </div>
        </div>
        <!-- Product 3 -->

        <div class="col-12 col-sm-6 col-lg-3">
          <div class="card product-card">

            <!-- Image + icon wrapper -->
            <div class="product-image-wrapper">
              <span class="sale-badge">Sale 50%</span>

              <!-- Eye icon on hover -->
              <a href="images/img2.webp" class="hover-icon-link" target="_blank" title="Quick View">
                <i class="fas fa-eye"></i>
              </a>

              <!-- Product Image -->
              <img src="{{ asset('frontend/img/img2.webp')}}" alt="Product 1" class="product-image">
            </div>

            <!-- Product Info -->
            <div class="card-body px-0 pt-3">
              <h6 class="product-title">Mohagni - 3PC Lawn Embroidered Suit - BFU0073</h6>
            </div>
          </div>
        </div>

        <!-- Product 4 -->

        <div class="col-12 col-sm-6 col-lg-3">
          <div class="card product-card">

            <!-- Image + icon wrapper -->
            <div class="product-image-wrapper">
              <span class="sale-badge">Sale 50%</span>

              <!-- Eye icon on hover -->
              <a href="images/img3.webp" class="hover-icon-link" target="_blank" title="Quick View">
                <i class="fas fa-eye"></i>
              </a>

              <!-- Product Image -->
              <img src="{{ asset('frontend/img/img3.webp')}}" alt="Product 1" class="product-image">
            </div>

            <!-- Product Info -->
            <div class="card-body px-0 pt-3">
              <h6 class="product-title">Mohagni - 3PC Lawn Embroidered Suit - BFU0073</h6>
            </div>
          </div>
        </div>

      </div>
      <div class="row gy-4">

        <!-- Product 1 -->

        <div class="col-12 col-sm-6 col-lg-3">
          <div class="card product-card">

            <!-- Image + icon wrapper -->
            <div class="product-image-wrapper">
              <span class="sale-badge">Sale 50%</span>

              <!-- Eye icon on hover -->
              <a href="images/img4.webp" class="hover-icon-link" target="_blank" title="Quick View">
                <i class="fas fa-eye"></i>
              </a>

              <!-- Product Image -->
              <img src="{{ asset('frontend/img/img4.webp')}}" alt="Product 1" class="product-image">
            </div>

            <!-- Product Info -->
            <div class="card-body px-0 pt-3">
              <h6 class="product-title">Mohagni - 3PC Lawn Embroidered Suit - BFU0073</h6>
            </div>
          </div>
        </div>
        <!-- Product 2 -->

        <div class="col-12 col-sm-6 col-lg-3">
          <div class="card product-card">

            <!-- Image + icon wrapper -->
            <div class="product-image-wrapper">
              <span class="sale-badge">Sale 50%</span>

              <!-- Eye icon on hover -->
              <a href="images/img5.webp" class="hover-icon-link" target="_blank" title="Quick View">
                <i class="fas fa-eye"></i>
              </a>

              <!-- Product Image -->
              <img src="{{ asset('frontend/img/img5.webp')}}" alt="Product 1" class="product-image">
            </div>

            <!-- Product Info -->
            <div class="card-body px-0 pt-3">
              <h6 class="product-title">Mohagni - 3PC Lawn Embroidered Suit - BFU0073</h6>
            </div>
          </div>
        </div>

        <!-- Product 3 -->

        <div class="col-12 col-sm-6 col-lg-3">
          <div class="card product-card">

            <!-- Image + icon wrapper -->
            <div class="product-image-wrapper">
              <span class="sale-badge">Sale 50%</span>

              <!-- Eye icon on hover -->
              <a href="images/img6.webp" class="hover-icon-link" target="_blank" title="Quick View">
                <i class="fas fa-eye"></i>
              </a>

              <!-- Product Image -->
              <img src="{{ asset('frontend/img/img6.webp')}}" alt="Product 1" class="product-image">
            </div>

            <!-- Product Info -->
            <div class="card-body px-0 pt-3">
              <h6 class="product-title">Mohagni - 3PC Lawn Embroidered Suit - BFU0073</h6>
            </div>
          </div>
        </div>
        <!-- Product 4 -->

        <div class="col-12 col-sm-6 col-lg-3">
          <div class="card product-card">

            <!-- Image + icon wrapper -->
            <div class="product-image-wrapper">
              <span class="sale-badge">Sale 50%</span>

              <!-- Eye icon on hover -->
              <a href="images/img7.webp" class="hover-icon-link" target="_blank" title="Quick View">
                <i class="fas fa-eye"></i>
              </a>

              <!-- Product Image -->
              <img src="{{ asset('frontend/img/img7.webp')}}" alt="Product 1" class="product-image">
            </div>

            <!-- Product Info -->
            <div class="card-body px-0 pt-3">
              <h6 class="product-title">Mohagni - 3PC Lawn Embroidered Suit - BFU0073</h6>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="text-start my-5 px-3">
        <h3 class="title scroll-trigger animate--slide-in" style="padding-bottom: 0px;">
          <span class="text">Gents</span>
        </h3>
      </div>
      <div class="row gy-4">

        <!-- Product 1 -->

        <div class="col-12 col-sm-6 col-lg-3">
          <div class="card product-card">

            <!-- Image + icon wrapper -->
            <div class="product-image-wrapper">
              <span class="sale-badge">Sale 50%</span>

              <!-- Eye icon on hover -->
              <a href="detail.blade.php" class="hover-icon-link" target="_blank" title="Quick View">
                <i class="fas fa-eye"></i>
              </a>

              <!-- Product Image -->
              <img src="{{ asset('frontend/img/img111.webp')}}" alt="Product 1" class="product-image">
            </div>

            <!-- Product Info -->
            <div class="card-body px-0 pt-3">
              <h6 class="product-title">2 Piece - Naqsh Suit - 42508147</h6>
            </div>
          </div>
        </div>

        <!-- Product 2 -->

        <div class="col-12 col-sm-6 col-lg-3">
          <div class="card product-card">

            <!-- Image + icon wrapper -->
            <div class="product-image-wrapper">
              <span class="sale-badge">Sale 50%</span>

              <!-- Eye icon on hover -->
              <a href="detail.html" class="hover-icon-link" target="_blank" title="Quick View">
                <i class="fas fa-eye"></i>
              </a>

              <!-- Product Image -->
              <img src="{{ asset('frontend/img/img112.webp')}}" alt="Product 1" class="product-image">
            </div>

            <!-- Product Info -->
            <div class="card-body px-0 pt-3">
              <h6 class="product-title">2 Piece - Naqsh Suit - 42407056</h6>
            </div>
          </div>
        </div>

        <!-- Product 3 -->

        <div class="col-12 col-sm-6 col-lg-3">
          <div class="card product-card">

            <!-- Image + icon wrapper -->
            <div class="product-image-wrapper">
              <span class="sale-badge">Sale 50%</span>

              <!-- Eye icon on hover -->
              <a href="detail.html" class="hover-icon-link" target="_blank" title="Quick View">
                <i class="fas fa-eye"></i>
              </a>

              <!-- Product Image -->
              <img src="{{ asset('frontend/img/img114.webp')}}" alt="Product 1" class="product-image">
            </div>

            <!-- Product Info -->
            <div class="card-body px-0 pt-3">
              <h6 class="product-title">Cotton Suit - Slim Fit</h6>
            </div>
          </div>
        </div>
        <!-- Product 4 -->

        <div class="col-12 col-sm-6 col-lg-3">
          <div class="card product-card">

            <!-- Image + icon wrapper -->
            <div class="product-image-wrapper">
              <span class="sale-badge">Sale 50%</span>

              <!-- Eye icon on hover -->
              <a href="detail.blade.php" class="hover-icon-link" target="_blank" title="Quick View">
                <i class="fas fa-eye"></i>
              </a>

              <!-- Product Image -->
              <img src="{{ asset('frontend/img/img115.webp')}}" alt="Product 1" class="product-image">
            </div>

            <!-- Product Info -->
            <div class="card-body px-0 pt-3">
              <h6 class="product-title">Graphite Grey Styling Suit SK-PSD24-014</h6>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section>
    <!-- Include Bootstrap CSS and JS -->

    <div class="container">
      <h4 class="text-center mt-5">DISCOVER NEW STYLE</h4>

      <!-- Nav Tabs -->
      <ul class="nav nav-tabs justify-content-center mb-4 mt-5" id="styleTab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="afsana-tab" data-bs-toggle="tab" data-bs-target="#afsana" type="button"
            role="tab">ladies</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="kahani-tab" data-bs-toggle="tab" data-bs-target="#kahani" type="button"
            role="tab">Gents</button>
        </li>
       
      </ul>

      <!-- Tab Content -->
      <div class="tab-content" id="styleTabContent">
        <!-- AFSANA Tab -->
        <div class="tab-pane fade show active" id="afsana" role="tabpanel">
          <div class="row g-4">
            <!-- Card 1 -->
            <div class="col-md-4 col-12">
              <div class="card h-100">
                <div class="position-relative">
                  <img src="{{ asset('frontend/img/img22.webp')}}" class="card-img-top" alt="...">
                  <span class="badge bg-danger position-absolute top-0 end-0 m-2">30% OFF</span>
                </div>
                <div class="card-body text-center">
                  <p class="card-text">3PC - Embroidered Lawn Suit</p>
                  <small><s>PKR 14,995</s></small><br>
                  <span class="fw-bold text-danger">PKR 10,497</span>
                </div>
              </div>
            </div>

            <!-- Repeat this block for more cards -->
            <!-- Card 2 -->
            <div class="col-md-4 col-12">
              <div class="card h-100">
                <div class="position-relative">
                  <img src="{{ asset('frontend/img/img23.webp')}}" class="card-img-top" alt="...">
                  <span class="badge bg-danger position-absolute top-0 end-0 m-2">30% OFF</span>
                </div>
                <div class="card-body text-center">
                  <p class="card-text">Embroidered Viscose Long Shirt</p>
                  <small><s>PKR 9,995</s></small><br>
                  <span class="fw-bold text-danger">PKR 6,997</span>
                </div>
              </div>
            </div>

            <!-- Add more cards as needed -->
            <div class="col-md-4 col-12">
              <div class="card h-100">
                <div class="position-relative">
                  <img src="{{ asset('frontend/img/img24.webp')}}" class="card-img-top" alt="...">
                  <span class="badge bg-danger position-absolute top-0 end-0 m-2">30% OFF</span>
                </div>
                <div class="card-body text-center">
                  <p class="card-text">Embroidered Viscose Long Shirt</p>
                  <small><s>PKR 9,995</s></small><br>
                  <span class="fw-bold text-danger">PKR 6,997</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- KAHANI Tab -->
        <div class="tab-pane fade" id="kahani" role="tabpanel">
          <div class="text-center py-5">
            <div class="row gy-4">

        <!-- Product 1 -->

        <div class="col-12 col-sm-6 col-lg-4">
          <div class="card product-card">

            <!-- Image + icon wrapper -->
            <div class="product-image-wrapper">
              <span class="sale-badge">Sale 50%</span>

              <!-- Eye icon on hover -->
              <a href="images/img111.webp" class="hover-icon-link" target="_blank" title="Quick View">
                <i class="fas fa-eye"></i>
              </a>

              <!-- Product Image -->
              <img src="{{ asset('frontend/img/img111.webp')}}" alt="Product 1" class="product-image">
            </div>

            <!-- Product Info -->
            <div class="card-body px-0 pt-3">
              <h6 class="product-title">2 Piece - Naqsh Suit - 42508147</h6>
            </div>
          </div>
        </div>

        <!-- Product 2 -->

        <div class="col-12 col-sm-6 col-lg-4">
          <div class="card product-card">

            <!-- Image + icon wrapper -->
            <div class="product-image-wrapper">
              <span class="sale-badge">Sale 50%</span>

              <!-- Eye icon on hover -->
              <a href="images/img112.webp" class="hover-icon-link" target="_blank" title="Quick View">
                <i class="fas fa-eye"></i>
              </a>

              <!-- Product Image -->
              <img src="{{ asset('frontend/img/img112.webp')}}" alt="Product 1" class="product-image">
            </div>

            <!-- Product Info -->
            <div class="card-body px-0 pt-3">
              <h6 class="product-title">2 Piece - Naqsh Suit - 42407056</h6>
            </div>
          </div>
        </div>

        <!-- Product 3 -->

        <div class="col-12 col-sm-6 col-lg-4">
          <div class="card product-card">

            <!-- Image + icon wrapper -->
            <div class="product-image-wrapper">
              <span class="sale-badge">Sale 50%</span>

              <!-- Eye icon on hover -->
              <a href="images/img114.webp" class="hover-icon-link" target="_blank" title="Quick View">
                <i class="fas fa-eye"></i>
              </a>

              <!-- Product Image -->
              <img src="{{ asset('frontend/img/img114.webp')}}" alt="Product 1" class="product-image">
            </div>

            <!-- Product Info -->
            <div class="card-body px-0 pt-3">
              <h6 class="product-title">Cotton Suit - Slim Fit</h6>
            </div>
          </div>
        </div>
      </div>
          </div>
        </div>
      </div>
    </div>

  </section>


  @endsection