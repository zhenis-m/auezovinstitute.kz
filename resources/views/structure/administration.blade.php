@extends('layouts.app')

@section('content')
  	<div>
		<div class="structur">
			<div class="structur__way">
				<a href="{{ URL::to('/') }}">{{ trans('content.main') }}</a>&nbsp;/&nbsp;
				<a>{{ trans('content.admins') }}</a>
			</div>
			<div class="structur__state">
				<p><i class="fas fa-users"></i>&nbsp;&nbsp;{{ trans('content.structure') }}</p>
			</div>
            <div class="structur__admins__wrap">
                @foreach ($directors as $director)
                    <a class="admins__link" href="{{ route('structure.show', [ 'id' => $director->id ]) }}">
                        <div class="structur__admins">
                            <div class="structur__admins__men">
                                <div class="structur__admins__men__photo">
{{--                                    <a class="admins__link" href="{{ route('structure.show', [ 'id' => $director->id ]) }}">--}}
{{--                                        --}}
{{--                                    </a>--}}
                                    <img src="{{ $director ? asset('uploads/' . $director->image_show) : ""}}">
                                </div>
                                <div class="structur__admins__men__name">
                                    <div class="structur__admins__men__name__text">
                                        <p>{{ $director->title }}</p>
                                        <p class="aphtor">{!! $director->description_short !!}</p>
                                    </div>
{{--                                    <div class="structur__admins__men__name__button">--}}
{{--                                        <i class="fas fa-book-reader"></i>&nbsp;&nbsp;{{ trans('content.to_learn_more') }}--}}
{{--                                    </div>--}}
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
    	</div>
    </div>
@endsection
