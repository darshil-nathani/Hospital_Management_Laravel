<?php

namespace App\Http\Controllers;

use App\Models\doctor;
use App\Models\User;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = User::withwherehas('doctor',function($abc){
            $abc->where("user_id","=",auth()->id());
        })->get();
        return view('admin.doctor', compact('data'));
        // return $data;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.add_doctor');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->hasfile('image')){
        $file = $request -> file('image');
        $filename = $file->getClientOriginalName();
        $file->move(public_path('images'),$filename);
        }
        $user = $request->all() + ['user_id' => auth()->id()];
        $user['image'] = $filename;
        $data = doctor::create($user);
        if($user){
            return redirect()->route('doctor.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(doctor $doctor)
    {
        return view('admin.show_doctor', compact('doctor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(doctor $doctor)
    {
        return view('admin.edit_doctor', compact('doctor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, doctor $doctor)
    {

        $user = $request->all() + ['user_id' => auth()->id()];

        if($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $file->move(public_path('images'), $filename);
            $user['image'] = $filename;
        }

        $doctor->update($user);
        return redirect()->route('doctor.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(doctor $doctor)
    {
        $doctor->delete();
        return redirect()->route('doctor.index');
    }
}
