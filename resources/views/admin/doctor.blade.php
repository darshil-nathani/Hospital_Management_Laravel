@extends('template.layout')
@section('content')
<body>
    @section('nav')
    {{ Auth::user()->hospital_name }}
    @endsection
    <div class="container mt-5">
        <div class="text-center mb-4">
            <h1 class="display-4 animate__animated animate__fadeInDown text-primary shadow-sm p-3 mb-5 bg-white rounded">Welcome, {{ Auth::user()->hospital_name }}</h1>
            <p class="lead animate__animated animate__fadeInUp">This Is A Doctor's in {{ Auth::user()->hospital_name }}</p>
        </div>
        <hr class="my-4">

        <div class="d-flex justify-content-end mb-4">
            <a class="btn btn-outline-primary rounded-pill mx-2 shadow-sm" href="{{ route('dashboard') }}">Go to Dashboard</a>
        </div>

        <div class="row">
            @forelse($data as $b)
                {{-- <h2 class="text-center font-weight-bold mb-4 col-12">Doctor's In {{ $b->hospital_name }}</h2> --}}
                @forelse($b->doctor as $d)
                    <div class="col-md-4 mb-4 animate__animated animate__fadeInUp">
                        <div class="card shadow-sm h-100">
                            <img src="{{ asset('images/'.$d->image) }}" class="card-img-top" alt="{{ $d->doctor_name }}" style="height: 200px; object-fit: cover;">
                            <div class="card-body text-center">
                                <h5 class="card-title">{{ $d->doctor_name }}</h5>
                                <p class="card-text"><strong>Specialist:</strong> {{ $d->specialist }}</p>
                                <p class="card-text"><strong>Experience:</strong> {{ $d->doctor_experience }} years</p>
                                <div class="d-flex justify-content-center mb-2">
                                    <a class="btn btn-outline-primary rounded mx-2  shadow-sm" style="width: 80%" href="{{ route('doctor.show', $d->id) }}">More Info</a>
                                </div>
                                <div class="d-flex justify-content-center mb-2">
                                    <a class="btn btn-outline-info rounded mx-2  shadow-sm" style="width: 80%" href="{{  route('doctor.edit', $d->id) }}">Edit</a>
                                </div>
                                    <form action="{{ route('doctor.destroy', $d->id) }}" method="post" class="d-flex justify-content-center mb-4">
                                        @csrf
                                        @method('delete')
                                        <button type="submit"class="btn btn-outline-danger rounded mx-2  shadow-sm" style="width: 80%">Delete</button>
                                    </form>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center">
                        <p>No Data Available</p>
                    </div>
                @endforelse
            @empty
                <div class="col-12 text-center">
                    <p>No Data Available</p>
                </div>
            @endforelse
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
@endsection
