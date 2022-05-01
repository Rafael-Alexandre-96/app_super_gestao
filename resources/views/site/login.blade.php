@extends('site.layouts.basico')

@section('titulo', 'Contato')

@section('conteudo')
<main class="conteudo-pagina">

  <div class="titulo-pagina">
    <h1>Login</h1>
  </div>

  <div class="informacao-pagina">
    <div style="width: 30%; margin: 0 auto;">

      @if($errors->any())
        <div style="background-color: rgba(255, 0, 0, 0.5); padding: 5px; border-radius: 5px">
          @foreach($errors->all() as $e)
            <p style="margin: 0">{{ $e }}</p>
          @endforeach
        </div>
      @endif

      <form action="{{ route('site.login') }}" method="post">
        @csrf
        <input name="usuario" type="text" value="{{ old('usuario') }}" placeholder="Digite o Usuário" class="borda-preta"/>
        <input name="senha" type="password" placeholder="Digite a Senha" class="borda-preta"/>
        <p style="margin: 0">{{ isset($erro) && $erro != '' ? $erro : '' }}</p>
        <button type="submit" class="borda-preta">Acessar</button>
      </form>
    </div>
  </div>  
</main>
@include('site.layouts._partials.rodape')
@endsection