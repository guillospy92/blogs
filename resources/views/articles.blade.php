

<nav class="navbar navbar-default ">
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
<div class="container">
		<div class="col-md-2"></div>
		<div class="col-md-8" align="center">
		
		<br>
		<h2>{!!$post->title!!}</h2>
		<hr>
		<div align="justify">{!!$post->contennt!!}</div>
		<hr>
		<div class="fb-comments" data-href="http://localhost/laravelapp/public/articulos/{{$post->slug}}" data-width="100%" data-numposts="10" data-colorscheme="light"></div>
		<a href="{{ route('home') }}" class="btn btn-lg btn-primnary"><i class="fa fa-chevron-left"></i>Inicio</a>
			


		</div>
		<div class="col-md-2"></div>

	</div>
	

</div>
<br>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
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