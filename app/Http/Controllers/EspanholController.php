<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Confing;

class EspanholController extends Controller
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
			$espanholtextoresumo=Confing::get('espanholtextoresumo');
			$espanholwhatsapp=Confing::get('espanholwhatsapp');
			$espanholinstagram=Confing::get('espanholinstagram');
			$espanholemail=Confing::get('espanholemail');
			$espanholfacebook=Confing::get('espanholfacebook');
			$espanholboleto=Confing::get('espanholboleto');
			$espanhollogo1=Confing::get('espanhollogo1');
			$espanholmenu2=Confing::get('espanholmenu2');
			$espanholmenu3=Confing::get('espanholmenu3');
			$espanholmenu4=Confing::get('espanholmenu4');
			$espanholmenu5=Confing::get('espanholmenu5');
			$espanholmenu6=Confing::get('espanholmenu6');
			$espanholmenu7=Confing::get('espanholmenu7');
			$espanholmenu8=Confing::get('espanholmenu8');
			$espanholmenu9=Confing::get('espanholmenu9');
			$espanholmenu10=Confing::get('espanholmenu10');



			$espanholslide1=Confing::get('espanholslide1');
			$espanholslide2=Confing::get('espanholslide2');
			$espanholslide3=Confing::get('espanholslide3');
			$espanholslide4=Confing::get('espanholslide4');
			$espanholslide5=Confing::get('espanholslide5');
			$espanholslide6=Confing::get('espanholslide6');
			$espanholslide7=Confing::get('espanholslide7');
			$espanholslide8=Confing::get('espanholslide8');



			$espanholtituloPagina=Confing::get('espanholtituloPagina');
			$espanholtituloPrincipal=Confing::get('espanholtituloPrincipal');

			$espanholservico1img=Confing::get('espanholservico1img');
			$espanholservico2img=Confing::get('espanholservico2img');
			$espanholservico3img=Confing::get('espanholservico3img');
			$espanholservico4img=Confing::get('espanholservico4img');
			$espanholservico5img=Confing::get('espanholservico5img');
			$espanholservico6img=Confing::get('espanholservico6img');
			$espanholservico7img=Confing::get('espanholservico7img');
			$espanholservico8img=Confing::get('espanholservico8img');
			$espanholservico9img=Confing::get('espanholservico9img');
			$espanholservico10img=Confing::get('espanholservico10img');
			$espanholservico11img=Confing::get('espanholservico11img');

			$espanholservico1titulo=Confing::get('espanholservico1titulo');
			$espanholservico2titulo=Confing::get('espanholservico2titulo');
			$espanholservico3titulo=Confing::get('espanholservico3titulo');
			$espanholservico4titulo=Confing::get('espanholservico4titulo');
			$espanholservico5titulo=Confing::get('espanholservico5titulo');
			$espanholservico6titulo=Confing::get('espanholservico6titulo');
			$espanholservico7titulo=Confing::get('espanholservico7titulo');
			$espanholservico8titulo=Confing::get('espanholservico8titulo');
			$espanholservico9titulo=Confing::get('espanholservico9titulo');
			$espanholservico10titulo=Confing::get('espanholservico10titulo');
			$espanholservico11titulo=Confing::get('espanholservico11titulo');

			$espanholservico1descricao=Confing::get('espanholservico1descricao');
			$espanholservico2descricao=Confing::get('espanholservico2descricao');
			$espanholservico3descricao=Confing::get('espanholservico3descricao');
			$espanholservico4descricao=Confing::get('espanholservico4descricao');
			$espanholservico5descricao=Confing::get('espanholservico5descricao');
			$espanholservico6descricao=Confing::get('espanholservico6descricao');
			$espanholservico7descricao=Confing::get('espanholservico7descricao');
			$espanholservico8descricao=Confing::get('espanholservico8descricao');
			$espanholservico9descricao=Confing::get('espanholservico9descricao');
			$espanholservico10descricao=Confing::get('espanholservico10descricao');
			$espanholservico11descricao=Confing::get('espanholservico11descricao');

			$espanholservico1preco=Confing::get('espanholservico1preco');
			$espanholservico2preco=Confing::get('espanholservico2preco');
			$espanholservico3preco=Confing::get('espanholservico3preco');
			$espanholservico4preco=Confing::get('espanholservico4preco');
			$espanholservico5preco=Confing::get('espanholservico5preco');
			$espanholservico6preco=Confing::get('espanholservico6preco');
			$espanholservico7preco=Confing::get('espanholservico7preco');
			$espanholservico8preco=Confing::get('espanholservico8preco');
			$espanholservico9preco=Confing::get('espanholservico9preco');
			$espanholservico10preco=Confing::get('espanholservico10preco');
			$espanholservico11preco=Confing::get('espanholservico11preco');

			$espanholservico1preco2=Confing::get('espanholservico1preco2');
			$espanholservico2preco2=Confing::get('espanholservico2preco2');
			$espanholservico3preco2=Confing::get('espanholservico3preco2');
			$espanholservico4preco2=Confing::get('espanholservico4preco2');
			$espanholservico5preco2=Confing::get('espanholservico5preco2');
			$espanholservico6preco2=Confing::get('espanholservico6preco2');
			$espanholservico7preco2=Confing::get('espanholservico7preco2');
			$espanholservico8preco2=Confing::get('espanholservico8preco2');
			$espanholservico9preco2=Confing::get('espanholservico9preco2');
			$espanholservico10preco2=Confing::get('espanholservico10preco2');
			$espanholservico11preco2=Confing::get('espanholservico11preco2');



			$espanholcontatoTituloPagina=Confing::get('espanholcontatoTituloPagina');
			$espanholcontatoTituloPagina2=Confing::get('espanholcontatoTituloPagina2');
				
			$espanholcontatoTituloemail=Confing::get('espanholcontatoTituloemail');
			$espanholcontatoemail=Confing::get('espanholcontatoemail');
				
			$espanholcontatoTituloEndereco=Confing::get('espanholcontatoTituloEndereco');
			$espanholcontatoSubtTituloEndereco=Confing::get('espanholcontatoSubtTituloEndereco');
				
			$espanholcontatoTituloTelefone=Confing::get('espanholcontatoTituloTelefone');
			$espanholcontatoTelefone=Confing::get('espanholcontatoTelefone');

			$espanholcontatoLinkLinkedin=Confing::get('espanholcontatoLinkLinkedin');
			$espanholcontatoLinkFacebook=Confing::get('espanholcontatoLinkFacebook');
			$espanholcontatoLinkInstagram=Confing::get('espanholcontatoLinkInstagram');

			$espanholdepoimento1=Confing::get('espanholdepoimento1');
			$espanholdepoimento2=Confing::get('espanholdepoimento2');

			$espanholagendamento1=Confing::get('espanholagendamento1');
			$espanholagendamento2=Confing::get('espanholagendamento2');
			$espanholagendamentobotao=Confing::get('espanholagendamentobotao');



			$espanholmodalimg=Confing::get('espanholmodalimg');

			$espanholmodal1=Confing::get('espanholmodal1');
			$espanholmodal2=Confing::get('espanholmodal2');
			$espanholmodal3=Confing::get('espanholmodal3');
			$espanholmodal4=Confing::get('espanholmodal4');
			$espanholmodal5=Confing::get('espanholmodal5');
			$espanholmodal6=Confing::get('espanholmodal6');
			$espanholmodal7=Confing::get('espanholmodal7');
			$espanholmodal8=Confing::get('espanholmodal8');
			$espanholmodal9=Confing::get('espanholmodal9');


			
			$espanholestruturatitulo1=Confing::get('espanholestruturatitulo1');
			$espanholestruturatitulo2=Confing::get('espanholestruturatitulo2');

			$espanholestruturaimagem1=Confing::get('espanholestruturaimagem1');
			$espanholestruturaimagem2=Confing::get('espanholestruturaimagem2');
			$espanholestruturaimagem3=Confing::get('espanholestruturaimagem3');
			$espanholestruturaimagem4=Confing::get('espanholestruturaimagem4');
			$espanholestruturaimagem5=Confing::get('espanholestruturaimagem5');
			$espanholestruturaimagem6=Confing::get('espanholestruturaimagem6');
			$espanholestruturaimagem7=Confing::get('espanholestruturaimagem7');
			$espanholestruturaimagem8=Confing::get('espanholestruturaimagem8');
			$espanholestruturaimagem9=Confing::get('espanholestruturaimagem9');
			$espanholestruturaimagem10=Confing::get('espanholestruturaimagem10');
			$espanholestruturaimagem11=Confing::get('espanholestruturaimagem11');
			$espanholestruturaimagem12=Confing::get('espanholestruturaimagem12');
			$espanholestruturaimagem13=Confing::get('espanholestruturaimagem13');
			$espanholestruturaimagem14=Confing::get('espanholestruturaimagem14');

			$espanholcontainerlgpd=Confing::get('espanholcontainerlgpd');
			$espanholtitlelgpd=Confing::get('espanholtitlelgpd');


			return view('controle.es.index', [
				'espanholtextoresumo'=>$espanholtextoresumo,
				'espanholwhatsapp'=>$espanholwhatsapp,
				'espanholinstagram'=>$espanholinstagram,
				'espanholemail'=>$espanholemail,
				'espanholfacebook'=>$espanholfacebook,
				'espanholboleto'=>$espanholboleto,
				'espanhollogo1'=>$espanhollogo1,
				'espanholmenu2'=>$espanholmenu2,
				'espanholmenu3'=>$espanholmenu3,
				'espanholmenu4'=>$espanholmenu4,
				'espanholmenu5'=>$espanholmenu5,
				'espanholmenu6'=>$espanholmenu6,
				'espanholmenu7'=>$espanholmenu7,
				'espanholmenu8'=>$espanholmenu8,
				'espanholmenu9'=>$espanholmenu9,
				'espanholmenu10'=>$espanholmenu10,



				'espanholslide1'=>$espanholslide1,
				'espanholslide2'=>$espanholslide2,
				'espanholslide3'=>$espanholslide3,
				'espanholslide4'=>$espanholslide4,
				'espanholslide5'=>$espanholslide5,
				'espanholslide6'=>$espanholslide6,
				'espanholslide7'=>$espanholslide7,
				'espanholslide8'=>$espanholslide8,



				'espanholtituloPagina'=>$espanholtituloPagina,
				'espanholtituloPrincipal'=>$espanholtituloPrincipal,

				'espanholservico1img'=>$espanholservico1img,
				'espanholservico2img'=>$espanholservico2img,
				'espanholservico3img'=>$espanholservico3img,
				'espanholservico4img'=>$espanholservico4img,
				'espanholservico5img'=>$espanholservico5img,
				'espanholservico6img'=>$espanholservico6img,
				'espanholservico7img'=>$espanholservico7img,
				'espanholservico8img'=>$espanholservico8img,
				'espanholservico9img'=>$espanholservico9img,
				'espanholservico10img'=>$espanholservico10img,
				'espanholservico11img'=>$espanholservico11img,

				'espanholservico1titulo'=>$espanholservico1titulo,
				'espanholservico2titulo'=>$espanholservico2titulo,
				'espanholservico3titulo'=>$espanholservico3titulo,
				'espanholservico4titulo'=>$espanholservico4titulo,
				'espanholservico5titulo'=>$espanholservico5titulo,
				'espanholservico6titulo'=>$espanholservico6titulo,
				'espanholservico7titulo'=>$espanholservico7titulo,
				'espanholservico8titulo'=>$espanholservico8titulo,
				'espanholservico9titulo'=>$espanholservico9titulo,
				'espanholservico10titulo'=>$espanholservico10titulo,
				'espanholservico11titulo'=>$espanholservico11titulo,

				'espanholservico1descricao'=>$espanholservico1descricao,
				'espanholservico2descricao'=>$espanholservico2descricao,
				'espanholservico3descricao'=>$espanholservico3descricao,
				'espanholservico4descricao'=>$espanholservico4descricao,
				'espanholservico5descricao'=>$espanholservico5descricao,
				'espanholservico6descricao'=>$espanholservico6descricao,
				'espanholservico7descricao'=>$espanholservico7descricao,
				'espanholservico8descricao'=>$espanholservico8descricao,
				'espanholservico9descricao'=>$espanholservico9descricao,
				'espanholservico10descricao'=>$espanholservico10descricao,
				'espanholservico11descricao'=>$espanholservico11descricao,

				'espanholservico1preco'=>$espanholservico1preco,
				'espanholservico2preco'=>$espanholservico2preco,
				'espanholservico3preco'=>$espanholservico3preco,
				'espanholservico4preco'=>$espanholservico4preco,
				'espanholservico5preco'=>$espanholservico5preco,
				'espanholservico6preco'=>$espanholservico6preco,
				'espanholservico7preco'=>$espanholservico7preco,
				'espanholservico8preco'=>$espanholservico8preco,
				'espanholservico9preco'=>$espanholservico9preco,
				'espanholservico10preco'=>$espanholservico10preco,
				'espanholservico11preco'=>$espanholservico11preco,

				'espanholservico1preco2'=>$espanholservico1preco2,
				'espanholservico2preco2'=>$espanholservico2preco2,
				'espanholservico3preco2'=>$espanholservico3preco2,
				'espanholservico4preco2'=>$espanholservico4preco2,
				'espanholservico5preco2'=>$espanholservico5preco2,
				'espanholservico6preco2'=>$espanholservico6preco2,
				'espanholservico7preco2'=>$espanholservico7preco2,
				'espanholservico8preco2'=>$espanholservico8preco2,
				'espanholservico9preco2'=>$espanholservico9preco2,
				'espanholservico10preco2'=>$espanholservico10preco2,
				'espanholservico11preco2'=>$espanholservico11preco2,



				'espanholcontatoTituloPagina'=>$espanholcontatoTituloPagina,
				'espanholcontatoTituloPagina2'=>$espanholcontatoTituloPagina2,

				'espanholcontatoTituloemail'=>$espanholcontatoTituloemail,
				'espanholcontatoemail'=>$espanholcontatoemail,

				'espanholcontatoTituloEndereco'=>$espanholcontatoTituloEndereco,
				'espanholcontatoSubtTituloEndereco'=>$espanholcontatoSubtTituloEndereco,
				
				'espanholcontatoTituloTelefone'=>$espanholcontatoTituloTelefone,
				'espanholcontatoTelefone'=>$espanholcontatoTelefone,

				'espanholcontatoLinkLinkedin'=>$espanholcontatoLinkLinkedin,
				'espanholcontatoLinkFacebook'=>$espanholcontatoLinkFacebook,
				'espanholcontatoLinkInstagram'=>$espanholcontatoLinkInstagram,



				'espanholdepoimento1'=>$espanholdepoimento1,
				'espanholdepoimento2'=>$espanholdepoimento2,

				'espanholagendamento1'=>$espanholagendamento1,
				'espanholagendamento2'=>$espanholagendamento2,
				'espanholagendamentobotao'=>$espanholagendamentobotao,



				'espanholmodalimg'=>$espanholmodalimg,

				'espanholmodal1'=>$espanholmodal1,
				'espanholmodal2'=>$espanholmodal2,
				'espanholmodal3'=>$espanholmodal3,
				'espanholmodal4'=>$espanholmodal4,
				'espanholmodal5'=>$espanholmodal5,
				'espanholmodal6'=>$espanholmodal6,
				'espanholmodal7'=>$espanholmodal7,
				'espanholmodal8'=>$espanholmodal8,
				'espanholmodal9'=>$espanholmodal9,

				'espanholestruturatitulo1'=>$espanholestruturatitulo1,
				'espanholestruturatitulo2'=>$espanholestruturatitulo2,

				'espanholestruturaimagem1'=>$espanholestruturaimagem1,
				'espanholestruturaimagem2'=>$espanholestruturaimagem2,
				'espanholestruturaimagem3'=>$espanholestruturaimagem3,
				'espanholestruturaimagem4'=>$espanholestruturaimagem4,
				'espanholestruturaimagem5'=>$espanholestruturaimagem5,
				'espanholestruturaimagem6'=>$espanholestruturaimagem6,
				'espanholestruturaimagem7'=>$espanholestruturaimagem7,
				'espanholestruturaimagem8'=>$espanholestruturaimagem8,
				'espanholestruturaimagem9'=>$espanholestruturaimagem9,
				'espanholestruturaimagem10'=>$espanholestruturaimagem10,
				'espanholestruturaimagem11'=>$espanholestruturaimagem11,
				'espanholestruturaimagem12'=>$espanholestruturaimagem12,
				'espanholestruturaimagem13'=>$espanholestruturaimagem13,
				'espanholestruturaimagem14'=>$espanholestruturaimagem14,


				'espanholcontainerlgpd'=>$espanholcontainerlgpd,
				'espanholtitlelgpd'=>$espanholtitlelgpd,
				]);
		}
 
		public function espanholbanner(Request $request)
		{
			Confing::atualizar('espanholtextoresumo',$request->espanholtextoresumo);
			Confing::atualizar('espanholwhatsapp',$request->espanholwhatsapp);
			Confing::atualizar('espanholinstagram',$request->espanholinstagram);
			Confing::atualizar('espanholemail',$request->espanholemail);
			Confing::atualizar('espanholfacebook',$request->espanholfacebook);
				
			return redirect()->back()->with('status', "Conteúdo atualizado com sucesso");
		}

		public function espanholmenu(Request $request)
		{
				if ($request->hasFile('espanhollogo1')) 
				{
						$extension = $request->espanhollogo1->extension();
						$path = $request->espanhollogo1->storeAs('public/images', "espanhollogo1.$extension");
						Confing::atualizar('espanhollogo1',$path);
				}

				Confing::atualizar('espanholmenu2',$request->espanholmenu2);
				Confing::atualizar('espanholmenu3',$request->espanholmenu3);
				Confing::atualizar('espanholmenu4',$request->espanholmenu4);    
				Confing::atualizar('espanholmenu5',$request->espanholmenu5);
				Confing::atualizar('espanholmenu6',$request->espanholmenu6);
				Confing::atualizar('espanholmenu7',$request->espanholmenu7);
				Confing::atualizar('espanholmenu8',$request->espanholmenu8);
				Confing::atualizar('espanholmenu9',$request->espanholmenu9);
				Confing::atualizar('espanholmenu10',$request->espanholmenu10);

				return redirect()->back()->with('status', "Formulário Enviado com sucesso");
		}

		public function espanholsobre(Request $request)
		{
			if ($request->hasFile('espanholslide1')) 
			{
				$extension = $request->espanholslide1->extension();
				$path = $request->espanholslide1->storeAs('public/images', "espanholslide1.$extension");
				Confing::atualizar('espanholslide1',$path);
			}
			if ($request->hasFile('espanholslide2')) 
			{
				$extension = $request->espanholslide2->extension();
				$path = $request->espanholslide2->storeAs('public/images', "espanholslide2.$extension");
				Confing::atualizar('espanholslide2',$path);
			}
			if ($request->hasFile('espanholslide3')) 
			{
				$extension = $request->espanholslide3->extension();
				$path = $request->espanholslide3->storeAs('public/images', "espanholslide3.$extension");
				Confing::atualizar('espanholslide3',$path);
			}

			Confing::atualizar('espanholslide4',$request->espanholslide4);
			Confing::atualizar('espanholslide5',$request->espanholslide5);
			Confing::atualizar('espanholslide6',$request->espanholslide6);
			Confing::atualizar('espanholslide7',$request->espanholslide7);
			Confing::atualizar('espanholslide8',$request->espanholslide8);

			Confing::atualizar('espanholcontainerlgpd',$request->espanholcontainerlgpd);
			Confing::atualizar('espanholtitlelgpd',$request->espanholtitlelgpd);

			return redirect()->back()->with('status', "Conteúdo atualizado com sucesso");
		}

		public function espanholservico(Request $request)
		{
			$pattern = "/(?:https?:\/\/)?(?:www\.)?(?:youtube\.com\/(?:[^\/\n\s]+\/\S+\/|(?:v|e(?:mbed)?)\/|\S*?[?&]v=)|youtu\.be\/)([a-zA-Z0-9_-]{11})/";

				if ($request->hasFile('espanholservico1img')) 
				{
						$extension = $request->espanholservico1img->extension();
						$path = $request->espanholservico1img->storeAs('public/images', "espanholservico1img.$extension");
						Confing::atualizar('espanholservico1img',$path);
				}elseif (preg_match($pattern, $request->espanholservico1img, $matches)) {
					$id = "embed".$matches[1];
					Confing::atualizar('espanholservico1img',$id);
				}

				if ($request->hasFile('espanholservico2img')) 
				{
						$extension = $request->espanholservico2img->extension();
						$path = $request->espanholservico2img->storeAs('public/images', "espanholservico2img.$extension");
						Confing::atualizar('espanholservico2img',$path);
				}elseif (preg_match($pattern, $request->espanholservico2img, $matches)) {
					$id = "embed".$matches[1];
					Confing::atualizar('espanholservico2img',$id);
				}

				if ($request->hasFile('espanholservico3img')) 
				{
						$extension = $request->espanholservico3img->extension();
						$path = $request->espanholservico3img->storeAs('public/images', "espanholservico3img.$extension");
						Confing::atualizar('espanholservico3img',$path);
				}elseif (preg_match($pattern, $request->espanholservico3img, $matches)) {
					$id = "embed".$matches[1];
					Confing::atualizar('espanholservico3img',$id);
				}

				if ($request->hasFile('espanholservico4img')) 
				{
						$extension = $request->espanholservico4img->extension();
						$path = $request->espanholservico4img->storeAs('public/images', "espanholservico4img.$extension");
						Confing::atualizar('espanholservico4img',$path);
				}elseif (preg_match($pattern, $request->espanholservico4img, $matches)) {
					$id = "embed".$matches[1];
					Confing::atualizar('espanholservico4img',$id);
				}

				if ($request->hasFile('espanholservico5img')) 
				{
						$extension = $request->espanholservico5img->extension();
						$path = $request->espanholservico5img->storeAs('public/images', "espanholservico5img.$extension");
						Confing::atualizar('espanholservico5img',$path);
				}elseif (preg_match($pattern, $request->espanholservico5img, $matches)) {
					$id = "embed".$matches[1];
					Confing::atualizar('espanholservico5img',$id);
				}

				if ($request->hasFile('espanholservico6img')) 
				{
						$extension = $request->espanholservico6img->extension();
						$path = $request->espanholservico6img->storeAs('public/images', "espanholservico6img.$extension");
						Confing::atualizar('espanholservico6img',$path);
				}elseif (preg_match($pattern, $request->espanholservico6img, $matches)) {
					$id = "embed".$matches[1];
					Confing::atualizar('espanholservico6img',$id);
				}

				if ($request->hasFile('espanholservico7img')) 
				{
						$extension = $request->espanholservico7img->extension();
						$path = $request->espanholservico7img->storeAs('public/images', "espanholservico7img.$extension");
						Confing::atualizar('espanholservico7img',$path);
				}elseif (preg_match($pattern, $request->espanholservico7img, $matches)) {
					$id = "embed".$matches[1];
					Confing::atualizar('espanholservico7img',$id);
				}

				if ($request->hasFile('espanholservico8img')) 
				{
						$extension = $request->espanholservico8img->extension();
						$path = $request->espanholservico8img->storeAs('public/images', "espanholservico8img.$extension");
						Confing::atualizar('espanholservico8img',$path);
				}elseif (preg_match($pattern, $request->espanholservico8img, $matches)) {
					$id = "embed".$matches[1];
					Confing::atualizar('espanholservico8img',$id);
				}

				if ($request->hasFile('espanholservico9img')) 
				{
						$extension = $request->espanholservico9img->extension();
						$path = $request->espanholservico9img->storeAs('public/images', "espanholservico9img.$extension");
						Confing::atualizar('espanholservico9img',$path);
				}elseif (preg_match($pattern, $request->espanholservico9img, $matches)) {
					$id = "embed".$matches[1];
					Confing::atualizar('espanholservico9img',$id);
				}

				if ($request->hasFile('espanholservico10img')) 
				{
						$extension = $request->espanholservico10img->extension();
						$path = $request->espanholservico10img->storeAs('public/images', "espanholservico10img.$extension");
						Confing::atualizar('espanholservico10img',$path);
				}elseif (preg_match($pattern, $request->espanholservico10img, $matches)) {
					$id = "embed".$matches[1];
					Confing::atualizar('espanholservico10img',$id);
				}

				if ($request->hasFile('espanholservico11img')) 
				{
						$extension = $request->espanholservico11img->extension();
						$path = $request->espanholservico11img->storeAs('public/images', "espanholservico11img.$extension");
						Confing::atualizar('espanholservico11img',$path);
				}elseif (preg_match($pattern, $request->espanholservico11img, $matches)) {
					$id = "embed".$matches[1];
					Confing::atualizar('espanholservico11img',$id);
				}
				
				Confing::atualizar('espanholtituloPagina',$request->espanholtituloPagina);
				Confing::atualizar('espanholtituloPrincipal',$request->espanholtituloPrincipal);

				Confing::atualizar('espanholservico1titulo',$request->espanholservico1titulo);
				Confing::atualizar('espanholservico2titulo',$request->espanholservico2titulo);
				Confing::atualizar('espanholservico3titulo',$request->espanholservico3titulo);
				Confing::atualizar('espanholservico4titulo',$request->espanholservico4titulo);
				Confing::atualizar('espanholservico5titulo',$request->espanholservico5titulo);
				Confing::atualizar('espanholservico6titulo',$request->espanholservico6titulo);
				Confing::atualizar('espanholservico7titulo',$request->espanholservico7titulo);
				Confing::atualizar('espanholservico8titulo',$request->espanholservico8titulo);
				Confing::atualizar('espanholservico9titulo',$request->espanholservico9titulo);
				Confing::atualizar('espanholservico10titulo',$request->espanholservico10titulo);
				Confing::atualizar('espanholservico11titulo',$request->espanholservico11titulo);

				Confing::atualizar('espanholservico1descricao',$request->espanholservico1descricao);
				Confing::atualizar('espanholservico2descricao',$request->espanholservico2descricao);
				Confing::atualizar('espanholservico3descricao',$request->espanholservico3descricao);
				Confing::atualizar('espanholservico4descricao',$request->espanholservico4descricao);
				Confing::atualizar('espanholservico5descricao',$request->espanholservico5descricao);
				Confing::atualizar('espanholservico6descricao',$request->espanholservico6descricao);
				Confing::atualizar('espanholservico7descricao',$request->espanholservico7descricao);
				Confing::atualizar('espanholservico8descricao',$request->espanholservico8descricao);
				Confing::atualizar('espanholservico9descricao',$request->espanholservico9descricao);
				Confing::atualizar('espanholservico10descricao',$request->espanholservico10descricao);
				Confing::atualizar('espanholservico11descricao',$request->espanholservico11descricao);

				Confing::atualizar('espanholservico1preco',$request->espanholservico1preco);
				Confing::atualizar('espanholservico2preco',$request->espanholservico2preco);
				Confing::atualizar('espanholservico3preco',$request->espanholservico3preco);
				Confing::atualizar('espanholservico4preco',$request->espanholservico4preco);
				Confing::atualizar('espanholservico5preco',$request->espanholservico5preco);
				Confing::atualizar('espanholservico6preco',$request->espanholservico6preco);
				Confing::atualizar('espanholservico7preco',$request->espanholservico7preco);
				Confing::atualizar('espanholservico8preco',$request->espanholservico8preco);
				Confing::atualizar('espanholservico9preco',$request->espanholservico9preco);
				Confing::atualizar('espanholservico10preco',$request->espanholservico10preco);
				Confing::atualizar('espanholservico11preco',$request->espanholservico11preco);

				Confing::atualizar('espanholservico1preco2',$request->espanholservico1preco2);
				Confing::atualizar('espanholservico2preco2',$request->espanholservico2preco2);
				Confing::atualizar('espanholservico3preco2',$request->espanholservico3preco2);
				Confing::atualizar('espanholservico4preco2',$request->espanholservico4preco2);
				Confing::atualizar('espanholservico5preco2',$request->espanholservico5preco2);
				Confing::atualizar('espanholservico6preco2',$request->espanholservico6preco2);
				Confing::atualizar('espanholservico7preco2',$request->espanholservico7preco2);
				Confing::atualizar('espanholservico8preco2',$request->espanholservico8preco2);
				Confing::atualizar('espanholservico9preco2',$request->espanholservico9preco2);
				Confing::atualizar('espanholservico10preco2',$request->espanholservico10preco2);
				Confing::atualizar('espanholservico11preco2',$request->espanholservico11preco2);
		 
				return redirect()->back()->with('status', "Conteúdo atualizado com sucesso");
		}

		public function espanholestrutura(Request $request)
		{
				Confing::atualizar('espanholestruturatitulo1',$request->espanholestruturatitulo1);
				Confing::atualizar('espanholestruturatitulo2',$request->espanholestruturatitulo2);

				if ($request->hasFile('espanholestruturaimagem1')) 
				{
						$extension = $request->espanholestruturaimagem1->extension();
						$path = $request->espanholestruturaimagem1->storeAs('public/images', "espanholestruturaimagem1.$extension");
						Confing::atualizar('espanholestruturaimagem1',$path);
				}
				if ($request->hasFile('espanholestruturaimagem2')) 
				{
						$extension = $request->espanholestruturaimagem2->extension();
						$path = $request->espanholestruturaimagem2->storeAs('public/images', "espanholestruturaimagem2.$extension");
						Confing::atualizar('espanholestruturaimagem2',$path);
				}
				if ($request->hasFile('espanholestruturaimagem3')) 
				{
						$extension = $request->espanholestruturaimagem3->extension();
						$path = $request->espanholestruturaimagem3->storeAs('public/images', "espanholestruturaimagem3.$extension");
						Confing::atualizar('espanholestruturaimagem3',$path);
				}
				if ($request->hasFile('espanholestruturaimagem4')) 
				{
						$extension = $request->espanholestruturaimagem4->extension();
						$path = $request->espanholestruturaimagem4->storeAs('public/images', "espanholestruturaimagem4.$extension");
						Confing::atualizar('espanholestruturaimagem4',$path);
				}
				if ($request->hasFile('espanholestruturaimagem5')) 
				{
						$extension = $request->espanholestruturaimagem5->extension();
						$path = $request->espanholestruturaimagem5->storeAs('public/images', "espanholestruturaimagem5.$extension");
						Confing::atualizar('espanholestruturaimagem5',$path);
				}
				if ($request->hasFile('espanholestruturaimagem6')) 
				{
						$extension = $request->espanholestruturaimagem6->extension();
						$path = $request->espanholestruturaimagem6->storeAs('public/images', "espanholestruturaimagem6.$extension");
						Confing::atualizar('espanholestruturaimagem6',$path);
				}
				if ($request->hasFile('espanholestruturaimagem7')) 
				{
						$extension = $request->espanholestruturaimagem7->extension();
						$path = $request->espanholestruturaimagem7->storeAs('public/images', "espanholestruturaimagem7.$extension");
						Confing::atualizar('espanholestruturaimagem7',$path);
				}
				if ($request->hasFile('espanholestruturaimagem8')) 
				{
						$extension = $request->espanholestruturaimagem8->extension();
						$path = $request->espanholestruturaimagem8->storeAs('public/images', "espanholestruturaimagem8.$extension");
						Confing::atualizar('espanholestruturaimagem8',$path);
				}
				if ($request->hasFile('espanholestruturaimagem9')) 
				{
						$extension = $request->espanholestruturaimagem9->extension();
						$path = $request->espanholestruturaimagem9->storeAs('public/images', "espanholestruturaimagem9.$extension");
						Confing::atualizar('espanholestruturaimagem9',$path);
				}
				if ($request->hasFile('espanholestruturaimagem10')) 
				{
						$extension = $request->espanholestruturaimagem10->extension();
						$path = $request->espanholestruturaimagem10->storeAs('public/images', "espanholestruturaimagem10.$extension");
						Confing::atualizar('espanholestruturaimagem10',$path);
				}
				if ($request->hasFile('espanholestruturaimagem11')) 
				{
						$extension = $request->espanholestruturaimagem11->extension();
						$path = $request->espanholestruturaimagem11->storeAs('public/images', "espanholestruturaimagem11.$extension");
						Confing::atualizar('espanholestruturaimagem11',$path);
				}
				if ($request->hasFile('espanholestruturaimagem12')) 
				{
						$extension = $request->espanholestruturaimagem12->extension();
						$path = $request->espanholestruturaimagem12->storeAs('public/images', "espanholestruturaimagem12.$extension");
						Confing::atualizar('espanholestruturaimagem12',$path);
				}
				if ($request->hasFile('espanholestruturaimagem13')) 
				{
						$extension = $request->espanholestruturaimagem13->extension();
						$path = $request->espanholestruturaimagem13->storeAs('public/images', "espanholestruturaimagem13.$extension");
						Confing::atualizar('espanholestruturaimagem13',$path);
				}
				if ($request->hasFile('espanholestruturaimagem14')) 
				{
						$extension = $request->espanholestruturaimagem14->extension();
						$path = $request->espanholestruturaimagem14->storeAs('public/images', "espanholestruturaimagem14.$extension");
						Confing::atualizar('espanholestruturaimagem14',$path);
				}

				return redirect()->back()->with('status', "Conteúdo atualizado com sucesso");
		}

		public function espanholcontato(Request $request)
		{
				if ($request->hasFile('espanholmenu1')) 
				{
						$extension = $request->espanholmenu1->extension();
						$path = $request->espanholmenu1->storeAs('public/images', "espanholmenu1.$extension");
						Confing::atualizar('espanholmenu1',$path);
				}

				Confing::atualizar('espanholcontatoTituloPagina',$request->espanholcontatoTituloPagina);
				Confing::atualizar('espanholcontatoTituloPagina2',$request->espanholcontatoTituloPagina2);

				Confing::atualizar('espanholcontatoTituloemail',$request->espanholcontatoTituloemail);
				Confing::atualizar('espanholcontatoemail',$request->espanholcontatoemail);

				Confing::atualizar('espanholcontatoTituloEndereco',$request->espanholcontatoTituloEndereco);
				Confing::atualizar('espanholcontatoSubtTituloEndereco',$request->espanholcontatoSubtTituloEndereco);

				Confing::atualizar('espanholcontatoTituloTelefone',$request->espanholcontatoTituloTelefone);
				Confing::atualizar('espanholcontatoTelefone',$request->espanholcontatoTelefone);

				Confing::atualizar('espanholcontatoLinkLinkedin',$request->espanholcontatoLinkLinkedin);
				Confing::atualizar('espanholcontatoLinkFacebook',$request->espanholcontatoLinkFacebook);
				Confing::atualizar('espanholcontatoLinkInstagram',$request->espanholcontatoLinkInstagram); 

				return redirect()->back()->with('status', "Conteúdo atualizado com sucesso");
		}

		public function espanholdepoimentos(Request $request)
		{
				Confing::atualizar('espanholdepoimento1',$request->espanholdepoimento1);
				Confing::atualizar('espanholdepoimento2',$request->espanholdepoimento2);

				return redirect()->back()->with('status', "Conteúdo atualizado com sucesso");
		}

		public function espanholagendamento(Request $request)
		{
				Confing::atualizar('espanholagendamento1',$request->espanholagendamento1);        
				Confing::atualizar('espanholagendamento2',$request->espanholagendamento2);        
				Confing::atualizar('espanholagendamentobotao',$request->espanholagendamentobotao);        

				return redirect()->back()->with('status', "Conteúdo atualizado com sucesso");
		}

		public function espanholmodal(Request $request)
		{
				if ($request->hasFile('espanholmodalimg')) 
				{
						$extension = $request->espanholmodalimg->extension();
						$path = $request->espanholmodalimg->storeAs('public/images', "espanholmodalimg.$extension");
						Confing::atualizar('espanholmodalimg',$path);
				}       

				Confing::atualizar('espanholmodal1',$request->espanholmodal1);        
				Confing::atualizar('espanholmodal2',$request->espanholmodal2);
				Confing::atualizar('espanholmodal3',$request->espanholmodal3);
				Confing::atualizar('espanholmodal4',$request->espanholmodal4);
				Confing::atualizar('espanholmodal5',$request->espanholmodal5);
				Confing::atualizar('espanholmodal6',$request->espanholmodal6);
				Confing::atualizar('espanholmodal7',$request->espanholmodal7);
				Confing::atualizar('espanholmodal8',$request->espanholmodal8);
				Confing::atualizar('espanholmodal9',$request->espanholmodal9);

				return redirect()->back()->with('status', "Conteúdo atualizado com sucesso");

		}
}