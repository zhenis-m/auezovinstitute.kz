@extends('layouts.app')

@section('content')
    <div class="search__wrap">
        <h1>{{ trans('search.title') }}</h1>
        <h2>{{ trans('header.news') }}</h2>
        <div class="pnwes__page">
            @foreach ($newses as $news)
                <a class="news__link" href="{{ route('news.show', [ 'id' => $news->id ]) }}">
                    <div class="pnwes__page__state">
                        <div class="pnwes__page__state__wrap">
                            <div class="pnwes__page__state__wrap__img">
                                <img src="{{ $news ? asset('uploads/' . $news->image_show) : ""}}">
                            </div>
                            <div class="pnwes__page__state__text">
                                <p>{!! $news->description_short !!}</p>
                            </div>
                        </div>
                        <div class="pnew__state__date">
                            <i class="far fa-calendar-alt"></i><p>&nbsp;&nbsp;{{ $news->created_at }}&nbsp;&nbsp;</p>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
        <h2>{{ trans('header.books') }}</h2>
        <div class="books__page">
            @foreach ($books as $bok)
                <div class="books__show">
                    <a class="" href="{{ route('books.show', [ 'id' => $bok->id ]) }}">
                        <img src="{{ $bok ? asset('uploads/' . $bok->image_show) : ""}}">
                        <p class="book__name">{{ $bok->title }}</p>
                        <p class="aphtor">{!! $bok->description_short !!}</p>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

@endsection
