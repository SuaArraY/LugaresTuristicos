@extends('layouts.app')

@section('title', "Registro")

@section('content')
    
        <form action="{{ route('tarea.store') }}" method="POST">
            @csrf
            <div>
                <div>
                   <label for="InputNombre" >Nombre y Apellido:</label>
                   <input type="text" name="nombre" id="InputNombre" placeholder="Ingrese su nombre y apellido" value="{{ old('nombre') }}">
                </div>

                <div>
                    <label for="InputTelefono">Celular: </label>
                    <input type="text" name="telefono" id="InputTelefono" placeholder="Telefono" value="{{ old('telefono') }}">
                </div>

                <div>
                    <label for="InputCorreo">Correo: </label>
                    <input type="email" name="correo" id="InputCorreo" placeholder="Correo" value="{{ old('correo') }}">
                </div>

                <div >
                    <label for="SelectHotel" >Hotel: </label>
                    <select name="hotel" id="SelectHotel">
                        <option value="0">baja</option>
                        <option value="1">lujo</option>                          
                    </select>
                    
                </div>

                <div>
                    <label for="InputFechaLimite">* Fecha Limite </label>
                   <input type="datetime-local" name="fecha_limite" id="InputFechaLimite"  value="{{ old('fecha_limite') }}">
                </div>

                <div>
                    <label for="TextArea">Mensaje: </label>
                   <input type="descripcion" name="mensaje" id="InputFechaLimite" value="{{ old('mensaje') }}" >
                </div>

                <div>
                    <button type="submit">
                        Guardar
                    </button>
                </div>

            </div>

        </form>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
   
@endsection