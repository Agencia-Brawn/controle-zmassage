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
					<h6 class="h2 text-black d-inline-block mb-0" >Panel Control</h6>
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
								Modal
							</a>
						</li>

						<li class="nav-item">
							<a class="nav-link mb-sm-3 mb-md-0 mt-2" id="tabs-icons-text-10-tab" data-toggle="tab" href="#tabs-icons-text-10" role="tab" aria-controls="tabs-icons-text-10" aria-selected="false">
								LGPD
							</a>
						</li>
					</ul>
				</div>
								
				<div class="card shadow">
					<div class="card-body">
						<div class="tab-content" id="myTabContent">
							<!-- HOME -->
							<div class="tab-pane fade active show" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
								<form action="{{route('austriabanner')}}" method="post">
									@csrf

									<div class="row">
										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Resumo Inicial</label>
											<input name="textoresumo" value="{{$textoresumo}}" type="text" class="form-control">
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">WhatsApp</label>
											<input name="whatsapp" value="{{$whatsapp}}" type="text" class="form-control">
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Link do Instagram</label>
											<input name="instagram" value="{{$instagram}}" type="text" class="form-control">
										</div>
																								
										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Link do Facebook</label>
											<input name="facebook" value="{{$facebook}}" type="text" class="form-control">
										</div>

										<button class="btn btn-icon btn-primary mx-auto mt-4" type="subimt">
											<span class="btn-inner--text">Atualizar</span>
										</button>
									</div>
								</form>
							</div>

							<!-- MENU -->
							<div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
								<form action="{{route('austriamenu')}}" enctype="multipart/form-data" method="post">
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

										<div class="description col-md-12 mt-3">
											<label class="form-control-label" for="basic-url">Menu 9</label>
											<input name="menu10"  type="text" class="form-control" value="{{$menu10}}">
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
								<form action="{{route('austriasobre')}}" enctype="multipart/form-data" method="post">
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
												{{-- <input name="slide7"  type="text" class="form-control" value="{{$slide7}}"> --}}
												<textarea rows="5" name="slide7" class="form-control">{{$slide7}}</textarea>
											</div>

											<div class="description col-md-12 mt-3">
												<label class="form-control-label" for="basic-url">Imagem</label>
											</div>

											<div class="description col-md-12 mt-3" >
												<label class="form-control-label" for="basic-url">Logo Menu</label>
												<input name="slide1" type="file" class="form-control">
											</div>
											<div class="description col-md-12 mt-3">
												<img style="width: 30%; margin-top: 15px;" src="{{Storage::url($slide1)}}" alt="">
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
								<form action="{{route('austriaservico')}}" enctype="multipart/form-data" method="post">
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
										<div class="description mt-3 col-12">
											<h2>Serviço 1</h2>
										</div>

										<div class="description col-md-12">
											<div class="form-check form-switch w-100">
												<input id="linkToggle" type="checkbox" role="switch" class="form-check-input" onchange="mudaInput(this,'1')" {{ (str_contains($servico1img, 'embed')) ? 'Checked' : ''}} >
												<label class="form-control-label" for="linkToggle">Link?</label>
											</div>
										</div>
																								
										<div class="description col-md-6">
											<div id="imagem1InputContainer">
												<label class="form-control-label" for="basic-url">Imagem do Serviço</label>
												<input name="servico1img" type="file" class="form-control">
												<img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($servico1img)}}" alt="">
												<button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 70px <br> Altura: 70px">
													<i class='bx bxs-info-circle' ></i>
												</button>
											</div>
											<div id="video1InputContainer">
												<label class="form-control-label" for="basic-url">Vídeo do Serviço</label>
												<input name="servico1img" id="servico1img" type="text" class="form-control" value="{{ (str_contains($servico1img, 'embed')) ? 'https://www.youtube.com/watch?v='.str_after($servico1img, 'embed') : '' }}">
												<button type="button" class="btn btn-primary ml-2 mt-2" data-toggle="tooltip" data-html="true" title="Copie e Cole o Link do video do Youtube <br> ">
													<i class='bx bxs-info-circle'></i>
												</button>
												<span class="form-text">Formato do Link: "https://www.youtube.com/watch?v=UXi8NeHqIDA"</span>
											</div>
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
										<div class="description mt-3 col-12">
											<h2>Serviço 2</h2>
										</div>

										<div class="description col-md-12">
											<div class="form-check form-switch w-100">
												<input id="linkToggle" type="checkbox" role="switch" class="form-check-input" onchange="mudaInput(this,'2')" {{ (str_contains($servico2img, 'embed')) ? 'Checked' : ''}} >
												<label class="form-control-label" for="linkToggle">Link?</label>
											</div>
										</div>
																								
										<div class="description col-md-6">
											<div id="imagem2InputContainer">
												<label class="form-control-label" for="basic-url">Imagem do Serviço</label>
												<input name="servico2img" type="file" class="form-control">
												<img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($servico2img)}}" alt="">
												<button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 700px <br> Altura: 400px">
													<i class='bx bxs-info-circle' ></i>
												</button>
											</div>
											<div id="video2InputContainer">
												<label class="form-control-label" for="basic-url">Vídeo do Serviço</label>
												<input name="servico2img" id="servico2img" type="text" class="form-control" value="{{ (str_contains($servico2img, 'embed')) ? 'https://www.youtube.com/watch?v='.str_after($servico2img, 'embed') : '' }}">
												<button type="button" class="btn btn-primary ml-2 mt-2" data-toggle="tooltip" data-html="true" title="Copie e Cole o Link do video do Youtube <br> ">
													<i class='bx bxs-info-circle'></i>
												</button>
												<span class="form-text">Formato do Link: "https://www.youtube.com/watch?v=UXi8NeHqIDA"</span>
											</div>

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
										<div class="description mt-3 col-12">
											<h2>Serviço 3</h2>
										</div>

										<div class="description col-md-12">
											<div class="form-check form-switch w-100">
												<input id="linkToggle" type="checkbox" role="switch" class="form-check-input" onchange="mudaInput(this,'3')" {{ (str_contains($servico3img, 'embed')) ? 'Checked' : ''}} >
												<label class="form-control-label" for="linkToggle">Link?</label>
											</div>
										</div>
																								
										<div class="description col-md-6">
											<div id="imagem3InputContainer">
												<label class="form-control-label" for="basic-url">Imagem do Serviço</label>
												<input name="servico3img" type="file" class="form-control">
												<img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($servico3img)}}" alt="">
												<button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 700px <br> Altura: 400px">
													<i class='bx bxs-info-circle' ></i>
												</button>
											</div>
											<div id="video3InputContainer">
												<label class="form-control-label" for="basic-url">Vídeo do Serviço</label>
												<input name="servico3img" id="servico3img" type="text" class="form-control" value="{{ (str_contains($servico3img, 'embed')) ? 'https://www.youtube.com/watch?v='.str_after($servico3img, 'embed') : '' }}">
												<button type="button" class="btn btn-primary ml-2 mt-2" data-toggle="tooltip" data-html="true" title="Copie e Cole o Link do video do Youtube <br> ">
													<i class='bx bxs-info-circle'></i>
												</button>
												<span class="form-text">Formato do Link: "https://www.youtube.com/watch?v=UXi8NeHqIDA"</span>
											</div>
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
											<input name="servico3preco"  type="text" class="form-control" value="{{$servico3preco}}">
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Preço 2</label>
											<input name="servico3preco2"  type="text" class="form-control" value="{{$servico3preco2}}">
										</div>
									</div>
																						
									{{-- SERVIÇO 4 --}}
									<div class="row">
										<div class="description mt-3 col-12">
											<h2>Serviço 4</h2>
										</div>

										<div class="description col-md-12">
											<div class="form-check form-switch w-100">
												<input id="linkToggle" type="checkbox" role="switch" class="form-check-input" onchange="mudaInput(this,'4')" {{ (str_contains($servico4img, 'embed')) ? 'Checked' : ''}} >
												<label class="form-control-label" for="linkToggle">Link?</label>
											</div>
										</div>
																								
										<div class="description col-md-6">
											<div id="imagem4InputContainer">
												<label class="form-control-label" for="basic-url">Imagem do Serviço</label>
												<input name="servico4img" type="file" class="form-control">
												<img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($servico4img)}}" alt="">
												<button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 700px <br> Altura: 400px">
													<i class='bx bxs-info-circle' ></i>
												</button>
											</div>
											<div id="video1InputContainer">
												<label class="form-control-label" for="basic-url">Vídeo do Serviço</label>
												<input name="servico4img" id="servico4img" type="text" class="form-control" value="{{ (str_contains($servico4img, 'embed')) ? 'https://www.youtube.com/watch?v='.str_after($servico4img, 'embed') : '' }}">
												<button type="button" class="btn btn-primary ml-2 mt-2" data-toggle="tooltip" data-html="true" title="Copie e Cole o Link do video do Youtube <br> ">
													<i class='bx bxs-info-circle'></i>
												</button>
												<span class="form-text">Formato do Link: "https://www.youtube.com/watch?v=UXi8NeHqIDA"</span>
											</div>
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
										<div class="description mt-3 col-12">
											<h2>Serviço 5</h2>
										</div>

										<div class="description col-md-12">
											<div class="form-check form-switch w-100">
												<input id="linkToggle" type="checkbox" role="switch" class="form-check-input" onchange="mudaInput(this,'5')" {{ (str_contains($servico5img, 'embed')) ? 'Checked' : ''}} >
												<label class="form-control-label" for="linkToggle">Link?</label>
											</div>
										</div>

										<div class="description col-md-6">
											<div id="imagem5InputContainer">
												<label class="form-control-label" for="basic-url">Imagem do Serviço</label>
												<input name="servico5img" type="file" class="form-control">
													<img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($servico5img)}}" alt="">
													<button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 700px <br> Altura: 400px">
														<i class='bx bxs-info-circle' ></i>
													</button>
											</div>
											<div id="video5InputContainer">
												<label class="form-control-label" for="basic-url">Vídeo do Serviço</label>
												<input name="servico5img" id="servico5img" type="text" class="form-control" value="{{ (str_contains($servico5img, 'embed')) ? 'https://www.youtube.com/watch?v='.str_after($servico5img, 'embed') : '' }}">
												<button type="button" class="btn btn-primary ml-2 mt-2" data-toggle="tooltip" data-html="true" title="Copie e Cole o Link do video do Youtube <br> ">
													<i class='bx bxs-info-circle'></i>
												</button>
												<span class="form-text">Formato do Link: "https://www.youtube.com/watch?v=UXi8NeHqIDA"</span>
											</div>
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
										<div class="description mt-3 col-12">
											<h2>Serviço 6</h2>
										</div>

										<div class="description col-md-12">
											<div class="form-check form-switch w-100">
												<input id="linkToggle" type="checkbox" role="switch" class="form-check-input" onchange="mudaInput(this,'6')" {{ (str_contains($servico6img, 'embed')) ? 'Checked' : ''}} >
												<label class="form-control-label" for="linkToggle">Link?</label>
											</div>
										</div>

										<div class="description col-md-6">
											<div id="imagem6InputContainer">
												<label class="form-control-label" for="basic-url">Imagem do Serviço</label>
												<input name="servico6img" type="file" class="form-control">
													<img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($servico6img)}}" alt="">
													<button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 700px <br> Altura: 400px">
														<i class='bx bxs-info-circle' ></i>
													</button>
											</div>
											<div id="video6InputContainer">
												<label class="form-control-label" for="basic-url">Vídeo do Serviço</label>
												<input name="servico6img" id="servico6img" type="text" class="form-control" value="{{ (str_contains($servico6img, 'embed')) ? 'https://www.youtube.com/watch?v='.str_after($servico6img, 'embed') : '' }}">
												<button type="button" class="btn btn-primary ml-2 mt-2" data-toggle="tooltip" data-html="true" title="Copie e Cole o Link do video do Youtube <br> ">
													<i class='bx bxs-info-circle'></i>
												</button>
												<span class="form-text">Formato do Link: "https://www.youtube.com/watch?v=UXi8NeHqIDA"</span>
											</div>
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
										<div class="description mt-3 col-12">
											<h2>Serviço 7</h2>
										</div>

										<div class="description col-md-12">
											<div class="form-check form-switch w-100">
												<input id="linkToggle" type="checkbox" role="switch" class="form-check-input" onchange="mudaInput(this,'7')" {{ (str_contains($servico7img, 'embed')) ? 'Checked' : ''}} >
												<label class="form-control-label" for="linkToggle">Link?</label>
											</div>
										</div>

										<div class="description col-md-6">
											<div id="imagem7InputContainer">
												<label class="form-control-label" for="basic-url">Imagem do Serviço</label>
												<input name="servico7img" type="file" class="form-control">
													<img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($servico7img)}}" alt="">
													<button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 700px <br> Altura: 400px">
														<i class='bx bxs-info-circle' ></i>
													</button>
											</div>
											<div id="video7InputContainer">
												<label class="form-control-label" for="basic-url">Vídeo do Serviço</label>
												<input name="servico7img" id="servico7img" type="text" class="form-control" value="{{ (str_contains($servico7img, 'embed')) ? 'https://www.youtube.com/watch?v='.str_after($servico7img, 'embed') : '' }}">
												<button type="button" class="btn btn-primary ml-2 mt-2" data-toggle="tooltip" data-html="true" title="Copie e Cole o Link do video do Youtube <br> ">
													<i class='bx bxs-info-circle'></i>
												</button>
												<span class="form-text">Formato do Link: "https://www.youtube.com/watch?v=UXi8NeHqIDA"</span>
											</div>
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
										<div class="description mt-3 col-12">
											<h2>Serviço 8</h2>
										</div>

										<div class="description col-md-12">
											<div class="form-check form-switch w-100">
												<input id="linkToggle" type="checkbox" role="switch" class="form-check-input" onchange="mudaInput(this,'8')" {{ (str_contains($servico8img, 'embed')) ? 'Checked' : ''}} >
												<label class="form-control-label" for="linkToggle">Link?</label>
											</div>
										</div>

										<div class="description col-md-6">
											<div id="imagem8InputContainer">
												<label class="form-control-label" for="basic-url">Imagem do Serviço</label>
												<input name="servico8img" type="file" class="form-control">
													<img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($servico8img)}}" alt="">
													<button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 700px <br> Altura: 400px">
														<i class='bx bxs-info-circle' ></i>
													</button>
											</div>
											<div id="video8InputContainer">
												<label class="form-control-label" for="basic-url">Vídeo do Serviço</label>
												<input name="servico8img" id="servico8img" type="text" class="form-control" value="{{ (str_contains($servico8img, 'embed')) ? 'https://www.youtube.com/watch?v='.str_after($servico8img, 'embed') : '' }}">
												<button type="button" class="btn btn-primary ml-2 mt-2" data-toggle="tooltip" data-html="true" title="Copie e Cole o Link do video do Youtube <br> ">
													<i class='bx bxs-info-circle'></i>
												</button>
												<span class="form-text">Formato do Link: "https://www.youtube.com/watch?v=UXi8NeHqIDA"</span>
											</div>
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
										<div class="description mt-3 col-12">
											<h2>Serviço 9</h2>
										</div>

										<div class="description col-md-12">
											<div class="form-check form-switch w-100">
												<input id="linkToggle" type="checkbox" role="switch" class="form-check-input" onchange="mudaInput(this,'9')" {{ (str_contains($servico9img, 'embed')) ? 'Checked' : ''}} >
												<label class="form-control-label" for="linkToggle">Link?</label>
											</div>
										</div>

										<div class="description col-md-6">
											<div id="imagem9InputContainer">
												<label class="form-control-label" for="basic-url">Imagem do Serviço</label>
												<input name="servico9img" type="file" class="form-control">
													<img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($servico9img)}}" alt="">
													<button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 700px <br> Altura: 400px">
														<i class='bx bxs-info-circle' ></i>
													</button>
											</div>
											<div id="video9InputContainer">
												<label class="form-control-label" for="basic-url">Vídeo do Serviço</label>
												<input name="servico9img" id="servico9img" type="text" class="form-control" value="{{ (str_contains($servico9img, 'embed')) ? 'https://www.youtube.com/watch?v='.str_after($servico9img, 'embed') : '' }}">
												<button type="button" class="btn btn-primary ml-2 mt-2" data-toggle="tooltip" data-html="true" title="Copie e Cole o Link do video do Youtube <br> ">
													<i class='bx bxs-info-circle'></i>
												</button>
												<span class="form-text">Formato do Link: "https://www.youtube.com/watch?v=UXi8NeHqIDA"</span>
											</div>
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
											<input name="servico9preco" type="text" class="form-control" value="{{$servico9preco}}">
										</div>

										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Preço 2</label>
											<input name="servico9preco2"  type="text" class="form-control" value="{{$servico9preco2}}">
										</div>
									</div>

									{{-- SERVIÇO 10 --}}
									<div class="row">
										<div class="description mt-3 col-12">
											<h2>Serviço 10</h2>
										</div>

										<div class="description col-md-12">
											<div class="form-check form-switch w-100">
												<input id="linkToggle" type="checkbox" role="switch" class="form-check-input" onchange="mudaInput(this,'10')" {{ (str_contains($servico10img, 'embed')) ? 'Checked' : ''}} >
												<label class="form-control-label" for="linkToggle">Link?</label>
											</div>
										</div>

										<div class="description col-md-6">
											<div id="imagem10InputContainer">
												<label class="form-control-label" for="basic-url">Imagem do Serviço</label>
												<input name="servico10img" type="file" class="form-control">
													<img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($servico10img)}}" alt="">
													<button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 700px <br> Altura: 400px">
														<i class='bx bxs-info-circle' ></i>
													</button>
											</div>
											<div id="video10InputContainer">
												<label class="form-control-label" for="basic-url">Vídeo do Serviço</label>
												<input name="servico10img" id="servico10img" type="text" class="form-control" value="{{ (str_contains($servico10img, 'embed')) ? 'https://www.youtube.com/watch?v='.str_after($servico10img, 'embed') : '' }}">
												<button type="button" class="btn btn-primary ml-2 mt-2" data-toggle="tooltip" data-html="true" title="Copie e Cole o Link do video do Youtube <br> ">
													<i class='bx bxs-info-circle'></i>
												</button>
												<span class="form-text">Formato do Link: "https://www.youtube.com/watch?v=UXi8NeHqIDA"</span>
											</div>
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
										<div class="description mt-3 col-12">
											<h2>Serviço 11</h2>
										</div>

										<div class="description col-md-12">
											<div class="form-check form-switch w-100">
												<input id="linkToggle" type="checkbox" role="switch" class="form-check-input" onchange="mudaInput(this,'11')" {{ (str_contains($servico11img, 'embed')) ? 'Checked' : ''}} >
												<label class="form-control-label" for="linkToggle">Link?</label>
											</div>
										</div>

										<div class="description col-md-6">
											<div id="imagem11InputContainer">
												<label class="form-control-label" for="basic-url">Imagem do Serviço</label>
												<input name="servico11img" type="file" class="form-control">
													<img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($servico11img)}}" alt="">
													<button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 700px <br> Altura: 400px">
														<i class='bx bxs-info-circle' ></i>
													</button>
											</div>
											<div id="video11InputContainer">
												<label class="form-control-label" for="basic-url">Vídeo do Serviço</label>
												<input name="servico11img" id="servico11img" type="text" class="form-control" value="{{ (str_contains($servico11img, 'embed')) ? 'https://www.youtube.com/watch?v='.str_after($servico11img, 'embed') : '' }}">
												<button type="button" class="btn btn-primary ml-2 mt-2" data-toggle="tooltip" data-html="true" title="Copie e Cole o Link do video do Youtube <br> ">
													<i class='bx bxs-info-circle'></i>
												</button>
												<span class="form-text">Formato do Link: "https://www.youtube.com/watch?v=UXi8NeHqIDA"</span>
											</div>
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

							<!-- ESTRUTURA -->
							<div class="tab-pane fade" id="etsrutura-1" role="tabpanel" aria-labelledby="estrutura">
								<form action="{{route('austriaestrutura')}}" enctype="multipart/form-data" method="post">
									@csrf
									<div class="row">
										<div class="description col-md-12">
											<label class="form-control-label" for="basic-url">Título Pequeno</label>
											<input name="estruturatitulo1" value="{{$estruturatitulo1}}" type="text" class="form-control">
										</div>

										<div class="description col-md-12">
											<label class="form-control-label" for="basic-url">Título Principal</label>
											<input name="estruturatitulo2"  type="text" class="form-control" value="{{$estruturatitulo2}}">
										</div>
									</div>

									{{-- ESTRUTURA 1 --}}
									<div class="row">
										<div>
											<div class="description mt-3 col-12">
												<h2>Estrutura 1</h2>
											</div>
																										
											<div class="description col-md-6">
												<input name="estruturaimagem1" type="file" class="form-control">
												<img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($estruturaimagem1)}}" alt="">
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
													<input name="estruturaimagem2" type="file" class="form-control">
													<img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($estruturaimagem2)}}" alt="">
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
												<input name="estruturaimagem3" type="file" class="form-control">
												<img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($estruturaimagem3)}}" alt="">
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
												<input name="estruturaimagem4" type="file" class="form-control">
												<img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($estruturaimagem4)}}" alt="">
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
												<input name="estruturaimagem5" type="file" class="form-control">
												<img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($estruturaimagem5)}}" alt="">
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
												<input name="estruturaimagem6" type="file" class="form-control">
												<img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($estruturaimagem6)}}" alt="">
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
												<input name="estruturaimagem7" type="file" class="form-control">
												<img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($estruturaimagem7)}}" alt="">
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
												<input name="estruturaimagem8" type="file" class="form-control">
												<img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($estruturaimagem8)}}" alt="">
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
												<input name="estruturaimagem9" type="file" class="form-control">
												<img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($estruturaimagem9)}}" alt="">
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
												<input name="estruturaimagem10" type="file" class="form-control">
												<img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($estruturaimagem10)}}" alt="">
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
												<input name="estruturaimagem11" type="file" class="form-control">
												<img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($estruturaimagem11)}}" alt="">
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
												<input name="estruturaimagem12" type="file" class="form-control">
												<img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($estruturaimagem12)}}" alt="">
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
												<input name="estruturaimagem13" type="file" class="form-control">
												<img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($estruturaimagem13)}}" alt="">
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
												<input name="estruturaimagem14" type="file" class="form-control">
												<img style="width: 30%; background: black; margin-top: 15px;"  src="{{Storage::url($estruturaimagem14)}}" alt="">
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
								<form action="{{route('austriacontato')}}" enctype="multipart/form-data" method="post">
									@csrf
									<div class="row">
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
								<form action="{{route('austriadepoimentos')}}" enctype="multipart/form-data" method="post">
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
								<form action="{{route('austriaagendamento')}}" enctype="multipart/form-data" method="post">
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
								<form action="{{route('austriamodal')}}" enctype="multipart/form-data" method="post">
									@csrf
									<div class="row">
										<div class="description col-md-6">
											<label class="form-control-label" for="basic-url">Logo</label>
											<input name="modalimg" type="file" class="form-control" placeholder="Logo">
										</div>

										<div class="description col-md-6">
											<img style="width: 40%; background: black; margin-top: 15px;"  src="{{Storage::url($modalimg)}}" alt="">
											<button type="button" class="btn btn-primary ml-2" data-toggle="tooltip" data-html="true" title="Tamanho recomendado: <br> Largura: 250px <br> Altura: 190px">
												<i class='bx bxs-info-circle' ></i>
											</button>
										</div>

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

							<!-- MODAL -->
							<div class="tab-pane fade" id="tabs-icons-text-10" role="tabpanel" aria-labelledby="tabs-icons-text-10-tab">
								<form action="{{route('austriasobre')}}" enctype="multipart/form-data" method="post">
									@csrf
									<div class="row">
										<div class="description col-md-12">
											<label class="form-control-label" for="basic-url">Titulo</label>
											<input style="margin-bottom: 20px;" name="titlelgpd" value="{{$titlelgpd}}" type="text" class="form-control" >
										</div>

										<div class="description col-12">
											<textarea id="editor-lgpd" name="containerlgpd" class="form-control" cols="30" rows="10">{!!isset($containerlgpd) ? $containerlgpd : '' !!}</textarea>
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