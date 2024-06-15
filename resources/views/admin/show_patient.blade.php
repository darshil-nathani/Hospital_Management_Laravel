@extends('template.layout')
@section('content')
<body>
    <div class="container mt-5">
        <div class="text-center mb-4">
            <h1 class="display-4 animate__animated animate__fadeInDown text-primary shadow-sm p-3 mb-5 bg-white rounded">Welcome, {{ Auth::user()->hospital_name }}</h1>
            <p class="lead animate__animated animate__fadeInUp">This Is {{ $patient->patient_name }}'s Profile</p>
        </div>
        <hr class="my-4">

        <div class="d-flex justify-content-end mb-4">
            <a class="btn btn-outline-danger rounded-pill mx-2 shadow-sm" href="{{ route('logout') }}">Logout</a>
            <a class="btn btn-outline-primary rounded-pill mx-2 shadow-sm" href="{{ route('dashboard') }}">Back</a>
        </div>

        <div class="card shadow-lg animate__animated animate__fadeIn">
            <div class="card-body">
                <h3 class="card-title text-center text-primary">{{ $patient->patient_name }}'s Profile</h3>
                <div class="row mt-4">
                    <div class="col-md-6">
                        <p><strong>Patient Name:</strong> {{ $patient->patient_name }}</p>
                        <p><strong>Birthdate:</strong> {{ $patient->birthdate }}</p>
                        <p><strong>Age:</strong> {{ $patient->age }}</p>
                        <p><strong>Gender:</strong> {{ $patient->gender }}</p>
                        <p><strong>Blood Group:</strong> {{ $patient->blood_group }}</p>
                        <p><strong>Email:</strong> {{ $patient->email }}</p>
                        <p><strong>Phone Number:</strong> {{ $patient->phone_number }}</p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Mobile:</strong> {{ $patient->mobile }}</p>
                        <p><strong>Address:</strong> {{ $patient->address }}</p>
                        <p><strong>Post Code:</strong> {{ $patient->post_code }}</p>
                        <p><strong>City:</strong> {{ $patient->city }}</p>
                        <p><strong>Heart Diseases:</strong> {{ $patient->heart_diseases }}</p>
                        <p><strong>Blood Pressure:</strong> {{ $patient->blood_pressure }}</p>
                        <p><strong>Accident:</strong> {{ $patient->accident }}</p>
                        <p><strong>Diabetic:</strong> {{ $patient->diabetic }}</p>
                        <p><strong>Surgeries:</strong> {{ $patient->surgeries }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
@endsection
