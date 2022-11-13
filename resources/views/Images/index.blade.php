@extends('layouts.app')

@section('content')
    
        
            @foreach ($images as $row)
            <div class="card">
                <img src="images/{{ $row->image }}" alt="Image">
                <h4>Datos</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                 Expedita repudiandae asperiores modi nulla assumenda 
                 facere molestias voluptas blanditiis illum delectus,
                 dicta vel. Ducimus perspiciatis illo iste cupiditate neque sed perferendis!
                </p>
                <a href="">leer</a>
            </div>
            @endforeach
        
   
@endsection