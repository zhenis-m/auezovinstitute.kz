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
			@foreach ($books as $book)
				<div class="books__show">
					<a class="" href="{{ route('books.show', [ 'id' => $book->id ]) }}">
						<img src="{{ $book->image }}">
						<p>{{ $book->title }}</p>
						<p class="aphtor">{{ $book->description }}</p>
					</a>
				</div>
			@endforeach
		</div>
		<div class="pnwes__links">
			<a href="#">«</a>
			<div class="pnwes__links__numbers">
				<a href="#" class="active">1</a>
				<a href="#">2</a>
				<a href="#">3</a>
				<a href="#">4</a>
				<a href="#">5</a>
				<a href="#">6</a>
				<a href="#">7</a>
				<a href="#">8</a>
			</div>
			<a href="#">»</a>
		</div>
	</div>
</div>
{{--<script src="js/script.js"></script>--}}
@endsection