<?php

namespace App\Http\Controllers;
use App\appointment;
use App\patient;
use App\doctor;
use App\user;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    {
       
        $appointments=appointment::all();
        return view('admin.indexA', compact('appointments'));
    }
    public function editA($id)
    {
    
        $appointment = appointment::find($id);
        return view('admin.editA', compact('appointment'));        
    
    }
    public function updateA(Request $request, $id)
    {
       $request->validate([
            
            'date'=>'required',
            'time'=>'required'
        ]);
        $appointment = appointment::find($id);
        $appointment->date =  $request->get('date');
        $appointment->time = $request->get('time');
      
       
        $appointment->save();
        return redirect('/viewAd')->with('success', 'appointment updated!');
    }
      public function indexP()
    {
       
        $patients=patient::all();
        return view('admin.indexP', compact('patients'));
    }
    public function editP($id)
    {
    
        $patient = patient::find($id);
        return view('admin.editP', compact('patient'));        
    
    }
    public function updateP(Request $request, $id)
    {
       $request->validate([
            
            'fees'=>'required'
           
        ]);
        $patient = patient::find($id);
        $patient->fees =  $request->get('fees');
       // $appointment->time = $request->get('time');
      
       
        $patient->save();
        return redirect('/viewP')->with('success', 'fees updated!');
    }
        public function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
        $data=patient::where('id',$query)->get();
      //$data = DB::table('doctor')->where('id', 'like', '%'.$query.'%')->get();
         
      }
      else
      {
       $data = DB::table('patient')
         ->orderBy('id', 'desc')
         ->get();
      }

      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        <tr>
         <td>'.$row->id.'</td>
         <td>'.$row->f_name.'</td>
         <td>'.$row->l_name.'</td>
         <td>'.$row->age.'</td>
         <td>'.$row->address.'</td>
        </tr>
        ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }
    }
    public function editAP($id)
    {
    
        $patient = patient::find($id);
        return view('admin.editAP', compact('patient'));        
    
    }
    public function updateAP(Request $request, $id)
    {
       $request->validate([
            
            'date'=>'required',
            'time'=>'required'
        ]);
        $patient = patient::find($id);
       $appointment= new appointment;
        $ap=$patient->appointment->first();
       $appointment->patient_id=$id;
       $appointment->doctor_id=$ap->doctor_id;
      // $appointment->specialty=$ap->specialty;
        $appointment->date =  $request->get('date');
        $appointment->time = $request->get('time');
      
       
        $appointment->save();
        return redirect('/viewAd')->with('success', 'appointment updated!');
    }
    public function createD()
    {
        return view('Admin.createD');
    }
    public function storeDoctor(Request $request)
    {
             $user=User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')),
            'type' =>'doctor'
            ]);
             $doctor= new doctor;
             $doctor->user_id=$user->id;
             $doctor->f_name=$request->get('first_name');
             $doctor->l_name=$request->get('last_name');
             $doctor->phone=$request->get('phone');
             $doctor->age=$request->get('age');
             $doctor->address=$request->get('address');
             $doctor->specialty=$request->get('specialty');
             $doctor->Experience=$request->get('experience');
             $doctor->image='s';
             $doctor->save();
return redirect('/');


    }
}
