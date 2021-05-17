<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Categoria::get();
        //Retornar vista amb llistat de totes les categories
        return view("Categorias.categorias")->with("categorias",$categorias);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Mostrar formulari per crear categorias
        return view("Categorias.categoria_form");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Recuperem els elements que arriben en el request i creem un categoria
        $categoria = new Categoria();
        $categoria->nom = $request->nombre;
        $categoria->descripcio = $request->descripcion;

        $categoria->save();

        return redirect(route('categorias.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categoria = Categoria::find($id);
        // //Fem consulta indicant que la noticia tingui categoria
        // $noticies = Noticia::whereHas('categories',function($q) use ($id){
        //     //Indiquem que el id de les categories de la noticia sigui igual al que rebem
        //     $q->where('categories.id',$id);
        // })->paginate(10);

        //Recuperem noticies de la categoria amb paginació.
        $noticies=$categoria->noticies()->paginate(10);
        //Dirigim a la vista on mostrarem en detall una categoria i a més les notícies associades
        return view("Categorias.categoria_detail")->with(["categoria"=>$categoria,"noticies"=>$noticies]);
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
        return Categoria::get();
    }

    public function getNoticiesCategoria($id){
        $categoria = Categoria::find($id);

        return $categoria->noticies()->paginate(10);
    }
}
