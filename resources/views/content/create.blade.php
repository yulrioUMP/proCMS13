@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/contents" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label class="form-label">Category</label>
            <select class="form-control" name="category">
                @foreach ($categories as $category)
                <option value="{{ $category->id}}">{{ $category->category }}
                    @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" class="form-control" placeholder="title" name="title" value="{{ old('title') }}">
            @error("title")
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Content</label>
            <input name="content" class="form-control" id="inputContent" value="{{ old('content')}}">
            @error('content')
            <div class="alert alert-danger">{{ $message}} </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Picture</label>
            <input type="file" class="form-control" placeholder="picture" name="picture">
            @error("picture")
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            @csrf
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection