@forelse($materials as $material)
    <div class="row">
        <div class="col-sm-12">
            <h2><a href="{{route('material', $material->slug)}}">{{$material->title}}</a></h2>
            <p>{!! $material->theme !!}</p>
        </div>
    </div>
@empty
<h2>Пусто</h2>
@endforelse