<!-- @extends('layouts.app') -->

@section('content')
    <div class="culrure__wrap">
        <div class="news_page__way">
            <a href="{{ URL::to('/') }}">{{ trans('content.main') }}</a>&nbsp;/
            <a href="{{ URL::to('scp') }}">{{ trans('header.science') }}</a>&nbsp;/
            <a href="{{ URL::to('/thehirds') }}">{{ trans('content.state_tasks') }}</a>&nbsp;/
            {{ $thehird->title }}
        </div>
        <div>
            <div class="news">
                <div class="news__state">
                    <div class="news__state__headline">
                        <h1>{{ $thehird->title }}</h1>
                    </div>
                    <div class="news__state__img">
                        <img src="{{ $thehird ? asset('uploads/' . $thehird->image_show) : ""}}" alt="">
                    </div>
                    <div class="news__state__text">
                        {!!  $thehird->description !!}
                    </div>
                    <div class="news__state__date">
                        <div class="pnew__state__date">
                            <i class="far fa-calendar-alt"></i><p>&nbsp;&nbsp;{{ Date::parse($thehird->created_at)->format('j F Y г.') }}&nbsp;&nbsp;</p>
                            {{--                        <i class="far fa-eye"></i><p>&nbsp;&nbsp;1222</p>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
