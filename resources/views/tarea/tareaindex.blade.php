@extends('layouts.app')

@section('title', "Confirmacion de envio")

@section('content')
    
    <table >
        <thead>
            <tr>
        
                <th>Nombre</th>
                <th>Celular</th>
                <th>Correo</th>
                <th>Alojamiento</th>
                <th>Fecha</th>
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