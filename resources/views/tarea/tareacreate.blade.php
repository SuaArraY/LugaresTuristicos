@extends('layouts.app')

@section('title', "Registro")

@section('content')
    
        <form action="">
            <div>
                <div>
                   <label for="InputNombre" >Nombre y Apellido:</label>
                   <input type="text" name="nombre" id="InputNombre" placeholder="Ingrese su nombre y apellido">
                </div>

                <div>
                    <label for="InputTelefono">Celular: </label>
                    <input type="text" name="telefono" id="InputTelefono" placeholder="Telefono">
                </div>

                <div>
                    <label for="InputCorreo">Correo: </label>
                    <input type="email" name="correo" id="InputCorreo" placeholder="Correo">
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
                   <input type="datetime-local" name="fecha_limite" id="InputFechaLimite"  >
                </div>

                <div>
                    <label for="TextArea">Mensaje: </label>
                   <input type="descripcion" name="mensaje" id="InputFechaLimite"  >
                </div>

            </div>
        </form>
        
   
@endsection