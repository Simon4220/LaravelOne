
@foreach ($pages as $list)

<option value="{{$list->id ?? ''}}"

  @isset($page->id)

    @if ($page->parent_id == $list->id)
      selected=""
    @endif

    @if ($page->id == $list->id)
      hidden=""
    @endif

  @endisset

  >
  {!! $delimiter ?? "" !!}{{$list->title ?? ""}}
</option>

@if (count($list->children) > 0)

  @include('admin.pages.form.pages', [
    'pages' => $list->children,
    'delimiter'  => ' - ' . $delimiter
  ])

@endif
@endforeach