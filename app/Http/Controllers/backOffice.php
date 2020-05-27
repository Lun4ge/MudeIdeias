<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marcas;
use App\Portfolios;
use App\Contactos;

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
        return view('index');
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
        // if($data['marca']!='' && ($data['tipo']==''||$data['tipo']==''||$data['tipo']==''||$data['tipo']==''))
        // {
          
        // }

        $imagens = new Portfolios();
        $imagens->tipo=$data['tipo'];
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
           return redirect('/imagens');
    }

    //////////////////////////////////////////////////////

    //////////////////////////Pedidos////////////////////

    public function PedidoIndex()
    {
        return view('admin.visualizar.pedidos.pedidosView');
    }

    public function PedidoCreate($id)
    {
      
    }

    public function PedidoStore(Request $request)
    {
      
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

       public function EnviadoStore(Request $request)
       {
    
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
            'marca' => 'required',
        ]);
        
        $data = $request->all();
        $marca = new Marcas();
        $marca->nome=$data['marca'];
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
            return view('admin.visualizar.mensagens.mensagensView');
        }
    
        public function MensagemStore(Request $request)
        {
            $request->validate([
                'Nome' => 'required',
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
          
        }
    
       /////////////////////////////////////////////////////
}
