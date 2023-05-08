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
					<h6 class="h2 text-black d-inline-block mb-0" >Panel Control - Espanhol</h6>
				</div>
					
				<div class="nav-wrapper mb-3">
					<ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
						<li class="nav-item">
								<a class="nav-link mb-sm-3 mb-md-0 mt-2 active" id="tabs-icons-text-9-tab" data-toggle="tab" href="#tabs-icons-text-9" role="tab" aria-controls="tabs-icons-text-9" aria-selected="false">
									Initial Mode
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
								About
							</a>
						</li>

						<li class="nav-item">
							<a class="nav-link mb-sm-3 mb-md-0 mt-2" id="tabs-icons-text-8-tab" data-toggle="tab" href="#tabs-icons-text-8" role="tab" aria-controls="tabs-icons-text-8" aria-selected="false">
								Scheduling
							</a>
						</li>

						<li class="nav-item">
							<a class="nav-link mb-sm-3 mb-md-0 mt-2" id="tabs-icons-text-4-tab" data-toggle="tab" href="#tabs-icons-text-4" role="tab" aria-controls="tabs-icons-text-4" aria-selected="false">
								Services
							</a>
						</li>

						<li class="nav-item">
							<a class="nav-link mb-sm-3 mb-md-0 mt-2" id="estrutura" data-toggle="tab" href="#etsrutura-1" role="tab" aria-controls="etsrutura-1" aria-selected="false">
								Structure
							</a>
						</li>

						<li class="nav-item">
							<a class="nav-link mb-sm-3 mb-md-0 mt-2" id="tabs-icons-text-7-tab" data-toggle="tab" href="#tabs-icons-text-7" role="tab" aria-controls="tabs-icons-text-7" aria-selected="false">
								Depositions
							</a>
						</li>

						<li class="nav-item">
							<a  class="nav-link mb-sm-3 mb-md-0 mt-2" id="tabs-icons-text-5-tab" data-toggle="tab" href="#tabs-icons-text-5" role="tab" aria-controls="tabs-icons-text-5" aria-selected="false">
								Contact
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
								<form action="{{route('espanholmodal')}}" enctype="multipart/form-data" method="post">
									@csrf
									<div class="row">
										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Logo</label>
											<input name="espanholmodalimg" type="file" class="form-control" placeholder="Logo">
										</div>

										<div class="description col-md-6">
											<img style="width: 40%; background: black; margin-top: 15px;"  src="{{Storage::url($espanholmodalimg)}}" alt="">
											<button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 250px <br> Altura: 190px">
												<i class='bx bxs-info-circle' ></i>
											</button>
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Título</label>
											<input style="margin-bottom: 20px;" name="espanholmodal1" value="{{$espanholmodal1}}" type="text" class="form-control" >
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Botão Agendamento</label>
											<input style="margin-bottom: 20px;" name="espanholmodal2" value="{{$espanholmodal2}}" type="text" class="form-control" >
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Telefone</label>
											<input style="margin-bottom: 20px;" name="espanholmodal3" value="{{$espanholmodal3}}" type="text" class="form-control" >
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Link WhatsApp</label>
											<input style="margin-bottom: 20px;" name="espanholmodal4" value="{{$espanholmodal4}}" type="text" class="form-control" >
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Email</label>
											<input style="margin-bottom: 20px;" name="espanholmodal5" value="{{$espanholmodal5}}" type="text" class="form-control" >
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Link Mapa</label>
											<input style="margin-bottom: 20px;" name="espanholmodal6" value="{{$espanholmodal6}}" type="text" class="form-control" >
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Link Instagram</label>
											<input style="margin-bottom: 20px;" name="espanholmodal7" value="{{$espanholmodal7}}" type="text" class="form-control" >
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Link Facebook</label>
											<input style="margin-bottom: 20px;" name="espanholmodal8" value="{{$espanholmodal8}}" type="text" class="form-control" >
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Instrução de Click</label>
											<input style="margin-bottom: 20px;" name="espanholmodal9" value="{{$espanholmodal9}}" type="text" class="form-control" >
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
								<form action="{{route('espanholbanner')}}" method="POST">
									@csrf

									<div class="row">
										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Resumo Inicial</label>
											<input name="espanholtextoresumo" value="{{$espanholtextoresumo}}" type="text" class="form-control">
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Link do LinkedIn</label>
											<input name="espanholwhatsapp" value="{{$espanholwhatsapp}}" type="text" class="form-control">
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Link do Instagram</label>
											<input name="espanholinstagram" value="{{$espanholinstagram}}" type="text" class="form-control">
										</div>
																								
										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Link do Facebook</label>
											<input name="espanholfacebook" value="{{$espanholfacebook}}" type="text" class="form-control">
										</div>

										<button class="btn btn-icon btn-primary mx-auto mt-4" type="subimt">
											<span class="btn-inner--text">Atualizar</span>
										</button>
									</div>
								</form>
							</div>

							<!-- MENU -->
							<div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
								<form action="{{route('espanholmenu')}}" enctype="multipart/form-data" method="post">
									@csrf
									<div class="row">
										<div class="description col-md-12">
											<label class="form-control-label" for="basic-url">Menu 1</label>
											<input name="espanholmenu2"  type="text" class="form-control" value="{{$espanholmenu2}}">
										</div>

										<div class="description col-md-12 mt-3">
											<label class="form-control-label" for="basic-url">Menu 2</label>
											<input name="espanholmenu3"  type="text" class="form-control" value="{{$espanholmenu3}}">
										</div>

										<div class="description col-md-12 mt-3">
											<label class="form-control-label" for="basic-url">Menu 3</label>
											<input name="espanholmenu4"  type="text" class="form-control" value="{{$espanholmenu4}}">
										</div>

										<div class="description col-md-12 mt-3">
											<label class="form-control-label" for="basic-url">Menu 4</label>
											<input name="espanholmenu5"  type="text" class="form-control" value="{{$espanholmenu5}}">
										</div>

										<div class="description col-md-12 mt-3">
											<label class="form-control-label" for="basic-url">Menu 5</label>
											<input name="espanholmenu6"  type="text" class="form-control" value="{{$espanholmenu6}}">
										</div>

										<div class="description col-md-12 mt-3">
											<label class="form-control-label" for="basic-url">Menu 6</label>
											<input name="espanholmenu7"  type="text" class="form-control" value="{{$espanholmenu7}}">
										</div>

										<div class="description col-md-12 mt-3">
											<label class="form-control-label" for="basic-url">Menu 7</label>
											<input name="espanholmenu8"  type="text" class="form-control" value="{{$espanholmenu8}}">
										</div>

										<div class="description col-md-12 mt-3">
											<label class="form-control-label" for="basic-url">Menu 8</label>
											<input name="espanholmenu9"  type="text" class="form-control" value="{{$espanholmenu9}}">
										</div>

										<div class="description col-md-12 mt-3">
											<label class="form-control-label" for="basic-url">Menu 9</label>
											<input name="espanholmenu10"  type="text" class="form-control" value="{{$espanholmenu10}}">
										</div>

										<div class="description col-md-12 mt-3" >
											<label class="form-control-label" for="basic-url">Logo Menu</label>
											<input name="espanhollogo1" type="file" class="form-control">
										</div>
										<div class="description col-md-12 mt-3">
											<img style="width: 30%; margin-top: 15px;" src="{{Storage::url($espanhollogo1)}}" alt="">
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
								<form action="{{route('espanholsobre')}}" enctype="multipart/form-data" method="post">
									@csrf
										<div class="row">
											<div class="description col-md-12 mt-3">
												<label class="form-control-label" for="basic-url">Titulo 1</label>
												<input name="espanholslide4"  type="text" class="form-control" value="{{$espanholslide4}}">
											</div>

											<div class="description col-md-12 mt-3">
												<label class="form-control-label" for="basic-url">Titulo da Página</label>
												<input name="espanholslide5"  type="text" class="form-control" value="{{$espanholslide5}}">
											</div>

											<div class="description col-md-12 mt-3">
												<label class="form-control-label" for="basic-url">Titulo do Texto</label>
												<input name="espanholslide6"  type="text" class="form-control" value="{{$espanholslide6}}">
											</div>

											<div class="description col-md-12 mt-3">
												<label class="form-control-label" for="basic-url">Texto</label>
												<input name="espanholslide7"  type="text" class="form-control" value="{{$espanholslide7}}">
											</div>

											<div class="description col-md-12 mt-3" >
												<label class="form-control-label" for="basic-url">Imagem Sobre</label>
												<input name="espanholslide1" type="file" class="form-control">
											</div>
											<div class="description col-md-12 mt-3">
												<img style="width: 30%; margin-top: 15px;" src="{{Storage::url($espanholslide1)}}" alt="">
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
								<form action="{{route('espanholservico')}}" enctype="multipart/form-data" method="post">
									@csrf
									<div class="row">
										<div class="description col-md-12">
											<label class="form-control-label" for="basic-url">Título Pequeno</label>
											<input name="espanholtituloPagina" value="{{$espanholtituloPagina}}" type="text" class="form-control">
										</div>

										<div class="description col-md-12">
											<label class="form-control-label" for="basic-url">Título Principal</label>
											<input name="espanholtituloPrincipal"  type="text" class="form-control" value="{{$espanholtituloPrincipal}}">
										</div>
									</div>

									{{-- SERVIÇO 1 --}}
									<div class="row">
										<div class="description mt-3 col-12">
											<h2>Serviço 1</h2>
										</div>
																								
										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Imagem do Serviço</label>
											<input name="espanholservico1img" type="file" class="form-control">
											<img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($espanholservico1img)}}" alt="">
											<button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 70px <br> Altura: 70px">
												<i class='bx bxs-info-circle' ></i>
											</button>
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Título </label>
											<input name="espanholservico1titulo" value="{{$espanholservico1titulo}}" type="text" class="form-control">
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Descrição</label>
											<input name="espanholservico1descricao"  type="text" class="form-control" value="{{$espanholservico1descricao}}">
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Preço 1</label>
											<input name="espanholservico1preco"  type="text" class="form-control" value="{{$espanholservico1preco}}">
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Preço 2</label>
											<input name="espanholservico1preco2"  type="text" class="form-control" value="{{$espanholservico1preco2}}">
										</div>
									</div>

									{{-- SERVIÇO 2 --}}
									<div class="row">
										<div class="description mt-3 col-12">
											<h2>Serviço 2</h2>
										</div>
																								
										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Imagem do Serviço</label>
											<input name="espanholservico2img" type="file" class="form-control">
											<img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($espanholservico2img)}}" alt="">
											<button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 700px <br> Altura: 400px">
												<i class='bx bxs-info-circle' ></i>
											</button>
										</div>
										
										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Título </label>
											<input name="espanholservico2titulo" value="{{$espanholservico2titulo}}" type="text" class="form-control">
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Descrição</label>
											<input name="espanholservico2descricao"  type="text" class="form-control" value="{{$espanholservico2descricao}}">
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Preço</label>
											<input name="espanholservico2preco"  type="text" class="form-control" value="{{$espanholservico2preco}}">
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Preço 2</label>
											<input name="espanholservico2preco2"  type="text" class="form-control" value="{{$espanholservico2preco2}}">
										</div>
									</div>

									{{-- SERVIÇO 3 --}}
									<div class="row">
										<div class="description mt-3 col-12">
											<h2>Serviço 3</h2>
										</div>
																								
										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Imagem do Serviço</label>
											<input name="espanholservico3img" type="file" class="form-control">
											<img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($espanholservico3img)}}" alt="">
											<button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 700px <br> Altura: 400px">
												<i class='bx bxs-info-circle' ></i>
											</button>
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Título </label>
											<input name="espanholservico3titulo" value="{{$espanholservico3titulo}}" type="text" class="form-control">
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Descrição</label>
											<input name="espanholservico3descricao"  type="text" class="form-control" value="{{$espanholservico3descricao}}">
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Preço</label>
											<input name="espanholservico3preco"  type="text" class="form-control" value="{{$espanholservico3preco}}">
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Preço 2</label>
											<input name="espanholservico3preco2"  type="text" class="form-control" value="{{$espanholservico3preco2}}">
										</div>
									</div>
																						
									{{-- SERVIÇO 4 --}}
									<div class="row">
										<div class="description mt-3 col-12">
											<h2>Serviço 4</h2>
										</div>
																								
										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Imagem do Serviço</label>
											<input name="espanholservico4img" type="file" class="form-control">
											<img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($espanholservico4img)}}" alt="">
											<button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 700px <br> Altura: 400px">
												<i class='bx bxs-info-circle' ></i>
											</button>
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Título </label>
											<input name="espanholservico4titulo" value="{{$espanholservico4titulo}}" type="text" class="form-control">
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Descrição</label>
											<input name="espanholservico4descricao"  type="text" class="form-control" value="{{$espanholservico4descricao}}">
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Preço</label>
											<input name="espanholservico4preco"  type="text" class="form-control" value="{{$espanholservico4preco}}">
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Preço 2</label>
											<input name="espanholservico4preco2"  type="text" class="form-control" value="{{$espanholservico4preco2}}">
										</div>
									</div>

									{{-- SERVIÇO 5 --}}
									<div class="row">
										<div class="description mt-3 col-12">
											<h2>Serviço 5</h2>
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Imagem do Serviço</label>
											<input name="espanholservico5img" type="file" class="form-control">
												<img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($espanholservico5img)}}" alt="">
												<button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 700px <br> Altura: 400px">
													<i class='bx bxs-info-circle' ></i>
												</button>
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Título </label>
											<input name="espanholservico5titulo" value="{{$espanholservico5titulo}}" type="text" class="form-control">
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Descrição</label>
											<input name="espanholservico5descricao"  type="text" class="form-control" value="{{$espanholservico5descricao}}">
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Preço</label>
											<input name="espanholservico5preco"  type="text" class="form-control" value="{{$espanholservico5preco}}">
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Preço 2</label>
											<input name="espanholservico5preco2"  type="text" class="form-control" value="{{$espanholservico5preco2}}">
										</div>
									</div>

									{{-- SERVIÇO 6 --}}
									<div class="row">
										<div class="description mt-3 col-12">
											<h2>Serviço 6</h2>
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Imagem do Serviço</label>
											<input name="espanholservico6img" type="file" class="form-control">
												<img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($espanholservico6img)}}" alt="">
												<button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 700px <br> Altura: 400px">
													<i class='bx bxs-info-circle' ></i>
												</button>
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Título </label>
											<input name="espanholservico6titulo" value="{{$espanholservico6titulo}}" type="text" class="form-control">
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Descrição</label>
											<input name="espanholservico6descricao"  type="text" class="form-control" value="{{$espanholservico6descricao}}">
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Preço</label>
											<input name="espanholservico6preco"  type="text" class="form-control" value="{{$espanholservico6preco}}">
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Preço 2</label>
											<input name="espanholservico6preco2"  type="text" class="form-control" value="{{$espanholservico6preco2}}">
										</div>
									</div>

									{{-- SERVIÇO 7 --}}
									<div class="row">
										<div class="description mt-3 col-12">
											<h2>Serviço 7</h2>
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Imagem do Serviço</label>
											<input name="espanholservico7img" type="file" class="form-control">
												<img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($espanholservico7img)}}" alt="">
												<button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 700px <br> Altura: 400px">
													<i class='bx bxs-info-circle' ></i>
												</button>
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Título </label>
											<input name="espanholservico7titulo" value="{{$espanholservico7titulo}}" type="text" class="form-control">
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Descrição</label>
											<input name="espanholservico7descricao"  type="text" class="form-control" value="{{$espanholservico7descricao}}">
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Preço</label>
											<input name="espanholservico7preco"  type="text" class="form-control" value="{{$espanholservico7preco}}">
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Preço 2</label>
											<input name="espanholservico7preco2"  type="text" class="form-control" value="{{$espanholservico7preco2}}">
										</div>
									</div>
																						
									{{-- SERVIÇO 8 --}}
									<div class="row">
										<div class="description mt-3 col-12">
											<h2>Serviço 8</h2>
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Imagem do Serviço</label>
											<input name="espanholservico8img" type="file" class="form-control">
												<img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($espanholservico8img)}}" alt="">
												<button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 700px <br> Altura: 400px">
													<i class='bx bxs-info-circle' ></i>
												</button>
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Título </label>
											<input name="espanholservico8titulo" value="{{$espanholservico8titulo}}" type="text" class="form-control">
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Descrição</label>
											<input name="espanholservico8descricao"  type="text" class="form-control" value="{{$espanholservico8descricao}}">
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Preço</label>
											<input name="espanholservico8preco"  type="text" class="form-control" value="{{$espanholservico8preco}}">
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Preço 2</label>
											<input name="espanholservico8preco2"  type="text" class="form-control" value="{{$espanholservico8preco2}}">
										</div>
									</div>

									{{-- SERVIÇO 9 --}}
									<div class="row">
										<div class="description mt-3 col-12">
											<h2>Serviço 9</h2>
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Imagem do Serviço</label>
											<input name="espanholservico9img" type="file" class="form-control">
												<img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($espanholservico9img)}}" alt="">
												<button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 700px <br> Altura: 400px">
													<i class='bx bxs-info-circle' ></i>
												</button>
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Título </label>
											<input name="espanholservico9titulo" value="{{$espanholservico9titulo}}" type="text" class="form-control">
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Descrição</label>
											<input name="espanholservico9descricao"  type="text" class="form-control" value="{{$espanholservico9descricao}}">
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Preço</label>
											<input name="espanholservico9preco" type="text" class="form-control" value="{{$espanholservico9preco}}">
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Preço 2</label>
											<input name="espanholservico9preco2"  type="text" class="form-control" value="{{$espanholservico9preco2}}">
										</div>
									</div>

									{{-- SERVIÇO 10 --}}
									<div class="row">
										<div class="description mt-3 col-12">
											<h2>Serviço 10</h2>
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Imagem do Serviço</label>
											<input name="espanholservico10img" type="file" class="form-control">
												<img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($espanholservico10img)}}" alt="">
												<button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 700px <br> Altura: 400px">
													<i class='bx bxs-info-circle' ></i>
												</button>
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Título </label>
											<input name="espanholservico10titulo" value="{{$espanholservico10titulo}}" type="text" class="form-control">
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Descrição</label>
											<input name="espanholservico10descricao"  type="text" class="form-control" value="{{$espanholservico10descricao}}">
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Preço</label>
											<input name="espanholservico10preco"  type="text" class="form-control" value="{{$espanholservico10preco}}">
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Preço 2</label>
											<input name="espanholservico10preco2"  type="text" class="form-control" value="{{$espanholservico10preco2}}">
										</div>
									</div>

									{{-- SERVIÇO 11 --}}
									<div class="row">
										<div class="description mt-3 col-12">
											<h2>Serviço 11</h2>
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Imagem do Serviço</label>
											<input name="espanholservico11img" type="file" class="form-control">
												<img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($espanholservico11img)}}" alt="">
												<button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 700px <br> Altura: 400px">
													<i class='bx bxs-info-circle' ></i>
												</button>
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Título </label>
											<input name="espanholservico11titulo" value="{{$espanholservico11titulo}}" type="text" class="form-control">
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Descrição</label>
											<input name="espanholservico11descricao"  type="text" class="form-control" value="{{$espanholservico11descricao}}">
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Preço</label>
											<input name="espanholservico11preco"  type="text" class="form-control" value="{{$espanholservico11preco}}">
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Preço 2</label>
											<input name="espanholservico11preco2"  type="text" class="form-control" value="{{$espanholservico11preco2}}">
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
								<form action="{{route('espanholestrutura')}}" enctype="multipart/form-data" method="post">
									@csrf
									<div class="row">
										<div class="description col-md-12">
											<label class="form-control-label" for="basic-url">Título Pequeno</label>
											<input name="espanholestruturatitulo1" value="{{$espanholestruturatitulo1}}" type="text" class="form-control">
										</div>

										<div class="description col-md-12">
											<label class="form-control-label" for="basic-url">Título Principal</label>
											<input name="espanholestruturatitulo2"  type="text" class="form-control" value="{{$espanholestruturatitulo2}}">
										</div>
									</div>

									{{-- ESTRUTURA 1 --}}
									<div class="row">
										<div>
											<div class="description mt-3 col-12">
												<h2>Estrutura 1</h2>
											</div>
																										
											<div class="description col-md-6">
												<input name="espanholestruturaimagem1" type="file" class="form-control">
												<img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($espanholestruturaimagem1)}}" alt="">
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
													<input name="espanholestruturaimagem2" type="file" class="form-control">
													<img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($espanholestruturaimagem2)}}" alt="">
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
												<input name="espanholestruturaimagem3" type="file" class="form-control">
												<img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($espanholestruturaimagem3)}}" alt="">
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
												<input name="espanholestruturaimagem4" type="file" class="form-control">
												<img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($espanholestruturaimagem4)}}" alt="">
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
												<input name="espanholestruturaimagem5" type="file" class="form-control">
												<img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($espanholestruturaimagem5)}}" alt="">
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
												<input name="espanholestruturaimagem6" type="file" class="form-control">
												<img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($espanholestruturaimagem6)}}" alt="">
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
												<input name="espanholestruturaimagem7" type="file" class="form-control">
												<img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($espanholestruturaimagem7)}}" alt="">
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
												<input name="espanholestruturaimagem8" type="file" class="form-control">
												<img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($espanholestruturaimagem8)}}" alt="">
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
												<input name="espanholestruturaimagem9" type="file" class="form-control">
												<img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($espanholestruturaimagem9)}}" alt="">
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
												<input name="espanholestruturaimagem10" type="file" class="form-control">
												<img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($espanholestruturaimagem10)}}" alt="">
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
												<input name="espanholestruturaimagem11" type="file" class="form-control">
												<img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($espanholestruturaimagem11)}}" alt="">
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
												<input name="espanholestruturaimagem12" type="file" class="form-control">
												<img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($espanholestruturaimagem12)}}" alt="">
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
												<input name="espanholestruturaimagem13" type="file" class="form-control">
												<img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($espanholestruturaimagem13)}}" alt="">
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
												<input name="espanholestruturaimagem14" type="file" class="form-control">
												<img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($espanholestruturaimagem14)}}" alt="">
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
								<form action="{{route('espanholcontato')}}" enctype="multipart/form-data" method="post">
									@csrf
									<div class="row">
										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Título Pequeno </label>
											<input style="margin-bottom: 20px;" name="espanholcontatoTituloPagina" value="{{$espanholcontatoTituloPagina}}" type="text" class="form-control" >
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Título Principal </label>
											<input style="margin-bottom: 20px;" name="espanholcontatoTituloPagina2" value="{{$espanholcontatoTituloPagina2}}" type="text" class="form-control" >
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Título Email</label>
											<input style="margin-bottom: 20px;" name="espanholcontatoTituloemail" value="{{$espanholcontatoTituloemail}}" type="text" class="form-control" >
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Email</label>
											<input style="margin-bottom: 20px;" name="espanholcontatoemail" value="{{$espanholcontatoemail}}" type="text" class="form-control" >
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Título Endereço</label>
											<input style="margin-bottom: 20px;" name="espanholcontatoTituloEndereco" value="{{$espanholcontatoTituloEndereco}}" type="text" class="form-control" >
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">SubTítulo Endereço</label>
											<input style="margin-bottom: 20px;" name="espanholcontatoSubtTituloEndereco" value="{{$espanholcontatoSubtTituloEndereco}}" type="text" class="form-control" >
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Título Telefone</label>
											<input style="margin-bottom: 20px;" name="espanholcontatoTituloTelefone" value="{{$espanholcontatoTituloTelefone}}" type="text" class="form-control" >
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Telefone</label>
											<input style="margin-bottom: 20px;" name="espanholcontatoTelefone" value="{{$espanholcontatoTelefone}}" type="text" class="form-control" >
										</div>          
																								
										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Link LinkedIn</label>
											<input style="margin-bottom: 20px;" name="espanholcontatoLinkLinkedin" value="{{$espanholcontatoLinkLinkedin}}" type="text" class="form-control" >
										</div>   

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Link Facebook</label>
											<input style="margin-bottom: 20px;" name="espanholcontatoLinkFacebook" value="{{$espanholcontatoLinkFacebook}}" type="text" class="form-control" >
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Link Instagram</label>
											<input style="margin-bottom: 20px;" name="espanholcontatoLinkInstagram" value="{{$espanholcontatoLinkInstagram}}" type="text" class="form-control" >
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
								<form action="{{route('espanholdepoimentos')}}" enctype="multipart/form-data" method="post">
									@csrf
									<div class="row">
										<div class="description col-md-12">
											<label class="form-control-label" for="basic-url">Título Pequeno</label>
											<input name="espanholdepoimento1" value="{{$espanholdepoimento1}}" type="text" class="form-control">
										</div>

										<div class="description col-md-12">
											<label class="form-control-label" for="basic-url">Título Principal</label>
											<input name="espanholdepoimento2" value="{{$espanholdepoimento2}}" type="text" class="form-control">
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
								<form action="{{route('espanholagendamento')}}" enctype="multipart/form-data" method="post">
									<div class="row">
										@csrf
										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Título Pequeno</label>
											<input style="margin-bottom: 20px;" name="espanholagendamento1" value="{{$espanholagendamento1}}" type="text" class="form-control" >
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Título Principal</label>
											<input style="margin-bottom: 20px;" name="espanholagendamento2" value="{{$espanholagendamento2}}" type="text" class="form-control" >
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Botão</label>
											<input style="margin-bottom: 20px;" name="espanholagendamentobotao" value="{{$espanholagendamentobotao}}" type="text" class="form-control" >
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
								<form action="{{route('espanholsobre')}}" enctype="multipart/form-data" method="post">
									@csrf
										<div class="row">
											<div class="description col-md-12 mt-3">
												<label class="form-control-label" for="basic-url">Titulo 1</label>
												<input name="espanholtitlelgpd"  type="text" class="form-control" value="{{$espanholtitlelgpd}}">
											</div>

											<div class="description col-12 mt-3">
												<textarea id="editor-lgpd" name="espanholcontainerlgpd" class="form-control" cols="30" rows="10">{!!isset($espanholcontainerlgpd) ? $espanholcontainerlgpd : '' !!}</textarea>
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
	</script>

	@component('components.controle.scripts')
	@endcomponent

@endsection