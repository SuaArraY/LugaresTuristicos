@extends('layouts.app')

@section('content')
    
        
            @foreach ($images as $row)
            <div class="card">
                <img src="images/{{ $row->image }}" alt="Image">
                <h4>Datos</h4>
                
                <a href="">leer</a>
            </div>
            @endforeach
        
   
@endsection