<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actividad;
use App\Asignatura;

//use Notify;

class ActividadController extends Controller
{
    //
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function index(){
        return view('actividades');
    }

    // public function get_events(){
    //     $events = Actividad::join('asignatura','actividad.id_asignatura', '=', 'asignatura.id_asignatura')
    //                         ->join('impartir_asignatura','impartir_asignatura.id_profesor', '=', 'impartir_asignatura.id_profesor')
    //                         ->join('profesor', 'profesor.id_profesor', '=', 'impartir_asignatura.id_profesor')
    //                         ->select("id_actividad as id","titulo as title", "fecha_inicio as start","fecha_final as end","descripcion","tipo as backgroundColor","tipo as borderColor",'nombre as asignatura', 'nombres as profesor')
    //                         ->get()->toArray();
    //    return response()->json($events);
    // }

    public function obtenerAsignaturas(){
        $asignaturas = Asignatura::pluck('nombre', 'id_asignatura');
        return $asignaturas;
    }

    // public function create_events(Request $request){
    //     $input = $request->all();
    //     //$request->currColor;
    //     $fechas = explode(" - ", $input["fechas"]);

    //     $input["fecha_inicio"] = $fechas[0];
    //     $input["fecha_final"] = $fechas[1];
    //     $input["fecha_final"] = $fechas[1];
    //     $input["id_asignatura"] = 1;
    //     //$input["color"] = "#3c8dbc";

    //     Actividad::create($input);
    //     //Notify::success("Se registro","felicidades");
    //     return redirect("/actividades");
    // }





    //Nueva version

    public function get_events(){
        $events = Actividad::join('asignatura','actividad.id_asignatura', '=', 'asignatura.id_asignatura')
                            ->join('impartir_asignatura','impartir_asignatura.id_profesor', '=', 'impartir_asignatura.id_profesor')
                            ->join('profesor', 'profesor.id_profesor', '=', 'impartir_asignatura.id_profesor')
                            ->select("id_actividad as id","titulo as title", "fecha_inicio as start","fecha_final as end","descripcion","tipo as backgroundColor","tipo as borderColor",'nombre as asignatura', 'nombres as profesor')
                            ->get()->toArray();
       return response()->json($events);
    }


    public function store(Request $request){
        $input = $request->all();
        //$request->currColor;
        $fechas = explode(" - ", $input["fechas"]);

        $input["fecha_inicio"] = $fechas[0];
        $input["fecha_final"] = $fechas[1];
        $input["fecha_final"] = $fechas[1];
        $input["id_asignatura"] = 1;
        //$input["color"] = "#3c8dbc";

        Actividad::create($input);
        toastr()->success('La actividad se ha registrado satisfactoriamente', 'Felicidades!');
        return redirect("/actividades");
    }


    public function show($id)
    {
        //
    }


    //Funcion eliminar con ajax
    public function destroy($id)
    {
        // // if ($request->ajax()){
        //     $event = Actividad::find($id);
        //     if(!is_null($event)){
        //         $event->delete();
        //         return Response()->json([
        //             'response'  =>  true,
        //             'id'  =>  $event->id,
        //             'message'   =>  'Actividad eliminada satisfactoriamente :p'
        //         ]);
        //     }
        //     return Response()->json([
        //         'response'  =>  false,
        //         'message'   =>  'Ha ocurrido un error, intente nuevamente'
        //     ]);
        // // }

        $event = Actividad::find($id);

        if($event == null)
            return Response()->json([
                'message'   =>  'ERROR AL ELIMINAR EVENTO'
            ]);

        $event->delete();

        return Response()->json([
            'message'   =>  'EVENTO ELIMINADO EXITOSAMENTE.'
        ]);


    }

    public function update(Request $request)
    {
        echo "jdshjks";
        $id = $request->id_actividad;
        $event = Actividad::find($id);
        $event->titulo = $request->titulo;
        $event->tipo = $request->tipo2;

        $fechas = explode(" - ",$request->fechas_update);
        //echo $fechas[0];

        $event->fecha_inicio = $fechas[0];
        $event->fecha_final = $fechas[1];
        $event->descripcion = $request->descripcion;
        $event->id_asignatura = 1;

        if($event->save()){
            toastr()->success('La actividad se ha actualizado satisfactoriamente', 'Felicidades!');

        }else{
            toastr()->error("Ha ocurrido un problema, por favor intente nuevamente, Error!");

        }
        return redirect("/actividades");
            // return response()->json([
            //     'status'    =>  201,
            //     'message'   =>  'EVENTO ACTUALIZADO EXITOSAMENTE'
            // ]);
        // return response()->json([
        //     'status'    =>  503,
        //     'message'   =>  'SE PRODUJO UN ERROR AL ACTUALIZAR EVENTO'
        // ]);
        // toastr.success(data.message);

    }


}
