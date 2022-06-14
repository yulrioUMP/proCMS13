@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Category</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Photo</th>
                <th scope="col">Update At</th>
                <th scope="col"><a href="contents/create">Add</a></th>
            </tr>
        <tbody>
            @php ($no = 1)
            @foreach ($contents as $content )
            <tr>
                <td scope="row">{{ $no++ }}</td>
                <td>{{$content->get_category['category']}}</td>
                <td>{{$content['title']}}</td>
                <td>{{$content['content']}}</td>
                <td>{{$content['picture']}}</td>
                <td>{{$content['updated_at']}}</td>
                <td>
                    <a href="/contents/{{$content['id']}}/edit">edit</a> |
                    <a href="/contents/{{$content['id']}}">del</a>
                </td>
            </tr>
            @endforeach
        </tbody>
        </thead>
    </table>
</div>
@endsection