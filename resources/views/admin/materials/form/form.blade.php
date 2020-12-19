<label for="">Статус</label>
<select class="form-control" name="active">
  @if (isset($material->id))
    <option value="0" @if ($material->active == 0) selected="" @endif>Не активна</option>
    <option value="1" @if ($material->active == 1) selected="" @endif>Активна</option>
  @else
    <option value="0">Не активна</option>
    <option value="1">Активна</option>
  @endif
</select>

<label for="">Заголовок</label>
<input type="text" class="form-control" name="title" placeholder="Заголовок материала" 
value='{{$material->title ?? ""}}' required>

<label for="">Slug</label>
<input class="form-control" type="text" name="slug" placeholder="Автоматическая генерация" value='{{$material->slug ?? ""}}' readonly="">

<label for="">Родительская категория</label>
<select class="form-control" name="pages[]" multiple="">
  @include('admin.materials.form.materials', ['$pages' => $pages])
</select>

<label for="">Тема материала</label>
<textarea class="form-control" id="theme" name="theme" placeholder="Описание" >{{$material->theme ?? ""}}</textarea>


<label for="">Описание материала</label>
<textarea class="form-control" id="text" name="text" placeholder="Описание" >{{$material->text ?? ""}}</textarea>

<label for="">Мета заголовок</label>
<input type="text" class="form-control" name="meta_title" value='{{$material->meta_title ?? ""}}' required>

<label for="">Мета описание</label>
<input type="text" class="form-control" name="meta_description" value='{{$material->meta_description ?? ""}}' required>

<label for="">Ключевые слова, через запятую</label>
<input type="text" class="form-control" name="meta_keyword" value='{{$material->meta_keyword ?? ""}}' required>

<hr />

<input class="btn btn-primary" type="submit" value="Сохранить">