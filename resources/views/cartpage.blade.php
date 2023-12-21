@extends('layouts.master')

@section('title', 'Homepage')

@section('content')

<div class="py-12">
  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <section class="h-100 gradient-custom">
          <div class="container py-5">
              <div class="row d-flex justify-content-center my-4">
                  <div class="col-md-8">
                      @if ($message = Session::get('success'))
                          <div class="alert alert-success alert-block">
                              <button type="button" class="close" data-dismiss="alert">×</button>
                                  <strong>{{ $message }}</strong>
                          </div>
                      @endif

                      <div class="card mb-4">
                          <div class="card-header py-3">
                              <h5 class="mb-0">Cart - 2 items</h5>
                          </div>
                          <div class="card-body">
                              @foreach (Cart::content() as $item)
                              <!-- Single item -->
                              <div class="row">
                                  <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                                      <!-- Image -->
                                      <div class="bg-image hover-overlay hover-zoom ripple rounded"
                                          data-mdb-ripple-color="light">
                                          <img src="{{asset($item->options->image)}}"
                                              class="w-100" />
                                          <a href="#!">
                                              <div class="mask"
                                                  style="background-color: rgba(251, 251, 251, 0.2)"></div>
                                          </a>
                                      </div>
                                      <!-- Image -->
                                  </div>

                                  <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                                      <!-- Data -->
                                      <p><strong>{{$item->name}}</strong></p>
                                      <p>Size: M</p>

                                      <a href="{{route('remove-product', $item->rowId)}}" class="btn btn-danger btn-sm mb-2 mt-3">
                                          remove
                                      </a>
                                      <!-- Data -->
                                  </div>

                                  <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                                      <!-- Quantity -->
                                      <div class="d-flex mb-4" style="max-width: 300px">
                                          <a href="{{route('qty-decrement', $item->rowId)}}" class="btn btn-primary me-2">
                                              &#8722;
                                          </a>

                                          <div class="form-outline">
                                              <input id="form1" min="0" name="quantity" value="{{$item->qty}}"
                                                  type="number" class="form-control" />
                                          </div>

                                          <a href="{{route('qty-increment', $item->rowId)}}" class="btn btn-primary  ms-2">
                                              &#43;
                                          </a>
                                      </div>
                                      <!-- Quantity -->

                                      <!-- Price -->
                                      <p class="text-start text-md-center">
                                          <strong>Rp {{$item->price}}</strong>
                                      </p>
                                      <!-- Price -->
                                  </div>

                              </div>
                              <!-- Single item -->
                              <hr class="my-4" />
                              @endforeach


                          </div>
                      </div>


                  </div>
                  <div class="col-md-4">
                      <div class="card mb-4">
                          <div class="card-header py-3">
                              <h5 class="mb-0">Summary</h5>
                          </div>
                          <div class="card-body">
                              <ul class="list-group list-group-flush">
                                  <li
                                      class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                      Products
                                      <span>Rp 2.000.000</span>
                                  </li>
                                  <li
                                      class="list-group-item d-flex justify-content-between align-items-center px-0">
                                      Shipping
                                      <span>Gratis</span>
                                  </li>
                                  <li
                                      class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                      <div>
                                          <strong>Total amount</strong>
    
                                      </div>
                                      <span><strong>Rp 2.000.000</strong></span>
                                  </li>
                              </ul>

                              <button class="btn btn-success">
                                  Go to checkout
                              </button>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
  </div>
</div>


@endsection
