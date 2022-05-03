@extends('app.layouts.basico')

@section('titulo', 'Fornecedor - Adição')

@section('conteudo')
<main class="conteudo-pagina">
  <div class="titulo-pagina-2"><p>Fornecedor</p></div>
  <div class="menu">
    <ul>
      <li><a href="{{ route('app.fornecedor.adicionar') }}">Novo</a></li>
      <li><a href="{{ route('app.fornecedor') }}">Consulta</a></li>
    </ul>
  </div>
  <div class="informacao-pagina">
    <div style="width: 30%; margin: 0 auto;">
      {{ $msg }}
      @if($errors->any())
        <div style="background-color: rgba(255, 0, 0, 0.5); padding: 5px; border-radius: 5px">
          @foreach($errors->all() as $e)
            <p style="margin: 0">{{ $e }}</p>
          @endforeach
        </div>
      @endif
      <form method="post" action="{{ route('app.fornecedor.adicionar') }}">
        @csrf
        <input type="text" name="nome" value="{{ old('nome') }}" placeholder="Nome" class="borda-preta" />
        <input type="text" name="site" value="{{ old('site') }}" placeholder="Site" class="borda-preta" />
        <input type="text" name="uf" value="{{ old('uf') }}" placeholder="UF" class="borda-preta" />
        <input type="text" name="email" value="{{ old('email') }}" placeholder="E-mail" class="borda-preta" />
        <button type="submit" class="borda-preta">Cadastrar</button>
      </form>
    </div>
  </div>
</main>
@endsection