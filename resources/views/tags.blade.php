
@extends('template.main')

@section('content')

<nav class="navbar navbar-default " id="navi">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand croisant letra" href="{{route('home')}}">laravel-guillospy</a>
    </div>

    <div class="collapse navbar-collapse navbar-ex1-collapse" >
      <ul class="nav navbar-nav">
        
       
      </ul>
     
      <ul class="nav navbar-nav navbar-right">

     <li><a href="">video2brian</a></li>
     <li><a href="">laravel 5</a></li>
     <li><a href="">social media</a></li>
       
      </ul>
    </div>
  </div>
</nav>


@foreach($post as $po)

<div class="row-fluid">
   
  <div class=" col-md-4">
    <div class="thumbnail">
     <img style="max-height:300px; min-height:300px" class="img-responsive img-thumbnail" src="{!!$po->photo!!}"  />
      <div class="caption">
        <h4 align="center">{!!$po->title!!}</h4>
    
         <div align="center"> <a  href="{{route('article',$po->slug)}}" class="btn btn-primary" role="button"  >ir al post</a></div>
       
        
         
      </div>
    </div>
  </div>
</div>





@endforeach
<hr style="color:black;">

<div align="center">

<a href="{{route('home')}}" class="btn btn-lg btn-default">regresar</a>
	
</div>

        




	



@stop 
