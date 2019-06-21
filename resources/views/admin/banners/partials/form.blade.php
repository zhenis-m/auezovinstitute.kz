
<label for="">Статус</label>
<select class="form-control" name="published">
    @if (isset($banner->id))
        <option value="0" @if ($banner->published == 0) selected="" @endif>Не опубликовано</option>
        <option value="1" @if ($banner->published == 1) selected="" @endif>Опубликовано</option>
    @else
        <option value="0">Не опубликовано</option>
        <option value="1">Опубликовано</option>
    @endif
</select>

<label for="">Заголовок</label>
<input type="text" class="form-control" name="title" placeholder="Заголовок новости" value="{{$banner->title ?? ""}}" required><br>

<!-- <label for="">Выбрать язык поста</label>
<select name="locale" class="form-control" required>
                 <option value=" ">выбрать</option>
                 <option value="ru" {{$banner->locale ?? ""}}>ru</option>
                 <option value="kk" {{$banner->locale ?? ""}}>kk</option>
              </select>
              <br> -->

{{--<label for="">Выбрать язык поста</label>--}}
{{--<select name="locale" class="form-control" required>--}}
{{--                 @if (isset($banner->id))--}}
{{--                    <option value="ru" @if ($banner->locale == 'ru') selected="" @endif>ru</option>--}}
{{--                    <option value="kk" @if ($banner->locale == 'kk') selected="" @endif>kk</option>--}}
{{--                @else--}}
{{--                    <option value="ru">ru</option>--}}
{{--                    <option value="kk">kk</option>--}}
{{--                @endif                                                    --}}
{{--              </select>  --}}
{{--              <br>--}}

<label for="">Slug (Уникальное значение)</label>
<input class="form-control" type="text" name="slug" placeholder="Автоматическая генерация" value="{{$banner->slug ?? ""}}" readonly=""><br>



<div class="form-group">
    <label for="">Изображение</label>
    <input data-preview="#preview" name="image" type="file" id="image">{{$banner->image ?? ""}}
    <img class="col-sm-6" id="preview" src="{{ $banner ? asset('uploads/' . $banner->image_show) : ""}}">
</div>




{{--<label for="">маленький текст</label>--}}
{{--<textarea class="form-control" id="description_short" name="description_short">{{$banner->description_short ?? ""}}</textarea>--}}

{{--<label for="">описание</label>--}}
{{--<textarea class="form-control" id="description" name="description">{{$banner->description ?? ""}}</textarea>--}}

{{--<hr />--}}

{{--<label for="">Мета Заголовок</label>--}}
{{--<input type="text" class="form-control" name="meta_title" placeholder="Мета заголовок" value="{{$banner->meta_title ?? ""}}">--}}

{{--<label for="">Мета Описание</label>--}}
{{--<input type="text" class="form-control" name="meta_description" placeholder="Мета описание" value="{{$banner->meta_description ?? ""}}">--}}

{{--<label for="">Ключевые слова</label>--}}
{{--<input type="text" class="form-control" name="meta_keyword" placeholder="Ключевые слова" value="{{$banner->meta_keyword ?? ""}}">--}}

<hr/>
<input class="btn btn-primary" type="submit" value="Сохранить">

