@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/categories" method="post">
        <div class="mb-3">
            <label class="form-label">Category</label>
            <input type="text" class="form-control" placeholder="category" name="category">
        </div>
        <div class="mb-3">
            @csrf
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection