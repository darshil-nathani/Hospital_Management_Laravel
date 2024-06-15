@extends('template.layout')
@section('content')
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h4>Register</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('registerSave') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="hospital_name">hospital Name</label>
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
                            <button type="submit" class="btn btn-primary btn-block mt-3">Register</button>
                            <a href="{{route('home')}}" class="btn btn-primary btn-block mt-3 mx-1">Back</a>
                        </form>
                        <div class="text-center mt-3">
                            <a href="{{route('login')}}" class="btn btn-link">Alrady have an account? Login</a>
                        </div>
                    </div>
                </div>

                {{-- @if($errors->any())
                <div class="alert alert-danger mt-3">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif --}}
            </div>
        </div>
    </div>
</body>
@endsection
