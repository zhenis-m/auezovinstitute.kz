{{--@extends('adminlte::page')--}}


{{--@extends('adminlte::master')--}}
@extends('admin.layouts.master')
@section('adminlte_css')
    <link rel="stylesheet"
          href="{{ asset('vendor/adminlte/dist/css/skins/skin-' . config('adminlte.skin', 'blue') . '.min.css')}} ">
    @stack('css')
    @yield('css')
@stop

@section('body_class', 'skin-' . config('adminlte.skin', 'blue') . ' sidebar-mini ' . (config('adminlte.layout') ? [
    'boxed' => 'layout-boxed',
    'fixed' => 'fixed',
    'top-nav' => 'layout-top-nav'
][config('adminlte.layout')] : '') . (config('adminlte.collapse_sidebar') ? ' sidebar-collapse ' : ''))

@section('body')
    <div class="wrapper">

        <!-- Main Header -->
        <header class="main-header">
            @if(config('adminlte.layout') == 'top-nav')
                <nav class="navbar navbar-static-top">
                    <div class="container">
                        <div class="navbar-header">
                            <a href="{{ url(config('adminlte.dashboard_url', 'home')) }}" class="navbar-brand">
                                {!! config('adminlte.logo', '<b>Admin</b>LTE') !!}
                            </a>
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                                <i class="fa fa-bars"></i>
                            </button>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                            <ul class="nav navbar-nav">
                                @each('adminlte::partials.menu-item-top-nav', $adminlte->menu(), 'item')
                            </ul>
                        </div>
                        <!-- /.navbar-collapse -->
                    @else
                        <!-- Logo -->
                            <a href="{{ url(config('adminlte.dashboard_url', 'home')) }}" class="logo">
                                <!-- mini logo for sidebar mini 50x50 pixels -->
                                <span class="logo-mini">{!! config('adminlte.logo_mini', '<b>A</b>LT') !!}</span>
                                <!-- logo for regular state and mobile devices -->
                                <span class="logo-lg">{!! 'AuezovAdmin' !!}</span>
                            </a>

                            <!-- Header Navbar -->
                            <nav class="navbar navbar-static-top" role="navigation">
                                <!-- Sidebar toggle button-->
                                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                                    <span class="sr-only">{{ trans('adminlte::adminlte.toggle_navigation') }}</span>
                                </a>
                            @endif
                            <!-- Navbar Right Menu -->
                                <div class="navbar-custom-menu">

                                    <ul class="nav navbar-nav">
                                        <li>
                                            @if(config('adminlte.logout_method') == 'GET' || !config('adminlte.logout_method') && version_compare(\Illuminate\Foundation\Application::VERSION, '5.3.0', '<'))
                                                <a href="{{ url(config('adminlte.logout_url', 'auth/logout')) }}">
                                                    <i class="fa fa-fw fa-power-off"></i> {{ trans('adminlte::adminlte.log_out') }}
                                                </a>
                                            @else
                                                <a href="#"
                                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                                >
                                                    <i class="fa fa-fw fa-power-off"></i> {{ trans('adminlte::adminlte.log_out') }}
                                                </a>
                                                <form id="logout-form" action="{{ url(config('adminlte.logout_url', 'auth/logout')) }}" method="POST" style="display: none;">
                                                    @if(config('adminlte.logout_method'))
                                                        {{ method_field(config('adminlte.logout_method')) }}
                                                    @endif
                                                    {{ csrf_field() }}
                                                </form>
                                            @endif
                                        </li>
                                    </ul>
                                </div>
                            @if(config('adminlte.layout') == 'top-nav')
                    </div>
                    @endif
                </nav>
        </header>

    @if(config('adminlte.layout') != 'top-nav')
        <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">

                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">

                    <!-- Sidebar Menu -->
                    <ul class="sidebar-menu" data-widget="tree">
                        {{--                    @each('adminlte::partials.menu-item', $adminlte->menu(), 'item')--}}
                        <li class="header">ПАНЕЛЬ СОСТОЯНИЯ</li>
                        <li class="">
                            <a href="{{url('/admin')}}">
                                <i class="fa fa-dashboard"></i>
                                <span>dashboard</span>
                            </a>
                        </li>
                        <li class="header">РАЗДЕЛЫ</li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-fw fa-share "></i>
                                <span>Институт</span>
                                <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                            </a>
                            <ul class="treeview-menu">
                                <li class=""><a href="{{route('admin.insts.index')}}"><i class="fa fa-fw fa-circle-o "></i><span>Создание подразделов</span></a></li>
                                <li class=""><a href="{{route('admin.articles.index')}}"><i class="fa fa-fw fa-circle-o "></i><span>Новости</span></a></li>
                                <li class=""><a href="{{route('admin.departments.index')}}"><i class="fa fa-fw fa-circle-o "></i><span>Отделы института</span></a></li>
                                <li class=""><a href="{{route('admin.directors.index')}}"><i class="fa fa-fw fa-circle-o "></i><span>Администрация института</span></a></li>
                            </ul>
                        </li>

                        <li class="">
                            <a href="{{route('admin.sciences.index')}}">
                                <i class="fa fa-fw fa-folder"></i>
                                <span>Научные проекты</span>
                            </a>
                        </li>

                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-fw fa-share "></i>
                                <span>Издания и публикации</span>
                                <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                            </a>
                            <ul class="treeview-menu">
                                <li class=""><a href="{{route('admin.cultures.index')}}"><i class="fa fa-fw fa-circle-o"></i><span>Список страниц</span></a></li>
                                <li class=""><a href="{{route('admin.books.index')}}"><i class="fa fa-fw fa-circle-o "></i><span>Книги</span></a></li>
                            </ul>
                        </li>

                        <li class="">
                            <a href="{{route('admin.halyks.index')}}">
                                <i class="fa fa-fw fa-folder"></i>
                                <span>Народный Университет</span>
                            </a>
                        </li>

                        <li class="">
                            <a href="#">
                                <i class="fa fa-fw fa-folder"></i>
                                <span>Керуен</span>
                            </a>
                        </li>

                        <li class="">
                            <a href="#">
                                <i class="fa fa-fw fa-folder"></i>
                                <span>Алтын қор</span>
                            </a>
                        </li>

                        <li class="">
                            <a href="#">
                                <i class="fa fa-fw fa-folder"></i>
                                <span>Дом музея Ауезова</span>
                            </a>
                        </li>
                        <li class="header">Настройки</li>

                        <li class="">
                            <a href="{{route('admin.user_managment.user.index')}}">
                                <i class="fa fa-fw fa-user"></i>
                                <span>Управление пользователями</span>
                            </a>
                        </li>

                        <li class="">
                            <a href="{{url('/')}}">
                                <i class="fa fa-fw fa-power-off"></i>
                                <span>Назад к сайту</span>
                            </a>
                        </li>
                    </ul>
                    <!-- /.sidebar-menu -->
                </section>
                <!-- /.sidebar -->
            </aside>
    @endif

    <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @if(config('adminlte.layout') == 'top-nav')
                <div class="container">
                @endif

                <!-- Content Header (Page header) -->
                    <section class="content-header">
                        @yield('content_header')
                    </section>

                    <!-- Main content -->
                    <section class="content">

                        @yield('content')

                    </section>
                    <!-- /.content -->
                    @if(config('adminlte.layout') == 'top-nav')
                </div>
                <!-- /.container -->
            @endif
        </div>
        <!-- /.content-wrapper -->

    </div>
    <!-- ./wrapper -->
