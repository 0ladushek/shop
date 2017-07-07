@extends('layout')


@section('content')


    <div class="row">
        @foreach ($products as $value)

        <div class="col-md-4">
            <div class="product-item">
                <div class="pi-img-wrapper">
                    <img src="{{ $value->img }}" class="img-responsive" alt="{{ $value->title }}">
                </div>
                <h3 class="product-item__title"><a href="one/{{ $value->id }}">{{ $value->title }}</a></h3>
                <div class="pi-price">Цена: {{ $value->price }}</div>
            </div>
        </div>

        @endforeach
    </div>


@endsection