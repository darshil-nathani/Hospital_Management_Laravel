
@extends('template.layout')
@section('content')
<body>
    @section('nav')
    {{ Auth::user()->hospital_name }}
    @endsection
    <div class="container mt-5">
        <div class="text-center mb-4">
            <h1 class="display-4 animate__animated animate__fadeInDown text-primary shadow-sm p-3 mb-5 bg-white rounded">Add Doctor</h1>
        </div>
        <hr class="my-4">
        <div class="d-flex justify-content-end mb-4">
            <a class="btn btn-outline-primary rounded-pill mx-2 shadow-sm px-5" href="{{ route('doctor.index') }}">Back</a>
        </div>
        <form action="{{route('doctor.update',$doctor->id)}}" method="post" enctype="multipart/form-data" class="shadow p-4 rounded bg-light">
            @csrf
            @method('patch')
            <div class="row mt-2">
                <div class="form-group col-md-4 animate__animated animate__fadeInLeft">
                    <label class="control-label">Doctor Name</label>
                    <input type="text" value="{{$doctor->doctor_name}}" name="doctor_name" class="form-control" placeholder="Doctor Name">
                </div>
                <div class="form-group col-md-4 animate__animated animate__fadeInLeft">
                    <label class="control-label">Email</label>
                    <input type="email" value="{{$doctor->email}}" name="email" class="form-control" placeholder="Email">
                </div>
                <div class="form-group col-md-4 animate__animated animate__fadeInLeft">
                    <label class="control-label">Designation</label>
                    <input type="text" value="{{$doctor->designation}}" name="designation" class="form-control" placeholder="Designation">
                </div>
            </div>

            <div class="row mt-2">
                <div class="form-group col-md-4 animate__animated animate__fadeInRight">
                    <label class="control-label">Degrees</label>
                    <input type="text" value="{{$doctor->degree}}" name="degree" class="form-control" placeholder="Degrees">
                </div>
                <div class="form-group col-md-4 animate__animated animate__fadeInRight">
                    <label class="control-label">Department</label>
                    <input type="text" value="{{$doctor->department}}" name="department" class="form-control" placeholder="Department">
                </div>
                <div class="form-group col-md-4 animate__animated animate__fadeInRight">
                    <label class="control-label">Specialist</label>
                    <input type="text" value="{{$doctor->specialist}}" name="specialist" class="form-control" placeholder="Specialist">
                </div>
            </div>

            <div class="row mt-2">
                <div class="form-group col-md-6 animate__animated animate__fadeInUp">
                    <label class="control-label">Experience</label>
                    <input type="text" value="{{$doctor->doctor_experience}}" name="doctor_experience" class="form-control" placeholder="Experience">
                </div>
                <div class="form-group col-md-6 animate__animated animate__fadeInUp">
                    <label class="control-label">Birth Date</label>
                    <input type="date" value="{{$doctor->birth_date}}" name="birth_date" class="form-control" placeholder="Birth Date">
                </div>
            </div>

            <div class="row mt-2">
                <div class="form-group col-md-6 animate__animated animate__fadeInLeft">
                    <label class="control-label">Phone Number</label>
                    <input type="text" value="{{$doctor->phone_number}}" name="phone_number" class="form-control" placeholder="Phone Number">
                </div>
                <div class="form-group col-md-6 animate__animated animate__fadeInRight">
                    <label class="control-label">Gender</label>
                    <select class="form-control" name="gender">
                        <option value="{{$doctor->gender}}">{{$doctor->gender}}</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </div>
            </div>

            <div class="form-group mt-2 animate__animated animate__fadeInUp">
                <label class="control-label">Address</label>
                <textarea name="address" value="{{$doctor->address}}" class="form-control" rows="3" placeholder="Address">{{$doctor->address}}</textarea>
            </div>
            <div class="form-group mt-2 animate__animated animate__fadeInUp">
                <label class="control-label">About Me</label>
                <textarea name="about_me" value="{{$doctor->about_me}}" class="form-control" rows="3" placeholder="About Me">{{$doctor->about_me}}</textarea>
            </div>
            <div class="form-group mt-2 animate__animated animate__fadeInUp">
                <label class="control-label">Image</label>
                <input type="file" value="{{$doctor->file}}" name="image" class="form-control-file">
            </div>
            @if($doctor->image)
                    <p>Current image :</p>
                    <img src="{{asset('images/'.$doctor->image)}}" style="height: 100px" alt="{{$doctor->name}}">
                @endif
                </div>
            <div class="form-group row mt-4">
                <div class="col text-center">
                    <button type="submit" class="btn btn-success btn-lg shadow-sm">Submit</button>
                </div>
            </div>
        </form>
    </div>


</body>
@endsection
