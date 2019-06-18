@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">

        @component('admin.components.breadcrumb')
            @slot('title') Государственные задания @endslot
            @slot('parent') Главная @endslot
            @slot('active') Государственные задания @endslot
        @endcomponent

        <hr>

        <a href="{{route('admin.thehirds.create')}}" class="btn btn-primary pull-right">
            <i class="fa fa-plus-square-o"></i> Создать статью</a>
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
            @forelse($thehirds as $thehird)
                <tr>
                    <td>{{$thehird->title}}</td>
                    <td>{{$thehird->locale}}</td>
                    <td>{{$thehird->published}}</td>
                    <td class="text-right">
                        <form onsubmit="if(confirm('Удалить?')){ return true }else{ return false }" action="{{route('admin.thehirds.destroy',
                        $thehird)}}" method="post">
                            <input type="hidden" name="_method" value="DELETE">
                            {{ csrf_field() }}

                            <a class="btn btn-default" href="{{route('admin.thehirds.edit', $thehird)}}"><i class="fa fa-edit"></i></a>

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
                    {{$thehirds->links()}}
                </ul>
            </tr>
            </tfoot>
    </div>
@endsection


