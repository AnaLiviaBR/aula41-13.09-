@extends('layouts.admin-master')

@section('content')
<form action="/produtos" class="flex-grow-1 w-auto m-5" method="post">
	@csrf
	<div class="form-group">
		<label for="nome">Nome</label>
		<input type="text" name="nome" class="form-control" id="nome" placeholder="Nome do produto">
	</div>
	<div class="form-group">
		<label for="categoria">Categoria</label>
		<select class="form-control" id="categoria" name="categoria">
				@foreach($categorias as $c)
				<option value="{{ $c->id }}">{{ $c->nome }}</option>	
			@endforeach
		</select>
	</div>
	<div class="form-group">
		<label for="nome">Preço</label>
		<input type="number" step="0.01" class="form-control" name="preco" id="preco" placeholder="Preço">
	</div>
	<div class="form-group">
		<label for="qtde">Quantidade</label>
		<input type="number" class="form-control" id="quantidade" name="quantidade" placeholder="Quantidade">
	</div>
	<button class="btn btn-warning float-right w-25">Salvar</button>
</form>
@endsection