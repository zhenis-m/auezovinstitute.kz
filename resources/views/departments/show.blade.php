@extends('litart.resources.views.layouts.app')

@section('content')
        <h2>{{ $depart->title }}</h2>
        <?php
        echo nl2br( $depart->body );
        ?>
@endsection