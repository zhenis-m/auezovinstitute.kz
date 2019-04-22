@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="jumbotron d-flex align-items-center justify-content-center">
                    <p><span class="badge badge-primary">Категории 0</span></p>
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
                <a class="btn btn-secondary btn-block" href="#">Создать категорию</a>
                <a class="list-group-item" href="#">
                   <h4 class="list-group-item-heading">Категория первая</h4>
                    <p class="list-group-item-text">
                        Кол-во материалов
                    </p>
                </a>
            </div>
            <div class="col-sm-6">
                <a class="btn btn-secondary btn-block" href="#">Создать материал</a>
                <a class="list-group-item" href="#">
                    <h4 class="list-group-item-heading">Материал первый</h4>
                    <p class="list-group-item-text">
                        Категория
                    </p>
                </a>
            </div>
        </div>
    </div>
    @endsection
