@extends('layouts.app')

@section('title', "Confirmacion de envio")

@section('content')
    

    <table class="table table-stripped table-hover">
        <thead>
            <tr>
        
                <th>Nombre</th>
                <th>Telefono</th>
                <th>Correo</th>
                <th>Hotel</th>
                <th>Fecha</th>
                <th>---</th>
                <th>Mensaje</th>
            </tr>
        </thead>
        <tbody>
            
                
            @foreach ($tareas as $tarea)
                <tr>
                    <td>
                        {{ $tarea->nombre }}
                    </td>
                    <td>
                        {{ $tarea->telefono}}
                    </td>
                    <td>
                        {{ $tarea->correo }}
                    </td>
                    <td>
                        {{ $tarea->hotel }}
                    </td>
                    <td>
                        {{ $tarea->fecha_limite }}
                    </td>
                    <td>
                       {{ $tarea->mensaje }}
                    </td>
                </tr>
                
            @endforeach
        </tbody>
    </table>
   
@endsection