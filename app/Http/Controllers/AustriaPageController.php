<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Confing;


class AustriaPageController extends Controller
{

    public function index(){
        $textoresumo=Confing::get('textoresumo');
        $whatsapp=Confing::get('whatsapp');
        $email=Confing::get('email');
        $instagram=Confing::get('instagram');
        $facebook=Confing::get('facebook');
        $boleto=Confing::get('boleto');
        $slide1=Confing::get('slide1');
        $slide2=Confing::get('slide2');
        $slide3=Confing::get('slide3');
        $slide4=Confing::get('slide4');
        $slide5=Confing::get('slide5');
        $slide6=Confing::get('slide6');
        $slide7=Confing::get('slide7');
        $slide8=Confing::get('slide8');
        $containerlgpd=Confing::get('containerlgpd');
        $titlelgpd=Confing::get('titlelgpd');
        $logo1=Confing::get('logo1');
        $menu2=Confing::get('menu2');
        $menu3=Confing::get('menu3');
        $menu4=Confing::get('menu4');
        $menu5=Confing::get('menu5');
        $menu6=Confing::get('menu6');
        $menu7=Confing::get('menu7');
        $menu8=Confing::get('menu8');
        $menu9=Confing::get('menu9');
        $menu10=Confing::get('menu10');



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
        $contatoLinkTelefone=Confing::get('contatoLinkTelefone');
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

        return view("components.idiomas-site",[
            'textoresumo'=>$textoresumo,
            'whatsapp'=>$whatsapp,
            'email'=>$email,
            'instagram'=>$instagram,
            'facebook'=>$facebook,
            'boleto'=>$boleto,
            'slide1'=>$slide1,
            'slide2'=>$slide2,
            'slide3'=>$slide3,
            'slide4'=>$slide4,
            'slide5'=>$slide5,
            'slide6'=>$slide6,
            'slide7'=>$slide7,
            'slide8'=>$slide8,
            'containerlgpd'=>$containerlgpd,
            'titlelgpd'=>$titlelgpd,
            'logo1'=>$logo1,
            'menu2'=>$menu2,
            'menu3'=>$menu3,
            'menu4'=>$menu4,
            'menu5'=>$menu5,
            'menu6'=>$menu6,
            'menu7'=>$menu7,
            'menu8'=>$menu8,
            'menu9'=>$menu9,
            'menu10'=>$menu10,


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
            'textolgpd'=>$textolgpd,
            'titlelgpd'=>$titlelgpd,
        ]);

        
    }
  
    public function home(){
        $textoresumo=Confing::get('textoresumo');
        $whatsapp=Confing::get('whatsapp');
        $email=Confing::get('email');
        $instagram=Confing::get('instagram');
        $facebook=Confing::get('facebook');
        $boleto=Confing::get('boleto');
        $slide1=Confing::get('slide1');
        $slide2=Confing::get('slide2');
        $slide3=Confing::get('slide3');
        $slide4=Confing::get('slide4');
        $slide5=Confing::get('slide5');
        $slide6=Confing::get('slide6');
        $slide7=Confing::get('slide7');
        $slide8=Confing::get('slide8');
        $containerlgpd=Confing::get('containerlgpd');
        $titlelgpd=Confing::get('titlelgpd');
        $logo1=Confing::get('logo1');
        $menu2=Confing::get('menu2');
        $menu3=Confing::get('menu3');
        $menu4=Confing::get('menu4');
        $menu5=Confing::get('menu5');
        $menu6=Confing::get('menu6');
        $menu7=Confing::get('menu7');
        $menu8=Confing::get('menu8');
        $menu9=Confing::get('menu9');
        $menu10=Confing::get('menu10');


        
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


    
        return view("site.home.index",[
            'textoresumo'=>$textoresumo,
            'whatsapp'=>$whatsapp,
            'email'=>$email,
            'instagram'=>$instagram,
            'facebook'=>$facebook,
            'boleto'=>$boleto,
            'slide1'=>$slide1,
            'slide2'=>$slide2,
            'slide3'=>$slide3,
            'slide4'=>$slide4,
            'slide5'=>$slide5,
            'slide6'=>$slide6,
            'slide7'=>$slide7,
            'slide8'=>$slide8,
            'containerlgpd'=>$containerlgpd,
            'titlelgpd'=>$titlelgpd,
            'logo1'=>$logo1,
            'menu2'=>$menu2,
            'menu3'=>$menu3,
            'menu4'=>$menu4,
            'menu5'=>$menu5,
            'menu6'=>$menu6,
            'menu7'=>$menu7,
            'menu8'=>$menu8,
            'menu9'=>$menu9,
            'menu10'=>$menu10,

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
}
