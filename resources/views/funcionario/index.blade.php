@extends('layout.base')

<meta name="csrf-token" content="{{ csrf_token() }}" />
@section('scripts')

@endsection

@section('content')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.12/datatables.min.css"/>

<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.12/datatables.min.js"></script>

<script>
$(function () {
    $('#grid').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": true,
        "columnDefs": [{"targets": [1], "searchable": false}, {"targets": [2], "searchable": false}, {"targets": [3], "searchable": false}],
        "ordering": true,
        "info": false,
        "autoWidth": true,
        
         "language": {
         "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese.json"
         }
    });
});
</script>

<div class="container-fluid" style="margin-left: -140px;">

    <fieldset class="form-group">
        <legend>Lista de Funcionários</legend>
    </fieldset>

    <div class="row-fluid">
        <div class="col-md-12">
            <div class=" pull-left">
                <a href="{{ route('funcionario.create')}}"><button class="btn btn-success">Novo+</button></a>
            </div>
        </div>
    </div><br/><br/>

    <div class="row-fluid">

        <div class="col-md-12">
            <table class="" style="width: auto;" id="grid">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>SobreNome</th>
                        <th>CPF</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($funcionarios as $funcionario)
                    <tr>  
                        <td class="text-capitalize">{{ $funcionario->nome}}</td>
                        <td class="text-capitalize">{{ $funcionario->sobrenome}}</td>
                        <td class="text-uppercase">{{ $funcionario->cpf}}</td>
                        <td><a href="{{ route('funcionario.show',$funcionario->id)}}"><button class="btn btn-primary">Editar</button></a></td>
                        <td><a href="javascript:delete_('{{ route('funcionario.destroy',$funcionario->id)}}');"><button class="btn btn-danger">Excluir</button></a></td>

                        @endforeach  
                    </tr>
                </tbody>


            </table>
        </div>


    </div>

</div>


@endsection