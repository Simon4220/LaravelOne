@extends('layouts.app')

@section('title', $material->title)

@section('content')

<div class="container">
               
    <div class="row">
        <div class="col-sm-12">
            <h1>{{$material->title}}</h1>
            <h3>{{$material->theme}}</h3>
            <div><p>{{$material->description}}</p></div>   
        </div>
    </div>
                
</div>

@endsection