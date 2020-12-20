@foreach($pages as $page)

    @if($page->children->where('active', 1)->count())
        <li class="list-group-item text-decoration-none">
            <a href='{{url("/user/page/$page->slug")}}' class="text-decoration-none">
            {!! $delimiter ?? "" !!}{{$page->title}}
            <p>Кол-во материла: {{$page->materials()->count()}}</p>

            </a>
            <ul class="list-group">
                @include('layouts.nav', [
                    'pages' => $page->children, 
                    'delimiter' => ' - ' . $delimiter
                ])
            </ul>
    @else
        <li class="list-group-item text-decoration-none">
            <a href='{{url("/user/page/$page->slug")}}' class="text-decoration-none">
            {{$page->title}}
            <p>Кол-во материла: {{$page->materials()->count()}}</p>
            </a>
    @endif

        </li>
@endforeach