@extends('layouts.app')

@section('content')
    <div class="news_page__way">
        <a href="{{ URL::to('/') }}">{{ trans('content.main') }}</a>&nbsp;/
        <a href="{{ URL::to('/books') }}">{{ trans('content.books') }}</a>&nbsp;/
        {{ $bok->title }}
    </div>
    <div>
        <div class="news">
            <div class="news__state">
                <div class="news__state__headline">
                    <h1>{{ $bok->title }}</h1>
                </div>
                <div class="news__state__text">
                    <div class="news__books__img">
                        <img src="{{ $bok ? asset('uploads/' . $bok->image_show) : ""}}" alt="">
                    </div>
                    <div class="news__state__text__descr">
                        <div class="news__state__text__descr__aphtor">
                            <p>{{ trans('content.author') }}</p><p>{!! $bok->description_short !!}</p>
                        </div>
                        <div class="news__state__reader">
                            <a href="{{ route('reader.index', [ 'id' => $bok->id ]) }}" target="_blank">Читать книгу</a>
                        </div>
                        <div class="news__state__text__descr__items">
                            <p>{!! $bok->description !!}</p>
                        </div>
                    </div>
                </div>
{{--                <div class="news__state__date">--}}
{{--                    <div class="pnew__state__date">--}}
{{--                        <i class="far fa-calendar-alt"></i><p>&nbsp;&nbsp;{{ $bok->created_at }}&nbsp;&nbsp;</p>--}}
{{--                        <i class="far fa-eye"></i><p>&nbsp;&nbsp;1222</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>

@endsection
