
<label for="">Статус</label>
<select class="form-control" name="published">
    @if (isset($halyk->id))
        <option value="0" @if ($halyk->published == 0) selected="" @endif>Не опубликовано</option>
        <option value="1" @if ($halyk->published == 1) selected="" @endif>Опубликовано</option>
    @else
        <option value="0">Не опубликовано</option>
        <option value="1">Опубликовано</option>
    @endif
</select>
<br>
<label for="">Заголовок</label>
<input type="text" class="form-control" name="title" placeholder="Заголовок новости" value="{{$halyk->title ?? ""}}" required><br>

<!-- label for="">Выбрать язык поста</label>
<select name="locale" class="form-control" required>
                 <option value=" ">выбрать</option>
                 <option value="ru" {{$halyk->locale ?? ""}}>ru</option>
                 <option value="kk" {{ $halyk->locale ?? ""}}>kk</option>
              </select>   -->

<label for="">Выбрать язык поста</label>
<select name="locale" class="form-control" required>
                 @if (isset($halyk->id))
                    <option value="ru" @if ($halyk->locale == 'ru') selected="" @endif>ru</option>
                    <option value="kk" @if ($halyk->locale == 'kk') selected="" @endif>kk</option>
                @else
                    <option value="ru">ru</option>
                    <option value="kk">kk</option>
                @endif                                                    
              </select>  
              <br>

<label for="">Slug (Уникальное значение)</label>
<input class="form-control" type="text" name="slug" placeholder="Автоматическая генерация" value="{{$halyk->slug ?? ""}}" readonly=""><br>



<div class="form-group">
    <label for="">Изображение</label>
    <input data-preview="#preview" name="image" type="file" id="image">{{$halyk->image ?? ""}}
    <img class="col-sm-6" id="preview" src="{{ $halyk ? asset('halyk/' . $halyk->image_show) : ""}}">
</div>




<label for="">Краткое описание</label>
<textarea class="form-control" id="description_short" name="description_short">{{$halyk->description_short ?? ""}}</textarea>

<label for="">Полное описание</label>
<textarea class="form-control" id="description" name="description">{{$halyk->description ?? ""}}</textarea>

<hr />

<label for="">Мета Заголовок</label>
<input type="text" class="form-control" name="meta_title" placeholder="Мета заголовок" value="{{$halyk->meta_title ?? ""}}">

<label for="">Мета Описание</label>
<input type="text" class="form-control" name="meta_description" placeholder="Мета описание" value="{{$halyk->meta_description ?? ""}}">

<label for="">Ключевые слова</label>
<input type="text" class="form-control" name="meta_keyword" placeholder="Ключевые слова" value="{{$halyk->meta_keyword ?? ""}}">

<hr />
<input class="btn btn-primary" type="submit" value="Сохранить">

