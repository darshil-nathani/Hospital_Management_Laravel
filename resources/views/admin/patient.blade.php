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
        <div class="d-flex justify-content-end mb-4">
            <a class="btn btn-outline-primary rounded-pill mx-2 shadow-sm" href="{{ route('dashboard') }}">Go to Dashboard</a>
        </div>
        <div class="table-responsive animate__animated animate__fadeInUp">
            <table class="table table-hover table-striped table-sm">
                <thead class="table-dark">
                    <tr>
                        <th>Patient Name</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Phone Number</th>
                        <th>Email</th>
                        <th>View</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($data as $b)
                        <h2 class="text-center mt-4">{{$b->hospital_name}}</h2>
                        @forelse($b->hospital as $d)
                            <tr class="animate__animated animate__fadeInUp">
                                <td>{{$d->patient_name}}</td>
                                <td>{{$d->age}}</td>
                                <td>{{$d->gender}}</td>
                                <td>{{$d->phone_number}}</td>
                                <td>{{$d->email}}</td>
                                <td><a class="btn btn-outline-primary rounded mx-2  shadow-sm" style="width: 80%" href="{{ route('patient.show', $d->id) }}">View</a></td>
                                <td><a class="btn btn-outline-info rounded mx-2  shadow-sm" style="width: 80%" href="{{route('patient.edit', $d->id)}}">Edit</a></td>
                                <td>
                                    <form action="{{ route('patient.destroy', $d->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                        <input type="submit" class="btn btn-outline-danger rounded mx-2  shadow-sm" style="width: 80%" value="Delete">
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="text-center">No Data Available</td>
                            </tr>
                        @endforelse
                    @empty
                    <tr>
                        <td colspan="8" class="text-center">No Data Available</td>
                    </tr>
                    @endforelse
                </tbody>
             </table>
        </div>
    </div>
</body>
@endsection
