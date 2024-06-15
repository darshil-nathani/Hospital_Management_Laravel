@extends('template.layout')
<body>
        <div style="height: 50px" class="shadow p-3 mb-5 bg-white rounded">
            <div class="mt-3 position-absolute end-0 mx-5 mt-0 top-0" style="">
                <a class="btn btn-primary px-5 font-weight-bold" href="{{route('register')}}">registeration</a>
                <a class="btn btn-primary px-5 font-weight-bold" href="{{route('login')}}">Login</a>
            </div>
        </div>
    <div>
        <h1 class="mt-3">Laravel Authentication</h1>
        <hr class="mt-3">
    </div>
</body>

