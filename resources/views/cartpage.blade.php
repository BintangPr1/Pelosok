@extends('layouts.master')

@section('title', 'Homepage')

@section('content')

<h3 class="text-center mt-5">Cart (3)</h3>



    <div class="card mb-5 mx-5" style="max-width: 700px;">
    <div class="row g-0">
        <div class="col-md-4">
        <img src="./images/card4.png" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
        <div class="card-body">
            <h5 class="sy"></h5>
            <p class="card-text">Size : M</p>
            <a href="" class="text-reset link-secondary position-absolute bottom-0 mb-2">Remove Item</a>
            <h5 class="fw-semibold position-absolute bottom-0 end-0">Rp 3.000.000,00</h5>
        </div>
        </div>
    </div>
    </div>


    <div class="card mx-5 top-0 start-50" style="max-width: 950px; height: 350px; margin-top: -380px">
    <div class="row g-0">
        <div class="col-md-8">
        <div class="card-body">
            <h5>Summary</h5>
            <div>
              <p class="card-text position-absolute bottom-0 start-0 mx-4 mb-5">Subtotal</p>
              <h5 class="fw-semibold position-absolute bottom-0 end-0 mx-4 mb-5 ">Rp 2.500.000,00</h5>
              <p class="card-text position-absolute bottom-0 start-0 mx-4 mb-4">Shipping</p>
              <h5 class="fw-semibold position-absolute bottom-0 end-0 mx-4 mb-4">Rp 100.000,00</h5>
              <p class="card-text fw-semibold position-absolute bottom-0 start-0 mx-4 mb-0">Total</p>
              <h5 class="fw-semibold position-absolute bottom-0 end-0 mx-4 mb-0">Rp 2.600.000,00</h5>
            </div>
        </div>
        </div>
    </div>
    <a href="#" class="btn btn-outline-dark col-4 position-absolute top-100 start-50 translate-middle-x mt-3">Checkout</a>
    </div>
    
    

    
<!-- <div class="card mb-3 mx-5" style="max-width: 700px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="./images/card4.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="sy">Balinese : Shari</h5>
        <p class="card-text">Size : M</p>
        <a href="" class="text-reset link-secondary position-absolute bottom-0 mb-2">Remove Item</a>
        <h5 class="fw-semibold position-absolute bottom-0 end-0">Rp 3.000.000,00</h5>
      </div>
    </div>
  </div>
</div> -->

<!-- <div class="card mb-3 position-absolute top-50 start-50" style="max-width: 700px;">
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div> -->



<div class="card mb-3 mx-5" style="max-width: 700px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="./images/card16.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="sy">Sunda : Salontreng</h5>
        <p class="card-text">Size : L</p>
        <a href="" class="text-reset link-secondary position-absolute bottom-0 mb-2">Remove Item</a>
        <h5 class="fw-semibold position-absolute bottom-0 end-0">Rp 2.100.000,00</h5>
      </div>
    </div>
  </div>
</div>

<div class="card mb-3 mx-5" style="max-width: 700px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="./images/card8.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="sy">Javanese : Dhodot</h5>
        <p class="card-text">Size : XL</p>
        <a href="" class="text-reset link-secondary position-absolute bottom-0 mb-2">Remove Item</a>
        <h5 class="fw-semibold position-absolute bottom-0 end-0">Rp 2.500.000,00</h5>
      </div>
    </div>
  </div>
</div>






@endsection
