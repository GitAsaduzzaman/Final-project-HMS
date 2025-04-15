<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hotel Automation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
      @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
      <style>
         
      </style>
    @endif
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container-fluid">
  <a class="navbar-brand me-5 fw-bold fs-3 h-font text-primary" href="{{ url('/') }}">Hotel Automation</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="#">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Rooms</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Facilites</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Contact us</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">About</a>
    </li>
    </ul>
  </div>
  </div>
  <header class="w-full lg:max-w-4xl max-w-[335px] text-sm mb-6 not-has-[nav]:hidden">
      @if (Route::has('login'))
        <nav class="flex items-center justify-end gap-4">
          @auth
            <a
              href="{{ url('/') }}"
              class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal"
            >
              Dashboard
            </a>
          @else
            <a
              href="{{ route('login') }}"
              class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal"
            >
              Log in
            </a>

            @if (Route::has('register'))
              <a
                href="{{ route('register') }}"
                class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                Register
              </a>
            @endif
          @endauth
        </nav>
      @endif
    </header>
</nav>
<style>
  swiper-container {
    width: 100%;
    height: 85%;
  }

  swiper-slide {
    background-position: top;
    background-size: cover;
  }

  swiper-slide img {
    display: block;
    width: 100%;
    height: 400px;
    object-fit: cover;
    border-radius: 10px;
    padding: 5px;
  }

  .custom-bg {
    background-color: #2ec1ac;
    transition: background-color 0.3s ease;
  }

  .custom-bg:hover {
    background-color: #279e8c;
  }
</style>
<swiper-container class="mySwiper" space-between="30" effect="fade"
autoplay="true" autoplay-delay="3000" autoplay-disable-on-interaction="false">
  <swiper-slide>
    <img src="{{ asset('images/rooms/2.png') }}" alt="Room Image 2">
  </swiper-slide>
  <swiper-slide>
    <img src="{{ asset('images/rooms/3.png') }}" alt="Room Image 3">
  </swiper-slide>
  <swiper-slide>
    <img src="{{ asset('images/rooms/4.png') }}" alt="Room Image 4">
  </swiper-slide>
  <swiper-slide>
    <img src="{{ asset('images/rooms/5.png') }}" alt="Room Image 5">
  </swiper-slide>
</swiper-container>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
<div class="container"> 
<div class="row"> 
<div class="col-lg-12 bg-white shadow p-4 rounded"> 
<h5 class="mb-4">Check Booking Availability</h5> 
<form>
  <div class="row align-items-end">
    <div class="col-lg-3 mb-3">
      <label for="checkin" class="form-label fw-bold">Check-in</label>
      <input type="date" id="checkin" class="form-control shadow-none">
    </div>
    <div class="col-lg-3 mb-3">
      <label for="checkout" class="form-label fw-bold">Check-out</label>
      <input type="date" id="checkout" class="form-control shadow-none">
    </div>
    <div class="col-lg-3 mb-3">
      <label for="adults" class="form-label fw-bold">Adult</label>
      <select id="adults" class="form-select shadow-none">
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
    </div>
    <div class="col-lg-2 mb-3">
      <label for="children" class="form-label fw-bold">Children</label>
      <select id="children" class="form-select shadow-none">
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
    </div>
    <div class="col-lg-1 mb-lg-3 mt-2">
      <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
    </div>
  </div>
</form>
</div> 
</div> 
</div> 


  
     
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        
        @if (Route::has('login'))
            <div class="h-14.5 hidden lg:block"></div>
        @endif
    </body>
</html>
