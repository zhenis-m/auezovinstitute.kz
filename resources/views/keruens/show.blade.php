@extends('layouts.app')

@section('content')
    <div class="culrure__wrap">
        <div class="news_page__way">
            <a href="{{ URL::to('/') }}">{{ trans('content.main') }}</a>&nbsp;/
            {{ $keruen->title }}
        </div>
        <div>
            <div class="news">
                <div class="news__state">
                    <div class="news__state__headline">
                        <h1>{{ $keruen->title }}</h1>
                    </div>
                    <div class="news__state__img">
                        <img src="{{ $keruen ? asset('uploads/' . $keruen->image_show) : ""}}" alt="">
                    </div>
                    <div class="news__state__text">
                        <?php
                        echo nl2br( $keruen->description );
                        ?>
                    </div>
                    <div class="news__state__date">
                        <div class="pnew__state__date">
                            <i class="far fa-calendar-alt"></i><p>&nbsp;&nbsp;{{ $keruen->created_at->toDateString() }}&nbsp;&nbsp;</p>
                            {{--                        <i class="far fa-eye"></i><p>&nbsp;&nbsp;1222</p>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
