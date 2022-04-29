{{ $slot }}

@if($errors->any())
  <div style="background-color: rgba(255, 0, 0, 0.5); padding: 5px; border-radius: 5px">
  @foreach($errors->all() as $erro)
    <p style="margin: 0">{{ $erro }}</p>
  @endforeach
  </div>
@endif

<form action="{{ route('site.contato') }}" method="post">
  @csrf
  <input name="nome" value="{{ old('nome') }}" type="text" placeholder="Nome" class="{{ $classe }}">
  <!--p class="p-error">{{-- $errors->has('nome') ? $errors->first('nome') : '' --}}</p-->
  <input name="telefone" value="{{ old('telefone') }}" type="text" placeholder="Telefone" class="{{ $classe }}">
  <input name="email" value="{{ old('email') }}" type="text" placeholder="E-mail" class="{{ $classe }}">  
  <select name="motivo_contatos_id" class="{{ $classe }}">
    <option value="0">Qual o motivo do contato?</option>
    @foreach ($motivo_contatos as $key => $motivo)
      <option value="{{ $motivo->id }}" {{ old('motivo_contatos_id') == $motivo->id ? 'selected' : ''}}>{{ $motivo->motivo_contato }}</option>
    @endforeach
  </select>
  <textarea name="mensagem" class="{{ $classe }}" placeholder="Preencha aqui a sua mensagem">{{ old('mensagem') != '' ? old('mensagem') : '' }}</textarea>
  <button type="submit" class="{{ $classe }}">ENVIAR</button>
</form>