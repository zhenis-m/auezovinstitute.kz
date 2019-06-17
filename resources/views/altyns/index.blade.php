@extends('layouts.app')

@section('content')
<div>
	<div class="pnwes">
		<div class="pnwes__way">
			<a href="{{ URL::to('/') }}">{{ trans('content.main') }}</a>&nbsp;/&nbsp;
			<a>{{ trans('content.news') }}</a>
		</div>
		<div class="pnwes__state">
			<a href="#"><p><i class="fas fa-folder-open"></i>&nbsp;&nbsp;{{ trans('content.all_news') }}</p></a>
		</div>
		<div class="pnwes__page">
			@foreach ($altyns as $altyn)
			<div class="pnwes__page__block">
				<div class="pnwes__page__block__wrap">
					<div class="pnwes__page__block__wrap__img">
						<a href="{{ route('altyns.show', [ 'id' => $altyn->id ]) }}"><img src="{{ $altyn ? asset('uploads/' . $altyn->image_show) : ""}}"></a>
					</div>
					<div class="pnwes__page__block__text">
						<p>{!! $altyn->description_short !!}</p>
						<a href="{{ route('altyns.show', [ 'id' => $altyn->id ]) }}">{{ trans('content.read_more') }}</a>
					</div>
				</div>
				<div class="pnew__state__date">
					<i class="far fa-calendar-alt"></i><p>&nbsp;&nbsp;{{ $altyn->created_at }}&nbsp;&nbsp;</p>
{{--                    <i class="far fa-eye"></i><p>&nbsp;&nbsp;1222</p>--}}
				</div>
			</div>
			@endforeach
                <tfoot>
                <tr colspan="3">
                    <ul class="pagination pull-right">
                        {{$altyns->links()}}
                    </ul>
                </tr>
                </tfoot>
		</div>
	</div>
</div>
{{--<script src="js/script.js"></script>--}}
@endsection
