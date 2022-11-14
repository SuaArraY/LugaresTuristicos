@extends('layouts.app')

@section('title', "Registro")

@section('content')
    
    <form action="{{ route('tarea.store') }}" method="POST">
        <h2>Reserva Viaje</h2>
        @csrf
        <div class= "row">
            <div class="datos">
            <label for="InputNombre" class=form-label>Nombre y Apellido:</label>
            <input type="text" name="nombre" id="InputNombre"  class="name" placeholder="Ingrese su nombre y apellido" value="{{ old('nombre') }}">
            </div>

            <div class="datos">
                <label for="InputTelefono">Celular: </label>
                <input type="text" class="celular" name="telefono" id="InputTelefono" placeholder="Telefono" value="{{ old('telefono') }}">
            </div>

            <div class="datos">
                <label for="InputCorreo">Correo: </label>
                <input type="email" class="correo" name="correo" id="InputCorreo" placeholder="Correo" value="{{ old('correo') }}">
            </div>

            <div class="datos">
                <label for="SelectHotel" >Alojamiento: </label>
                <select name="hotel" id="SelectHotel" class="hotel">
                    <option value="0">Campamento</option>
                    <option value="1">Hotel 2 estrellas</option>  
                    <option value="2">Hotel 3 estrellas</option>   
                    <option value="3">Hotel 4 estrellas</option>   
                    <option value="4">Hotel 5 estrellas</option>                           
                </select>
                
            </div>

            <div class="datos">
                <label for="InputFechaLimite">* Fecha Reserva</label>
            <input type="datetime-local" name="fecha_limite" id="InputFechaLimite"  value="{{ old('fecha_limite') }}">
            </div>

            
            <div class="datos">
                
                <textarea type="descripcion" placeholder="Mensaje"  name="mensaje" id="InputFechaLimite" cols="70"rows="10" value="{{ old('mensaje') }}" ></textarea>
            
            </div>

            <div class="conte-button">
                <button type="submit" class="button" >
                    Guardar
                </button>
            </div>

        </div>

    </form>
        @if ($errors->any())
            <div class="alert alert-danger alerta">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
   
@endsection