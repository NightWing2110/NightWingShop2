@extends('layouts.front')

@section('title')
{{ $category->name }}
@endsection

@section('content')
<div class="py-5">
    <div class="container">
        <div class="row">
            <h2>{{ $category->name }}</h2>
            @foreach ($products as $prod)
            <div class="col-md-3 mb-3">
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
@endsection
