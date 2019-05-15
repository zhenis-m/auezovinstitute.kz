@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">

        @component('admin.components.breadcrumb')
            @slot('title') Создание страницы @endslot
            @slot('parent') Главная @endslot
            @slot('active') &nbsp;/ Культурное наследие @endslot
        @endcomponent

        <hr />

        <form class="form-horizontal" action="{{route('admin.cultures.store')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

            {{-- Form include --}}
            @include('admin.cultures.partials.form')

            <input type="hidden" name="created_by" value="{{Auth::id()}}">
        </form>
    </div>
@endsection
