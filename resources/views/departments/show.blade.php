<!-- @extends('layouts.app') -->

@section('content')
    <div class="news_page__way">
        <a href="{{ URL::to('/') }}">{{ trans('content.main') }}</a>&nbsp;/
        <a href="{{ URL::to('/departments') }}">{{ trans('content.departmens') }}</a>&nbsp;/
        <a href="#">{{ $depart->title }}</a>
    </div>

    <div>
        <div class="news">
            <div class="news__state">
                <div class="news__state__headline">
                    <h1>{{ $depart->title }}</h1>
                </div>
                <div class="news__state__img">
                    <img src="{{ $depart ? asset('uploads/' . $depart->image_show) : ""}}" alt="">
                </div>
                <div class="news__state__text">
                    {!!  $depart->description !!}
                </div>
                <div class="news__state__date">
                    <div class="pnew__state__date">
                        <i class="far fa-calendar-alt"></i><p>&nbsp;&nbsp;{{ $depart->created_at }}&nbsp;&nbsp;</p><i class="far fa-eye"></i><p>&nbsp;&nbsp;1222</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection