@extends('admin.layouts.app_admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <div class="jumbotron">
                <p><span class="label label-primary">Количество страниц</span></p>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="jumbotron">
                <p><span class="label label-primary">Количество материалов</span></p>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="jumbotron">
                <p><span class="label label-primary">Количетсво пользователей</span></p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <a class="btn btnblock btn-default" href="#">Создать страницу</a>
            <a class="list-group-item" href="#">
                <h4 class="list-gpoup-item-heading">Страницы</h4>
                <p class="list-group-item-text">
                Кол-во материалов
                </p>
            </a>
        </div>
        <div class="col-sm-6">
            <a class="btn btnblock btn-default" href="#">Создать материал</a>
            <a class="list-group-item" href="#">
                <h4 class="list-gpoup-item-heading">Материалы</h4>
                <p class="list-group-item-text">
                Кол-во материалов
                </p>
            </a>
        </div>
    </div>
</div>
@endsection