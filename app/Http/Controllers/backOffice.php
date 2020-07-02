<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marcas;
use App\Portfolios;
use App\Contactos;
use App\Imagenspedidos;
use App\Imagensenviados;
use App\Mail\enviarorcamentos;
use App\Orcamentospedidos;
use App\Orcamentosenviados;
use Illuminate\Support\Facades\Mail;


use function GuzzleHttp\Promise\all;

class backOffice extends Controller
{
    public function index()
    {
        return view('admin.indexadmin');
    }

    public function contacto()
    {
        return view('mais.contacto');
    }

    public function home()
    {
        $all=Portfolios::where(['estado'=>'visivel','tipo'=>'Identidade Visual'])->get();
        return view('index')->with(compact("all"));
    }


    //////////////////////Imagens//////////////////////////

    public function ImagemIndex()
    {       
      $all = Portfolios::select()->get();
      return view('admin.adicionar.imagens.imagensView')->with(compact("all"));
    }

    public function ImagemStore(Request $request)
    {
        $request->validate([
            'tipo' => 'required',
            'imagem' => 'required|image|mimes:jpg,png,jpeg|max:5000',
        ]);
        
        $data = $request->all();
        // if($data['marca']!='' && ($data['tipo']==''||$data['tipo']==''||$data['tipo']==''||$data['tipo']=='')){}

        $imagens = new Portfolios();
        $imagens->tipo=$data['tipo'];
        $imagens->estado='visivel';
        $img = $request->file('imagem');
        $imgname = time().'.'. $img->getClientOriginalExtension();
        $path = public_path('/portfolio');
        $img->move($path,$imgname);
        $imagens->imagem=$imgname;
        $imagens->save();
        
        return redirect('/imagens');
    }

    public function ImagemDestroy($id)
    {
           $all=Portfolios::where(['id'=>$id])->first();
           unlink(public_path() .  '/portfolio/' . $all->imagem);
           Portfolios::where(['id'=>$id])->delete();
           return back();
    }

    public function ImagemSearch(Request $request)
    {
        $data = $request->all();
        $all=Portfolios::where(['tipo'=>$data['tipo']])->get();
        return view('admin.adicionar.imagens.imagensView')->with(compact("all"));
    }

    public function ImagemState($id)
    {
       $item=Portfolios::where(['id'=>$id])->first();
    if($item->estado =='invisivel'){
        Portfolios::where(['id'=>$id])->update(['estado'=>'visivel',]);}
        else{Portfolios::where(['id'=>$id])->update(['estado'=>'invisivel',]);}

    return back();
    }

    //////////////////////////////////////////////////////

    //////////////////////////Pedidos////////////////////

    public function PedidoIndex()
    {
        $all = Orcamentospedidos::select()->get();
        return view('admin.visualizar.pedidos.pedidosView')->with(compact("all"));
    }

    public function PedidoIndexIndi($id)
    {
        $all = Orcamentospedidos::select()->get();
        $onlyim = Imagenspedidos::where(['orcamentoid'=>$id])->get();
        $only = Orcamentospedidos::where(['id'=>$id])->first();
        return view('admin.visualizar.pedidos.pedidosUnico')->with(compact("all","only","onlyim"));
    }

    public function PedidoCreate()
    {
      return view('mais.pedidos');
    }

    public function PedidoStore(Request $request)
    {
        $request->validate([
            'tituloMensagem' => 'required',
            'Mensagem' => 'required',
        ]);

        $data = $request->all(); 
        $pedidos = new Orcamentospedidos();
        $pedidos->titulo=$data['tituloMensagem'];
        $pedidos->mensagem=$data['Mensagem'];
        $pedidos->estado='Por Responder';
        $pedidos->userid=Auth()->user()->id;
        $pedidos->save();

        $pedidoCriado = $pedidos->id;
        if($request->hasFile('imagem')) 
        {
            $cont = 1;
            foreach($request->file('imagem') as $file)
            {
                $imagens = new Imagenspedidos;
                $imgname = time(). $cont .'.'. $file->getClientOriginalExtension();
                $path = public_path('/imagenspedidos');
                $file->move($path,$imgname);

                $imagens->orcamentoid=$pedidoCriado;
                $imagens->imagem=$imgname;
                $cont++;
                $imagens->save();
            }
        }

        return back();
    }

    public function PedidoDestroy($id)
    {
      
    }

   /////////////////////////////////////////////////////

   //////////////////////////Enviado////////////////////

       public function EnviadoIndex()
       {
        return view('admin.visualizar.enviados.enviadosView');
       }

