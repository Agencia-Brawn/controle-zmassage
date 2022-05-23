<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Confing;


class IndexController extends Controller
{

    public function index(){
        // dd(Confing::atualizar('telefone1','(99)99'));
        $telefone=Confing::get('telefone');
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
        $logo1=Confing::get('logo1');
        $menu2=Confing::get('menu2');
        $menu3=Confing::get('menu3');
        $menu4=Confing::get('menu4');
        $menu5=Confing::get('menu5');
        $menu6=Confing::get('menu6');
        $menu7=Confing::get('menu7');
        $menu8=Confing::get('menu8');
        $menu9=Confing::get('menu9');


        $tituloPagina=Confing::get('tituloPagina');
        $tituloPrincipal=Confing::get('tituloPrincipal');

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






        $receita1=Confing::get('receita1');
        $receita2=Confing::get('receita2');
        $receita3=Confing::get('receita3');
        $receita4=Confing::get('receita4');
        $receita5=Confing::get('receita5');
        $receita6=Confing::get('receita6');
        $receita7=Confing::get('receita7');
        $receita8=Confing::get('receita8');
        $receita9=Confing::get('receita9');
        $footer1=Confing::get('footer1');
        $footer2=Confing::get('footer2');
        $footer3=Confing::get('footer3');
        $footer4=Confing::get('footer4');
        $footer5=Confing::get('footer5');
        $footer6=Confing::get('footer6');
        $footer7=Confing::get('footer7');
        $footer8=Confing::get('footer8');
        $footer9=Confing::get('footer9');
        $footer10=Confing::get('footer10');
        $footer11=Confing::get('footer11');
        $footer12=Confing::get('footer12');
        $footer13=Confing::get('footer13');


        return view("components.idiomas-site",[
            'telefone'=>$telefone,
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
            'logo1'=>$logo1,
            'menu2'=>$menu2,
            'menu3'=>$menu3,
            'menu4'=>$menu4,
            'menu5'=>$menu5,
            'menu6'=>$menu6,
            'menu7'=>$menu7,
            'menu8'=>$menu8,
            'menu9'=>$menu9,


            'tituloPagina'=>$tituloPagina,
            'tituloPrincipal'=>$tituloPrincipal,

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



            'receita1'=>$receita1,
            'receita2'=>$receita2,
            'receita3'=>$receita3,
            'receita4'=>$receita4,
            'receita5'=>$receita5,
            'receita6'=>$receita6,
            'receita7'=>$receita7,
            'receita8'=>$receita8,
            'receita9'=>$receita9,
            'footer1'=>$footer1,
            'footer2'=>$footer2,
            'footer3'=>$footer3,
            'footer4'=>$footer4,
            'footer5'=>$footer5,
            'footer6'=>$footer6,
            'footer7'=>$footer7,
            'footer8'=>$footer8,
            'footer9'=>$footer9,
            'footer10'=>$footer10,
            'footer11'=>$footer11,
            'footer12'=>$footer12,
            'footer13'=>$footer13
        ]);

        
    }
  
    public function home(){
        // dd(Confing::atualizar('telefone1','(99)99'));
        $telefone=Confing::get('telefone');
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
        $logo1=Confing::get('logo1');
        $menu2=Confing::get('menu2');
        $menu3=Confing::get('menu3');
        $menu4=Confing::get('menu4');
        $menu5=Confing::get('menu5');
        $menu6=Confing::get('menu6');
        $menu7=Confing::get('menu7');
        $menu8=Confing::get('menu8');
        $menu9=Confing::get('menu9');


        $tituloPagina=Confing::get('tituloPagina');
        $tituloPrincipal=Confing::get('tituloPrincipal');

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


        $receita1=Confing::get('receita1');
        $receita2=Confing::get('receita2');
        $receita3=Confing::get('receita3');
        $receita4=Confing::get('receita4');
        $receita5=Confing::get('receita5');
        $receita6=Confing::get('receita6');
        $receita7=Confing::get('receita7');
        $receita8=Confing::get('receita8');
        $receita9=Confing::get('receita9');
        $footer1=Confing::get('footer1');
        $footer2=Confing::get('footer2');
        $footer3=Confing::get('footer3');
        $footer4=Confing::get('footer4');
        $footer5=Confing::get('footer5');
        $footer6=Confing::get('footer6');
        $footer7=Confing::get('footer7');
        $footer8=Confing::get('footer8');
        $footer9=Confing::get('footer9');
        $footer10=Confing::get('footer10');
        $footer11=Confing::get('footer11');
        $footer12=Confing::get('footer12');
        $footer13=Confing::get('footer13');


        return view("site.home.index",[
            'telefone'=>$telefone,
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
            'logo1'=>$logo1,
            'menu2'=>$menu2,
            'menu3'=>$menu3,
            'menu4'=>$menu4,
            'menu5'=>$menu5,
            'menu6'=>$menu6,
            'menu7'=>$menu7,
            'menu8'=>$menu8,
            'menu9'=>$menu9,

            'tituloPagina'=>$tituloPagina,
            'tituloPrincipal'=>$tituloPrincipal,

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


            'receita1'=>$receita1,
            'receita2'=>$receita2,
            'receita3'=>$receita3,
            'receita4'=>$receita4,
            'receita5'=>$receita5,
            'receita6'=>$receita6,
            'receita7'=>$receita7,
            'receita8'=>$receita8,
            'receita9'=>$receita9,
            'footer1'=>$footer1,
            'footer2'=>$footer2,
            'footer3'=>$footer3,
            'footer4'=>$footer4,
            'footer5'=>$footer5,
            'footer6'=>$footer6,
            'footer7'=>$footer7,
            'footer8'=>$footer8,
            'footer9'=>$footer9,
            'footer10'=>$footer10,
            'footer11'=>$footer11,
            'footer12'=>$footer12,
            'footer13'=>$footer13
        ]);

        
    }
}
