@extends('layouts.app')

@section('title', "Inicio")

@section('content')
    
        
            @foreach ($images as $row)
            <div class="card">
                <img src="images/{{ $row->image }}" alt="Image">
                <h4> {{ $row->descripcion }}</h4>
                
                <a href="">leer</a>
            </div>
            @endforeach
        
   
@endsection