@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>Edit Product</h4>
    </div>
    <div class="card-body">
        <form action="{{ url('update-product/'.$products->id) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="row">
                <div class="col-md-12 mb-3">
                    <select class="form-select">
                        <option value="">{{ $products->category->name }}</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="">Name</label>
                    <input type="text" class="form-control" value="{{ $products->name }}" name="name">
                </div>
                <div class="col-md-6">
                    <label for="">Slug</label>
                    <input type="text" class="form-control" value="{{ $products->slug }}" name="slug">
                </div>
                <div class="col-md-6">
                    <label for="">Small Description</label>
                    <textarea name="small_description" rows="3" class="form-control">{{ $products->small_description }}</textarea>
                </div>
                <div class="col-md-12">
                    <label for="">Description</label>
                    <textarea name="description" rows="3" class="form-control">{{ $products->description }}</textarea>
                </div>
                <div class="col-md-6">
                    <label for="">Original Price</label>
                    <input type="number" class="form-control" value="{{ $products->original_price }}" name="original_price">
                </div>
                <div class="col-md-6">
                    <label for="">Selling Price</label>
                    <input type="number" class="form-control" value="{{ $products->selling_price }}" name="selling_price">
                </div>
                <div class="col-md-6">
                    <label for="">Tax</label>
                    <input type="number" class="form-control" value="{{ $products->tax }}" name="tax">
                </div>
                <div class="col-md-6">
                    <label for="">Quantity</label>
                    <input type="number" class="form-control" value="{{ $products->qty }}" name="qty">
                </div>
                <div class="col-md-6">
                    <label for="">Status</label>
                    <input type="checkbox" {{ $products->status == '1' ? 'checked' : '' }} name="status">
                </div>
                <div class="col-md-6">
                    <label for="">Trending</label>
                    <input type="checkbox" {{ $products->status == '1' ? 'checked' : '' }} name="trending">
                </div>
                <div class="col-md-12">
                    <label for="">Meta Title</label>
                    <input type="text" class="form-control" value="{{ $products->meta_title }}" name="meta_title">
                </div>
                <div class="col-md-12">
                    <label for="">Meta Keywords</label>
                    <textarea rows="3" class="form-control" name="meta_keywords">{{ $products->meta_keywords }}</textarea>
                </div>
                <div class="col-md-12">
                    <label for="">Meta Description</label>
                    <textarea rows="3" class="form-control" name="meta_description">{{ $products->meta_description }}</textarea>
                </div>
                @if ($products->image)
                    <img src="{{ asset('assets/uploads/product/'.$products->image) }}" alt="">
                @endif
                <div class="col-md-12">
                    <input type="file" name="image" class="form-control" width="20">
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
