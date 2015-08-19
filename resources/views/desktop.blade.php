@extends('template.main')

@section('content')

<nav class="navbar navbar-inverse navi">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle Navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{!!route('registrer')!!}">Administrador</a>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          
        </ul>

        <ul class="nav navbar-nav navbar-right">
          
            
            <li><a href="{{route('nuevo') }}">Crear Nuevo Post</a></li>

         
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name}} <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="{{ url('logout') }}">Logout</a></li>
              </ul>
            </li>
        
        </ul>
      </div>
    </div>
  </nav>

  <body>

  
 <div class="row-fluid">


    
   <div class="container">


   @if(Session::has('message'))
     <div class="alert alert-dismissible alert-success">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong>{!!Session::get('message')!!}</strong> 
</div>
<div class="panel panel-default">

@endif
        <div class="panel-heading"><h5 align="center">post de guillo</h5></div>

        <div class="panel-body">


     
     <div class="col-md-12">
       <table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>#</th>
      <th>title</th>
      <th>slug</th>
    
       <th>ver</th>
        <th>actualizar</th>
         <th>eliminar</th>

     
    </tr>
  </thead>
  <tbody>
  @foreach($post as $p)
    <tr>
      <td>{!!$p->id!!}</td>
      <td>{!!$p->title!!}</td>
      <td>{!!$p->slug!!}</td>

     <td><a href="nada/posts/{{$p->id}}/ver" class="btn btn-sm btn-primary">ver</a></td>
      <td><a href="nada/posts/{{$p->id}}/edit" class="btn btn-sm btn-primary">actualizar</a></td>
     <td>
       <a href="">
                      {!!Form ::open(['url'=>'nada/posts/'.$p->id.'/delete'])!!}

                <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm ('seguro que quuires elimiar este usuario')" > eliminar</button>

                {!!form::close()!!}


                </a>

     </td>
     
    </tr>
    
    @endforeach
    
  </tbody>
</table> 

     </div>

   </div>

 </div>
  </div>
  </div>
   <br><br><br><br><br><br>

 





	

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

     </body>


@stop 