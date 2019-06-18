
<label for="">Статус</label>
<select class="form-control" name="published">
    @if (isset($second->id))
        <option value="0" @if ($second->published == 0) selected="" @endif>Не опубликовано</option>
        <option value="1" @if ($second->published == 1) selected="" @endif>Опубликовано</option>
    @else
        <option value="0">Не опубликовано</option>
        <option value="1">Опубликовано</option>
    @endif
</select>

<label for="">Заголовок</label>
<input type="text" class="form-control" name="title" placeholder="Заголовок новости" value="{{$second->title ?? ""}}" required><br>

<!-- <label for="">Выбрать язык поста</label>
<select name="locale" class="form-control" required>
                 <option value=" ">выбрать</option>
                 <option value="ru" {{$second->locale ?? ""}}>ru</option>
                 <option value="kk" {{$second->locale ?? ""}}>kk</option>
              </select>  
              <br> -->

<label for="">Выбрать язык поста</label>
<select name="locale" class="form-control" required>
                 @if (isset($second->id))
                    <option value="ru" @if ($second->locale == 'ru') selected="" @endif>ru</option>
                    <option value="kk" @if ($second->locale == 'kk') selected="" @endif>kk</option>
                @else
                    <option value="ru">ru</option>
                    <option value="kk">kk</option>
                @endif                                                    
              </select>  
              <br>

<label for="">Slug (Уникальное значение)</label>
<input class="form-control" type="text" name="slug" placeholder="Автоматическая генерация" value="{{$second->slug ?? ""}}" readonly=""><br>

<div class="form-group" style="margin-left: 20px;">
    <label for="">Изображение</label>
    <input data-preview="#preview" name="image" type="file" id="image">
    @if(empty($second->image_show))
        <img style="display: none;" class="col-sm-6" id="preview" src="{{ $second ? asset('uploads/' . $second->image_show) : ""}}">
    @else
        <img style="padding-top: 30px;" class="col-sm-3" id="preview" src="{{ $second ? asset('uploads/' . $second->image_show) : ""}}">
    @endif
</div>


<label for="">Краткое описание</label>
<textarea class="form-control" id="description_short" name="description_short">{{$second->description_short ?? ""}}</textarea>

<label for="">Полное описание</label>
<textarea class="form-control" id="description" name="description">{{$second->description ?? ""}}</textarea>

<hr />

<label for="">Мета Заголовок</label>
<input type="text" class="form-control" name="meta_title" placeholder="Мета заголовок" value="{{$second->meta_title ?? ""}}">

<label for="">Мета Описание</label>
<input type="text" class="form-control" name="meta_description" placeholder="Мета описание" value="{{$second->meta_description ?? ""}}">

<label for="">Ключевые слова</label>
<input type="text" class="form-control" name="meta_keyword" placeholder="Ключевые слова" value="{{$second->meta_keyword ?? ""}}">

<hr />
<input class="btn btn-primary" type="submit" value="Сохранить">

