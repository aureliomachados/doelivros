<?php namespace doelivros\Http\Controllers;

use doelivros\GeneroLivro;
use doelivros\Http\Requests;
use doelivros\Http\Controllers\Controller;
use doelivros\Http\Requests\GeneroLivroRequest;

use Illuminate\Http\Request;

use Input, Redirect, View;

class GeneroLivroController extends Controller {

    public function __construct(){
        $this->middleware("auth");
    }

    private $rules = [
    'genero' => 'required'
];

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $generos = GeneroLivro::all();
        return View::make("generolivro.index")->with('generos', $generos);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make("generolivro.create");
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(GeneroLivroRequest $request)
	{
        $genero = new GeneroLivro();

        $genero->genero = $request->get("genero");

        $genero->save();

        //redireciona para a página com a lista.
        \Session::flash("message", "Gênero criado com sucesso!");
        \Session::flash("status", "success");
        return Redirect::route("generolivro.index");
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$genero = GeneroLivro::find($id);

        return view("generolivro.show", ['genero' => $genero]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$genero = GeneroLivro::find($id);

        return view("generolivro.edit", ['genero' => $genero]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(GeneroLivroRequest $request ,$id)
	{

            $genero = GeneroLivro::find($id);

            $genero->genero = Input::get("genero");

            $genero->update();

            \Session::flash("message", "Gênero atualizado com sucesso!");
            \Session::flash("status", "warning");
            return Redirect::route("generolivro.index");
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
    {
        GeneroLivro::destroy($id);

        if($id == null){
           return redirect()->back();
        }
        else{
            GeneroLivro::destroy($id);

            \Session::flash("message", "Gênero removido com sucesso!");
            \Session::flash("status", "danger");
            return Redirect::route("generolivro.index");
        }

        return Redirect::route("generolivro.index");
	}

}
