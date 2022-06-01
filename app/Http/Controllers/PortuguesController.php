<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Confing;

class PortuguesController extends Controller
{
		/**
		 * Create a new controller instance.
		 *
		 * @return void
		 */
		public function __construct()
		{
				$this->middleware('auth');
		}

		/**
		 * Show the application dashboard.
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function home()
		{
			$portuguestextoresumo=Confing::get('portuguestextoresumo');
			$portugueswhatsapp=Confing::get('portugueswhatsapp');
			$portuguesinstagram=Confing::get('portuguesinstagram');
			$portuguesemail=Confing::get('portuguesemail');
			$portuguesfacebook=Confing::get('portuguesfacebook');
			$portuguesboleto=Confing::get('portuguesboleto');
			$portugueslogo1=Confing::get('portugueslogo1');
			$portuguesmenu2=Confing::get('portuguesmenu2');
			$portuguesmenu3=Confing::get('portuguesmenu3');
			$portuguesmenu4=Confing::get('portuguesmenu4');
			$portuguesmenu5=Confing::get('portuguesmenu5');
			$portuguesmenu6=Confing::get('portuguesmenu6');
			$portuguesmenu7=Confing::get('portuguesmenu7');
			$portuguesmenu8=Confing::get('portuguesmenu8');
			$portuguesmenu9=Confing::get('portuguesmenu9');



			$portuguesslide1=Confing::get('portuguesslide1');
			$portuguesslide2=Confing::get('portuguesslide2');
			$portuguesslide3=Confing::get('portuguesslide3');
			$portuguesslide4=Confing::get('portuguesslide4');
			$portuguesslide5=Confing::get('portuguesslide5');
			$portuguesslide6=Confing::get('portuguesslide6');
			$portuguesslide7=Confing::get('portuguesslide7');
			$portuguesslide8=Confing::get('portuguesslide8');



			$portuguestituloPagina=Confing::get('portuguestituloPagina');
			$portuguestituloPrincipal=Confing::get('portuguestituloPrincipal');

			$portuguesservico1img=Confing::get('portuguesservico1img');
			$portuguesservico2img=Confing::get('portuguesservico2img');
			$portuguesservico3img=Confing::get('portuguesservico3img');
			$portuguesservico4img=Confing::get('portuguesservico4img');
			$portuguesservico5img=Confing::get('portuguesservico5img');
			$portuguesservico6img=Confing::get('portuguesservico6img');
			$portuguesservico7img=Confing::get('portuguesservico7img');
			$portuguesservico8img=Confing::get('portuguesservico8img');
			$portuguesservico9img=Confing::get('portuguesservico9img');
			$portuguesservico10img=Confing::get('portuguesservico10img');
			$portuguesservico11img=Confing::get('portuguesservico11img');

			$portuguesservico1titulo=Confing::get('portuguesservico1titulo');
			$portuguesservico2titulo=Confing::get('portuguesservico2titulo');
			$portuguesservico3titulo=Confing::get('portuguesservico3titulo');
			$portuguesservico4titulo=Confing::get('portuguesservico4titulo');
			$portuguesservico5titulo=Confing::get('portuguesservico5titulo');
			$portuguesservico6titulo=Confing::get('portuguesservico6titulo');
			$portuguesservico7titulo=Confing::get('portuguesservico7titulo');
			$portuguesservico8titulo=Confing::get('portuguesservico8titulo');
			$portuguesservico9titulo=Confing::get('portuguesservico9titulo');
			$portuguesservico10titulo=Confing::get('portuguesservico10titulo');
			$portuguesservico11titulo=Confing::get('portuguesservico11titulo');

			$portuguesservico1descricao=Confing::get('portuguesservico1descricao');
			$portuguesservico2descricao=Confing::get('portuguesservico2descricao');
			$portuguesservico3descricao=Confing::get('portuguesservico3descricao');
			$portuguesservico4descricao=Confing::get('portuguesservico4descricao');
			$portuguesservico5descricao=Confing::get('portuguesservico5descricao');
			$portuguesservico6descricao=Confing::get('portuguesservico6descricao');
			$portuguesservico7descricao=Confing::get('portuguesservico7descricao');
			$portuguesservico8descricao=Confing::get('portuguesservico8descricao');
			$portuguesservico9descricao=Confing::get('portuguesservico9descricao');
			$portuguesservico10descricao=Confing::get('portuguesservico10descricao');
			$portuguesservico11descricao=Confing::get('portuguesservico11descricao');

			$portuguesservico1preco=Confing::get('portuguesservico1preco');
			$portuguesservico2preco=Confing::get('portuguesservico2preco');
			$portuguesservico3preco=Confing::get('portuguesservico3preco');
			$portuguesservico4preco=Confing::get('portuguesservico4preco');
			$portuguesservico5preco=Confing::get('portuguesservico5preco');
			$portuguesservico6preco=Confing::get('portuguesservico6preco');
			$portuguesservico7preco=Confing::get('portuguesservico7preco');
			$portuguesservico8preco=Confing::get('portuguesservico8preco');
			$portuguesservico9preco=Confing::get('portuguesservico9preco');
			$portuguesservico10preco=Confing::get('portuguesservico10preco');
			$portuguesservico11preco=Confing::get('portuguesservico11preco');

			$portuguesservico1preco2=Confing::get('portuguesservico1preco2');
			$portuguesservico2preco2=Confing::get('portuguesservico2preco2');
			$portuguesservico3preco2=Confing::get('portuguesservico3preco2');
			$portuguesservico4preco2=Confing::get('portuguesservico4preco2');
			$portuguesservico5preco2=Confing::get('portuguesservico5preco2');
			$portuguesservico6preco2=Confing::get('portuguesservico6preco2');
			$portuguesservico7preco2=Confing::get('portuguesservico7preco2');
			$portuguesservico8preco2=Confing::get('portuguesservico8preco2');
			$portuguesservico9preco2=Confing::get('portuguesservico9preco2');
			$portuguesservico10preco2=Confing::get('portuguesservico10preco2');
			$portuguesservico11preco2=Confing::get('portuguesservico11preco2');



			$portuguescontatoTituloPagina=Confing::get('portuguescontatoTituloPagina');
			$portuguescontatoTituloPagina2=Confing::get('portuguescontatoTituloPagina2');
				
			$portuguescontatoTituloemail=Confing::get('portuguescontatoTituloemail');
			$portuguescontatoemail=Confing::get('portuguescontatoemail');
				
			$portuguescontatoTituloEndereco=Confing::get('portuguescontatoTituloEndereco');
			$portuguescontatoSubtTituloEndereco=Confing::get('portuguescontatoSubtTituloEndereco');
				
			$portuguescontatoTituloTelefone=Confing::get('portuguescontatoTituloTelefone');
			$portuguescontatoTelefone=Confing::get('portuguescontatoTelefone');

			$portuguescontatoLinkLinkedin=Confing::get('portuguescontatoLinkLinkedin');
			$portuguescontatoLinkFacebook=Confing::get('portuguescontatoLinkFacebook');
			$portuguescontatoLinkInstagram=Confing::get('portuguescontatoLinkInstagram');

			$portuguesdepoimento1=Confing::get('portuguesdepoimento1');
			$portuguesdepoimento2=Confing::get('portuguesdepoimento2');

			$portuguesagendamento1=Confing::get('portuguesagendamento1');
			$portuguesagendamento2=Confing::get('portuguesagendamento2');
			$portuguesagendamentobotao=Confing::get('portuguesagendamentobotao');



			$portuguesmodalimg=Confing::get('portuguesmodalimg');

			$portuguesmodal1=Confing::get('portuguesmodal1');
			$portuguesmodal2=Confing::get('portuguesmodal2');
			$portuguesmodal3=Confing::get('portuguesmodal3');
			$portuguesmodal4=Confing::get('portuguesmodal4');
			$portuguesmodal5=Confing::get('portuguesmodal5');
			$portuguesmodal6=Confing::get('portuguesmodal6');
			$portuguesmodal7=Confing::get('portuguesmodal7');
			$portuguesmodal8=Confing::get('portuguesmodal8');
			$portuguesmodal9=Confing::get('portuguesmodal9');


			
			$portuguesestruturatitulo1=Confing::get('portuguesestruturatitulo1');
			$portuguesestruturatitulo2=Confing::get('portuguesestruturatitulo2');

			$portuguesestruturaimagem1=Confing::get('portuguesestruturaimagem1');
			$portuguesestruturaimagem2=Confing::get('portuguesestruturaimagem2');
			$portuguesestruturaimagem3=Confing::get('portuguesestruturaimagem3');
			$portuguesestruturaimagem4=Confing::get('portuguesestruturaimagem4');
			$portuguesestruturaimagem5=Confing::get('portuguesestruturaimagem5');
			$portuguesestruturaimagem6=Confing::get('portuguesestruturaimagem6');
			$portuguesestruturaimagem7=Confing::get('portuguesestruturaimagem7');
			$portuguesestruturaimagem8=Confing::get('portuguesestruturaimagem8');
			$portuguesestruturaimagem9=Confing::get('portuguesestruturaimagem9');
			$portuguesestruturaimagem10=Confing::get('portuguesestruturaimagem10');
			$portuguesestruturaimagem11=Confing::get('portuguesestruturaimagem11');
			$portuguesestruturaimagem12=Confing::get('portuguesestruturaimagem12');
			$portuguesestruturaimagem13=Confing::get('portuguesestruturaimagem13');
			$portuguesestruturaimagem14=Confing::get('portuguesestruturaimagem14');


			return view('controle.pt.index', [
				'portuguestextoresumo'=>$portuguestextoresumo,
				'portugueswhatsapp'=>$portugueswhatsapp,
				'portuguesinstagram'=>$portuguesinstagram,
				'portuguesemail'=>$portuguesemail,
				'portuguesfacebook'=>$portuguesfacebook,
				'portuguesboleto'=>$portuguesboleto,
				'portugueslogo1'=>$portugueslogo1,
				'portuguesmenu2'=>$portuguesmenu2,
				'portuguesmenu3'=>$portuguesmenu3,
				'portuguesmenu4'=>$portuguesmenu4,
				'portuguesmenu5'=>$portuguesmenu5,
				'portuguesmenu6'=>$portuguesmenu6,
				'portuguesmenu7'=>$portuguesmenu7,
				'portuguesmenu8'=>$portuguesmenu8,
				'portuguesmenu9'=>$portuguesmenu9,



				'portuguesslide1'=>$portuguesslide1,
				'portuguesslide2'=>$portuguesslide2,
				'portuguesslide3'=>$portuguesslide3,
				'portuguesslide4'=>$portuguesslide4,
				'portuguesslide5'=>$portuguesslide5,
				'portuguesslide6'=>$portuguesslide6,
				'portuguesslide7'=>$portuguesslide7,
				'portuguesslide8'=>$portuguesslide8,



				'portuguestituloPagina'=>$portuguestituloPagina,
				'portuguestituloPrincipal'=>$portuguestituloPrincipal,

				'portuguesservico1img'=>$portuguesservico1img,
				'portuguesservico2img'=>$portuguesservico2img,
				'portuguesservico3img'=>$portuguesservico3img,
				'portuguesservico4img'=>$portuguesservico4img,
				'portuguesservico5img'=>$portuguesservico5img,
				'portuguesservico6img'=>$portuguesservico6img,
				'portuguesservico7img'=>$portuguesservico7img,
				'portuguesservico8img'=>$portuguesservico8img,
				'portuguesservico9img'=>$portuguesservico9img,
				'portuguesservico10img'=>$portuguesservico10img,
				'portuguesservico11img'=>$portuguesservico11img,

				'portuguesservico1titulo'=>$portuguesservico1titulo,
				'portuguesservico2titulo'=>$portuguesservico2titulo,
				'portuguesservico3titulo'=>$portuguesservico3titulo,
				'portuguesservico4titulo'=>$portuguesservico4titulo,
				'portuguesservico5titulo'=>$portuguesservico5titulo,
				'portuguesservico6titulo'=>$portuguesservico6titulo,
				'portuguesservico7titulo'=>$portuguesservico7titulo,
				'portuguesservico8titulo'=>$portuguesservico8titulo,
				'portuguesservico9titulo'=>$portuguesservico9titulo,
				'portuguesservico10titulo'=>$portuguesservico10titulo,
				'portuguesservico11titulo'=>$portuguesservico11titulo,

				'portuguesservico1descricao'=>$portuguesservico1descricao,
				'portuguesservico2descricao'=>$portuguesservico2descricao,
				'portuguesservico3descricao'=>$portuguesservico3descricao,
				'portuguesservico4descricao'=>$portuguesservico4descricao,
				'portuguesservico5descricao'=>$portuguesservico5descricao,
				'portuguesservico6descricao'=>$portuguesservico6descricao,
				'portuguesservico7descricao'=>$portuguesservico7descricao,
				'portuguesservico8descricao'=>$portuguesservico8descricao,
				'portuguesservico9descricao'=>$portuguesservico9descricao,
				'portuguesservico10descricao'=>$portuguesservico10descricao,
				'portuguesservico11descricao'=>$portuguesservico11descricao,

				'portuguesservico1preco'=>$portuguesservico1preco,
				'portuguesservico2preco'=>$portuguesservico2preco,
				'portuguesservico3preco'=>$portuguesservico3preco,
				'portuguesservico4preco'=>$portuguesservico4preco,
				'portuguesservico5preco'=>$portuguesservico5preco,
				'portuguesservico6preco'=>$portuguesservico6preco,
				'portuguesservico7preco'=>$portuguesservico7preco,
				'portuguesservico8preco'=>$portuguesservico8preco,
				'portuguesservico9preco'=>$portuguesservico9preco,
				'portuguesservico10preco'=>$portuguesservico10preco,
				'portuguesservico11preco'=>$portuguesservico11preco,

				'portuguesservico1preco2'=>$portuguesservico1preco2,
				'portuguesservico2preco2'=>$portuguesservico2preco2,
				'portuguesservico3preco2'=>$portuguesservico3preco2,
				'portuguesservico4preco2'=>$portuguesservico4preco2,
				'portuguesservico5preco2'=>$portuguesservico5preco2,
				'portuguesservico6preco2'=>$portuguesservico6preco2,
				'portuguesservico7preco2'=>$portuguesservico7preco2,
				'portuguesservico8preco2'=>$portuguesservico8preco2,
				'portuguesservico9preco2'=>$portuguesservico9preco2,
				'portuguesservico10preco2'=>$portuguesservico10preco2,
				'portuguesservico11preco2'=>$portuguesservico11preco2,



				'portuguescontatoTituloPagina'=>$portuguescontatoTituloPagina,
				'portuguescontatoTituloPagina2'=>$portuguescontatoTituloPagina2,

				'portuguescontatoTituloemail'=>$portuguescontatoTituloemail,
				'portuguescontatoemail'=>$portuguescontatoemail,

				'portuguescontatoTituloEndereco'=>$portuguescontatoTituloEndereco,
				'portuguescontatoSubtTituloEndereco'=>$portuguescontatoSubtTituloEndereco,
				
				'portuguescontatoTituloTelefone'=>$portuguescontatoTituloTelefone,
				'portuguescontatoTelefone'=>$portuguescontatoTelefone,

				'portuguescontatoLinkLinkedin'=>$portuguescontatoLinkLinkedin,
				'portuguescontatoLinkFacebook'=>$portuguescontatoLinkFacebook,
				'portuguescontatoLinkInstagram'=>$portuguescontatoLinkInstagram,



				'portuguesdepoimento1'=>$portuguesdepoimento1,
				'portuguesdepoimento2'=>$portuguesdepoimento2,

				'portuguesagendamento1'=>$portuguesagendamento1,
				'portuguesagendamento2'=>$portuguesagendamento2,
				'portuguesagendamentobotao'=>$portuguesagendamentobotao,



				'portuguesmodalimg'=>$portuguesmodalimg,

				'portuguesmodal1'=>$portuguesmodal1,
				'portuguesmodal2'=>$portuguesmodal2,
				'portuguesmodal3'=>$portuguesmodal3,
				'portuguesmodal4'=>$portuguesmodal4,
				'portuguesmodal5'=>$portuguesmodal5,
				'portuguesmodal6'=>$portuguesmodal6,
				'portuguesmodal7'=>$portuguesmodal7,
				'portuguesmodal8'=>$portuguesmodal8,
				'portuguesmodal9'=>$portuguesmodal9,

				'portuguesestruturatitulo1'=>$portuguesestruturatitulo1,
				'portuguesestruturatitulo2'=>$portuguesestruturatitulo2,

				'portuguesestruturaimagem1'=>$portuguesestruturaimagem1,
				'portuguesestruturaimagem2'=>$portuguesestruturaimagem2,
				'portuguesestruturaimagem3'=>$portuguesestruturaimagem3,
				'portuguesestruturaimagem4'=>$portuguesestruturaimagem4,
				'portuguesestruturaimagem5'=>$portuguesestruturaimagem5,
				'portuguesestruturaimagem6'=>$portuguesestruturaimagem6,
				'portuguesestruturaimagem7'=>$portuguesestruturaimagem7,
				'portuguesestruturaimagem8'=>$portuguesestruturaimagem8,
				'portuguesestruturaimagem9'=>$portuguesestruturaimagem9,
				'portuguesestruturaimagem10'=>$portuguesestruturaimagem10,
				'portuguesestruturaimagem11'=>$portuguesestruturaimagem11,
				'portuguesestruturaimagem12'=>$portuguesestruturaimagem12,
				'portuguesestruturaimagem13'=>$portuguesestruturaimagem13,
				'portuguesestruturaimagem14'=>$portuguesestruturaimagem14,
				]);
		}
 
		public function portuguesbanner(Request $request)
		{
			Confing::atualizar('portuguestextoresumo',$request->portuguestextoresumo);
			Confing::atualizar('portugueswhatsapp',$request->portugueswhatsapp);
			Confing::atualizar('portuguesinstagram',$request->portuguesinstagram);
			Confing::atualizar('portuguesemail',$request->portuguesemail);
			Confing::atualizar('portuguesfacebook',$request->portuguesfacebook);
				
			return redirect()->back()->with('status', "Conteúdo atualizado com sucesso");
		}

		public function portuguesmenu(Request $request)
		{
				if ($request->hasFile('portugueslogo1')) 
				{
						$extension = $request->portugueslogo1->extension();
						$path = $request->portugueslogo1->storeAs('public/images', "portugueslogo1.$extension");
						Confing::atualizar('portugueslogo1',$path);
				}

				Confing::atualizar('portuguesmenu2',$request->portuguesmenu2);
				Confing::atualizar('portuguesmenu3',$request->portuguesmenu3);
				Confing::atualizar('portuguesmenu4',$request->portuguesmenu4);    
				Confing::atualizar('portuguesmenu5',$request->portuguesmenu5);
				Confing::atualizar('portuguesmenu6',$request->portuguesmenu6);
				Confing::atualizar('portuguesmenu7',$request->portuguesmenu7);
				Confing::atualizar('portuguesmenu8',$request->portuguesmenu8);
				Confing::atualizar('portuguesmenu9',$request->portuguesmenu9);

				return redirect()->back()->with('status', "Formulário Enviado com sucesso");
		}

		public function portuguessobre(Request $request)
		{
			if ($request->hasFile('portuguesslide1')) 
			{
				$extension = $request->portuguesslide1->extension();
				$path = $request->portuguesslide1->storeAs('public/images', "portuguesslide1.$extension");
				Confing::atualizar('portuguesslide1',$path);
			}
			if ($request->hasFile('portuguesslide2')) 
			{
				$extension = $request->portuguesslide2->extension();
				$path = $request->portuguesslide2->storeAs('public/images', "portuguesslide2.$extension");
				Confing::atualizar('portuguesslide2',$path);
			}
			if ($request->hasFile('portuguesslide3')) 
			{
				$extension = $request->portuguesslide3->extension();
				$path = $request->portuguesslide3->storeAs('public/images', "portuguesslide3.$extension");
				Confing::atualizar('portuguesslide3',$path);
			}

			Confing::atualizar('portuguesslide4',$request->portuguesslide4);
			Confing::atualizar('portuguesslide5',$request->portuguesslide5);
			Confing::atualizar('portuguesslide6',$request->portuguesslide6);
			Confing::atualizar('portuguesslide7',$request->portuguesslide7);
			Confing::atualizar('portuguesslide8',$request->portuguesslide8);

			return redirect()->back()->with('status', "Conteúdo atualizado com sucesso");
		}

		public function portuguesservico(Request $request)
		{
				if ($request->hasFile('portuguesservico1img')) 
				{
						$extension = $request->portuguesservico1img->extension();
						$path = $request->portuguesservico1img->storeAs('public/images', "portuguesservico1img.$extension");
						Confing::atualizar('portuguesservico1img',$path);
				}
				if ($request->hasFile('portuguesservico2img')) 
				{
						$extension = $request->portuguesservico2img->extension();
						$path = $request->portuguesservico2img->storeAs('public/images', "portuguesservico2img.$extension");
						Confing::atualizar('portuguesservico2img',$path);
				}
				if ($request->hasFile('portuguesservico3img')) 
				{
						$extension = $request->portuguesservico3img->extension();
						$path = $request->portuguesservico3img->storeAs('public/images', "portuguesservico3img.$extension");
						Confing::atualizar('portuguesservico3img',$path);
				}
				if ($request->hasFile('portuguesservico4img')) 
				{
						$extension = $request->portuguesservico4img->extension();
						$path = $request->portuguesservico4img->storeAs('public/images', "portuguesservico4img.$extension");
						Confing::atualizar('portuguesservico4img',$path);
				}
				if ($request->hasFile('portuguesservico5img')) 
				{
						$extension = $request->portuguesservico5img->extension();
						$path = $request->portuguesservico5img->storeAs('public/images', "portuguesservico5img.$extension");
						Confing::atualizar('portuguesservico5img',$path);
				}
				if ($request->hasFile('portuguesservico6img')) 
				{
						$extension = $request->portuguesservico6img->extension();
						$path = $request->portuguesservico6img->storeAs('public/images', "portuguesservico6img.$extension");
						Confing::atualizar('portuguesservico6img',$path);
				}
				if ($request->hasFile('portuguesservico7img')) 
				{
						$extension = $request->portuguesservico7img->extension();
						$path = $request->portuguesservico7img->storeAs('public/images', "portuguesservico7img.$extension");
						Confing::atualizar('portuguesservico7img',$path);
				}
				if ($request->hasFile('portuguesservico8img')) 
				{
						$extension = $request->portuguesservico8img->extension();
						$path = $request->portuguesservico8img->storeAs('public/images', "portuguesservico8img.$extension");
						Confing::atualizar('portuguesservico8img',$path);
				}
				if ($request->hasFile('portuguesservico9img')) 
				{
						$extension = $request->portuguesservico9img->extension();
						$path = $request->portuguesservico9img->storeAs('public/images', "portuguesservico9img.$extension");
						Confing::atualizar('portuguesservico9img',$path);
				}
				if ($request->hasFile('portuguesservico10img')) 
				{
						$extension = $request->portuguesservico10img->extension();
						$path = $request->portuguesservico10img->storeAs('public/images', "portuguesservico10img.$extension");
						Confing::atualizar('portuguesservico10img',$path);
				}
				if ($request->hasFile('portuguesservico11img')) 
				{
						$extension = $request->portuguesservico11img->extension();
						$path = $request->portuguesservico11img->storeAs('public/images', "portuguesservico11img.$extension");
						Confing::atualizar('portuguesservico11img',$path);
				}
				
				Confing::atualizar('portuguestituloPagina',$request->portuguestituloPagina);
				Confing::atualizar('portuguestituloPrincipal',$request->portuguestituloPrincipal);

				Confing::atualizar('portuguesservico1titulo',$request->portuguesservico1titulo);
				Confing::atualizar('portuguesservico2titulo',$request->portuguesservico2titulo);
				Confing::atualizar('portuguesservico3titulo',$request->portuguesservico3titulo);
				Confing::atualizar('portuguesservico4titulo',$request->portuguesservico4titulo);
				Confing::atualizar('portuguesservico5titulo',$request->portuguesservico5titulo);
				Confing::atualizar('portuguesservico6titulo',$request->portuguesservico6titulo);
				Confing::atualizar('portuguesservico7titulo',$request->portuguesservico7titulo);
				Confing::atualizar('portuguesservico8titulo',$request->portuguesservico8titulo);
				Confing::atualizar('portuguesservico9titulo',$request->portuguesservico9titulo);
				Confing::atualizar('portuguesservico10titulo',$request->portuguesservico10titulo);
				Confing::atualizar('portuguesservico11titulo',$request->portuguesservico11titulo);

				Confing::atualizar('portuguesservico1descricao',$request->portuguesservico1descricao);
				Confing::atualizar('portuguesservico2descricao',$request->portuguesservico2descricao);
				Confing::atualizar('portuguesservico3descricao',$request->portuguesservico3descricao);
				Confing::atualizar('portuguesservico4descricao',$request->portuguesservico4descricao);
				Confing::atualizar('portuguesservico5descricao',$request->portuguesservico5descricao);
				Confing::atualizar('portuguesservico6descricao',$request->portuguesservico6descricao);
				Confing::atualizar('portuguesservico7descricao',$request->portuguesservico7descricao);
				Confing::atualizar('portuguesservico8descricao',$request->portuguesservico8descricao);
				Confing::atualizar('portuguesservico9descricao',$request->portuguesservico9descricao);
				Confing::atualizar('portuguesservico10descricao',$request->portuguesservico10descricao);
				Confing::atualizar('portuguesservico11descricao',$request->portuguesservico11descricao);

				Confing::atualizar('portuguesservico1preco',$request->portuguesservico1preco);
				Confing::atualizar('portuguesservico2preco',$request->portuguesservico2preco);
				Confing::atualizar('portuguesservico3preco',$request->portuguesservico3preco);
				Confing::atualizar('portuguesservico4preco',$request->portuguesservico4preco);
				Confing::atualizar('portuguesservico5preco',$request->portuguesservico5preco);
				Confing::atualizar('portuguesservico6preco',$request->portuguesservico6preco);
				Confing::atualizar('portuguesservico7preco',$request->portuguesservico7preco);
				Confing::atualizar('portuguesservico8preco',$request->portuguesservico8preco);
				Confing::atualizar('portuguesservico9preco',$request->portuguesservico9preco);
				Confing::atualizar('portuguesservico10preco',$request->portuguesservico10preco);
				Confing::atualizar('portuguesservico11preco',$request->portuguesservico11preco);

				Confing::atualizar('portuguesservico1preco2',$request->portuguesservico1preco2);
				Confing::atualizar('portuguesservico2preco2',$request->portuguesservico2preco2);
				Confing::atualizar('portuguesservico3preco2',$request->portuguesservico3preco2);
				Confing::atualizar('portuguesservico4preco2',$request->portuguesservico4preco2);
				Confing::atualizar('portuguesservico5preco2',$request->portuguesservico5preco2);
				Confing::atualizar('portuguesservico6preco2',$request->portuguesservico6preco2);
				Confing::atualizar('portuguesservico7preco2',$request->portuguesservico7preco2);
				Confing::atualizar('portuguesservico8preco2',$request->portuguesservico8preco2);
				Confing::atualizar('portuguesservico9preco2',$request->portuguesservico9preco2);
				Confing::atualizar('portuguesservico10preco2',$request->portuguesservico10preco2);
				Confing::atualizar('portuguesservico11preco2',$request->portuguesservico11preco2);
		 
				return redirect()->back()->with('status', "Conteúdo atualizado com sucesso");
		}

		public function portuguesestrutura(Request $request)
		{
				Confing::atualizar('portuguesestruturatitulo1',$request->portuguesestruturatitulo1);
				Confing::atualizar('portuguesestruturatitulo2',$request->portuguesestruturatitulo2);

				if ($request->hasFile('portuguesestruturaimagem1')) 
				{
						$extension = $request->portuguesestruturaimagem1->extension();
						$path = $request->portuguesestruturaimagem1->storeAs('public/images', "portuguesestruturaimagem1.$extension");
						Confing::atualizar('portuguesestruturaimagem1',$path);
				}
				if ($request->hasFile('portuguesestruturaimagem2')) 
				{
						$extension = $request->portuguesestruturaimagem2->extension();
						$path = $request->portuguesestruturaimagem2->storeAs('public/images', "portuguesestruturaimagem2.$extension");
						Confing::atualizar('portuguesestruturaimagem2',$path);
				}
				if ($request->hasFile('portuguesestruturaimagem3')) 
				{
						$extension = $request->portuguesestruturaimagem3->extension();
						$path = $request->portuguesestruturaimagem3->storeAs('public/images', "portuguesestruturaimagem3.$extension");
						Confing::atualizar('portuguesestruturaimagem3',$path);
				}
				if ($request->hasFile('portuguesestruturaimagem4')) 
				{
						$extension = $request->portuguesestruturaimagem4->extension();
						$path = $request->portuguesestruturaimagem4->storeAs('public/images', "portuguesestruturaimagem4.$extension");
						Confing::atualizar('portuguesestruturaimagem4',$path);
				}
				if ($request->hasFile('portuguesestruturaimagem5')) 
				{
						$extension = $request->portuguesestruturaimagem5->extension();
						$path = $request->portuguesestruturaimagem5->storeAs('public/images', "portuguesestruturaimagem5.$extension");
						Confing::atualizar('portuguesestruturaimagem5',$path);
				}
				if ($request->hasFile('portuguesestruturaimagem6')) 
				{
						$extension = $request->portuguesestruturaimagem6->extension();
						$path = $request->portuguesestruturaimagem6->storeAs('public/images', "portuguesestruturaimagem6.$extension");
						Confing::atualizar('portuguesestruturaimagem6',$path);
				}
				if ($request->hasFile('portuguesestruturaimagem7')) 
				{
						$extension = $request->portuguesestruturaimagem7->extension();
						$path = $request->portuguesestruturaimagem7->storeAs('public/images', "portuguesestruturaimagem7.$extension");
						Confing::atualizar('portuguesestruturaimagem7',$path);
				}
				if ($request->hasFile('portuguesestruturaimagem8')) 
				{
						$extension = $request->portuguesestruturaimagem8->extension();
						$path = $request->portuguesestruturaimagem8->storeAs('public/images', "portuguesestruturaimagem8.$extension");
						Confing::atualizar('portuguesestruturaimagem8',$path);
				}
				if ($request->hasFile('portuguesestruturaimagem9')) 
				{
						$extension = $request->portuguesestruturaimagem9->extension();
						$path = $request->portuguesestruturaimagem9->storeAs('public/images', "portuguesestruturaimagem9.$extension");
						Confing::atualizar('portuguesestruturaimagem9',$path);
				}
				if ($request->hasFile('portuguesestruturaimagem10')) 
				{
						$extension = $request->portuguesestruturaimagem10->extension();
						$path = $request->portuguesestruturaimagem10->storeAs('public/images', "portuguesestruturaimagem10.$extension");
						Confing::atualizar('portuguesestruturaimagem10',$path);
				}
				if ($request->hasFile('portuguesestruturaimagem11')) 
				{
						$extension = $request->portuguesestruturaimagem11->extension();
						$path = $request->portuguesestruturaimagem11->storeAs('public/images', "portuguesestruturaimagem11.$extension");
						Confing::atualizar('portuguesestruturaimagem11',$path);
				}
				if ($request->hasFile('portuguesestruturaimagem12')) 
				{
						$extension = $request->portuguesestruturaimagem12->extension();
						$path = $request->portuguesestruturaimagem12->storeAs('public/images', "portuguesestruturaimagem12.$extension");
						Confing::atualizar('portuguesestruturaimagem12',$path);
				}
				if ($request->hasFile('portuguesestruturaimagem13')) 
				{
						$extension = $request->portuguesestruturaimagem13->extension();
						$path = $request->portuguesestruturaimagem13->storeAs('public/images', "portuguesestruturaimagem13.$extension");
						Confing::atualizar('portuguesestruturaimagem13',$path);
				}
				if ($request->hasFile('portuguesestruturaimagem14')) 
				{
						$extension = $request->portuguesestruturaimagem14->extension();
						$path = $request->portuguesestruturaimagem14->storeAs('public/images', "portuguesestruturaimagem14.$extension");
						Confing::atualizar('portuguesestruturaimagem14',$path);
				}

				return redirect()->back()->with('status', "Conteúdo atualizado com sucesso");
		}

		public function portuguescontato(Request $request)
		{
				if ($request->hasFile('portuguesmenu1')) 
				{
						$extension = $request->portuguesmenu1->extension();
						$path = $request->portuguesmenu1->storeAs('public/images', "portuguesmenu1.$extension");
						Confing::atualizar('portuguesmenu1',$path);
				}

				Confing::atualizar('portuguescontatoTituloPagina',$request->portuguescontatoTituloPagina);
				Confing::atualizar('portuguescontatoTituloPagina2',$request->portuguescontatoTituloPagina2);

				Confing::atualizar('portuguescontatoTituloemail',$request->portuguescontatoTituloemail);
				Confing::atualizar('portuguescontatoemail',$request->portuguescontatoemail);

				Confing::atualizar('portuguescontatoTituloEndereco',$request->portuguescontatoTituloEndereco);
				Confing::atualizar('portuguescontatoSubtTituloEndereco',$request->portuguescontatoSubtTituloEndereco);

				Confing::atualizar('portuguescontatoTituloTelefone',$request->portuguescontatoTituloTelefone);
				Confing::atualizar('portuguescontatoTelefone',$request->portuguescontatoTelefone);

				Confing::atualizar('portuguescontatoLinkLinkedin',$request->portuguescontatoLinkLinkedin);
				Confing::atualizar('portuguescontatoLinkFacebook',$request->portuguescontatoLinkFacebook);
				Confing::atualizar('portuguescontatoLinkInstagram',$request->portuguescontatoLinkInstagram); 

				return redirect()->back()->with('status', "Conteúdo atualizado com sucesso");
		}

		public function portuguesdepoimentos(Request $request)
		{
				Confing::atualizar('portuguesdepoimento1',$request->portuguesdepoimento1);
				Confing::atualizar('portuguesdepoimento2',$request->portuguesdepoimento2);

				return redirect()->back()->with('status', "Conteúdo atualizado com sucesso");
		}

		public function portuguesagendamento(Request $request)
		{
				Confing::atualizar('portuguesagendamento1',$request->portuguesagendamento1);        
				Confing::atualizar('portuguesagendamento2',$request->portuguesagendamento2);        
				Confing::atualizar('portuguesagendamentobotao',$request->portuguesagendamentobotao);        

				return redirect()->back()->with('status', "Conteúdo atualizado com sucesso");
		}

		public function portuguesmodal(Request $request)
		{
				if ($request->hasFile('portuguesmodalimg')) 
				{
						$extension = $request->portuguesmodalimg->extension();
						$path = $request->portuguesmodalimg->storeAs('public/images', "portuguesmodalimg.$extension");
						Confing::atualizar('portuguesmodalimg',$path);
				}       

				Confing::atualizar('portuguesmodal1',$request->portuguesmodal1);        
				Confing::atualizar('portuguesmodal2',$request->portuguesmodal2);
				Confing::atualizar('portuguesmodal3',$request->portuguesmodal3);
				Confing::atualizar('portuguesmodal4',$request->portuguesmodal4);
				Confing::atualizar('portuguesmodal5',$request->portuguesmodal5);
				Confing::atualizar('portuguesmodal6',$request->portuguesmodal6);
				Confing::atualizar('portuguesmodal7',$request->portuguesmodal7);
				Confing::atualizar('portuguesmodal8',$request->portuguesmodal8);
				Confing::atualizar('portuguesmodal9',$request->portuguesmodal9);

				return redirect()->back()->with('status', "Conteúdo atualizado com sucesso");

		}
}