@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="jumbotron d-flex align-items-center justify-content-center">
                    <p><span class="badge badge-primary">Книги 0</span></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron d-flex align-items-center justify-content-center">
                    <p><span class="badge badge-primary">Материалов 0</span></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron d-flex align-items-center justify-content-center">
                    <p><span class="badge badge-primary">Посетителей 0</span></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron d-flex align-items-center justify-content-center">
                    <p><span class="badge badge-primary">Сегодня 0</span></p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <a class="btn btn-secondary btn-block" href="{{route('admin.books.index')}}">Создать книгу</a>
                <a class="list-group-item" href="#">
                   <h4 class="list-group-item-heading">Книги первая</h4>
                    <p class="list-group-item-text">
                        Кол-во материалов
                    </p>
                </a>
            </div>
            <div class="col-sm-6">
                <a class="btn btn-secondary btn-block" href="{{route('admin.articles.create')}}">Создать новость</a>
                <a class="list-group-item" href="">
                    <h4 class="list-group-item-heading">новость первая</h4>
                    <p class="list-group-item-text">
                        Кол-во материалов
                    </p>
                </a>
            </div>
        </div>
    </div>
    @endsection
