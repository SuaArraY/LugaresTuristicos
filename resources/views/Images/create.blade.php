@extends('layouts.app')

@section('title', "Registrar Imagenes")
@section('content')


<div>
    <h1>Publicar los centros turisticos</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" accept="image/*" name="image">
        <br>
        <input type="text" name="descripcion">
        <input type="submit">
    </form>
</div>


   
@endsection