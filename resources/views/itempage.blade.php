@extends('layouts.master')

@section('title', 'Homepage')

@section('content')

<div class="container-fluid">
    <div class="row p-4">
        <div class="col-7">
            <div class="row">
                <div class="col-5">
                    <img src="{{ url('images/model-Bali.png')}}" class="w-100">
                </div>
                <div class="col-4 pt-1">
                    <div class="row">
                        <img src="{{ url('images/model-Bali1.png')}}" class="w-50 pb-2">
                    </div>
                    <div class="row">
                        <img src="{{ url('images/model-Bali2.png')}}" class="w-75 pb-2">
                    </div>
                    <div class="row">
                        <img src="{{ url('images/model-Bali3.png')}}" class="w-50">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="container">
                <div class="row">
                    <h1 class="sy">
                        Balinese : Shari
                    </h1>
                </div>
                <div class="row">
                    <p class="qs">
                        The traditional attire from the island of Bali, Indonesia,
                        known as "Shari" or "Sari," is a captivating cultural ensemble.
                        With its vibrant colors and distinctive artistic motifs,
                        Shari Bali creates a striking representation of Balinese culture.
                        The combination of the intricately designed kebaya and gracefully
                        draped selendang imparts an elegant appearance,
                        while the long sarung skirt and accessories like bracelets
                        and small crowns add a touch of refinement. 
                        This attire transcends mere fashion; 
                        it carries profound cultural significance, 
                        being worn during traditional ceremonies, religious rituals, 
                        and special occasions such as weddings. 
                        Shari Bali serves as a potent symbol of the rich cultural identity 
                        and mesmerizing artistic heritage of the Balinese society.
                    </p>
                </div>
                <div class="row">
                    <div class="col">
                        <button class="qs btn-circle">
                            S
                        </button>
                    </div>
                    <div class="col">
                        <button>
                            M
                        </button>
                    </div>
                    <div class="col">
                        <button>
                            L
                        </button>
                    </div>
                    <div class="col">
                        <button>
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
                    <button>
                        Male
                    </button>
                </div>
                <div class="row">
                    Rp 3.000.000
                </div>
                <div class="row">
                    <button>
                        Buy Now
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="row pt-5 pb-5">
        <div class="col-5"></div>
        <div class="col-2">
            <p class="qs">
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
            <p class="qs">
                You Might Also Like
            </p>
        </div>
        <div class="col-5"></div>
    </div>
    <section class="container p-5 justify-content-center">
        <div class="row">
            <div class="col-2">
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
                    <button>
                        Detail
                    </button>
                </div>
            </div>
            <div class="col-2">
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
                    <button>
                        Detail
                    </button>
                </div>
            </div>
            <div class="col-2">
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
                    <button>
                        Detail
                    </button>
                </div>
            </div>
            <div class="col-2">
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
                    <button>
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