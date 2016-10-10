@extends('layout.base')

@section('content')

<div class="" style="/* position:  relative; width: 900px;   border: 1px #F00 solid;  float: right;  margin:80px 0px 0px 0px; */">

    @if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
        <p>{{ $error }} </p>
        @endforeach
    </div>
    @endif



    <fieldset class="form-group">
        <legend>Atualização de Dados Funcionário</legend>
        
        @if(Session::has('flash_message'))
            <div>
                <script> alert("{{ Session::get('flash_message') }}"); </script>  
            </div>
        @endif

        {!! Form::model($funcionario,array('route'=>['funcionario.update',$funcionario->id], 'method'=>'PUT','id' => 'editFuncionario')) !!}
        {!! Form::hidden('id', null, array('id' => 'id')) !!}

        <!--  <form class="form"> -->
        <div  class="row">
            <div class="col-md-5">
                {!! Form::label('nome', 'Nome:') !!}
                {!! Form::text('nome',Input::old('nome'), array('id' => 'nome', 'class' => 'form-control', 'placeholder' => 'Nome ','maxlength'=>'100')) !!}
            </div>

        </div>

        <div  class="row">
            <div class="col-md-8">
                {!! Form::label('sobrenome', 'SobreNome:') !!}
                {!! Form::text('sobrenome',Input::old('sobrenome'), array('id' => 'sobrenome', 'class' => 'form-control', 'placeholder' => 'sobrenome','maxlength'=>'25')) !!}

            </div>
        </div>

        <div  class="row">
            <div class="col-md-8">
                {!! Form::label('cpf', 'CPF:') !!}
                {!! Form::text('cpf',Input::old('cpf'), array('id' => 'cpf', 'class' => 'form-control', 'placeholder' => 'CPF','maxlength'=>'25')) !!}
            </div>
        </div>

        <div  class="row top20">
            <div class="col-md-8">
                <!-- <button type='button' class="btn  btn-primary  " -->
                <!-- <input type="submit" class="btn  btn-primary " /> -->

                {!! Form::submit('Salvar',['class' => 'btn  btn-primary']) !!}
            </div>
        </div>
        {!! Form::close() !!}
    </fieldset>
</div>

</div>
@endsection