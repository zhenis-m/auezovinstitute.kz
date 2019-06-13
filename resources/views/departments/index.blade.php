@extends('layouts.app')

@section('content')
<div>
    <div class="pnwes">
        <div class="dep__way">
        <a href="{{ URL::to('/') }}">{{ trans('content.main') }}</a>&nbsp;/&nbsp;
        <a>{{ trans('content.departmens') }}</a>
    </div>
        <div class="pnwes__page">
            @foreach ($departs as $depart)
                <a href="{{ route('departments.show', [ 'id' => $depart->id ]) }}">
                    <div class="pnwes__page__block">
                        <div class="pnwes__page__block__wrap">
                            <div class="pnwes__page__block__title departmens__link">
                                <h4>{{ $depart->title }}</h4>
                                <p>{!! $depart->description_short !!}</p>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</div>
{{--<script src="js/script.js"></script>--}}
@endsection
