@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">

        @component('admin.components.breadcrumb')
            @slot('title') Создание книги @endslot
            @slot('parent') Главная @endslot
            @slot('active') &nbsp;/ Книги @endslot
        @endcomponent

        <hr />

        <form class="form-horizontal" action="{{route('admin.books.store')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

            {{-- Form include --}}
            @include('admin.books.partials.form')

            <input type="hidden" name="created_by" value="{{Auth::id()}}">
        </form>
    </div>
@endsection
