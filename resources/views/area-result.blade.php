@extends('layouts.main')

@section('title', 'Area result')

@section('content')
<body>


    <lable>  Type :: {{ $type }} </label> </lable> </br> 
    <lable> Width  :: {{ $width }} </label> </br> 
    <label>  Height :: {{ $height }}  </label> </br> 
    <label> Area :: {{ $area }} </label> </br> 
   
</body>
    
 
@endsection