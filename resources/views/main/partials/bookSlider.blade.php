<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>jQuery Multislider Demos</title>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <style>
        body { font-family:'Open Sans'; background-color:#fafafa;}
        h2 { margin:30px auto;}
        .container-55 {
            margin: 40px 0;
        }
        #mixedSlider {
            position: relative;
        }
        #mixedSlider .MS-content {
            white-space: nowrap;
            overflow: hidden;
            margin: 0 3%;
            padding: 10px;
        }
        #mixedSlider .MS-content .item {
            display: inline-block;
            width: 18.35%;
            position: relative;
            vertical-align: top;
            overflow: hidden;
            height: 100%;
            white-space: normal;
            margin: 0 10px;
            box-shadow: 0 0 8px rgba(0,0,0,0.5);
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            transition: all 0.3s ease-out;
        }

        #mixedSlider .MS-content .item:hover {
            transform: scale(1.02);
            transition: all 0.3s ease-in;
        }
        @media (max-width: 991px) {
            #mixedSlider .MS-content .item {
                width: 50%;
            }
        }
        @media (max-width: 767px) {
            #mixedSlider .MS-content .item {
                width: 100%;
            }
        }
        /*#mixedSlider .MS-content .item .imgTitle {*/
        /*    position: relative;*/
        /*}*/
        /*#mixedSlider .MS-content .item .imgTitle .blogTitle {*/
        /*    margin: 0;*/
        /*    text-align: left;*/
        /*    letter-spacing: 2px;*/
        /*    color: #252525;*/
        /*    font-style: italic;*/
        /*    position: absolute;*/
        /*    background-color: rgba(255, 255, 255, 0.5);*/
        /*    width: 100%;*/
        /*    bottom: 0;*/
        /*    font-weight: bold;*/
        /*    padding: 0 0 2px 10px;*/
        /*}*/
        /*#mixedSlider .MS-content .item .imgTitle img {*/
        /*    height: auto;*/
        /*    width: 100%;*/
        /*}*/

        #mixedSlider .MS-controls button {
            position: absolute;
            border: none;
            background-color: transparent;
            outline: 0;
            font-size: 50px;
            top: 95px;
            color: rgba(0, 0, 0, 0.4);
            transition: 0.15s linear;
        }
        #mixedSlider .MS-controls button:hover {
            color: rgba(0, 0, 0, 0.8);
        }
        @media (max-width: 992px) {
            #mixedSlider .MS-controls button {
                font-size: 30px;
            }
        }
        @media (max-width: 767px) {
            #mixedSlider .MS-controls button {
                font-size: 20px;
            }
        }
        #mixedSlider .MS-controls .MS-left {
            left: 0px;
        }
        @media (max-width: 767px) {
            #mixedSlider .MS-controls .MS-left {
                left: -10px;
            }
        }
        #mixedSlider .MS-controls .MS-right {
            right: 0px;
        }
        @media (max-width: 767px) {
            #mixedSlider .MS-controls .MS-right {
                right: -10px;
            }
        }
        /*#basicSlider { position: relative; }*/

        /*#basicSlider .MS-content {*/
        /*    white-space: nowrap;*/
        /*    overflow: hidden;*/
        /*    margin: 0 2%;*/
        /*    height: 50px;*/
        /*}*/

        /*#basicSlider .MS-content .item {*/
        /*    display: inline-block;*/
        /*    width: 20%;*/
        /*    position: relative;*/
        /*    vertical-align: top;*/
        /*    overflow: hidden;*/
        /*    height: 100%;*/
        /*    white-space: normal;*/
        /*    line-height: 50px;*/
        /*    vertical-align: middle;*/
        /*}*/
        /*@media (max-width: 991px) {*/

        /*    #basicSlider .MS-content .item { width: 25%; }*/
        /*}*/
        /*@media (max-width: 767px) {*/

        /*    #basicSlider .MS-content .item { width: 35%; }*/
        /*}*/
        /*@media (max-width: 500px) {*/

        /*    #basicSlider .MS-content .item { width: 50%; }*/
        /*}*/

        /*#basicSlider .MS-content .item a {*/
        /*    line-height: 50px;*/
        /*    vertical-align: middle;*/
        /*}*/

        /*#basicSlider .MS-controls button { position: absolute; }*/

        /*#basicSlider .MS-controls .MS-left {*/
        /*    top: 35px;*/
        /*    left: 10px;*/
        /*}*/

        /*#basicSlider .MS-controls .MS-right {*/
        /*    top: 35px;*/
        /*    right: 10px;*/
        /*}*/


        #mixedSlider .MS-content .item .item__link {
            text-decoration: none;
        }

        #mixedSlider .MS-content .item .item__link:hover {
            text-decoration: none;
        }

        #mixedSlider .MS-content .item .item__link .item__link__block {
            height: 350px;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
            background-color: #fff;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
        }

        #mixedSlider .MS-content .item .item__link .item__link__block .item__link__block__img {
            width: 80%;
            height: 230px;
            margin: 20px 0;
            overflow: hidden;
        }

        #mixedSlider .MS-content .item .item__link .item__link__block .item__link__block__img img {
            width: 100%;
            height: auto;
        }

        #mixedSlider .MS-content .item .item__link .item__link__block .item__link__block__text {
            display: flex;
            justify-content: center;
        }

        #mixedSlider .MS-content .item .item__link .item__link__block .item__link__block__text .item__link__block__text__name {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 0 10px 10px;
            text-align: center;
        }

        .item__link__block__text__name h4 {
            color: #000;

        }

        .item__link__block__text__name p {
            color: #c9c9c9;
        }


    </style>
