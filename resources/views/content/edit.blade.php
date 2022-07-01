@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/contents/{{$content->id}}" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label class="form-label">Category</label>
            <select class="form-control" name="category">
                @foreach ($categories as $category)
                <option value="{{ $category->id}}" {{ $category->id==$content->id_cat ? "selected" : "" }}>
                    {{ $category->category }}
                    @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" class="form-control" placeholder="title" name="title" value="{{$content->title}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Content</label>
            <input name="content" class="form-control" id="inputContent" value="{{ $content->content }}">
            @error('content')
            <div class="alert alert-danger">{{ $message}} </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Picture</label>
            <input type="file" class="form-control" placeholder="picture" name="picture">
            <div>
                <br>
                <img src="{{url('uploads')}}/{{$content->picture}}" width="120px">
            </div>
        </div>
        <div class="mb-3">
            @csrf
            @method('PUT')
            <input type="hidden" name="picture_old" value="{{$content->picture}}">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
</div>
@endsection