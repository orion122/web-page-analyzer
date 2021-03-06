@extends('main')

@section('content')

<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>URL</th>
            <th>Status Code</th>
            <th>Content Length</th>
            <th>h1</th>
            <th>Keywords</th>
            <th>Description</th>
            <th>Created At</th>
            <th>Updated At</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            {{--@foreach($row as $item)
                <td>{{ $item }}</td>
            @endforeach--}}
            <td>{{ $row->id }}</td>
            <td>{{ $row->name }}</td>
            <td>{{ $row->status_code }}</td>
            <td>{{ $row->content_length }}</td>
            <td>{{ $row->h1 }}</td>
            <td>{{ $row->meta_keywords }}</td>
            <td>{{ $row->meta_content }}</td>
            <td>{{ $row->created_at }}</td>
            <td>{{ $row->updated_at }}</td>
        </tr>
    </tbody>
</table>

@stop