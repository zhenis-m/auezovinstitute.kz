@extends('layouts.app')

@section('content')
<div>
    <div class="dep__way">
        <a href="{{ URL::to('/') }}">Главная</a>&nbsp;/&nbsp;
        <a href="{{ URL::to('/departments/index') }}">Отделы института</a>
    </div>
    <div class="container_departments">
        <div class="bar_line">
            <div class="bar">
                <!-- @foreach ($departs as $depart)
                    <div><a href="#" onclick="openbox3('box'); return false" id="{{ $depart->title }}" class="active_1"><p>{{ $depart->title }}</p></a></div>
                @endforeach -->
                <div><a href="#1" onclick="openbox('box'); return false" id="btns" class="active_1"><p>Отделы института</p></a></div>
                <div><a href="#2" onclick="openbox2('box'); return false" id="btns"><p>Отдел фольклора</p></a></div>
                <div><a href="#3" onclick="openbox3('box'); return false" id="btns"><p>Отдел древней и средневековой<br>литературы</p></a></div>
                <div><a href="#4" onclick="openbox4('box'); return false" id="btns"><p>Отдел абаеведения и литературы<br>новой эпохи</p></a></div>
                <div><a href="#5" onclick="openbox5('box'); return false" id="btns"><p>Отдел литературы и художественной<br>публицистики эпохи независимости</p></a></div>
                <div><a href="#6" onclick="openbox6('box'); return false" id="btns"><p>Отдел аналитики и внешних литературных связей</p></a></div>
                <div><a href="#7" onclick="openbox7('box'); return false" id="btns"><p>Отдел теории литературы и методологии<br>литературоведения</p></a></div>
                <div><a href="#8" onclick="openbox8('box'); return false" id="btns"><p>Отдел текстологии и источниковедения</p></a></div>


                <div><a href="#9" onclick="openbox9('box'); return false" id="btns"><p>Научно-инновационный отдел рукописи<br>и текстологии</p></a></div>
                <div><a href="#10" onclick="openbox10('box'); return false" id="btns"><p>Отдел театра и кино</p></a></div>
                <div><a href="#11" onclick="openbox11('box'); return false" id="btns"><p>Отдел изобразительного искусства</p></a></div>
                <div><a href="#12" onclick="openbox12('box'); return false" id="btns"><p>Отдел музыковедения</p></a></div>
                <div><a href="13" onclick="openbox13('box'); return false" id="btns"><p>Отдел Ауэзоведения</p></a></div>
            </div>
        </div>
            <style>
                #1 {
                    display: block;
                }
            </style>
            <div class="dep_text">
                @foreach ($departs as $depart)
                    <div id="{{ $depart->id }}" style="display: none;">
                        <h2>{{ $depart->title }}</h2>
                        <?php
                        echo nl2br( $depart->body );
                        ?>
                    </div>
                @endforeach
            </div>
       </div>
