@extends('template.layout')
@section('content')
{{$patient->id}}
<body>
    {{-- <h1>Welcome {{Auth::user()->hospital_name}}</h1> --}}
                    <form action="{{route('patient.update',$patient->id)}}" method="post">
                        @csrf
                        @method('patch')
                        <div class="form-body">
                            <div class="row mt-2">
                                <div class="form-group col-md-4">
                                    <label class=" control-label">patient name </label>
                                    <div class="">
                                        <input type="text" value="{{$patient->patient_name}}" name="patient_name" class="form-control" placeholder="name" >
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class=" control-label">birth_date</label>
                                    <div class=" ">
                                       <input type="date" value="{{$patient->birthdate}}" name="birthdate"  class="form-control datepicker1 birth_date"  placeholder="date">
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class=" control-label">age</label>
                                    <div class="">
                                       <input type="text" value="{{$patient->age}}" name="age" id="old" class="form-control" placeholder="age">
                                    </div>
                                </div>

                            <div class="row mt-2">
                                <div class="form-group col-md-6">
                                    <label class=" control-label">gender</label>
                                    <div class="">
                                        <select class="form-control" name="gender">
                                            <option value="{{$patient->gender}}">{{$patient->gender}}</option>
                                            <option value='male'>male</option>
                                            <option value='female'>female</option>
                                           <option value='other'>other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="control-label">blood_group </label>
                                    <div class="">
                                        <select class="form-control"  name="blood_group">
                                            <option value='{{$patient->blood_group}}'>{{$patient->blood_group}}</option>
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
                            </div>


                            <div class="row mt-2">
                                <div class="form-group col-md-4">
                                    <label class="control-label"> email</label>
                                    <div class="">
                                        <input type="text" id="patient_id" value="{{$patient->email}}" name="email" class="form-control"  placeholder="email">
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class=" control-label"> phone_number</label>
                                    <div class="">
                                        <input type="text"  value="{{$patient->phone_number}}" name="phone_number" class="form-control"  placeholder="phone_number">
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class=" control-label">mobile</label>
                                    <div >
                                        <input type="text"  value="{{$patient->mobile}}" name="mobile" class="form-control"  placeholder="Mobile Number">
                                    </div>
                                </div>
                           </div>

                           <div class="row mt-2">
                               <div class="form-group col-md-8">
                                <label class="control-label">address</label>
                                    <div class="">
                                         <textarea value="" name="address" id="editor1"  class="form-control" row mt-2s="3">{{$patient->address}}</textarea>
                                    </div>
                                </div>
                           </div>


                            <div class="row mt-2">
                                <div class="form-group col-md-4">
                                    <label class=" control-label">post_code</label>
                                    <div class="">
                                        <input type="text"  class="form-control" value="{{$patient->post_code}}" name="post_code">
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class=" control-label">city</label>
                                    <div class="">
                                        <input type="text"  class="form-control" value="{{$patient->city}}" name="city">
                                    </div>
                                </div>
                            </div>
                            <fieldset>
                                <div class="row mt-4">
                                    <h5>Please select Illness as following</h5>
                                    <div class="form-group col-md-4">
                                        <label class="control-label"> Heart Diseases </label>
                                        <div class="">
                                            <select class="form-control" value="{{$patient->heart_diseases}}" name="heart_diseases">
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class=" control-label"> HighBlood Pressure</label>
                                        <div class="">
                                            <select class="form-control" value="{{$patient->blood_pressure}}" name="blood_pressure">
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class=" control-label"> Any Accidents</label>
                                        <div >
                                            <select class="form-control" value="{{$patient->accident}}" name="accident">
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4 mt-2">
                                        <label class=" control-label"> Diabetic</label>
                                        <div >
                                            <select class="form-control" value="{{$patient->diabetic}}" name="diabetic">
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4 mt-2">
                                        <label class="control-label"> Any Surgeries</label>
                                        <div>
                                             <select class="form-control" value="{{$patient->surgeries}}" name="surgeries">
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4 mt-2">
                                        <label class=" control-label"> Others</label>
                                        <div >
                                             <select class="form-control" value="{{$patient->other}}" name="other">
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                    </div>
                            </fieldset>
                        </div>
                <input type="submit" class="btn btn-primary btn-block mt-3">
                <a href="{{route('dashboard')}}" class="btn btn-primary btn-block mt-3 mx-1">Back</a>
            </form>
</body>
@endsection
