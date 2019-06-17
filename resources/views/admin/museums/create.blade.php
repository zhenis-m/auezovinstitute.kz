@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">

        @component('admin.components.breadcrumb')
            @slot('title') Создание страницы музея @endslot
            @slot('parent') Главная @endslot
            @slot('active') Содержание страницы музея @endslot
        @endcomponent

        <hr />

        <form class="form-horizontal" action="{{route('admin.museums.store')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

            {{-- Form include --}}
            @include('admin.museums.partials.form')

            <input type="hidden" name="created_by" value="{{Auth::id()}}">
        </form>
    </div>
@endsection
