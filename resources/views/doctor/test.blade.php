@extends('layouts.layouts.app3')

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.css">
    
@section('table')
    <div class="card card-default">
        <div class="card-header">{{isset($post)?"Update Post": "Create Post"}}</div>
        <div class="card-body">
            <form action="{{ isset($post)? route('doctor.update',$post->id):route('doctor.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @if(isset($post))
                @method('PUT')
                @endif
                <div class="form-group">
                    <label for="category"> Userid</label>
                    <input type="text" name="title"  class="@error('name')is-invalid @enderror  form-control" placeholder="Add category name"
                    value="{{isset($post)? $post->title :""}}">
</div>
<div class="form-group">
                    <label for="category"> First Name</label>
                    <input type="text" name="title"  class="@error('name')is-invalid @enderror  form-control" placeholder="Add category name"
                    value="{{isset($post)? $post->title :""}}">
                   
                </div>
                <div class="form-group">
                    <label for="category"> Last Name</label>
                    <input type="text" name="title"  class="@error('name')is-invalid @enderror  form-control" placeholder="Add category name"
                    value="{{isset($post)? $post->title :""}}">
                   
                </div>
                <div class="form-group">
                    <label for="category"> Age </label>
                    <input type="text" name="title"  class="@error('name')is-invalid @enderror  form-control" placeholder="Add category name"
                    value="{{isset($post)? $post->title :""}}">
                   
                </div>
                    <div class="form-group">
                    <label for="category"> Phone </label>
                    <input type="text" name="title"  class="@error('name')is-invalid @enderror  form-control" placeholder="Add category name"
                    value="{{isset($post)? $post->title :""}}">
                   
                </div>
                     <div class="form-group">
                    <label for="category"> Address </label>
                    <input type="text" name="title"  class="@error('name')is-invalid @enderror  form-control" placeholder="Add category name"
                    value="{{isset($post)? $post->title :""}}">
                   
                </div>
                     <div class="form-group">
                    <label for="category"> specialty </label>
                    <input type="text" name="title"  class="@error('name')is-invalid @enderror  form-control" placeholder="Add category name"
                    value="{{isset($post)? $post->title :""}}">
                   
                </div>
                     <div class="form-group">
                    <label for="category"> Experience </label>
                    <input type="text" name="title"  class="@error('name')is-invalid @enderror  form-control" placeholder="Add category name"
                    value="{{isset($post)? $post->title :""}}">
                   
                </div> 

                
@if(isset($post))
<div class="form-group">

    <img src="{{asset('storage/'.$post->image)}}" alt="dfs" width="100%"  >

</div>
@endif
                <div class="form-group">
                    <label for="exampleFormControlFile1"> Image </label>
                    <input type="file" class="form-control-file" name="image">
                </div>
                <div class="form-group">
                    <button class="btn btn-success">{{isset($post)?"Update":"Add"}}</button>
                </div>
            </form>
        </div>
        
            <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix-core.js">

            </script>
            
    </div>
@endsection