@extends('layout')




@section('content')

    <form method="post" action="/admin">

        {{ csrf_field() }}
        <div class="col-md-6 col-md-offset-3">


            <div class="form-group">
                <input type="text"  name="title" class="form-control"  value="">
            </div>

            <div class="form-group">
                        <textarea id="" name="dist"  class="form-control" cols="30" rows="10" placeholder="text">

                        </textarea>
            </div>

            <div class="form-group">
                <input type="text"  name="price" class="form-control"  value="">
            </div>

            <div class="form-group">
                <input type="text"  name="img" class="form-control"  value="">
            </div>

            <input type="submit" class="btn btn-primary btn-lg">

        </div>

    </form>



@endsection


