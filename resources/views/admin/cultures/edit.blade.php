@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">

        @component('admin.components.breadcrumb')
            @slot('title') Редактирование страницы @endslot
            @slot('parent') Главная @endslot
            @slot('active') Издания и Публикации @endslot
        @endcomponent

        <hr />

        <form class="form-horizontal" action="{{route('admin.cultures.update', $culture)}}" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="put">
            {{ csrf_field() }}

            {{-- Form include --}}
            @include('admin.cultures.partials.form')

            <input type="hidden" name="modified_by" value="{{Auth::id()}}">
        </form>
    </div>
@endsection
