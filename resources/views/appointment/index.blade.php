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
          <td>Fee</td>
          <td>Diagnosis</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($appointments as $appointment)
        <tr>
            
            <td>{{$appointment->patient->f_name}} {{$appointment->patient->l_name}}</td>
            <td>{{$appointment->doctor->f_name}} {{$appointment->doctor->l_name}}</td>
            <td>{{$appointment->date}}</td>
            <td>{{$appointment->fee}}</td>
            <td>{{$appointment->diagnosis}}</td>
            <td>
                <a href="{{ route('appointment.edit',$appointment->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('appointment.destroy', $appointment->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>

@endsection
