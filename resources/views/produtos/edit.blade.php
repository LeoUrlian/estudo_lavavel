@extends('layouts.template')
@section('title', 'Editar Produto')
@section('content')
<div class="container mt-4">
  <form method="POST" action="{{route('produtos.editar', $produto)}}">
    @csrf
    @method('put')
    <div class="row">
      <div class="col-md-4">
        <div class="form-group mt-1">
          <label for="exampleInputEmail1">Nome</label>
          <input type="text" class="form-control mt-1" id="" name="nome" value="{{$produto->nome}}">
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group mt-1">
          <label for="exampleInputEmail1">Estoque</label>
          <input type="text" class="form-control mt-1" id="" name="estoque" value="{{$produto->estoque}}">
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group mt-1">
          <label for="exampleInputEmail1">Valor</label>
          <input type="text" class="form-control mt-1" id="" name="valor" value="{{$produto->valor}}">
        </div>
      </div>
    </div>
    <div class="form-group mt-1">
      <label for="exampleFormControlTextarea1">Descrição</label>
      <textarea class="form-control mt-1" id="" name="descricao" rows="3">{{$produto->descricao}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary mt-4">Enviar</button>
  </form>
</div>
@endsection