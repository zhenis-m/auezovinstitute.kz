<!-- @extends('layouts.app') -->

@section('content')
    <div class="culrure__wrap">
        <div class="news_page__way">
            <a href="{{ URL::to('/') }}">{{ trans('content.main') }}</a>&nbsp;/
            <a href="{{ URL::to('structure/administration') }}">{{ trans('content.admins') }}</a>&nbsp;/
            {{ $director->title }}
        </div>
        <div>
            <div class="director__wrap">
                <div class="director">
                    <div class="director__admin">
                        <div class="director__admin__photo">
                            <img src="{{ $director ? asset('uploads/' . $director->image_show) : ""}}" alt="">
                        </div>
                        <div class="director__admin__text">
                            <h1>{{ $director->title }}</h1>
                            <p class="aphtor">{!! $director->description_short !!}</p>
                            <div class="director__content">
                                <div class="text_review">
                                    <p class="desc">{!!  $director->description !!}</p>
                                </div>
                            </div>
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
