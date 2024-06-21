


@extends('template.layout')
@section('content')
<body>
    @section('nav')
    {{ Auth::user()->hospital_name }}
    @endsection
    <div class="container mt-5">
        <div class="text-center mb-4">
            <h1 class="display-4 animate__animated animate__fadeInDown text-primary shadow-sm p-3 mb-5 bg-white rounded">Edit {{$patient->patient_name}} information</h1>
        </div>
        <hr class="my-4">
        <div class="d-flex justify-content-end mb-4">
            <a class="btn btn-outline-primary rounded-pill mx-2 shadow-sm px-5" href="{{ route('patient.index') }}">back</a>
        </div>
        <form action="{{route('patient.update',$patient->id)}}" method="post" enctype="multipart/form-data" class="shadow p-4 rounded bg-light animate__animated animate__fadeInUp">
            @csrf
            @method('patch')
            <div class="form-body">
                <div class="row mt-2">
                    <div class="form-group col-md-4 animate__animated animate__fadeInLeft">
                        <label class="control-label">Patient Name</label>
                        <input type="text" value="{{$patient->patient_name}}" name="patient_name" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group col-md-4 animate__animated animate__fadeInLeft">
                        <label class="control-label">Birth Date</label>
                        <input type="date" value="{{$patient->birthdate}}" name="birthdate" class="form-control" placeholder="Date">
                    </div>
                    <div class="form-group col-md-4 animate__animated animate__fadeInLeft">
                        <label class="control-label">Age</label>
                        <input type="text" value="{{$patient->age}}" name="age" id="old" class="form-control" placeholder="Age">
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="form-group col-md-6 animate__animated animate__fadeInRight">
                        <label class="control-label">Gender</label>
                        <select class="form-control" name="gender">
                            <option {{$patient->gender}}>{{$patient->gender}}</option>
                            <option value='male'>Male</option>
                            <option value='female'>Female</option>
                            <option value='other'>Other</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6 animate__animated animate__fadeInRight">
                        <label class="control-label">Blood Group</label>
                        <select class="form-control" name="blood_group">
                            <option {{$patient->blood_group}}>{{$patient->blood_group}}</option>
                            <option value='A+'>A+</option>
                            <option value='A-'>A-</option>
                            <option value='B+'>B+</option>
                            <option value='B-'>B-</option>
                            <option value='O+'>O+</option>
                            <option value='O-'>O-</option>
                            <option value='AB+'>AB+</option>
                            <option value='AB-'>AB-</option>
                            <option value='Unknown'>Unknown</option>
                        </select>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="form-group col-md-4 animate__animated animate__fadeInLeft">
                        <label class="control-label">Email</label>
                        <input type="text" id="patient_id" value="{{$patient->email}}" name="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group col-md-4 animate__animated animate__fadeInLeft">
                        <label class="control-label">Phone Number</label>
                        <input type="text" value="{{$patient->phone_number}}" name="phone_number" class="form-control" placeholder="Phone Number">
                    </div>
                    <div class="form-group col-md-4 animate__animated animate__fadeInLeft">
                        <label class="control-label">Mobile</label>
                        <input type="text" value="{{$patient->mobile}}" name="mobile" class="form-control" placeholder="Mobile Number">
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="form-group col-md-8 animate__animated animate__fadeInRight">
                        <label class="control-label">Address</label>
                        <textarea name="address" id="editor1" class="form-control" rows="3" placeholder="Address">{{$patient->address}}</textarea>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="form-group col-md-4 animate__animated animate__fadeInLeft">
                        <label class="control-label">Post Code</label>
                        <input type="text" value="{{$patient->post_code}}" class="form-control" name="post_code">
                    </div>
                    <div class="form-group col-md-4 animate__animated animate__fadeInLeft">
                        <label class="control-label">City</label>
                        <input type="text" value="{{$patient->city}}" class="form-control" name="city">
                    </div>
                </div>

                <fieldset>
                    <div class="row mt-4">
                        <div class="col-12">
                            <h5>Please select Illness as following</h5>
                        </div>
                        <div class="form-group col-md-4 animate__animated animate__fadeInUp">
                            <label class="control-label">Heart Diseases</label>
                            <select class="form-control" value="{{$patient->heart_diseases}}" name="heart_diseases">
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4 animate__animated animate__fadeInUp">
                            <label class="control-label">High Blood Pressure</label>
                            <select class="form-control" value="{{$patient->blood_pressure}}" name="blood_pressure">
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4 animate__animated animate__fadeInUp">
                            <label class="control-label">Any Accidents</label>
                            <select class="form-control" value="{{$patient->accident}}" name="accident">
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4 mt-2 animate__animated animate__fadeInUp">
                            <label class="control-label">Diabetic</label>
                            <select class="form-control" value="{{$patient->diabetic}}" name="diabetic">
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4 mt-2 animate__animated animate__fadeInUp">
                            <label class="control-label">Any Surgeries</label>
                            <select class="form-control" value="{{$patient->surgeries}}" name="surgeries">
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4 mt-2 animate__animated animate__fadeInUp">
                            <label class="control-label">Others</label>
                            <select class="form-control" value="{{$patient->other}}" name="other">
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                    </div>
                </fieldset>
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
