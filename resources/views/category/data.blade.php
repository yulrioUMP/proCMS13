@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Category</th>
                <th scope="col">Create At</th>
                <th scope="col">Update At</th>
                <th scope="col"><a href="categories/create">Add</a></th>
            </tr>
        <tbody>
            @php ($no = 1)
            @foreach ($categories as $category )
            <tr>
                <td scope="row">{{ $no++ }}</td>
                <td>{{$category['category']}}</td>
                <td>{{$category['created_at']}}</td>
                <td>{{$category['updated_at']}}</td>
                <td>edit | del</td>
            </tr>
            @endforeach
        </tbody>
        </thead>
    </table>
</div>
@endsection