@extends('layouts.app')

@section('content')
<div>
    <div class="pnwes">
        <div class="dep__way">
        <a href="{{ URL::to('/') }}">Главная</a>&nbsp;/&nbsp;
        <a>Отделы института</a>
    </div>
        <div class="pnwes__page">
            @foreach ($departs as $depart)
            <div class="pnwes__page__block">
                <div class="pnwes__page__block__wrap">
                    <div class="pnwes__page__block__title">
                        <a href="{{ route('departments.show', [ 'id' => $depart->id ]) }}">{{ $depart->title }}</a>
                        <p>{!! $depart->description_short !!}</p>
                    </div>
                </div>
            </div>

            @endforeach
        </div>
    </div>
</div>
{{--<script src="js/script.js"></script>--}}
@endsection
