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
          
            
            <li><a href="{{ url('registro') }}">Regist</a></li>
         
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
  <div class="container">
    <div class="jumbotron">
      <h1 class="text-center">Edita tu publicacion</h1>
    </div>
  </div>

  <div class="row fluid">
    <div class="container">
      
      <div class="col-md-2"></div>
      <div class="col-md-8">
      <fieldset>
       {!!Form::open(['url'=>'nada/posts/'.$pos->id.'/refresh','autocomplete'=>'of'])!!}

       <input type="text" name="title" value="{!!$pos->title!!}" class="form-control" /> 
        <br>
        <textarea name="contennt" id="editar" cols="30" rows="10" class="form-control" >{!!$pos->contennt!!}</textarea>
        <br>
        <input type="text" name="tags" value="{!!$pos->tags!!}" class="form-control" /> 
        <br>
        <input type="text" name="photo" value="{!!$pos->photo!!}" class="form-control" /> 
        <br>
        <input type="submit"  value="actualizar" class="btn btn-block btn-primary" />
        
        {!!Form:: close()!!}
 

      </fieldset>
        

      </div>
      <div class="col-md-2"></div>

    </div>
  </div>
    
   

  </body>

  @endsection

  @section('js')

  <script> 
  
  $('#editar').trumbowyg();
  </script>

  @endsection


@stop 