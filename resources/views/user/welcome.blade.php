<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
    body {
        background-color: #f8f9fa;
        font-family: 'Arial', sans-serif;
    }

    .navbar {
        background: #007bff;
        color: #fff;
    }

    .hero-section {
        background: linear-gradient(rgba(0, 123, 255, 0.5), rgba(0, 123, 255, 0.5)), url('images/Background.png') no-repeat center center/cover;
        color: #fff;
        text-align: center;
        padding: 100px 0;
        margin-bottom: 30px;
        border-radius: 8px;
    }

    .hero-section h1 {
        font-size: 3em;
        animation: fadeInDown 1s;
    }

    .hero-section hr {
        width: 50px;
        border-top: 3px solid #fff;
        margin: 20px auto;
        animation: fadeIn 2s;
    }

    .btn-outline-custom {
        border: 2px solid orange;
        color: orange;
        background: transparent;
        transition: background 0.3s ease, color 0.3s ease;
        font-weight: bold;
    }

    .btn-outline-custom:hover {
        background: orange;
        color: #fff;
    }

    .form-inline {
        display: flex;
        align-items: center;
    }

    .form-inline .form-control {
        width: auto;
        transition: width 0.4s ease-in-out;
    }

    .form-inline .form-control:focus {
        width: 200px;
    }

    img{
        width: 30%;
        padding: 5px;
    }
    .img1{
        border-bottom-left-radius: 50px;
        border-top-left-radius: 50px;
        border-top-right-radius: 50px;
    }

    @keyframes fadeInDown {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    .image-grid {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        justify-content: center;
    }

    .image-grid img {
        width: calc(50% - 10px);
        border-radius: 8px;
    }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light shadow p-3 mb-5 bg-white rounded">
    <a class="navbar-brand mx-3" href="#">Hospital Management System</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
            <div class="navbar-nav">

            </div>
        </ul>
        <div class="navbar-nav">
            <a class="btn btn-outline-custom mx-2" href="{{ route('register') }}">Registration</a>
            <a class="btn btn-outline-custom mx-2" href="{{ route('login') }}">Login</a>
        </div>
    </div>
</nav>

<div class="container">
    <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" style="width: 93%" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Search</button>
    </form>
    <div class="mt-3 hero-section shadow-lg p-5 rounded">
        <h1 class="animate__animated animate__fadeInDown">Hospital Management System</h1>
        <hr class="animate__animated animate__fadeIn">
    </div>

    <div class="bottom">
        <div>
            <div class="row">
            <div class="col-7">
                        <font color="#000"> We are a medical center </font> <br> <br>
                        <font color="#000" size="5px"> We Have Medicare Plan Options for You! </font> <br> <br>
                        <p>Phasellus pretium orci sit amet mi ullamcorper egestas. Sed non mattis metus. Integer vel lorem tincidunt, pharetra eros nec, posuere odio. Nullam eget bibendum sem, venenatis lacinia justo. Duis aliquet lobortis neque, eget volutpat nulla iaculis a. <br><br>
                        In hac habitasse platea dictumst. Praesent condimentum justo justo, at ultricies diam accumsan vitae. Donec ac elementum diam. Ut quam orci, posuere quis lacus sed, vehicula rhoncus massa. Nunc volutpat nibh nulla, tincidunt egestas tellus faucibus nec. <br><br>
                        </p>
                        <ul>
                            <li> Nulla venenatis auctor quam, ac porta lectus dictum in</li>
                            <li>Aliquam sodales nisi sit amet lorem</li>
                            <li>Suspendisse vulputate tellus in justo convallis imperdiet</li>
                            <li>Morbi id lorem consequat, sodales mi non</li>
                            <li>Nulla venenatis auctor quam, ac porta lectus dictum in</li>
                        </ul>
                    </div>
                        <div class="image-grid col-3 " style="width: 30%; height: 30%; margin-left: 10%; margin-top: 5%">
                            <img src="{{asset('images/doctors.jfif')}}" style="border-bottom-left-radius: 50px;
                            border-top-left-radius: 50px;
                            border-top-right-radius: 50px;" alt="Image 1">
                            <img src="{{asset('images/download.jfif')}}"
                            style="border-bottom-right-radius: 50px;
                            border-top-left-radius: 50px;
                            border-top-right-radius: 50px;" alt="Image 2">
                            <img src="{{asset('images/doctor1.jfif')}}"
                            style="border-bottom-left-radius: 50px;
                            border-top-left-radius: 50px;
                            border-bottom-right-radius: 50px;" alt="Image 3">
                            <img src="{{asset('images/doctor2.jfif')}}"
                            style="border-bottom-left-radius: 50px;
                            border-bottom-right-radius: 50px;
                            border-top-right-radius: 50px;" alt="Image 4">
                        </div>
                    </div>

                        <br>
        </div>
    </div>
</div>

<hr>
@include('template.footer')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-QIRFXrVfyF9JpiXVJIbN3bhfd9Djh+BaahTVzji9HZQf32OUBvZyo/T0XI28I8Yj" crossorigin="anonymous"></script>
</body>
</html>
