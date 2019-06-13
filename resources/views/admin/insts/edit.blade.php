@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">

        @component('admin.components.breadcrumb')
            @slot('title') Редактирование страницы @endslot
            @slot('parent') Главная @endslot
            @slot('active') Страница @endslot
        @endcomponent

        <hr />

        <form class="form-horizontal" action="{{route('admin.insts.update', $inst)}}" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="put">
            {{ csrf_field() }}

            {{-- Form include --}}
            @include('admin.insts.partials.form')

            <input type="hidden" name="modified_by" value="{{Auth::id()}}">
        </form>
    </div>
@endsection
