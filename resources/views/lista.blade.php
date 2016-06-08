@extends('layout.master')
@section('conteudo')
<h1>Lista dos Contatos</h1>
<table class="table table-striped table-bordered table-hover">
    <tr>
        <td>Nome</td>
        <td>Email</td>
        <td>Seção</td>
        <td>Telefone</td>
    </tr>
    @foreach ($funcionarios as $f)
    <tr>
        <td>{{$f->nome}}</td>
        <td>{{$f->email}}</td>
        <td>{{$f->id_secao}}</td>
        <td>{{$f->fone}}</td>
        <td><a href="/mostra/{{$f->id}}"><span class="glyphicon-search"></span></a></td>
    </tr>
    @endforeach
</table>
@stop