{{ $slot }}

<form action="{{ route('site.contato') }}" method="post">
  @csrf
  <input name="nome" type="text" placeholder="Nome" class="{{ $classe }}">
  <input name="telefone" type="text" placeholder="Telefone" class="{{ $classe }}">
  <input name="email" type="text" placeholder="E-mail" class="{{ $classe }}">
  <select name="motivo_contato" class="{{ $classe }}">
    <option value="0" selected>Qual o motivo do contato?</option>
    <option value="1">Dúvida</option>
    <option value="2">Elogio</option>
    <option value="3">Reclamação</option>
  </select>
  <textarea name="mensagem" class="{{ $classe }}" placeholder="Preencha aqui a sua mensagem"></textarea>
  <button type="submit" class="{{ $classe }}">ENVIAR</button>
</form>