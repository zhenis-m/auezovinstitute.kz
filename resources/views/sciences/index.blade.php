@extends('layouts.app')

@section('content')
<div>
    <div class="pnwes">
        <div class="dep__way">
        <a href="{{ URL::to('/') }}">{{ trans('content.main') }}</a>&nbsp;/&nbsp;
        <a>{{ trans('content.science') }}</a>
    </div>
        <div class="pnwes__page">
            @foreach ($sciences as $science)
            <div class="pnwes__page__block">
                <div class="pnwes__page__block__wrap">
                    <div class="pnwes__page__block__title">
                        <a href="{{ route('sciences.show', [ 'id' => $science->id ]) }}">{{ $science->title }}</a>
                        <p>{!! $science->description_short !!}</p>
                    </div>
                </div>
            </div>

            @endforeach
        </div>
    </div>
</div>
{{--<script src="js/script.js"></script>--}}
@endsection
