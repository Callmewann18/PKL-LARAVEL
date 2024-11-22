@extends('layouts.app')

@section('content')
    <div class="card card-default">
        <div class="card-header">Create Posts</div>
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
            <form action="/posts/store" method="post" enctype="multipart/form-data">
                @csrf
                <table class="table table-borderless">
                    <tbody>
                        <tr>
                            <td><label for="title" class="form-label">Title</label></td>
                            <td>
                                <input class="form-control" type="text" name="title" id="title" value="{{ old('title') }}">
                                @if ($errors->has('title'))
                                    <p class="text-danger">{{ $errors->first('title') }}</p>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td><label for="description" class="form-label">Description</label></td>
                            <td>
                                <textarea name="description" id="description" cols="5" rows="5" class="form-control">{{ old('description') }}</textarea>
                                @if ($errors->has('description'))
                                    <p class="text-danger">{{ $errors->first('description') }}</p>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td><label for="image" class="form-label">Image</label></td>
                            <td>
                                <input class="form-control" type="file" name="image" id="image">
                                @if ($errors->has('image'))
                                    <p class="text-danger">{{ $errors->first('image') }}</p>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <button class="btn btn-success">Create Posts</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
@endsection
