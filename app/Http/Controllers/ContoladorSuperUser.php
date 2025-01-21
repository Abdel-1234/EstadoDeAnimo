<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Estado;
use Illuminate\Support\Facades\DB;

class ContoladorSuperUser extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return View('admin.principal',[
            'users'  =>$users,
        ]);
    }

    public function estadistica($descripcion,$id)
    {
        $almuerzo = DB::table('actividads')
                ->where('id_usuario', $id)
                ->where('descripcion', "almuerzo")
                ->where('id_estado', $descripcion)
                ->count();
        $prueba = DB::table('actividads')
                ->where('id_usuario', $id)
                ->where('descripcion', "prueba")
                ->where('id_estado', $descripcion)
                ->count();
        $prueba1 = DB::table('actividads')
                ->where('id_usuario', $id)
                ->where('descripcion', "prueba1")
                ->where('id_estado', $descripcion)
                ->count();
        $prueba2 = DB::table('actividads')
                ->where('id_usuario', $id)
                ->where('descripcion', "prueba2")
                ->where('id_estado', $descripcion)
                ->count();
        return View('admin.estadistica',[
            'almuerzo'  =>$almuerzo,
            'prueba'  =>$prueba,
            'prueba1'  =>$prueba1,
            'prueba2'  =>$prueba2,
        ]);
    }
    public function tabla($descripcion,$id)
    {
        $actividades = DB::table('actividads')
                ->where('id_usuario', $id)
                ->where('id_estado', $descripcion)
                ->get();
        return View('admin.tabla',[
            'actividades'  =>$actividades,
        ]);
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
        $estados = Estado::all();
        return View('admin.mostrarUsuario',[
            'estados'  =>$estados,
            'id' =>$id,
        ]);

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
}
