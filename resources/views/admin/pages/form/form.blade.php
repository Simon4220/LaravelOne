<label for="">Статус</label>
<select class="form-control" name="active">
  @if (isset($page->id))
    <option value="0" @if ($page->active == 0) selected="" @endif>Не активна</option>
    <option value="1" @if ($page->active == 1) selected="" @endif>Активна</option>
  @else
    <option value="0">Не активна</option>
    <option value="1">Активна</option>
  @endif
</select>

<label for="">Наименование</label>
<input type="text" class="form-control" name="title" placeholder="Заголовок категории" 
value='{{$page->title ?? ""}}' required>

<label for="">Slug</label>
<input class="form-control" type="text" name="slug" placeholder="Автоматическая генерация" 
value='{{$page->slug ?? ""}}' readonly="">

<label for="">Родительская категория</label>
<select class="form-control" name="parent_id">
  <option value="0">-- без родительской категории --</option>
  @include('admin.pages.form.pages', ['pages' => $pages])
</select>

<hr />

<input class="btn btn-primary" type="submit" value="Сохранить">