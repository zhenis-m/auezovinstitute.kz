@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">

        @component('admin.components.breadcrumb')
            @slot('title') Создание картинки баннера @endslot
            @slot('parent') Главная @endslot
            @slot('active') &nbsp;/ новый баннер @endslot
        @endcomponent

        <hr />

        <form class="form-horizontal" action="{{route('admin.banners.store')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

            {{-- Form include --}}
            @include('admin.banners.partials.form')

            <input type="hidden" name="created_by" value="{{Auth::id()}}">
        </form>
    </div>
@endsection
