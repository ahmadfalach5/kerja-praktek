@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">

        <div class="row">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <!-- ini adalah penggunaan 'blade directive' untuk role -->
                    @role('admin')
                    Anda masuk dengan role 'admin'
                    @endrole
                    @role('user')
                    Anda masuk dengan role 'user'
                    @endrole
                    @guest
                    Anda belum login
                    @endguest


                </div>
            </div>
        </div>
        <div class="row">
<div>

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{asset('image/pendaftaran.jpg')}}" alt="First slide">
            </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('image/a.jpg')}}" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('image/silde3.jpg')}}" alt="Third slide">
        </div>
        </div>
    </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
        </a>
    </div>
    </div>
    </div>
    
        
</div>

@endsection