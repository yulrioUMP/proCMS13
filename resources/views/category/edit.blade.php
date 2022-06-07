@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/categories/{{$category['id']}}" method="post">
        <div class="mb-3">
            <label class="form-label">Category</label>
            <div>
                {{ $category['category'] }}
            </div>

        </div>
        <div class="mb-3">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-primary">Delete</button>
        </div>
    </form>
</div>
@endsection