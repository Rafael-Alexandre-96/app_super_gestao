@extends('app.layouts.basico')

@section('titulo', 'Produto - Visualizar')

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
      <table border=1>
        <tr><td>ID</td><td>{{ $produto->id }}</td></tr>
        <tr><td>Nome</td><td>{{ $produto->nome }}</td></tr>
        <tr><td>Descrição</td><td>{{ $produto->descricao }}</td></tr>
        <tr><td>Peso</td><td>{{ $produto->peso }} kg</td></tr>
        <tr><td>Unidade Medida</td><td>{{ $produto->unidade_id }}</td></tr>
      </table>
    </div>
  </div>
</main>
@endsection