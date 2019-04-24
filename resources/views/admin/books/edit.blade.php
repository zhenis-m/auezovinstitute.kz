@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">

        @component('admin.components.breadcrumb')
            @slot('title') Редактирование книги @endslot
            @slot('parent') Главная @endslot
            @slot('active') &nbsp;/ Книги @endslot
        @endcomponent

        <hr />

        <form class="form-horizontal" action="{{route('admin.books.update', $book)}}" method="post">
            <input type="hidden" name="_method" value="put">
            {{ csrf_field() }}

            {{-- Form include --}}
            @include('admin.books.partials.form')

            <input type="hidden" name="modified_by" value="{{Auth::id()}}">
        </form>
    </div>
@endsection
