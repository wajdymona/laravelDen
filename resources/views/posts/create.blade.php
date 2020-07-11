@extends('layouts.app')
@section('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.css">
    @endsection
@section('content')
    <div class="card card-default">
        <div class="card-header">{{isset($post)?"Update Post": "Create Post"}}</div>
        <div class="card-body">
            <form action="{{ isset($post)? route('posts.update',$post->id):route('posts.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @if(isset($post))
                @method('PUT')
                @endif
                <div class="form-group">
                    <label for="category"> Title</label>
                    <input type="text" name="title"  class="@error('name')is-invalid @enderror  form-control" placeholder="Add category name"
                    value="{{isset($post)? $post->title :""}}">
                    @error('name')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1"> content </label>
                    {{--<textarea class="form-control" name="con" rows="3"></textarea> --}}
                    <input id="x" type="hidden" name="con" value="{{isset($post)? $post->content :""}}" >
                    <trix-editor input="x"></trix-editor>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1"> Description</label>
                    <textarea class="form-control" name="description" rows="3"  >{{isset($post)? $post->description :""}}</textarea>
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
        @section('scripts')
            <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix-core.js">

            </script>
            @endsection
    </div>
@endsection