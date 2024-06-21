@extends('template.layout')
@section('content')
<body>
    @section('nav')
    {{ Auth::user()->hospital_name }}
    @endsection

    <div class="container mt-5">
        <div class="text-center mb-4">
            <h1 class="display-4 animate__animated animate__fadeInDown text-primary">Welcome, {{ Auth::user()->hospital_name }}</h1>
            <p class="lead animate__animated animate__fadeInUp">Your Comprehensive Healthcare Dashboard</p>
        </div>
        <hr class="my-4">

        <div class="d-flex justify-content-center mb-4 animate__animated animate__fadeIn">
            <div class="card mx-2 shadow-sm" style="width: 18rem;">
                <div class="card-body text-center">
                    <i class="fas fa-user-plus fa-3x mb-3 text-primary"></i>
                    <h5 class="card-title">Add Patient</h5>
                    <p class="card-text">Create a new patient profile.</p>
                    <a href="{{route('patient.create')}}" class="btn btn-primary btn-block">Add Patient</a>
                </div>
            </div>
            <div class="card mx-2 shadow-sm" style="width: 18rem;">
                <div class="card-body text-center">
                    <i class="fas fa-user-md fa-3x mb-3 text-primary"></i>
                    <h5 class="card-title">Add Doctor</h5>
                    <p class="card-text">Register a new doctor.</p>
                    <a href="{{route('doctor.create')}}" class="btn btn-primary btn-block">Add Doctor</a>
                </div>
            </div>
            <div class="card mx-2 shadow-sm" style="width: 18rem;">
                <div class="card-body text-center">
                    <i class="fas fa-users fa-3x mb-3 text-primary"></i>
                    <h5 class="card-title">Show Doctors</h5>
                    <p class="card-text">View the list of doctors.</p>
                    <a href="{{route('doctor.index')}}" class="btn btn-primary btn-block">Show Doctors</a>
                </div>
            </div>
            <div class="card mx-2 shadow-sm" style="width: 18rem;">
                <div class="card-body text-center">
                    <i class="fas fa-procedures fa-3x mb-3 text-primary"></i>
                    <h5 class="card-title">Show Patients</h5>
                    <p class="card-text">View the list of patients.</p>
                    <a href="{{route('patient.index')}}" class="btn btn-primary btn-block">Show Patients</a>
                </div>
            </div>
        </div>
</body>
@endsection

@section('styles')

@endsection

@section('scripts')

@endsection
