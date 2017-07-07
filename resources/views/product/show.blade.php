

@extends('layout')




@section('content')
    <div class="row">
        <div class="col-md-6">
            <img src="{{ $product->img }}" alt="{{ $product->title }}" width="400" height="400">
        </div>

        <div class="col-md-6">
            <h2>{{ $product->title }}</h2>
            <p>{{ $product->dist }}</p>
            <span>{{ $product->price }}</span>
        </div>
    </div>
@endsection


