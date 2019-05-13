@extends('layouts.app')

@section('content')
<div>
<div class="history__way">
    <a href="{{ URL::to('/') }}">Главная</a>&nbsp;/&nbsp;
    <a href="{{ URL::to('/main/mass_media') }}">СМИ о нас</a>
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
            <h1 style="margin-top:15px; font-size: 3em;">СМИ о нас</h1>
            <img src="../../images/banner33.png" alt="альтернативный текст">
            <div class="new__state__date">
                <i class="far fa-calendar-alt"></i><p>&nbsp;&nbsp;12.02.2019&nbsp;&nbsp;&nbsp;&nbsp;</p><i class="far fa-eye"></i><p>&nbsp;&nbsp;1222</p>
            </div>
            <div class="history_content">

                <div class="text_review">
                    <p class="desc">Серікқызы Э. Елорда – ұлттың рухани жаңғыру астанасы //
                        <a href="https://egemen.kz/article/171372-elorda-ulttynh-rukhani-zhanhghyru-astanasy"  target="_blank">
                            https://egemen.kz</a></p>


                    <p class="desc">ШҚМУ-да «Абай дәрісханасы» ашылды //
                        <a href="https://www.vkgu.kz/ru/node/6307"  target="_blank">
                            https://www.vkgu.kz</a></p>


                    <p class="desc">Зәки Ахметовке арналған халықаралық ғылыми-тәжірибелік конференция өтті //
                        <a href="https://www.vkgu.kz/kk/newsitem/zki-ahmetovke-arnalgan-halykaralyk-gylymi-tzhiribelik-konferenciya-otti.html"  target="_blank">
                            https://www.vkgu.kz</a></p>


                    <p class="desc">Ғылыми мұра және ұлттық құндылықтар //
                        <a href="http://oskementv.kz/kz/news/society/gylymi-mura-zhene-ulttyk-kundylyktar#"  target="_blank">
                            http://oskementv.kz</a></p>


                    <p class="desc">Өскеменде «ALTAI JASTARY» студенттер теле-радио кешені ашылды //
                        <a href="https://egemen.kz/article/168975-oeskemende-altai-jastary-studentter-tele-radio-kesheni-ashyldy"  target="_blank">
                            https://egemen.kz</a></p>

                    <p class="desc">Круглый стол «Жаңа әлемде жаңғырған Қазақстан» //
                        <a href="http://vecher.kz/allnews/tu-an-zher/kruglyj-stol-zha-a-lemde-zha-yr-an-aza-stan"  target="_blank">
                            http://vecher.kz</a></p>

                    <p class="desc">Манбетеев У. ​В назидание потомкам //
                        <a href="http://www.kazpravda.kz/news/ruhani-zhangiru/v-nazidanie-potomkam1/"  target="_blank">
                            http://www.kazpravda.kz</a></p>

                    <p class="desc">Ахметова А. Институттың жаңа жүйедегі жетістігі //
                        <a href="https://www.qazaquni.kz/2018/02/28/82118.html"  target="_blank">
                            https://www.qazaquni.kz</a></p>

                    <p class="desc">Бекзат Г. Қайсын ақын құрметтелді //
                        <a href="https://aikyn.kz/2018/03/13/45755.html"  target="_blank">
                            https://aikyn.kz</a></p>

                    <p class="desc">Ахметова А. Ғалымдар «Ақылды қалалар – ақылды ұлт үшін» концепциясын қолдады //
                        <a href="http://almaty-akshamy.kz/2018/01/23/%d2%93%d0%b0%d0%bb%d1%8b%d0%bc%d0%b4%d0%b0%d1%80-%d0%b0%d2%9b%d1%8b%d0%bb%d0%b4%d1%8b-%d2%9b%d0%b0%d0%bb%d0%b0%d0%bb%d0%b0%d1%80-%d0%b0%d2%9b%d1%8b%d0%bb%d0%b4%d1%8b-%d2%b1%d0%bb%d1%82/"  target="_blank">
                            http://almaty-akshamy.kz</a></p>

                    <p class="desc">Каштелюк Ю. Лирик и гражданин //
                        <a href="http://vecher.kz/incity/lirik-i-grazhdanin"  target="_blank">
                            http://vecher.kz</a></p>

                    <p class="desc">Юбилей в отечественной музыкальной науке: к юбилею музыковеда-ученого С.А.Кузембай //
                        <a href="http://musicnews.kz/yubilej-s-kuzembaj/"  target="_blank">
                            http://musicnews.kz</a></p>

                    <p class="desc">Пляскина Н. Собрание сочинителей //
                        <a href="http://www.time.kz/articles/grim/2017/06/12/sobranie-sochinitelej"  target="_blank">
                            http://www.time.kz</a></p>

                    <p class="desc">Казахская литература: что стоило бы перевести на другие языки? //
                        <a href="https://camonitor.kz/27026-kazahskaya-literatura-chto-stoilo-by-perevesti-na-drugie-yazyki.html"  target="_blank">
                            https://camonitor.kz</a></p>

                    <p class="desc">Уйғур әдәбиятини дунияға тонутуш үчүн немә қилишимиз керәк //
                        <a href="http://uyguravazi.kazgazeta.kz/?p=29880"  target="_blank">
                            http://uyguravazi.kazgazeta.kz</a></p>

                    <p class="desc">Ананьева С. Путь друг к другу // Казправда. 13.04.2017. - С. 14. //
                        <a href="http://www.kazpravda.kz/fresh/view/put-drug-k-drugu/"  target="_blank">
                            http://www.kazpravda.kz</a></p>

                    <p class="desc">Ананьева С. Гордость отечественной науки // Казправда. 24.03.2017. - С. 8. //
                        <a href="http://www.kazpravda.kz/fresh/view/gordost-otechestvennoi-nauki/"  target="_blank">
                            http://www.kazpravda.kz</a></p>

                    <p class="desc">Ананьева С. «Унікальная магчымасць для сустрэч» // Літаратура і мастацтва. No 5. 3 лютага 2017. - С. 7. //
                        <a href="http://zviazda.by/sites/default/files/5-2017_1.pdf"  target="_blank">
                            http://zviazda.by</a></p>

                    <p class="desc">Ананьева С. Основатель нового исторического романа // Союз - Евразия. 27.03.2017 //
                        <a href="http://zviazda.by/ru/news/20170327/1490625134-osnovatel-novogo-istoricheskogo-romana"  target="_blank">
                            http://zviazda.by</a></p>

                    <p class="desc">Литераторы из 14 стран обсудили насущное на «круглом столе» в Минске //
                        <a href="http://sozvuchie.by/news/2016-09-07-2"  target="_blank">
                            http://sozvuchie.by</a></p>

                    <p class="desc">Философия в литературе – литература в философии //
                        <a href="http://bmtv.kz/ru/teleproekty/iskustvo/uchenyj-sovet/item/20096-uchenyj-sovet-10-07-16"  target="_blank">
                            http://bmtv.kz</a></p>

                    <p class="desc">К 150-летию Алихана Букейханова // Мысль. № 4. 2016 г. – С.58. //
                        <a href="http://mysl.kazgazeta.kz/?p=7246#more-7246"  target="_blank">
                            http://mysl.kazgazeta.kz</a></p>

                    <p class="desc">Қазақ әдәбиятиниң антологияси АҚШта тонуштурулди // Уйғур Авази. 07.04.2016. – С. 6. //
                        <a href="http://uyguravazi.kazgazeta.kz/wp-content/uploads/2016/04/2016-14.pdf"  target="_blank">
                            http://uyguravazi.kazgazeta.kz</a></p>

                    <p class="desc">Молодая казахская литература создает новую реальность //
                        <a href="http://zviazda.by/be/news/20160222/1456154713-molodaya-kazahskaya-literatura-sozdaet-novuyu-realnost"  target="_blank">
                            http://zviazda.by</a></p>

                    <p class="desc">«Звязда» прэзентавала інтэрнэт-праект «Сугучча» //
                        <a href="http://zviazda.by/be/news/20160211/1455217300-mastackae-slova-u-elektronnym-ablichchy"  target="_blank">
                            http://zviazda.by</a></p>

                    <p class="desc">Распачаў работу семінар маладых літаратараў Беларусі і Расіі //
                        <a href="http://zviazda.by/be/news/20160209/1455043116-raspachau-rabotu-seminar-maladyh-litaratarau-belarusi-i-rasii"  target="_blank">
                            http://zviazda.by</a></p>

                    <p class="desc">Литературное и художественное наследие немецких писателей и художников //
                        <a href="http://deutsche-allgemeine-zeitung.de/ru/content/view/2872/1/"  target="_blank">
                            http://deutsche-allgemeine-zeitung.de</a></p>

                    <p class="desc">О созвучии и духовном родстве //
                        <a href="http://www.kazpravda.kz/fresh/view/o-sozvuchii-i-duhovnom-rodstve/"  target="_blank">
                            http://www.kazpravda.kz</a></p>

                    <p class="desc">Певец Великой степи //
                        <a href="http://www.kazpravda.kz/articles/view/pevets-velikoi-stepi/"  target="_blank">
                            http://www.kazpravda.kz</a></p>

                    <p class="desc">Жүз жыл жырлаған жыр алыбы – Жамбыл ақын //
                        <a href="http://today.kz/kz/news/mdeniet/2016-02-28/710982-zhz-zhyil-zhyirlaan-zhyir-alyibyi---zhambyil-ayin/"  target="_blank">
                            http://today.kz</a></p>

                    <p class="desc">Госсекретарь приняла участие в симпозиуме к 170-летию Жамбыла //
                        <a href="http://www.kazpravda.kz/rubric/kultura/gossekretar-prinyala-uchastie-v-simpoziume-k-170-letiu-zhambila/"  target="_blank">
                            http://www.kazpravda.kz</a></p>

                    <p class="desc">Г.Абдыкаликова: Поэзия Жамбыла созвучна с общенациональной патриотической идеей «Мәңгілік Ел» //
                        <a href="http://ortcom.kz/ru/news/gabdikalikova-poeziya-jambila-sozvuchna-s-obtshenatsionalnoio-patrioticheskoio-ideeio-mengilik-el.8635"  target="_blank">
                            http://ortcom.kz</a></p>

                    <p class="desc">Творчество Жамбыла Жабаева остается актуальным по сей день – Г.Абдыкаликова //
                        <a href="http://bnews.kz/ru/news/tvorchestvo_zhambila_zhabaeva_ostaetsya_aktualnim_po_sei_den__gabdikalikova-2016_02_24-1258893"  target="_blank">
                            http://bnews.kz</a></p>

                    <p class="desc">Основные мысли произведений Жамбыла созвучны с «Мәңгілік Ел» - Г. Абдыкаликова //
                        <a href="http://www.inform.kz/rus/article/2874214"  target="_blank">
                            http://www.inform.kz</a></p>

                    <p class="desc">Поэт в степи больше, чем Степь //
                        <a href="http://express-k.kz/news/?ELEMENT_ID=67909"  target="_blank">
                            http://express-k.kz</a></p>

                    <p class="desc">В Алматы возложили цветы к памятнику Жамбылу //
                        <a href="http://inform.kz/rus/article/2874196"  target="_blank">
                            http://inform.kz</a></p>

                    <p class="desc">В Алматы почтили память Жамбыла Жабаева //
                        <a href="http://24.kz/ru/news/culture/item/107834-v-almaty-pochtili-pamyat-zhambyla-zhabaeva"  target="_blank">
                            http://24.kz</a></p>

                    <p class="desc">Память Жамбыла Жабаева почтили в Алматы //
                        <a href="http://khabar.kz/ru/news/obshchestvo/item/48182-pamyat-zhambyla-zhabaeva-pochtili-v-almaty"  target="_blank">
                            http://khabar.kz</a></p>

                    <p class="desc">В Алматы отмечают 170-летие Жамбыла Жабаева //
                        <a href="http://vecher.kz/incity/novosti-almaty-21"  target="_blank">
                            http://vecher.kz</a></p>

                    <p class="desc">«Жамбыл – менің жай атым, Халық – менің шын атым» //
                        <a href="http://kazgazeta.kz/?p=42223"  target="_blank">
                            http://kazgazeta.kz</a></p>

                    <p class="desc">Ұлы дала жыршысы //
                        <a href="http://almaty-akshamy.kz/2016/02/24/%D2%B1%D0%BB%D1%8B-%D0%B4%D0%B0%D0%BB%D0%B0-%D0%B6%D1%8B%D1%80%D1%88%D1%8B%D1%81%D1%8B/"  target="_blank">
                            http://almaty-akshamy.kz</a></p>

                    <p class="desc">Жыр алыбының туғанына 170 жыл //
                        <a href="http://www.31.kz/video/show/id/11831/show/ib"  target="_blank">
                            http://www.31.kz</a></p>

                    <p class="desc">Ұлы Дала жыршысы //
                        <a href="http://egemen.kz/2016/02/25/26111"  target="_blank">
                            http://egemen.kz</a></p>

                    <p class="desc">Жамбыл шығармашылығы Елбасының Мəңгілік Ел патриоттық идеясымен үндес - Г.Əбдіхалықова //
                        <a href="http://www.kazinform.kz/kaz/article/2874217"  target="_blank">
                            http://www.kazinform.kz</a></p>

                    <p class="desc">Жамбыл Жабаевтың 170 жылдығына орай Ұлттық арна жаңа жобаның тұсауын кесті //
                        <a href="http://kaznews.kaztrk.kz/apta-kz/print:page,1,5760-zhambyl-zhabaevtyn-170-zhyldygyna-oray-ulttyk-arna-zhana-zhobanyn-tusauyn-kesti.html"  target="_blank">
                            http://kaznews.kaztrk.kz</a></p>

                    <p class="desc">Издатели из 29 стран приняли участие в международной книжной выставке в Минске //
                        <a href="http://www.24.kz/ru/news/in-the-world/item/105923-izdateli-iz-29-stran-prinyali-uchastie-v-mezhdunarodnoj-knizhnoj-vystavke-v-minske"  target="_blank">
                            http://www.24.kz</a></p>

                    <p class="desc">Экспертный совет АНК поддерживает решение о проведении внеочередных выборов // Вечерний Алматы. 23 января 2016 г.  №  8-9. - С.3.  //
                        <a href="http://vecher.kz/incity/novosti-almaty-8"  target="_blank">
                            http://vecher.kz</a></p>

                    <p class="desc">В ГОД ЛИТЕРАТУРЫ АСТРАХАНЬ ОБЪЕДИНИЛА ПИСАТЕЛЕЙ СТРАН ПРИКАСПИЯ //
                        <a href="https://www.facebook.com/361339317390244/videos/376284705895705/?type=1&theater"  target="_blank">
                            https://www.facebook.com</a></p>

                    <p class="desc">В Астане представили 10-томную монографию к году АНК //
                        <a href="https://www.youtube.com/watch?v=JJoAtLR35sw"  target="_blank">
                            https://www.youtube.com</a></p>

                    <p class="desc">Мәскеуде Қазақстан және Ресей қаламгерлерінің екінші кездесуі өтті //
                        <a href="http://egemen.kz/2015/10/29/4413"  target="_blank">
                            http://egemen.kz</a></p>

                    <p class="desc">В Алматы состоялась премьера фильма о Морисе Симашко  //
                        <a href="http://eajc.org/page16/news53414.html"  target="_blank">
                            http://eajc.org</a></p>

                    <p class="desc">Сұңқардай саңқылдаған ер Сүйінбай //
                        <a href="http://kazgazeta.kz/?p=37328"  target="_blank">
                            http://kazgazeta.kz</a></p>

                    <p class="desc">Американы тамсандырған қазақ әдебиеті //
                        <a href="http://kazgazeta.kz/?p=38605"  target="_blank">
                            http://kazgazeta.kz</a></p>

                    <p class="desc">Индустрияның ақпараттық ғасырға ауысуының салқыны (Р.Абазовпен сұхбат) // Қазақ әдебиеті. 06.11.2015.
                        <a href="http://qazaqadebieti.kz/2522/industriyany-a-paratty-asyr-a-auysuyny-sal-yny"  target="_blank">
                            http://qazaqadebieti.kz</a></p>

                    <p class="desc">АҚШ-та да қазақ әдебиетін құмарта оқитындар көп //
                        <a href="http://massaget.kz/layfstayl/debiet/proza/35231/"  target="_blank">
                            http://massaget.kz</a></p>

                    <p class="desc">АҚШ-та қазақ әдебиетінің антологиясы таныстырылды //
                        <a href="https://kaz.caravan.kz/art/aqshta-qazaq-adebietining-antologiyasy-tanystyryldy-157008/"  target="_blank">
                            https://kaz.caravan.kz</a></p>

                    <p class="desc">АҚШ-та қазақ әдебиетінің антологиясы таныстырылды //
                        <a href="http://bnews.kz/kz/news/obshchestvo/akshta_kazak_adebietinin_antologiyasi_tanistirildi-2013_06_14-1047941"  target="_blank">
                            http://bnews.kz</a></p>

                    <p class="desc">Қазақ әдебиеті антологиясы ағылшын тілінде сөйледі //
                        <a href="https://i-news.kz/news/2013/06/13/7049418-kazak_adebieti_antologiyasy_agylshyn_til.html"  target="_blank">
                            https://i-news.kz</a></p>

                    <p class="desc">Түркі дүниесі әдебиет институттары ғылыми ынтымақтастық жөнінде уағдаласты //
                        <a href="http://twesco.org/news/t_rk_elder_n_debiet_instituttary_ylymi_yntyma_tasty_zh_n_nde_ua_dalasty/"  target="_blank">
                            http://twesco.org</a></p>

                    <p class="desc">Қазақ хандығынан – «Мәңгілік елге» //
                        <a href="http://kazgazeta.kz/?p=31438"  target="_blank">
                            http://kazgazeta.kz</a></p>

                    <p class="desc">Қазақ хандығынан – «Мәңгілік елге» //
                        <a href="http://e-history.kz/kz/publications/view/1204"  target="_blank">
                            http://e-history.kz</a></p>

                    <p class="desc">Тарихтағы сабақтастық сараланды //
                        <a href="http://egemen.kz/2015/?p=65815"  target="_blank">
                            http://egemen.kz</a></p>

                    <p class="desc">Ұлттың үлгілі ұлықтары бірлікке ұйып, бітімге келген //
                        <a href="http://egemen.kz/2015/?p=66152"  target="_blank">
                            http://egemen.kz</a></p>

                    <p class="desc">«Қазақ хандығынан – «Мәңгілік Елге» атты халықаралық ғылыми-тәжірибелік конференция өтті //
                        <a href="http://www.enu.kz/info/zhanalyktar/37074/"  target="_blank">
                            http://www.enu.kz</a></p>

                    <p class="desc">Астанада түркі әдебиет институттарының басшылары бас қосты //
                        <a href="http://m.inform.kz/kz/article/2825154"  target="_blank">
                            http://m.inform.kz</a></p>

                    <p class="desc">Госсекретарь РК посетила мемориальный дом-музей Мухтара Ауэзова //
                        <a href="http://www.kazpravda.kz/rubric/kultura/gossekretar-rk-posetila-memorialnii-dom-muzei-muhtara-auezova/"  target="_blank">
                            http://www.kazpravda.kz</a></p>

                    <p class="desc">Госсекретарь РК ознакомилась с деятельностью Института литературы и искусства им. М.Ауэзова //
                        <a href="http://bnews.kz/ru/news/2050_strategy/almati/politika/novosti_ak_ordi/gossekretar_rk_oznakomilas_s_deyatelnostu_instituta_literaturi_i_iskusstva_im_mauezova-2015_02_14-1139339"  target="_blank">
                            http://bnews.kz/a></p>

                    <p class="desc">Уәлихан ҚАЛИЖАНОВ: Рухы мықты мемлекеттің болашағы кемел //
                        <a href="http://www.qazaquni.kz/?p=31812"  target="_blank">
                            http://www.qazaquni.kz</a></p>

                    <p class="desc">Алматада «мустәқил қазақистандики уйғур әдәбийати» намлиқ китаб йоруқ көрди //
                        <a href="http://www.rfa.org/uyghur/xewerler/medeniyet-tarix/almata-uyghur-edebiyati-11202015221517.html/story_main?encoding=cyrillic"  target="_blank">
                            http://www.rfa.org</a></p>

                    <p class="desc">Литература Казахстана и современность (Интервью директора Института литературы и искусства им. М.О.Ауэзова) //
                        <a href="http://mysl.kz/?p=219"  target="_blank">
                            http://mysl.kz</a></p>

                    <p class="desc">Международный литературный  форум «Мухтар Ауэзов – взгляд в новое тысячелетие»  //
                        <a href="http://www.nlrk.kz/page.php?lang=1&news_id=1687&page_id=23"  target="_blank">
                            http://www.nlrk.kz</a></p>

                    <p class="desc">Мемориальный Дом-музей М.О. Ауэзова – лауреат Международной премии имени Ч.Айтматова  (ICAA – International Chingiz Aitmatov Award) //
                        <a href="http://www.kazakhartsacademy.org/"  target="_blank">
                            http://www.kazakhartsacademy.org/</a></p>

                    <p class="desc">Степная страстность и немецкая рассудительность //
                        <a href="http://www.kazpravda.kz/articles/view/stepnaya-strastnost-inemetskaya-rassuditelnost/"  target="_blank">
                            http://www.kazpravda.kz</a></p>

                    <p class="desc">Казахстанцы – лауреаты Международной премии им. Ч. Айтматова //
                        <a href="http://www.m.kazpravda.kz/news/kultura/kazahstantsi--laureati-mezhdunarodnoi-premii-im-ch-aitmatova/"  target="_blank">
                            http://www.m.kazpravda.kz</a></p>

                    <p class="desc">Презентация книги // Қазақ университеті. № 5 (1516). 11 февраль 2014 г. 8 стр.
                        <a href="http://litart.academset.kz/?q=ru/node/591"  target="_blank">
                            http://litart.academset.kz</a></p>

                    <p class="desc">Шетел қазақтарының әдебиеті мен өнері //
                        <a href="http://www.qazaq-alemi.kz/more?page_id=14&id=57"  target="_blank">
                            http://www.qazaq-alemi.kz</a></p>

                    <p class="desc">«Время собирать камни…», или Национальное достояние народа  //
                        <a href="http://www.m.kazpravda.kz/news/view/11969/"  target="_blank">
                            http://www.m.kazpravda.kz</a></p>

                    <p class="desc">Калкаман и Мамыр заговорили по-русски //
                        <a href="http://www.kazpravda.kz/rubric/kultura/kalkaman-i-mamir-zagovorili-po-russki"  target="_blank">
                            http://www.kazpravda.kz</a></p>

                    <p class="desc">Уйгурская литература независимого Казахстана //
                        <a href="http://www.inayat.kz/index.php?option=com_content&view=article&id=132:2014-02-25-07-17-33&catid=38:2013-10-01-03-20-20&Itemid=57"  target="_blank">
                            http://www.inayat.kz</a></p>

                    <p class="desc">Достойная в семье литератур // Казахстанская правда. 12.03.2014. //
                        <a href="http://www.kazpravda.kz/pdf/11032014231237.pdf"  target="_blank">
                            http://www.kazpravda.kz</a></p>

                    <p class="desc">Одухотворенное слово Мориса Симашко //
                        <a href="http://camonitor.com/archives/11282"  target="_blank">
                            http://camonitor.com</a></p>

                    <p class="desc">Раздвигая пространство и время //
                        <a href="http://camonitor.com/11272-.html"  target="_blank">
                            http://camonitor.com</a></p>

                    <p class="desc">Мир прозы Мориса  Симашко //
                        <a href="http://camonitor.com/archives/11272"  target="_blank">
                            http://camonitor.com</a></p>

                    <p class="desc">Древняя быль о трагичной любви // Рудный Алтай, 20.03.2014 //
                        <a href="http://rudnyi-altai.kz/3566-drevnyaya-byl-o-tragichnoy-lyubvi.html"  target="_blank">
                            http://rudnyi-altai.kz</a></p>

                    <p class="desc">Книга о писателе //
                        <a href="http://www.kazpravda.kz/rubric/kultura/kniga-o-pisatele/"  target="_blank">
                            http://www.kazpravda.kz</a></p>

                    <p class="desc">Морис Симашко: история учить жить //
                        <a href="http://vecher.kz/node/28272"  target="_blank">
                            http://vecher.kz</a></p>

                    <p class="desc">Дань наследию // Вечерний Алматы, 26.02.2014 //
                        <a href="http://95.56.234.45/node/27833"  target="_blank">
                            http://95.56.234.45</a></p>

                    <p class="desc">Памяти Мориса Симашко.  28.03.2014 //
                        <a href="http://deutsche-allgemeine-zeitung.de/ru/content/view/2311/1/"  target="_blank">
                            http://deutsche-allgemeine-zeitung.de</a></p>

                    <p class="desc">Мустәқил Қазақстандики уйғур әдәбияти //
                        <a href="http://uyguravazi.kz/?p=12091#more-12091"  target="_blank">
                            http://uyguravazi.kz</a></p>

                    <p class="desc">Круглый стол в библиотеке им. М.Симашко . 04.04.2014 //
                        <a href="http://deutsche-allgemeine-zeitung.de/ru/content/view/2316/1/"  target="_blank">
                            http://deutsche-allgemeine-zeitung.de</a></p>

                    <p class="desc">Куратовские встречи. 20.05.2014 //
                        <a href="http://www.kazpravda.kz/ida.php?ida=56460"  target="_blank">
                            http://www.kazpravda.kz</a></p>

                    <p class="desc">Система образования и науки выходит на новый уровень //
                        <a href="http://www.khabar.kz/ru/novosti/obshchestvo/2251-sistema-obrazovaniya-i-nauki-vykhodit-na-novyj-uroven?month=7&year=2014"  target="_blank">
                            http://www.khabar.kz</a></p>

                    <p class="desc">Моих степей полынная звезд. 07.07.2014 //
                        <a href="http://www.kazpravda.kz/articles/view/21653"  target="_blank">
                            http://www.kazpravda.kz</a></p>

                    <p class="desc">Казахстанская составляющая в мировом литературном процессе  // Казахстанская правда. 29.08.2014. - С. 21. //
                        <a href="http://www.kazpravda.kz/media/upload/28/2014/08/29/28e8b3d12d342bea6ff2c5e87b318a28.pdf"  target="_blank">
                            http://www.kazpravda.kz</a></p>

                    <p class="desc">Новые образовательные программы //
                        <a href="http://www.khabar.kz/ru/novosti/obshchestvo/5262-v-rk-prezentovany-novye-eksperimentalnye-programmy-magistratury-i-doktorantury"  target="_blank">
                            http://www.khabar.kz</a></p>

                    <p class="desc">"Бабалар сөзі" - наследие нации // Казахстанская правда. 18.11.2014. - С. 12. //
                        <a href="http://www.kazpravda.kz/media/upload/28/2014/11/18/4014dded23132bccdf12d21730a2d07f.pdf"  target="_blank">
                            http://www.kazpravda.kz</a></p>

                    <p class="desc">Возвращенные имена // Казахстанская правда. 16. 12.2014. - С. 16.
                        <a href="http://www.kazpravda.kz/media/upload/28/2014/12/16/5b6b5127b2dfe18114bb74710e4464e9.pdf"  target="_blank">
                            http://www.kazpravda.kz</a></p>

                    <p class="desc">Вспоминая Пушкина //
                        <a href="http://kazpravda.softdeco.net"  target="_blank">
                        </a></p>

                    <p class="desc">Казахстанская Пушкиниана //
                        <a href="http://kaz.rs.gov.ru/node/1820"  target="_blank">
                            http://kaz.rs.gov.ru</a></p>

                    <p class="desc">Пушкин - любимец всей планеты // Вечерний Алматы. 23.02.2013 //
                        <a href="http://95.56.234.45/node/19332"  target="_blank">
                            http://95.56.234.45</a></p>

                    <p class="desc">А.Негина. Наша книга - лауреат! //
                        <a href="http://kazpravda.softdeco.net/c/1362094454"  target="_blank">
                            http://kazpravda.softdeco.net</a></p>

                    <p class="desc">Три страны в его судьбе //
                        <a href="http://www.kazpravda.kz/archives/view/54894"  target="_blank">
                            http://www.kazpravda.kz</a></p>

                    <p class="desc">150-летие В.И.Вернадского в Алма-Ате //
                        <a href="http://kaz.rs.gov.ru/node/2025"  target="_blank">
                            http://kaz.rs.gov.ru</a></p>

                    <p class="desc">Учёный широкого профиля  // Вечерний Алматы. 30.04.2013  //
                        <a href="http://95.56.234.45/node/20781"  target="_blank">
                            http://95.56.234.45</a></p>

                    <p class="desc">По итогам конкурса «Научная книга - 2012» // Deutsche Allgemeine Zeitung. – 2013. – 05 апреля. – С. 7-8. //
                        <a href="http://deutsche-allgemeine-zeitung.de/ru/content/view/2032/68"  target="_blank">
                            http://deutsche-allgemeine-zeitung.de</a></p>

                    <p class="desc">Интервью А.Ахетова в Оренбурге //
                        <a href="http://litart.academset.kz/?q=ru/node/414"  target="_blank">
                            http://litart.academset.kz</a></p>

                    <p class="desc">Центр Азиатской культуры //
                        <a href="http://litart.academset.kz/?q=ru/node/454"  target="_blank">
                            http://litart.academset.kz</a></p>

                    <p class="desc">Фонд Мухтара Ауэзова. 28.09.2012. В Институте литературы и искусства имени М.О.Ауэзова прошла X Международная научно-практическая конференция "Ауэзовские чтения" //
                        <a href="http://auezov.kz/node/777"  target="_blank">
                            http://auezov.kz</a></p>
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
            review = review.substring(0, 4400);
            jQuery(this).html( review + '<div class="read_more"><p>показать больше</p></div>' );
        }
        jQuery(this).append('<br><div class="full_text" style="display: none;">' + review_full + '</div>');
    });
    jQuery(".read_more").click(function(){
        jQuery(this).parent().html( jQuery(this).parent().find(".full_text").html() );
    });
</script>
@endsection
