@extends('layouts.admin-master',['CreateProdutoAtivo'=>true])

@section('content')
<form action="/produtos/{{ $produto->id }}" class="flex-grow-1 w-auto m-5" method="post">
	@method('put')
	@csrf
	<div class="form-group">
		<label for="nome">Nome</label>
		<input type="text" name="nome" class="form-control @error('nome') is-invalid @enderror" id="nome" placeholder="Nome do produto" value="{{ $produto->nome }}">
		@error('nome')
		<div class="invalid-feedback">
			{{$message}}
		</div>
		@enderror
	</div>
	<div class="form-group">
		<label for="categoria">Categoria</label>
		<select class="form-control" id="categoria" name="categoria">
				@foreach($categorias as $c)
					<option {{ $c->id == $produto->id_categoria ? 'selected' : '' }} value="{{ $c->id }}">{{ $c->nome }}</option>	
				@endforeach
		</select>
	</div>
	<div class="form-group">
		<label for="nome">Preço</label>
		<input type="number" step="0.01" class="form-control" name="preco" id="preco" placeholder="Preço" value="{{ $produto->preco }}">
	</div>
	<div class="form-group">
		<label for="qtde">Quantidade</label>
		<input type="number" class="form-control" id="quantidade" name="quantidade" placeholder="Quantidade" value="{{ $produto->quantidade }}">
	</div>
	<button class="btn btn-warning float-right w-25">Salvar</button>
</form>
@endsection