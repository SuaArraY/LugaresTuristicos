@extends('layouts.app')

@section('title', "Registrar Imagenes")
@section('content')


<div>
    <h1>Publicar los centros turisticos</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" accept="image/*" name="image">
        <br>
        <label for="">Titulo</label>
        <input type="text">
        <br>
        <label for="">Descripcion </label>
        <input type="text" name="descripcion">
        <br>
        <input type="submit">
        <br>
        <label for="">No se puede enviar los datos del titulo y descripcion, solo se puede enviar las imagenes</label>
        <br>
        <label for="">Actualizacion a futuro</label>
        
    </form>
</div>
 
@endsection