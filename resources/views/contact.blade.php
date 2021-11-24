@extends('layout.default')

@section('page-content')

<div class="container"></div>
    <div class="row justify-content-center">
        <div class="col-md-4 my-5">
            <form action="">
                <h1 class="text-center">Contact Us</h1>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Full Name">
                </div>
                <div class="form-group">
                    <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <input type="button" value="Send" class="btn btn-primary btn-block">
                </div>
            </form>
        </div>
    </div>
</div>

@endsection