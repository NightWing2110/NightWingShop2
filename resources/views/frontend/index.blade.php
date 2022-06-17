@extends('layouts.front')

@section('title')
Alazul-Shop
@endsection

@section('content')
@include('layouts.inc.slider')
<div class="py-5">
    <div class="container">
        <div class="row">
            <h2>Featured Product</h2>
            <div class="owl-carousel featured-carousel owl-theme">
                @foreach ($featured_products as $prod)
                <div class="item">
                    <div class="card">
                        <img src="{{ asset('assets/uploads/product/'.$prod->image) }}" alt="Product Image">
                        <div class="card-body">
                            <h5>{{ $prod->name }}</h5>
                            <small class="float-start">{{ $prod->selling_price }}</small>
                            <small class="float-end"> <s>{{ $prod->original_price }}</s></small>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $('.featured-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots: false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})
</script>
@endsection
