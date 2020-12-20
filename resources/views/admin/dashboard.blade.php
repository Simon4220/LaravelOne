@extends('admin.layouts.app_admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <div class="jumbotron">
                <p><span class="label label-primary">Количество страниц: {{$count_pages}}</span></p>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="jumbotron">
                <p><span class="label label-primary">Количество материалов: {{$count_materials}}</span></p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <a class="btn btn-primary" href="{{route('admin.page.create')}}">Создать страницу</a>
            @foreach($pages as $page)
               <a class="list-group-item text-decoration-none" href="{{route('admin.page.edit', $page)}}">
                <h4 class="list-gpoup-item-heading">{{$page->title}}</h4>
                <p class="list-group-item-text">
                Количество материалов: {{$page->materials()->count()}}
                </p>
                </a> 
            @endforeach
        </div>
        <div class="col-sm-6">
            <a class="btn btn-primary" href="{{route('admin.material.create')}}">Создать материал</a>
            @foreach($materials as $material)
               <a class="list-group-item text-decoration-none" href="{{route('admin.material.edit', $material)}}">
                <h4 class="list-gpoup-item-heading">{{$material->title}}</h4>
                <p class="list-group-item-text">
                    {{$material->pages()->pluck('title')->implode(', ')}}
                </p>
                </a>
            @endforeach
            
            
        </div>
    </div>
</div>
@endsection