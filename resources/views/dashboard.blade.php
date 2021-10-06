@extends('layouts.main')
@section('content')

<div class="product-section popular-products">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="section-head">All Products</h2>
                <div class="popular-carousel owl-carousel owl-theme">
                    @foreach ($product as $item)

                    <div class="product-grid latest item">
                        <div class="product-image popular">
                            <a class="image" href="#">
                                <img class="pic-1" src="{{ asset('storage') }}/{{ $item->image }}">
                            </a>
                            <div class="product-button-group">
                                <a href="{{ url('/add-to-cart') }}" class="add-to-cart" data-id="{{ $item->id }}"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3 class="title">
                                <a href="#">{{ $item->name }}</a>
                            </h3>
                            <div class="price">INR {{ $item->price }}</div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
