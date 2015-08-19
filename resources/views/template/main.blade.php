<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width-device-width, user-scalable=no, initial-scale=1.0">

	

   <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.4/paper/bootstrap.min.css" rel="stylesheet">
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
   <link rel="stylesheet" href="{!!asset('css/sty.css')!!}" />
   <link rel="stylesheet" href="{!!asset('css/trumbowyg.min.css')!!}" />
   


</head>
<body>


@yield('content')
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="{!!asset('js/animatescroll.min.js')!!}"></script>
<script src="{!!asset('js/trumbowyg.min.js')!!}"></script>
<script>
   
    $(window).scroll(function(){
  
     if($(this).scrollTop() >500){
     $('#navi').removeClass('hide');
     $('#navi').addClass('navbar-fixed-top');
   }

     else{

     $('#navi').removeClass('navbar-fixed-top');
     $('#navi').addClass('hide');


     }


    });

    </script>

    <script>
   
    $(window).scroll(function(){
  
     if($(this).scrollTop() >200){
     $('#navis').removeClass('hide');
     $('#navis').addClass('navbar-fixed-top');
   }

     else{

     $('#navis').removeClass('navbar-fixed-top');
     $('#navis').addClass('hide');


     }


    });

    </script>
    @yield('js')
</body>
</html>