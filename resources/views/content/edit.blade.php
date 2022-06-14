@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/contents/{{$content->id}}" method="post">
        <div class="mb-3">
            <label class="form-label">Category</label>
            <input type="text" class="form-control" placeholder="category" name="category" value="{{$content->id_cat}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" class="form-control" placeholder="title" name="title" value="{{$content->title}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Content</label>
            <input type="text" class="form-control" placeholder="content" name="content" value="{{$content->content}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Picture</label>
            <input type="text" class="form-control" placeholder="picture" name="picture" value="{{$content->picture}}">
        </div>
        <div class="mb-3">
            @csrf
            @method('PUT')
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
</div>
@endsection