@stop

@section('adminlte_js')
    <script src="{{ asset('vendor/adminlte/dist/js/adminlte.min.js') }}"></script>
    @stack('js')
    @yield('js')
@stop

{{--<!DOCTYPE html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
{{--<head>--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}

{{--    <!-- CSRF Token -->--}}
{{--    <meta name="csrf-token" content="{{ csrf_token() }}">--}}

{{--    <link rel="shortcut icon" href="../../images/footer-logo.png" type="image/png">--}}
{{--    --}}{{--    <title>{{ config('app.name', 'Laravel') }}</title>--}}
{{--    <title>Институт им. М. Ауэзова</title>--}}

{{--    <!-- Scripts -->--}}
{{--    <script src="https://cdn.jsdelivr.net/npm/vue"></script>--}}
{{--    <script src="//cdn.ckeditor.com/4.5.6/standard/ckeditor.js"></script>--}}
{{--    <script src="{{ asset('js/app.js') }}" defer></script>--}}



{{--    <!-- Fonts -->--}}
{{--    <link rel="dns-prefetch" href="//fonts.gstatic.com">--}}
{{--    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">--}}
{{--    <!-- Styles -->--}}
{{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
{{--    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">--}}
{{--</head>--}}
{{--<body>--}}
{{--<div id="app">--}}
{{--    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">--}}
{{--        <div class="container">--}}
{{--            <a class="navbar-brand" href="{{ url('/admin') }}">Admin--}}
{{--                {{ config('app.name', 'Laravel') }}--}}
{{--            </a>--}}
{{--            </a>--}}
{{--            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">--}}
{{--                <span class="navbar-toggler-icon"></span>--}}
{{--            </button>--}}

{{--            <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--                <!-- Left Side Of Navbar -->--}}

{{--                <ul class="navbar-nav">--}}
{{--                    <li class="dropdown">--}}
{{--                        <a href="#" class="nav-link " data-toggle="dropdown"--}}
{{--                        role="button" aria-expanded="false">Институт</a>--}}
{{--                        <ul class="dropdown-menu admin__panel" role="menu">--}}
{{--                            <li><a class="dropdown-item" href="{{route('admin.insts.index')}}">Создание подразделов</a></li>--}}
{{--                            <li><a class="dropdown-item" href="{{route('admin.articles.index')}}">Новости</a></li>--}}
{{--                            <li><a class="dropdown-item" href="{{route('admin.departments.index')}}">Отделы института</a></li>--}}
{{--                            <li><a class="dropdown-item" href="{{route('admin.directors.index')}}">Администрация института</a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                </ul>--}}

{{--                <li><a class="dropdown-item" href="{{route('admin.sciences.index')}}">Научные проекты</a></li>--}}



{{--                <ul class="navbar-nav">--}}
{{--                    <li class="dropdown">--}}
{{--                        <a href="#" class="nav-link " data-toggle="dropdown"--}}
{{--                           role="button" aria-expanded="false">Издания и Публикации</a>--}}
{{--                        <ul class="dropdown-menu admin__panel" role="menu">--}}
{{--                            <li><a class="dropdown-item" href="{{route('admin.cultures.index')}}">Список страниц</a></li>--}}
{{--                            <li><a class="dropdown-item" href="{{route('admin.books.index')}}">Книги</a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                </ul>--}}


{{--                <li><a class="dropdown-item" href="{{route('admin.halyks.index')}}">Народный Университет</a></li>--}}

{{--                <li><a class="dropdown-item" href="#">Керуен</a></li>--}}
{{--                <li><a class="dropdown-item" href="#">Алтын қор</a></li>--}}
{{--                <li><a class="dropdown-item" href="#">Дом музея Ауезова</a></li>--}}







{{--                <!-- Right Side Of Navbar -->--}}
{{--                <ul class="navbar-nav ml-auto">--}}
{{--                    <!-- Authentication Links -->--}}
{{--                    @guest--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
{{--                        </li>--}}
{{--                        @if (Route::has('register'))--}}
{{--                            <li class="nav-item">--}}
{{--                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--                            </li>--}}
{{--                        @endif--}}
{{--                    @else--}}
{{--                        <ul class="navbar-nav">--}}
{{--                            <a href="{{url('/admin')}}" class="nav-link"--}}
{{--                               role="button" aria-expanded="false">Панель состояния</a>--}}
{{--                        </ul>--}}
{{--                        <li class="nav-item dropdown">--}}
{{--                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                                {{ Auth::user()->name }} <span class="caret"></span>--}}
{{--                            </a>--}}
{{--                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}

{{--                                <a class="dropdown-item" href="{{route('admin.user_managment.user.index')}}">Управление пользователями</a>--}}
{{--                                <a class="dropdown-item" href="{{url('/')}}">Назад к сайту</a>--}}
{{--                                <hr>--}}
{{--                                <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--                                   onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();">--}}
{{--                                    {{ __('Logout') }}--}}
{{--                                </a>--}}

{{--                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--                                    @csrf--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                    @endguest--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </nav>--}}

{{--    <main class="py-4">--}}
{{--        @yield('content')--}}
{{--    </main>--}}
{{--    <script></script>--}}
{{--</div>--}}
{{--</body>--}}
{{--</html>--}}
