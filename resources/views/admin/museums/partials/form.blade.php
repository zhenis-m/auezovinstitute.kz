
<label for="">Статус</label>
<select class="form-control" name="published">
    @if (isset($museum->id))
        <option value="0" @if ($museum->published == 0) selected="" @endif>Не опубликовано</option>
        <option value="1" @if ($museum->published == 1) selected="" @endif>Опубликовано</option>
    @else
        <option value="0">Не опубликовано</option>
        <option value="1">Опубликовано</option>
    @endif
</select>
<br>
<label for="">Заголовок</label>
<input type="text" class="form-control" name="title" placeholder="Заголовок новости" value="{{$museum->title ?? ""}}" required><br>

<!-- label for="">Выбрать язык поста</label>
<select name="locale" class="form-control" required>
                 <option value=" ">выбрать</option>
                 <option value="ru" {{$museum->locale ?? ""}}>ru</option>
                 <option value="kk" {{ $museum->locale ?? ""}}>kk</option>
              </select>   -->

<label for="">Выбрать язык поста</label>
<select name="locale" class="form-control" required>
                 @if (isset($museum->id))
                    <option value="ru" @if ($museum->locale == 'ru') selected="" @endif>ru</option>
                    <option value="kk" @if ($museum->locale == 'kk') selected="" @endif>kk</option>
                @else
                    <option value="ru">ru</option>
                    <option value="kk">kk</option>
                @endif                                                    
              </select>  
              <br>

<label for="">Slug (Уникальное значение)</label>
<input class="form-control" type="text" name="slug" placeholder="Автоматическая генерация" value="{{$museum->slug ?? ""}}" readonly=""><br>


<div class="form-group" style="margin-left: 20px;">
    <label for="">Изображение</label>
    <input data-preview="#preview" name="image" type="file" id="image">
    @if(empty($museum->image_show))
    @else
        <img style="padding-top: 30px;" class="col-sm-3" id="preview" src="{{ $museum ? asset('uploads/' . $museum->image_show) : ""}}">
    @endif
</div>



<label for="">Краткое описание</label>
<textarea class="form-control" id="description_short" name="description_short">{{$museum->description_short ?? ""}}</textarea>

<label for="">Полное описание</label>
<textarea class="form-control" id="description" name="description">{{$museum->description ?? ""}}</textarea>

<hr />

<label for="">Мета Заголовок</label>
<input type="text" class="form-control" name="meta_title" placeholder="Мета заголовок" value="{{$museum->meta_title ?? ""}}">

<label for="">Мета Описание</label>
<input type="text" class="form-control" name="meta_description" placeholder="Мета описание" value="{{$museum->meta_description ?? ""}}">

<label for="">Ключевые слова</label>
<input type="text" class="form-control" name="meta_keyword" placeholder="Ключевые слова" value="{{$museum->meta_keyword ?? ""}}">

<hr />
<input class="btn btn-primary" type="submit" value="Сохранить">
