@extends('layouts.app')

@section('content')
    <div class="news_page__way">
        <a href="{{ URL::to('/') }}">{{ trans('content.main') }}</a>&nbsp;/
        {{ $about->title }}
    </div>
<div class="container_1">
    <div class="social_and_banner">
        <div class="social-networks_1">
            <ul>
                <li> <a href="https://www.google.ru/" target="_blank" class="google"><i class="fa fa-google-plus"></i></a> </li>
                <li> <a href="https://www.vk.com/" target="_blank" class="vk"><i class="fa fa-vk"></i></a>            </li>
                <li><a href="https://www.facebook.com/" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a></li>
                <li>  <a href="https://www.instagram.com/" target="_blank" class="inst"><i class="fa fa-instagram"></i></a> </li>
            </ul>
        </div>
        <div>
            <h1 style="margin-top:15px; font-size: 3em;">{{ $about->title }}</h1>
            <img src="{{ $about ? asset('uploads/' . $about->image_show) : ""}}" alt="">
            <div class="new__state__date">
                <i class="far fa-calendar-alt"></i><p>&nbsp;&nbsp;12.02.2019&nbsp;&nbsp;&nbsp;&nbsp;</p>
{{--                <i class="far fa-eye"></i><p>&nbsp;&nbsp;1222</p>--}}
            </div>
            <div class="history_content">

                <div class="text_review">
                    <p class="desc">{!! $about->description !!}</p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script type="text/javascript">
    jQuery(".text_review").each(function(){
        var review_full = jQuery(this).html();
        var review = review_full;
        if( review.length > 500 )
        {
            review = review.substring(0, 1850);
            jQuery(this).html( review + '<div class="read_more"> показать больше </div>' );
        }
        jQuery(this).append('<div class="full_text" style="display: none;">' + review_full + '</div>');
    });
    jQuery(".read_more").click(function(){
        jQuery(this).parent().html( jQuery(this).parent().find(".full_text").html() );
    });
</script>


@endsection

