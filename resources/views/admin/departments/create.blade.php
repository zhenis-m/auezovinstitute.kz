@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">

        @component('admin.components.breadcrumb')
            @slot('title') Создание отдела института @endslot
            @slot('parent') Главная @endslot
            @slot('active') Отдел @endslot
        @endcomponent

        <hr />

        <form class="form-horizontal" action="{{route('admin.departments.store')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

            {{-- Form include --}}
            @include('admin.departments.partials.form')

            <input type="hidden" name="created_by" value="{{Auth::id()}}">
        </form>
    </div>
@endsection
