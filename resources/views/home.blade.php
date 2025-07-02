<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio - Home</title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="{{asset('assets/images/logo.png')}}" alt="Logo" height="30">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services.html">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="portfolio.html">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="hero-section">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 text-white fw-bold">Hi, I'm John Doe</h1>
                    <p class="lead text-white">Professional Web Developer & Designer</p>
                    <a href="portfolio.html" class="btn btn-primary btn-lg mt-3">View My Work</a>
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
                        <img src="{{asset('assets/images/project1.jpg')}}" class="card-img-top" alt="Project 1">
                        <div class="card-body">
                            <h5 class="card-title">E-commerce Website</h5>
                            <p class="card-text">A fully responsive online store with payment integration.</p>
                            <a href="portfolio.html" class="btn btn-outline-primary">View Project</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{asset('assets/images/project2.jpg')}}" class="card-img-top" alt="Project 2">
                        <div class="card-body">
                            <h5 class="card-title">Mobile App Design</h5>
                            <p class="card-text">UI/UX design for a fitness tracking application.</p>
                            <a href="portfolio.html" class="btn btn-outline-primary">View Project</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{asset('assets/images/project3.jpg')}}" class="card-img-top" alt="Project 3">
                        <div class="card-body">
                            <h5 class="card-title">Corporate Website</h5>
                            <p class="card-text">A modern website for a financial services company.</p>
                            <a href="portfolio.html" class="btn btn-outline-primary">View Project</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>&copy; 2023 My Portfolio. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-end">
                    <a href="#" class="text-white me-2"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-white me-2"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-white me-2"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/script.js')}}"></script>
</body>
</html>
