@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">

        @component('admin.components.breadcrumb')
            @slot('title') Редактирование профиля @endslot
            @slot('parent') Главная @endslot
            @slot('active') Профиль @endslot
        @endcomponent

        <hr />

        <form class="form-horizontal" action="{{route('admin.directors.update', $director)}}" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="put">
            {{ csrf_field() }}

            {{-- Form include --}}
            @include('admin.directors.partials.form')

            <input type="hidden" name="modified_by" value="{{Auth::id()}}">
        </form>
    </div>
@endsection
