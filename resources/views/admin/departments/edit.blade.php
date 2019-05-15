@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">

        @component('admin.components.breadcrumb')
            @slot('title') Редактирование отдела института @endslot
            @slot('parent') Главная @endslot
            @slot('active') &nbsp;/ отдел @endslot
        @endcomponent

        <hr />

        <form class="form-horizontal" action="{{route('admin.departments.update', $department)}}" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="put">
            {{ csrf_field() }}

            {{-- Form include --}}
            @include('admin.departments.partials.form')

            <input type="hidden" name="modified_by" value="{{Auth::id()}}">
        </form>
    </div>
@endsection
