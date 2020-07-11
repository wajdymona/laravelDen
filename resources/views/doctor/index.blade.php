@extends('base')
@section('main')

<div class="col-sm-12">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Contacts</h1>   
    <div>
    <a style="margin: 19px;" href="{{ route('doctor.create')}}" class="btn btn-primary">New contact</a>
    </div> 
  <table class="table table-striped">
    <thead>
        <tr>
         
          <td>Name</td>
          <td>Email</td>
          <td>Job Title</td>
          <td>City</td>
       
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($doctors as $doctor)
        <tr>
            <td>{{$doctor->f_name}} {{$doctor->l_name}}</td>
         
            <td>{{$doctor->age}}</td>
            <td>{{$doctor->phone}}</td>
            <td>{{$doctor->address}}</td>
            <td>
                <a href="{{ route('doctor.edit',$doctor->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('doctor.destroy', $doctor->id)}}" method="post">
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