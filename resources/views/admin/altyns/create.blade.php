@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">

        @component('admin.components.breadcrumb')
            @slot('title') Создание Алтын қор @endslot
            @slot('parent') Главная @endslot
            @slot('active') Содержание Алтын қор @endslot
        @endcomponent

        <hr />

        <form class="form-horizontal" action="{{route('admin.altyns.store')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

            {{-- Form include --}}
            @include('admin.altyns.partials.form')

            <input type="hidden" name="created_by" value="{{Auth::id()}}">
        </form>
    </div>
@endsection
