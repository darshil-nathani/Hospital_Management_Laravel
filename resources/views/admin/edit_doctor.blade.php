@extends('template.layout')
@section('content')
<body>
        <h1>edit Doctor</h1>
        <hr>
        <form action="{{route('doctor.update',$doctor->id)}}"  method="post" enctype="multipart/form-data">
        @csrf
        @method('patch')
            <div class="row mt-2">
                <div class="form-group col-md-4">
                    <label class=" control-label">doctor_name</label>
                    <div class="">
                        <input type="text" value="{{$doctor->doctor_name}}" name="doctor_name" class="form-control" placeholder="doctor_name" >
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label class=" control-label">email</label>
                    <div class="">
                        <input type="email" value="{{$doctor->email}}" name="email" class="form-control" placeholder="email" >
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label class=" control-label">designation</label>
                    <div class="">
                        <input type="text" value="{{$doctor->designation}}" name="designation"  class="form-control" placeholder="designation">
                    </div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="form-group col-md-4">
                    <label class=" control-label">degrees</label>
                    <div class="">
                        <input type="text" value="{{$doctor->degree}}" name="degree" class="form-control" placeholder="degrees">
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label class=" control-label"> department </label>
                    <div class="">
                        <input type="text" value="{{$doctor->department}}" name="department"  class="form-control"department">
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label class=" control-label">specialist</label>
                    <div class="">
                        <input type="text" value="{{$doctor->specialist}}" name="specialist" class="form-control" placeholder="specialist">
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="form-group col-md-6">
                    <label class=" control-label">doctor_experience</label>
                    <div class="">
                        <input type="text" value="{{$doctor->doctor_experience}}" name="doctor_experience"  class="form-control" placeholder="doctor_experience">
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label class="control-label">birth_date</label>
                    <div class="">
                       <input type="date" value="{{$doctor->birth_date}}"  name="birth_date"   class="form-control datepicker1" placeholder="birthdate">
                     </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="form-group col-md-6">
                    <label class="control-label">phone_number</label>
                    <div class="">
                        <input type="text" value="{{$doctor->phone_number}}"  name="phone_number"  class="form-control" placeholder="phone_number" >
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <div class="form-group">
                        <label class=" control-label">gender</label>
                        <div class="">
                            <select class="form-control" name="gender">
                                <option value="{{$doctor->doctor_name}}">{{$doctor->doctor_name}}</option>
                                <option value='male'>male</option>
                                <option value='female'>female</option>
                               <option value='other'>other</option>
                            </select>
                        </div>
            </div>
            </div>
            <div class="form-group">
                <label class=" control-label">address</label>
                <div class="">
                    <textarea name="address"  class="form-control" row mt-2s="6">{{$doctor->address}}
                    </textarea>
                </div>
            </div>
            <div class="form-group">
                <label class=" control-label">about_me</label>
                <div class="">
                    <textarea name="about_me"  class=" form-control" row mt-2s="6">{{$doctor->about_me}}
                    </textarea>
                </div>
            </div>
            <div class="form-group">
                <label class=" control-label">Image</label>
                <div>
                <input type="file" name="image">
                @if($doctor->image)
                    <p>Current image :</p>
                    <img src="{{asset('images/'.$doctor->image)}}" style="height: 100px" alt="{{$doctor->name}}">
                @endif
                </div>
            </div>
            <div class="form-group row mt-2 mt-3">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-success">submit</button>
                    <a href="{{route('doctor.index')}}" class="btn btn-primary btn-block">Back</a>
                </div>
            </div>
            <div class="clearfix"></div>
        </form>
</body>
@endsection

