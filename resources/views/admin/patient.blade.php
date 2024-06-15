@extends('template.layout')
@section('content')
<body>


    <div class="container mt-5">
        <div class="text-center mb-4">
            <h1 class="display-4 animate__animated animate__fadeInDown text-primary">Welcome, {{ Auth::user()->hospital_name }}</h1>
            <p class="lead animate__animated animate__fadeInUp">Your Comprehensive Healthcare Dashboard</p>
        </div>
        <hr class="my-4">
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
                                <td><a class="btn btn-sm btn-info" href="{{ route('patient.show', $d->id) }}">View</a></td>
                                <td><a class="btn btn-sm btn-warning" href="{{route('patient.edit', $d->id)}}">Edit</a></td>
                                <td>
                                    <form action="{{ route('patient.destroy', $d->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                        <input type="submit" class="btn btn-danger btn-sm" value="Delete">
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
