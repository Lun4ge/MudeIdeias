<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marcas;
use App\Portfolios;

class backOffice extends Controller
{
    public function index()
    {
        return view('admin.indexadmin');
    }

    // public function create()
    // {
    //     //
    // }

    // public function store(Request $request)
    // {
    //     //
    // }

    // public function show($id)
    // {
    //     //
    // }

    // public function edit($id)
    // {
    //     //
    // }

    // public function update(Request $request, $id)
    // {
    //     //
    // }

    // public function destroy($id)
    // {
    //     //
    // }


    //////////////////////Imagens//////////////////////////

    public function ImagemIndex()
    {
      return view('admin.adicionar.imagens.imagensView');
    }

    public function ImagemCreate()
    {
      return view('admin.adicionar.imagens.imagensCreate');
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
        $path = public_path('/imagens/portfolio');
        $img->move($path,$imgname);
        $imagens->imagem=$imgname;
        $imagens->save();
        
        return redirect('/imagens');
    }

    public function ImagemDestroy($id)
    {
      
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

       public function EnviadoCreate($id)
       {
         
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
         
       }
   
    /////////////////////////////////////////////////////

    //////////////////////////Mensagens//////////////////

        public function MensagemIndex()
        {
            return view('admin.visualizar.mensagens.mensagensView');
        }
    
        public function MensagemCreate($id)
        {
          
        }
    
        public function MensagemStore(Request $request)
        {
          
        }
    
        public function MensagemDestroy($id)
        {
          
        }
    
       /////////////////////////////////////////////////////
}
