<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Aviso;

class AvisoController extends Controller
{
	public $arrAviso;
    function enviarAviso(Request $request){
		$fechaActual= date("d/m/Y");
		$aviso = new Aviso();
		// $usuario->id = $request->post('id');
		$aviso->nombre = $request->post('nombre');
		$aviso->contenido = $request->post('contenido');
		$aviso->foto_perfil='profesor';
		//$aviso->fecha = $request->post('fecha');
		$aviso->fecha =$fechaActual;
		//$aviso->asignatura = $request->post('asignatura');
		$aviso->asignatura ='Asignatura';
		$aviso->save();
		//json_encode($aviso);
		return redirect("/obtenerAviso");
	}

	function guardarAviso(Request $request){
		//recuperando fecha actual del sistema  en la creación de un aviso
		$fechaActual= date("Y-m-d h:m:s");
		// $idProfesor=DB::table('profesor')->where('nombre', 'test55')->first();
		DB::table('aviso')->insert(
			['id_profesor' => 2, 'id_apoderado' => $request->post('nombre'),'contenido'=>$request->post('contenido'),
			'fecha'=>$fechaActual]
		);
		
		return redirect("/listarAviso");
	}
	
	public function obtenerAviso(){
		$aviso = Aviso::select("nombre", "contenido","fecha")->get()->toArray();
		//return view("avisos")->with('aviso',$aviso);

	}

    function mostrarAviso(){
		$aviso2 = DB::table('profesor')
		->join('impartir_asignatura', 'profesor.id_profesor', '=', 'impartir_asignatura.id_profesor')
		->join('asignatura','impartir_asignatura.id_asignatura','=','asignatura.id_asignatura')
		->join('asignatura_por_curso','asignatura.id_asignatura','=','asignatura_por_curso.id_asignatura')
		->join('curso','asignatura_por_curso.id_curso','=','curso.id_curso')
		->join('alumno_por_curso','curso.id_curso','=','alumno_por_curso.id_curso')
		->join('alumno','alumno_por_curso.id_alumno','=','alumno.id_alumno')
		->join('alumno_por_apoderado','alumno.id_alumno','=','alumno_por_apoderado.id_alumno')
		->join('apoderado','alumno_por_apoderado.id_apoderado','=','apoderado.id_apoderado')
		->join('aviso','apoderado.id_apoderado','=','aviso.id_apoderado')
		->where('asignatura_por_curso.anio',2019)
		->where('asignatura_por_curso.semestre',2)
		->select('profesor.nombres as nombre','profesor.apellido_paterno as apellido', 'asignatura.nombre as asignatura',
		'profesor.foto as foto_perfil','aviso.contenido as contenido','aviso.fecha as fecha')
		->get();
	  	//$todos = Aviso::all();
      	//return json_encode($todos);
	  	//return response()->json($todos);
	  	return response()->json($aviso2);
	  	//return dd(response()->json($aviso2));
	}
	
	function listarAviso(){
		
		$aviso = DB::table('profesor')
		->join('impartir_asignatura', 'profesor.id_profesor', '=', 'impartir_asignatura.id_profesor')
		->join('asignatura','impartir_asignatura.id_asignatura','=','asignatura.id_asignatura')
		->join('asignatura_por_curso','asignatura.id_asignatura','=','asignatura_por_curso.id_asignatura')
		->join('curso','asignatura_por_curso.id_curso','=','curso.id_curso')
		->join('alumno_por_curso','curso.id_curso','=','alumno_por_curso.id_curso')
		->join('alumno','alumno_por_curso.id_alumno','=','alumno.id_alumno')
		->join('alumno_por_apoderado','alumno.id_alumno','=','alumno_por_apoderado.id_alumno')
		->join('apoderado','alumno_por_apoderado.id_apoderado','=','apoderado.id_apoderado')
		->join('aviso','apoderado.id_apoderado','=','aviso.id_apoderado')
		->where('asignatura_por_curso.anio',2019)
		->where('asignatura_por_curso.semestre',2)
		->select('profesor.id_profesor as id_pro','apoderado.id_apoderado as id_ap','profesor.nombres as nombre_profesor',
		'asignatura.nombre', 'asignatura_por_curso.anio','asignatura_por_curso.semestre','curso.nombre as curso',
		'alumno.nombres as nombre_alumno','apoderado.nombres as nombre_apoderado','profesor.foto as foto_perfil',
		'apoderado.apellido_paterno as apellido_apoderado','aviso.contenido as aviso','aviso.fecha as fecha',
		'alumno.nombres as nombre_alumno','alumno.apellido_paterno as apellido_alumno')
		->get();
		
		$apoderado = DB::table('profesor')
		->join('impartir_asignatura', 'profesor.id_profesor', '=', 'impartir_asignatura.id_profesor')
		->join('asignatura','impartir_asignatura.id_asignatura','=','asignatura.id_asignatura')
		->join('asignatura_por_curso','asignatura.id_asignatura','=','asignatura_por_curso.id_asignatura')
		->join('curso','asignatura_por_curso.id_curso','=','curso.id_curso')
		->join('alumno_por_curso','curso.id_curso','=','alumno_por_curso.id_curso')
		->join('alumno','alumno_por_curso.id_alumno','=','alumno.id_alumno')
		->join('alumno_por_apoderado','alumno.id_alumno','=','alumno_por_apoderado.id_alumno')
		->join('apoderado','alumno_por_apoderado.id_apoderado','=','apoderado.id_apoderado')
		->join('aviso','apoderado.id_apoderado','=','aviso.id_apoderado')
		->where('asignatura_por_curso.anio',2019)
		->where('asignatura_por_curso.semestre',2)
		->select('profesor.id_profesor as id_pro','apoderado.id_apoderado as id_ap','profesor.nombres as nombre_profesor',
		'asignatura.nombre', 'asignatura_por_curso.anio','asignatura_por_curso.semestre','curso.nombre as curso',
		'alumno.nombres as nombre_alumno','apoderado.nombres as nombre_apoderado','profesor.foto as foto_perfil',
		'apoderado.apellido_paterno as apellido_apoderado','aviso.contenido as aviso','aviso.fecha as fecha',
		'alumno.nombres as nombre_alumno','alumno.apellido_paterno as apellido_alumno')
		->first();
		//return dd($aviso);
		//$this->arrAviso=$aviso;
		//return view("avisos")->with('aviso',$aviso)->with('apoderado',$apoderado);
		return view ("avisos",["aviso"=>$aviso,"apoderado"=>$apoderado]);
	}
}
