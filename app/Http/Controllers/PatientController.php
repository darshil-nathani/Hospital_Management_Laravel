<?php

namespace App\Http\Controllers;
use App\Models\Patient;
use App\Models\User;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = User::withwherehas('hospital',function($abc){
            $abc->where("user_id","=",auth()->id());
        })->get();
        return view('admin.patient', compact('data'));
        // return $data;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.add_patient');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $data = $request->validate([
        //     'patient_name' => 'required',
        //     'birthdate' => 'required',
        //     'age' => 'required',
        //     'gender' => 'required',
        //     'blood_group' => 'required',
        //     'email' => 'required',
        //     'phone_number' => 'required',
        //     'mobile' => 'required',
        //     'address' => 'required',
        //     'post_code' => 'required',
        //     'city' => 'required',
        //     'heart_diseases' => 'required',
        //     'blood_pressure' => 'required',
        //     'accident' => 'required',
        //     'diabetic' => 'required',
        //     'surgeries' => 'required',
        //     'others' => 'required',
        //     'user_id' => 'nullable|exists:users,id',
        // ]);
        // $data = New Patient();
        // $data->user_id =
        // $data['user_id'] = auth()->id();
        $user = Patient::create($request->all()+ ['user_id' => auth()->id()]);
        if($user){
            return redirect()->route('patient.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(patient $patient)
    {
        return view('admin.show_patient', compact('patient'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(patient $patient)
    {
        return view('admin.edit_patient', compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, patient $patient)
    {
        $patient->update( $request->all() + ['user_id' => auth()->id()]);
        return redirect()->route('patient.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(patient $patient)
    {
        $patient->delete();
        return redirect()->route('patient.index');
    }
}
