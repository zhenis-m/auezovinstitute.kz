@extends('layouts.app')

@section('content')
<div>
	<div class="pnwes">
		<div class="pnwes__way">
			<a href="{{ URL::to('/') }}">Главная</a>&nbsp;/&nbsp;
			<a href="{{ URL::to('/books') }}">Книги</a>
		</div>
		<div class="pnwes__state">
			<a href="#"><p><i class="fas fa-folder-open"></i>&nbsp;&nbsp;Все книги</p></a>
		</div>
		<div class="books__page">
			@foreach ($books as $bok)
				<div class="books__show">
					<a class="" href="{{ route('books.show', [ 'id' => $bok->id ]) }}">
						<img src="{{ $bok ? asset('uploads/books/' . $bok->image_show) : ""}}">
						<p>{{ $bok->title }}</p>
						<p class="aphtor">{!! $bok->description !!}</p>
					</a>
				</div>
			@endforeach
		</div>
        <tfoot>
        <tr colspan="3">
            <ul class="pagination pull-right">
                {{$books->links()}}
            </ul>
        </tr>
        </tfoot>
	</div>
</div>
{{--<script src="js/script.js"></script>--}}
@endsection