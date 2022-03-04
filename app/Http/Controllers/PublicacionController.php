<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publicacion;

class PublicacionController extends Controller
{
    //
    public function crearPublicacion(Request $request)
    {
        $publicacion = new Publicacion();
        $publicacion->titulo = $request->titulo;
        $publicacion->contenido = $request->contenido;
        $publicacion->slug = $request->slug;
        $publicacion->unidad = $request->unidad;
        $publicacion->imagen = $request->imagen;
        $publicacion->save();
        return response()->json(['mensaje' => 'Publicacion creada correctamente'],200);
    }

    public function editarPublicacion(Request $request)
    {
        $publicacion = Publicacion::find($request->id);
        $publicacion->titulo = $request->titulo;
        $publicacion->contenido = $request->contenido;
        $publicacion->slug = $request->slug;
        $publicacion->unidad = $request->unidad;
        $publicacion->imagen = $request->imagen;
        $publicacion->save();
        return response()->json(['mensaje' => 'Publicacion editada correctamente'],200);
    }

    public function eliminarPublicacion(Request $request)
    {
        $publicacion = Publicacion::find($request->id);
        $publicacion->delete();
        return response()->json(['mensaje' => 'Publicacion eliminada correctamente'],200);
    }
    
    public function mostrarPublicacion($slug)
    {
        $publicacion = Publicacion::where('slug', $slug)->first();
if($publicacion)
{
    return view('publicacion', ['publicacion' => $publicacion]);
}
else{
    return response()->json(['mensaje'=> 'No se encontro la publicacion'],404);
}

    }

    public function Inicio()
    {
        return view('index');
    }
    
}
