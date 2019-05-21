<div class="header">
    <div class="header__nav">
        <div class="header__nav__logo">
            <div class="logo">
                <a href="{{ URL::to('/') }}"><img src="../../images/logo-litart2.png"></a>

            </div>
            <div class="nav">
                <ul class="menu">
                    <li class="menu-item">
                        <a href="#">Институт &#9662;</a>
                        <ul class="sub-menu sub-menu-mod">
                            <li>
                                <a href="{{ URL::to('/news') }}">{{ trans('header.news') }}</a>
                            </li>
                            <li>
                            @foreach ($aboutses as $abouts)
                                <li>
                                    <a href="{{ route('abouts.show', [ 'id' => $abouts->id ]) }}" onclick="">{{ $abouts->title }}</a>
                                </li>
                                @endforeach
                                </li>
                            <li>
                                <a href="{{ URL::to('/books') }}">{{ trans('header.books') }}</a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-item">
                        <a href="#">{{ trans('header.structure') }} &#9662;</a>
                        <ul class="sub-menu sub-menu2-mod">
                            <li>
                                <a href="{{ URL::to('/structure/administration') }}">{{ trans('header.admins') }}</a>
                            </li>
                            <li>
                                <a href="{{ route('departments.index') }}">{{ trans('header.departmens') }}</a>

                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="#">{{ trans('header.culture') }} &#9662;</a>
                        <ul class="sub-menu">
                            @foreach ($cultures as $cultur)
                                <li>
                                    <a href="{{ route('main.show', [ 'id' => $cultur->id ]) }}">{{ $cultur->title }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
{{--        <div class="header__lang">--}}
{{--            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)--}}
{{--                <li>--}}
{{--                    <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">--}}
{{--                        {{ $properties['name'] }}--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            @endforeach--}}
{{--        </div>--}}
{{--        <div class="btn-group" id="lang-btn">--}}
{{--            <button type="button" data-toggle="dropdown" id="header__local" >{{ trans('main.language') }}--}}
{{--                <span class="caret"></span>--}}
{{--            </button>--}}
{{--            <ul class="dropdown-menu">--}}
{{--                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)--}}
{{--                    <li>--}}
{{--                        <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">--}}
{{--                            {{ $properties['name2'] }}--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                @endforeach--}}
{{--            </ul>--}}
{{--        </div>--}}

        <div class="header__local">
            <a href="#box" class="lang-flag {{ app()->getLocale() }}" onclick="openbox('box'); return false">{{ trans('header.language') }}</a>
            <div id="box" class="header__local__item" style="display: none">
                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    <li class="lang-flag {{ $localeCode }}" data="{{ $localeCode }}">
                        <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                            {{ $properties['name2'] }}
                        </a>
                    </li>
                @endforeach
            </div>
        </div>
        <div class="search search_clearfix">
            <form action="{{ URL::to('search') }}" method="GET" class="searchform">
                <div class="search__text">
                    <input type="text" value="" placeholder="{{ trans('main.search') }}" name="search"/>
                </div>
                <input type="image" src="../../images/search.png"/>
            </form>
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

    function openbox(box) {
        var display = document.getElementById('box').style.display;
        if (display == "none") {
            document.getElementById('box').style.display = "block";
        } else {
            document.getElementById('box').style.display = "none";
        }
    }

    window.onscroll = function() {
        document.getElementById('box').style.display = "none";
    }


</script>
