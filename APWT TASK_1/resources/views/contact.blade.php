@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="./css/style.css">
<table>
<th class="top">
<tr>
<h1>
    <br><span style="font-size: 60;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color: maroon;">MT</span>
    <span style="font-size: 40; color:darkgoldenrod;"> Helmets Website
</h1><hr>
<img src="./Sources/Map.png" alt="Helmet 2" style="width:100%; height: 300px; object-position: right; object-fit: none;">
</br><hr>
<form class="form">
  <h2>CONTACT US</h2>
  <p>Name:</p> <input type="text" name="name" placeholder="Write your name here..">
  <p>Email:</p><input type="text" name="email" placeholder="Let us know how to contact you back..">
  <p>Message:</p><input type="text" name="msg" placeholder="What would you like to tell us.."></br>
  <br><input class="button" type="submit" name="submit" value="Send">
  
</form>
</tr>
</th>

</table>

@endsection