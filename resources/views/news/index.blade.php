@extends('layouts.app')

@section('content')
<div>
	<div class="pnwes">
		<div class="pnwes__way">
			<a href="{{ URL::to('/') }}">{{ trans('content.main') }}</a>&nbsp;/&nbsp;
			<a>{{ trans('content.news') }}</a>
		</div>
		<div class="pnwes__state">
			<p><i class="fas fa-folder-open"></i>&nbsp;&nbsp;{{ trans('content.all_news') }}</p>
		</div>
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
{{--                                {{ trans('content.read_more') }}--}}
                            </div>
                        </div>
                        <div class="pnew__state__date">
                            <i class="far fa-calendar-alt"></i><p>&nbsp;&nbsp;{{ Date::parse($news->created_at)->format('j F Y г.') }}&nbsp;&nbsp;</p>
        {{--                    <i class="far fa-eye"></i><p>&nbsp;&nbsp;1222</p>--}}
                        </div>
                    </div>
                </a>
			@endforeach
                <tfoot>
                <tr colspan="3">
                    <ul class="pagination pull-right">
                        {{$newses->links()}}
                    </ul>
                </tr>
                </tfoot>
		</div>
	</div>
</div>
{{--<script src="js/script.js"></script>--}}
@endsection
