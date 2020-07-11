<?php

namespace App\Http\Controllers;
use App\doctor;
use App\patient;
use App\appointment;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $doctors = doctor::all();
        return view('doctor.index', compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('doctor.create');
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
        

        doctor::create($request->all());

        return redirect()->route('doctor.index')

                ->with('success','doctor created successfully.');
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
    
        $doctors = doctor::find($id);
        return view('doctor.edit', compact('doctors'));        
    
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
       $request->validate([
            'phone'=>'required',
            'address'=>'required',
            'specialty'=>'required'
        ]);
        $doctor = doctor::find($id);
        $doctor->phone =  $request->get('phone');
        $doctor->address = $request->get('address');
        $doctor->specialty = $request->get('specialty');
       
        $doctor->save();
        return redirect('/doctor')->with('success', 'doctor updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         {
        $doctors = doctor::find($id);
        $doctors->delete();
        return redirect('/doctor')->with('success', 'Contact deleted!');
    }
    }
    public function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
        $data=doctor::where('id',$query)->get();
      //$data = DB::table('doctor')->where('id', 'like', '%'.$query.'%')->get();
         
      }
      else
      {
       $data = DB::table('doctor')
         ->orderBy('id', 'desc')
         ->get();
      }

      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {$row->l_name="ahmed";
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
public function updateA(Request $request, $id)
    {
       $request->validate([
            
            'fee'=>'required',
            'diagnosis'=>'required'
        ]);
        $appointment = appointment::find($id);
        $appointment->patient->fees= $appointment->patient->fees+$request->get('fee');
        $appointment->fee =  $request->get('fee');
        $appointment->diagnosis = $request->get('diagnosis');
        $appointment->completed = true;
        $appointment->patient->save();
        $appointment->save();
        return redirect('/viewA')->with('success', 'appointment updated!');
    }
public function editA($id)
    {
    
        $appointment = appointment::find($id);
        return view('doctor.editA', compact('appointment'));        
    
    }
    public function indexA()
    {
       
        $appointments=auth()->user()->doctor->appointment;
        return view('doctor.indexA', compact('appointments'));
    }
}
