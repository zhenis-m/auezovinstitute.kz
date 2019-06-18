<!-- @extends('layouts.app') -->

@section('content')
    <div class="culrure__wrap">
        <div class="news_page__way">
            <a href="{{ URL::to('/') }}">{{ trans('content.main') }}</a>&nbsp;/
            <a href="{{ URL::to('scp') }}">{{ trans('header.science') }}</a>&nbsp;/
            <a href="{{ URL::to('/sciences') }}">{{ trans('content.grant_funding') }}</a>&nbsp;/
            {{ $science->title }}
        </div>
        <div>
            <div class="news">
                <div class="news__state">
                    <div class="news__state__headline">
                        <h1>{{ $science->title }}</h1>
                    </div>
                    <div class="news__state__img">
                        <img src="{{ $science ? asset('uploads/' . $science->image_show) : ""}}" alt="">
                    </div>
                    <div class="news__state__text">
                        {!!  $science->description !!}
                    </div>
                    <div class="news__state__date">
                        <div class="pnew__state__date">
                            <i class="far fa-calendar-alt"></i><p>&nbsp;&nbsp;{{ Date::parse($science->created_at)->format('j F Y г.') }}&nbsp;&nbsp;</p>
                            {{--                        <i class="far fa-eye"></i><p>&nbsp;&nbsp;1222</p>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
