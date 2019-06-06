@extends('layouts.app')

@section('content')

    <div class="banner">
        <div class="banner__img">
            <img src="../../images/banner.png">
            <div class="headline">
                <p class="bold">{{ trans('main.title') }}</p>
                <p>Мухтар Ауэзов</p>
            </div>
        </div>
    </div>
{{--           @include('layouts.banner')--}}
    <div>
        <div class="nwes">
            <div class="nwes__state">
                <a href="{{ URL::to('/news') }}"><p><i class="far fa-calendar-alt"></i>&nbsp;&nbsp;{{ trans('main.news') }}</p></a>
                <div class="line">

                </div>
            </div>
            <div class="nwes__blog">
                <div class="nwes__blog__mini">
                    @if ($news)
                        @foreach ($news as $newsValue)
                            <a href="{{ route('news.show', [ 'id' => $newsValue->id ]) }}" class="new__mini-wrap">
                                <div class="new__mini">
                                    <div class="new__mini__img">
                                        <img src="{{ $newsValue ? asset('uploads/' . $newsValue->image_show) : ""}}">
                                    </div>
                                    <div class="new__mini-blog">
                                        <div class="new__state">
    {{--                                        <div class="new__state__text">--}}
    {{--                                            <p>{{ $newsValue->title }}</p>--}}
    {{--                                        </div>--}}
                                            <div class="new__state__text">
                                                <h4>{{$newsValue->title}}</h4>
                                                <p>{!! $newsValue->description_short !!}</p>
    {{--                                            <a href="{{ route('news.show', [ 'id' => $newsValue->id ]) }}">Читать дальше</a>--}}
                                            </div>
                                        </div>
                                        <div class="new__state__date">
                                            <div class="new__state__date__wrap"><i class="far fa-calendar-check"></i><p>&nbsp;&nbsp;{{ $newsValue->created_at }}&nbsp;&nbsp;</p></div>
                                            <div class="new__state__date__wrap"><i class="far fa-eye"></i><p>&nbsp;&nbsp;1222</p></div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    @endif

                </div>
            </div>
            <div class="news__archive">
                <a href="{{ URL::to('/news') }}" class="news__archive__state">{{ trans('main.archive') }}</a>
            </div>
        </div>
    </div>

    <div class="wrap-education">
        <div class="education">
            <div class="education__haed">
                <a href="{{ URL::to('/news') }}"><i class="fas fa-university"></i><p>&nbsp;&nbsp;{{ trans('main.education') }}</p></a>
                <div class="line">

                </div>
            </div>
            <div class="education__text">
                <p>Мы предлагаем вам уникальную возможность получить академическую степень, сочетающую в себе научные традиции и современные стандарты образования, по специальностям Маоистратуры и Докторантуры PhD:</p>
            </div>
            <div class="education__icons">
                <div class="education__icons__blog">
                    <div class="eicon">
                        <img src="../../images/Group1.png">
                    </div>
                    <div class="etext">
                        <p>Современная литература Казахстана</p>
                        <p>6M021401</p>
                    </div>
                </div>
                <div class="education__icons__blog">
                    <div class="eicon">
                        <img src="../../images/Group5.png">
                    </div>
                    <div class="etext">
                        <p>Теория и литературная критика</p>
                        <p>6D021401</p>
                    </div>
                </div>
                <div class="education__icons__blog">
                    <div class="eicon">
                        <img src="../../images/Group3.png">
                    </div>
                    <div class="etext">
                        <p>Текстология</p>
                        <p>6M021402</p>
                    </div>
                </div>
                <div class="education__icons__blog">
                    <div class="eicon">
                        <img src="../../images/Group4.png">
                    </div>
                    <div class="etext">
                        <p>Казахский фольклор и древняя литература</p>
                        <p>6D021402</p>
                    </div>
                </div>
                <div class="education__icons__blog">
                    <div class="eicon">
                        <img src="../../images/Group5.png">
                    </div>
                    <div class="etext">
                        <p>Фольклористика</p>
                        <p>6M021403</p>
                    </div>
                </div>
                <div class="education__icons__blog">
                    <div class="eicon">
                        <img src="../../images/Group6.png">
                    </div>
                    <div class="etext">
                        <p>Литературоведение</p>
                        <p>6D021403</p>
                    </div>
                </div>
            </div>
            <div class="education__button">
                <a href="{{ URL::to('/news') }}" class="education__button__link">{{ trans('main.read_more') }}</a>
            </div>
        </div>
    </div>

    <div class="books">
        <div class="books__haed">
            <a href="{{ URL::to('/books') }}"> <i class="fas fa-book"></i><p>&nbsp;&nbsp;{{ trans('main.books_institute') }}</p></a>
            <div class="line">

            </div>
        </div>
        @include('main.partials.bookSlider')
        <div class="books__button">
            <a href="{{ URL::to('/books') }}" class="books__button__link">{{ trans('main.all_books') }}</a>
        </div>
{{--        <div class="cbooks_wrap">--}}
{{--            <div class="books__blog">--}}
{{--                <div class="books__blog__book">--}}
{{--                    <img src="../../images/book1.jpg">--}}
{{--                    <p>Мировой <br>литературный <br>процесс XXI века</p>--}}
{{--                </div>--}}
{{--                <div class="books__blog__book">--}}
{{--                    <img src="../../images/book2.jpg">--}}
{{--                    <p>Абай Кунанбаев<br>в мировом<br>литературоведении</p>--}}
{{--                </div>--}}
{{--                <div class="books__blog__book">--}}
{{--                    <img src="../../images/book3.jpg">--}}
{{--                    <p>Адам жөне табиғат.<br>Қазақ әдебиетінің<br>антологиясы</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="books__text">--}}
{{--                <p>Изданы совместно с московским издательством «Художественная литература» два тома «Льется песня под домбру» (2009) и «Небосвод над моей головой» (2010). В тома включены шедевры устного народного творчества и памятники казахской литературы, ряд которых относится к вершинам древней и средневековой культуры.</p>--}}
{{--                <a href="{{ URL::to('/books') }}">{{ trans('main.all_books') }}</a>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>

    @include('main.partials.map')

@endsection

