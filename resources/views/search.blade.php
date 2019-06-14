@extends('layouts.app')

@section('content')
    <div class="search__wrap">
        <h1>{{ trans('search.title') }}</h1>
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
    </div>

@endsection
