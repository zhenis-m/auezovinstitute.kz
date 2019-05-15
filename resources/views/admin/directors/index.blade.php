@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">

        @component('admin.components.breadcrumb')
            @slot('title') Администрация института @endslot
            @slot('parent') Главная @endslot
            @slot('active')  &nbsp;/ управленческий аппарат @endslot
        @endcomponent

        <hr>

        <a href="{{route('admin.directors.create')}}" class="btn btn-primary pull-right">
            <i class="fa fa-plus-square-o"></i> Создать профиль</a>
            <div><br></div>
            <div></div>
        <table class="table table-striped">
            <thead>
            <th>Наименование</th>
            <th>Публикация</th>
            <th class="text-right">Действие</th>
            </thead>
            <tbody>
            @forelse($directors as $director)
                <tr>
                    <td>{{$director->title}}</td>
                    <td>{{$director->published}}</td>
                    <td class="text-right">
                        <form onsubmit="if(confirm('Удалить?')){ return true }else{ return false }" action="{{route('admin.directors.destroy',
                        $director)}}" method="post">
                            <input type="hidden" name="_method" value="DELETE">
                            {{ csrf_field() }}

                            <a class="btn btn-default" href="{{route('admin.directors.edit', $director)}}"><i class="fa fa-edit"></i></a>

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
                    {{$directors->links()}}
                </ul>
            </tr>
            </tfoot>
    </div>
@endsection


