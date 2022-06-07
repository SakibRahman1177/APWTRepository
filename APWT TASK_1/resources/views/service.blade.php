@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="./css/style.css">
<div style="margin-left: 100px;">
<br><h1><a style="color:darkgoldenrod;">Welcome to Our</a></br>
<span style="font-size: 60;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color: maroon;">MT</span> Helmets Services</h1>
</div>

<img src="./Sources/C4.jpg" alt="Los Angeles" class="d-block" width="1330px" height="300px">
<hr><p style="font-size: 30; font: weight 100px;; color:darkslategray;">{{$name}}</p>
<p>ID: {{$id}}</p>
<hr><h2 style="font-weight: bold;">Services</h2>

@foreach($names as $n)

<li>{{$n}}</li>

@endforeach


@endsection