@extends('layout.app')

@section('content')
    <div class="card card-default">
        <div class="card-header">Edit Posts</div>
        <div class="card-body">
            <form action="/gallery/{{$gallery->id}}/update" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')

                <div class="mb-3">
                   <img src="{{asset('storage/'.$gallery->image)}}" width="100%" alt="">
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input class="form-control" type="file" name="image" id="image">
                    @if ($errors->has('image'))
                    <p class="text-danger">{{$errors->first('image')}}</p>
                        
                    @endif
                </div>
                <div class="mb-3">
                    <button class="btn btn-success">Upload Gallery</button>
                </div>
            </form>
        </div>
    </div>
    
@endsection