<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Confing;


class EnglishPageController extends Controller
{

    public function index(){
        $englishtextoresumo=Confing::get('englishtextoresumo');
        $englishwhatsapp=Confing::get('englishwhatsapp');
        $englishemail=Confing::get('englishemail');
        $englishinstagram=Confing::get('englishinstagram');
        $englishfacebook=Confing::get('englishfacebook');
        $englishboleto=Confing::get('englishboleto');
        $englishslide1=Confing::get('englishslide1');
        $englishslide2=Confing::get('englishslide2');
        $englishslide3=Confing::get('englishslide3');
        $englishslide4=Confing::get('englishslide4');
        $englishslide5=Confing::get('englishslide5');
        $englishslide6=Confing::get('englishslide6');
        $englishslide7=Confing::get('englishslide7');
        $englishslide8=Confing::get('englishslide8');
        $englishlogo1=Confing::get('englishlogo1');
        $englishmenu2=Confing::get('englishmenu2');
        $englishmenu3=Confing::get('englishmenu3');
        $englishmenu4=Confing::get('englishmenu4');
        $englishmenu5=Confing::get('englishmenu5');
        $englishmenu6=Confing::get('englishmenu6');
        $englishmenu7=Confing::get('englishmenu7');
        $englishmenu8=Confing::get('englishmenu8');
        $englishmenu9=Confing::get('englishmenu9');



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
        $englishcontatoLinkTelefone=Confing::get('englishcontatoLinkTelefone');
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
        


        return view("components.idiomas-site",[
            'englishtextoresumo'=>$englishtextoresumo,
            'englishwhatsapp'=>$englishwhatsapp,
            'englishemail'=>$englishemail,
            'englishinstagram'=>$englishinstagram,
            'englishfacebook'=>$englishfacebook,
            'englishboleto'=>$englishboleto,
            'englishslide1'=>$englishslide1,
            'englishslide2'=>$englishslide2,
            'englishslide3'=>$englishslide3,
            'englishslide4'=>$englishslide4,
            'englishslide5'=>$englishslide5,
            'englishslide6'=>$englishslide6,
            'englishslide7'=>$englishslide7,
            'englishslide8'=>$englishslide8,
            'englishlogo1'=>$englishlogo1,
            'englishmenu2'=>$englishmenu2,
            'englishmenu3'=>$englishmenu3,
            'englishmenu4'=>$englishmenu4,
            'englishmenu5'=>$englishmenu5,
            'englishmenu6'=>$englishmenu6,
            'englishmenu7'=>$englishmenu7,
            'englishmenu8'=>$englishmenu8,
            'englishmenu9'=>$englishmenu9,


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
        ]);

        
    }
  
    public function home(){
        $englishtextoresumo=Confing::get('englishtextoresumo');
        $englishwhatsapp=Confing::get('englishwhatsapp');
        $englishemail=Confing::get('englishemail');
        $englishinstagram=Confing::get('englishinstagram');
        $englishfacebook=Confing::get('englishfacebook');
        $englishboleto=Confing::get('englishboleto');
        $englishslide1=Confing::get('englishslide1');
        $englishslide2=Confing::get('englishslide2');
        $englishslide3=Confing::get('englishslide3');
        $englishslide4=Confing::get('englishslide4');
        $englishslide5=Confing::get('englishslide5');
        $englishslide6=Confing::get('englishslide6');
        $englishslide7=Confing::get('englishslide7');
        $englishslide8=Confing::get('englishslide8');
        $englishlogo1=Confing::get('englishlogo1');
        $englishmenu2=Confing::get('englishmenu2');
        $englishmenu3=Confing::get('englishmenu3');
        $englishmenu4=Confing::get('englishmenu4');
        $englishmenu5=Confing::get('englishmenu5');
        $englishmenu6=Confing::get('englishmenu6');
        $englishmenu7=Confing::get('englishmenu7');
        $englishmenu8=Confing::get('englishmenu8');
        $englishmenu9=Confing::get('englishmenu9');


        
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



        return view("site.en.index",[
            'englishtextoresumo'=>$englishtextoresumo,
            'englishwhatsapp'=>$englishwhatsapp,
            'englishemail'=>$englishemail,
            'englishinstagram'=>$englishinstagram,
            'englishfacebook'=>$englishfacebook,
            'englishboleto'=>$englishboleto,
            'englishslide1'=>$englishslide1,
            'englishslide2'=>$englishslide2,
            'englishslide3'=>$englishslide3,
            'englishslide4'=>$englishslide4,
            'englishslide5'=>$englishslide5,
            'englishslide6'=>$englishslide6,
            'englishslide7'=>$englishslide7,
            'englishslide8'=>$englishslide8,
            'englishlogo1'=>$englishlogo1,
            'englishmenu2'=>$englishmenu2,
            'englishmenu3'=>$englishmenu3,
            'englishmenu4'=>$englishmenu4,
            'englishmenu5'=>$englishmenu5,
            'englishmenu6'=>$englishmenu6,
            'englishmenu7'=>$englishmenu7,
            'englishmenu8'=>$englishmenu8,
            'englishmenu9'=>$englishmenu9,

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
        ]);        
    }
}
