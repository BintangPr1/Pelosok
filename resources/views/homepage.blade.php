@extends('layouts.master')

@section('title', 'Homepage')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div style="margin-top: 12rem" class="col-md-5 ps-5">
            <div class="col-5">
                <h1 class="sy">
                    Find Your <span class="sy-color">Inner</span> Taste Here
                </h1>
            </div>
            <div class="col-8">
                <p class="qs">
                    Create in a cultural way with traces of cultural heritage
                    in every stitch, wear your traditions with pride
                </p>
            </div>
            <button type="button" class="btn qs-outline fw-bold">
                Explore
            </button>
        </div>
        <div class="col-md-6 offset-1 p-0">
            <img style="width: 100%; height: 100vh;" src="{{ url('images/homepage-1.png')}}" class="img-fluid">
        </div>
    </div>
    <section class="row" style="background-image: url('images/homepage-2.png'); background-size: cover; background-position: center;">
        <div class="container">
            <div class="col">
                <div class="row">
                    <div class="col-5 d-flex justify-content-end">
                        <div class="col-5 pt-5 pb-5">
                            <img src="{{ url('images/model-A1.png')}}" class="w-100">
                        </div>
                        <div class="col-4 ps-3 pt-5 pb-5 pt-5 mt-2">
                            <div class="row mb-3">
                                <img src="{{ url('images/model-A2.png')}}" class="w-100">
                            </div>
                            <div class="row">
                                <img src="{{ url('images/model-A3.png')}}" class="w-75">
                            </div>
                        </div>
                    </div>
                    <div class="col-6 d-flex justify-content-end">
                        <div class="col d-flex flex-column justify-content-center align-items-center">
                            <div class="row">
                                <h1 class="sy-white">
                                    New Arrival
                                </h1>
                            </div>
                            <div class="row">
                                <p class="fs-4 qs-white">
                                    Explore Our New Design
                                </p>
                            </div>
                            <button type="button" class="btn qs-outline-white fw-bold">
                                Explore
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="row">
        <div class="container">
            <div class="col">
                <div class="row">
                    <div class="col-6 d-flex flex-column justify-content-center align-items-center">
                        <div class="row">
                            <h1 class="sy sy-color">
                                MensWear
                            </h1>
                        </div>
                        <div class="row">
                            <p style="margin-left: auto; margin-right:auto; text-align:center;" class="fs-4 qs col-8">
                                Appear more dashing with the inherent traditions
                            </p>
                        </div>
                        <button type="button" class="btn qs-outline fw-bold">
                            Explore
                        </button>
                    </div>
                    <div class="col-5 d-flex justify-content-end">
                        <div class="col-5 pt-5 pb-5">
                            <img src="{{ url('images/model-B1.png')}}" class="w-100">
                        </div>
                        <div class="col-4 ps-3 pt-5 pb-5 pt-5 mt-4">
                            <div class="row mb-3">
                                <img src="{{ url('images/model-B2.png')}}" class="w-75">
                            </div>
                            <div class="row">
                                <img src="{{ url('images/model-B3.png')}}" class="w-100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="row" style="background-image: url('images/homepage-2.png'); background-size: cover; background-position: center;">
        <div class="container">
            <div class="col">
                <div class="row">
                    <div class="col-5 d-flex justify-content-end">
                        <div class="col-5 pt-5 pb-5">
                            <img src="{{ url('images/model-C1.png')}}" class="w-100">
                        </div>
                        <div class="col-4 ps-3 pt-5 pb-5 pt-5 mt-2">
                            <div class="row mb-3">
                                <img src="{{ url('images/model-C2.png')}}" class="w-75">
                            </div>
                            <div class="row">
                                <img src="{{ url('images/model-C3.png')}}" class="w-100">
                            </div>
                        </div>
                    </div>
                    <div class="col-6 d-flex justify-content-end">
                        <div class="col d-flex flex-column justify-content-center align-items-center">
                            <div class="row">
                                <h1 class="sy-white">
                                    GirlsWear
                                </h1>
                            </div>
                            <div class="row">
                                <p style="margin-left: auto; margin-right:auto; text-align:center;" class="col-7 qs-white">
                                    Appear more attractitve with traditional details
                                </p>
                            </div>
                            <button type="button" class="btn qs-outline-white fw-bold">
                                Explore
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="row">
        <div class="container">
            <div class="col">
                <div class="row">
                    <div class="col-6 d-flex flex-column justify-content-center align-items-center">
                        <div class="row">
                            <h1 class="sy sy-color">
                                KidsWear
                            </h1>
                        </div>
                        <div class="row">
                            <p style="margin-left: auto; margin-right:auto; text-align:center;" class="fs-4 qs col-8">
                                Appear more dashing with the inherent traditions
                            </p>
                        </div>
                        <button type="button" class="btn qs-outline fw-bold">
                            Explore
                        </button>
                    </div>
                    <div class="col-5 d-flex justify-content-end">
                        <div class="col-5 pt-5 pb-5">
                            <img src="{{ url('images/model-D1.png')}}" class="w-100">
                        </div>
                        <div class="col-4 ps-3 pt-5 pb-5 pt-5 mt-4">
                            <div class="row mb-3">
                                <img src="{{ url('images/model-D2.png')}}" class="w-75">
                            </div>
                            <div class="row">
                                <img src="{{ url('images/model-D3.png')}}" class="w-100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="row text-center pt-5 pb-5">
        <div class="col">
            <button type="button" class="btn qs-outline-black">Find More</button>
        </div>
        <div class="row">
            <p class="qs">
                Find your true self and express yourself better with our other collections
            </p>
        </div>
    </section>
</div>
@endsection
