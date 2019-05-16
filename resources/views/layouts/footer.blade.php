{{--<meta charset="utf-8">--}}
{{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
{{--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">--}}
{{--<link rel="stylesheet" href="css/Footer-with-button-logo.css">--}}



<footer id="myFooter">
    <div class="container">
        <div class="row">
{{--            <div class="col-sm-3">--}}
{{--                <img src="../../images/footer-logo.png" alt="">--}}
{{--            </div>--}}
            <div class="row-right">
                <div class="col-sm-2">
                    <ul>
                        <li><a href="{{ URL::to('/structure/administration') }}">Администрация</a></li>
                        <li><a href="{{ route('departments.index') }}">Отделы</a></li>
                        <li><a href="{{ URL::to('/books') }}">Книги</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <ul>
                        <li><a href="{{ URL::to('/news') }}">Новости</a></li>
                        <li><a href="{{ URL::to('/main/map') }}">Контакты</a></li>
                    </ul>
                </div>
{{--                <div class="col-sm-2">--}}
{{--                    <ul>--}}
{{--                        <li><a href="{{ URL::to('/footer/international') }}">Международные связи</a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
                <div class="col-sm-2">
                    <div class="btn-group" id="lang-btn">
                        <button type="button" data-toggle="dropdown" class="btn btn-info dropdown-toggle">{{ trans('main.language') }}
                            <span class="caret"></span></button>
                        <!--       <ul class="dropdown-menu">
                                  <li><a href="#">казахский</a></li>
                                  <li><a href="#">русский</a></li>
                              </ul> -->
                        <ul class="dropdown-menu">
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <li>
                                    <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                        {{ $properties['name'] }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="social-networks">
                        <ul>
                            <li> <a href="https://www.google.ru/" target="_blank" class="google"><i class="fa fa-google-plus"></i></a> </li>
                            <li> <a href="https://www.vk.com/" target="_blank" class="vk"><i class="fa fa-vk"></i></a>            </li>
                            <li><a href="https://www.facebook.com/" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a></li>
                            <li>  <a href="https://www.instagram.com/" target="_blank" class="inst"><i class="fa fa-instagram"></i></a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <p> Институт литературы и искусства им. М.О.Ауэзова КН МОН РК&copy; 2019</p>
    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
