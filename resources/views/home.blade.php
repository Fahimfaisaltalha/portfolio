@extends('layouts.app')
@section('title','Home')
@section('content')

    <!-- Hero Section -->
    <header class="hero-section">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 text-white fw-bold">Hi, I'm Fahim Faisal Talha</h1>
                    <p class="lead text-white">Professional Web Developer & Designer</p>
                    <a href="{{url('portfolio') }}" class="btn btn-primary btn-lg mt-3">View My Work</a>
                </div>
            </div>
        </div>
    </header>

    <!-- Featured Work -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Featured Work</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{asset('assets/images/ecom.png')}}" class="card-img-top" alt="Project 1">
                        <div class="card-body">
                            <h5 class="card-title">E-commerce Website</h5>
                            <p class="card-text">A fully responsive online store with payment integration.</p>
                            <a href="{{url('portfolio') }}" class="btn btn-outline-primary">View Project</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{asset('assets/images/mobile.png')}}" class="card-img-top" alt="Project 2">
                        <div class="card-body">
                            <h5 class="card-title">Mobile App Design</h5>
                            <p class="card-text">UI/UX design for a fitness tracking application.</p>
                            <a href="{{url('portfolio') }}" class="btn btn-outline-primary">View Project</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{asset('assets/images/cor.png')}}" class="card-img-top" alt="Project 3">
                        <div class="card-body">
                            <h5 class="card-title">Corporate Website</h5>
                            <p class="card-text">A modern website for a financial services company.</p>
                            <a href="{{url('portfolio') }}" class="btn btn-outline-primary">View Project</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
