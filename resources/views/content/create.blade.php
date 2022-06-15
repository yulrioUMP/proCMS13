@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/contents" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label class="form-label">Category</label>
            <input type="text" class="form-control" placeholder="category" name="category">
        </div>
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" class="form-control" placeholder="title" name="title">
        </div>
        <div class="mb-3">
            <label class="form-label">Content</label>
            <input type="text" class="form-control" placeholder="content" name="content">
        </div>
        <div class="mb-3">
            <label class="form-label">Picture</label>
            <input type="file" class="form-control" placeholder="picture" name="picture">
        </div>
        <div class="mb-3">
            @csrf
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection