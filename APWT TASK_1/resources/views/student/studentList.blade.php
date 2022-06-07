@extends('layouts.app')
@section('content')
<table class="table table-border">
    <tr>
        <th>Name</th>
        <th>ID</th>
        <th>Action</th>
    </tr>
    @foreach($student as $x)
    <tr>
        <td>{{$x}}</td>
       
    </tr>
    @endforeach

</table>
@endsection 