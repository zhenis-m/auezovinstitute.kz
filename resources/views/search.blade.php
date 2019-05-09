{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--    <h1>Какойто тект</h1>--}}
{{--    <div class="pnwes__page">--}}
{{--        @foreach ($newses as $news)--}}
{{--            <div class="pnwes__page__block">--}}
{{--                <div class="pnwes__page__block__wrap">--}}
{{--                    <a href="{{ route('news.show', [ 'id' => $news->id ]) }}"><img src="{{ $news["image"] }}"></a>--}}
{{--                    <div class="pnwes__page__block__text">--}}
{{--                        <p>{{ $news->title }}<a href="{{ route('news.show', [ 'id' => $news->id ]) }}">Читать дальше</a></p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="pnew__state__date">--}}
{{--                    <i class="far fa-calendar-alt"></i><p>&nbsp;&nbsp;{{ $news->created_at }}&nbsp;&nbsp;</p><i class="far fa-eye"></i><p>&nbsp;&nbsp;1222</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        @endforeach--}}
{{--    </div>--}}
{{--@endsection--}}