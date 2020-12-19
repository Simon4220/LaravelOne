
@foreach ($pages as $page)

<option value="{{$page->id ?? ''}}"

  @isset($material->id)
    @foreach ($material->pages as $page_material)

        @if($page->id == $page_material->id)
            selected="selected"
        @endif

    @endforeach
  @endisset

  >
  {!! $delimiter ?? "" !!}{{$page->title ?? ""}}
</option>

@if (count($page->children) > 0)

  @include('admin.materials.form.materials', [
    'pages' => $page->children,
    'delimiter'  => ' - ' . $delimiter
  ])

@endif
@endforeach