@extends('layout.app')

@section('content')
    <div class="card card-default">
        <div class="card-header">Create Image</div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="/gallery/store" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input class="form-control" type="file" name="image" id="image">
                    @if ($errors->has('image'))
                    <p class="text-danger">{{$errors->first('image')}}</p>
                        
                    @endif
                </div>
                <div class="mb-3">
                    <button class="btn btn-success">Create Image</button>
                </div>
            </form>
        </div>
    </div>
    
@endsection