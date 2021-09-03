@extends('layouts.app')
@section('content')
    @include('partials.frontend.sliders')
    <div class="container">
        <!-- categories area start -->
        <div class="product-style-area gray-bg-4 pb-105">
            <div class="container">
                <div class="section-title-furits bg-shape text-center mb-80">
                    <img src="{{ asset('frontend/img/icon-img/49.png') }}" alt="">
                    <h2>BROWSE OUR CATEGORIES</h2>
                </div>
                <section class="pt-5">
                    <div class="row">
                        <div class="col-md-4 mb-4 mb-md-0">
                            <a class="category-item" href="{{ route('shop.index', $categories[0]->slug) }}">
                                @if($categories[0]->cover)
                                    <img class="img-fluid"
                                         src="{{ asset('storage/images/categories/' . $categories[0]->cover) }}"
                                         alt="{{ $categories[0]->name }}">
                                @else
                                    <img class="img-fluid" src="{{ asset('frontend/assets/categories/cat-img-1.jpg') }}" alt="">
                                @endif
                                <strong class="category-item-title">{{ $categories[0]->name }}</strong>
                            </a>
                        </div>
                        <div class="col-md-4 mb-4 mb-md-0">
                            <a class="category-item mb-4" href="{{ route('shop.index', $categories[1]->slug) }}">
                                @if($categories[1]->cover)
                                <img class="img-fluid"
                                     src="{{ asset('storage/images/categories/' . $categories[1]->cover) }}"
                                     alt="{{ $categories[1]->name }}">
                                @else
                                    <img class="img-fluid" src="{{ asset('frontend/assets/categories/cat-img-2.jpg') }}" alt="{{ $categories[1]->name }}">
                                @endif
                                <strong class="category-item-title">{{ $categories[1]->name }}</strong>
                            </a>
                            <a class="category-item" href="{{ route('shop.index', $categories[2]->slug) }}">
                                @if($categories[2]->cover)
                                <img class="img-fluid" src="http://laravel-shop.test/frontend/assets/categories/cat-img-3.jpg" alt="{{ $categories[2]->name }}">
                                @else
                                    <img class="img-fluid" src="{{ asset('frontend/assets/categories/cat-img-3.jpg') }}" alt="{{ $categories[2]->name }}">
                                @endif
                                <strong class="category-item-title">{{ $categories[2]->name }}</strong>
                            </a>
                        </div>
                        <div class="col-md-4"><a class="category-item" href="{{ route('shop.index', $categories[3]->slug) }}">
                                @if($categories[3]->cover)
                                <img class="img-fluid"
                                     src="{{ asset('storage/images/categories/' . $categories[3]->cover) }}"
                                     alt="">
                                @else
                                    <img class="img-fluid" src="{{ asset('frontend/assets/categories/cat-img-4.jpg') }}"
                                         alt="{{ $categories[3]->name }}">
                                @endif
                                <strong class="category-item-title">{{ $categories[3]->name }}</strong>
                            </a>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!-- categories area end -->
    </div>

    <!-- banner area start -->
    <div class="fruits-choose-area pb-65 bg-img" style="background-image: url('{{ asset('frontend/img/banner/53.png') }}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xl-8 col-12">
                    <div class="fruits-choose-wrapper-all">
                        <div class="fruits-choose-title">
                            <h2>WHY CHOOSE US ?</h2>
                        </div>
                        <div class="fruits-choose-wrapper">
                            <div class="single-fruits-choose">
                                <div class="fruits-choose-serial">
                                    <h3>01</h3>
                                </div>
                                <div class="fruits-choose-content">
                                    <h4>Free Shipping.</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                            </div>
                            <div class="single-fruits-choose">
                                <div class="fruits-choose-serial">
                                    <h3>02</h3>
                                </div>
                                <div class="fruits-choose-content">
                                    <h4>100% ORIGINAL PRODUCTS.</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                            </div>
                            <div class="single-fruits-choose">
                                <div class="fruits-choose-serial">
                                    <h3>03</h3>
                                </div>
                                <div class="fruits-choose-content">
                                    <h4>Online Support.</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner area end -->

    <!-- TRENDING PRODUCTS -->
    <livewire:frontend.top-trending-products />

    <!-- services area start -->
    <div class="fruits-services ptb-200">
        <div class="fruits-services-wrapper">
            <div class="single-fruits-services">
                <div class="fruits-services-img">
                    <img src="{{asset('img/logo.png')}}" alt="">
                </div>
                <div class="fruits-services-content">
                    <h4>Free Shipping</h4>
                    <p>Lorem Ipsum is simply dummy text of the and typesetting industry. Lorem Ipsum is simply
                        industry.</p>
                </div>
            </div>
            <div class="single-fruits-services">
                <div class="fruits-services-img">
                    <img src="{{asset('img/logo.png')}}" alt="">
                </div>
                <div class="fruits-services-content">
                    <h4>Money Guarentee.</h4>
                    <p>Lorem Ipsum is simply dummy text of the and typesetting industry. Lorem Ipsum is simply
                        industry.</p>
                </div>
            </div>
            <div class="single-fruits-services">
                <div class="fruits-services-img">
                    <img src="{{asset('img/logo.png')}}" alt="">
                </div>
                <div class="fruits-services-content">
                    <h4>Online Support</h4>
                    <p>Lorem Ipsum is simply dummy text of the and typesetting industry. Lorem Ipsum is simply
                        industry.</p>
                </div>
            </div>
        </div>
</div>
    <!-- services area end -->
@endsection

