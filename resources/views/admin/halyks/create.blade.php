@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">

        @component('admin.components.breadcrumb')
            @slot('title') Народный университет @endslot
            @slot('parent') Главная @endslot
            @slot('active') &nbsp;/ Страница @endslot
        @endcomponent

        <hr />

        <form class="form-horizontal" action="{{route('admin.halyks.store')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

            {{-- Form include --}}
            @include('admin.halyks.partials.form')

            <input type="hidden" name="created_by" value="{{Auth::id()}}">
        </form>
    </div>
@endsection