       public function EnviadoStore($id,Request $request)
       {
       
        $request->validate([
            'titulo' => 'required',
            'mensagem' => 'required',
        ]);  


            $data = $request->all();
            $enviados = new Orcamentosenviados();
            $enviados->pedidoid = $id;
            $enviados->titulo=$data['titulo'];
            $enviados->mensagem=$data['mensagem'];
            $enviados->preco=$data['preco'];
            $enviados->save();

            $pedidoEnviado = $enviados->id;
            if($request->hasFile('ficheiro'))
            {
                $cont = 1;
                foreach($request->file('ficheiro') as $file)
                {
                    $imagens = new Imagensenviados();
                    $imgname = time(). $cont .'.'. $file->getClientOriginalExtension();
                    $path = public_path('/imagensenviadas');
                    $file->move($path,$imgname);
    
                    $imagens->orcamentoid=$pedidoEnviado;
                    $imagens->imagem=$imgname;
                    $cont++;
                    $imagens->save();
                }
                
                // $info = Orcamentosenviados::where(['id'=>$enviados->id])->first(); 
                // Mail::send('admin.mail',  $data, function($message) {
                //    $message->to('rafaelxomega@gmail.com')->subject('Laravel HTML Testing Mail');
                   
                // //    foreach($data->file('ficheiro') as $file)
                // //    {$message->attach('C:\laravel-master\laravel\public\uploads\image.png');}

                //    $message->from('automailmudedideias@gmail.com');
                // });
                
            }else
            {
                // Mail::to('rafaelxomega@gmail.com')->send(new enviarorcamentos);
            }
            Mail::to('rafaelxomega@gmail.com')->send(new enviarorcamentos);
            return redirect('pedidos');
       }
   
       public function EnviadoDestroy($id)
       {
         
       }
   
    /////////////////////////////////////////////////////

    //////////////////////////Marcas/////////////////////

       public function MarcaIndex()
       {
        $all = Marcas::select()->get();
        return view('admin.adicionar.marcas.marcasView')->with(compact("all"));
       }

       public function MarcaCreate()
       {
        return view('admin.adicionar.marcas.marcasCreate');
       }

       public function MarcaStore(Request $request)
       {
        $request->validate([
            'nome' => 'required|unique:marcas',
        ]);
        
        $data = $request->all();
        $marca = new Marcas();
        $marca->nome=$data['nome'];
        $marca->save();
        
        return redirect('/marcas');
       }
   
       public function MarcaDestroy($id)
       {
        Marcas::where(['id'=>$id])->delete();
        return redirect('/marcas');
       }
   
    /////////////////////////////////////////////////////

    //////////////////////////Mensagens//////////////////

        public function MensagemIndex()
        {
            $all = Contactos::select()->get();
            return view('admin.visualizar.mensagens.mensagensView')->with(compact("all"));
        }
    
        public function MensagemStore(Request $request)
        {
            $request->validate([
                'Nome' => 'required',
                'Email'=>'required',
                'tituloMensagem' =>'required',
                'Mensagem'=>'required',
            ]);
            
            $data = $request->all();
            $contacto = new Contactos();
            $contacto->nome=$data['Nome'];
            $contacto->email=$data['Email'];
            $contacto->titulo=$data['tituloMensagem'];
            $contacto->mensagem=$data['Mensagem'];
            $contacto->save();
            
            return redirect('/contacto');
        }
    
        public function MensagemDestroy($id)
        {
            Contactos::where(['id'=>$id])->delete();
            return redirect('/mensagens');
        }
    
       /////////////////////////////////////////////////////
       /////////////////////////////////////////////////////
       /////////////////////////////////////////////////////

       public function Identidade()
       {
        $all=Portfolios::where(['estado'=>'visivel','tipo'=>'Identidade Visual'])->get();
        return view('index')->with(compact("all"));
       }

       public function Viaturas()
       {
        $all=Portfolios::where(['estado'=>'visivel','tipo'=>'Viaturas'])->get();
        return view('index')->with(compact("all"));
       }

       public function Montras()
       {
        $all=Portfolios::where(['estado'=>'visivel','tipo'=>'Montras'])->get();
        return view('index')->with(compact("all"));
       }

       public function Lonas()
       {
        $all=Portfolios::where(['estado'=>'visivel','tipo'=>'Lonas/ Expositores'])->get();
        return view('index')->with(compact("all"));
       }

       public function Placas()
       {
        $all=Portfolios::where(['estado'=>'visivel','tipo'=>'Placas/ Reclamos'])->get();
        return view('index')->with(compact("all"));
       }

       public function Sinaletica()
       {
        $all=Portfolios::where(['estado'=>'visivel','tipo'=>'Sinalética'])->get();
        return view('index')->with(compact("all"));
       }

       public function Texteis()
       {
        $all=Portfolios::where(['estado'=>'visivel','tipo'=>'Texteis'])->get();
        return view('index')->with(compact("all"));
       }

       public function Bandeiras()
       {
        $all=Portfolios::where(['estado'=>'visivel','tipo'=>'Bandeiras'])->get();
        return view('index')->with(compact("all"));
       }
}
