@extends('layouts.app')

@section('content')
  	<div>
		<div class="structur">
			<div class="structur__way">
				<a href="{{ URL::to('/') }}">Главная</a>&nbsp;/&nbsp;
				<a href="{{ URL::to('/structure/administration') }}">Административно-управленческий аппарат</a>
			</div>
			<div class="structur__state">
				<a href="#"><p><i class="fas fa-users"></i>&nbsp;&nbsp;Структура</p></a>
			</div>
			<div class="structur__admins">
				<a href="{{ URL::to('/structure/director') }}">
					<div class="structur__admins__men">
						<div class="structur__admins__men__photo">
							<img src="../css/img/admins/director.jpg">
						</div>
						<div class="structur__admins__men__name">
							<div class="structur__admins__men__name__text">
								<p>Матыжанов Кенжехан Слямжанович</p>
								<p class="mini">Директор</p>
							</div>
							<div class="structur__admins__men__name__button">
								<a href="{{ URL::to('/structure/director') }}" class="button__men"><i class="fas fa-book-reader"></i>&nbsp;&nbsp;Узнать больше</a>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="structur__admins">
				<a href="{{ URL::to('/structure/zamdirector') }}">
					<div class="structur__admins__men">
						<div class="structur__admins__men__photo">
							<img src="../css/img/admins/ZamDir.jpg">
						</div>
						<div class="structur__admins__men__name">
							<div class="structur__admins__men__name__text">
								<p>Калиева Альмира Кайыртаевна</p>
								<p class="mini">Заместитель директора</p>
							</div>
							<div class="structur__admins__men__name__button">
								<a href="{{ URL::to('/structure/zamdirector') }}" class="button__men"><i class="fas fa-book-reader"></i>&nbsp;&nbsp;Узнать больше</a>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="structur__admins">
				<a href="{{ URL::to('/structure/zamdirector2') }}">
					<div class="structur__admins__men">
						<div class="structur__admins__men__photo">
							<img src="../css/img/admins/ZamDir2.jpg">
						</div>
						<div class="structur__admins__men__name">
							<div class="structur__admins__men__name__text">
								<p>Султан Ертай</p>
								<p class="mini">Ученый секретарь</p>
							</div>
							<div class="structur__admins__men__name__button">
								<a href="{{ URL::to('/structure/zamdirector2') }}" class="button__men"><i class="fas fa-book-reader"></i>&nbsp;&nbsp;Узнать больше</a>
							</div>
						</div>
					</div>
				</a>
			</div>
    	</div>
    </div>
@endsection
