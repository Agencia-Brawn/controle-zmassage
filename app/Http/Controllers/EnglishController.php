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
			$englishtextoresumo=Confing::get('englishtextoresumo');
			$englishwhatsapp=Confing::get('englishwhatsapp');
			$englishinstagram=Confing::get('englishinstagram');
			$englishemail=Confing::get('englishemail');
			$englishfacebook=Confing::get('englishfacebook');
			$englishboleto=Confing::get('englishboleto');
			$englishlogo1=Confing::get('englishlogo1');
			$englishmenu2=Confing::get('englishmenu2');
			$englishmenu3=Confing::get('englishmenu3');
			$englishmenu4=Confing::get('englishmenu4');
			$englishmenu5=Confing::get('englishmenu5');
			$englishmenu6=Confing::get('englishmenu6');
			$englishmenu7=Confing::get('englishmenu7');
			$englishmenu8=Confing::get('englishmenu8');
			$englishmenu9=Confing::get('englishmenu9');
			$englishmenu10=Confing::get('englishmenu10');



			$englishslide1=Confing::get('englishslide1');
			$englishslide2=Confing::get('englishslide2');
			$englishslide3=Confing::get('englishslide3');
			$englishslide4=Confing::get('englishslide4');
			$englishslide5=Confing::get('englishslide5');
			$englishslide6=Confing::get('englishslide6');
			$englishslide7=Confing::get('englishslide7');
			$englishslide8=Confing::get('englishslide8');



			$englishtituloPagina=Confing::get('englishtituloPagina');
			$englishtituloPrincipal=Confing::get('englishtituloPrincipal');

			$englishservico1img=Confing::get('englishservico1img');
			$englishservico2img=Confing::get('englishservico2img');
			$englishservico3img=Confing::get('englishservico3img');
			$englishservico4img=Confing::get('englishservico4img');
			$englishservico5img=Confing::get('englishservico5img');
			$englishservico6img=Confing::get('englishservico6img');
			$englishservico7img=Confing::get('englishservico7img');
			$englishservico8img=Confing::get('englishservico8img');
			$englishservico9img=Confing::get('englishservico9img');
			$englishservico10img=Confing::get('englishservico10img');
			$englishservico11img=Confing::get('englishservico11img');

			$englishservico1titulo=Confing::get('englishservico1titulo');
			$englishservico2titulo=Confing::get('englishservico2titulo');
			$englishservico3titulo=Confing::get('englishservico3titulo');
			$englishservico4titulo=Confing::get('englishservico4titulo');
			$englishservico5titulo=Confing::get('englishservico5titulo');
			$englishservico6titulo=Confing::get('englishservico6titulo');
			$englishservico7titulo=Confing::get('englishservico7titulo');
			$englishservico8titulo=Confing::get('englishservico8titulo');
			$englishservico9titulo=Confing::get('englishservico9titulo');
			$englishservico10titulo=Confing::get('englishservico10titulo');
			$englishservico11titulo=Confing::get('englishservico11titulo');

			$englishservico1descricao=Confing::get('englishservico1descricao');
			$englishservico2descricao=Confing::get('englishservico2descricao');
			$englishservico3descricao=Confing::get('englishservico3descricao');
			$englishservico4descricao=Confing::get('englishservico4descricao');
			$englishservico5descricao=Confing::get('englishservico5descricao');
			$englishservico6descricao=Confing::get('englishservico6descricao');
			$englishservico7descricao=Confing::get('englishservico7descricao');
			$englishservico8descricao=Confing::get('englishservico8descricao');
			$englishservico9descricao=Confing::get('englishservico9descricao');
			$englishservico10descricao=Confing::get('englishservico10descricao');
			$englishservico11descricao=Confing::get('englishservico11descricao');

			$englishservico1preco=Confing::get('englishservico1preco');
			$englishservico2preco=Confing::get('englishservico2preco');
			$englishservico3preco=Confing::get('englishservico3preco');
			$englishservico4preco=Confing::get('englishservico4preco');
			$englishservico5preco=Confing::get('englishservico5preco');
			$englishservico6preco=Confing::get('englishservico6preco');
			$englishservico7preco=Confing::get('englishservico7preco');
			$englishservico8preco=Confing::get('englishservico8preco');
			$englishservico9preco=Confing::get('englishservico9preco');
			$englishservico10preco=Confing::get('englishservico10preco');
			$englishservico11preco=Confing::get('englishservico11preco');

			$englishservico1preco2=Confing::get('englishservico1preco2');
			$englishservico2preco2=Confing::get('englishservico2preco2');
			$englishservico3preco2=Confing::get('englishservico3preco2');
			$englishservico4preco2=Confing::get('englishservico4preco2');
			$englishservico5preco2=Confing::get('englishservico5preco2');
			$englishservico6preco2=Confing::get('englishservico6preco2');
			$englishservico7preco2=Confing::get('englishservico7preco2');
			$englishservico8preco2=Confing::get('englishservico8preco2');
			$englishservico9preco2=Confing::get('englishservico9preco2');
			$englishservico10preco2=Confing::get('englishservico10preco2');
			$englishservico11preco2=Confing::get('englishservico11preco2');



			$englishcontatoTituloPagina=Confing::get('englishcontatoTituloPagina');
			$englishcontatoTituloPagina2=Confing::get('englishcontatoTituloPagina2');
				
			$englishcontatoTituloemail=Confing::get('englishcontatoTituloemail');
			$englishcontatoemail=Confing::get('englishcontatoemail');
				
			$englishcontatoTituloEndereco=Confing::get('englishcontatoTituloEndereco');
			$englishcontatoSubtTituloEndereco=Confing::get('englishcontatoSubtTituloEndereco');
				
			$englishcontatoTituloTelefone=Confing::get('englishcontatoTituloTelefone');
			$englishcontatoTelefone=Confing::get('englishcontatoTelefone');

			$englishcontatoLinkLinkedin=Confing::get('englishcontatoLinkLinkedin');
			$englishcontatoLinkFacebook=Confing::get('englishcontatoLinkFacebook');
			$englishcontatoLinkInstagram=Confing::get('englishcontatoLinkInstagram');

			$englishdepoimento1=Confing::get('englishdepoimento1');
			$englishdepoimento2=Confing::get('englishdepoimento2');

			$englishagendamento1=Confing::get('englishagendamento1');
			$englishagendamento2=Confing::get('englishagendamento2');
			$englishagendamentobotao=Confing::get('englishagendamentobotao');



			$englishmodalimg=Confing::get('englishmodalimg');

			$englishmodal1=Confing::get('englishmodal1');
			$englishmodal2=Confing::get('englishmodal2');
			$englishmodal3=Confing::get('englishmodal3');
			$englishmodal4=Confing::get('englishmodal4');
			$englishmodal5=Confing::get('englishmodal5');
			$englishmodal6=Confing::get('englishmodal6');
			$englishmodal7=Confing::get('englishmodal7');
			$englishmodal8=Confing::get('englishmodal8');
			$englishmodal9=Confing::get('englishmodal9');


			
			$englishestruturatitulo1=Confing::get('englishestruturatitulo1');
			$englishestruturatitulo2=Confing::get('englishestruturatitulo2');

			$englishestruturaimagem1=Confing::get('englishestruturaimagem1');
			$englishestruturaimagem2=Confing::get('englishestruturaimagem2');
			$englishestruturaimagem3=Confing::get('englishestruturaimagem3');
			$englishestruturaimagem4=Confing::get('englishestruturaimagem4');
			$englishestruturaimagem5=Confing::get('englishestruturaimagem5');
			$englishestruturaimagem6=Confing::get('englishestruturaimagem6');
			$englishestruturaimagem7=Confing::get('englishestruturaimagem7');
			$englishestruturaimagem8=Confing::get('englishestruturaimagem8');
			$englishestruturaimagem9=Confing::get('englishestruturaimagem9');
			$englishestruturaimagem10=Confing::get('englishestruturaimagem10');
			$englishestruturaimagem11=Confing::get('englishestruturaimagem11');
			$englishestruturaimagem12=Confing::get('englishestruturaimagem12');
			$englishestruturaimagem13=Confing::get('englishestruturaimagem13');
			$englishestruturaimagem14=Confing::get('englishestruturaimagem14');

			$englishcontainerlgpd=Confing::get('englishcontainerlgpd');
			$englishtitlelgpd=Confing::get('englishtitlelgpd');


			return view('controle.en.index', [
				'englishtextoresumo'=>$englishtextoresumo,
				'englishwhatsapp'=>$englishwhatsapp,
				'englishinstagram'=>$englishinstagram,
				'englishemail'=>$englishemail,
				'englishfacebook'=>$englishfacebook,
				'englishboleto'=>$englishboleto,
				'englishlogo1'=>$englishlogo1,
				'englishmenu2'=>$englishmenu2,
				'englishmenu3'=>$englishmenu3,
				'englishmenu4'=>$englishmenu4,
				'englishmenu5'=>$englishmenu5,
				'englishmenu6'=>$englishmenu6,
				'englishmenu7'=>$englishmenu7,
				'englishmenu8'=>$englishmenu8,
				'englishmenu9'=>$englishmenu9,
				'englishmenu10'=>$englishmenu10,



				'englishslide1'=>$englishslide1,
				'englishslide2'=>$englishslide2,
				'englishslide3'=>$englishslide3,
				'englishslide4'=>$englishslide4,
				'englishslide5'=>$englishslide5,
				'englishslide6'=>$englishslide6,
				'englishslide7'=>$englishslide7,
				'englishslide8'=>$englishslide8,



				'englishtituloPagina'=>$englishtituloPagina,
				'englishtituloPrincipal'=>$englishtituloPrincipal,

				'englishservico1img'=>$englishservico1img,
				'englishservico2img'=>$englishservico2img,
				'englishservico3img'=>$englishservico3img,
				'englishservico4img'=>$englishservico4img,
				'englishservico5img'=>$englishservico5img,
				'englishservico6img'=>$englishservico6img,
				'englishservico7img'=>$englishservico7img,
				'englishservico8img'=>$englishservico8img,
				'englishservico9img'=>$englishservico9img,
				'englishservico10img'=>$englishservico10img,
				'englishservico11img'=>$englishservico11img,

				'englishservico1titulo'=>$englishservico1titulo,
				'englishservico2titulo'=>$englishservico2titulo,
				'englishservico3titulo'=>$englishservico3titulo,
				'englishservico4titulo'=>$englishservico4titulo,
				'englishservico5titulo'=>$englishservico5titulo,
				'englishservico6titulo'=>$englishservico6titulo,
				'englishservico7titulo'=>$englishservico7titulo,
				'englishservico8titulo'=>$englishservico8titulo,
				'englishservico9titulo'=>$englishservico9titulo,
				'englishservico10titulo'=>$englishservico10titulo,
				'englishservico11titulo'=>$englishservico11titulo,

				'englishservico1descricao'=>$englishservico1descricao,
				'englishservico2descricao'=>$englishservico2descricao,
				'englishservico3descricao'=>$englishservico3descricao,
				'englishservico4descricao'=>$englishservico4descricao,
				'englishservico5descricao'=>$englishservico5descricao,
				'englishservico6descricao'=>$englishservico6descricao,
				'englishservico7descricao'=>$englishservico7descricao,
				'englishservico8descricao'=>$englishservico8descricao,
				'englishservico9descricao'=>$englishservico9descricao,
				'englishservico10descricao'=>$englishservico10descricao,
				'englishservico11descricao'=>$englishservico11descricao,

				'englishservico1preco'=>$englishservico1preco,
				'englishservico2preco'=>$englishservico2preco,
				'englishservico3preco'=>$englishservico3preco,
				'englishservico4preco'=>$englishservico4preco,
				'englishservico5preco'=>$englishservico5preco,
				'englishservico6preco'=>$englishservico6preco,
				'englishservico7preco'=>$englishservico7preco,
				'englishservico8preco'=>$englishservico8preco,
				'englishservico9preco'=>$englishservico9preco,
				'englishservico10preco'=>$englishservico10preco,
				'englishservico11preco'=>$englishservico11preco,

				'englishservico1preco2'=>$englishservico1preco2,
				'englishservico2preco2'=>$englishservico2preco2,
				'englishservico3preco2'=>$englishservico3preco2,
				'englishservico4preco2'=>$englishservico4preco2,
				'englishservico5preco2'=>$englishservico5preco2,
				'englishservico6preco2'=>$englishservico6preco2,
				'englishservico7preco2'=>$englishservico7preco2,
				'englishservico8preco2'=>$englishservico8preco2,
				'englishservico9preco2'=>$englishservico9preco2,
				'englishservico10preco2'=>$englishservico10preco2,
				'englishservico11preco2'=>$englishservico11preco2,



				'englishcontatoTituloPagina'=>$englishcontatoTituloPagina,
				'englishcontatoTituloPagina2'=>$englishcontatoTituloPagina2,

				'englishcontatoTituloemail'=>$englishcontatoTituloemail,
				'englishcontatoemail'=>$englishcontatoemail,

				'englishcontatoTituloEndereco'=>$englishcontatoTituloEndereco,
				'englishcontatoSubtTituloEndereco'=>$englishcontatoSubtTituloEndereco,
				
				'englishcontatoTituloTelefone'=>$englishcontatoTituloTelefone,
				'englishcontatoTelefone'=>$englishcontatoTelefone,

				'englishcontatoLinkLinkedin'=>$englishcontatoLinkLinkedin,
				'englishcontatoLinkFacebook'=>$englishcontatoLinkFacebook,
				'englishcontatoLinkInstagram'=>$englishcontatoLinkInstagram,



				'englishdepoimento1'=>$englishdepoimento1,
				'englishdepoimento2'=>$englishdepoimento2,

				'englishagendamento1'=>$englishagendamento1,
				'englishagendamento2'=>$englishagendamento2,
				'englishagendamentobotao'=>$englishagendamentobotao,



				'englishmodalimg'=>$englishmodalimg,

				'englishmodal1'=>$englishmodal1,
				'englishmodal2'=>$englishmodal2,
				'englishmodal3'=>$englishmodal3,
				'englishmodal4'=>$englishmodal4,
				'englishmodal5'=>$englishmodal5,
				'englishmodal6'=>$englishmodal6,
				'englishmodal7'=>$englishmodal7,
				'englishmodal8'=>$englishmodal8,
				'englishmodal9'=>$englishmodal9,

				'englishestruturatitulo1'=>$englishestruturatitulo1,
				'englishestruturatitulo2'=>$englishestruturatitulo2,

				'englishestruturaimagem1'=>$englishestruturaimagem1,
				'englishestruturaimagem2'=>$englishestruturaimagem2,
				'englishestruturaimagem3'=>$englishestruturaimagem3,
				'englishestruturaimagem4'=>$englishestruturaimagem4,
				'englishestruturaimagem5'=>$englishestruturaimagem5,
				'englishestruturaimagem6'=>$englishestruturaimagem6,
				'englishestruturaimagem7'=>$englishestruturaimagem7,
				'englishestruturaimagem8'=>$englishestruturaimagem8,
				'englishestruturaimagem9'=>$englishestruturaimagem9,
				'englishestruturaimagem10'=>$englishestruturaimagem10,
				'englishestruturaimagem11'=>$englishestruturaimagem11,
				'englishestruturaimagem12'=>$englishestruturaimagem12,
				'englishestruturaimagem13'=>$englishestruturaimagem13,
				'englishestruturaimagem14'=>$englishestruturaimagem14,
				
				'englishcontainerlgpd'=>$englishcontainerlgpd,
				'englishtitlelgpd'=>$englishtitlelgpd,
				]);
		}
 
		public function englishbanner(Request $request)
		{
			Confing::atualizar('englishtextoresumo',$request->englishtextoresumo);
			Confing::atualizar('englishwhatsapp',$request->englishwhatsapp);
			Confing::atualizar('englishinstagram',$request->englishinstagram);
			Confing::atualizar('englishemail',$request->englishemail);
			Confing::atualizar('englishfacebook',$request->englishfacebook);
				
			return redirect()->back()->with('status', "Conteúdo atualizado com sucesso");
		}

		public function englishmenu(Request $request)
		{
				if ($request->hasFile('englishlogo1')) 
				{
						$extension = $request->englishlogo1->extension();
						$path = $request->englishlogo1->storeAs('public/images', "englishlogo1.$extension");
						Confing::atualizar('englishlogo1',$path);
				}

				Confing::atualizar('englishmenu2',$request->englishmenu2);
				Confing::atualizar('englishmenu3',$request->englishmenu3);
				Confing::atualizar('englishmenu4',$request->englishmenu4);    
				Confing::atualizar('englishmenu5',$request->englishmenu5);
				Confing::atualizar('englishmenu6',$request->englishmenu6);
				Confing::atualizar('englishmenu7',$request->englishmenu7);
				Confing::atualizar('englishmenu8',$request->englishmenu8);
				Confing::atualizar('englishmenu9',$request->englishmenu9);
				Confing::atualizar('englishmenu10',$request->englishmenu10);

				return redirect()->back()->with('status', "Formulário Enviado com sucesso");
		}

		public function englishsobre(Request $request)
		{
			if ($request->hasFile('englishslide1')) 
			{
				$extension = $request->englishslide1->extension();
				$path = $request->englishslide1->storeAs('public/images', "englishslide1.$extension");
				Confing::atualizar('englishslide1',$path);
			}
			if ($request->hasFile('englishslide2')) 
			{
				$extension = $request->englishslide2->extension();
				$path = $request->englishslide2->storeAs('public/images', "englishslide2.$extension");
				Confing::atualizar('englishslide2',$path);
			}
			if ($request->hasFile('englishslide3')) 
			{
				$extension = $request->englishslide3->extension();
				$path = $request->englishslide3->storeAs('public/images', "englishslide3.$extension");
				Confing::atualizar('englishslide3',$path);
			}

			Confing::atualizar('englishslide4',$request->englishslide4);
			Confing::atualizar('englishslide5',$request->englishslide5);
			Confing::atualizar('englishslide6',$request->englishslide6);
			Confing::atualizar('englishslide7',$request->englishslide7);
			Confing::atualizar('englishslide8',$request->englishslide8);

			Confing::atualizar('englishcontainerlgpd',$request->englishcontainerlgpd);
			Confing::atualizar('englishtitlelgpd',$request->englishtitlelgpd);
			
			return redirect()->back()->with('status', "Conteúdo atualizado com sucesso");
		}

		public function englishservico(Request $request)
		{
				if ($request->hasFile('englishservico1img')) 
				{
						$extension = $request->englishservico1img->extension();
						$path = $request->englishservico1img->storeAs('public/images', "englishservico1img.$extension");
						Confing::atualizar('englishservico1img',$path);
				}
				if ($request->hasFile('englishservico2img')) 
				{
						$extension = $request->englishservico2img->extension();
						$path = $request->englishservico2img->storeAs('public/images', "englishservico2img.$extension");
						Confing::atualizar('englishservico2img',$path);
				}
				if ($request->hasFile('englishservico3img')) 
				{
						$extension = $request->englishservico3img->extension();
						$path = $request->englishservico3img->storeAs('public/images', "englishservico3img.$extension");
						Confing::atualizar('englishservico3img',$path);
				}
				if ($request->hasFile('englishservico4img')) 
				{
						$extension = $request->englishservico4img->extension();
						$path = $request->englishservico4img->storeAs('public/images', "englishservico4img.$extension");
						Confing::atualizar('englishservico4img',$path);
				}
				if ($request->hasFile('englishservico5img')) 
				{
						$extension = $request->englishservico5img->extension();
						$path = $request->englishservico5img->storeAs('public/images', "englishservico5img.$extension");
						Confing::atualizar('englishservico5img',$path);
				}
				if ($request->hasFile('englishservico6img')) 
				{
						$extension = $request->englishservico6img->extension();
						$path = $request->englishservico6img->storeAs('public/images', "englishservico6img.$extension");
						Confing::atualizar('englishservico6img',$path);
				}
				if ($request->hasFile('englishservico7img')) 
				{
						$extension = $request->englishservico7img->extension();
						$path = $request->englishservico7img->storeAs('public/images', "englishservico7img.$extension");
						Confing::atualizar('englishservico7img',$path);
				}
				if ($request->hasFile('englishservico8img')) 
				{
						$extension = $request->englishservico8img->extension();
						$path = $request->englishservico8img->storeAs('public/images', "englishservico8img.$extension");
						Confing::atualizar('englishservico8img',$path);
				}
				if ($request->hasFile('englishservico9img')) 
				{
						$extension = $request->englishservico9img->extension();
						$path = $request->englishservico9img->storeAs('public/images', "englishservico9img.$extension");
						Confing::atualizar('englishservico9img',$path);
				}
				if ($request->hasFile('englishservico10img')) 
				{
						$extension = $request->englishservico10img->extension();
						$path = $request->englishservico10img->storeAs('public/images', "englishservico10img.$extension");
						Confing::atualizar('englishservico10img',$path);
				}
				if ($request->hasFile('englishservico11img')) 
				{
						$extension = $request->englishservico11img->extension();
						$path = $request->englishservico11img->storeAs('public/images', "englishservico11img.$extension");
						Confing::atualizar('englishservico11img',$path);
				}
				
				Confing::atualizar('englishtituloPagina',$request->englishtituloPagina);
				Confing::atualizar('englishtituloPrincipal',$request->englishtituloPrincipal);

				Confing::atualizar('englishservico1titulo',$request->englishservico1titulo);
				Confing::atualizar('englishservico2titulo',$request->englishservico2titulo);
				Confing::atualizar('englishservico3titulo',$request->englishservico3titulo);
				Confing::atualizar('englishservico4titulo',$request->englishservico4titulo);
				Confing::atualizar('englishservico5titulo',$request->englishservico5titulo);
				Confing::atualizar('englishservico6titulo',$request->englishservico6titulo);
				Confing::atualizar('englishservico7titulo',$request->englishservico7titulo);
				Confing::atualizar('englishservico8titulo',$request->englishservico8titulo);
				Confing::atualizar('englishservico9titulo',$request->englishservico9titulo);
				Confing::atualizar('englishservico10titulo',$request->englishservico10titulo);
				Confing::atualizar('englishservico11titulo',$request->englishservico11titulo);

				Confing::atualizar('englishservico1descricao',$request->englishservico1descricao);
				Confing::atualizar('englishservico2descricao',$request->englishservico2descricao);
				Confing::atualizar('englishservico3descricao',$request->englishservico3descricao);
				Confing::atualizar('englishservico4descricao',$request->englishservico4descricao);
				Confing::atualizar('englishservico5descricao',$request->englishservico5descricao);
				Confing::atualizar('englishservico6descricao',$request->englishservico6descricao);
				Confing::atualizar('englishservico7descricao',$request->englishservico7descricao);
				Confing::atualizar('englishservico8descricao',$request->englishservico8descricao);
				Confing::atualizar('englishservico9descricao',$request->englishservico9descricao);
				Confing::atualizar('englishservico10descricao',$request->englishservico10descricao);
				Confing::atualizar('englishservico11descricao',$request->englishservico11descricao);

				Confing::atualizar('englishservico1preco',$request->englishservico1preco);
				Confing::atualizar('englishservico2preco',$request->englishservico2preco);
				Confing::atualizar('englishservico3preco',$request->englishservico3preco);
				Confing::atualizar('englishservico4preco',$request->englishservico4preco);
				Confing::atualizar('englishservico5preco',$request->englishservico5preco);
				Confing::atualizar('englishservico6preco',$request->englishservico6preco);
				Confing::atualizar('englishservico7preco',$request->englishservico7preco);
				Confing::atualizar('englishservico8preco',$request->englishservico8preco);
				Confing::atualizar('englishservico9preco',$request->englishservico9preco);
				Confing::atualizar('englishservico10preco',$request->englishservico10preco);
				Confing::atualizar('englishservico11preco',$request->englishservico11preco);

				Confing::atualizar('englishservico1preco2',$request->englishservico1preco2);
				Confing::atualizar('englishservico2preco2',$request->englishservico2preco2);
				Confing::atualizar('englishservico3preco2',$request->englishservico3preco2);
				Confing::atualizar('englishservico4preco2',$request->englishservico4preco2);
				Confing::atualizar('englishservico5preco2',$request->englishservico5preco2);
				Confing::atualizar('englishservico6preco2',$request->englishservico6preco2);
				Confing::atualizar('englishservico7preco2',$request->englishservico7preco2);
				Confing::atualizar('englishservico8preco2',$request->englishservico8preco2);
				Confing::atualizar('englishservico9preco2',$request->englishservico9preco2);
				Confing::atualizar('englishservico10preco2',$request->englishservico10preco2);
				Confing::atualizar('englishservico11preco2',$request->englishservico11preco2);
		 
				return redirect()->back()->with('status', "Conteúdo atualizado com sucesso");
		}

		public function englishestrutura(Request $request)
		{
				Confing::atualizar('englishestruturatitulo1',$request->englishestruturatitulo1);
				Confing::atualizar('englishestruturatitulo2',$request->englishestruturatitulo2);

				if ($request->hasFile('englishestruturaimagem1')) 
				{
						$extension = $request->englishestruturaimagem1->extension();
						$path = $request->englishestruturaimagem1->storeAs('public/images', "englishestruturaimagem1.$extension");
						Confing::atualizar('englishestruturaimagem1',$path);
				}
				if ($request->hasFile('englishestruturaimagem2')) 
				{
						$extension = $request->englishestruturaimagem2->extension();
						$path = $request->englishestruturaimagem2->storeAs('public/images', "englishestruturaimagem2.$extension");
						Confing::atualizar('englishestruturaimagem2',$path);
				}
				if ($request->hasFile('englishestruturaimagem3')) 
				{
						$extension = $request->englishestruturaimagem3->extension();
						$path = $request->englishestruturaimagem3->storeAs('public/images', "englishestruturaimagem3.$extension");
						Confing::atualizar('englishestruturaimagem3',$path);
				}
				if ($request->hasFile('englishestruturaimagem4')) 
				{
						$extension = $request->englishestruturaimagem4->extension();
						$path = $request->englishestruturaimagem4->storeAs('public/images', "englishestruturaimagem4.$extension");
						Confing::atualizar('englishestruturaimagem4',$path);
				}
				if ($request->hasFile('englishestruturaimagem5')) 
				{
						$extension = $request->englishestruturaimagem5->extension();
						$path = $request->englishestruturaimagem5->storeAs('public/images', "englishestruturaimagem5.$extension");
						Confing::atualizar('englishestruturaimagem5',$path);
				}
				if ($request->hasFile('englishestruturaimagem6')) 
				{
						$extension = $request->englishestruturaimagem6->extension();
						$path = $request->englishestruturaimagem6->storeAs('public/images', "englishestruturaimagem6.$extension");
						Confing::atualizar('englishestruturaimagem6',$path);
				}
				if ($request->hasFile('englishestruturaimagem7')) 
				{
						$extension = $request->englishestruturaimagem7->extension();
						$path = $request->englishestruturaimagem7->storeAs('public/images', "englishestruturaimagem7.$extension");
						Confing::atualizar('englishestruturaimagem7',$path);
				}
				if ($request->hasFile('englishestruturaimagem8')) 
				{
						$extension = $request->englishestruturaimagem8->extension();
						$path = $request->englishestruturaimagem8->storeAs('public/images', "englishestruturaimagem8.$extension");
						Confing::atualizar('englishestruturaimagem8',$path);
				}
				if ($request->hasFile('englishestruturaimagem9')) 
				{
						$extension = $request->englishestruturaimagem9->extension();
						$path = $request->englishestruturaimagem9->storeAs('public/images', "englishestruturaimagem9.$extension");
						Confing::atualizar('englishestruturaimagem9',$path);
				}
				if ($request->hasFile('englishestruturaimagem10')) 
				{
						$extension = $request->englishestruturaimagem10->extension();
						$path = $request->englishestruturaimagem10->storeAs('public/images', "englishestruturaimagem10.$extension");
						Confing::atualizar('englishestruturaimagem10',$path);
				}
				if ($request->hasFile('englishestruturaimagem11')) 
				{
						$extension = $request->englishestruturaimagem11->extension();
						$path = $request->englishestruturaimagem11->storeAs('public/images', "englishestruturaimagem11.$extension");
						Confing::atualizar('englishestruturaimagem11',$path);
				}
				if ($request->hasFile('englishestruturaimagem12')) 
				{
						$extension = $request->englishestruturaimagem12->extension();
						$path = $request->englishestruturaimagem12->storeAs('public/images', "englishestruturaimagem12.$extension");
						Confing::atualizar('englishestruturaimagem12',$path);
				}
				if ($request->hasFile('englishestruturaimagem13')) 
				{
						$extension = $request->englishestruturaimagem13->extension();
						$path = $request->englishestruturaimagem13->storeAs('public/images', "englishestruturaimagem13.$extension");
						Confing::atualizar('englishestruturaimagem13',$path);
				}
				if ($request->hasFile('englishestruturaimagem14')) 
				{
						$extension = $request->englishestruturaimagem14->extension();
						$path = $request->englishestruturaimagem14->storeAs('public/images', "englishestruturaimagem14.$extension");
						Confing::atualizar('englishestruturaimagem14',$path);
				}

				return redirect()->back()->with('status', "Conteúdo atualizado com sucesso");
		}

		public function englishcontato(Request $request)
		{
				if ($request->hasFile('englishmenu1')) 
				{
						$extension = $request->englishmenu1->extension();
						$path = $request->englishmenu1->storeAs('public/images', "englishmenu1.$extension");
						Confing::atualizar('englishmenu1',$path);
				}

				Confing::atualizar('englishcontatoTituloPagina',$request->englishcontatoTituloPagina);
				Confing::atualizar('englishcontatoTituloPagina2',$request->englishcontatoTituloPagina2);

				Confing::atualizar('englishcontatoTituloemail',$request->englishcontatoTituloemail);
				Confing::atualizar('englishcontatoemail',$request->englishcontatoemail);

				Confing::atualizar('englishcontatoTituloEndereco',$request->englishcontatoTituloEndereco);
				Confing::atualizar('englishcontatoSubtTituloEndereco',$request->englishcontatoSubtTituloEndereco);

				Confing::atualizar('englishcontatoTituloTelefone',$request->englishcontatoTituloTelefone);
				Confing::atualizar('englishcontatoTelefone',$request->englishcontatoTelefone);

				Confing::atualizar('englishcontatoLinkLinkedin',$request->englishcontatoLinkLinkedin);
				Confing::atualizar('englishcontatoLinkFacebook',$request->englishcontatoLinkFacebook);
				Confing::atualizar('englishcontatoLinkInstagram',$request->englishcontatoLinkInstagram); 

				return redirect()->back()->with('status', "Conteúdo atualizado com sucesso");
		}

		public function englishdepoimentos(Request $request)
		{
				Confing::atualizar('englishdepoimento1',$request->englishdepoimento1);
				Confing::atualizar('englishdepoimento2',$request->englishdepoimento2);

				return redirect()->back()->with('status', "Conteúdo atualizado com sucesso");
		}

		public function englishagendamento(Request $request)
		{
				Confing::atualizar('englishagendamento1',$request->englishagendamento1);        
				Confing::atualizar('englishagendamento2',$request->englishagendamento2);        
				Confing::atualizar('englishagendamentobotao',$request->englishagendamentobotao);        

				return redirect()->back()->with('status', "Conteúdo atualizado com sucesso");
		}

		public function englishmodal(Request $request)
		{
				if ($request->hasFile('englishmodalimg')) 
				{
						$extension = $request->englishmodalimg->extension();
						$path = $request->englishmodalimg->storeAs('public/images', "englishmodalimg.$extension");
						Confing::atualizar('englishmodalimg',$path);
				}       

				Confing::atualizar('englishmodal1',$request->englishmodal1);        
				Confing::atualizar('englishmodal2',$request->englishmodal2);
				Confing::atualizar('englishmodal3',$request->englishmodal3);
				Confing::atualizar('englishmodal4',$request->englishmodal4);
				Confing::atualizar('englishmodal5',$request->englishmodal5);
				Confing::atualizar('englishmodal6',$request->englishmodal6);
				Confing::atualizar('englishmodal7',$request->englishmodal7);
				Confing::atualizar('englishmodal8',$request->englishmodal8);
				Confing::atualizar('englishmodal9',$request->englishmodal9);

				return redirect()->back()->with('status', "Conteúdo atualizado com sucesso");

		}
}