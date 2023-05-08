<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Confing;


class PortuguesPageController extends Controller
{

    public function index(){
        $portuguestextoresumo=Confing::get('portuguestextoresumo');
        $portugueswhatsapp=Confing::get('portugueswhatsapp');
        $portuguesemail=Confing::get('portuguesemail');
        $portuguesinstagram=Confing::get('portuguesinstagram');
        $portuguesfacebook=Confing::get('portuguesfacebook');
        $portuguesboleto=Confing::get('portuguesboleto');
        $portuguesslide1=Confing::get('portuguesslide1');
        $portuguesslide2=Confing::get('portuguesslide2');
        $portuguesslide3=Confing::get('portuguesslide3');
        $portuguesslide4=Confing::get('portuguesslide4');
        $portuguesslide5=Confing::get('portuguesslide5');
        $portuguesslide6=Confing::get('portuguesslide6');
        $portuguesslide7=Confing::get('portuguesslide7');
        $portuguesslide8=Confing::get('portuguesslide8');
        $portugueslogo1=Confing::get('portugueslogo1');
        $portuguesmenu2=Confing::get('portuguesmenu2');
        $portuguesmenu3=Confing::get('portuguesmenu3');
        $portuguesmenu4=Confing::get('portuguesmenu4');
        $portuguesmenu5=Confing::get('portuguesmenu5');
        $portuguesmenu6=Confing::get('portuguesmenu6');
        $portuguesmenu7=Confing::get('portuguesmenu7');
        $portuguesmenu8=Confing::get('portuguesmenu8');
        $portuguesmenu9=Confing::get('portuguesmenu9');



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
        $portuguescontatoLinkTelefone=Confing::get('portuguescontatoLinkTelefone');
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

        $portuguescontainerlgpd=Confing::get('portuguescontainerlgpd');
        $portuguestitlelgpd=Confing::get('portuguestitlelgpd');
        


        return view("components.idiomas-site",[
            'portuguestextoresumo'=>$portuguestextoresumo,
            'portugueswhatsapp'=>$portugueswhatsapp,
            'portuguesemail'=>$portuguesemail,
            'portuguesinstagram'=>$portuguesinstagram,
            'portuguesfacebook'=>$portuguesfacebook,
            'portuguesboleto'=>$portuguesboleto,
            'portuguesslide1'=>$portuguesslide1,
            'portuguesslide2'=>$portuguesslide2,
            'portuguesslide3'=>$portuguesslide3,
            'portuguesslide4'=>$portuguesslide4,
            'portuguesslide5'=>$portuguesslide5,
            'portuguesslide6'=>$portuguesslide6,
            'portuguesslide7'=>$portuguesslide7,
            'portuguesslide8'=>$portuguesslide8,
            'portugueslogo1'=>$portugueslogo1,
            'portuguesmenu2'=>$portuguesmenu2,
            'portuguesmenu3'=>$portuguesmenu3,
            'portuguesmenu4'=>$portuguesmenu4,
            'portuguesmenu5'=>$portuguesmenu5,
            'portuguesmenu6'=>$portuguesmenu6,
            'portuguesmenu7'=>$portuguesmenu7,
            'portuguesmenu8'=>$portuguesmenu8,
            'portuguesmenu9'=>$portuguesmenu9,


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

            'portuguescontainerlgpd'=>$portuguescontainerlgpd,
            'portuguestitlelgpd'=>$portuguestitlelgpd,
        ]);

        
    }
  
    public function home(){
        $portuguestextoresumo=Confing::get('portuguestextoresumo');
        $portugueswhatsapp=Confing::get('portugueswhatsapp');
        $portuguesemail=Confing::get('portuguesemail');
        $portuguesinstagram=Confing::get('portuguesinstagram');
        $portuguesfacebook=Confing::get('portuguesfacebook');
        $portuguesboleto=Confing::get('portuguesboleto');
        $portuguesslide1=Confing::get('portuguesslide1');
        $portuguesslide2=Confing::get('portuguesslide2');
        $portuguesslide3=Confing::get('portuguesslide3');
        $portuguesslide4=Confing::get('portuguesslide4');
        $portuguesslide5=Confing::get('portuguesslide5');
        $portuguesslide6=Confing::get('portuguesslide6');
        $portuguesslide7=Confing::get('portuguesslide7');
        $portuguesslide8=Confing::get('portuguesslide8');
        $portugueslogo1=Confing::get('portugueslogo1');
        $portuguesmenu2=Confing::get('portuguesmenu2');
        $portuguesmenu3=Confing::get('portuguesmenu3');
        $portuguesmenu4=Confing::get('portuguesmenu4');
        $portuguesmenu5=Confing::get('portuguesmenu5');
        $portuguesmenu6=Confing::get('portuguesmenu6');
        $portuguesmenu7=Confing::get('portuguesmenu7');
        $portuguesmenu8=Confing::get('portuguesmenu8');
        $portuguesmenu9=Confing::get('portuguesmenu9');


        
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

        $portuguescontainerlgpd=Confing::get('portuguescontainerlgpd');
        $portuguestitlelgpd=Confing::get('portuguestitlelgpd');



        return view("site.pt.index",[
            'portuguestextoresumo'=>$portuguestextoresumo,
            'portugueswhatsapp'=>$portugueswhatsapp,
            'portuguesemail'=>$portuguesemail,
            'portuguesinstagram'=>$portuguesinstagram,
            'portuguesfacebook'=>$portuguesfacebook,
            'portuguesboleto'=>$portuguesboleto,
            'portuguesslide1'=>$portuguesslide1,
            'portuguesslide2'=>$portuguesslide2,
            'portuguesslide3'=>$portuguesslide3,
            'portuguesslide4'=>$portuguesslide4,
            'portuguesslide5'=>$portuguesslide5,
            'portuguesslide6'=>$portuguesslide6,
            'portuguesslide7'=>$portuguesslide7,
            'portuguesslide8'=>$portuguesslide8,
            'portugueslogo1'=>$portugueslogo1,
            'portuguesmenu2'=>$portuguesmenu2,
            'portuguesmenu3'=>$portuguesmenu3,
            'portuguesmenu4'=>$portuguesmenu4,
            'portuguesmenu5'=>$portuguesmenu5,
            'portuguesmenu6'=>$portuguesmenu6,
            'portuguesmenu7'=>$portuguesmenu7,
            'portuguesmenu8'=>$portuguesmenu8,
            'portuguesmenu9'=>$portuguesmenu9,

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

            'portuguescontainerlgpd'=>$portuguescontainerlgpd,
            'portuguestitlelgpd'=>$portuguestitlelgpd,
        ]);        
    }
}
