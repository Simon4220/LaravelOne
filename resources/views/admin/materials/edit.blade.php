@extends('admin.layouts.app_admin')

@section('content')

<div class="container">

    @component('admin.components.breadcrumb')
        @slot('title') Редактирование материала @endslot
        @slot('parent') Главная @endslot
        @slot('active') Материалы @endslot
    @endcomponent

<hr />

<form class="form-horizontal" action="{{route('admin.material.update', $material)}}" method="post">
<input type="hidden" name="_method" value="put">
@csrf
@include('admin.materials.form.form')
</form>

</div>

@endsection