@extends('base')
@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h3 class="display-3">Create a doctor</h3>
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
      <form method="post" action="{{ route('CreateDoctor') }}">
          @csrf
          <div class="form-group">    
              <label for="first_name">First Name:</label>
              <input type="text" class="form-control" name="first_name" autofocus/>
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
<div class="form-group">
              <label for="experiance">experiance:</label>
              <input type="text" class="form-control" name="experience"/>
          </div> 
            <div class="form-group">
                            <label for="name" >{{ __('User Name') }}</label>


                            
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" >

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
                        </div>


                        <div class="form-group ">
                            <label for="email" >{{ __('E-Mail Address') }}</label>

                            
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          
                        </div>

                        <div class="form-group ">
                            <label for="password" >{{ __('Password') }}</label>

                            
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" >{{ __('Confirm Password') }}</label>

                            
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                         
                        </div>                    
          <button type="submit" class="btn btn-success">Create</button>
      </form>
  </div>
</div>
</div>
@endsection