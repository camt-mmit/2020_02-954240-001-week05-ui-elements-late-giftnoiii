@extends('layouts.main')

@section('title', 'Area-form')

@section('content')
    <body>
            

    <form  action="{{ route ('area-result') }}" method="post">>
    @csrf
    <label> <strong> Type :: </strong> <input type="radio" name="type" value="1" />Rectangular </label> 
    <label><input type="radio" name="type" value="0.5" />Triangle </label> </br>
   
    
   <label>  <strong> Width :: </strong>  <input type="text" name="width"/>  </label> </br>
   <label>  <strong> Height :: </strong>  <input type="text" name="height"/>  </label></br>

   <button><input type="submit"></button>
   </form>

    </body>

@endsection