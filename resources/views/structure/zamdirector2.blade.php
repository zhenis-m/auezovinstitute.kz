@extends('layouts.app')

@section('content')
{{--<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">--}}
{{--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">--}}
{{--<link rel="stylesheet" href="css/director.css"--}}
{{--<script src="http://code.jquery.com/jquery-latest.min.js"></script>--}}
<div class="director__way">
    <a href="{{ URL::to('/') }}">Главная</a>&nbsp;/
    <a href="{{ URL::to('/structure/administration') }}">Административно-управленческий аппарат</a>&nbsp;/
    <a href="{{ URL::to('/structure/zamdirector2') }}">Султан Ертай</a>
</div>
<div>
    <div class="container_1">
        <div class="director">
            <div>
                <div class="director__admin">
                    <div class="director__admin__photo">
                        <img src="../css/img/admins/ZamDir2.jpg" alt="альтернативный текст">
                    </div>
                    <div class="director__admin__text">
                        <h3>Султан Ертай</h3>
                        <p>Ученый секретарь</p>
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
                        <p class="desc">Султан Ертай – ученый секретарь Института литературы и искусства имени М.О.Ауэзова, PhD доктор.</p>


                        <p class="desc">В 2011 году окончил Казахский Национальный университет им. аль-Фараби по специальности «Филология: казахский язык». В 2011-2013 гг. учился в магистратуре Казахского национального университета имени аль-Фараби по специальности «Филология: литература». В 2014-2017 гг. учился в докторантуре в рамках совместной образовательной программы «Интеграция науки и образования» Института литературы и искусства имени М.О.Ауэзова и КазНУ им. аль-Фараби по специальности «6D021400 – Литературоведение».</p>

                        <p class="desc">Прошел стажировки в Колумбийском Университете и ООН, Нью-Йорк, США (15.01.2012 – 29.02.2012) по программе Master’s in Development Practice Global Classroom, а также в университете Кадис, г. Кадис, Испания (20.09.2012 – 29.02.2013) по программе академической мобильности КазНУ им. аль-Фараби.</p>
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