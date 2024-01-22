<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;
use App\Models\Ciclo;


class IkasleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function ikasleTxiki(){
        $ikasleak=Alumno::all();
        // $txiki=[];
        // foreach($ikasleak as $ikasle){
        //     if($ikasle->fechanacimiento<2000-01-01){
        //         $txiki.push($ikasle);
        //     }
        // }
        return view('ikasleTxiki',['ikasleak'=>$ikasleak]);
    }

    public function matrikulatu(){
        $ikasleak=Alumno::all();
        $cicloGabe=[];
         foreach($ikasleak as $ikasle){
            if($ikasle->ciclo_id==0){
                $cicloGabe[]=$ikasle;
            }
        }
        $cursos=Ciclo::all();
        return view('matrikulaListak',['ikasleak'=>$cicloGabe]);
    }

    public function cicloAukeratu($id){
        $ikaslea=Alumno::find($id);
        $cursos=Ciclo::all();
        return view('cicloakLista',['ikaslea'=>$ikaslea, 'cursos'=>$cursos]);
    }

    public function cicloanGehitu(Request $request){
        $ikaslea=Alumno::find($request->input('ikaslea'));
        $curso=Ciclo::find($request->input('ciclo'));

        $ikasleak=Alumno::all();
        $kont=0;
         foreach($ikasleak as $ikasle){
            if($ikasle->ciclo_id==$curso->id){
                $kont++;
            }
        }
        if($kont>=25){
            echo "Ezin da ciclo honetan sartu, jende gehiegi dago";
        }
        else{
            $ikaslea->ciclo_id=$curso->id;
            $ikaslea->save();
            return redirect('/matrikulatu');
        }

    }

}
