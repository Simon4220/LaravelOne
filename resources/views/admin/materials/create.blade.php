@extends('admin.layouts.app_admin')

@section('content')

<div class="container">

    @component('admin.components.breadcrumb')
        @slot('title') Создание материала @endslot
        @slot('parent') Главная @endslot
        @slot('active') Материалы @endslot
    @endcomponent

<hr />

<form class="form-horizontal" action="{{route('admin.material.store')}}" method="post">
@csrf
@include('admin.materials.form.form')
<input type="hidden" name="created_by" value="{{Auth::id()}}">
</form>

</div>

@endsection