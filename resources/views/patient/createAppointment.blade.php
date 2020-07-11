@extends('base')
@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Create an appointment</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('patient.store') }}">
          @csrf
          <div class="form-group">    
              <label for="first_name">First Name:</label>
              <input type="text" class="form-control" name="first_name"/>
          </div>
          <div class="form-group">
              <label for="last_name">Last Name:</label>
              <input type="text" class="form-control" name="last_name"/>
          </div>
          
          <div class="form-group">
              <label for="age">Age:</label>
              <input type="text" class="form-control" name="age"/>
          </div>
          <div class="form-group">
              <label for="phone">Phone:</label>
              <input type="text" class="form-control" name="phone"/>
          </div>
          <div class="form-group">
              <label for="address">Address:</label>
              <input type="text" class="form-control" name="address"/>
          </div> 
          <div class="form-group">
  <label for="specialty">Select specialty:</label>
  <select class="form-control" name="specialty">
    <option>Crowns Bridges</option>
    <option>Implants</option>
    <option>Teeth Whitening</option>
    <option>Root Canals</option>
    <option>Wisdom Teeths</option>
    <option>Braces</option>
  </select>
</div>                       
          <button type="submit" class="btn btn-success">Add appointment</button>
      </form>
  </div>
</div>
</div>
@endsection