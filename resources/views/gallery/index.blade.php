@extends('layout.app')

@section('content')
<div class="card card-default">
    <div class="card-header">Upload</div>
    <div class="card-body">
        @if ($gallery->count() > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Title</th>
                    <th></th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($gallery as $post )
                <tr>
                    <td>
                        <img src="{{asset('storage/'.$post->image)}}" alt="" width="100px" height="50px">
                    </td>
                    <td>Image</td>
                    <td>{{$post->title}}</td>
                    <td>
                        <a href="/gallery/{{$post->id}}/show" class="btn btn-primary btn-sm">View</a>
                        <a href="/gallery/{{$post->id}}/edit" class="btn btn-info btn-sm text-white">Edit</a>
                        <form class="d-inline" action="/gallery/{{$post->id}}/delete" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                    
                @endforeach
            </tbody>
        </table>
        @else
        <h3 class="text-center">No Post</h3>
        @endif
     

    </div>
</div>
    
@endsection