@extends('template.layout')
@section('content')
<body>
    <div class="container mt-5">
        <div class="text-center mb-4">
            <h1 class="display-4 animate__animated animate__fadeInDown text-primary shadow-sm p-3 mb-5 bg-white rounded">Welcome, {{ Auth::user()->hospital_name }}</h1>
            <p class="lead animate__animated animate__fadeInUp">This Is {{ $doctor->doctor_name }}'s Profile</p>
        </div>
        <hr class="my-4">

        <div class="d-flex justify-content-end mb-4">
            <a class="btn btn-outline-primary rounded-pill mx-2 shadow-sm" href="{{ route('doctor.index') }}">Back</a>
        </div>

        <div class="card shadow-lg animate__animated animate__fadeIn">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 text-center">
                        <img src="{{ asset('images/' . $doctor->image) }}" class="rounded-circle shadow" style="height: 200px; width: 200px;" alt="{{ $doctor->doctor_name }}">
                    </div>
                    <div class="col-md-8">
                        <h3 class="card-title text-center text-primary">{{ $doctor->doctor_name }}'s Profile</h3>
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <p><strong>Doctor Name:</strong> {{ $doctor->doctor_name }}</p>
                                <p><strong>Email:</strong> {{ $doctor->email }}</p>
                                <p><strong>Designation:</strong> {{ $doctor->designation }}</p>
                                <p><strong>Degree:</strong> {{ $doctor->degree }}</p>
                                <p><strong>Department:</strong> {{ $doctor->department }}</p>
                                <p><strong>Specialist:</strong> {{ $doctor->specialist }}</p>
                                <p><strong>Experience:</strong> {{ $doctor->doctor_experience }} years</p>
                            </div>
                            <div class="col-md-6">
                                <p><strong>Birth Date:</strong> {{ $doctor->birth_date }}</p>
                                <p><strong>Phone Number:</strong> {{ $doctor->phone_number }}</p>
                                <p><strong>Gender:</strong> {{ $doctor->gender }}</p>
                                <p><strong>Address:</strong> {{ $doctor->address }}</p>
                                <p><strong>About Me:</strong> {{ $doctor->about_me }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection
