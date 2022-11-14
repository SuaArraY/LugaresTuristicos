<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use Illuminate\Http\Request;



class TareaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tareas = Tarea::orderByDesc('id')->get();
        return view('tarea.tareaindex',compact('tareas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tarea.tareacreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos = $request->validate([
            'nombre'    => 'required',
            'telefono' => 'required',
            'correo'    => 'required',
            'hotel' => 'required|numeric|min:0|max:2',
            'fecha_limite' => 'required|date_format:Y-m-d\TH:i',
            'mensaje' => 'required',
        ]);
        $tarea = Tarea::create($datos);
        return redirect()->route('tarea.index');
    }

    
}
