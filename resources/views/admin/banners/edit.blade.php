@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">

        @component('admin.components.breadcrumb')
            @slot('title') Редактирование баннера @endslot
            @slot('parent') Главная @endslot
            @slot('active') &nbsp; баннер @endslot
        @endcomponent

        <hr />

        <form class="form-horizontal" action="{{route('admin.banners.update', $banner)}}" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="put">
            {{ csrf_field() }}

            {{-- Form include --}}
            @include('admin.banners.partials.form')

            <input type="hidden" name="modified_by" value="{{Auth::id()}}">
        </form>
    </div>
@endsection
