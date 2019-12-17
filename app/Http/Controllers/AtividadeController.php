<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Atividade;

class AtividadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dados = Atividade::all();
        return $dados;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // Pega os dados do Json
        $data = $request->json()->all();

        // Cria um novo objeto Atividade
        $atividade = new Atividade;

        $atividade->atividade      = $data['atividade'];
        $atividade->responsavel_id = $data['responsavel_id'];
        $atividade->status_id      = $data['status_id'];
        $atividade->deadline       = $data['deadline'];

        $atividade->save();

        // Retorna o Objeto
        return $atividade;

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Cria um novo objeto Atividade
        $atividade = Atividade::find($id);

        // Retorna o Objeto
        return $atividade;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Pega os dados do Json
        $data = $request->json()->all();

        // Cria um novo objeto Atividade
        $atividade = Atividade::find($id);

        $atividade->atividade      = $data['atividade'];
        $atividade->responsavel_id = $data['responsavel_id'];
        $atividade->status_id      = $data['status_id'];
        $atividade->deadline       = $data['deadline'];

        $atividade->save();

        // Retorna o Objeto
        return $atividade;        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Atividade::destroy($id);
        $this->index();
    }
}
