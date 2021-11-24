@extends('layout.default')

@section('page-content')
    <div class="container">
        <div class="row">
            <div class="col-12 my-4">
                <h2 class="text-center">What do you want to learn ?</h2>
            </div>
            <div class="col-md-3 my-4 mx-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('images/dash.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="{{url('https://www.quifoodservices.com')}}" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 my-4 mx-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('images/dash.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="{{url('https://www.quifoodservices.com')}}" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 my-4 mx-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('images/dash.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="{{url('https://www.quifoodservices.com')}}" target="_blank" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection