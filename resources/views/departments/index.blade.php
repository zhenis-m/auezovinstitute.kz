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

                <!-- <div><a href="#1" onclick="openbox('box'); return false" id="btns" class="active_1"><p>Отделы института</p></a></div> -->

                <li>
                @foreach ($departs as $depart)
                        <p>{{ $depart->title }}<a href="{{ route('departments.show', [ 'id' => $depart->id ]) }}"></a></p>
            @endforeach
                </li>
            </div>
        </div>
            <style>
                #1 {
                    display: block;
                }
            </style>
            <div class="dep_text">     
            </div>
            </div>
       </div>
</div>
@endsection
