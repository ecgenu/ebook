@extends('layout.master')
@section('conteudo')
<form action="" method="post">
    <input type="hidden" name="_token" value="{{{csrf_token()}}}">
    <input type="hidden" name="id" value="{{$f->id}}">
    <div class="form-grupo">
        <label>Nome</label>
        <input name="nome" class="form-control" value="{{$f->nome}}">
    </div>
     <div class="form-grupo">   
        <label>email</label>
        <input type="email" name="email" class="form-control" value="{{$f->email}}">
     </div>
     <div class="form-grupo">
         <label>Seção</label>
        <input name="secao" class="form-control" value="{{$f->id_secao}}">
     </div>
      <div class="form-grupo">  
        <label>Telefone</label>
        <input type="tel" name="fone" class="form-control" value="{{$f->fone}}">
      </div>
     <button type="submit" class="btn btn-primary btn-block">Alterar</button>      
</form>
@stop