@extends('layouts.master')

@section('title', 'Homepage')

@section('content')

<div class="container-fluid">
    <div class="row p-4">
        <div class="col-7">
            <div class="row">
                <div class="col-12 text-center">
                    <img src="{{ asset($item->image) }}" class="w-50 img-fluid">
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="container">
                <div class="row">
                    <h1 class="sy">
                        {{ $item->name }}
                    </h1>
                </div>
                <div class="row">
                    <p class="qs">
                        {{ $item->description }}
                    </p>
                </div>
                <div class="row me-5">
                    <div class="col">
                        <button class="btn qs-outline fw-bold rounded-circle">
                            S
                        </button>
                    </div>
                    <div class="col">
                        <button class="btn qs-outline fw-bold rounded-circle">
                            M
                        </button>
                    </div>
                    <div class="col">
                        <button class="btn qs-outline fw-bold rounded-circle">
                            L
                        </button>
                    </div>
                    <div class="col">
                        <button class="btn qs-outline fw-bold rounded-circle">
                            XL
                        </button>
                    </div>
                </div>
                <div class="row">
                    <p class="qs">
                        Avaliable for :
                    </p>
                </div>
                <div class="row">
                    <button class="btn qs-outline fw-bold rounded-pill mb-5">
                        {{ $item->gender }}
                    </button>
                </div>
                <div class="row fw-semibold fs-5">
                    {{ number_format($item->price, 0, ',', '.')}}
                </div>
                <div class="row" class="btn-buy">
                    <a href="{{ route('buy-now', $item->id) }}">
                        <button class="btn qs-outline fw-bold rounded-pill">
                            Buy Now
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row pt-5 pb-5">
        <div class="col-5"></div>
        <div class="col-2">
            <p class="qs text-center fw-semibold">
                What People Say?
            </p>
        </div>
        <div class="col-5"></div>
    </div>
    <div class="row">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-2">
                    <img src="{{ url('images/comment-1.png')}}" class="w-75">
                </div>
                <div class="col-5 pb-3">
                    <div class="row qs">
                        <p class="fw-bold">
                            Benjamin Cruize
                        </p>
                    </div>
                    <div class="row">
                        <p>
                            Its so good, i've been using this traditional outfit for my weeding,
                            people on Pelosok so friendly they telling me what am i suppose to with this outfit
                        </p>
                    </div>
                    <div class="row"></div>
                </div>
            </div>
            <div class="row pt-5 justify-content-center">
                <div class="col-2">
                    <img src="{{ url('images/comment-2.png')}}" class="w-75">
                </div>
                <div class="col-5">
                    <div class="row qs">
                        <p class="fw-bold">
                            Antonio Breeze
                        </p>
                    </div>
                    <div class="row">
                        <p>
                            i've been using Pelosok since last year, every outfit for my project
                            that i made always come from Pelosok, they're so good.
                        </p>
                    </div>
                    <div class="row"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row pt-5 pb-5">
        <div class="col-5"></div>
        <div class="col-2">
            <p class="qs text-center fw-semibold">
                You Might Also Like
            </p>
        </div>
        <div class="col-5"></div>
    </div>
    <section class="container p-5 justify-content-center">
        <div class="row">
            <div class="col-2 mx-5">
                <div class="row">
                    <img src="{{ url('images/A.png')}}" class="w-75">
                </div>
                <div class="row qs">
                    <p class="fs-5 fw-semibold">
                        Banten
                    </p>
                </div>
                <div class="row qs">
                    <p>
                        1.500.00
                    </p>
                </div>
                <div class="row qs">
                    <button class="btn qs-outline fw-bold rounded-pill">
                        Detail
                    </button>
                </div>
            </div>
            <div class="col-2 mx-5">
                <div class="row">
                    <img src="{{ url('images/B.png')}}" class="w-75">
                </div>
                <div class="row qs">
                    <p class="fs-5 fw-semibold">
                        Sulawesi
                    </p>
                </div>
                <div class="row qs">
                    <p>
                        1.500.00
                    </p>
                </div>
                <div class="row qs">
                    <button class="btn qs-outline fw-bold rounded-pill">
                        Detail
                    </button>
                </div>
            </div>
            <div class="col-2 mx-5">
                <div class="row">
                    <img src="{{ url('images/C.png')}}" class="w-75">
                </div>
                <div class="row qs">
                    <p class="fs-5 fw-semibold">
                        Minang
                    </p>
                </div>
                <div class="row qs">
                    <p>
                        1.500.00
                    </p>
                </div>
                <div class="row qs">
                    <button class="btn qs-outline fw-bold rounded-pill">
                        Detail
                    </button>
                </div>
            </div>
            <div class="col-2 mx-5">
                <div class="row">
                    <img src="{{ url('images/D.png')}}" class="w-75">
                </div>
                <div class="row qs">
                    <p class="fs-5 fw-semibold">
                        Dayak
                    </p>
                </div>
                <div class="row qs">
                    <p>
                        1.300.00
                    </p>
                </div>
                <div class="row qs">
                    <button class="btn qs-outline fw-bold rounded-pill">
                        Detail
                    </button>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row qs text-end">
            <p>
                Find More...
            </p>
        </div>
    </div>
</div>

@endsection