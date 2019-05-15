@extends('layouts.app')

@section('content')
<div>
	<div class="pnwes">
		<div class="pnwes__way">
			<a href="{{ URL::to('/') }}">Главная</a>&nbsp;/&nbsp;
			<a>Новости</a>
		</div>
		<div class="pnwes__state">
			<a href="#"><p><i class="fas fa-folder-open"></i>&nbsp;&nbsp;Все новости</p></a>
		</div>
		<div class="pnwes__page">
			@foreach ($newses as $news)
			<div class="pnwes__page__block">
				<div class="pnwes__page__block__wrap">
					<a href="{{ route('news.show', [ 'id' => $news->id ]) }}"><img src="{{ $news ? asset('uploads/' . $news->image_show) : ""}}"></a>
					<div class="pnwes__page__block__text">
						<p>{{ $news->title }}<a href="{{ route('news.show', [ 'id' => $news->id ]) }}">Читать дальше</a></p>
					</div>
				</div>
				<div class="pnew__state__date">
					<i class="far fa-calendar-alt"></i><p>&nbsp;&nbsp;{{ $news->created_at }}&nbsp;&nbsp;</p><i class="far fa-eye"></i><p>&nbsp;&nbsp;1222</p>
				</div>
			</div>
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
