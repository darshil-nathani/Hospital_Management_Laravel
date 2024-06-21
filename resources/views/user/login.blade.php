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
            background-image: url('{{ asset('images/Background.png') }}');
            background-size: cover;
            background-repeat: no-repeat;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Arial', sans-serif;
            backdrop-filter: blur(4px);
        }

        .card {
            opacity: 0.80;
            width: 100%;
            max-width: 600px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            animation: fadeInDown 1s;
        }

        .card-header {
            background: #007bff;
            color: #fff;
            border-radius: 8px 8px 0 0;
        }

        .btn-primary {
            background: #007bff;
            border: none;
            transition: background 0.3s ease;
        }

        .btn-primary:hover {
            background: #0056b3;
        }

        .btn-link {
            color: #007bff;
            transition: color 0.3s ease;
        }

        .btn-link:hover {
            color: #0056b3;
        }

        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }

        .error-message {
            color: red;
            font-size: 0.875em;
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

        .logo {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo img {
            width: 150px;
        }


    </style>
    <title>Login</title>
</head>
<body>
    <div class="container mt-5" style="height: 80%">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="text-center">
                        <h4 class="mt-3 font-weight-bold">Sign In</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{route('loginMatch')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input value="{{ old('email') }}" type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" >
                                @error('email')
                                    <span>{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input value="{{ old('password') }}" type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" >
                                @error('password')
                                    <span>{{$message}}</span>
                                @enderror
                            </div>
                            @if(session('message'))
                            <div class="text-danger">
                                {{session('message')}}
                            </div>
                            @endif
                            <button type="submit" class="btn btn-warning btn-block mt-3">Login</button>
                        </form>
                        <div class="text-center mt-3">
                           <p>Don't have an account?<a href="{{route('register')}}" class="btn btn-link">Sign Up</a></p>
                        </div class='alert'>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>