</div>
<script>
    function openbox(box) {

        var display = document.getElementById(1).style.display;

        if (display == "none") {
            document.getElementById(1).style.display = "block";
            document.getElementById(2).style.display = "none";
            document.getElementById(3).style.display = "none";
            document.getElementById(4).style.display = "none";
            document.getElementById(5).style.display = "none";
            document.getElementById(6).style.display = "none";
            document.getElementById(7).style.display = "none";
            document.getElementById(8).style.display = "none";
            document.getElementById(9).style.display = "none";
            document.getElementById(10).style.display = "none";
            document.getElementById(11).style.display = "none";
            document.getElementById(12).style.display = "none";
            document.getElementById(13).style.display = "none";
        }
        // else {
        //     document.getElementById(1).style.display = "none";
        // }

    }
    function openbox2(box) {

        var display2 = document.getElementById(2).style.display;


        if (display2 == "none") {
            document.getElementById(2).style.display = "block";
            document.getElementById(1).style.display = "none";
            document.getElementById(3).style.display = "none";
            document.getElementById(4).style.display = "none";
            document.getElementById(5).style.display = "none";
            document.getElementById(6).style.display = "none";
            document.getElementById(7).style.display = "none";
            document.getElementById(8).style.display = "none";
            document.getElementById(9).style.display = "none";
            document.getElementById(10).style.display = "none";
            document.getElementById(11).style.display = "none";
            document.getElementById(12).style.display = "none";
            document.getElementById(13).style.display = "none";
        }
    }



    function openbox3(box) {

        var display3 = document.getElementById(3).style.display;


        if (display3 == "none") {
            document.getElementById(3).style.display = "block";
            document.getElementById(1).style.display = "none";
            document.getElementById(2).style.display = "none";
            document.getElementById(4).style.display = "none";
            document.getElementById(5).style.display = "none";
            document.getElementById(6).style.display = "none";
            document.getElementById(7).style.display = "none";
            document.getElementById(8).style.display = "none";
            document.getElementById(9).style.display = "none";
            document.getElementById(10).style.display = "none";
            document.getElementById(11).style.display = "none";
            document.getElementById(12).style.display = "none";
            document.getElementById(13).style.display = "none";
        }
    }



    function openbox4(box) {

        var display3 = document.getElementById(4).style.display;


        if (display3 == "none") {
            document.getElementById(4).style.display = "block";
            document.getElementById(1).style.display = "none";
            document.getElementById(2).style.display = "none";
            document.getElementById(3).style.display = "none";
            document.getElementById(5).style.display = "none";
            document.getElementById(6).style.display = "none";
            document.getElementById(7).style.display = "none";
            document.getElementById(8).style.display = "none";
            document.getElementById(9).style.display = "none";
            document.getElementById(10).style.display = "none";
            document.getElementById(11).style.display = "none";
            document.getElementById(12).style.display = "none";
            document.getElementById(13).style.display = "none";
        }
    }

    function openbox5(box) {

        var display3 = document.getElementById(5).style.display;


        if (display3 == "none") {
            document.getElementById(5).style.display = "block";
            document.getElementById(1).style.display = "none";
            document.getElementById(2).style.display = "none";
            document.getElementById(3).style.display = "none";
            document.getElementById(4).style.display = "none";
            document.getElementById(6).style.display = "none";
            document.getElementById(7).style.display = "none";
            document.getElementById(8).style.display = "none";
            document.getElementById(9).style.display = "none";
            document.getElementById(10).style.display = "none";
            document.getElementById(11).style.display = "none";
            document.getElementById(12).style.display = "none";
            document.getElementById(13).style.display = "none";
        }
    }

    function openbox6(box) {

        var display3 = document.getElementById(6).style.display;


        if (display3 == "none") {
            document.getElementById(6).style.display = "block";
            document.getElementById(1).style.display = "none";
            document.getElementById(2).style.display = "none";
            document.getElementById(3).style.display = "none";
            document.getElementById(4).style.display = "none";
            document.getElementById(5).style.display = "none";
            document.getElementById(7).style.display = "none";
            document.getElementById(8).style.display = "none";
            document.getElementById(9).style.display = "none";
            document.getElementById(10).style.display = "none";
            document.getElementById(11).style.display = "none";
            document.getElementById(12).style.display = "none";
            document.getElementById(13).style.display = "none";
        }
    }

    function openbox7(box) {

        var display3 = document.getElementById(7).style.display;


        if (display3 == "none") {
            document.getElementById(7).style.display = "block";
            document.getElementById(1).style.display = "none";
            document.getElementById(2).style.display = "none";
            document.getElementById(3).style.display = "none";
            document.getElementById(4).style.display = "none";
            document.getElementById(5).style.display = "none";
            document.getElementById(6).style.display = "none";
            document.getElementById(8).style.display = "none";
            document.getElementById(9).style.display = "none";
            document.getElementById(10).style.display = "none";
            document.getElementById(11).style.display = "none";
            document.getElementById(12).style.display = "none";
            document.getElementById(13).style.display = "none";
        }
    }

    function openbox8(box) {

        var display3 = document.getElementById(8).style.display;


        if (display3 == "none") {
            document.getElementById(8).style.display = "block";
            document.getElementById(1).style.display = "none";
            document.getElementById(2).style.display = "none";
            document.getElementById(3).style.display = "none";
            document.getElementById(4).style.display = "none";
            document.getElementById(5).style.display = "none";
            document.getElementById(6).style.display = "none";
            document.getElementById(7).style.display = "none";
            document.getElementById(9).style.display = "none";
            document.getElementById(10).style.display = "none";
            document.getElementById(11).style.display = "none";
            document.getElementById(12).style.display = "none";
            document.getElementById(13).style.display = "none";
        }
    }

    function openbox9(box) {

        var display3 = document.getElementById(9).style.display;


        if (display3 == "none") {
            document.getElementById(9).style.display = "block";
            document.getElementById(1).style.display = "none";
            document.getElementById(2).style.display = "none";
            document.getElementById(3).style.display = "none";
            document.getElementById(4).style.display = "none";
            document.getElementById(5).style.display = "none";
            document.getElementById(6).style.display = "none";
            document.getElementById(7).style.display = "none";
            document.getElementById(8).style.display = "none";
            document.getElementById(10).style.display = "none";
            document.getElementById(11).style.display = "none";
            document.getElementById(12).style.display = "none";
            document.getElementById(13).style.display = "none";
        }
    }

    function openbox10(box) {

        var display3 = document.getElementById(10).style.display;


        if (display3 == "none") {
            document.getElementById(10).style.display = "block";
            document.getElementById(1).style.display = "none";
            document.getElementById(2).style.display = "none";
            document.getElementById(3).style.display = "none";
            document.getElementById(4).style.display = "none";
            document.getElementById(5).style.display = "none";
            document.getElementById(6).style.display = "none";
            document.getElementById(7).style.display = "none";
            document.getElementById(8).style.display = "none";
            document.getElementById(9).style.display = "none";
            document.getElementById(11).style.display = "none";
            document.getElementById(12).style.display = "none";
            document.getElementById(13).style.display = "none";
        }
    }

    function openbox11(box) {

        var display3 = document.getElementById(11).style.display;


        if (display3 == "none") {
            document.getElementById(11).style.display = "block";
            document.getElementById(1).style.display = "none";
            document.getElementById(2).style.display = "none";
            document.getElementById(3).style.display = "none";
            document.getElementById(4).style.display = "none";
            document.getElementById(5).style.display = "none";
            document.getElementById(6).style.display = "none";
            document.getElementById(7).style.display = "none";
            document.getElementById(8).style.display = "none";
            document.getElementById(9).style.display = "none";
            document.getElementById(10).style.display = "none";
            document.getElementById(12).style.display = "none";
            document.getElementById(13).style.display = "none";
        }
    }

    function openbox12(box) {

        var display3 = document.getElementById(12).style.display;


        if (display3 == "none") {
            document.getElementById(12).style.display = "block";
            document.getElementById(1).style.display = "none";
            document.getElementById(2).style.display = "none";
            document.getElementById(3).style.display = "none";
            document.getElementById(4).style.display = "none";
            document.getElementById(5).style.display = "none";
            document.getElementById(6).style.display = "none";
            document.getElementById(7).style.display = "none";
            document.getElementById(8).style.display = "none";
            document.getElementById(9).style.display = "none";
            document.getElementById(10).style.display = "none";
            document.getElementById(11).style.display = "none";
            document.getElementById(13).style.display = "none";
        }
    }

    function openbox13(box) {

        var display3 = document.getElementById(13).style.display;


        if (display3 == "none") {
            document.getElementById(13).style.display = "block";
            document.getElementById(1).style.display = "none";
            document.getElementById(2).style.display = "none";
            document.getElementById(3).style.display = "none";
            document.getElementById(4).style.display = "none";
            document.getElementById(5).style.display = "none";
            document.getElementById(6).style.display = "none";
            document.getElementById(7).style.display = "none";
            document.getElementById(8).style.display = "none";
            document.getElementById(9).style.display = "none";
            document.getElementById(10).style.display = "none";
            document.getElementById(11).style.display = "none";
            document.getElementById(12).style.display = "none";
        }
    }
</script>
@endsection
