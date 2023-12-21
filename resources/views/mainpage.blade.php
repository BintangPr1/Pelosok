@vite(['resources/js/mainpage.js', 'resources/css/main.css'])
@extends('layouts.master')

@section('title', 'Homepage')

@section('content')
<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/images/iklan.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/images/iklan2.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="container">
  <div class="sidebar active">
    <div class="menu-btn">
      <i class="fa-solid fa-angle-left"></i>
    </div>
    <div class="head">
      <div class="user-img">
        <img src="/images/logo1.png" alt="">
      </div>
  
      <div class="user-details">
        <p class="title">ALL COLLECTION</p>
      </div>
    </div>

    <div class="nav">
      <div class="menu">
       <ul>
        <li>
          <a href="#">
            <i class="fa-solid fa-person fa-lg"></i>
            <span class="text">Gender</span>
            <i class="fa-solid fa-chevron-down fa-2xs"></i>
          </a>
          <ul class="sub-menu sub-menu-price">
            <li>
              <input type="checkbox">
                <span class="text">Male</span>
              
            </li>
            <li>
              <input type="checkbox">
                <span class="text">Female</span>
              
            </li>
            <li>
             
                <input type="checkbox">
                <span class="text">Unisex</span>
              
            </li>
          </ul>
        </li>
        <li>
          <a href="#">
            <i class="fa-solid fa-cart-shopping fa-sm"></i>
            <span class="text">Shop By Price</span>
            <i class="fa-solid fa-chevron-down fa-2xs"></i>
          </a>
          <ul class="sub-menu">
            <li>
              <input type="checkbox">
                <span class="text">1000000</span>
              
            </li>
            <li>
              <input type="checkbox">
                <span class="text">1500000</span>
              
            </li>
            <li>
             
                <input type="checkbox">
                <span class="text">2000000</span>
              
            </li>

            <li>
             
              <input type="checkbox">
              <span class="text">2500000</span>
            
          </li>
          </ul>
        </li>
        <li>
          <a href="#">
            <i class="fa-solid fa-shirt fa-sm"></i>
            <span class="text">Size</span>
            <i class="fa-solid fa-chevron-down fa-2xs"></i>
          </a>
          <ul class="sub-menu">
            <li>
              <input type="checkbox">
                <span class="text">S</span>
              
            </li>
            <li>
              <input type="checkbox">
                <span class="text">M</span>
              
            </li>
            <li>
             
                <input type="checkbox">
                <span class="text">L</span>
              
            </li>
            <li>
             
              <input type="checkbox">
              <span class="text">XL</span>
            
          </li>
          </ul>
        </li>
       </ul>
      </div>
    </div>
  </div>


  <div class="content">

    @if ($message = Session::get('success'))
      <div class="alert alert-success alert-block">
        <strong>{{ $message }}</strong>
      </div>
    @endif
  
    <h1 class="new-arrival">New Arrival</h1>
  

<div class="container2">
  <main class="grid">



    @foreach ($items as $item)
    <div class="card product-card" data-item="{{ $item->name }}" data-gender="{{ strtolower($item->gender) }}" data-price="{{ $item->price }}">
      <div class="image">
        <img src="{{ asset($item->image) }}" width="200px" height="200px" alt="">
      </div>
      <h3>{{ $item->name }}</h3>
      <p>{{ number_format($item->price, 0, ',', '.')}}</p>
      <a href="{{ route('item', ['item' => $item->id]) }}">
        <button class="details-button btn qs-outline fw-bold rounded-pill">Details</button>
    </a>
      <a href="{{ route('add-to-cart', $item->id) }}"class="btn btn-primary mt-3">Add to Cart</a>
    </div>
    @endforeach
  
   




  

  



  </main>
</div>

  </div>
</div>





@endsection