@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">

        @component('admin.components.breadcrumb')
            @slot('title') Список страниц @endslot
            @slot('parent') Главная @endslot
            @slot('active')  &nbsp;/ Культурное наследие @endslot
        @endcomponent

        <hr>

        <a href="{{route('admin.cultures.create')}}" class="btn btn-primary pull-right">
            <i class="fa fa-plus-square-o"></i> Создать страницу</a>
            <div><br></div>
            <div></div>
        <table class="table table-striped">
            <thead>
            <th>Наименование</th>
            <th>Публикация</th>
            <th class="text-right">Действие</th>
            </thead>
            <tbody>
            @forelse($cultures as $culture)
                <tr>
                    <td>{{$culture->title}}</td>
                    <td>{{$culture->published}}</td>
                    <td class="text-right">
                        <form onsubmit="if(confirm('Удалить?')){ return true }else{ return false }" action="{{route('admin.cultures.destroy',
                        $culture)}}" method="post">
                            <input type="hidden" name="_method" value="DELETE">
                            {{ csrf_field() }}

                            <a class="btn btn-default" href="{{route('admin.cultures.edit', $culture)}}"><i class="fa fa-edit"></i></a>

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
                    {{$cultures->links()}}
                </ul>
            </tr>
            </tfoot>
    </div>
@endsection


