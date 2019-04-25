{{--<meta charset="utf-8">--}}
{{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
{{--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">--}}
{{--<link rel="stylesheet" href="css/Footer-with-button-logo.css">--}}
<footer id="myFooter">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <img src="../css/img/footer-logo.png" alt="">
            </div>
            <div class="row-right">
                <div class="col-sm-2">
                    <ul>
                        <li><a href="{{ URL::to('/posts/museum') }}">Музей</a></li>
                        <li><a href="{{ URL::to('/admins/administration') }}">Администрация</a></li>
                        <li><a href="{{ URL::to('/departments/departments_page') }}">Отделы</a></li>
                        <li><a href="{{ URL::to('/books') }}">Книги</a></li>
                        <li><a href="{{ URL::to('/posts/history') }}">История</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <ul>
                        <li><a href="{{ URL::to('/footer/declaration') }}">Обьявление</a></li>
                        <li><a href="{{ URL::to('/news/news_page') }}">Новости</a></li>
                        <li><a href="{{ URL::to('/footer/conferences') }}">Конференции</a></li>
                        <li><a href="{{ URL::to('/posts/mass_media') }}">СМИ о нас</a></li>
                        <li><a href="{{ URL::to('/footer/contacts') }}">Контакты</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <ul>
                        <li><a href="{{ URL::to('/footer/cultural') }}">Культурное наследние</a></li>
                        <li><a href="{{ URL::to('/footer/international') }}">Международные связи</a></li>
                        <div class="btn-group" id="lang-btn">
                            <button type="button" data-toggle="dropdown" class="btn btn-info dropdown-toggle">Поменять язык
                                <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="#">казахский</a></li>
                                <li><a href="#">русский</a></li>
                                <!--  <li class="divider"></li>
                                 <li><a href="#">английский</a></li> -->
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

                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <p> Институт литературы и искусства им. М.О.Ауэзова КН МОН РК&copy; 2019</p>
    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
