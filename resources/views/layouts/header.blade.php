{{--<nav class="navbar navbar-expand-md navbar-light navbar-laravel">--}}
{{--    <div class="container">--}}
{{--        <a class="navbar-brand" href="{{ url('/') }}">--}}
{{--            {{ config('app.name', 'Laravel') }}--}}
{{--        </a>--}}
{{--        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">--}}
{{--            <span class="navbar-toggler-icon"></span>--}}
{{--        </button>--}}

{{--        <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--            <!-- Left Side Of Navbar -->--}}
{{--            <ul class="navbar-nav mr-auto">--}}
{{--            </ul>--}}

{{--            <!-- Right Side Of Navbar -->--}}
{{--            <ul class="navbar-nav ml-auto">--}}
{{--                <!-- Authentication Links -->--}}
{{--                @guest--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
{{--                    </li>--}}
{{--                    @if (Route::has('register'))--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--                        </li>--}}
{{--                    @endif--}}
{{--                @else--}}
{{--                    <li class="nav-item dropdown">--}}
{{--                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                            {{ Auth::user()->name }} <span class="caret"></span>--}}
{{--                        </a>--}}

{{--                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
{{--                            <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--                               onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();">--}}
{{--                                {{ __('Logout') }}--}}
{{--                            </a>--}}

{{--                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--                                @csrf--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                @endguest--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</nav>--}}


<div class="header">
    <div class="header__nav">
        <div class="logo">
            <a href="{{ URL::to('/') }}"><img src="../css/img/logo-litart.png"></a>

        </div>
        <div class="nav">
            <ul class="menu">
                <li class="menu-item">
                    <a href="#">Институт &#9662;</a>
                    <ul class="sub-menu">
                        <li>
                            <a href="{{ URL::to('/posts/history') }}">История</a>
                        </li>
                        <li>
                            <a href="{{ URL::to('/posts/mass_media') }}">СМИ о нас</a>
                        </li>
                        <li>
                            <a href="{{ URL::to('/news') }}">Новости</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a href="#">Структура &#9662;</a>
                    <ul class="sub-menu">
                        <li>
                            <a href="{{ URL::to('/admins/administration') }}">Административно–управленческий апарат</a>
                        </li>
                        <li>
                            <a href="{{ URL::to('/departments/index') }}">Отделы института</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a href="#">Культурное наследие &#9662;</a>
                    <ul class="sub-menu">
                        <li>
                            <a href="{{ URL::to('/cultural/childrens') }}">БАБАЛАР СӨЗ</a>
                        </li>
                        <li>
                            <a href="{{ URL::to('/cultural/literary_history') }}">История казахской литературы</a>
                        </li>
                        <li>
                            <a href="{{ URL::to('/cultural/anthology_music') }}">Анталогия казахской музыки</a>
                        </li>
                        <li>
                            <a href="{{ URL::to('/cultural/art_history') }}">История искуства казахов</a>
                        </li>
                        <li>
                            <a href="{{ URL::to('/cultural/monuments') }}">Литературные памятники</a>
                        </li>
                        <li>
                            <a href="{{ URL::to('/cultural/folklore') }}">Мировая фольклористика</a>
                        </li>
                        <li>
                            <a href="{{ URL::to('/cultural/literary_studies') }}">Мировое литературоведение</a>
                        </li>

                        <li>
                            <a href="{{ URL::to('/cultural/magazine') }}">Журнал «Керуен»</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="search search_clearfix">
            <form action="#" method="post">
                <div class="search__text">
                    <input type="text" value="" placeholder="Поиск"/>
                </div>
                <input type="image" src="../css/img/search.png"/>
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
</script>
