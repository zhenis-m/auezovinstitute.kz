{{--@extends('admin.layouts.app_admin')--}}
@extends('adminlte::page')
@section('content')
    <div class="container">
        <section class="content">
            <!-- Info boxes -->
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Новостей</span>
                            <span class="info-box-number">{{$count_articles}}<small></small></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-red"><i class="ion ion-ios-gear-outline"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Книг</span>
                            <span class="info-box-number">{{$count_books}}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <!-- fix for small devices only -->
                <div class="clearfix visible-sm-block"></div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-green"><i class="ion ion-ios-gear-outline"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Научных проектов</span>
                            <span class="info-box-number">{{$count_sciences}}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-yellow"><i class="ion ion-ios-gear-outline"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Публикаций</span>
                            <span class="info-box-number">{{$count_cultures}}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- TABLE: LATEST ORDERS -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Последние новости</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table no-margin">
                            <thead>
                            <th>Наименование</th>
                            <th>язык</th>
                            <th>Публикация</th>
                            <th class="text-right" style="padding-right: 35px;">Действие</th>
                            </thead>
                            <tbody>
                            @forelse($articles as $article)
                                <tr>
                                    <td>{{$article->title}}</td>
                                    <td>{{$article->locale}}</td>
                                    <td>{{$article->published}}</td>
                                    <td class="text-right">
                                        <form onsubmit="if(confirm('Удалить?')){ return true }else{ return false }" action="{{route('admin.articles.destroy',
                        $article)}}" method="post">
                                            <input type="hidden" name="_method" value="DELETE">
                                            {{ csrf_field() }}

                                            <a class="btn btn-default" href="{{route('admin.articles.edit', $article)}}"><i class="fa fa-edit"></i></a>

                                            <button type="submit" class="btn"><i class="fa fa-fw fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="text-center"><h2>Данные отсутсвуют</h2></td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    <a href="{{route('admin.articles.create')}}" class="btn btn-sm btn-info btn-flat pull-left">Создать новость</a>
                    <a href="{{route('admin.articles.index')}}" class="btn btn-sm btn-default btn-flat pull-right">Посмотреть все</a>
                </div>

{{--        <div class="row">--}}
{{--            <div class="col-sm-12">--}}
{{--                <a class="btn btn-secondary btn-block" href="{{route('admin.banners.index')}}">Баннер</a>            --}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <br>--}}

{{--        <div class="row">--}}
{{--            <div class="col-sm-6">--}}
{{--                <a class="btn btn-secondary btn-block" href="{{route('admin.insts.index')}}">Институт</a>            --}}
{{--            </div>--}}

{{--            <br><br>--}}

{{--            <div class="col-sm-6">--}}
{{--                <a class="btn btn-secondary btn-block" href="{{route('admin.cultures.index')}}">Культурное наследие</a>            --}}
{{--            </div>--}}

{{--            <br><br>--}}

{{--             <div class="col-sm-6">--}}
{{--                <a class="btn btn-secondary btn-block" href="{{route('admin.departments.index')}}">Отделы института</a>            --}}
{{--            </div>--}}

{{--            <br><br>--}}

{{--            <div class="col-sm-6">--}}
{{--                <a class="btn btn-secondary btn-block"  href="{{route('admin.directors.index')}}">Администрация института</a>            --}}
{{--            </div>--}}

{{--            <br><br>--}}

{{--            <div class="col-sm-6">--}}
{{--                <a class="btn btn-secondary btn-block" href="{{route('admin.books.index')}}">Создать книгу</a>--}}
{{--                @foreach($books as $book)--}}
{{--                    <a class="list-group-item" href="{{route('admin.books.edit', $book)}}">--}}
{{--                        <h4 class="list-group-item-heading">{{$book->title}}</h4>--}}
{{--                        <p class="list-group-item-text">--}}
{{--                            {{$book->categories()->pluck('title')->implode(', ')}}--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--            <div class="col-sm-6">--}}
{{--                <a class="btn btn-secondary btn-block" href="{{route('admin.articles.index')}}">Создать новость</a>--}}
{{--                @foreach($articles as $article)--}}
{{--                <a class="list-group-item" href="{{route('admin.articles.edit', $article)}}">--}}
{{--                    <h4 class="list-group-item-heading">{{$article->title}}</h4>--}}
{{--                    <p class="list-group-item-text">--}}
{{--                        {{$article->categories()->pluck('title')->implode(', ')}}--}}
{{--                    </p>--}}
{{--                </a>--}}
{{--                @endforeach  --}}
{{--                <br><br>             --}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}
    @endsection
