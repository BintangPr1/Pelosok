@extends('layouts.master')

@section('title', 'Homepage')

@section('content')

<div class="card w-50 mx-auto p-2 mt-5">
  <div class="card-header" style="background-color: #D9BCA6">
    Account Information
  </div>
  <div class="card-body">
    <img class="rounded-circle float-start" src="/images/sugiono.png" alt="">
    <div>
      <h5 class="card-text text-center">{{ auth()->user()->name }}</h5>
      <h5 class="card-text text-center">{{ auth()->user()->email }}</h5>
      <h5 class="card-text text-center">Tanggal Lahir : 2003/04/20</h5>
    </div>
    <a href="#" class="btn btn-outline-dark float-end">Edit</a>
  </div>
</div>

<div class="card w-50 mx-auto p-2 mt-4 mb-5 pb-5">
  <div class="card-header" style="background-color: #D9BCA6">
    Billing Address / Shipping Address
  </div>

  <div class="card-body">
    <div class="form-floating">
      <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
        <option selected>Indonesia</option>
        <option value="1">Malaysia</option>
        <option value="2">Singapore</option>
        <option value="3">Thailand</option>
      </select>
      <label for="floatingSelect">Country</label>
    </div>

    <div class="form-floating mb-2 mt-2">
      <input type="name" class="form-control" id="floatingInput" placeholder="example : Budi">
      <label for="floatingInput">First Name</label>
    </div>

    <div class="form-floating mb-2 mt-2">
      <input type="name" class="form-control" id="floatingInput" placeholder="example : Setiawan">
      <label for="floatingInput">Last Name</label>
    </div>

    <div class="form-floating mb-2 mt-2">
      <input type="address" class="form-control" id="floatingInput" placeholder="example : jalan pancasila gang makmur 3">
      <label for="floatingInput">Address</label>
    </div>

    <div class="form-floating mb-2 mt-2">
      <input type="province" class="form-control" id="floatingInput" placeholder="example : Jakarta">
      <label for="floatingInput">Province</label>
    </div>

    <div class="form-floating mb-2 mt-2">
      <input type="city" class="form-control" id="floatingInput" placeholder="example : Jakarta Barat">
      <label for="floatingInput">City</label>
    </div>

    <div class="form-floating mb-2 mt-2">
      <input type="postalcode" class="form-control" id="floatingInput" placeholder="example : 83743">
      <label for="floatingInput">Postal Code</label>
    </div>

    <div class="form-floating mb-2 mt-2">
      <input type="phonenumber" class="form-control" id="floatingInput" placeholder="example : 08121272732">
      <label for="floatingInput">Phone Number</label>
    </div>
    <a href="#" class="btn btn-outline-dark col-4 position-absolute bottom-0 start-50 translate-middle-x mb-3">Save</a>
  </div>



</div>

<!-- <div class="card" style="width: 18rem; background-color: #D9BCA6">
  <div class="card-header">
    Account Information
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Name : Sugiono
        <br>Email : sugionoganteng@gmail.com
        <br>Tanggal Lahir : 2003/05/12
    </li>
  </ul>
</div> -->

@endsection
