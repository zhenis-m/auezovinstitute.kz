@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">

        @component('admin.components.breadcrumb')
            @slot('title') Список научных проектов @endslot
            @slot('parent') Главная @endslot
            @slot('active') Научные проекты @endslot
        @endcomponent

        <hr>

        <a href="{{route('admin.sciences.create')}}" class="btn btn-primary pull-right">
            <i class="fa fa-plus-square-o"></i> Создать проект</a>
            <div><br></div>
            <div></div>
        <table class="table table-striped">
            <thead>
            <th>Наименование</th>
            <th>язык</th>
            <th>Публикация</th>
            <th class="text-right">Действие</th>
            </thead>
            <tbody>
            @forelse($sciences as $science)
                <tr>
                    <td>{{$science->title}}</td>
                    <td>{{$science->locale}}</td>
                    <td>{{$science->published}}</td>
                    <td class="text-right">
                        <form onsubmit="if(confirm('Удалить?')){ return true }else{ return false }" action="{{route('admin.sciences.destroy',
                        $science)}}" method="post">
                            <input type="hidden" name="_method" value="DELETE">
                            {{ csrf_field() }}

                            <a class="btn btn-default" href="{{route('admin.sciences.edit', $science)}}"><i class="fa fa-edit"></i></a>

                            <button type="submit" class="btn"><i class="fa fa-fw fa-trash"></i></button>
                        </form>

                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center"><h2>Данные отсутсвуют</h2></td>
                </tr>
            @endforelse
            </tbody>
        </table>
            <tfoot>
            <tr colspan="3">
                <ul class="pagination pull-right">
                    {{$sciences->links()}}
                </ul>
            </tr>
            </tfoot>
    </div>
@endsection


