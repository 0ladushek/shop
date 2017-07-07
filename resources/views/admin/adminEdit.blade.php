@extends('layout')




@section('content')

    <form method="post" action="/admin">

        {{ csrf_field() }}
        <div class="col-md-6 col-md-offset-3">

            <span>ID: {{ $product->id }}</span>
            <input type="hidden" name="id" value="{{ $product->id }}">

            <div class="form-group">
                <input type="text"  name="title" class="form-control"  value="{{ $product->title }}">
            </div>

            <div class="form-group">
                        <textarea id="{{ $product->id }}" name="dist"  class="form-control" cols="30" rows="10" placeholder="text">
                            {{ $product->dist }}
                        </textarea>
            </div>

            <div class="form-group">
                <input type="text"  name="price" class="form-control"  value="{{ $product->price }}">
            </div>

            <div class="form-group">
                <input type="text"  name="img" class="form-control"  value="{{ $product->img }}">
            </div>

            <input type="submit" class="btn btn-primary btn-lg">

        </div>

    </form>



@endsection


