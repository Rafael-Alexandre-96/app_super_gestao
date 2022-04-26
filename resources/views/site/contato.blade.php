@extends('site.layouts.basico')

@section('titulo', 'Contato')

@section('conteudo')
<main class="conteudo-pagina">

  <div class="titulo-pagina">
    <h1>Entre em contato conosco</h1>
  </div>

  <div class="informacao-pagina">
    <div class="contato-principal">
      @component('site.layouts._components.form_contato', ['classe' => 'borda-preta'])
        <p>A nossa equipe analisará a sua mensagem.</p>
        <p>Nosso tempo médio de resposta é de 48 horas.</p>
      @endcomponent
    </div>
  </div>  
</main>
@include('site.layouts._partials.rodape')
@endsection