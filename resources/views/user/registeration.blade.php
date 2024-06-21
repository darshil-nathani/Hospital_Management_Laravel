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
            backdrop-filter: blur(8px);
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
    <title>Register</title>
</head>
<body>
    <div class="container mt-5" style="height: 80%">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="text-center">
                        <h4 class="mt-3 font-weight-bold">Sign Up</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('registerSave') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="hospital_name">Hospital Name</label>
                                <input value="{{ old('hospital_name') }}" type="text" class="form-control @error('hospital_name') is-invalid @enderror" name="hospital_name" id="name" >
                                @error('hospital_name')
                                    <span>{{$message}}</span>
                                @enderror
                            </div>
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
                            <div class="form-group">
                                <label for="password_confirmation">Confirm Password</label>
                                <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" >
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <textarea value="{{ old('address') }}" type="text" class="form-control @error('address') is-invalid @enderror" name="address" id="name" ></textarea>
                                @error('address')
                                    <span>{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="contect_number">contect_number</label>
                                <input value="{{ old('contect_number') }}" type="" class="form-control @error('contect_number') is-invalid @enderror" name="contect_number" id="name" >
                                @error('contect_number')
                                    <span>{{$message}}</span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-warning btn-block mt-3">Register</button>
                        </form>
                        <div class="text-center mt-3">
                            <p>Already have an account?<a href="{{ route('login') }}" class="btn btn-link">Login</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

