@extends('general.master')
@section('content')
    <h1>List link is crawled</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Title</th>
            <th scope="col">Status</th>
            <th scope="col">isCrawled</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        </tbody>
    </table>
@endsection
