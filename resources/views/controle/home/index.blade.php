@extends('layouts.app')

@section('content')


    <div class="col-xl-12 col-lg-12 col-md-12 container ml-5 pr-5" id="informacoes">
        <div class="row justify-content-center">

            <div class="coluna-painel">

                <div class="col-lg-6 col-12" style="padding-left: 0px;">
                    <h6 class="h2 text-black d-inline-block mb-0" >Painel de Informações</h6>
                    <!-- <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                        <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Default</li>
                        </ol>
                    </nav> -->
                </div>
          
                <div class="nav-wrapper">
                        <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link mb-sm-3 mb-md-0 mt-2 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true">
                                    Home
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link mb-sm-3 mb-md-0 mt-2" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false">
                                    Menu
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link mb-sm-3 mb-md-0 mt-2" id="tabs-icons-text-3-tab" data-toggle="tab" href="#tabs-icons-text-3" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false">
                                    Sobre
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link mb-sm-3 mb-md-0 mt-2" id="tabs-icons-text-4-tab" data-toggle="tab" href="#tabs-icons-text-4" role="tab" aria-controls="tabs-icons-text-4" aria-selected="false">
                                    Serviços
                                </a>
                            </li>

                            <li class="nav-item">
                                <a  class="nav-link mb-sm-3 mb-md-0 mt-2" id="tabs-icons-text-5-tab" data-toggle="tab" href="#tabs-icons-text-5" role="tab" aria-controls="tabs-icons-text-5" aria-selected="false">
                                    Contato
                                </a>
                            </li>

                            

                            <li class="nav-item">
                                <a class="nav-link mb-sm-3 mb-md-0 mt-2" id="tabs-icons-text-7-tab" data-toggle="tab" href="#tabs-icons-text-7" role="tab" aria-controls="tabs-icons-text-7" aria-selected="false">
                                    Depoimentos
                                </a>
                            </li>

                            
                            <li class="nav-item">
                                <a class="nav-link mb-sm-3 mb-md-0 mt-2" id="tabs-icons-text-8-tab" data-toggle="tab" href="#tabs-icons-text-8" role="tab" aria-controls="tabs-icons-text-8" aria-selected="false">
                                    Agendamento
                                </a>
                            </li>


                            <li class="nav-item">
                                <a class="nav-link mb-sm-3 mb-md-0 mt-2" id="tabs-icons-text-9-tab" data-toggle="tab" href="#tabs-icons-text-9" role="tab" aria-controls="tabs-icons-text-9" aria-selected="false">
                                    Modal Inicial
                                </a>
                            </li>
                        </ul>
                </div>

                <!-- MODAL -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"></h5>
                            <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button> -->
                        </div>
                        <div class="modal-body" style="text-align: center;">
                            <h1>EM CONSTRUÇÃO</h1>
                        </div>
                        <div class="modal-footer" style="margin: auto;">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
                            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                        </div>
                        </div>
                    </div>
                </div>
                <!-- FIM MODAL -->
                
                    <div class="card shadow">
                            <div class="card-body">
                                <div class="tab-content" id="myTabContent">

                                    <!-- HOME -->
                                    <div class="tab-pane fade active show" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                                        <form action="{{route('topo1')}}" method="post">
                                            @csrf
                                            <div class="row">
                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Resumo Inicial</label>
                                                    <input name="telefone" value="{{$telefone}}" type="text" class="form-control">
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">WhatsApp</label>
                                                    <input name="whatsapp" value="{{$whatsapp}}" type="text" class="form-control">
                                                </div>

                                                {{-- <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">E-mail</label>
                                                    <input name="email" value="{{$email}}" type="text" class="form-control">
                                                </div> --}}

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Link do Instagram</label>
                                                    <input name="instagram" value="{{$instagram}}" type="text" class="form-control">
                                                </div>
                                                
                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Link do Facebook</label>
                                                    <input name="facebook" value="{{$facebook}}" type="text" class="form-control">
                                                </div>

                                                {{-- <div class="description col-md-6" style="margin-bottom: 30px;">
                                                    <label class="form-control-label" for="basic-url">Sistema Boleto</label>
                                                    <input name="boleto" value="{{$boleto}}" type="text" class="form-control" placeholder="2 Via Boleto">
                                                </div> --}}

                                                <button class="btn btn-icon btn-primary" style="margin: auto;" type="subimt">
                                                    <span class="btn-inner--text">Atualizar</span>
                                                </button>

                                            </div>
                                        </form>
                                    </div>

                                    <!-- MENU -->
                                    <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                                        <form action="{{route('logo')}}" enctype="multipart/form-data" method="post">
                                        @csrf
                                            <div class="row">
                                                <div class="description col-md-12">
                                                    <label class="form-control-label" for="basic-url">Menu 1</label>
                                                    <input name="menu2"  type="text" class="form-control" value="{{$menu2}}">
                                                </div>

                                                <div class="description col-md-12 mt-3">
                                                    <label class="form-control-label" for="basic-url">Menu 2</label>
                                                    <input name="menu3"  type="text" class="form-control" value="{{$menu3}}">
                                                </div>

                                                <div class="description col-md-12 mt-3">
                                                    <label class="form-control-label" for="basic-url">Menu 3</label>
                                                    <input name="menu4"  type="text" class="form-control" value="{{$menu4}}">
                                                </div>

                                                <div class="description col-md-12 mt-3">
                                                    <label class="form-control-label" for="basic-url">Menu 4</label>
                                                    <input name="menu5"  type="text" class="form-control" value="{{$menu5}}">
                                                </div>

                                                <div class="description col-md-12 mt-3">
                                                    <label class="form-control-label" for="basic-url">Menu 5</label>
                                                    <input name="menu6"  type="text" class="form-control" value="{{$menu6}}">
                                                </div>

                                                <div class="description col-md-12 mt-3">
                                                    <label class="form-control-label" for="basic-url">Menu 6</label>
                                                    <input name="menu7"  type="text" class="form-control" value="{{$menu7}}">
                                                </div>

                                                <div class="description col-md-12 mt-3">
                                                    <label class="form-control-label" for="basic-url">Menu 7</label>
                                                    <input name="menu8"  type="text" class="form-control" value="{{$menu8}}">
                                                </div>

                                                <div class="description col-md-12 mt-3">
                                                    <label class="form-control-label" for="basic-url">Menu 8</label>
                                                    <input name="menu9"  type="text" class="form-control" value="{{$menu9}}">
                                                </div>

                                                <div class="description col-md-12 mt-3" >
                                                    <label class="form-control-label" for="basic-url">Logo Menu</label>
                                                    <input name="logo1" type="file" class="form-control">
                                                </div>

                                                <div class="description col-md-12 mt-3">
                                                    <img style="width: 30%; margin-top: 15px;" src="{{Storage::url($logo1)}}" alt="">
                                                    <button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 210px <br> Altura: 140px">
                                                    <i class='bx bxs-info-circle'></i>
                                                    </button>
                                                </div>

                                                <div class="description col-md-12" style="margin-top: 20px; text-align: center;">
                                                    <button class="btn btn-icon btn-primary" style="margin: auto;" type="submit">
                                                        <span class="btn-inner--text">Atualizar</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <!-- SOBRE -->
                                    <div class="tab-pane fade" id="tabs-icons-text-3" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">
                                        <form action="{{route('slide')}}" enctype="multipart/form-data" method="post">
                                        @csrf
                                            <div class="row">
                                                <div class="description col-md-12 mt-3">
                                                    <label class="form-control-label" for="basic-url">Titulo 1</label>
                                                    <input name="slide4"  type="text" class="form-control" value="{{$slide4}}">
                                                </div>

                                                <div class="description col-md-12 mt-3">
                                                    <label class="form-control-label" for="basic-url">Titulo da Página</label>
                                                    <input name="slide5"  type="text" class="form-control" value="{{$slide5}}">
                                                </div>

                                                <div class="description col-md-12 mt-3">
                                                    <label class="form-control-label" for="basic-url">Titulo do Texto</label>
                                                    <input name="slide6"  type="text" class="form-control" value="{{$slide6}}">
                                                </div>

                                                <div class="description col-md-12 mt-3">
                                                    <label class="form-control-label" for="basic-url">Texto</label>
                                                    <input name="slide7"  type="text" class="form-control" value="{{$slide7}}">
                                                </div>

                                                <div class="description col-md-12 mt-3">
                                                    <label class="form-control-label" for="basic-url">Imagem</label>
                                                </div>

                                                <div class="description col-md-12 mt-3" style="margin-top: 20px; text-align: center;">
                                                    <button class="btn btn-icon btn-primary" style="margin: auto;" type="submit">
                                                        <span class="btn-inner--text">Atualizar</span>
                                                    </button>
                                                </div>

                                            </div>
                                        </form>
                                    </div>

                                    <!-- SERVIÇOS -->
                                    <div class="tab-pane fade" id="tabs-icons-text-4" role="tabpanel" aria-labelledby="tabs-icons-text-4-tab">
                                        <form action="{{route('rodapeslide')}}" enctype="multipart/form-data" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="description col-md-12">
                                                <label class="form-control-label" for="basic-url">Título Pequeno</label>
                                                <input name="tituloPagina" value="{{$tituloPagina}}" type="text" class="form-control">
                                            </div>

                                            <div class="description col-md-12">
                                                <label class="form-control-label" for="basic-url">Título Principal</label>
                                                <input name="tituloPrincipal"  type="text" class="form-control" value="{{$tituloPrincipal}}">
                                            </div>
                                        </div>

                                            {{-- SERVIÇO 1 --}}
                                            <div class="row">
                                                {{-- <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Ícone 1</label>
                                                    <input name="rodapeslide1" type="file" class="form-control">
                                                    <img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($rodapeslide1)}}" alt="">
                                                    <button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 70px <br> Altura: 70px">
                                                        <i class='bx bxs-info-circle' ></i>
                                                    </button>
                                                </div> --}}

                                                <div class="description mt-3 col-12">
                                                    <h2>Serviço 1</h2>
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Título </label>
                                                    <input name="servico1titulo" value="{{$servico1titulo}}" type="text" class="form-control">
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Descrição</label>
                                                    <input name="servico1descricao"  type="text" class="form-control" value="{{$servico1descricao}}">
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Preço 1</label>
                                                    <input name="servico1preco"  type="text" class="form-control" value="{{$servico1preco}}">
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Preço 2</label>
                                                    <input name="servico1preco2"  type="text" class="form-control" value="{{$servico1preco2}}">
                                                </div>
                                            </div>

                                            {{-- SERVIÇO 2 --}}
                                            <div class="row">
                                                {{-- <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Ícone 1</label>
                                                    <input name="rodapeslide1" type="file" class="form-control">
                                                    <img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($rodapeslide1)}}" alt="">
                                                    <button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 70px <br> Altura: 70px">
                                                        <i class='bx bxs-info-circle' ></i>
                                                    </button>
                                                </div> --}}

                                                <div class="description mt-3 col-12">
                                                    <h2>Serviço 2</h2>
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Título </label>
                                                    <input name="servico2titulo" value="{{$servico2titulo}}" type="text" class="form-control">
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Descrição</label>
                                                    <input name="servico2descricao"  type="text" class="form-control" value="{{$servico2descricao}}">
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Preço</label>
                                                    <input name="servico2preco"  type="text" class="form-control" value="{{$servico2preco}}">
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Preço 2</label>
                                                    <input name="servico2preco2"  type="text" class="form-control" value="{{$servico2preco2}}">
                                                </div>
                                            </div>

                                            {{-- SERVIÇO 3 --}}
                                            <div class="row">
                                                {{-- <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Ícone 1</label>
                                                    <input name="rodapeslide1" type="file" class="form-control">
                                                    <img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($rodapeslide1)}}" alt="">
                                                    <button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 70px <br> Altura: 70px">
                                                        <i class='bx bxs-info-circle' ></i>
                                                    </button>
                                                </div> --}}

                                                <div class="description mt-3 col-12">
                                                    <h2>Serviço 3</h2>
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Título </label>
                                                    <input name="servico3titulo" value="{{$servico3titulo}}" type="text" class="form-control">
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Descrição</label>
                                                    <input name="servico3descricao"  type="text" class="form-control" value="{{$servico3descricao}}">
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Preço</label>
                                                    <input name="servico4preco"  type="text" class="form-control" value="{{$servico4preco}}">
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Preço 2</label>
                                                    <input name="servico3preco2"  type="text" class="form-control" value="{{$servico3preco2}}">
                                                </div>
                                            </div>
                                            
                                            {{-- SERVIÇO 4 --}}
                                            <div class="row">
                                                {{-- <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Ícone 1</label>
                                                    <input name="rodapeslide1" type="file" class="form-control">
                                                    <img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($rodapeslide1)}}" alt="">
                                                    <button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 70px <br> Altura: 70px">
                                                        <i class='bx bxs-info-circle' ></i>
                                                    </button>
                                                </div> --}}

                                                <div class="description mt-3 col-12">
                                                    <h2>Serviço 4</h2>
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Título </label>
                                                    <input name="servico4titulo" value="{{$servico4titulo}}" type="text" class="form-control">
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Descrição</label>
                                                    <input name="servico4descricao"  type="text" class="form-control" value="{{$servico4descricao}}">
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Preço</label>
                                                    <input name="servico4preco"  type="text" class="form-control" value="{{$servico4preco}}">
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Preço 2</label>
                                                    <input name="servico4preco2"  type="text" class="form-control" value="{{$servico4preco2}}">
                                                </div>
                                            </div>

                                            {{-- SERVIÇO 5 --}}
                                            <div class="row">
                                                {{-- <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Ícone 1</label>
                                                    <input name="rodapeslide1" type="file" class="form-control">
                                                    <img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($rodapeslide1)}}" alt="">
                                                    <button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 70px <br> Altura: 70px">
                                                        <i class='bx bxs-info-circle' ></i>
                                                    </button>
                                                </div> --}}

                                                <div class="description mt-3 col-12">
                                                    <h2>Serviço 5</h2>
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Título </label>
                                                    <input name="servico5titulo" value="{{$servico5titulo}}" type="text" class="form-control">
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Descrição</label>
                                                    <input name="servico5descricao"  type="text" class="form-control" value="{{$servico5descricao}}">
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Preço</label>
                                                    <input name="servico5preco"  type="text" class="form-control" value="{{$servico5preco}}">
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Preço 2</label>
                                                    <input name="servico5preco2"  type="text" class="form-control" value="{{$servico5preco2}}">
                                                </div>
                                            </div>

                                            {{-- SERVIÇO 6 --}}
                                            <div class="row">
                                                {{-- <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Ícone 1</label>
                                                    <input name="rodapeslide1" type="file" class="form-control">
                                                    <img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($rodapeslide1)}}" alt="">
                                                    <button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 70px <br> Altura: 70px">
                                                        <i class='bx bxs-info-circle' ></i>
                                                    </button>
                                                </div> --}}

                                                <div class="description mt-3 col-12">
                                                    <h2>Serviço 6</h2>
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Título </label>
                                                    <input name="servico6titulo" value="{{$servico6titulo}}" type="text" class="form-control">
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Descrição</label>
                                                    <input name="servico6descricao"  type="text" class="form-control" value="{{$servico6descricao}}">
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Preço</label>
                                                    <input name="servico6preco"  type="text" class="form-control" value="{{$servico6preco}}">
                                                </div>
                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Preço 2</label>
                                                    <input name="servico6preco2"  type="text" class="form-control" value="{{$servico6preco2}}">
                                                </div>
                                            </div>

                                            {{-- SERVIÇO 7 --}}
                                            <div class="row">
                                                {{-- <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Ícone 1</label>
                                                    <input name="rodapeslide1" type="file" class="form-control">
                                                    <img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($rodapeslide1)}}" alt="">
                                                    <button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 70px <br> Altura: 70px">
                                                        <i class='bx bxs-info-circle' ></i>
                                                    </button>
                                                </div> --}}

                                                <div class="description mt-3 col-12">
                                                    <h2>Serviço 7</h2>
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Título </label>
                                                    <input name="servico7titulo" value="{{$servico7titulo}}" type="text" class="form-control">
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Descrição</label>
                                                    <input name="servico7descricao"  type="text" class="form-control" value="{{$servico7descricao}}">
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Preço</label>
                                                    <input name="servico7preco"  type="text" class="form-control" value="{{$servico7preco}}">
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Preço 2</label>
                                                    <input name="servico7preco2"  type="text" class="form-control" value="{{$servico7preco2}}">
                                                </div>
                                            </div>
                                            
                                            {{-- SERVIÇO 8 --}}
                                            <div class="row">
                                                {{-- <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Ícone 1</label>
                                                    <input name="rodapeslide1" type="file" class="form-control">
                                                    <img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($rodapeslide1)}}" alt="">
                                                    <button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 70px <br> Altura: 70px">
                                                        <i class='bx bxs-info-circle' ></i>
                                                    </button>
                                                </div> --}}

                                                <div class="description mt-3 col-12">
                                                    <h2>Serviço 8</h2>
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Título </label>
                                                    <input name="servico8titulo" value="{{$servico8titulo}}" type="text" class="form-control">
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Descrição</label>
                                                    <input name="servico8descricao"  type="text" class="form-control" value="{{$servico8descricao}}">
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Preço</label>
                                                    <input name="servico8preco"  type="text" class="form-control" value="{{$servico8preco}}">
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Preço 2</label>
                                                    <input name="servico8preco2"  type="text" class="form-control" value="{{$servico8preco2}}">
                                                </div>

                                            </div>

                                            {{-- SERVIÇO 9 --}}
                                            <div class="row">
                                                {{-- <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Ícone 1</label>
                                                    <input name="rodapeslide1" type="file" class="form-control">
                                                    <img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($rodapeslide1)}}" alt="">
                                                    <button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 70px <br> Altura: 70px">
                                                        <i class='bx bxs-info-circle' ></i>
                                                    </button>
                                                </div> --}}

                                                <div class="description mt-3 col-12">
                                                    <h2>Serviço 9</h2>
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Título </label>
                                                    <input name="servico9titulo" value="{{$servico9titulo}}" type="text" class="form-control">
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Descrição</label>
                                                    <input name="servico9descricao"  type="text" class="form-control" value="{{$servico9descricao}}">
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Preço</label>
                                                    <input name="servico9preco"  type="text" class="form-control" value="{{$servico9preco}}">
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Preço 2</label>
                                                    <input name="servico9preco2"  type="text" class="form-control" value="{{$servico9preco2}}">
                                                </div>
                                            </div>

                                            {{-- SERVIÇO 10 --}}
                                            <div class="row">
                                                {{-- <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Ícone 1</label>
                                                    <input name="rodapeslide1" type="file" class="form-control">
                                                    <img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($rodapeslide1)}}" alt="">
                                                    <button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 70px <br> Altura: 70px">
                                                        <i class='bx bxs-info-circle' ></i>
                                                    </button>
                                                </div> --}}

                                                <div class="description mt-3 col-12">
                                                    <h2>Serviço 10</h2>
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Título </label>
                                                    <input name="servico10titulo" value="{{$servico10titulo}}" type="text" class="form-control">
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Descrição</label>
                                                    <input name="servico10descricao"  type="text" class="form-control" value="{{$servico10descricao}}">
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Preço</label>
                                                    <input name="servico10preco"  type="text" class="form-control" value="{{$servico10preco}}">
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Preço 2</label>
                                                    <input name="servico10preco2"  type="text" class="form-control" value="{{$servico10preco2}}">
                                                </div>
                                            </div>

                                            {{-- SERVIÇO 11 --}}
                                            <div class="row">
                                                {{-- <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Ícone 1</label>
                                                    <input name="rodapeslide1" type="file" class="form-control">
                                                    <img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($rodapeslide1)}}" alt="">
                                                    <button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 70px <br> Altura: 70px">
                                                        <i class='bx bxs-info-circle' ></i>
                                                    </button>
                                                </div> --}}

                                                <div class="description mt-3 col-12">
                                                    <h2>Serviço 11</h2>
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Título </label>
                                                    <input name="servico11titulo" value="{{$servico11titulo}}" type="text" class="form-control">
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Descrição</label>
                                                    <input name="servico11descricao"  type="text" class="form-control" value="{{$servico11descricao}}">
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Preço</label>
                                                    <input name="servico11preco"  type="text" class="form-control" value="{{$servico11preco}}">
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Preço 2</label>
                                                    <input name="servico11preco2"  type="text" class="form-control" value="{{$servico11preco2}}">
                                                </div>

                                                <div class="description col-md-12" style="margin-top: 20px; text-align: center;">
                                                    <button class="btn btn-icon btn-primary" style="margin: auto;" type="submit">
                                                        <span class="btn-inner--text">Atualizar</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <!-- CONTATO -->
                                    <div class="tab-pane fade" id="tabs-icons-text-5" role="tabpanel" aria-labelledby="tabs-icons-text-5-tab">
                                        <form action="{{route('menu')}}" enctype="multipart/form-data" method="post">
                                        @csrf
                                            <div class="row">
                                            
                                                {{-- <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Imagem</label>
                                                    <input name="menu1" type="file" class="form-control" placeholder="Logo">
                                                </div>

                                                <div class="description col-md-6">
                                                    <img style="width: 40%; background: black; margin-top: 15px;"  src="{{Storage::url($menu1)}}" alt="">
                                                    <button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 2000px <br> Altura: 1300px">
                                                        <i class='bx bxs-info-circle' ></i>
                                                    </button>
                                                </div> --}}

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Título Pequeno </label>
                                                    <input style="margin-bottom: 20px;" name="contatoTituloPagina" value="{{$contatoTituloPagina}}" type="text" class="form-control" >
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Título Principal </label>
                                                    <input style="margin-bottom: 20px;" name="contatoTituloPagina2" value="{{$contatoTituloPagina2}}" type="text" class="form-control" >
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Título Email</label>
                                                    <input style="margin-bottom: 20px;" name="contatoTituloemail" value="{{$contatoTituloemail}}" type="text" class="form-control" >
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Email</label>
                                                    <input style="margin-bottom: 20px;" name="contatoemail" value="{{$contatoemail}}" type="text" class="form-control" >
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Título Endereço</label>
                                                    <input style="margin-bottom: 20px;" name="contatoTituloEndereco" value="{{$contatoTituloEndereco}}" type="text" class="form-control" >
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">SubTítulo Endereço</label>
                                                    <input style="margin-bottom: 20px;" name="contatoSubtTituloEndereco" value="{{$contatoSubtTituloEndereco}}" type="text" class="form-control" >
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Título Telefone</label>
                                                    <input style="margin-bottom: 20px;" name="contatoTituloTelefone" value="{{$contatoTituloTelefone}}" type="text" class="form-control" >
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Telefone</label>
                                                    <input style="margin-bottom: 20px;" name="contatoTelefone" value="{{$contatoTelefone}}" type="text" class="form-control" >
                                                </div>          
                                                
                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Link LinkedIn</label>
                                                    <input style="margin-bottom: 20px;" name="contatoLinkLinkedin" value="{{$contatoLinkLinkedin}}" type="text" class="form-control" >
                                                </div>   

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Link Facebook</label>
                                                    <input style="margin-bottom: 20px;" name="contatoLinkFacebook" value="{{$contatoLinkFacebook}}" type="text" class="form-control" >
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Link Instagram</label>
                                                    <input style="margin-bottom: 20px;" name="contatoLinkInstagram" value="{{$contatoLinkInstagram}}" type="text" class="form-control" >
                                                </div>
                    
                                                <div class="description col-md-12" style="margin-top: 20px; text-align: center;">
                                                    <button class="btn btn-icon btn-primary" style="margin: auto;" type="submit">
                                                        <span class="btn-inner--text">Atualizar</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <!-- DEPOIMENTOS -->
                                    <div class="tab-pane fade" id="tabs-icons-text-7" role="tabpanel" aria-labelledby="tabs-icons-text-7-tab">
                                        <form action="{{route('associados')}}" enctype="multipart/form-data" method="post">
                                        @csrf
                                            <div class="row">
                                                
                                                <div class="description col-md-12">
                                                    <label class="form-control-label" for="basic-url">Título Pequeno</label>
                                                    <input name="depoimento1" value="{{$depoimento1}}" type="text" class="form-control">
                                                </div>

                                                <div class="description col-md-12">
                                                    <label class="form-control-label" for="basic-url">Título Principal</label>
                                                    <input name="depoimento2" value="{{$depoimento2}}" type="text" class="form-control">
                                                </div>


                                                {{-- 
                                                
                                                    <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Parceiro 1</label>
                                                    <input style="margin-top: 20px"  name="associados1" type="file" class="form-control">
                                                    <img style="width: 30%; margin-top: 15px;"  src="{{Storage::url($associados1)}}" alt="">
                                                    <button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 400px <br> Altura: 142px">
                                                        <i class='bx bxs-info-circle' ></i>
                                                    </button>
                                                    </div>

                                                    <div class="description col-md-6">
                                                        <label class="form-control-label" for="basic-url">Parceiro 2</label>
                                                        <input style="margin-top: 20px"  name="associados2" type="file" class="form-control">
                                                        <img style="width: 30%; margin-top: 15px;"  src="{{Storage::url($associados2)}}" alt="">
                                                        <button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 400px <br> Altura: 142px">
                                                            <i class='bx bxs-info-circle' ></i>
                                                        </button>
                                                    </div>

                                                    <div class="description col-md-6">
                                                        <label class="form-control-label" for="basic-url">Parceiro 3</label>
                                                        <input style="margin-top: 20px"  name="associados3" type="file" class="form-control">
                                                        <img style="width: 30%; margin-top: 15px;"  src="{{Storage::url($associados3)}}" alt="">
                                                        <button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 400px <br> Altura: 142px">
                                                            <i class='bx bxs-info-circle' ></i>
                                                        </button>
                                                    </div>

                                                    <div class="description col-md-6">
                                                        <label class="form-control-label" for="basic-url">Parceiro 4</label>
                                                        <input style="margin-top: 20px"  name="associados4" type="file" class="form-control">
                                                        <img style="width: 30%; margin-top: 15px;"  src="{{Storage::url($associados4)}}" alt="">
                                                        <button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 400px <br> Altura: 142px">
                                                            <i class='bx bxs-info-circle' ></i>
                                                        </button>
                                                    </div>

                                                    <div class="description col-md-6">
                                                        <label class="form-control-label" for="basic-url">Parceiro 5</label>
                                                        <input style="margin-top: 20px"  name="associados5" type="file" class="form-control">
                                                        <img style="width: 30%; margin-top: 15px;"  src="{{Storage::url($associados5)}}" alt="">
                                                        <button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 400px <br> Altura: 142px">
                                                            <i class='bx bxs-info-circle' ></i>
                                                        </button>
                                                    </div>

                                                    <div class="description col-md-6">
                                                        <label class="form-control-label" for="basic-url">Parceiro 6</label>
                                                        <input style="margin-top: 20px"  name="associados6" type="file" class="form-control">
                                                        <img style="width: 30%; margin-top: 15px;"  src="{{Storage::url($associados6)}}" alt="">
                                                        <button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 400px <br> Altura: 142px">
                                                            <i class='bx bxs-info-circle' ></i>
                                                        </button>
                                                    </div>

                                                    <div class="description col-md-6">
                                                        <label class="form-control-label" for="basic-url">Parceiro 7</label>
                                                        <input style="margin-top: 20px"  name="associados7" type="file" class="form-control">
                                                        <img style="width: 30%; margin-top: 15px;"  src="{{Storage::url($associados7)}}" alt="">
                                                        <button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 400px <br> Altura: 142px">
                                                            <i class='bx bxs-info-circle' ></i>
                                                        </button>
                                                    </div>

                                                    <div class="description col-md-6">
                                                        <label class="form-control-label" for="basic-url">Parceiro 8</label>
                                                        <input style="margin-top: 20px"  name="associados8" type="file" class="form-control">
                                                        <img style="width: 30%; margin-top: 15px;"  src="{{Storage::url($associados8)}}" alt="">
                                                        <button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 400px <br> Altura: 142px">
                                                            <i class='bx bxs-info-circle' ></i>
                                                        </button>
                                                    </div>

                                                    <div class="description col-md-6">
                                                        <label class="form-control-label" for="basic-url">Parceiro 9</label>
                                                        <input style="margin-top: 20px"  name="associados9" type="file" class="form-control">
                                                        <img style="width: 30%; margin-top: 15px;"  src="{{Storage::url($associados9)}}" alt="">
                                                        <button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 400px <br> Altura: 142px">
                                                            <i class='bx bxs-info-circle' ></i>
                                                        </button>
                                                    </div>

                                                    <div class="description col-md-6">
                                                        <label class="form-control-label" for="basic-url">Parceiro 10</label>
                                                        <input style="margin-top: 20px"  name="associados10" type="file" class="form-control">
                                                        <img style="width: 30%; margin-top: 15px;"  src="{{Storage::url($associados10)}}" alt="">
                                                        <button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 400px <br> Altura: 142px">
                                                            <i class='bx bxs-info-circle' ></i>
                                                        </button>
                                                    </div>

                                                    <div class="description col-md-6">
                                                        <label class="form-control-label" for="basic-url">Parceiro 11</label>
                                                        <input style="margin-top: 20px"  name="associados11" type="file" class="form-control">
                                                        <img style="width: 30%; margin-top: 15px;"  src="{{Storage::url($associados11)}}" alt="">
                                                        <button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 400px <br> Altura: 142px">
                                                            <i class='bx bxs-info-circle' ></i>
                                                        </button>
                                                    </div>

                                                    <div class="description col-md-6">
                                                        <label class="form-control-label" for="basic-url">Parceiro 12</label>
                                                        <input style="margin-top: 20px"  name="associados12" type="file" class="form-control">
                                                        <img style="width: 30%; margin-top: 15px;"  src="{{Storage::url($associados12)}}" alt="">
                                                        <button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 400px <br> Altura: 142px">
                                                            <i class='bx bxs-info-circle' ></i>
                                                        </button>
                                                    </div> 
                                                --}}
                                                

                                                <div class="description col-md-12" style="margin-top: 20px; text-align: center;">
                                                    <button class="btn btn-icon btn-primary" style="margin: auto;" type="submit">
                                                        <span class="btn-inner--text">Atualizar</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <!-- AGENDAMENTO -->
                                    <div class="tab-pane fade" id="tabs-icons-text-8" role="tabpanel" aria-labelledby="tabs-icons-text-8-tab">
                                        <form action="{{route('receita')}}" enctype="multipart/form-data" method="post">
                                            <div class="row">
                                                @csrf

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Título Pequeno</label>
                                                    <input style="margin-bottom: 20px;" name="agendamento1" value="{{$agendamento1}}" type="text" class="form-control" >
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Título Principal</label>
                                                    <input style="margin-bottom: 20px;" name="agendamento2" value="{{$agendamento2}}" type="text" class="form-control" >
                                                </div>


                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Botão</label>
                                                    <input style="margin-bottom: 20px;" name="agendamentobotao" value="{{$agendamentobotao}}" type="text" class="form-control" >
                                                </div>

                                            
                                                <div class="description col-md-12" style="margin-top: 20px; text-align: center;">
                                                    <button class="btn btn-icon btn-primary" style="margin: auto;" type="submit">
                                                        <span class="btn-inner--text">Atualizar</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <!-- MODAL -->
                                    <div class="tab-pane fade" id="tabs-icons-text-9" role="tabpanel" aria-labelledby="tabs-icons-text-9-tab">
                                        <form action="{{route('footer')}}" enctype="multipart/form-data" method="post">
                                        @csrf
                                            <div class="alert alert-default text-center" role="alert">
                                                <h2 class="text-white">Lembrete</h2>
                                                <p>Para desativar um link basta deixar o campo vazio</p>
                                            </div>
                                            <div class="row">
                                                {{-- <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Link Facebook</label> 
                                                    {!!$footer1 == '' ? 
                                                        '<input class="ml-2 mr-3 form-check-input" type="radio" name="facebook" value="option1" disabled>
                                                        <label class="ml-4 form-control-label text-muted" for="basic-url">Desativado</label>' 
                                                        : 
                                                        '<input class="ml-2 mr-3 form-check-input" type="radio" name="facebook" value="option1" checked >
                                                         <label class="ml-4 form-control-label text-muted" for="basic-url">Ativado</label>'
                                                    !!}     
                                                    <input style="margin-bottom: 20px;" name="footer1" value="{{$footer1}}" type="text" class="form-control" >
                                                </div> --}}


                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Título</label>
                                                    <input style="margin-bottom: 20px;" name="modal1" value="{{$modal1}}" type="text" class="form-control" >
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Botão Agendamento</label>
                                                    <input style="margin-bottom: 20px;" name="modal2" value="{{$modal2}}" type="text" class="form-control" >
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Telefone</label>
                                                    <input style="margin-bottom: 20px;" name="modal3" value="{{$modal3}}" type="text" class="form-control" >
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Link WhatsApp</label>
                                                    <input style="margin-bottom: 20px;" name="modal4" value="{{$modal4}}" type="text" class="form-control" >
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Email</label>
                                                    <input style="margin-bottom: 20px;" name="modal5" value="{{$modal5}}" type="text" class="form-control" >
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Link Mapa</label>
                                                    <input style="margin-bottom: 20px;" name="modal6" value="{{$modal6}}" type="text" class="form-control" >
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Link Instagram</label>
                                                    <input style="margin-bottom: 20px;" name="modal7" value="{{$modal7}}" type="text" class="form-control" >
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Link Facebook</label>
                                                    <input style="margin-bottom: 20px;" name="modal8" value="{{$modal8}}" type="text" class="form-control" >
                                                </div>

                                                <div class="description col-md-6">
                                                    <label class="form-control-label" for="basic-url">Instrução de Click</label>
                                                    <input style="margin-bottom: 20px;" name="modal9" value="{{$modal9}}" type="text" class="form-control" >
                                                </div>
                                            
                                                <div class="description col-md-12" style="margin-top: 20px; text-align: center;">
                                                    <button class="btn btn-icon btn-primary" style="margin: auto;" type="submit">
                                                        <span class="btn-inner--text">Atualizar</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                    </div>
                <!-- END TABELA DE INFO -->
     
                <footer class="footer pt-0">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col-lg-12">
                            <div class="copyright text-rigth  text-lg-rigth  text-muted">
                                © 2021
                                <a  href="https://agenciabrawn.com.br" class="font-weight-bold ml-1" target="_blank">
                                Agência Brawn
                                </a>
                            </div>
                        </div>
                    </div>
                </footer>

                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>


@endsection