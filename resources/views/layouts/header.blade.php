<div class="header">
    <div class="header__nav">
        <div class="logo">
            <a href="{{ URL::to('/') }}"><img src="../../images/logo-litart.png"></a>

        </div>
        <div class="nav">
            <ul class="menu">
                <li class="menu-item">
                    <a href="#">Институт &#9662;</a>
                    <ul class="sub-menu">
                        <li>
                            <a href="{{ URL::to('/news') }}">Новости</a>
                        </li>
                         <li>
                             @foreach ($aboutses as $abouts)
                                <li>
                                   <a href="{{ route('abouts.show', [ 'id' => $abouts->id ]) }}">{{ $abouts->title }}</a>
                                </li>                             
                             @endforeach
                        </li>
                    </ul>
                        </li>
                                 
                <li class="menu-item">
                    <a href="#">Структура &#9662;</a>
                    <ul class="sub-menu">
                        <li>
                            <a href="{{ URL::to('/structure/administration') }}">Административно–управленческий апарат</a>
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
</script>
