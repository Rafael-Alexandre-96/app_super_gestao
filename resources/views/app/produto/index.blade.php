@extends('app.layouts.basico')

@section('titulo', 'Produto - Lista')

@section('conteudo')
<main class="conteudo-pagina">
  <div class="titulo-pagina-2"><p>Produto</p></div>
  <div class="menu">
    <ul>
      <li><a href="{{ route('produto.create') }}">Novo</a></li>
      <li><a href="">Consulta</a></li>
    </ul>
  </div>
  <div class="informacao-pagina">
    <div style="width: 90%; margin: 0 auto;">
      <table border=1 width=100%>
        <thead>
          <th>Nome</th>
          <th>Descrição</th>
          <th>Peso</th>
          <th>Unidade ID</th>
          <th>-</th>
          <th>-</th>
          <th>-</th>
        </thead>
        <tbody>
          @foreach ($produtos as $produto)
            <tr>
              <td>{{ $produto->nome }}</td>
              <td>{{ $produto->descricao }}</td>
              <td>{{ $produto->peso }}</td>
              <td>{{ $produto->unidade_id }}</td>
              <td><a href="{{ route('produto.show', ['produto' => $produto->id]) }}">Visualizar</a></td>
              <td><a href="">Editar</a></td>
              <td><a href="">Excluir</a></td>
            </tr>
          @endforeach
        </tbody>
      </table>

      {{ $produtos->appends($request)->links() }}

    </div>
  </div>
</main>
@endsection