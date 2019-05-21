@extends('layouts.app')

@section('content')
<div>
	<div class="pnwes">
		<div class="pnwes__way">
			<a href="{{ URL::to('/') }}">{{ trans('content.main') }}</a>&nbsp;/&nbsp;
		</div>
		<div class="pnwes__state">
			<a href="#"><p><i class="fas fa-folder-open"></i>&nbsp;&nbsp;{{ trans('content.all_news') }}</p></a>
		</div>
		<div class="pnwes__page">
			@foreach ($aboutses as $abouts)
			<div class="pnwes__page__block">
				<div class="pnwes__page__block__wrap">
					<a href="{{ route('abouts.show', [ 'id' => $abouts->id ]) }}"><img src="{{ $abouts ? asset('uploads/' . $abouts->image_show) : ""}}"></a>
					<div class="pnwes__page__block__text">
						<p>{{ $abouts->title }}<a href="{{ route('abouts.show', [ 'id' => $abouts->id ]) }}">{{ trans('content.read_more') }}</a></p>
					</div>
				</div>
				<div class="pnew__state__date">
					<i class="far fa-calendar-alt"></i><p>&nbsp;&nbsp;{{ $abouts->created_at }}&nbsp;&nbsp;</p><i class="far fa-eye"></i><p>&nbsp;&nbsp;1222</p>
				</div>
			</div>
			@endforeach
                <tfoot>
                <tr colspan="3">
                    <ul class="pagination pull-right">
                        {{$aboutses->links()}}
                    </ul>
                </tr>
                </tfoot>
		</div>
	</div>
</div>
{{--<script src="js/script.js"></script>--}}
@endsection
