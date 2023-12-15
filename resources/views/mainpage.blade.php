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
                <span class="text">Men</span>
              
            </li>
            <li>
              <input type="checkbox">
                <span class="text">Women</span>
              
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
                <span class="text">Rp 1.000.000</span>
              
            </li>
            <li>
              <input type="checkbox">
                <span class="text">Rp 1.500.000</span>
              
            </li>
            <li>
             
                <input type="checkbox">
                <span class="text">Rp 2.000.000</span>
              
            </li>

            <li>
             
              <input type="checkbox">
              <span class="text">Rp 2.500.000</span>
            
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


  
    <h1 class="new-arrival">New Arrival</h1>
  

<div class="container2">
  <main class="grid">
  
    <div class="card product-card" data-gender="men" data-price="1.5m" data-item="palembang">
      <div class="image">
        <img src="/images/card1.png" width="200px" height="200px" alt="">
      </div>
      <h3>Palembang</h3>
      <p>1.500.000</p>
      <button class="details-button">Details</button>
    </div>

  
    <div class="card product-card" data-gender="women" data-price="2.5m" data-item="bali">
      <div class="image">
        <img src="/images/card2.png" width="200px" height="200px" alt="">
      </div>
      <h3>Bali</h3>
      <p>2.500.000</p>
      <button class="details-button">Details</button>
    </div>

   
    <div class="card product-card" data-gender="women" data-price="2.5m" data-item="jambi">
      <div class="image">
        <img src="/images/card3.png" width="200px" height="200px" alt="">
      </div>
      <h3>Jambi</h3>
      <p>2.500.500</p>
      <button class="details-button">Details</button>
    </div>

  
    <div class="card product-card" data-gender="men" data-price="1.5m" data-item="shari">
      <div class="image">
        <img src="/images/card4.png" width="200px" height="200px" alt="">
      </div>
      <h3>Shari</h3>
      <p>1.500.500</p>
      <button class="details-button">Details</button>
    </div>

    <div class="card product-card" data-gender="women" data-price="1m" data-item="sumatra utara">
      <div class="image">
        <img src="/images/card5.png" width="200px" height="200px" alt="">
      </div>
      <h3>Sumatra Utara</h3>
      <p>1.000.000</p>
      <button class="details-button">Details</button>
    </div>

  
    <div class="card product-card" data-gender="women" data-price="1m" data-item="lampung">
      <div class="image">
        <img src="/images/card6.png" width="200px" height="200px" alt="">
      </div>
      <h3>Lampung</h3>
      <p>1.000.000</p>
      <button class="details-button">Details</button>
    </div>

   
    <div class="card product-card" data-gender="men" data-price="1m" data-item="jawa barat">
      <div class="image">
        <img src="/images/card7.png" width="200px" height="200px" alt="">
      </div>
      <h3>Jawa Barat</h3>
      <p>1.000.000</p>
      <button class="details-button">Details</button>
    </div>

  
    <div class="card product-card" data-gender="men" data-price="1m" data-item="sumatra barat">
      <div class="image">
        <img src="/images/card8.png" width="200px" height="200px" alt="">
      </div>
      <h3>Sumatra Barat</h3>
      <p>1.000.000</p>
      <button class="details-button">Details</button>
    </div>

    <div class="card product-card" data-gender="women" data-price="2m" data-item="sulawesi">
      <div class="image">
        <img src="/images/card9.png" width="200px" height="200px" alt="">
      </div>
      <h3>Sulawesi</h3>
      <p>2.000.000</p>
      <button class="details-button">Details</button>
    </div>

  
    <div class="card product-card" data-gender="women" data-price="2m" data-item="banten">
      <div class="image">
        <img src="/images/card10.png" width="200px" height="200px" alt="">
      </div>
      <h3>Banten</h3>
      <p>2.000.000</p>
      <button class="details-button">Details</button>
    </div>

   
    <div class="card product-card" data-gender="women" data-price="1.5m" data-item="minang">
      <div class="image">
        <img src="/images/card11.png" width="200px" height="200px" alt="">
      </div>
      <h3>Minang</h3>
      <p>1.500.000</p>
      <button class="details-button">Details</button>
    </div>

  
    <div class="card product-card" data-gender="women" data-price="1.5m" data-item="dayak">
      <div class="image">
        <img src="/images/card12.png" width="200px" height="200px" alt="">
      </div>
      <h3>Dayak</h3>
      <p>1.500.000</p>
      <button class="details-button">Details</button>
    </div>

    <div class="card product-card" data-gender="men" data-price="1.5m" data-item="kalimantan barat">
      <div class="image">
        <img src="/images/card13.png" width="200px" height="200px" alt="">
      </div>
      <h3>Kalimantan Barat</h3>
      <p>1.500.000</p>
      <button class="details-button">Details</button>
    </div>

  
    <div class="card product-card" data-gender="men" data-price="1m" data-item="batak">
      <div class="image">
        <img src="/images/card14.png" width="200px" height="200px" alt="">
      </div>
      <h3>Batak</h3>
      <p>1.000.000</p>
      <button class="details-button">Details</button>
    </div>

   
    <div class="card product-card" data-gender="men" data-price="1.5m" data-item="sulawesi2">
      <div class="image">
        <img src="/images/card15.png" width="200px" height="200px" alt="">
      </div>
      <h3>Sulawesi</h3>
      <p>1.500.000</p>
      <button class="details-button">Details</button>
    </div>

  
    <div class="card product-card" data-gender="men" data-price="1.5m" data-item="sunda">
      <div class="image">
        <img src="/images/card16.png" width="200px" height="200px" alt="">
      </div>
      <h3>Sunda</h3>
      <p>1.500.000</p>
      <button class="details-button">Details</button>
    </div>
  </main>
</div>

  </div>
</div>





@endsection