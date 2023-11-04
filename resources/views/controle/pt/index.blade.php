@extends('layouts.app')

@section('content')

	@component('components.controle.menu.index')
	@endcomponent

	<div class="col-xl-12 col-lg-12 col-md-12 container ml-5 pr-5" id="informacoes">
		<div class="row justify-content-center">
			<div class="coluna-painel">
				@if (session('status'))
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						<strong>{{ session('status') }}</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				@endif

				<div class="col-lg-6 col-12" style="padding-left: 0px;">
					<h6 class="h2 text-black d-inline-block mb-0" >Panel Control - Português</h6>
				</div>
					
				<div class="nav-wrapper mb-3">
					<ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
						<li class="nav-item">
								<a class="nav-link mb-sm-3 mb-md-0 mt-2 active" id="tabs-icons-text-9-tab" data-toggle="tab" href="#tabs-icons-text-9" role="tab" aria-controls="tabs-icons-text-9" aria-selected="false">
										Modal Inicial
								</a>
						</li>

						<li class="nav-item">
							<a class="nav-link mb-sm-3 mb-md-0 mt-2" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true">
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
							<a class="nav-link mb-sm-3 mb-md-0 mt-2" id="tabs-icons-text-8-tab" data-toggle="tab" href="#tabs-icons-text-8" role="tab" aria-controls="tabs-icons-text-8" aria-selected="false">
								Agendamento
							</a>
						</li>

						<li class="nav-item">
							<a class="nav-link mb-sm-3 mb-md-0 mt-2" id="tabs-icons-text-4-tab" data-toggle="tab" href="#tabs-icons-text-4" role="tab" aria-controls="tabs-icons-text-4" aria-selected="false">
								Serviços
							</a>
						</li>

						<li class="nav-item">
							<a class="nav-link mb-sm-3 mb-md-0 mt-2" id="estrutura" data-toggle="tab" href="#etsrutura-1" role="tab" aria-controls="etsrutura-1" aria-selected="false">
								Estrutura
							</a>
						</li>

						<li class="nav-item">
							<a class="nav-link mb-sm-3 mb-md-0 mt-2" id="tabs-icons-text-7-tab" data-toggle="tab" href="#tabs-icons-text-7" role="tab" aria-controls="tabs-icons-text-7" aria-selected="false">
								Depoimentos
							</a>
						</li>

						<li class="nav-item">
							<a  class="nav-link mb-sm-3 mb-md-0 mt-2" id="tabs-icons-text-5-tab" data-toggle="tab" href="#tabs-icons-text-5" role="tab" aria-controls="tabs-icons-text-5" aria-selected="false">
								Contato
							</a>
						</li>

						<li class="nav-item">
							<a  class="nav-link mb-sm-3 mb-md-0 mt-2" id="tabs-icons-text-10-tab" data-toggle="tab" href="#tabs-icons-text-10" role="tab" aria-controls="tabs-icons-text-10" aria-selected="false">
								LGPD
							</a>
						</li>
					</ul>
				</div>
								
				<div class="card shadow">
					<div class="card-body">
						<div class="tab-content" id="myTabContent">
							<!-- MODAL -->
							<div class="tab-pane fade active show" id="tabs-icons-text-9" role="tabpanel" aria-labelledby="tabs-icons-text-9-tab">
								<form action="{{route('portuguesmodal')}}" enctype="multipart/form-data" method="post">
									@csrf
									<div class="row">
										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Logo</label>
											<input name="portuguesmodalimg" type="file" class="form-control" placeholder="Logo">
										</div>

										<div class="description col-md-6">
											<img style="width: 40%; background: black; margin-top: 15px;"  src="{{Storage::url($portuguesmodalimg)}}" alt="">
											<button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 250px <br> Altura: 190px">
												<i class='bx bxs-info-circle' ></i>
											</button>
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Título</label>
											<input style="margin-bottom: 20px;" name="portuguesmodal1" value="{{$portuguesmodal1}}" type="text" class="form-control" >
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Botão Agendamento</label>
											<input style="margin-bottom: 20px;" name="portuguesmodal2" value="{{$portuguesmodal2}}" type="text" class="form-control" >
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Telefone</label>
											<input style="margin-bottom: 20px;" name="portuguesmodal3" value="{{$portuguesmodal3}}" type="text" class="form-control" >
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Link WhatsApp</label>
											<input style="margin-bottom: 20px;" name="portuguesmodal4" value="{{$portuguesmodal4}}" type="text" class="form-control" >
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Email</label>
											<input style="margin-bottom: 20px;" name="portuguesmodal5" value="{{$portuguesmodal5}}" type="text" class="form-control" >
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Link Mapa</label>
											<input style="margin-bottom: 20px;" name="portuguesmodal6" value="{{$portuguesmodal6}}" type="text" class="form-control" >
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Link Instagram</label>
											<input style="margin-bottom: 20px;" name="portuguesmodal7" value="{{$portuguesmodal7}}" type="text" class="form-control" >
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Link Facebook</label>
											<input style="margin-bottom: 20px;" name="portuguesmodal8" value="{{$portuguesmodal8}}" type="text" class="form-control" >
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Instrução de Click</label>
											<input style="margin-bottom: 20px;" name="portuguesmodal9" value="{{$portuguesmodal9}}" type="text" class="form-control" >
										</div>
																						
										<div class="description col-md-12" style="margin-top: 20px; text-align: center;">
											<button class="btn btn-icon btn-primary" style="margin: auto;" type="submit">
												<span class="btn-inner--text">Atualizar</span>
											</button>
										</div>
									</div>
								</form>
							</div>

							<!-- HOME -->
							<div class="tab-pane fade" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
								<form action="{{route('portuguesbanner')}}" method="POST">
									@csrf

									<div class="row">
										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Resumo Inicial</label>
											<input name="portuguestextoresumo" value="{{$portuguestextoresumo}}" type="text" class="form-control">
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Link do LinkedIn</label>
											<input name="portugueswhatsapp" value="{{$portugueswhatsapp}}" type="text" class="form-control">
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Link do Instagram</label>
											<input name="portuguesinstagram" value="{{$portuguesinstagram}}" type="text" class="form-control">
										</div>
																								
										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Link do Facebook</label>
											<input name="portuguesfacebook" value="{{$portuguesfacebook}}" type="text" class="form-control">
										</div>

										<button class="btn btn-icon btn-primary mx-auto mt-4" type="subimt">
											<span class="btn-inner--text">Atualizar</span>
										</button>
									</div>
								</form>
							</div>

							<!-- MENU -->
							<div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
								<form action="{{route('portuguesmenu')}}" enctype="multipart/form-data" method="post">
									@csrf
									<div class="row">
										<div class="description col-md-12">
											<label class="form-control-label" for="basic-url">Menu 1</label>
											<input name="portuguesmenu2"  type="text" class="form-control" value="{{$portuguesmenu2}}">
										</div>

										<div class="description col-md-12 mt-3">
											<label class="form-control-label" for="basic-url">Menu 2</label>
											<input name="portuguesmenu3"  type="text" class="form-control" value="{{$portuguesmenu3}}">
										</div>

										<div class="description col-md-12 mt-3">
											<label class="form-control-label" for="basic-url">Menu 3</label>
											<input name="portuguesmenu4"  type="text" class="form-control" value="{{$portuguesmenu4}}">
										</div>

										<div class="description col-md-12 mt-3">
											<label class="form-control-label" for="basic-url">Menu 4</label>
											<input name="portuguesmenu5"  type="text" class="form-control" value="{{$portuguesmenu5}}">
										</div>

										<div class="description col-md-12 mt-3">
											<label class="form-control-label" for="basic-url">Menu 5</label>
											<input name="portuguesmenu6"  type="text" class="form-control" value="{{$portuguesmenu6}}">
										</div>

										<div class="description col-md-12 mt-3">
											<label class="form-control-label" for="basic-url">Menu 6</label>
											<input name="portuguesmenu7"  type="text" class="form-control" value="{{$portuguesmenu7}}">
										</div>

										<div class="description col-md-12 mt-3">
											<label class="form-control-label" for="basic-url">Menu 7</label>
											<input name="portuguesmenu8"  type="text" class="form-control" value="{{$portuguesmenu8}}">
										</div>

										<div class="description col-md-12 mt-3">
											<label class="form-control-label" for="basic-url">Menu 8</label>
											<input name="portuguesmenu9"  type="text" class="form-control" value="{{$portuguesmenu9}}">
										</div>

										<div class="description col-md-12 mt-3">
											<label class="form-control-label" for="basic-url">Menu 9</label>
											<input name="portuguesmenu10"  type="text" class="form-control" value="{{$portuguesmenu10}}">
										</div>

										<div class="description col-md-12 mt-3" >
											<label class="form-control-label" for="basic-url">Logo Menu</label>
											<input name="portugueslogo1" type="file" class="form-control">
										</div>
										<div class="description col-md-12 mt-3">
											<img style="width: 30%; margin-top: 15px;" src="{{Storage::url($portugueslogo1)}}" alt="">
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
								<form action="{{route('portuguessobre')}}" enctype="multipart/form-data" method="post">
									@csrf
										<div class="row">
											<div class="description col-md-12 mt-3">
												<label class="form-control-label" for="basic-url">Titulo 1</label>
												<input name="portuguesslide4"  type="text" class="form-control" value="{{$portuguesslide4}}">
											</div>

											<div class="description col-md-12 mt-3">
												<label class="form-control-label" for="basic-url">Titulo da Página</label>
												<input name="portuguesslide5"  type="text" class="form-control" value="{{$portuguesslide5}}">
											</div>

											<div class="description col-md-12 mt-3">
												<label class="form-control-label" for="basic-url">Titulo do Texto</label>
												<input name="portuguesslide6"  type="text" class="form-control" value="{{$portuguesslide6}}">
											</div>

											<div class="description col-md-12 mt-3">
												<label class="form-control-label" for="basic-url">Texto</label>
												<input name="portuguesslide7"  type="text" class="form-control" value="{{$portuguesslide7}}">
											</div>

											<div class="description col-md-12 mt-3">
												<label class="form-control-label" for="basic-url">Imagem</label>
											</div>

											<div class="description col-md-12 mt-3" >
												<label class="form-control-label" for="basic-url">Logo Menu</label>
												<input name="portuguesslide1" type="file" class="form-control">
											</div>
											<div class="description col-md-12 mt-3">
												<img style="width: 30%; margin-top: 15px;" src="{{Storage::url($portuguesslide1)}}" alt="">
												<button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 600px <br> Altura: 400px"><i class='bx bxs-info-circle'></i></button>
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
								<form action="{{route('portuguesservico')}}" enctype="multipart/form-data" method="post">
									@csrf
									<div class="row">
										<div class="description col-md-12">
											<label class="form-control-label" for="basic-url">Título Pequeno</label>
											<input name="portuguestituloPagina" value="{{$portuguestituloPagina}}" type="text" class="form-control">
										</div>

										<div class="description col-md-12">
											<label class="form-control-label" for="basic-url">Título Principal</label>
											<input name="portuguestituloPrincipal"  type="text" class="form-control" value="{{$portuguestituloPrincipal}}">
										</div>
									</div>

									{{-- SERVIÇO 1 --}}
									<div class="row">
										<div class="description mt-3 col-12">
											<h2>Serviço 1</h2>
										</div>
										<div class="description col-md-12">
											<div class="form-check form-switch w-100">
													<input id="linkToggle" type="checkbox" role="switch" class="form-check-input" onchange="mudaInput(this,'1')" {{ (str_contains($portuguesservico1img, 'embed')) ? 'Checked' : ''}} >
													<label class="form-control-label" for="linkToggle">Link?</label>
											</div>
										</div>

										<div class="description col-md-6">
											<div id="imagem1InputContainer">
												<label class="form-control-label" for="basic-url">Imagem do Serviço</label>
												<input name="portuguesservico1img" type="file" class="form-control">
												<img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($portuguesservico1img)}}" alt="">
												<button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 70px <br> Altura: 70px">
													<i class='bx bxs-info-circle' ></i>
												</button>
											</div>
											<div id="video1InputContainer">
												<label class="form-control-label" for="basic-url">Vídeo do Serviço</label>
												<input name="portuguesservico1img" id="portuguesservico1img" type="text" class="form-control" value="{{ (str_contains($portuguesservico1img, 'embed')) ? 'https://www.youtube.com/watch?v='.str_after($portuguesservico1img, 'embed') : '' }}">
												<button type="button" class="btn btn-primary ml-2 mt-2" data-toggle="tooltip" data-html="true" title="Copie e Cole o Link do video do Youtube <br> ">
													<i class='bx bxs-info-circle'></i>
												</button>
												<span class="form-text">Formato do Link: "https://www.youtube.com/watch?v=UXi8NeHqIDA"</span>
											</div>
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Título </label>
											<input name="portuguesservico1titulo" value="{{$portuguesservico1titulo}}" type="text" class="form-control">
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Descrição</label>
											<input name="portuguesservico1descricao" type="text" class="form-control" value="{{$portuguesservico1descricao}}">
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Preço 1</label>
											<input name="portuguesservico1preco" type="text" class="form-control" value="{{$portuguesservico1preco}}">
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Preço 2</label>
											<input name="portuguesservico1preco2" type="text" class="form-control" value="{{$portuguesservico1preco2}}">
										</div>
									</div>


									{{-- SERVIÇO 2 --}}
									<div class="row">
										<div class="description mt-3 col-12">
											<h2>Serviço 2</h2>
										</div>

										<div class="description col-md-12">
											<div class="form-check form-switch w-100">
													<input id="linkToggle" type="checkbox" role="switch" class="form-check-input" onchange="mudaInput(this,'2')" {{ (str_contains($portuguesservico2img, 'embed')) ? 'Checked' : ''}} >
													<label class="form-control-label" for="linkToggle">Link?</label>
											</div>
										</div>
																								
										<div class="description col-md-6">
											<div id="imagem2InputContainer">
												<label class="form-control-label" for="basic-url">Imagem do Serviço</label>
												<input name="portuguesservico2img" type="file" class="form-control">
												<img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($portuguesservico2img)}}" alt="">
												<button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 700px <br> Altura: 400px">
													<i class='bx bxs-info-circle' ></i>
												</button>
											</div>
											<div id="video2InputContainer">
												<label class="form-control-label" for="basic-url">Vídeo do Serviço</label>
												<input name="portuguesservico2img" id="portuguesservico2img" type="text" class="form-control" value="{{ (str_contains($portuguesservico2img, 'embed')) ? 'https://www.youtube.com/watch?v='.str_after($portuguesservico2img, 'embed') : '' }}">
												<button type="button" class="btn btn-primary ml-2 mt-2" data-toggle="tooltip" data-html="true" title="Copie e Cole o Link do video do Youtube <br> ">
													<i class='bx bxs-info-circle'></i>
												</button>
												<span class="form-text">Formato do Link: "https://www.youtube.com/watch?v=UXi8NeHqIDA"</span>
											</div>
										</div>
										
										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Título </label>
											<input name="portuguesservico2titulo" value="{{$portuguesservico2titulo}}" type="text" class="form-control">
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Descrição</label>
											<input name="portuguesservico2descricao"  type="text" class="form-control" value="{{$portuguesservico2descricao}}">
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Preço</label>
											<input name="portuguesservico2preco"  type="text" class="form-control" value="{{$portuguesservico2preco}}">
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Preço 2</label>
											<input name="portuguesservico2preco2"  type="text" class="form-control" value="{{$portuguesservico2preco2}}">
										</div>
									</div>

									{{-- SERVIÇO 3 --}}
									<div class="row">
										<div class="description mt-3 col-12">
											<h2>Serviço 3</h2>
										</div>

										<div class="form-check form-switch w-100">
											<input id="linkToggle" type="checkbox" role="switch" class="form-check-input" onchange="mudaInput(this,'3')" {{ (str_contains($portuguesservico3img, 'embed')) ? 'Checked' : ''}} >
											<label class="form-control-label" for="linkToggle">Link?</label>
										</div>
																								
										<div class="description col-md-6">
											<div id="imagem3InputContainer">
												<label class="form-control-label" for="basic-url">Imagem do Serviço</label>
												<input name="portuguesservico3img" type="file" class="form-control">
												<img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($portuguesservico3img)}}" alt="">
												<button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 700px <br> Altura: 400px">
													<i class='bx bxs-info-circle' ></i>
												</button>
											</div>
											<div id="video3InputContainer">
												<label class="form-control-label" for="basic-url">Vídeo do Serviço</label>
												<input name="portuguesservico3img" id="portuguesservico3img" type="text" class="form-control" value="{{ (str_contains($portuguesservico3img, 'embed')) ? 'https://www.youtube.com/watch?v='.str_after($portuguesservico3img, 'embed') : '' }}">
												<button type="button" class="btn btn-primary ml-2 mt-2" data-toggle="tooltip" data-html="true" title="Copie e Cole o Link do video do Youtube <br> ">
													<i class='bx bxs-info-circle'></i>
												</button>
												<span class="form-text">Formato do Link: "https://www.youtube.com/watch?v=UXi8NeHqIDA"</span>
											</div>
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Título </label>
											<input name="portuguesservico3titulo" value="{{$portuguesservico3titulo}}" type="text" class="form-control">
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Descrição</label>
											<input name="portuguesservico3descricao"  type="text" class="form-control" value="{{$portuguesservico3descricao}}">
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Preço</label>
											<input name="portuguesservico4preco"  type="text" class="form-control" value="{{$portuguesservico4preco}}">
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Preço 2</label>
											<input name="portuguesservico3preco2"  type="text" class="form-control" value="{{$portuguesservico3preco2}}">
										</div>
									</div>
																						
									{{-- SERVIÇO 4 --}}
									<div class="row">
										<div class="description mt-3 col-12">
											<h2>Serviço 4</h2>
										</div>

										<div class="form-check form-switch w-100">
											<input id="linkToggle" type="checkbox" role="switch" class="form-check-input" onchange="mudaInput(this,'4')" {{ (str_contains($portuguesservico4img, 'embed')) ? 'Checked' : ''}} >
											<label class="form-control-label" for="linkToggle">Link?</label>
										</div>
																								
										<div class="description col-md-6">
											<div id="imagem4InputContainer">
												<label class="form-control-label" for="basic-url">Imagem do Serviço</label>
												<input name="portuguesservico4img" type="file" class="form-control">
												<img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($portuguesservico4img)}}" alt="">
												<button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 700px <br> Altura: 400px">
													<i class='bx bxs-info-circle' ></i>
												</button>
											</div>
											<div id="video4sInputContainer">
												<label class="form-control-label" for="basic-url">Vídeo do Serviço</label>
												<input name="portuguesservico4img" id="portuguesservico4img" type="text" class="form-control" value="{{ (str_contains($portuguesservico4img, 'embed')) ? 'https://www.youtube.com/watch?v='.str_after($portuguesservico4img, 'embed') : '' }}">
												<button type="button" class="btn btn-primary ml-2 mt-2" data-toggle="tooltip" data-html="true" title="Copie e Cole o Link do video do Youtube <br> ">
													<i class='bx bxs-info-circle'></i>
												</button>
												<span class="form-text">Formato do Link: "https://www.youtube.com/watch?v=UXi8NeHqIDA"</span>
											</div>
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Título </label>
											<input name="portuguesservico4titulo" value="{{$portuguesservico4titulo}}" type="text" class="form-control">
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Descrição</label>
											<input name="portuguesservico4descricao"  type="text" class="form-control" value="{{$portuguesservico4descricao}}">
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Preço</label>
											<input name="portuguesservico4preco"  type="text" class="form-control" value="{{$portuguesservico4preco}}">
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Preço 2</label>
											<input name="portuguesservico4preco2"  type="text" class="form-control" value="{{$portuguesservico4preco2}}">
										</div>
									</div>

									{{-- SERVIÇO 5 --}}
									<div class="row">
										<div class="description mt-3 col-12">
											<h2>Serviço 5</h2>
										</div>

										<div class="form-check form-switch w-100">
											<input id="linkToggle" type="checkbox" role="switch" class="form-check-input" onchange="mudaInput(this,'5')" {{ (str_contains($portuguesservico5img, 'embed')) ? 'Checked' : ''}} >
											<label class="form-control-label" for="linkToggle">Link?</label>
										</div>

										<div class="description col-md-6">
											<div id="imagem5InputContainer">
												<label class="form-control-label" for="basic-url">Imagem do Serviço</label>
												<input name="portuguesservico5img" type="file" class="form-control">
													<img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($portuguesservico5img)}}" alt="">
													<button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 700px <br> Altura: 400px">
														<i class='bx bxs-info-circle' ></i>
													</button>
											</div>
											<div id="video5InputContainer">
												<label class="form-control-label" for="basic-url">Vídeo do Serviço</label>
												<input name="portuguesservico5img" id="portuguesservico5img" type="text" class="form-control" value="{{ (str_contains($portuguesservico5img, 'embed')) ? 'https://www.youtube.com/watch?v='.str_after($portuguesservico5img, 'embed') : '' }}">
												<button type="button" class="btn btn-primary ml-2 mt-2" data-toggle="tooltip" data-html="true" title="Copie e Cole o Link do video do Youtube <br> ">
													<i class='bx bxs-info-circle'></i>
												</button>
												<span class="form-text">Formato do Link: "https://www.youtube.com/watch?v=UXi8NeHqIDA"</span>
											</div>
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Título </label>
											<input name="portuguesservico5titulo" value="{{$portuguesservico5titulo}}" type="text" class="form-control">
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Descrição</label>
											<input name="portuguesservico5descricao"  type="text" class="form-control" value="{{$portuguesservico5descricao}}">
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Preço</label>
											<input name="portuguesservico5preco"  type="text" class="form-control" value="{{$portuguesservico5preco}}">
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Preço 2</label>
											<input name="portuguesservico5preco2"  type="text" class="form-control" value="{{$portuguesservico5preco2}}">
										</div>
									</div>

									{{-- SERVIÇO 6 --}}
									<div class="row">
										<div class="description mt-3 col-12">
											<h2>Serviço 6</h2>
										</div>

										<div class="form-check form-switch w-100">
											<input id="linkToggle" type="checkbox" role="switch" class="form-check-input" onchange="mudaInput(this,'6')" {{ (str_contains($portuguesservico6img, 'embed')) ? 'Checked' : ''}} >
											<label class="form-control-label" for="linkToggle">Link?</label>
										</div>

										<div class="description col-md-6">
											<div id="imagem6InputContainer">
												<label class="form-control-label" for="basic-url">Imagem do Serviço</label>
												<input name="portuguesservico6img" type="file" class="form-control">
													<img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($portuguesservico6img)}}" alt="">
													<button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 700px <br> Altura: 400px">
														<i class='bx bxs-info-circle' ></i>
													</button>
											</div>
											<div id="video6InputContainer">
												<label class="form-control-label" for="basic-url">Vídeo do Serviço</label>
												<input name="portuguesservico6img" id="portuguesservico6img" type="text" class="form-control" value="{{ (str_contains($portuguesservico6img, 'embed')) ? 'https://www.youtube.com/watch?v='.str_after($portuguesservico6img, 'embed') : '' }}">
												<button type="button" class="btn btn-primary ml-2 mt-2" data-toggle="tooltip" data-html="true" title="Copie e Cole o Link do video do Youtube <br> ">
													<i class='bx bxs-info-circle'></i>
												</button>
												<span class="form-text">Formato do Link: "https://www.youtube.com/watch?v=UXi8NeHqIDA"</span>
											</div>
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Título </label>
											<input name="portuguesservico6titulo" value="{{$portuguesservico6titulo}}" type="text" class="form-control">
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Descrição</label>
											<input name="portuguesservico6descricao"  type="text" class="form-control" value="{{$portuguesservico6descricao}}">
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Preço</label>
											<input name="portuguesservico6preco"  type="text" class="form-control" value="{{$portuguesservico6preco}}">
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Preço 2</label>
											<input name="portuguesservico6preco2"  type="text" class="form-control" value="{{$portuguesservico6preco2}}">
										</div>
									</div>

									{{-- SERVIÇO 7 --}}
									<div class="row">
										<div class="description mt-3 col-12">
											<h2>Serviço 7</h2>
										</div>

										<div class="form-check form-switch w-100">
											<input id="linkToggle" type="checkbox" role="switch" class="form-check-input" onchange="mudaInput(this,'7')" {{ (str_contains($portuguesservico7img, 'embed')) ? 'Checked' : ''}} >
											<label class="form-control-label" for="linkToggle">Link?</label>
										</div>

										<div class="description col-md-6">
											<div id="imagem7InputContainer">
												<label class="form-control-label" for="basic-url">Imagem do Serviço</label>
												<input name="portuguesservico7img" type="file" class="form-control">
													<img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($portuguesservico7img)}}" alt="">
													<button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 700px <br> Altura: 400px">
														<i class='bx bxs-info-circle' ></i>
													</button>
											</div>
											<div id="video7InputContainer">
												<label class="form-control-label" for="basic-url">Vídeo do Serviço</label>
												<input name="portuguesservico7img" id="portuguesservico7img" type="text" class="form-control" value="{{ (str_contains($portuguesservico7img, 'embed')) ? 'https://www.youtube.com/watch?v='.str_after($portuguesservico7img, 'embed') : '' }}">
												<button type="button" class="btn btn-primary ml-2 mt-2" data-toggle="tooltip" data-html="true" title="Copie e Cole o Link do video do Youtube <br> ">
													<i class='bx bxs-info-circle'></i>
												</button>
												<span class="form-text">Formato do Link: "https://www.youtube.com/watch?v=UXi8NeHqIDA"</span>
											</div>
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Título </label>
											<input name="portuguesservico7titulo" value="{{$portuguesservico7titulo}}" type="text" class="form-control">
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Descrição</label>
											<input name="portuguesservico7descricao"  type="text" class="form-control" value="{{$portuguesservico7descricao}}">
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Preço</label>
											<input name="portuguesservico7preco"  type="text" class="form-control" value="{{$portuguesservico7preco}}">
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Preço 2</label>
											<input name="portuguesservico7preco2"  type="text" class="form-control" value="{{$portuguesservico7preco2}}">
										</div>
									</div>
																						
									{{-- SERVIÇO 8 --}}
									<div class="row">
										<div class="description mt-3 col-12">
											<h2>Serviço 8</h2>
										</div>

										<div class="form-check form-switch w-100">
											<input id="linkToggle" type="checkbox" role="switch" class="form-check-input" onchange="mudaInput(this,'8')" {{ (str_contains($portuguesservico8img, 'embed')) ? 'Checked' : ''}} >
											<label class="form-control-label" for="linkToggle">Link?</label>
										</div>

										<div class="description col-md-6">
											<div id="imagem8InputContainer">
												<label class="form-control-label" for="basic-url">Imagem do Serviço</label>
												<input name="portuguesservico8img" type="file" class="form-control">
													<img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($portuguesservico8img)}}" alt="">
													<button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 700px <br> Altura: 400px">
														<i class='bx bxs-info-circle' ></i>
													</button>
											</div>
											<div id="video8InputContainer">
												<label class="form-control-label" for="basic-url">Vídeo do Serviço</label>
												<input name="portuguesservico8img" id="portuguesservico8img" type="text" class="form-control" value="{{ (str_contains($portuguesservico8img, 'embed')) ? 'https://www.youtube.com/watch?v='.str_after($portuguesservico8img, 'embed') : '' }}">
												<button type="button" class="btn btn-primary ml-2 mt-2" data-toggle="tooltip" data-html="true" title="Copie e Cole o Link do video do Youtube <br> ">
													<i class='bx bxs-info-circle'></i>
												</button>
												<span class="form-text">Formato do Link: "https://www.youtube.com/watch?v=UXi8NeHqIDA"</span>
											</div>
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Título </label>
											<input name="portuguesservico8titulo" value="{{$portuguesservico8titulo}}" type="text" class="form-control">
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Descrição</label>
											<input name="portuguesservico8descricao"  type="text" class="form-control" value="{{$portuguesservico8descricao}}">
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Preço</label>
											<input name="portuguesservico8preco"  type="text" class="form-control" value="{{$portuguesservico8preco}}">
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Preço 2</label>
											<input name="portuguesservico8preco2"  type="text" class="form-control" value="{{$portuguesservico8preco2}}">
										</div>
									</div>

									{{-- SERVIÇO 9 --}}
									<div class="row">
										<div class="description mt-3 col-12">
											<h2>Serviço 9</h2>
										</div>

										<div class="form-check form-switch w-100">
											<input id="linkToggle" type="checkbox" role="switch" class="form-check-input" onchange="mudaInput(this,'9')" {{ (str_contains($portuguesservico9img, 'embed')) ? 'Checked' : ''}} >
											<label class="form-control-label" for="linkToggle">Link?</label>
										</div>

										<div class="description col-md-6">
											<div id="imagem9InputContainer">
												<label class="form-control-label" for="basic-url">Imagem do Serviço</label>
												<input name="portuguesservico9img" type="file" class="form-control">
													<img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($portuguesservico9img)}}" alt="">
													<button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 700px <br> Altura: 400px">
														<i class='bx bxs-info-circle' ></i>
													</button>
											</div>
											<div id="video9InputContainer">
												<label class="form-control-label" for="basic-url">Vídeo do Serviço</label>
												<input name="portuguesservico9img" id="portuguesservico9img" type="text" class="form-control" value="{{ (str_contains($portuguesservico9img, 'embed')) ? 'https://www.youtube.com/watch?v='.str_after($portuguesservico9img, 'embed') : '' }}">
												<button type="button" class="btn btn-primary ml-2 mt-2" data-toggle="tooltip" data-html="true" title="Copie e Cole o Link do video do Youtube <br> ">
													<i class='bx bxs-info-circle'></i>
												</button>
												<span class="form-text">Formato do Link: "https://www.youtube.com/watch?v=UXi8NeHqIDA"</span>
											</div>
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Título </label>
											<input name="portuguesservico9titulo" value="{{$portuguesservico9titulo}}" type="text" class="form-control">
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Descrição</label>
											<input name="portuguesservico9descricao"  type="text" class="form-control" value="{{$portuguesservico9descricao}}">
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Preço</label>
											<input name="portuguesservico9preco" type="text" class="form-control" value="{{$portuguesservico9preco}}">
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Preço 2</label>
											<input name="portuguesservico9preco2"  type="text" class="form-control" value="{{$portuguesservico9preco2}}">
										</div>
									</div>

									{{-- SERVIÇO 10 --}}
									<div class="row">
										<div class="description mt-3 col-12">
											<h2>Serviço 10</h2>
										</div>

										<div class="form-check form-switch w-100">
											<input id="linkToggle" type="checkbox" role="switch" class="form-check-input" onchange="mudaInput(this,'10')" {{ (str_contains($portuguesservico10img, 'embed')) ? 'Checked' : ''}} >
											<label class="form-control-label" for="linkToggle">Link?</label>
										</div>

										<div class="description col-md-6">
											<div id="imagem9InputContainer">
												<label class="form-control-label" for="basic-url">Imagem do Serviço</label>
												<input name="portuguesservico10img" type="file" class="form-control">
													<img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($portuguesservico10img)}}" alt="">
													<button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 700px <br> Altura: 400px">
														<i class='bx bxs-info-circle' ></i>
													</button>
											</div>
											<div id="video10InputContainer">
												<label class="form-control-label" for="basic-url">Vídeo do Serviço</label>
												<input name="portuguesservico10img" id="portuguesservico10img" type="text" class="form-control" value="{{ (str_contains($portuguesservico10img, 'embed')) ? 'https://www.youtube.com/watch?v='.str_after($portuguesservico10img, 'embed') : '' }}">
												<button type="button" class="btn btn-primary ml-2 mt-2" data-toggle="tooltip" data-html="true" title="Copie e Cole o Link do video do Youtube <br> ">
													<i class='bx bxs-info-circle'></i>
												</button>
												<span class="form-text">Formato do Link: "https://www.youtube.com/watch?v=UXi8NeHqIDA"</span>
											</div>
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Título </label>
											<input name="portuguesservico10titulo" value="{{$portuguesservico10titulo}}" type="text" class="form-control">
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Descrição</label>
											<input name="portuguesservico10descricao"  type="text" class="form-control" value="{{$portuguesservico10descricao}}">
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Preço</label>
											<input name="portuguesservico10preco"  type="text" class="form-control" value="{{$portuguesservico10preco}}">
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Preço 2</label>
											<input name="portuguesservico10preco2"  type="text" class="form-control" value="{{$portuguesservico10preco2}}">
										</div>
									</div>

									{{-- SERVIÇO 11 --}}
									<div class="row">
										<div class="description mt-3 col-12">
											<h2>Serviço 11</h2>
										</div>

										<div class="form-check form-switch w-100">
											<input id="linkToggle" type="checkbox" role="switch" class="form-check-input" onchange="mudaInput(this,'11')" {{ (str_contains($portuguesservico11img, 'embed')) ? 'Checked' : ''}} >
											<label class="form-control-label" for="linkToggle">Link?</label>
										</div>

										<div class="description col-md-6">
											<div id="imagem11InputContainer">
												<label class="form-control-label" for="basic-url">Imagem do Serviço</label>
												<input name="portuguesservico11img" type="file" class="form-control">
													<img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($portuguesservico11img)}}" alt="">
													<button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 700px <br> Altura: 400px">
														<i class='bx bxs-info-circle' ></i>
													</button>
											</div>
											<div id="video11InputContainer">
												<label class="form-control-label" for="basic-url">Vídeo do Serviço</label>
												<input name="portuguesservico11img" id="portuguesservico11img" type="text" class="form-control" value="{{ (str_contains($portuguesservico11img, 'embed')) ? 'https://www.youtube.com/watch?v='.str_after($portuguesservico11img, 'embed') : '' }}">
												<button type="button" class="btn btn-primary ml-2 mt-2" data-toggle="tooltip" data-html="true" title="Copie e Cole o Link do video do Youtube <br> ">
													<i class='bx bxs-info-circle'></i>
												</button>
												<span class="form-text">Formato do Link: "https://www.youtube.com/watch?v=UXi8NeHqIDA"</span>
											</div>
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Título </label>
											<input name="portuguesservico11titulo" value="{{$portuguesservico11titulo}}" type="text" class="form-control">
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Descrição</label>
											<input name="portuguesservico11descricao"  type="text" class="form-control" value="{{$portuguesservico11descricao}}">
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Preço</label>
											<input name="portuguesservico11preco"  type="text" class="form-control" value="{{$portuguesservico11preco}}">
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Preço 2</label>
											<input name="portuguesservico11preco2"  type="text" class="form-control" value="{{$portuguesservico11preco2}}">
										</div>

										<div class="description col-md-12" style="margin-top: 20px; text-align: center;">
											<button class="btn btn-icon btn-primary" style="margin: auto;" type="submit">
												<span class="btn-inner--text">Atualizar</span>
											</button>
										</div>
									</div>
								</form>
							</div>

							<!-- ESTRUTURA -->
							<div class="tab-pane fade" id="etsrutura-1" role="tabpanel" aria-labelledby="estrutura">
								<form action="{{route('portuguesestrutura')}}" enctype="multipart/form-data" method="post">
									@csrf
									<div class="row">
										<div class="description col-md-12">
											<label class="form-control-label" for="basic-url">Título Pequeno</label>
											<input name="portuguesestruturatitulo1" value="{{$portuguesestruturatitulo1}}" type="text" class="form-control">
										</div>

										<div class="description col-md-12">
											<label class="form-control-label" for="basic-url">Título Principal</label>
											<input name="portuguesestruturatitulo2"  type="text" class="form-control" value="{{$portuguesestruturatitulo2}}">
										</div>
									</div>

									{{-- ESTRUTURA 1 --}}
									<div class="row">
										<div>
											<div class="description mt-3 col-12">
												<h2>Estrutura 1</h2>
											</div>
																										
											<div class="description col-md-6">
												<input name="portuguesestruturaimagem1" type="file" class="form-control">
												<img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($portuguesestruturaimagem1)}}" alt="">
												<button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 300px <br> Altura: 150px">
													<i class='bx bxs-info-circle' ></i>
												</button>
											</div>
										</div>

										<div>
												<div class="description mt-3 col-12">
													<h2>Estrutura 2</h2>
												</div>
																										
												<div class="description col-md-6">
													<input name="portuguesestruturaimagem2" type="file" class="form-control">
													<img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($portuguesestruturaimagem2)}}" alt="">
													<button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 300px <br> Altura: 150px">
														<i class='bx bxs-info-circle' ></i>
													</button>
												</div>
										</div>

										<div>
											<div class="description mt-3 col-12">
												<h2>Estrutura 3</h2>
											</div>
																										
											<div class="description col-md-6">
												<input name="portuguesestruturaimagem3" type="file" class="form-control">
												<img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($portuguesestruturaimagem3)}}" alt="">
												<button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 300px <br> Altura: 150px">
													<i class='bx bxs-info-circle' ></i>
												</button>
											</div>
										</div>

										<div>
											<div class="description mt-3 col-12">
												<h2>Estrutura 4</h2>
											</div>
																										
											<div class="description col-md-6">
												<input name="portuguesestruturaimagem4" type="file" class="form-control">
												<img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($portuguesestruturaimagem4)}}" alt="">
												<button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 300px <br> Altura: 150px">
													<i class='bx bxs-info-circle' ></i>
												</button>
											</div>
										</div>

										<div>
											<div class="description mt-3 col-12">
												<h2>Estrutura 5</h2>
											</div>
																										
											<div class="description col-md-6">
												<input name="portuguesestruturaimagem5" type="file" class="form-control">
												<img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($portuguesestruturaimagem5)}}" alt="">
												<button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 300px <br> Altura: 150px">
													<i class='bx bxs-info-circle' ></i>
												</button>
											</div>
										</div>

										<div>
											<div class="description mt-3 col-12">
												<h2>Estrutura 6</h2>
											</div>
																										
											<div class="description col-md-6">
												<input name="portuguesestruturaimagem6" type="file" class="form-control">
												<img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($portuguesestruturaimagem6)}}" alt="">
												<button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 300px <br> Altura: 150px">
													<i class='bx bxs-info-circle' ></i>
												</button>
											</div>
										</div>

										<div>
											<div class="description mt-3 col-12">
												<h2>Estrutura 7</h2>
											</div>
																										
											<div class="description col-md-6">
												<input name="portuguesestruturaimagem7" type="file" class="form-control">
												<img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($portuguesestruturaimagem7)}}" alt="">
												<button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 300px <br> Altura: 150px">
													<i class='bx bxs-info-circle' ></i>
												</button>
											</div>
										</div>

										<div>
											<div class="description mt-3 col-12">
												<h2>Estrutura 8</h2>
											</div>
																										
											<div class="description col-md-6">
												<input name="portuguesestruturaimagem8" type="file" class="form-control">
												<img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($portuguesestruturaimagem8)}}" alt="">
												<button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 300px <br> Altura: 150px">
													<i class='bx bxs-info-circle' ></i>
												</button>
											</div>
										</div>

										<div>
											<div class="description mt-3 col-12">
												<h2>Estrutura 9</h2>
											</div>
																										
											<div class="description col-md-6">
												<input name="portuguesestruturaimagem9" type="file" class="form-control">
												<img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($portuguesestruturaimagem9)}}" alt="">
												<button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 300px <br> Altura: 150px">
													<i class='bx bxs-info-circle' ></i>
												</button>
											</div>
										</div>

										<div>
											<div class="description mt-3 col-12">
												<h2>Estrutura 10</h2>
											</div>
																										
											<div class="description col-md-6">
												<input name="portuguesestruturaimagem10" type="file" class="form-control">
												<img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($portuguesestruturaimagem10)}}" alt="">
												<button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 300px <br> Altura: 150px">
													<i class='bx bxs-info-circle' ></i>
												</button>
											</div>
										</div>

										<div>
											<div class="description mt-3 col-12">
												<h2>Estrutura 11</h2>
											</div>
																										
											<div class="description col-md-6">
												<input name="portuguesestruturaimagem11" type="file" class="form-control">
												<img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($portuguesestruturaimagem11)}}" alt="">
												<button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 300px <br> Altura: 150px">
													<i class='bx bxs-info-circle' ></i>
												</button>
											</div>
										</div>

										<div>
											<div class="description mt-3 col-12">
												<h2>Estrutura 12</h2>
											</div>
																										
											<div class="description col-md-6">
												<input name="portuguesestruturaimagem12" type="file" class="form-control">
												<img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($portuguesestruturaimagem12)}}" alt="">
												<button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 300px <br> Altura: 150px">
													<i class='bx bxs-info-circle' ></i>
												</button>
											</div>
										</div>

										<div>
											<div class="description mt-3 col-12">
												<h2>Estrutura 13</h2>
											</div>
																										
											<div class="description col-md-6">
												<input name="portuguesestruturaimagem13" type="file" class="form-control">
												<img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($portuguesestruturaimagem13)}}" alt="">
												<button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 300px <br> Altura: 150px">
													<i class='bx bxs-info-circle' ></i>
												</button>
											</div>
										</div>

										<div>
											<div class="description mt-3 col-12">
												<h2>Estrutura 14</h2>
											</div>
																										
											<div class="description col-md-6">
												<input name="portuguesestruturaimagem14" type="file" class="form-control">
												<img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($portuguesestruturaimagem14)}}" alt="">
												<button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 300px <br> Altura: 150px">
													<i class='bx bxs-info-circle' ></i>
												</button>
											</div>
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
								<form action="{{route('portuguescontato')}}" enctype="multipart/form-data" method="post">
									@csrf
									<div class="row">
										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Título Pequeno </label>
											<input style="margin-bottom: 20px;" name="portuguescontatoTituloPagina" value="{{$portuguescontatoTituloPagina}}" type="text" class="form-control" >
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Título Principal </label>
											<input style="margin-bottom: 20px;" name="portuguescontatoTituloPagina2" value="{{$portuguescontatoTituloPagina2}}" type="text" class="form-control" >
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Título Email</label>
											<input style="margin-bottom: 20px;" name="portuguescontatoTituloemail" value="{{$portuguescontatoTituloemail}}" type="text" class="form-control" >
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Email</label>
											<input style="margin-bottom: 20px;" name="portuguescontatoemail" value="{{$portuguescontatoemail}}" type="text" class="form-control" >
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Título Endereço</label>
											<input style="margin-bottom: 20px;" name="portuguescontatoTituloEndereco" value="{{$portuguescontatoTituloEndereco}}" type="text" class="form-control" >
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">SubTítulo Endereço</label>
											<input style="margin-bottom: 20px;" name="portuguescontatoSubtTituloEndereco" value="{{$portuguescontatoSubtTituloEndereco}}" type="text" class="form-control" >
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Título Telefone</label>
											<input style="margin-bottom: 20px;" name="portuguescontatoTituloTelefone" value="{{$portuguescontatoTituloTelefone}}" type="text" class="form-control" >
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Telefone</label>
											<input style="margin-bottom: 20px;" name="portuguescontatoTelefone" value="{{$portuguescontatoTelefone}}" type="text" class="form-control" >
										</div>          
																								
										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Link LinkedIn</label>
											<input style="margin-bottom: 20px;" name="portuguescontatoLinkLinkedin" value="{{$portuguescontatoLinkLinkedin}}" type="text" class="form-control" >
										</div>   

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Link Facebook</label>
											<input style="margin-bottom: 20px;" name="portuguescontatoLinkFacebook" value="{{$portuguescontatoLinkFacebook}}" type="text" class="form-control" >
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Link Instagram</label>
											<input style="margin-bottom: 20px;" name="portuguescontatoLinkInstagram" value="{{$portuguescontatoLinkInstagram}}" type="text" class="form-control" >
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
								<form action="{{route('portuguesdepoimentos')}}" enctype="multipart/form-data" method="post">
									@csrf
									<div class="row">
										<div class="description col-md-12">
											<label class="form-control-label" for="basic-url">Título Pequeno</label>
											<input name="portuguesdepoimento1" value="{{$portuguesdepoimento1}}" type="text" class="form-control">
										</div>

										<div class="description col-md-12">
											<label class="form-control-label" for="basic-url">Título Principal</label>
											<input name="portuguesdepoimento2" value="{{$portuguesdepoimento2}}" type="text" class="form-control">
										</div>

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
								<form action="{{route('portuguesagendamento')}}" enctype="multipart/form-data" method="post">
									<div class="row">
										@csrf
										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Título Pequeno</label>
											<input style="margin-bottom: 20px;" name="portuguesagendamento1" value="{{$portuguesagendamento1}}" type="text" class="form-control" >
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Título Principal</label>
											<input style="margin-bottom: 20px;" name="portuguesagendamento2" value="{{$portuguesagendamento2}}" type="text" class="form-control" >
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Botão</label>
											<input style="margin-bottom: 20px;" name="portuguesagendamentobotao" value="{{$portuguesagendamentobotao}}" type="text" class="form-control" >
										</div>

										<div class="description col-md-12" style="margin-top: 20px; text-align: center;">
											<button class="btn btn-icon btn-primary" style="margin: auto;" type="submit">
												<span class="btn-inner--text">Atualizar</span>
											</button>
										</div>
									</div>
								</form>
							</div>

							<!-- LGPD -->
							<div class="tab-pane fade" id="tabs-icons-text-10" role="tabpanel" aria-labelledby="tabs-icons-text-10-tab">
								<form action="{{route('portuguessobre')}}" enctype="multipart/form-data" method="post">
									@csrf
										<div class="row">
											<div class="description col-md-12 mt-3">
												<label class="form-control-label" for="basic-url">Titulo 1</label>
												<input name="portuguestitlelgpd"  type="text" class="form-control" value="{{$portuguestitlelgpd}}">
											</div>

											<div class="description col-12 mt-3">
												<textarea id="editor-lgpd" name="portuguescontainerlgpd" class="form-control" cols="30" rows="10">{!!isset($portuguescontainerlgpd) ? $portuguescontainerlgpd : '' !!}</textarea>
											</div>			
											

											<div class="description col-md-12 mt-3" style="margin-top: 20px; text-align: center;">
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
		 
				@component('components.controle.footer')
				@endcomponent

			</div>
		</div>
	</div>

	<script>
		window.addEventListener("load", (e)=>{
			ClassicEditor.create( document.querySelector( '#editor-lgpd' ), {
				toolbar: {
					items: [
						'heading',
						'|',
						'bold',
						'italic',
						'link',
						'bulletedList',
						'numberedList',
						'|',
						'outdent',
						'indent',
						'|',
						'blockQuote',
						'undo',
						'redo'
					],
					language: 'pt-br',
					shouldNotGroupWhenFull: true
				},
				list: {
					properties: {
						styles: true,
						startIndex: true,
						reversed: true
					}
				},
				heading: {
					options: [
						{ model: 'paragraph', title: 'Parágrafo', class: 'ck-heading_paragraph' },
						{ model: 'heading1', view: 'h1', title: 'Título 1', class: 'ck-heading_heading1' },
						{ model: 'heading2', view: 'h2', title: 'Título 2', class: 'ck-heading_heading2' },
						{ model: 'heading3', view: 'h3', title: 'Título 3', class: 'ck-heading_heading3' },
						{ model: 'heading4', view: 'h4', title: 'Título 4', class: 'ck-heading_heading4' },
						{ model: 'heading5', view: 'h5', title: 'Título 5', class: 'ck-heading_heading5' },
						{ model: 'heading6', view: 'h6', title: 'Título 6', class: 'ck-heading_heading6' }
					]
				},
				placeholder: 'Escreva sua notícia...',
				htmlEmbed: {
					showPreviews: true
				},
				mention: {
						feeds: [
								{
										marker: '@',
										feed: [
												'@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes', '@chocolate', '@cookie', '@cotton', '@cream',
												'@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread', '@gummi', '@ice', '@jelly-o',
												'@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding', '@sesame', '@snaps', '@soufflé',
												'@sugar', '@sweet', '@topping', '@wafer'
										],
										minimumCharacters: 1
								}
						]
				},
				removePlugins: [
						// These two are commercial, but you can try them out without registering to a trial.
						// 'ExportPdf',
						// 'ExportWord',
						'CKBox',
						'CKFinder',
						'EasyImage',
						// This sample uses the Base64UploadAdapter to handle image uploads as it requires no configuration.
						// https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/base64-upload-adapter.html
						// Storing images as Base64 is usually a very bad idea.
						// Replace it on production website with other solutions:
						// https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/image-upload.html
						// 'Base64UploadAdapter',
						'RealTimeCollaborativeComments',
						'RealTimeCollaborativeTrackChanges',
						'RealTimeCollaborativeRevisionHistory',
						'PresenceList',
						'Comments',
						'TrackChanges',
						'TrackChangesData',
						'RevisionHistory',
						'Pagination',
						'WProofreader',
						// Careful, with the Mathtype plugin CKEditor will not load when loading this sample
						// from a local file system (file://) - load this site via HTTP server if you enable MathType
						'MathType'
				],
			});
		});

		function mudaInput(tick,id) {
			var imagemInputContainer = document.getElementById("imagem"+id+"InputContainer");
			var videoInputContainer = document.getElementById("video"+id+"InputContainer");

			if (tick.checked) {
				// Se o checkbox estiver marcado (ativo), mostra o contêiner de vídeo e esconde o contêiner de imagem
				imagemInputContainer.style.display = "none";
				videoInputContainer.style.display = "block";
			} else {
				// Se o checkbox não estiver marcado (inativo), mostra o contêiner de imagem e esconde o contêiner de vídeo
				imagemInputContainer.style.display = "block";
				videoInputContainer.style.display = "none";
			}
    	}	

		document.addEventListener("DOMContentLoaded", function() {
			var checkboxes = document.querySelectorAll('.form-check-input');
			var nId = 1;
			checkboxes.forEach(function(checkbox) {
				mudaInput(checkbox,nId);
				nId++
			});
		});
	</script>

	@component('components.controle.scripts')
	@endcomponent

@endsection