
<label for="">Статус</label>
<select class="form-control" name="published">
    @if (isset($inst->id))
        <option value="0" @if ($inst->published == 0) selected="" @endif>Не опубликовано</option>
        <option value="1" @if ($inst->published == 1) selected="" @endif>Опубликовано</option>
    @else
        <option value="0">Не опубликовано</option>
        <option value="1">Опубликовано</option>
    @endif
</select>

<label for="">Заголовок</label>
<input type="text" class="form-control" name="title" placeholder="Заголовок новости" value="{{$inst->title ?? ""}}" required><br>

<label for="">Выбрать язык поста</label>
<select name="locale" class="form-control" required>
                 <option value=" ">выбрать</option>
                 <option value="ru" {{$inst->locale ?? ""}}>ru</option>
                 <option value="kk" {{ $inst->locale ?? ""}}>kk</option>                                                       
              </select>  
              <br>

<label for="">Slug (Уникальное значение)</label>
<input class="form-control" type="text" name="slug" placeholder="Автоматическая генерация" value="{{$inst->slug ?? ""}}" readonly=""><br>



<div class="form-group">
    <label for="">Изображение</label>
    <input data-preview="#preview" name="image" type="file" id="image">{{$inst->image ?? ""}}
    <img class="col-sm-6" id="preview" src="{{ $inst ? asset('uploads/' . $inst->image_show) : ""}}">
</div>




<label for="">Краткое описание</label>
<textarea class="form-control" id="description_short" name="description_short">{{$inst->description_short ?? ""}}</textarea>

<label for="">Полное описание</label>
<textarea class="form-control" id="description" name="description">{{$inst->description ?? ""}}</textarea>

<hr />

<label for="">Мета Заголовок</label>
<input type="text" class="form-control" name="meta_title" placeholder="Мета заголовок" value="{{$inst->meta_title ?? ""}}">

<label for="">Мета Описание</label>
<input type="text" class="form-control" name="meta_description" placeholder="Мета описание" value="{{$inst->meta_description ?? ""}}">

<label for="">Ключевые слова</label>
<input type="text" class="form-control" name="meta_keyword" placeholder="Ключевые слова" value="{{$inst->meta_keyword ?? ""}}">

<hr />
<input class="btn btn-primary" type="submit" value="Сохранить">

