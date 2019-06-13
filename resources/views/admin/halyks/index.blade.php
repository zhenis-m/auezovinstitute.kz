@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">

        @component('admin.components.breadcrumb')
            @slot('title') Народный университет @endslot
            @slot('parent') Главная @endslot
            @slot('active')  &nbsp;/ Страница @endslot
        @endcomponent

{{--        <hr>--}}

{{--        <a href="{{route('admin.halyks.create')}}" class="btn btn-primary pull-right">--}}
{{--            <i class="fa fa-plus-square-o"></i> Создать новость</a>--}}
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
            @forelse($halyks as $halyk)
                <tr>
                    <td>{{$halyk->title}}</td>
                    <td>{{$halyk->locale}}</td>
                    <td>{{$halyk->published}}</td>
                    <td class="text-right">
{{--                        <form onsubmit="if(confirm('Удалить?')){ return true }else{ return false }" action="{{route('admin.halyks.destroy',--}}
{{--                        $halyk)}}" method="post">--}}
{{--                            <input type="hidden" name="_method" value="DELETE">--}}
{{--                            {{ csrf_field() }}--}}

{{--                            <a class="btn btn-default" href="{{route('admin.halyks.edit', $halyk)}}"><i class="fa fa-edit"></i></a>--}}

{{--                            <button type="submit" class="btn"><i class="fas fa-trash-alt"></i></button>--}}
{{--                        </form>--}}
                        <a class="btn btn-default" href="{{route('admin.halyks.edit', $halyk)}}"><i class="fa fa-edit"></i></a>
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
                    {{$halyks->links()}}
                </ul>
            </tr>
            </tfoot>
    </div>
@endsection


