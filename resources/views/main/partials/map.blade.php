{{--@extends('layouts.app')--}}

{{--@section('content')--}}
<link rel="stylesheet" type="text/css" href="css/map.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

<div class="line"></div>
<div class="container">

    <div class="tittle">
        <div class="iconstyle">
            <span class="contact100-form-title" id="maptitle"><i class="fas fa-rocket">&nbsp;&nbsp;</i><p>{{ trans('main.contacts') }}</p></span>
        </div>
        <div class="container-contact100">
            <div class="map">
                <div>
                    <div class="info">
                        <div>
                            <ul>
                                <li><p><i class="fas fa-map-marked-alt"></i>&nbsp;&nbsp;050010, г.Алматы,</p></li>
                                <li><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ул. Курмангазы, 29, 2 этаж.</p></li>
                            </ul>
                        </div>
                        <div>
                            <ul>
                                <li><p><i class="fas fa-phone"></i>&nbsp;&nbsp;(727) 272 74 11</p></li>
                                <li><p><i class="fas fa-envelope-open"></i>&nbsp;&nbsp;info@litart.kz</p></li>
                            </ul>
                        </div>
                    </div>
                    <a class="dg-widget-link" href="http://2gis.kz/almaty/firm/9429940000795835/center/76.952369,43.245279/zoom/16?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">Посмотреть на карте Алматы</a><div class="dg-widget-link"><a href="http://2gis.kz/almaty/firm/9429940000795835/photos/9429940000795835/center/76.952369,43.245279/zoom/17?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=photos">Фотографии компании</a></div><div class="dg-widget-link"><a href="http://2gis.kz/almaty/center/76.952369,43.245279/zoom/16/routeTab/rsType/bus/to/76.952369,43.245279╎Институт литературы и искусства им. М.О. Ауэзова?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=route">Найти проезд до Институт литературы и искусства им. М.О. Ауэзова</a></div><script charset="utf-8" src="https://widgets.2gis.com/js/DGWidgetLoader.js"></script><script charset="utf-8">new DGWidgetLoader({"width":400,"height":400,"borderColor":"#a3a3a3","pos":{"lat":43.245279,"lon":76.952369,"zoom":16},"opt":{"city":"almaty"},"org":[{"id":"9429940000795835"}]});</script><noscript style="color:#c00;font-size:16px;font-weight:bold;">Виджет карты использует JavaScript. Включите его в настройках вашего браузера.</noscript>
                </div>
            </div>
            <div class="wrap-contact100">
                <form class="contact100-form validate-form">
        				<span class="contact100-form-title">
                           {{ trans('main.write_to_us') }}
        				</span>

                    <div class="wrap-input100 validate-input" data-validate="Name is required">
                        <input class="input100" id="name" type="text" name="name" placeholder="{{ trans('main.name') }}">
                        <label class="label-input100" for="name">
                            <span class="lnr lnr-user"></span>
                        </label>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                        <input class="input100" id="email" type="text" name="email" placeholder="Email">
                        <label class="label-input100" for="email">
                            <span class="lnr lnr-envelope"></span>
                        </label>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Message is required">
                        <textarea class="input100" name="message" placeholder="{{ trans('main.your_message') }}"></textarea>
                    </div>
                    <div class="container-contact100-form-btn">
                        <div class="wrap-contact100-form-btn">
                            <div class="contact100-form-bgbtn"></div>
                            <button class="contact100-form-btn">
                                {{ trans('main.to_send') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{--@endsection--}}
