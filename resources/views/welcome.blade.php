
@extends('template.main')

@section('content')

<nav class="navbar navbar-default hide" id="navi">
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

        <li><a href="https://www.facebook.com/genoriega"> <i class="fa fa-facebook"></i></a> </li>
       <li><a href="https://www.facebook.com/genoriega"><i class="fa fa-twitter"></i></a> </li>
       <li><a href="https://www.facebook.com/genoriega"> <i class="fa fa-youtube-play"></i></a> </li>

       <li><a href="{{route('videobrian')}}">video2brian</a></li>
     <li><a href="{{route('laravel')}}">laravel 5</a></li>
      


 
    
    
       
      </ul>
    </div>
  </div>
</nav>

@if(isset($_GET['page']))

<div class="rou-fluid" style="background-image:url('http://www.wallsave.com/wallpapers/1600x1000/rasta/448188/rasta-reggae-con-el-y-movimiento-rastafari-original-editado-vacio-448188.jpg');
min-height:50vh; background-size:cover; background-position:center; background-attachment:fixed

">
<br><br><br>
<h1 align="center" class="foo">MAS COSAS<br><h4 align="center" class="foo">con blogs-guillospy</h4></h1>
</div>



@else

<header >
<div class="blur">
<div id="title" >blogs-guillospy</div>

<div id="subtitle">aprende y comparte </div>

<div  align="center">
  <a onclick="$('#posts').animatescroll({scrollSpeed:3000, easing:'easeInOutBack'});" class="btn btn-web btn-lg" >leer mas </a>
</div>
  
</div>
</header>


@endif


<br>
<div class="row-fluid">
<div class="container">
<div class="col-md-2"></div>
<div class="col-md-8">

<section id="posts">
@foreach($post as $pos)


<h3 class="text-center">{!!$pos->title!!}</h3>
 <div align="center">
  <img  class="img-responsive img-thumbnail " style="max-height:500px; min-height:500px" src="{!!$pos->photo!!}" title="{!!$pos->title!!}" />
 </div>


<div align="center">

<a href='articulos/{!!$pos->slug!!}' class="btn btn-info">leer mas </a>
  
</div>
<br>



<div align="center">
<?php
 $tags=explode(',',$pos->tags);
 
?>

@foreach($tags as $t)

<a href="tag/{{$t}}"><label class="label label-primary">{!!$t!!}</label></a>

@endforeach
  
</div>
<br>


@endforeach


  
</section>
<div class="row-fluid" align="center">{!!$post->render()!!}</div>
  

</div>
<div class="col-md-2"></div>


  
</div>
  
</div>

<br>



  

  <footer>
    
    <div class="row-fluid">
     
     <div class="container">
      
      <div class="col-md-6">

      <h4 class="text-center foo ">laravel-guillospy</h4>
      <h6 class="text-center foo"> By guillermo romo noriega</h6>
        
      </div>

      <div class="col-md-6">
        
        <div class="col-md-6">
          <legend class="text-center foo"> Contacto</legend>
          <p class="foo text-center"><i class="fa fa-envelope">guillospy@gmail.com</i></p>
        </div>
        <div class="col-md-6"></div>

      </div>

     </div> 
    

    </div>


     
    </footer>

    


@stop 
