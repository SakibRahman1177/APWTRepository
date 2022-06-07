@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="./css/style.css">

<div class="about-section">
  <h1>About Us</h1>
  <p>"MT Helmets" represents this for more than 70 years. We have already been producing protective helmets of different varieties since the 1940s. 
    From 1954 onwards, motor cyclists were able to wear a helmet of the "MT Helmets" brand. This was the beginning of a success story which continues today. 
    Countless motor bike helmets were produced and sold since the foundation of the company. And countless satisfied customers swear by their "MT Helmets"</p>
  <h2 style="font-size: 35; color:darkorange;">"The portfolio protection at work, police, fire services, Formula 1, military and motor bike helmets" </h2>
</div>

<h2 style="text-align:center">Categories</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="./Sources/H1.png" alt="Helmet 1" style="width:100%">
      <div class="container">
        <h2>Rapide Pro</h2>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="./Sources/H2.png" alt="Helmet 2" style="width:100%">
      <div class="container">
        <h2>KRE+</h2>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="./Sources/H3.png" alt="Helmet 3" style="width:100%">
      <div class="container">
        <h2>Targo</h2> 
      </div>
    </div>
  </div>
</div> 

@endsection