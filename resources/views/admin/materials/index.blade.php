@extends('admin.layouts.app_admin')

@section('content')

<div class="container">

    @component('admin.components.breadcrumb')
        @slot('title') Список материалов @endslot
        @slot('parent') Главная @endslot
        @slot('active') Материалы @endslot
    @endcomponent
<a href="{{route('admin.material.create')}}" class="btn btn-primary pull-right">
<i class="fa fa-plus-square-o"></i> Создать материал</a>
<hr>
<table class="table table-striped">
    <thead>
        <th>Наименование</th>
        <th>Публикация</th>
        <th class="text-right">Действие</th>
    </thead>
    <tbody>
        @forelse ($materials as $material)
            <tr>
                <td>{{$material->title}}</td>
                <td>{{$material->active}}</td>
                <td class="text-right">
                    <form onsubmit="if(confirm('Удалить?')){ return true} else { return false }" action="{{route('admin.material.destroy', $material) }}" method="POST">
                    
                        <input type="hidden" name="_method" value="DELETE">
                        @csrf
                        
                        <a href="{{route('admin.material.edit', $material)}}"><i class="fa fa-edit"></i></a>
                        
                        <button type="submit" class="btn"><i class="fa fa-trash-o"></i></button>
                    
                    </form>
                       
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="3" class="text-center"><h2>Данные отсутвуют</h2></td>
            </tr>
        @endforelse
    </tbody>
    <tfoot>
        <tr>
            <td colspan="3">
                <ul class="pagination pull-right">
                        {{$materials->links('vendor.pagination.bootstrap-4')}}
                </ul>
            </nav>
            </td>
        </tr>
    </tfoot>
</table>
</div>

@endsection