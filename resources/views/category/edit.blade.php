@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/categories/{{$category['id']}}" method="post">
        <div class="mb-3">
            <label class="form-label">Category</label>
            <input type="text" class="form-control" placeholder="category" name="category" value="{{ $category['category'] }}">
        </div>
        <div class="mb-3">
            @csrf
            @method('PUT')
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
</div>
@endsection