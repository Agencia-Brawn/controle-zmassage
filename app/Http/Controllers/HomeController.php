<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Confing;

class HomeController extends Controller
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
        $telefone=Confing::get('telefone');
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



        $associados1=Confing::get('associados1');
        $associados2=Confing::get('associados2');
        $associados3=Confing::get('associados3');
        $associados4=Confing::get('associados4');
        $associados5=Confing::get('associados5');
        $associados6=Confing::get('associados6');
        $associados7=Confing::get('associados7');
        $associados8=Confing::get('associados8');
        $associados9=Confing::get('associados9');
        $associados10=Confing::get('associados10');
        $associados11=Confing::get('associados11');
        $associados12=Confing::get('associados12');
        $associados13=Confing::get('associados13');
        $associados14=Confing::get('associados14');
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


        return view('controle.home.index', [
        'telefone'=>$telefone,
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



        'associados1'=>$associados1,
        'associados2'=>$associados2,
        'associados3'=>$associados3,
        'associados4'=>$associados4,
        'associados5'=>$associados5,
        'associados6'=>$associados6,
        'associados7'=>$associados7,
        'associados8'=>$associados8,
        'associados9'=>$associados9,
        'associados10'=>$associados10,
        'associados11'=>$associados11,
        'associados12'=>$associados12,
        'associados13'=>$associados13,
        'associados14'=>$associados14,
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

    public function topo1(Request $request)
    {
        // dd($request);
        Confing::atualizar('telefone',$request->telefone);
        Confing::atualizar('whatsapp',$request->whatsapp);
        Confing::atualizar('instagram',$request->instagram);
        Confing::atualizar('email',$request->email);
        Confing::atualizar('facebook',$request->facebook);
        Confing::atualizar('boleto',$request->boleto);
        
        return redirect()->back()->with('status', "Formulário Enviado com sucesso");
    }

    public function slide(Request $request)
    {
        // dd($request->slide1);

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

        return redirect()->back();
        
    }

    public function logo(Request $request)
    {
        // dd($request);
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

    public function rodapeslide(Request $request)
    {
        // dd($request);
        if ($request->hasFile('rodapeslide1')) 
        {
            $extension = $request->rodapeslide1->extension();
            $path = $request->rodapeslide1->storeAs('public/images', "rodapeslide1.$extension");
            Confing::atualizar('rodapeslide1',$path);
        }

        if ($request->hasFile('rodapeslide2')) 
        {
            $extension = $request->rodapeslide2->extension();
            $path = $request->rodapeslide2->storeAs('public/images', "rodapeslide2.$extension");
            Confing::atualizar('rodapeslide2',$path);
        }

        if ($request->hasFile('rodapeslide3')) 
        {
            $extension = $request->rodapeslide3->extension();
            $path = $request->rodapeslide3->storeAs('public/images', "rodapeslide3.$extension");
            Confing::atualizar('rodapeslide3',$path);
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

        


        return redirect()->back();

    }

    public function menu(Request $request)
    {
        // dd($request);
        if ($request->hasFile('menu1')) 
        {
            $extension = $request->menu1->extension();
            $path = $request->menu1->storeAs('public/images', "menu1.$extension");
            Confing::atualizar('menu1',$path);
        }

        Confing::atualizar('menu2',$request->menu2);
        Confing::atualizar('menu3',$request->menu3);
        Confing::atualizar('menu4',$request->menu4);
        Confing::atualizar('menu5',$request->menu5);


        return redirect()->back();

    }

    public function associados(Request $request)
    {
        // dd($request);
        if ($request->hasFile('associados1')) 
        {
            $extension = $request->associados1->extension();
            $path = $request->associados1->storeAs('public/images', "associados1.$extension");
            Confing::atualizar('associados1',$path);
        }

        if ($request->hasFile('associados2')) 
        {
            $extension = $request->associados2->extension();
            $path = $request->associados2->storeAs('public/images', "associados2.$extension");
            Confing::atualizar('associados2',$path);
        }

        if ($request->hasFile('associados3')) 
        {
            $extension = $request->associados3->extension();
            $path = $request->associados3->storeAs('public/images', "associados3.$extension");
            Confing::atualizar('associados3',$path);
        }


        if ($request->hasFile('associados4')) 
        {
            $extension = $request->associados4->extension();
            $path = $request->associados4->storeAs('public/images', "associados4.$extension");
            Confing::atualizar('associados4',$path);
        }


        if ($request->hasFile('associados5')) 
        {
            $extension = $request->associados5->extension();
            $path = $request->associados5->storeAs('public/images', "associados5.$extension");
            Confing::atualizar('associados5',$path);
        }

        if ($request->hasFile('associados6')) 
        {
            $extension = $request->associados6->extension();
            $path = $request->associados6->storeAs('public/images', "associados6.$extension");
            Confing::atualizar('associados6',$path);
        }

        if ($request->hasFile('associados7')) 
        {
            $extension = $request->associados7->extension();
            $path = $request->associados7->storeAs('public/images', "associados7.$extension");
            Confing::atualizar('associados7',$path);
        }

        if ($request->hasFile('associados8')) 
        {
            $extension = $request->associados8->extension();
            $path = $request->associados8->storeAs('public/images', "associados8.$extension");
            Confing::atualizar('associados8',$path);
        }

        if ($request->hasFile('associados9')) 
        {
            $extension = $request->associados9->extension();
            $path = $request->associados9->storeAs('public/images', "associados9.$extension");
            Confing::atualizar('associados9',$path);
        }

        if ($request->hasFile('associados10')) 
        {
            $extension = $request->associados10->extension();
            $path = $request->associados10->storeAs('public/images', "associados10.$extension");
            Confing::atualizar('associados10',$path);
        }

        if ($request->hasFile('associados11')) 
        {
            $extension = $request->associados11->extension();
            $path = $request->associados11->storeAs('public/images', "associados11.$extension");
            Confing::atualizar('associados11',$path);
        }

        if ($request->hasFile('associados12')) 
        {
            $extension = $request->associados12->extension();
            $path = $request->associados12->storeAs('public/images', "associados10.$extension");
            Confing::atualizar('associados12',$path);
        }

        Confing::atualizar('associados13',$request->associados13);
        Confing::atualizar('associados14',$request->associados14);



        return redirect()->back();

    }

    public function receita(Request $request)
    {
        // dd($request);

        Confing::atualizar('receita1',$request->receita1);        
        Confing::atualizar('receita2',$request->receita2);
        Confing::atualizar('receita3',$request->receita3);
        Confing::atualizar('receita4',$request->receita4);
        Confing::atualizar('receita5',$request->receita5);
        Confing::atualizar('receita6',$request->receita6);
        Confing::atualizar('receita7',$request->receita7);
        Confing::atualizar('receita8',$request->receita8);

        if ($request->hasFile('receita9')) 
        {
            $extension = $request->receita9->extension();
            $path = $request->receita9->storeAs('public/images', "receita9.$extension");
            Confing::atualizar('receita9',$path);
        }

        return redirect()->back();

    }

    public function footer(Request $request)
    {
        // dd($request);

        Confing::atualizar('footer1',$request->footer1);        
        Confing::atualizar('footer2',$request->footer2);
        Confing::atualizar('footer3',$request->footer3);
        Confing::atualizar('footer4',$request->footer4);
        Confing::atualizar('footer5',$request->footer5);
        Confing::atualizar('footer6',$request->footer6);
        Confing::atualizar('footer7',$request->footer7);
        Confing::atualizar('footer8',$request->footer8);
        Confing::atualizar('footer9',$request->footer9);
        Confing::atualizar('footer10',$request->footer10);
        Confing::atualizar('footer11',$request->footer11);
        Confing::atualizar('footer12',$request->footer12);


        if ($request->hasFile('footer13')) 
        {
            $extension = $request->footer13->extension();
            $path = $request->footer13->storeAs('public/images', "footer13.$extension");
            Confing::atualizar('footer13',$path);
        }

        return redirect()->back();

    }

}