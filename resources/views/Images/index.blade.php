@extends('layouts.app')

@section('content')
    
    @foreach ($images as $row)
        <img src="images/{{ $row->image }}" alt="Image">
    @endforeach
    

@endsection