@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">

        @component('admin.components.breadcrumb')
            @slot('title') Создание статьи Государственные задания @endslot
            @slot('parent') Главная @endslot
            @slot('active') Государственные задания @endslot
        @endcomponent

        <hr />

        <form class="form-horizontal" action="{{route('admin.thehirds.store')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

            {{-- Form include --}}
            @include('admin.thehirds.partials.form')

            <input type="hidden" name="created_by" value="{{Auth::id()}}">
        </form>
    </div>
@endsection
