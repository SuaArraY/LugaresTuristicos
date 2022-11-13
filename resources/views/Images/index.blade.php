@extends('layouts.app')

@section('content')
    
        
            @foreach ($images as $row)
            <div class="card">
                <img src="images/{{ $row->image }}" alt="Image">
                <h4>Datos</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                 Expedita repudiandae asperiores modi nulla assumenda 
                </p>
                <a href="">leer</a>
            </div>
            @endforeach
        
   
@endsection