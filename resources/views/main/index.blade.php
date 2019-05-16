@extends('layouts.app')

@section('content')

    <div class="banner">
        <div class="banner__img">
            <img src="../../images/banner.png">
            <div class="headline">
                <p class="bold">{{ trans('main.title') }}</p>
                <p>Мухтар Ауэзов</p>
{{--                <a href="{{ URL::to('/main/history') }}">{{ trans('main.about_institute') }}</a>--}}
            </div>
        </div>
    </div>

    <div>
        <div class="nwes">
            <div class="nwes__state">
                <a href="{{ URL::to('/news') }}"><p><i class="fas fa-newspaper"></i>&nbsp;&nbsp;{{ trans('main.news') }}</p></a>
                <a href="{{ URL::to('/news') }}" class="nwes__state__archive">{{ trans('main.archive') }}</a>
            </div>
            <div class="nwes__blog">
                <div class="nwes__blog__mini">
                    @if ($news)
                        @foreach ($news as $newsValue)
                            <div class="new__mini">
                                <div class="new__mini__img">
                                    <a href="{{ route('news.show', [ 'id' => $newsValue->id ]) }}"><img src="{{ $newsValue ? asset('uploads/' . $newsValue->image_show) : ""}}"></a>
                                </div>
                                <div class="new__mini-blog">
                                    <div class="new__state">
{{--                                        <div class="new__state__text">--}}
{{--                                            <p>{{ $newsValue->title }}</p>--}}
{{--                                        </div>--}}
                                        <div class="new__state__text">
                                            <p>{!! $newsValue->description_short !!}</p>
                                            <a href="{{ route('news.show', [ 'id' => $newsValue->id ]) }}">Читать дальше</a>
                                        </div>
                                    </div>
                                    <div class="new__state__date">
                                        <i class="far fa-calendar-alt"></i><p>&nbsp;&nbsp;{{ $newsValue->created_at }}&nbsp;&nbsp;</p><i class="far fa-eye"></i><p>&nbsp;&nbsp;1222</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif

                </div>
            </div>
        </div>
    </div>

    <div class="wrap-education">
        <div class="education">
            <div class="education__haed">
                <i class="fas fa-graduation-cap"></i>
                <p>&nbsp;&nbsp;{{ trans('main.education') }}</p>
            </div>
            <div class="education__text">
                <p>Мы предлагаем вам уникальную возможность получить академическую степень, сочетающую в себе научные традиции и современные стандарты образования, по специальностям Маоистратуры и Докторантуры PhD:</p>
            </div>
            <div class="education__icons">
                <div class="education__icons__blog">
                    <div class="education__icons__blog__icon">
                        <div class="eicon">
                            <img src="../../images/Group1.png">
                        </div>
                        <div class="etext">
                            <p>6M021401</p>
                            <p>Современная литература Казахстана</p>
                        </div>
                    </div>
                    <div class="education__icons__blog__icon">
                        <div class="eicon">
                            <img src="../../images/Group5.png">
                        </div>
                        <div class="etext">
                            <p>6D021401</p>
                            <p>Теория и литературная критика</p>
                        </div>
                    </div>
                </div>
                <div class="education__icons__blog">
                    <div class="education__icons__blog__icon">
                        <div class="eicon">
                            <img src="../../images/Group3.png">
                        </div>
                        <div class="etext">
                            <p>6M021402</p>
                            <p>Текстология</p>
                        </div>
                    </div>
                    <div class="education__icons__blog__icon">
                        <div class="eicon">
                            <img src="../../images/Group4.png">
                        </div>
                        <div class="etext">
                            <p>6D021402</p>
                            <p>Казахский фольклор и древняя литература</p>
                        </div>
                    </div>
                </div>
                <div class="education__icons__blog">
                    <div class="education__icons__blog__icon">
                        <div class="eicon">
                            <img src="../../images/Group5.png">
                        </div>
                        <div class="etext">
                            <p>6M021403</p>
                            <p>Фольклористика</p>
                        </div>
                    </div>
                    <div class="education__icons__blog__icon">
                        <div class="eicon">
                            <img src="../../images/Group6.png">
                        </div>
                        <div class="etext">
                            <p>6D021403</p>
                            <p>Литературоведение</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="books">
        <div class="books__haed">
            <i class="fas fa-book"></i>
            <a href="{{ URL::to('/books') }}"><p>&nbsp;&nbsp;{{ trans('main.books_institute') }}</p></a>
        </div>
        <div class="cbooks_wrap">
            <div class="books__blog">
                <div class="books__blog__book">
                    <img src="../../images/book1.jpg">
                    <p>Мировой <br>литературный <br>процесс XXI века</p>
                </div>
                <div class="books__blog__book">
                    <img src="../../images/book2.jpg">
                    <p>Абай Кунанбаев<br>в мировом<br>литературоведении</p>
                </div>
                <div class="books__blog__book">
                    <img src="../../images/book3.jpg">
                    <p>Адам жөне табиғат.<br>Қазақ әдебиетінің<br>антологиясы</p>
                    <p class="aphtor">А.Т.Қалиасқарова,<br>Е.Сұлтан.</p>
                </div>
            </div>
            <div class="books__text">
                <p>Изданы совместно с московским издательством «Художественная литература» два тома «Льется песня под домбру» (2009) и «Небосвод над моей головой» (2010). В тома включены шедевры устного народного творчества и памятники казахской литературы, ряд которых относится к вершинам древней и средневековой культуры.</p>
                <a href="{{ URL::to('/books') }}">{{ trans('main.all_books') }}</a>
            </div>
        </div>
    </div>

    @include('main.partials.map')

@endsection

