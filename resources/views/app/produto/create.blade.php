@extends('app.layouts.basico')

@section('titulo', 'Produto - Adição')

@section('conteudo')
<main class="conteudo-pagina">
  <div class="titulo-pagina-2"><p>Produto</p></div>
  <div class="menu">
    <ul>
      <li><a href="{{ route('produto.index') }}">Voltar</a></li>
      <li><a href="">Consulta</a></li>
    </ul>
  </div>
  <div class="informacao-pagina">
    <div style="width: 30%; margin: 0 auto;">
      {{ $msg ?? '' }}
      @if($errors->any())
        <div style="background-color: rgba(255, 0, 0, 0.5); padding: 5px; border-radius: 5px">
          @foreach($errors->all() as $e)
            <p style="margin: 0">{{ $e }}</p>
          @endforeach
        </div>
      @endif
      <form method="post" action="{{ route('produto.store') }}">
        @csrf
        <input type="text" name="nome" value="{{ old('nome') }}" placeholder="Nome" class="borda-preta" />
        <input type="text" name="descricao" value="{{ old('descricao') }}" placeholder="Descrição" class="borda-preta" />
        <input type="text" name="peso" value="{{ old('peso') }}" placeholder="Peso" class="borda-preta" />
        <select name="unidade_id" class="borda-preta">
          <option>Selecione a unidade de medida</option>

          @foreach($unidades as $unidade)
            <option value={{ $unidade->id }} {{old('unidade_id') == $unidade->id ? 'selected' : ''}}>{{ $unidade->descricao }}</option>
          @endforeach
          
        </select>
        <button type="submit" class="borda-preta">Cadastrar</button>
      </form>
    </div>
  </div>
</main>
@endsection