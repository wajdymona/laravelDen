@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a doctor</h1>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('doctor.update', $doctors->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">
                <label for="phone">phone:</label>
                <input type="text" class="form-control" name="phone" value={{ $doctors->phone }} />
            </div>
            <div class="form-group">
                <label for="address">address:</label>
                <input type="text" class="form-control" name="address" value={{ $doctors->address }} />
            </div>
            <div class="form-group">
                <label for="specialty">specialty:</label>
                <input type="text" class="form-control" name="specialty" value={{ $doctors->specialty }} />
            </div>
           
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection