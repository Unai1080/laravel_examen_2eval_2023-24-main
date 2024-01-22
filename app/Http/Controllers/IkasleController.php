<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;
use App\Models\Ciclo;
use App\Models\Empresa;
use App\Models\Fct;




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

    public function enpresaBista(){
        $ikasleak=Alumno::all();
        $fctak=Fct::all();
        $enpresaGabe=[];

        //hauek enpresa duten ikasleak dira enpresa ez dutenak lortu nehar ditut
        foreach($fctak as $fct){
            foreach($ikasleak as $ikasle){
                $ikasle->id==$fct->id_alumno;
            }
        }

        return view('enpresaFct',['ikasleak'=>$ikasleak]);
    }

    public function enpresaBilatu($id){
        $ikaslea=Alumno::find($id);
        $enpresak=Empresa::all();

        //hemen goikoan bezala egin beharko zen bakarrik ikasle ez duten enpresak agertzeko
        return view('enpresaEsleitu',['enpresak'=>$enpresak,'ikaslea'=>$ikaslea]);

    }

    public function enpresaEsleitu(Request $request){  
        $ikaslea=Alumno::find($request->input('ikaslea'));
        $enpresa=Empresa::find($request->input('enpresa'));

        $ikasleak=Alumno::all();
        $enpresak=Empresa::all();
        $fctak=Fct::all();
        $kont=0;
        $kont2=0;

        //enpresa bat esleituta dauka ikasleak
        foreach($fctak as $fct){
            foreach($ikasleak as $ikasle){
                if($ikasle->id==$fct->id_alumno){
                    $kont++;
                }
                
            }
        }
        

        foreach($fctak as $fct){
            foreach($enpresak as $i){
                if($i->id==$fct->id_enpresa){
                    $kont2++;
                }
                
            }
        }
        if($kont!==0){
            echo 'ikasle honek enpresa bat dauka esleituta';
        }
        else if($kont!==0){
            echo 'enpresa honek ikasle bat dauka esleituta';
        }
        else{
            $fct=Fct::create([
                'id_alumno'=>$ikaslea->id,
                'id_enpresa'=>$enpresa->id,
                'fechaInicio'=>now(),
                'fechaFin'=>now(),
            ]);
            return redirect('/enpresa');
        }



    }

}
