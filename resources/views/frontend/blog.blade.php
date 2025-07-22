@extends("Frontend.layouts.main")

@section("mains-container")


<section class="container my-5">
    <h1>blogs</h1>
  <!-- Blog Card 1 -->
  <div class="row mb-4 p-3 shadow-sm bg-white">
    <div class="col-md-4">
      <img src="{{ asset('frontend/img/img2blog.webp') }}" class="img-fluid" alt="A Grand Eid with Khaadi">

    </div>
    <div class="col-md-8">
      <h5 class="fw-bold">A Grand Eid with Khaadi</h5>
      <p>
        Welcome to the Grand Eid Feast, where every vibe is embraced and every style is celebrated.
        Whether you’re feeling bold, charming or laid-back, get ready to bring your mood to the table
        with our festive Eid Collection.
      </p>
      <a href="#" class="text-primary">Read More</a>
    </div>
  </div>

  <!-- Blog Card 2 -->
  <div class="row mb-4 p-3 shadow-sm bg-white">
    <div class="col-md-4">
      <img src="{{ asset('frontend/img/imgblog.webp') }}" class="img-fluid" alt="Summer Dreaming with Javeriya">
    </div>
    <div class="col-md-8">
      <h5 class="fw-bold">Summer Dreaming with Javeriya</h5>
      <p>
        All roads lead to Paris, the city of lights and love, where adventure and style collide.
        Join Javeriya as she embarks on a dreamy summer journey, ticking off her bucket list with style.
      </p>
      <a href="#" class="text-primary">Read More</a>
    </div>
  </div>

  <!-- Blog Card 3 -->
  <div class="row mb-4 p-3 shadow-sm bg-white">
    <div class="col-md-4">
      <img src="{{ asset('frontend/img/imgblog3.jpg') }}" class="img-fluid" alt="Elevate Your Eid Style">
    </div>
    <div class="col-md-8">
      <h5 class="fw-bold">Elevate Your Eid Style</h5>
      <p>
        As Eid approaches, the excitement of buying Eid dresses fills the air, and the quest for the
        perfect Eid outfit begins. Whether you’re looking to elevate your everyday style or shine in
        festive gatherings, Khaadi’s printed and embroidered stitched
        <a href="#" class="text-decoration-underline">3-piece sets</a> offer something for everyone and every vibe this Eid.
      </p>
      <a href="#" class="text-primary">Read More</a>
    </div>
  </div>
</section>







  @endsection
