@extends('layouts.main')

@section('content')

{{-- Aviso de Erros e botões--}}
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="alert alert-info" role="alert" id="translatoin-incomplete">
        Incomplete translation
      </div>
      <div class="alert alert-danger" role="alert" id="translatoin-unavailable">
        Language unavailable
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <button class="btn btn-primary" name="btn-translate" data-lang="pt-br">Português</button>
      <button class="btn btn-dark" name="btn-translate" data-lang="en">Inglês</button>
      <button class="btn btn-danger" name="btn-translate" data-lang="es">Espanhol</button>
    </div>
  </div>
</div>

<section id="home">
  <div class="container text-center">
    <h1 data-lang-str="TituloSite"></h1>
  </div>
</section>

@endsection