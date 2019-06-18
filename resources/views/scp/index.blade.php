@extends('layouts.app')

@section('content')
    <div class="wrap__project">
        <div class="project">
            <div class="dep__way">
                <a href="{{ URL::to('/') }}">{{ trans('content.main') }}</a>&nbsp;/&nbsp;
                {{ trans('header.science') }}
            </div>
            <div class="project__page">
                    <a href="{{ route('sciences.index') }}">
                        <div class="project__page__block">
                            <div class="project__page__block__text">
                                {{ trans('content.grant_funding') }}
                            </div>
                        </div>
                    </a>
            </div>
        </div>
    </div>
    {{--<script src="js/script.js"></script>--}}
@endsection
