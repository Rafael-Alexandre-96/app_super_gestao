<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Super Gestão - @yield('titulo')</title>
    <meta charset="utf-8">

    <link rel="stylesheet" type="text/css" href="{{ asset('/css/estilo-basico.css') }}">
  </head>

  <body>
    @include('site.layouts._partials.topo')
    @yield('conteudo')
  </body>
</html>