@extends('admin.layouts.app_admin')

@section('content')

<div class="container">

    @component('admin.components.breadcrumb')
        @slot('title') Создание страницы @endslot
        @slot('parent') Главная @endslot
        @slot('active') Страницы @endslot
    @endcomponent

<hr />

<form class="form-horizontal" action="{{route('admin.page.store')}}" method="post">
@csrf
@include('admin.pages.form.form')
</form>

</div>

@endsection