<?php

namespace App\Http\Controllers;

use App\Models\Pais;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $paises = DB::table('tb_pais')->get();
        return view('pais.index', ['paises' => $paises]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $paises = DB::table('tb_pais')->get(); // Obtiene los países de la base de datos
        return view('pais.new', ['paises' => $paises]); // Pasa la variable a la vista
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pais = new Pais();

        $pais->pais_nomb = $request->name;
        $pais->pais_capi = $request->capital;
        $pais->save();

        $paises = DB::table('tb_pais')->get();

        return view('pais.index', ['paises' => $paises]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pais = Pais::find($id);
        return view('pais.edit', ['pais' => $pais]);
    }

    public function update(Request $request, $id)
    {
        $pais = Pais::find($id);

        $pais->pais_nomb = $request->name;
        $pais->pais_capi = $request->capital;
        $pais->save();

        $paises = DB::table('tb_pais')->get();

        return view('pais.index', ['paises' => $paises]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pais = Pais::find($id);
        $pais->delete();

        $paises = DB::table('tb_pais')->get();

        return view('pais.index', ['paises' => $paises]);
    }
}
