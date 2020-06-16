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
    // $all = Portfolios::select()->paginate(2);
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
    if($item->estado=='invisivel'){
        Portfolios::where(['id'=>$id])->update(['estado'=>'visivel',]);}
        else{Portfolios::where(['id'=>$id])->update(['estado'=>'invisivel',]);}

    return back();
    }

    //////////////////////////////////////////////////////

    //////////////////////////Pedidos////////////////////

    public function PedidoIndex()
    {
        return view('admin.visualizar.pedidos.pedidosView');
    }

    public function PedidoCreate()
    {
      return view('mais.pedidos');
    }

    public function PedidoStore($id,Request $request)
    {
        // $request->validate([
        //     'tituloMensagem' => 'required',
        //     'Mensagem' => 'required',
        // ]);
        // $data = $request->all();

        // $imagens = new Portfolios();
        // $imagens->tipo=$data['tipo'];
        // $imagens->estado='visivel';
        // $img = $request->file('imagem');
        // $imgname = time().'.'. $img->getClientOriginalExtension();
        // $path = public_path('/portfolio');
        // $img->move($path,$imgname);
        // $imagens->imagem=$imgname;
        // $imagens->save();
        
        // return redirect('/imagens');
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
        return view('indexportpri')->with(compact("all"));
       }

       public function Viaturas()
       {
        $all=Portfolios::where(['estado'=>'visivel','tipo'=>'Viaturas'])->get();
        return view('indexportpri')->with(compact("all"));
       }

       public function Montras()
       {
        $all=Portfolios::where(['estado'=>'visivel','tipo'=>'Montras'])->get();
        return view('indexportpri')->with(compact("all"));
       }

       public function Lonas()
       {
        $all=Portfolios::where(['estado'=>'visivel','tipo'=>'Lonas/ Expositores'])->get();
        return view('indexportpri')->with(compact("all"));
       }

       public function Placas()
       {
        $all=Portfolios::where(['estado'=>'visivel','tipo'=>'Placas/ Reclamos'])->get();
        return view('indexportpri')->with(compact("all"));
       }

       public function Sinaletica()
       {
        $all=Portfolios::where(['estado'=>'visivel','tipo'=>'Sinalética'])->get();
        return view('indexportpri')->with(compact("all"));
       }

       public function Texteis()
       {
        $all=Portfolios::where(['estado'=>'visivel','tipo'=>'Texteis'])->get();
        return view('indexportpri')->with(compact("all"));
       }

       public function Bandeiras()
       {
        $all=Portfolios::where(['estado'=>'visivel','tipo'=>'Bandeiras'])->get();
        return view('indexportpri')->with(compact("all"));
       }
}
