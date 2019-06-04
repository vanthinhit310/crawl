@extends('general.master')
@section('content')
    <h1>List link is crawled</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">URL</th>
            <th scope="col">Title</th>
            <th scope="col">Status</th>
        </tr>
        </thead>
        <tbody>
        @isset($tables)
            @foreach($tables as $table)
        <tr>
            <th scope="row">{{$table->id ?? 0}}</th>
            <td>{{$table->url ?? ''}}</td>
            <td>{{$table->title ?? ''}}</td>
            <td>{{$table->status ?? ''}}</td>
        </tr>
        @endforeach
            @endisset
        </tbody>
    </table>
@endsection
