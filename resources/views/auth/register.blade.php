@extends('template.main')

@section('content')

{!! Form::open(['route' => 'users.store', 'method'=>'POST']  )!!}



                <div class="form-group ">
                    {!!Form::label('inputEmail3', 'identificacion', array('class' => 'col-sm-2 control-label'),array('for' => 'exampleInputEmail1'), array('placeholder' => 'identificacion'))!!}
                    <div class="col-sm-10">

                    {!!Form::text('identificacion', null,['class'=>'form-control', 'placeholder'=>'identificacion C.C'])!!}

                     </div>

                </div>

                 <div class="form-group">
                    {!!Form::label('inputEmail3', 'name', array('class' => 'col-sm-2 control-label'),array('for' => 'exampleInputEmail1'), array('placeholder' => 'identificacion'))!!}
                    <div class="col-sm-10">

                    {!!Form::text('name', null,['class'=>'form-control', 'placeholder'=>'name'])!!}

                     </div>

                </div>


                 <div class="form-group">
                    {!!Form::label('inputEmail3', 'email', array('class' => 'col-sm-2 control-label'),array('for' => 'exampleInputEmail1'), array('placeholder' => 'email'))!!}
                    <div class="col-sm-10">

                    {!!Form::text('email', null,['class'=>'form-control', 'placeholder'=>'email'])!!}

                     </div>

                </div>

                 <div class="form-group">
                    {!!Form::label('inputEmail3', 'password', array('class' => 'col-sm-2 control-label'),array('for' => 'exampleInputEmail1'), array('placeholder' => 'direccion'))!!}
                    <div class="col-sm-10">

                   {!!Form::password('password',['class'=>'form-control'])!!}

                     </div>

                </div>




                 <div class="form-group">
                    {!!Form::label('inputEmail3', 'direccion', array('class' => 'col-sm-2 control-label'),array('for' => 'exampleInputEmail1'), array('placeholder' => 'direccion'))!!}
                    <div class="col-sm-10">

                    {!!Form::text('direcion', null,['class'=>'', 'placeholder'=>'direccion'])!!}

                     </div>

                </div>

                {!!Form::submit('enviar')!!}




                {!! Form::close()!!}


@endsection

@stop