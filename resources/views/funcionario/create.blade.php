@extends('layout.base')

@section('content')

<div class="" style="/* position:  relative; width: 900px;   border: 1px #F00 solid;  float: right;  margin:80px 0px 0px 0px; */">

    <fieldset class="form-group">
        <legend>Cadastro  de Funcionário</legend>
        <form class="form">
            <div  class="row">

                <div class="col-md-5">
                    <label class="">Nome</label>
                    <input class="form-control  " type="text" value="" id="nome" name="nome"  placeholder="Nome"/>
                </div>
            </div>

            <div  class="row">
                <div class="col-md-8">
                    <label>SobreNome</label>
                    <input class="form-control" type="text" value="" id="sobreNome" name="nome"  placeholder="Sobrenome"/>
                </div>
            </div>

            <div  class="row">
                <div class="col-md-8">
                    <label>CPF</label>
                    <input class="form-control" type="text" value="" id="cpf" name="nome"  placeholder="CPF"/>
                </div>
            </div>

            <div  class="row top20">
                <div class="col-md-8">
                    <!-- <button type='button' class="btn  btn-primary  " -->
                    <input type="submit" class="btn  btn-primary " />
                </div>
            </div>
        </form>
    </fieldset>
</div>

</div>
@endsection