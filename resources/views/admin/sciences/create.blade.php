@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">

        @component('admin.components.breadcrumb')
            @slot('title') Создание научных проектов @endslot
            @slot('parent') Главная @endslot
            @slot('active') &nbsp;/ Научные проекты @endslot
        @endcomponent

        <hr />

        <form class="form-horizontal" action="{{route('admin.sciences.store')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

            {{-- Form include --}}
            @include('admin.sciences.partials.form')

            <input type="hidden" name="created_by" value="{{Auth::id()}}">
        </form>
    </div>
@endsection
