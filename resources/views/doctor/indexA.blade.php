@extends('base')
@section('main')


<div class="row">
<div class="col-sm-12">
  <div>
    <a style="margin: 19px;" href="/" class="btn btn-primary">home</a>
    </div> 
    <h1 class="display-3">Appointments</h1>    
  <table class="table table-striped">
    <thead>
        <tr>
        
          <td>Patient Name</td>
          <td>Doctor Name</td>
          <td>Date</td>
          <td>Time</td>
          <td>Fee</td>
          <td>Diagnosis</td>
          <td>Comleted</td>
         <td >Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($appointments as $appointment)
        <tr>
            
            <td>{{$appointment->patient->f_name}} {{$appointment->patient->l_name}}</td>
            <td>{{$appointment->doctor->f_name}} {{$appointment->doctor->l_name}}</td>
            <td>{{$appointment->date}}</td>
             <td>{{$appointment->time}}</td>
            <td>{{$appointment->fee}}</td>
            <td>{{$appointment->diagnosis}}</td>
             <td>{{$appointment->completed}}</td>
           <td>
                <a href="{{ route('doctor.editA',$appointment->id)}}" class="btn btn-primary">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>

@endsection
