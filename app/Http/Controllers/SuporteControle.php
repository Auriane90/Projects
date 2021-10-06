<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Linha;
use App\Atendimento;
use App\Technews;
use App\fac;
use App\time;
use App\sistema;

class SuporteControle extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    // Linha do tempo
    public function linhaDoTempo()
    {
        $linha = Linha::all();
        return view('linhaDoTempo', compact('linha'));
    }

   


    public function criarlinha(Request $request)
    {
        $request->validate([
            'periodo' => 'required',
            'titulo' => 'required',
            'descricao' => 'required',
            'upload-imagem-cadastro' => 'required'
        ]);
        $path = $request->file('upload-imagem-cadastro')->store('imagens', 'public');
        $linha = new Linha();
        $linha->periodo = $request->input('periodo');
        $linha->titulo = $request->input('titulo');
        $linha->descricao = $request->input('descricao');
        $linha->image = $path;
        $linha->save();
        return redirect('/linhaDoTempo');
            
        
    }

    public function alterarlinha(Request $request, $id)
    {
        $v = $request->input('upload-imagem');
        if(isset($v)){
            $path = $request->file('upload-imagem')->store('imagens', 'public');
            $linha = Linha::find($id);
            $linha->periodo = $request->input('periodo');
            $linha->titulo = $request->input('titulo');
            $linha->descricao = $request->input('descricao');
            $linha->image = $path;
            
            $linha->save();
            return redirect('/linhaDoTempo');
        }else{
            $linha = Linha::find($id);
            $linha->periodo = $request->input('periodo');
            $linha->titulo = $request->input('titulo');
            $linha->descricao = $request->input('descricao');
            
            $linha->save();
            return redirect('/linhaDoTempo');
        }
        
        
    }

    public function excluirlinha($id)
    {
        $linha = Linha::find($id);
        if(isset($linha)){
            $linha->delete();
        }
        return redirect('/linhaDoTempo');
        
    }

    // Sistemas
    public function sistemas()
    {
        $sistemas = sistema::all();
        return view('sistemas', compact('sistemas'));
    }

    public function criarSistema(Request $request)
    {
        $path = $request->file('upload-imagem-cadastro')->store('imagens', 'public');
        $sistema = new sistema();
        $sistema->nome = $request->input('nome');
        $sistema->image = $path;
        $sistema->save();

        return redirect('/sistemas');
    }

    public function alterarSistemas(Request $request, $id)
    {
        $v = $request->input('upload-imagem');
        if(isset($v)){
            $path = $request->file('upload-imagem')->store('imagens', 'public');
            $sistema = sistema::find($id);
            $sistema->nome = $request->input('nome');
            $sistema->image = $path;
            $sistema->save();
            return redirect('/sistemas');
        }else{
            $sistema = sistema::find($id);
            $sistema->nome = $request->input('nome');
            $sistema->save();
            return redirect('/sistemas');
        }
        
    }

    public function excluirSistema($id)
    {
        $sistemas = sistema::find($id);
        if(isset($sistemas)){
            $sistemas->delete();
        }
        return redirect('/sistemas');
        
    }

    // Atendimentos
    public function atendimentos()
    {
        $atend = Atendimento::all();
        return view('atendimentos', compact('atend'));
    }

    public function alterarAtendimentos(Request $request, $id)
    {
        $atend = Atendimento::find($id);
        $atend->nome = $request->input('nome');
        $atend->quantidade = $request->input('quantidade');
        $atend->save();
        return redirect('/atendimentos');
    }

    // Technews
    public function technews()
    {
        $tec = Technews::all();
        return view('technews', compact('tec'));
    }

    public function criarTechnews(Request $request)
    {

        $path = $request->file('upload-imagem-cadastro')->store('imagens', 'public');
        $tec = new Technews();
        $tec->titulo = $request->input('titulo');
        $tec->subtitulo = $request->input('subtitulo');
        $tec->data = $request->input('data');
        $tec->cliente = $request->input('cliente');
        $tec->descricao = $request->input('descricao');
        $tec->image = $path;
        $tec->save();

        return redirect('/technews');
    }

    public function alterarTechnews(Request $request, $id)
    {
        $v = $request->input('upload-imagem');
        if(isset($v)){
            $path = $request->file('upload-imagem')->store('imagens', 'public');
            $tec = Technews::find($id);
            $tec->titulo = $request->input('titulo');
            $tec->subtitulo = $request->input('subtitulo');
            $tec->data = $request->input('data');
            $tec->cliente = $request->input('cliente');
            $tec->descricao = $request->input('descricao');
            $tec->image = $path;
            $tec->save();

            return redirect('/technews');
        }else{
            $tec = Technews::find($id);
            $tec->titulo = $request->input('titulo');
            $tec->subtitulo = $request->input('subtitulo');
            $tec->data = $request->input('data');
            $tec->cliente = $request->input('cliente');
            $tec->descricao = $request->input('descricao');
            $tec->save();

            return redirect('/technews');
        }
    }

    public function excluirTechnews($id){
        $tec = Technews::find($id);
        if(isset($id)){
            $tec->delete();
        }
        return redirect('/technews');
    }

    // Fac
    public function fac()
    {
        $facs = fac::all();
        return view('fac', compact('facs'));
    }

    public function criarFac(Request $request)
    {
        $request->validate([
            'perguntas'=>'required',
            'respostas'=>'required',
        ]);

        $facs = new fac();
        $facs->perguntas = $request->input('perguntas');
        $facs->respostas = $request->input('respostas');
        $facs->save();
        
        return redirect('/fac');
        
    }
    public function alterarFac(Request $request, $id)
    {
        $facs = fac::find($id);
        $facs->perguntas = $request->input('perguntas');
        $facs->respostas = $request->input('respostas');
        $facs->save();
        
        return redirect('/fac');
        
    }

    public function excluirFac($id)
    {
        $facs = fac::find($id);
        if(isset($facs)){
            $facs->delete();
        }
        
        return redirect('/fac');
        
    }

    
    // Nosso Time
    public function nossoTime()
    {
        $times = time::all();
        return view('nossoTime', compact('times'));
    }
    
    public function criarNossoTime(Request $request)
    {

        $path = $request->file('upload-imagem-cadastro')->store('imagens', 'public');
        $times = new time();
        $times->nome = $request->input('nome');
        $times->cargo = $request->input('cargo');
        $times->email = $request->input('email');
        $times->image = $path;
        $times->save();

        return redirect('/nossoTime');
    }

    public function alterarNossoTime(Request $request, $id)
    {
        $v = $request->input('upload-imagem');
        if(isset($v)){
            $path = $request->file('upload-imagem')->store('imagens', 'public');
            $times = time::find($id);
            $times->nome = $request->input('nome');
            $times->cargo = $request->input('cargo');
            $times->email = $request->input('email');
            $times->image = $path;
            $times->save();

            return redirect('/nossoTime');
        }else{
            $times = time::find($id);
            $times->nome = $request->input('nome');
            $times->cargo = $request->input('cargo');
            $times->email = $request->input('email');
            $times->save();

            return redirect('/nossoTime');
        }
    }

    public function excluirNossoTime($id)
    {
        $times = time::find($id);
        if(isset($times)){
            $times->delete();
        }
        return redirect('/nossoTime');
    }

    public function index()
    {
        $linha = Linha::all()->slice(-4);
        $time = time::all();
        $technews = Technews::all()->slice(-3);
        $facs = fac::all();
        $atendimentos = Atendimento::all();
        //$cond = $technews->slice(-3);
        return view('home', compact('time', 'facs', 'linha', 'atendimentos', 'technews'));
    }


}