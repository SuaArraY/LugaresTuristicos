@extends('layouts.app')

@section('title', "Registrar Imagenes")
@section('content')

<div>
    <form action="" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" accept="image/*" name="image">
        <br>
        <input type="submit">
    </form>
</div>
   
@endsection