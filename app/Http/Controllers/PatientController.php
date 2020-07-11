<?php

namespace App\Http\Controllers;
use App\appointment;
use App\patient;
use Illuminate\Http\Request;
use App\doctor;
class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  // $d=appointment::find(1)->doctor;
       //$id= auth()->user()->id;
      // $appointment=appointment::where('patient_id',$id)->get();
       $appointments=auth()->user()->patient->appointment;
       return view('patient.viewAppointment', compact('appointments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patient.createAppointment');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $patient= new patient;
        $patient->user_id=auth()->user()->id;
        $patient->f_name=$request->get('first_name');
        $patient->l_name=$request->get('last_name');
        $patient->age=$request->get('age');
        $patient->phone=$request->get('phone');
        $patient->address=$request->get('address');
        $patient->fees=100;
        $patient->save();
        $appointment= new appointment;
        $specialty=$request->get('specialty');
        $appointment->doctor_id=doctor::where('specialty',$specialty)->first()->id;
        $appointment->patient_id=$patient->id;
        $appointment->save();

        return redirect()->route('patient.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
     public function indexA()
    {  // $d=appointment::find(1)->doctor;
       //$id= auth()->user()->id;
      // $appointment=appointment::where('patient_id',$id)->get();
       $appointments=auth()->user()->patient->appointment;
       return view('patient.viewAppointment', compact('appointments'));
    }
   /* public function test()
    {
        $schema= new Schema;
        $schema->addField('age');
        $patients= patient::all();
        $node = new Node;
        $node->setData($patient)
        foreach ($patients as $patient) {
            $node->setData($patient)
        }

    }*/
}
