<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Confing;


class EspanholPageController extends Controller
{

    public function index(){
        $espanholtextoresumo=Confing::get('espanholtextoresumo');
        $espanholwhatsapp=Confing::get('espanholwhatsapp');
        $espanholemail=Confing::get('espanholemail');
        $espanholinstagram=Confing::get('espanholinstagram');
        $espanholfacebook=Confing::get('espanholfacebook');
        $espanholboleto=Confing::get('espanholboleto');
        $espanholslide1=Confing::get('espanholslide1');
        $espanholslide2=Confing::get('espanholslide2');
        $espanholslide3=Confing::get('espanholslide3');
        $espanholslide4=Confing::get('espanholslide4');
        $espanholslide5=Confing::get('espanholslide5');
        $espanholslide6=Confing::get('espanholslide6');
        $espanholslide7=Confing::get('espanholslide7');
        $espanholslide8=Confing::get('espanholslide8');
        $espanhollogo1=Confing::get('espanhollogo1');
        $espanholmenu2=Confing::get('espanholmenu2');
        $espanholmenu3=Confing::get('espanholmenu3');
        $espanholmenu4=Confing::get('espanholmenu4');
        $espanholmenu5=Confing::get('espanholmenu5');
        $espanholmenu6=Confing::get('espanholmenu6');
        $espanholmenu7=Confing::get('espanholmenu7');
        $espanholmenu8=Confing::get('espanholmenu8');
        $espanholmenu9=Confing::get('espanholmenu9');



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
        $espanholcontatoLinkTelefone=Confing::get('espanholcontatoLinkTelefone');
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
        


        return view("components.idiomas-site",[
            'espanholtextoresumo'=>$espanholtextoresumo,
            'espanholwhatsapp'=>$espanholwhatsapp,
            'espanholemail'=>$espanholemail,
            'espanholinstagram'=>$espanholinstagram,
            'espanholfacebook'=>$espanholfacebook,
            'espanholboleto'=>$espanholboleto,
            'espanholslide1'=>$espanholslide1,
            'espanholslide2'=>$espanholslide2,
            'espanholslide3'=>$espanholslide3,
            'espanholslide4'=>$espanholslide4,
            'espanholslide5'=>$espanholslide5,
            'espanholslide6'=>$espanholslide6,
            'espanholslide7'=>$espanholslide7,
            'espanholslide8'=>$espanholslide8,
            'espanhollogo1'=>$espanhollogo1,
            'espanholmenu2'=>$espanholmenu2,
            'espanholmenu3'=>$espanholmenu3,
            'espanholmenu4'=>$espanholmenu4,
            'espanholmenu5'=>$espanholmenu5,
            'espanholmenu6'=>$espanholmenu6,
            'espanholmenu7'=>$espanholmenu7,
            'espanholmenu8'=>$espanholmenu8,
            'espanholmenu9'=>$espanholmenu9,


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
        ]);

        
    }
  
    public function home(){
        $espanholtextoresumo=Confing::get('espanholtextoresumo');
        $espanholwhatsapp=Confing::get('espanholwhatsapp');
        $espanholemail=Confing::get('espanholemail');
        $espanholinstagram=Confing::get('espanholinstagram');
        $espanholfacebook=Confing::get('espanholfacebook');
        $espanholboleto=Confing::get('espanholboleto');
        $espanholslide1=Confing::get('espanholslide1');
        $espanholslide2=Confing::get('espanholslide2');
        $espanholslide3=Confing::get('espanholslide3');
        $espanholslide4=Confing::get('espanholslide4');
        $espanholslide5=Confing::get('espanholslide5');
        $espanholslide6=Confing::get('espanholslide6');
        $espanholslide7=Confing::get('espanholslide7');
        $espanholslide8=Confing::get('espanholslide8');
        $espanhollogo1=Confing::get('espanhollogo1');
        $espanholmenu2=Confing::get('espanholmenu2');
        $espanholmenu3=Confing::get('espanholmenu3');
        $espanholmenu4=Confing::get('espanholmenu4');
        $espanholmenu5=Confing::get('espanholmenu5');
        $espanholmenu6=Confing::get('espanholmenu6');
        $espanholmenu7=Confing::get('espanholmenu7');
        $espanholmenu8=Confing::get('espanholmenu8');
        $espanholmenu9=Confing::get('espanholmenu9');


        
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



        return view("site.es.index",[
            'espanholtextoresumo'=>$espanholtextoresumo,
            'espanholwhatsapp'=>$espanholwhatsapp,
            'espanholemail'=>$espanholemail,
            'espanholinstagram'=>$espanholinstagram,
            'espanholfacebook'=>$espanholfacebook,
            'espanholboleto'=>$espanholboleto,
            'espanholslide1'=>$espanholslide1,
            'espanholslide2'=>$espanholslide2,
            'espanholslide3'=>$espanholslide3,
            'espanholslide4'=>$espanholslide4,
            'espanholslide5'=>$espanholslide5,
            'espanholslide6'=>$espanholslide6,
            'espanholslide7'=>$espanholslide7,
            'espanholslide8'=>$espanholslide8,
            'espanhollogo1'=>$espanhollogo1,
            'espanholmenu2'=>$espanholmenu2,
            'espanholmenu3'=>$espanholmenu3,
            'espanholmenu4'=>$espanholmenu4,
            'espanholmenu5'=>$espanholmenu5,
            'espanholmenu6'=>$espanholmenu6,
            'espanholmenu7'=>$espanholmenu7,
            'espanholmenu8'=>$espanholmenu8,
            'espanholmenu9'=>$espanholmenu9,

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
        ]);        
    }
}
