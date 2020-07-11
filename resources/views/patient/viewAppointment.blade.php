@extends('base')
@section('main')


<div class="row">
<div class="col-sm-12">
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
           
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>

@endsection
