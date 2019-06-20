<div class="header">
    <div class="header__nav">
        <div class="header__nav__logo">
            <div class="logo">
                <a href="{{ URL::to('/') }}"><img src="../../images/logo-litart2.png"></a>
            </div>
        </div>
        <div class="header__wrap">
            <div class="search search_clearfix">
                <form action="{{ URL::to('search') }}" method="GET" class="searchform">
                    <div class="search__text">
                        <input type="text" value="" placeholder="{{ trans('main.search') }}" name="search"/>
                    </div>
                    <input type="image" src="../../images/search.png"/>
                </form>
            </div>
            <div class="header__local">
{{--                <a href="#box" class="lang-flag {{ app()->getLocale() }}" onclick="openbox('box'); return false">{{ trans('header.language') }}</a>--}}
                <div class="header__local__item">
                    <ul>
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <li id="box" class="lang-flag {{ $localeCode }} {{ app()->getLocale() == $localeCode ? 'active' : '' }}" data="{{ $localeCode }}">
                                <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    {{ $properties['name'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header__blank">

    </div>
    <div id="avatar" class="header__menu">
        <div class="nav">
            <ul class="menu">
                <li class="menu-item">
                    <a href="#" class="menu-link">Институт <i class="fas fa-chevron-down"></i></a>
                    <ul class="sub-menu sub-menu-mod">
                        <li>
                            <a href="{{ URL::to('/news') }}">{{ trans('header.news') }}</a>
                        </li>
                        @foreach ($aboutses as $abouts)
                            <li>
                                <a href="{{ route('abouts.show', [ 'id' => $abouts->id ]) }}" onclick="">{{ $abouts->title }}</a>
                            </li>
                        @endforeach
                        <li>
                            <a href="{{ URL::to('/structure/administration') }}">{{ trans('header.leadership') }}</a>
                        </li>
                        <li>
                            <a href="{{ route('departments.index') }}">{{ trans('header.departmens') }}</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a href="{{ route('scp.index') }}" class="menu-link">{{ trans('header.science') }}</a>
                </li>
                <li class="menu-item">
                    <a href="#" class="menu-link">{{ trans('header.culture') }} <i class="fas fa-chevron-down"></i></a>
                    <ul class="sub-menu sub-menu3-mod">
                        <li>
                            <a href="{{ URL::to('/books') }}">{{ trans('header.books') }}</a>
                        </li>
                        @foreach ($cultures as $cultur)
                            <li>
                                <a href="{{ route('main.show', [ 'id' => $cultur->id ]) }}">{{ $cultur->title }}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                @foreach ($halyks as $halyk)
                    <li class="menu-item">
                        <a href="{{ route('halyks.show', [ 'id' => $halyk->id ]) }}" class="menu-link">{{ trans('header.university') }}</a>
                    </li>
                @endforeach



                @foreach ($keruens as $keruen)
                    <li class="menu-item">
                        <a href="{{ route('keruens.show', [ 'id' => $keruen->id ]) }}"  class="menu-link">{{ trans('header.keruen') }}</a>
                    </li>
                @endforeach

                @foreach ($altyns as $altyn)
                    <li class="menu-item">
                        <a href="{{ route('altyns.show', [ 'id' => $altyn->id ]) }}"  class="menu-link">{{ trans('header.gold') }}</a>
                    </li>
                @endforeach


                @foreach ($museums as $museum)
                    <li class="menu-item">
                        <a href="{{ route('museums.show', [ 'id' => $museum->id ]) }}"  class="menu-link">{{ trans('header.museum') }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>


<script type="text/javascript">
    let eL = document.getElementsByClassName('menu-item');
    for (let i = 0; i < eL.length; i++) {
        eL[i].addEventListener('mouseenter', showSub, false);
        eL[i].addEventListener('mouseleave', hideSub, false);
    }

    function showSub () {
        if (this.children.length>1){
            this.children[1].style.height = "auto";
            this.children[1].style.opacity = "1";
            this.children[1].style.overflow = "visible";
        } else {
            return false;
        }
    }

    function hideSub () {
        if (this.children.length>1){
            this.children[1].style.height = "0";
            this.children[1].style.opacity = "0";
            this.children[1].style.overflow = "hidden";
        } else {
            return false;
        }
    }

    // function openbox(box) {
    //     var display = document.getElementById('box').style.display;
    //     if (display == "none") {
    //         document.getElementById('box').style.display = "block";
    //     } else {
    //         document.getElementById('box').style.display = "none";
    //     }
    // }
    //
    // window.onscroll = function() {
    //     document.getElementById('box').style.display = "none";
    // }

    // блок который фиксируется с верху
    var avatarElem = document.getElementById('avatar');

    // пустой блок с такойже высотой для подставления фиксировоному блоку
    var headerBlank = document.getElementsByClassName('header__blank');

    var avatarSourceBottom = avatarElem.getBoundingClientRect().top + window.pageYOffset;


    window.onscroll = function() {
        if (avatarElem.classList.contains('fixed') && window.pageYOffset < avatarSourceBottom) {
            avatarElem.classList.remove('fixed');
            headerBlank[0].style.display = 'none';
        } else if (window.pageYOffset > avatarSourceBottom) {
            avatarElem.classList.add('fixed');
            headerBlank[0].style.display = 'block';
        }
    };



</script>
