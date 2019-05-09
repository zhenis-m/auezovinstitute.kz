@extends('layouts.app')

@section('content')
    <div class="loading__img">
        <h1>Загрузка изображения вариант №1</h1>

        <form action="{{ route('image.upload') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="form-group">
                <input type="file" name="image">
            </div>

            <button class="btn btn-default" type="submit">Загрузка</button>
        </form>
        @isset($path)
            <img class="img-fluid" src="{{ asset('/storage/' . $path) }}" alt="">
        @endisset
    </div>
@endsection