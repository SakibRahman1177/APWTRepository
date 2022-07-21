@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{ URL::asset('css/product.css') }}" />
<div class="medics">  
<div class="contain">
   
  <form action="{{route('AddProduct')}}" id="medics" method="post">
  {{csrf_field()}}
  @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <h3>Add Products</h3>
    <h4>Fill-up the details of medicine or other products</h4>

    <fieldset><span style="float:left;color:darkslateblue">PRODUCT NAME</span>
      <input placeholder="Name of the Product" name="pname" value="{{old('pname')}}" class="text">
    </fieldset>
    <!-- @error('name')
            <span class="text-danger">{{$message}}</span>
    @enderror -->


    <fieldset><span style="float:left;color:darkslateblue">PRODUCT ID</span>
      <input placeholder="Unique Product Id" name="pId" value="{{old('pId')}}" class="pId">
    </fieldset>
    <!-- @error('prmID')
            <span class="text-danger">{{$message}}</span>
    @enderror -->


    <fieldset><span style="float:left;color:darkslateblue">COMPANY NAME</span>
      <input placeholder="Your Email Address" name="cname" value="{{old('cname')}}" class="cname" >
    </fieldset>
    <!-- @error('email')
            <span class="text-danger">{{$message}}</span>
    @enderror -->


    </br><fieldset><span style="float:left;color:darkslateblue">CATEGOERY</span>
    <select name="ctg" value="{{old('ctg')}}" id="ctg" class="ctg" style="width: 60%">
        <option value="Medicine">Medicine</option>
        <option value="Surgical & Clinical">Surgical & Clinical</option>
        <option value="Health & Care">Health & Care</option>
        <option value="Dental & Oral">Dental & Oral</option>
      </select>
    </fieldset>
    <!-- @error('dept')
            <span class="text-danger">{{$message}}</span>
    @enderror -->
    </br>

    </br><fieldset><span style="float:left;color:darkslateblue">TYPE</span>
    <select name="type" value="{{old('type')}}" id="type" class="type" style="width: 60%">
    <option value="1">[-------------------Medicine-------------------]</option>
        <option value="Tablet">Tablet</option>
        <option value="Eye-drop">Eye-drop</option>
        <option value="Syrup">Syrup</option>
        <option value="Capsul">Capsul</option>
        <option value="Injection">Injection</option>
    <option value="2">[-------------Surgical & Clinical---------------]</option>
        <option value="Mask">Mask</option>
        <option value="Device">Device</option>
        <option value="Gloves">Gloves</option>
        <option value="Brush">Brush</option>
    <option value="3">[----------------Health & Care------------------]</option>
        <option value="Syrup">Syrup</option>
        <option value="Capsul">Capsul</option>
    <option value="4">[----------------Dental & Oral------------------]</option>
        <option value="Ointment">Ointment</option>
        <option value="Solution">Solution</option>
      </select>
    </fieldset>
    <!-- @error('type')
            <span class="text-danger">{{$message}}</span>
    @enderror -->
    </br>



    <fieldset><span style="float:left;color:darkslateblue">PRICE</span>
      <input placeholder="Product price" name="price" value="{{old('price')}}" class="price">
    </fieldset>
    <!-- @error('username')
            <span class="text-danger">{{$message}}</span>
    @enderror -->


    <fieldset><span style="float:left;color:darkslateblue">PRODUCT STATUS</span>
      <input placeholder="Enter product status" name="status" value="{{old('status')}}" class="cname" >
    </fieldset>
    <!-- @error('email')
            <span class="text-danger">{{$message}}</span>
    @enderror -->

    <fieldset>
      <button name="submit" class="submit" id="contact-submit" data-submit="...Sending">Add</button>
    </fieldset>
  </form>
</div>

@endsection