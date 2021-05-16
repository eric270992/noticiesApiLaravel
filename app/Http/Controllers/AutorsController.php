<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use App\Models\Noticia;
use Illuminate\Http\Request;

class AutorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $autors = Autor::get();
        //Mostrar tots els autors
        return view("Autors.autors")->with("autors",$autors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //Recuperem un autor per ID i també les notícies que té relacionades.
        $autor=Autor::find($id);

        $noticies = Noticia::where("autor_id","=",$id)->paginate(10);

        //Retornem a la vista corresponent amb les noticies i l'autor
        return view("Autors.autor-detail")->with(["autor"=>$autor,"noticies"=>$noticies]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getAll(){
        return Autor::paginate(10);
    }
}
