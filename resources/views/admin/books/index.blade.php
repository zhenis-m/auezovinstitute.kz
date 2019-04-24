@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">

        @component('admin.components.breadcrumb')
            @slot('title') Список книг @endslot
            @slot('parent') Главная @endslot
            @slot('active')  &nbsp;/ Книги @endslot
        @endcomponent

        <hr>

        <a href="{{route('admin.books.create')}}" class="btn btn-primary pull-right">
            <i class="fa fa-plus-square-o"></i> Создать книгу</a>
            <div><br></div>
        <table class="table table-striped">
            <thead>
            <th>Наименование</th>
            <th>Публикация</th>
            <th class="text-right">Действие</th>
            </thead>
            <tbody>
            @forelse($books as $book)
                <tr>
                    <td>{{$book->title}}</td>
                    <td>{{$book->published}}</td>
                    <td class="text-right">
                        <form onsubmit="if(confirm('Удалить?')){ return true }else{ return false }" action="{{route('admin.books.destroy',
                        $book)}}" method="post">
                            <input type="hidden" name="_method" value="DELETE">
                            {{ csrf_field() }}

                            <a class="btn btn-default" href="{{route('admin.books.edit', $book)}}"><i class="fa fa-edit"></i></a>

                            <button type="submit" class="btn"><i class="fas fa-trash-alt"></i></button>
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

            <tfoot>
            <tr colspan="3">
                <ul class="pagination pull-right">
                    {{$books->links()}}
                </ul>
            </tr>
            </tfoot>
    </div>
@endsection


