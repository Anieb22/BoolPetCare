@extends('layouts.app')
@section('content')

<div id="carouselExampleSlidesOnly" class="carousel slide position-relative" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ Vite::asset('resources\img\krista-mangulsone-9gz3wfHr65U-unsplash.jpg')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ Vite::asset('resources\img\andrew-s-ouo1hbizWwo-unsplash.jpg')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ Vite::asset('resources/img/kate-stone-matheson-uy5t-CJuIK4-unsplash.jpg')}}" class="d-block w-100" alt="...">
    </div>
  </div>
</div>
<div class="jumbotron p-5 mb-4 bg-light rounded-3">
    <div class="container py-5">
        <div class="logo_laravel">
            <img src="{{ Vite::asset('resources\img\BoolPetCare@4x.png')}}" class="w-25" alt="">
        </div>
        <h1 class="display-5 fw-bold">
            Welcome to Laravel+Bootstrap 5
        </h1>

        <p class="col-md-8 fs-4">This a preset package with Bootstrap 5 views for laravel projects including laravel breeze/blade. It works from laravel 9.x to the latest release 10.x</p>
        <a href="{{ route('contacts.create')}}" class="btn btn-primary btn-lg" type="button">Documentation</a>
    </div>
</div>

<div class="content">
    <div class="container">
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora temporibus, dicta nemo aliquam totam nisi deserunt soluta quas voluptatum ab beatae praesentium necessitatibus minus, facilis illum rerum officiis accusamus dolores!</p>
    </div>
</div>
@endsection