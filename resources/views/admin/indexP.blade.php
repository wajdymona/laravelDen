@extends('base')
@section('main')


<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Patients</h1>  
    <div>
    <a style="margin: 19px;" href="/" class="btn btn-primary">home</a>
    </div>  
  <table class="table table-striped">
    <thead>
        <tr>
        
          <td>Patient Name</td>
          
          <td>Age</td>
          <td>Phone</td>
          <td>Address</td>
          <td>Fees</td>
         <td colspan = 2 >Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($patients as $patient)
        <tr>
            
            <td>{{$patient->f_name}} {{$patient->l_name}}</td>
            <td>{{$patient->age}}</td>
             <td>{{$patient->phone}}</td>
            <td>{{$patient->address}}</td>
            <td>{{$patient->fees}}</td>
           <td>
                <a href="{{ route('admin.editP',$patient->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <a href="{{ route('admin.editAP',$patient->id)}}" class="btn btn-primary">add Appointment</a>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>

@endsection
