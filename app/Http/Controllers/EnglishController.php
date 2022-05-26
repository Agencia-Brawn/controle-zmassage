<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Confing;

class EnglishController extends Controller
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
			$textoresumo=Confing::get('textoresumo');
			$whatsapp=Confing::get('whatsapp');
			$instagram=Confing::get('instagram');
			$email=Confing::get('email');
			$facebook=Confing::get('facebook');
			$boleto=Confing::get('boleto');
			$logo1=Confing::get('logo1');
			$menu2=Confing::get('menu2');
			$menu3=Confing::get('menu3');
			$menu4=Confing::get('menu4');
			$menu5=Confing::get('menu5');
			$menu6=Confing::get('menu6');
			$menu7=Confing::get('menu7');
			$menu8=Confing::get('menu8');
			$menu9=Confing::get('menu9');



			$slide1=Confing::get('slide1');
			$slide2=Confing::get('slide2');
			$slide3=Confing::get('slide3');
			$slide4=Confing::get('slide4');
			$slide5=Confing::get('slide5');
			$slide6=Confing::get('slide6');
			$slide7=Confing::get('slide7');
			$slide8=Confing::get('slide8');



			$tituloPagina=Confing::get('tituloPagina');
			$tituloPrincipal=Confing::get('tituloPrincipal');

			$servico1img=Confing::get('servico1img');
			$servico2img=Confing::get('servico2img');
			$servico3img=Confing::get('servico3img');
			$servico4img=Confing::get('servico4img');
			$servico5img=Confing::get('servico5img');
			$servico6img=Confing::get('servico6img');
			$servico7img=Confing::get('servico7img');
			$servico8img=Confing::get('servico8img');
			$servico9img=Confing::get('servico9img');
			$servico10img=Confing::get('servico10img');
			$servico11img=Confing::get('servico11img');

			$servico1titulo=Confing::get('servico1titulo');
			$servico2titulo=Confing::get('servico2titulo');
			$servico3titulo=Confing::get('servico3titulo');
			$servico4titulo=Confing::get('servico4titulo');
			$servico5titulo=Confing::get('servico5titulo');
			$servico6titulo=Confing::get('servico6titulo');
			$servico7titulo=Confing::get('servico7titulo');
			$servico8titulo=Confing::get('servico8titulo');
			$servico9titulo=Confing::get('servico9titulo');
			$servico10titulo=Confing::get('servico10titulo');
			$servico11titulo=Confing::get('servico11titulo');

			$servico1descricao=Confing::get('servico1descricao');
			$servico2descricao=Confing::get('servico2descricao');
			$servico3descricao=Confing::get('servico3descricao');
			$servico4descricao=Confing::get('servico4descricao');
			$servico5descricao=Confing::get('servico5descricao');
			$servico6descricao=Confing::get('servico6descricao');
			$servico7descricao=Confing::get('servico7descricao');
			$servico8descricao=Confing::get('servico8descricao');
			$servico9descricao=Confing::get('servico9descricao');
			$servico10descricao=Confing::get('servico10descricao');
			$servico11descricao=Confing::get('servico11descricao');

			$servico1preco=Confing::get('servico1preco');
			$servico2preco=Confing::get('servico2preco');
			$servico3preco=Confing::get('servico3preco');
			$servico4preco=Confing::get('servico4preco');
			$servico5preco=Confing::get('servico5preco');
			$servico6preco=Confing::get('servico6preco');
			$servico7preco=Confing::get('servico7preco');
			$servico8preco=Confing::get('servico8preco');
			$servico9preco=Confing::get('servico9preco');
			$servico10preco=Confing::get('servico10preco');
			$servico11preco=Confing::get('servico11preco');

			$servico1preco2=Confing::get('servico1preco2');
			$servico2preco2=Confing::get('servico2preco2');
			$servico3preco2=Confing::get('servico3preco2');
			$servico4preco2=Confing::get('servico4preco2');
			$servico5preco2=Confing::get('servico5preco2');
			$servico6preco2=Confing::get('servico6preco2');
			$servico7preco2=Confing::get('servico7preco2');
			$servico8preco2=Confing::get('servico8preco2');
			$servico9preco2=Confing::get('servico9preco2');
			$servico10preco2=Confing::get('servico10preco2');
			$servico11preco2=Confing::get('servico11preco2');



			$contatoTituloPagina=Confing::get('contatoTituloPagina');
			$contatoTituloPagina2=Confing::get('contatoTituloPagina2');
				
			$contatoTituloemail=Confing::get('contatoTituloemail');
			$contatoemail=Confing::get('contatoemail');
				
			$contatoTituloEndereco=Confing::get('contatoTituloEndereco');
			$contatoSubtTituloEndereco=Confing::get('contatoSubtTituloEndereco');
				
			$contatoTituloTelefone=Confing::get('contatoTituloTelefone');
			$contatoTelefone=Confing::get('contatoTelefone');

			$contatoLinkLinkedin=Confing::get('contatoLinkLinkedin');
			$contatoLinkFacebook=Confing::get('contatoLinkFacebook');
			$contatoLinkInstagram=Confing::get('contatoLinkInstagram');

			$depoimento1=Confing::get('depoimento1');
			$depoimento2=Confing::get('depoimento2');

			$agendamento1=Confing::get('agendamento1');
			$agendamento2=Confing::get('agendamento2');
			$agendamentobotao=Confing::get('agendamentobotao');



			$modalimg=Confing::get('modalimg');

			$modal1=Confing::get('modal1');
			$modal2=Confing::get('modal2');
			$modal3=Confing::get('modal3');
			$modal4=Confing::get('modal4');
			$modal5=Confing::get('modal5');
			$modal6=Confing::get('modal6');
			$modal7=Confing::get('modal7');
			$modal8=Confing::get('modal8');
			$modal9=Confing::get('modal9');


			
			$estruturatitulo1=Confing::get('estruturatitulo1');
			$estruturatitulo2=Confing::get('estruturatitulo2');

			$estruturaimagem1=Confing::get('estruturaimagem1');
			$estruturaimagem2=Confing::get('estruturaimagem2');
			$estruturaimagem3=Confing::get('estruturaimagem3');
			$estruturaimagem4=Confing::get('estruturaimagem4');
			$estruturaimagem5=Confing::get('estruturaimagem5');
			$estruturaimagem6=Confing::get('estruturaimagem6');
			$estruturaimagem7=Confing::get('estruturaimagem7');
			$estruturaimagem8=Confing::get('estruturaimagem8');
			$estruturaimagem9=Confing::get('estruturaimagem9');
			$estruturaimagem10=Confing::get('estruturaimagem10');
			$estruturaimagem11=Confing::get('estruturaimagem11');
			$estruturaimagem12=Confing::get('estruturaimagem12');
			$estruturaimagem13=Confing::get('estruturaimagem13');
			$estruturaimagem14=Confing::get('estruturaimagem14');


			return view('controle.en.index', [
				'textoresumo'=>$textoresumo,
				'whatsapp'=>$whatsapp,
				'instagram'=>$instagram,
				'email'=>$email,
				'facebook'=>$facebook,
				'boleto'=>$boleto,
				'logo1'=>$logo1,
				'menu2'=>$menu2,
				'menu3'=>$menu3,
				'menu4'=>$menu4,
				'menu5'=>$menu5,
				'menu6'=>$menu6,
				'menu7'=>$menu7,
				'menu8'=>$menu8,
				'menu9'=>$menu9,



				'slide1'=>$slide1,
				'slide2'=>$slide2,
				'slide3'=>$slide3,
				'slide4'=>$slide4,
				'slide5'=>$slide5,
				'slide6'=>$slide6,
				'slide7'=>$slide7,
				'slide8'=>$slide8,



				'tituloPagina'=>$tituloPagina,
				'tituloPrincipal'=>$tituloPrincipal,

				'servico1img'=>$servico1img,
				'servico2img'=>$servico2img,
				'servico3img'=>$servico3img,
				'servico4img'=>$servico4img,
				'servico5img'=>$servico5img,
				'servico6img'=>$servico6img,
				'servico7img'=>$servico7img,
				'servico8img'=>$servico8img,
				'servico9img'=>$servico9img,
				'servico10img'=>$servico10img,
				'servico11img'=>$servico11img,

				'servico1titulo'=>$servico1titulo,
				'servico2titulo'=>$servico2titulo,
				'servico3titulo'=>$servico3titulo,
				'servico4titulo'=>$servico4titulo,
				'servico5titulo'=>$servico5titulo,
				'servico6titulo'=>$servico6titulo,
				'servico7titulo'=>$servico7titulo,
				'servico8titulo'=>$servico8titulo,
				'servico9titulo'=>$servico9titulo,
				'servico10titulo'=>$servico10titulo,
				'servico11titulo'=>$servico11titulo,

				'servico1descricao'=>$servico1descricao,
				'servico2descricao'=>$servico2descricao,
				'servico3descricao'=>$servico3descricao,
				'servico4descricao'=>$servico4descricao,
				'servico5descricao'=>$servico5descricao,
				'servico6descricao'=>$servico6descricao,
				'servico7descricao'=>$servico7descricao,
				'servico8descricao'=>$servico8descricao,
				'servico9descricao'=>$servico9descricao,
				'servico10descricao'=>$servico10descricao,
				'servico11descricao'=>$servico11descricao,

				'servico1preco'=>$servico1preco,
				'servico2preco'=>$servico2preco,
				'servico3preco'=>$servico3preco,
				'servico4preco'=>$servico4preco,
				'servico5preco'=>$servico5preco,
				'servico6preco'=>$servico6preco,
				'servico7preco'=>$servico7preco,
				'servico8preco'=>$servico8preco,
				'servico9preco'=>$servico9preco,
				'servico10preco'=>$servico10preco,
				'servico11preco'=>$servico11preco,

				'servico1preco2'=>$servico1preco2,
				'servico2preco2'=>$servico2preco2,
				'servico3preco2'=>$servico3preco2,
				'servico4preco2'=>$servico4preco2,
				'servico5preco2'=>$servico5preco2,
				'servico6preco2'=>$servico6preco2,
				'servico7preco2'=>$servico7preco2,
				'servico8preco2'=>$servico8preco2,
				'servico9preco2'=>$servico9preco2,
				'servico10preco2'=>$servico10preco2,
				'servico11preco2'=>$servico11preco2,



				'contatoTituloPagina'=>$contatoTituloPagina,
				'contatoTituloPagina2'=>$contatoTituloPagina2,

				'contatoTituloemail'=>$contatoTituloemail,
				'contatoemail'=>$contatoemail,

				'contatoTituloEndereco'=>$contatoTituloEndereco,
				'contatoSubtTituloEndereco'=>$contatoSubtTituloEndereco,
				
				'contatoTituloTelefone'=>$contatoTituloTelefone,
				'contatoTelefone'=>$contatoTelefone,

				'contatoLinkLinkedin'=>$contatoLinkLinkedin,
				'contatoLinkFacebook'=>$contatoLinkFacebook,
				'contatoLinkInstagram'=>$contatoLinkInstagram,



				'depoimento1'=>$depoimento1,
				'depoimento2'=>$depoimento2,

				'agendamento1'=>$agendamento1,
				'agendamento2'=>$agendamento2,
				'agendamentobotao'=>$agendamentobotao,



				'modalimg'=>$modalimg,

				'modal1'=>$modal1,
				'modal2'=>$modal2,
				'modal3'=>$modal3,
				'modal4'=>$modal4,
				'modal5'=>$modal5,
				'modal6'=>$modal6,
				'modal7'=>$modal7,
				'modal8'=>$modal8,
				'modal9'=>$modal9,

				'estruturatitulo1'=>$estruturatitulo1,
				'estruturatitulo2'=>$estruturatitulo2,

				'estruturaimagem1'=>$estruturaimagem1,
				'estruturaimagem2'=>$estruturaimagem2,
				'estruturaimagem3'=>$estruturaimagem3,
				'estruturaimagem4'=>$estruturaimagem4,
				'estruturaimagem5'=>$estruturaimagem5,
				'estruturaimagem6'=>$estruturaimagem6,
				'estruturaimagem7'=>$estruturaimagem7,
				'estruturaimagem8'=>$estruturaimagem8,
				'estruturaimagem9'=>$estruturaimagem9,
				'estruturaimagem10'=>$estruturaimagem10,
				'estruturaimagem11'=>$estruturaimagem11,
				'estruturaimagem12'=>$estruturaimagem12,
				'estruturaimagem13'=>$estruturaimagem13,
				'estruturaimagem14'=>$estruturaimagem14,
				]);
		}
 
		public function englishbanner(Request $request)
		{
			Confing::atualizar('textoresumo',$request->textoresumo);
			Confing::atualizar('whatsapp',$request->whatsapp);
			Confing::atualizar('instagram',$request->instagram);
			Confing::atualizar('email',$request->email);
			Confing::atualizar('facebook',$request->facebook);
				
			return redirect()->back()->with('status', "Conteúdo atualizado com sucesso");
		}

		public function englishmenu(Request $request)
		{
				if ($request->hasFile('logo1')) 
				{
						$extension = $request->logo1->extension();
						$path = $request->logo1->storeAs('public/images', "logo1.$extension");
						Confing::atualizar('logo1',$path);
				}

				Confing::atualizar('menu2',$request->menu2);
				Confing::atualizar('menu3',$request->menu3);
				Confing::atualizar('menu4',$request->menu4);    
				Confing::atualizar('menu5',$request->menu5);
				Confing::atualizar('menu6',$request->menu6);
				Confing::atualizar('menu7',$request->menu7);
				Confing::atualizar('menu8',$request->menu8);
				Confing::atualizar('menu9',$request->menu9);

				return redirect()->back()->with('status', "Formulário Enviado com sucesso");
		}

		public function englishsobre(Request $request)
		{
			if ($request->hasFile('slide1')) 
			{
				$extension = $request->slide1->extension();
				$path = $request->slide1->storeAs('public/images', "slide1.$extension");
				Confing::atualizar('slide1',$path);
			}
			if ($request->hasFile('slide2')) 
			{
				$extension = $request->slide2->extension();
				$path = $request->slide2->storeAs('public/images', "slide2.$extension");
				Confing::atualizar('slide2',$path);
			}
			if ($request->hasFile('slide3')) 
			{
				$extension = $request->slide3->extension();
				$path = $request->slide3->storeAs('public/images', "slide3.$extension");
				Confing::atualizar('slide3',$path);
			}

			Confing::atualizar('slide4',$request->slide4);
			Confing::atualizar('slide5',$request->slide5);
			Confing::atualizar('slide6',$request->slide6);
			Confing::atualizar('slide7',$request->slide7);
			Confing::atualizar('slide8',$request->slide8);

			return redirect()->back()->with('status', "Conteúdo atualizado com sucesso");
		}

		public function englishservico(Request $request)
		{
				if ($request->hasFile('servico1img')) 
				{
						$extension = $request->servico1img->extension();
						$path = $request->servico1img->storeAs('public/images', "servico1img.$extension");
						Confing::atualizar('servico1img',$path);
				}
				if ($request->hasFile('servico2img')) 
				{
						$extension = $request->servico2img->extension();
						$path = $request->servico2img->storeAs('public/images', "servico2img.$extension");
						Confing::atualizar('servico2img',$path);
				}
				if ($request->hasFile('servico3img')) 
				{
						$extension = $request->servico3img->extension();
						$path = $request->servico3img->storeAs('public/images', "servico3img.$extension");
						Confing::atualizar('servico3img',$path);
				}
				if ($request->hasFile('servico4img')) 
				{
						$extension = $request->servico4img->extension();
						$path = $request->servico4img->storeAs('public/images', "servico4img.$extension");
						Confing::atualizar('servico4img',$path);
				}
				if ($request->hasFile('servico5img')) 
				{
						$extension = $request->servico5img->extension();
						$path = $request->servico5img->storeAs('public/images', "servico5img.$extension");
						Confing::atualizar('servico5img',$path);
				}
				if ($request->hasFile('servico6img')) 
				{
						$extension = $request->servico6img->extension();
						$path = $request->servico6img->storeAs('public/images', "servico6img.$extension");
						Confing::atualizar('servico6img',$path);
				}
				if ($request->hasFile('servico7img')) 
				{
						$extension = $request->servico7img->extension();
						$path = $request->servico7img->storeAs('public/images', "servico7img.$extension");
						Confing::atualizar('servico7img',$path);
				}
				if ($request->hasFile('servico8img')) 
				{
						$extension = $request->servico8img->extension();
						$path = $request->servico8img->storeAs('public/images', "servico8img.$extension");
						Confing::atualizar('servico8img',$path);
				}
				if ($request->hasFile('servico9img')) 
				{
						$extension = $request->servico9img->extension();
						$path = $request->servico9img->storeAs('public/images', "servico9img.$extension");
						Confing::atualizar('servico9img',$path);
				}
				if ($request->hasFile('servico10img')) 
				{
						$extension = $request->servico10img->extension();
						$path = $request->servico10img->storeAs('public/images', "servico10img.$extension");
						Confing::atualizar('servico10img',$path);
				}
				if ($request->hasFile('servico11img')) 
				{
						$extension = $request->servico11img->extension();
						$path = $request->servico11img->storeAs('public/images', "servico11img.$extension");
						Confing::atualizar('servico11img',$path);
				}
				
				Confing::atualizar('tituloPagina',$request->tituloPagina);
				Confing::atualizar('tituloPrincipal',$request->tituloPrincipal);

				Confing::atualizar('servico1titulo',$request->servico1titulo);
				Confing::atualizar('servico2titulo',$request->servico2titulo);
				Confing::atualizar('servico3titulo',$request->servico3titulo);
				Confing::atualizar('servico4titulo',$request->servico4titulo);
				Confing::atualizar('servico5titulo',$request->servico5titulo);
				Confing::atualizar('servico6titulo',$request->servico6titulo);
				Confing::atualizar('servico7titulo',$request->servico7titulo);
				Confing::atualizar('servico8titulo',$request->servico8titulo);
				Confing::atualizar('servico9titulo',$request->servico9titulo);
				Confing::atualizar('servico10titulo',$request->servico10titulo);
				Confing::atualizar('servico11titulo',$request->servico11titulo);

				Confing::atualizar('servico1descricao',$request->servico1descricao);
				Confing::atualizar('servico2descricao',$request->servico2descricao);
				Confing::atualizar('servico3descricao',$request->servico3descricao);
				Confing::atualizar('servico4descricao',$request->servico4descricao);
				Confing::atualizar('servico5descricao',$request->servico5descricao);
				Confing::atualizar('servico6descricao',$request->servico6descricao);
				Confing::atualizar('servico7descricao',$request->servico7descricao);
				Confing::atualizar('servico8descricao',$request->servico8descricao);
				Confing::atualizar('servico9descricao',$request->servico9descricao);
				Confing::atualizar('servico10descricao',$request->servico10descricao);
				Confing::atualizar('servico11descricao',$request->servico11descricao);

				Confing::atualizar('servico1preco',$request->servico1preco);
				Confing::atualizar('servico2preco',$request->servico2preco);
				Confing::atualizar('servico3preco',$request->servico3preco);
				Confing::atualizar('servico4preco',$request->servico4preco);
				Confing::atualizar('servico5preco',$request->servico5preco);
				Confing::atualizar('servico6preco',$request->servico6preco);
				Confing::atualizar('servico7preco',$request->servico7preco);
				Confing::atualizar('servico8preco',$request->servico8preco);
				Confing::atualizar('servico9preco',$request->servico9preco);
				Confing::atualizar('servico10preco',$request->servico10preco);
				Confing::atualizar('servico11preco',$request->servico11preco);

				Confing::atualizar('servico1preco2',$request->servico1preco2);
				Confing::atualizar('servico2preco2',$request->servico2preco2);
				Confing::atualizar('servico3preco2',$request->servico3preco2);
				Confing::atualizar('servico4preco2',$request->servico4preco2);
				Confing::atualizar('servico5preco2',$request->servico5preco2);
				Confing::atualizar('servico6preco2',$request->servico6preco2);
				Confing::atualizar('servico7preco2',$request->servico7preco2);
				Confing::atualizar('servico8preco2',$request->servico8preco2);
				Confing::atualizar('servico9preco2',$request->servico9preco2);
				Confing::atualizar('servico10preco2',$request->servico10preco2);
				Confing::atualizar('servico11preco2',$request->servico11preco2);
		 
				return redirect()->back()->with('status', "Conteúdo atualizado com sucesso");
		}

		public function englishestrutura(Request $request)
		{
				Confing::atualizar('estruturatitulo1',$request->estruturatitulo1);
				Confing::atualizar('estruturatitulo2',$request->estruturatitulo2);

				if ($request->hasFile('estruturaimagem1')) 
				{
						$extension = $request->estruturaimagem1->extension();
						$path = $request->estruturaimagem1->storeAs('public/images', "estruturaimagem1.$extension");
						Confing::atualizar('estruturaimagem1',$path);
				}
				if ($request->hasFile('estruturaimagem2')) 
				{
						$extension = $request->estruturaimagem2->extension();
						$path = $request->estruturaimagem2->storeAs('public/images', "estruturaimagem2.$extension");
						Confing::atualizar('estruturaimagem2',$path);
				}
				if ($request->hasFile('estruturaimagem3')) 
				{
						$extension = $request->estruturaimagem3->extension();
						$path = $request->estruturaimagem3->storeAs('public/images', "estruturaimagem3.$extension");
						Confing::atualizar('estruturaimagem3',$path);
				}
				if ($request->hasFile('estruturaimagem4')) 
				{
						$extension = $request->estruturaimagem4->extension();
						$path = $request->estruturaimagem4->storeAs('public/images', "estruturaimagem4.$extension");
						Confing::atualizar('estruturaimagem4',$path);
				}
				if ($request->hasFile('estruturaimagem5')) 
				{
						$extension = $request->estruturaimagem5->extension();
						$path = $request->estruturaimagem5->storeAs('public/images', "estruturaimagem5.$extension");
						Confing::atualizar('estruturaimagem5',$path);
				}
				if ($request->hasFile('estruturaimagem6')) 
				{
						$extension = $request->estruturaimagem6->extension();
						$path = $request->estruturaimagem6->storeAs('public/images', "estruturaimagem6.$extension");
						Confing::atualizar('estruturaimagem6',$path);
				}
				if ($request->hasFile('estruturaimagem7')) 
				{
						$extension = $request->estruturaimagem7->extension();
						$path = $request->estruturaimagem7->storeAs('public/images', "estruturaimagem7.$extension");
						Confing::atualizar('estruturaimagem7',$path);
				}
				if ($request->hasFile('estruturaimagem8')) 
				{
						$extension = $request->estruturaimagem8->extension();
						$path = $request->estruturaimagem8->storeAs('public/images', "estruturaimagem8.$extension");
						Confing::atualizar('estruturaimagem8',$path);
				}
				if ($request->hasFile('estruturaimagem9')) 
				{
						$extension = $request->estruturaimagem9->extension();
						$path = $request->estruturaimagem9->storeAs('public/images', "estruturaimagem9.$extension");
						Confing::atualizar('estruturaimagem9',$path);
				}
				if ($request->hasFile('estruturaimagem10')) 
				{
						$extension = $request->estruturaimagem10->extension();
						$path = $request->estruturaimagem10->storeAs('public/images', "estruturaimagem10.$extension");
						Confing::atualizar('estruturaimagem10',$path);
				}
				if ($request->hasFile('estruturaimagem11')) 
				{
						$extension = $request->estruturaimagem11->extension();
						$path = $request->estruturaimagem11->storeAs('public/images', "estruturaimagem11.$extension");
						Confing::atualizar('estruturaimagem11',$path);
				}
				if ($request->hasFile('estruturaimagem12')) 
				{
						$extension = $request->estruturaimagem12->extension();
						$path = $request->estruturaimagem12->storeAs('public/images', "estruturaimagem12.$extension");
						Confing::atualizar('estruturaimagem12',$path);
				}
				if ($request->hasFile('estruturaimagem13')) 
				{
						$extension = $request->estruturaimagem13->extension();
						$path = $request->estruturaimagem13->storeAs('public/images', "estruturaimagem13.$extension");
						Confing::atualizar('estruturaimagem13',$path);
				}
				if ($request->hasFile('estruturaimagem14')) 
				{
						$extension = $request->estruturaimagem14->extension();
						$path = $request->estruturaimagem14->storeAs('public/images', "estruturaimagem14.$extension");
						Confing::atualizar('estruturaimagem14',$path);
				}

				return redirect()->back()->with('status', "Conteúdo atualizado com sucesso");
		}

		public function englishcontato(Request $request)
		{
				if ($request->hasFile('menu1')) 
				{
						$extension = $request->menu1->extension();
						$path = $request->menu1->storeAs('public/images', "menu1.$extension");
						Confing::atualizar('menu1',$path);
				}

				Confing::atualizar('contatoTituloPagina',$request->contatoTituloPagina);
				Confing::atualizar('contatoTituloPagina2',$request->contatoTituloPagina2);

				Confing::atualizar('contatoTituloemail',$request->contatoTituloemail);
				Confing::atualizar('contatoemail',$request->contatoemail);

				Confing::atualizar('contatoTituloEndereco',$request->contatoTituloEndereco);
				Confing::atualizar('contatoSubtTituloEndereco',$request->contatoSubtTituloEndereco);

				Confing::atualizar('contatoTituloTelefone',$request->contatoTituloTelefone);
				Confing::atualizar('contatoTelefone',$request->contatoTelefone);

				Confing::atualizar('contatoLinkLinkedin',$request->contatoLinkLinkedin);
				Confing::atualizar('contatoLinkFacebook',$request->contatoLinkFacebook);
				Confing::atualizar('contatoLinkInstagram',$request->contatoLinkInstagram); 

				return redirect()->back()->with('status', "Conteúdo atualizado com sucesso");
		}

		public function englishdepoimentos(Request $request)
		{
				Confing::atualizar('depoimento1',$request->depoimento1);
				Confing::atualizar('depoimento2',$request->depoimento2);

				return redirect()->back()->with('status', "Conteúdo atualizado com sucesso");
		}

		public function englishagendamento(Request $request)
		{
				Confing::atualizar('agendamento1',$request->agendamento1);        
				Confing::atualizar('agendamento2',$request->agendamento2);        
				Confing::atualizar('agendamentobotao',$request->agendamentobotao);        

				return redirect()->back()->with('status', "Conteúdo atualizado com sucesso");
		}

		public function englishmodal(Request $request)
		{
				if ($request->hasFile('modalimg')) 
				{
						$extension = $request->modalimg->extension();
						$path = $request->modalimg->storeAs('public/images', "modalimg.$extension");
						Confing::atualizar('modalimg',$path);
				}       

				Confing::atualizar('modal1',$request->modal1);        
				Confing::atualizar('modal2',$request->modal2);
				Confing::atualizar('modal3',$request->modal3);
				Confing::atualizar('modal4',$request->modal4);
				Confing::atualizar('modal5',$request->modal5);
				Confing::atualizar('modal6',$request->modal6);
				Confing::atualizar('modal7',$request->modal7);
				Confing::atualizar('modal8',$request->modal8);
				Confing::atualizar('modal9',$request->modal9);

				return redirect()->back()->with('status', "Conteúdo atualizado com sucesso");

		}
}