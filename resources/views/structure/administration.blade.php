@extends('layouts.app')

@section('content')
  	<div>
		<div class="structur">
			<div class="structur__way">
				<a href="{{ URL::to('/') }}">Главная</a>&nbsp;/&nbsp;
				<a>Административно-управленческий аппарат</a>
			</div>
			<div class="structur__state">
				<a href="#"><p><i class="fas fa-users"></i>&nbsp;&nbsp;Структура</p></a>
			</div>
			<div class="structur__admins">
				@foreach ($directors as $director)		
				<a class="" href="{{ route('structure.show', [ 'id' => $director->id ]) }}">
					<div class="structur__admins__men">
						<div class="structur__admins__men__photo">
							<img src="{{ $director ? asset('uploads/' . $director->image_show) : ""}}">
						</div>
						<div class="structur__admins__men__name">
							<div class="structur__admins__men__name__text">
								<p>{{ $director->title }}</p>
								<p class="aphtor">{!! $director->description !!}</p>
							</div>
							<div class="structur__admins__men__name__button">
									<a href="{{ route('structure.show', [ 'id' => $director->id ]) }}" class="button__men"><i class="fas fa-book-reader"></i>&nbsp;&nbsp;Узнать больше</a>
							</div>
						</div>
					</div>
				</a>
				@endforeach
			</div>
    	</div>
    </div>
@endsection
