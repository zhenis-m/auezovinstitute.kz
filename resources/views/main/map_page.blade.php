@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="css/map.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

<div class="wrap__map_page">
    <div class="wrap__contacts">
        <div class="container__contacts">
            <div class="tittle">
                <div class="iconstyle">
                    <span class="contact100-form-title" id="maptitle"><i class="fas fa-map-marked-alt"></i>&nbsp;<p>{{ trans('main.contacts') }}</p></span>
                    {{--            <div class="line"></div>--}}
                </div>
                <div class="container-contact100">
                    <div class="map">
                        <div>
                            <div class="info">
                                <div>
                                    <ul>
                                        <li><p><i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;Адрес:</p></li>
                                        <li><p>050010, г.Алматы, ул. Курмангазы, 29, 2 этаж.</p></li>
                                    </ul>
                                </div>
                                <div>
                                    <ul>
                                        <li><p><i class="fas fa-phone"></i>&nbsp;Контактный телефон:</p></li>
                                        <li><p>(727) 272 74 11</p></li>
                                    </ul>
                                </div>
                                <div>
                                    <ul>
                                        <li><p><i class="fas fa-envelope-open"></i>&nbsp;e-mail:</p></li>
                                        <li><p>info@litart.kz</p></li>
                                    </ul>
                                </div>
                            </div>
                            <a class="dg-widget-link" href="http://2gis.kz/almaty/firm/9429940000795835/center/76.952369,43.245279/zoom/16?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">Посмотреть на карте Алматы</a><div class="dg-widget-link"><a href="http://2gis.kz/almaty/firm/9429940000795835/photos/9429940000795835/center/76.952369,43.245279/zoom/17?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=photos">Фотографии компании</a></div><div class="dg-widget-link"><a href="http://2gis.kz/almaty/center/76.952369,43.245279/zoom/16/routeTab/rsType/bus/to/76.952369,43.245279╎Институт литературы и искусства им. М.О. Ауэзова?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=route">Найти проезд до Институт литературы и искусства им. М.О. Ауэзова</a></div><script charset="utf-8" >!function(){function o(o){var t=document.getElementById(o);t&&(t.style.display="none")}function t(o,t){return("https:"===window.location.protocol?"https:":"http:")+"//widgets.2gis.com/widget?type="+o+"&options="+encodeURIComponent(JSON.stringify(t))}function i(o){return o.src?'<iframe frameborder="no" style="border: '+(o.borderColor?"1px solid "+o.borderColor:"none")+'; box-sizing: border-box;" width="'+o.width+'" height="'+o.height+'" src="'+o.src+'"></iframe>':""}window.DG=window.DG||{},DG.Widget=DG.Widget||{},DG.Widget.Components=DG.Widget.Components||{},window.DGWidgetLoader=function(e){(function(o){for(var t=document.querySelectorAll("."+o),i=0;i<t.length;i++)t[i].style.display="none"})("dg-widget-link"),o("firmsonmap_biglink"),o("firmsonmap_biglink_photo"),o("firmsonmap_biglink_route"),(e=e||{}).org=e.org||[],e.pos=e.pos||{},e.opt=e.opt||{};var n=e.width||900;"%"!=(n=n.toString()).slice(-1)&&(n=parseInt(n,10),n=Math.min(1200,n),n=Math.max(500,n));var r=e.height||600;"%"!=(r=r.toString()).slice(-1)&&(r=parseInt(r,10),r=Math.min(1e3,r),r=Math.max(300,r));for(var d=e.borderColor||"#a3a3a3",s="",g=0;g<e.org.length;g++)e.org[g].id&&(s+=e.org[g].id+",");s=s.slice(0,-1);var a={pos:e.pos,opt:e.opt,org:s};document.write(i({width:n,height:r,borderColor:d,src:t("firmsonmap",a)}))},DG.Widget.Components.Loader=function(e){o("2gis_mini_biglink");var n,r,d=e.resize;d?(n=d.w?parseInt(d.w,10):700,r=d.h?parseInt(d.h,10):400):(n=700,r=400),document.write(i({width:n,height:r,src:t("mini",e)}))}}();</script><script charset="utf-8">new DGWidgetLoader({"width":1200,"height":150,"borderColor":"#a3a3a3","pos":{"lat":43.245279,"lon":76.952369,"zoom":16},"opt":{"city":"almaty"},"org":[{"id":"9429940000795835"}]});</script><noscript style="color:#c00;font-size:16px;font-weight:bold;">Виджет карты использует JavaScript. Включите его в настройках вашего браузера.</noscript>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wrap__message">
        <div class="container__contacts">
            <div class="tittle">
                <div class="iconstyle">
                    <span class="contact100-form-title" id="maptitle"><i class="fab fa-telegram-plane"></i>&nbsp;<p>{{ trans('main.write_to_us') }}</p></span>
                    {{--            <div class="line2"></div>--}}
                </div>
                @include('contact-us')
            </div>
        </div>
    </div>
</div>

@endsection
