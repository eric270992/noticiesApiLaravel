<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use App\Models\Imatge;
use App\Models\Noticia;
use App\Models\Categoria;
use Illuminate\Http\Request;

class NoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Recuperem el llistat de noticies
        $noticies = Noticia::paginate(10);
        //El passem a la vista
        return view("Noticies.noticies")->with("noticies",$noticies);
    }

    public function  assignCategory(){
        $noticia = Noticia::where('id',1)->first();

        //Indiquem que ens agregui en aquesta noticia les seguents categories
        // $noticia->categories()->attach([1,2]);
        // $noticia->update();

        dd($noticia->categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categoria::get();
        $autors = Autor::get();
        return view("Noticies.noticia_form")->with(["categorias"=>$categories,"autors"=>$autors]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


    //    $request->validate([
    //     "titulo"=>"required",
    //     "categorias"=>"required",
    //     "contenido"=>"required|min:5",
    //     "imatges"=>"mimes:jpeg,jpg,bmp,png,PNG|max:10240",
    //     "autor" => "required"
    //    ]);

       //dd($request->imatges->getClientOriginalName());

       //Guardem la imatge
       $imatge = new Imatge();
       $imatge->Nom = $request->imatges->getClientOriginalName();
       $imatge->save();
       $request->imatges->move(public_path('images'),$imatge->Nom);

       $noticia = new Noticia();
       $noticia->titol = $request["titulo"];
       $noticia->contingut = $request->contenido;
       $noticia->data_publicacio = now();
       //$noticia->autor_id = $request->autor;
       $noticia->save();
       $noticia->categories()->sync($request->categorias);
       $noticia->update();

       //Sincornitzem la taula intermedia on mirem si ja hi ha un registre amb el mateix id de la imatge i la categoria
       $noticia->imatges()->sync($imatge->id,$noticia->id);
       $noticia->update();

        //Recuperem el llistat de noticies
        $noticies = Noticia::paginate(10);
        //El passem a la vista
        return view("Noticies.noticies")->with("noticies",$noticies);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $noticia = Noticia::find($id);
        return view("Noticies.noticia_detail")->with("noticia",$noticia);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Mostra el mateix formulari on creem la notic??a per?? li passem la noticia a editar carregada
        $noticia = Noticia::find($id);

        $categories = Categoria::get();
        $autors = Autor::get();
        return view("Noticies.noticia_form")->with(["categorias"=>$categories,"autors"=>$autors,"noticia"=>$noticia]);
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
        //Actualizem la noticia
        dd($request);
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
        return Noticia::paginate(10);
    }

    public function getById($id){
        return Noticia::find($id);
    }
}
