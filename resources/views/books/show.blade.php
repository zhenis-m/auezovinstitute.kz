@extends('layouts.app')

@section('content')
    <div class="news_page__way">
        <a href="{{ URL::to('/') }}">{{ trans('content.main') }}</a>&nbsp;/
        <a href="{{ URL::to('/books') }}">{{ trans('content.books') }}</a>&nbsp;/
        <a href="#">{{ $bok->title }}</a>
    </div>
    <div>
        <div class="news">
            <div class="news__state">
                <div class="news__state__headline">
                    <h1>{{ $bok->title }}</h1>
                </div>
                <div class="news__books__img">
                    <img src="{{ $bok ? asset('uploads/' . $bok->image_show) : ""}}" alt="">
                </div>
                <div class="news__state__text">
                    {!! $bok->description !!}
                </div>
                <div class="news__state__reader">
                    <a href="{{ URL::to('/reader') }}" name="{{ $bok ? asset('uploads/' . $bok->ebook_show) : ""}}" id="link" target="_blank">Читать книгу</a>
                </div>
                <div class="news__state__date">
                    <div class="pnew__state__date">
                        <i class="far fa-calendar-alt"></i><p>&nbsp;&nbsp;{{ $bok->created_at }}&nbsp;&nbsp;</p><i class="far fa-eye"></i><p>&nbsp;&nbsp;1222</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection