@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="jumbotron d-flex align-items-center justify-content-center">
                    <p><span class="badge badge-primary">Книг {{$count_books}}</span></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron d-flex align-items-center justify-content-center">
                    <p><span class="badge badge-primary">Новостей {{$count_articles}}</span></p>
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
                @foreach($books as $book)
                    <a class="list-group-item" href="{{route('admin.books.edit', $book)}}">
                        <h4 class="list-group-item-heading">{{$book->title}}</h4>
                        <p class="list-group-item-text">
                            {{$book->categories()->pluck('title')->implode(', ')}}
                        </p>
                    </a>
                @endforeach
            </div>
            <div class="col-sm-6">
                <a class="btn btn-secondary btn-block" href="{{route('admin.articles.create')}}">Создать новость</a>
                @foreach($articles as $article)
                <a class="list-group-item" href="{{route('admin.articles.edit', $article)}}">
                    <h4 class="list-group-item-heading">{{$article->title}}</h4>
                    <p class="list-group-item-text">
                        {{$article->categories()->pluck('title')->implode(', ')}}
                    </p>
                </a>
                @endforeach
            </div>
        </div>
    </div>
    @endsection
