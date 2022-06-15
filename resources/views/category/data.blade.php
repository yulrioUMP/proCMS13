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
                <th scope="col"><a href="categories/create"><i class="bi bi-plus-square-fill"></i></a></th>
            </tr>
        <tbody>
            @php ($no = 1)
            @foreach ($categories as $category )
            <tr>
                <td scope="row">{{ $no++ }}</td>
                <td>{{$category['category']}}</td>
                <td>{{$category['created_at']}}</td>
                <td>{{$category['updated_at']}}</td>
                <td>
                    <a href="/categories/{{$category['id']}}/edit"><i class="bi bi-pencil-fill"></i></a> |
                    <a href="/categories/{{$category['id']}}"><i class="bi bi-trash-fill"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
        </thead>
    </table>
</div>
@endsection