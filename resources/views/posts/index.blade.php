@extends('layouts.app')
@section('content')
    <div class="clearfix">
    <!--<a href="categories/create" class="btn btn-success" style="margin-bottom: 10px">Add category </a>-->
        <a href="{{route('posts.create')}}" class="btn btn-success float-right" style="margin-bottom: 10px">Add category </a>

    </div>
    <div class="card card-default">
        <div class="card-header">All categories</div>
        <div class="card-body">

<table class="card">
    @if($posts->count()>0)
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">image</th>
                    <th scope="col">Title</th>
                    <th scope="col">Action</th>


                </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>
                        <img src="{{asset('storage/'.$post->image)}}" alt="dfs" width="100px" height="50px" >
                        </td>
                        <td>{{$post->title}}</td>
                        <td>
                            <form class="float-right" method="POST" action="{{ route('posts.destroy',$post->id)}}">
                                @csrf
                                @method('DELETE')

<button class="btn btn-danger btn-sm ml-2 ">
{{$post->trashed()? 'Delete':'Trashed'}}
</button>

                            </form>
                            @if(!$post->trashed())
                            <a href="{{ route('posts.edit',$post->id)}}" class="btn btn-primary float-right btn-sm">Edit</a>
@endif
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>

</table>
            @else
                <div class="card-body">
                    <h1 class="text-center">
                        No Posts
                    </h1>
                </div>
                @endif
        </div>
    </div>
    @endsection