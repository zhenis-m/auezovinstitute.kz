
@extends('layouts.app')

@section('content')
{{--<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">--}}
{{--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">--}}
{{--<link rel="stylesheet" href="css/director.css"--}}
{{--<script src="http://code.jquery.com/jquery-latest.min.js"></script>--}}
<div class="director__way">
    <a href="{{ URL::to('/') }}">Главная</a>&nbsp;/
    <a href="{{ URL::to('/structure/administration') }}">Административно-управленческий аппарат</a>&nbsp;/
    <a href="{{ URL::to('/structure/zamdirector') }}">Калиева Альмира</a>
</div>
<div>
    <div class="container_1">
        <div class="director">
            <div>
                <div class="director__admin">
                    <div class="director__admin__photo">
                        <img src="../../images/admins/ZamDir.jpg" alt="альтернативный текст">
                    </div>
                    <div class="director__admin__text">
                        <h3>Калиева Альмира Кайыртаевна</h3>
                        <p>Заместитель директора</p>
                    </div>
                </div>
                <div class="social-networks_admins">
                    <ul>
                        <li> <a href="https://www.google.ru/" target="_blank" class="google"><i class="fa fa-google-plus"></i></a> </li>
                        <li> <a href="https://www.vk.com/" target="_blank" class="vk"><i class="fa fa-vk"></i></a>            </li>
                        <li><a href="https://www.facebook.com/" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a></li>
                        <li>  <a href="https://www.instagram.com/" target="_blank" class="inst"><i class="fa fa-instagram"></i></a> </li>
                    </ul>
                </div>
                <div class="director__content">
                    <div class="text_review">
                        <p class="desc">Калиева Альмира Кайыртаевна – заместитель директора Института литературы и искусства имени М.О.Ауэзова, кандидат филологических наук.</p>


                        <p class="desc">В 2001 году окончила Семипалатинский государственный университет имени Шакерима по специальности «Казахский язык и литература». В 2003-2005 гг. училась в магистратуре Казахского национального университета имени аль-Фараби по специальности «Филология» (специализация – «Теория литературы»). В 2010 году защитила кандидатскую диссертацию на тему «Психологизм в изображении творческой личности» (10.01.08 – теория литературы; текстология) под научным руководством доктора филологических наук, профессора Б.К.Майтанова. Является автором монографии «Көркем әдебиет: шығармашылық тұлға және психологизм» (Алматы, 2012) и более 60 научных статей.</p>

                        <p class="desc">С 2007 года участвует в работе фундаментальных и прикладных научно-исследовательских проектов: «Казахская литературная классика», «Идея независимости в творчестве М.О.Ауэзова», «Творческая биография М.О.Ауэзова», «Парадигма национального и общечеловеческого в литературе эпохи независимости (на материале казахской и других национальных литератур)».</p>

                        <p class="desc">Основное научно-исследовательское направление: поэтика литературы, закономерности развития литературы, современный литературный процесс и ауезоведение.</p>
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