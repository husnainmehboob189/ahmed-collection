 <section>
    <footer class="text-black pt-5 pb-4 mt-5" style="background-color: #f6f6f8;;">
      <div class="container">
        <div class="row">

          <!-- Brand Info -->
          <div class="col-md-4">
            <img src="images/d8ff10cd-fa61-425f-9cd9-553548395382-removebg-preview.png" alt="Logo"
              style="height: 50px;">
            <div class="d-flex gap-3 mt-2 mb-3">
              <a href="#" class="footer-icon"><i class="fab fa-facebook-f"></i></a>
              <a href="#" class="footer-icon"><i class="fab fa-linkedin-in"></i></a>
              <a href="#" class="footer-icon"><i class="fab fa-twitter"></i></a>
              <a href="#" class="footer-icon"><i class="fab fa-instagram"></i></a>
            </div>
          </div>

          <!-- Links -->
          <div class="col-md-4">
            <h6 class="text-uppercase fw-semibold mb-3">Quick Links</h6>
            <ul class="list-unstyled">
              <li><a href="#" class="footer-link">Home</a></li>
              <li><a href="#" class="footer-link">Collections</a></li>
              <li><a href="#" class="footer-link">Brands</a></li>
              <li><a href="#" class="footer-link">About Us</a></li>
            </ul>
          </div>

          <!-- Contact Info -->
          <div class="col-md-4">
            <h6 class="text-uppercase fw-semibold mb-3">Contact</h6>
            <p class="mb-1"><i class="fas fa-phone me-2"></i>+92 555-325-4244</p>
            <p class="mb-1"><i class="fas fa-envelope me-2"></i>sehlvet@gmail.com</p>
            <p><i class="fas fa-globe me-2"></i>www.sehlvet.com</p>
          </div>

        </div>

        <!-- Divider -->
        <hr class="border-dark" />

        <!-- Bottom -->
        <div class="text-center small text-muted">
          <p class="small text-muted">© 2023 . All Rights Reserved.</p>
        </div>
      </div>
    </footer>
  </section>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      // Get all product cards
      const productCards = document.querySelectorAll('.product-card');

      // Create an Intersection Observer
      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('animated');
            observer.unobserve(entry.target); // Stop observing once animated
          }
        });
      }, {
        threshold: 0.1, // Trigger when 10% of card is visible
        rootMargin: '0px 0px -50px 0px' // Adjust trigger point slightly higher
      });

      // Observe each product card
      productCards.forEach(card => {
        observer.observe(card);
      });

      // For infinite scroll (if needed)
      window.addEventListener('scroll', function () {
        if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight - 500) {
          // Load more products here if needed
        }
      });
    });
  </script>
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>