</head>

<body>
<div class="container-55">
    <div id="mixedSlider">
        <div class="MS-content">
            @if ($bok)
                @foreach ($bok as $bokValue)
                    <div class="item">
                        <a href="{{ route('books.show', [ 'id' => $bokValue->id ]) }}" class="item__link">
                            <div class="item__link__block">
                                <div class="item__link__block__img">
                                    <img src="{{ $bokValue ? asset('uploads/' . $bokValue->image_show) : ""}}">
                                </div>
                                <div class="item__link__block__text">
                                    <div class="item__link__block__text__name">
                                        <h4>{{$bokValue->title}}</h4>
{{--                                        <p>{!! $bokValue->description_short !!}</p>--}}
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            @endif
{{--            <div class="item">--}}
{{--                <div class="imgTitle">--}}
{{--                    <h2 class="blogTitle">Arch</h2>--}}
{{--                    <img src="https://placeimg.com/500/300/arch" alt="" />--}}
{{--                </div>--}}
{{--                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac tellus ex. Integer eu fringilla nisi. Donec id dapibus mauris, eget dignissim turpis ...</p>--}}
{{--                <a href="#">Read More</a>--}}
{{--            </div>--}}
{{--            <div class="item">--}}
{{--                <div class="imgTitle">--}}
{{--                    <h2 class="blogTitle">Nature</h2>--}}
{{--                    <img src="https://placeimg.com/500/300/nature" alt="" />--}}
{{--                </div>--}}
{{--                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac tellus ex. Integer eu fringilla nisi. Donec id dapibus mauris, eget dignissim turpis ...</p>--}}
{{--                <a href="#">Read More</a>--}}
{{--            </div>--}}
{{--            <div class="item">--}}
{{--                <div class="imgTitle">--}}
{{--                    <h2 class="blogTitle">People</h2>--}}
{{--                    <img src="https://placeimg.com/500/300/people" alt="" />--}}
{{--                </div>--}}
{{--                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac tellus ex. Integer eu fringilla nisi. Donec id dapibus mauris, eget dignissim turpis ...</p>--}}
{{--                <a href="#">Read More</a>--}}
{{--            </div>--}}
{{--            <div class="item">--}}
{{--                <div class="imgTitle">--}}
{{--                    <h2 class="blogTitle">Tech</h2>--}}
{{--                    <img src="https://placeimg.com/500/300/tech" alt="" />--}}
{{--                </div>--}}
{{--                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac tellus ex. Integer eu fringilla nisi. Donec id dapibus mauris, eget dignissim turpis ...</p>--}}
{{--                <a href="#">Read More</a>--}}
{{--            </div>--}}
        </div>
        <div class="MS-controls">
            <button class="MS-left"><i class="fa fa-angle-left" aria-hidden="true"></i></button>
            <button class="MS-right"><i class="fa fa-angle-right" aria-hidden="true"></i></button>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="js/multislider.js"></script>
<script>
    $('#basicSlider').multislider({
        continuous: true,
        duration: 2000
    });
    $('#mixedSlider').multislider({
        duration: 750,
        interval: 3000
    });
</script>
</body>
</html>
