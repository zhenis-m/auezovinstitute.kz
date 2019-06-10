@extends('layouts.app')

@section('content')
    <div class="wrap__edu">
        <div class="section">
            <div class="section__head">
                <h1>{{ trans('education.edu_head') }}</h1>
            </div>
            <div class="section__img">
                <img src="../../images/magistr.jpg">
            </div>
            <div class="section__text">
                <p>{{ trans('education.edu_text1') }}</p>
                <p class="bold">{{ trans('education.edu_specialization') }}</p>
                <div class="section__text__specialty">
                    <ul>
                        <li>{{ trans('education.edu_literature') }}</li>
                        <li>{{ trans('education.edu_literature2') }}</li>
                    </ul>
                </div>
                <div class="section__text__specialization">
                    <div class="section__text__specialization__head">
                        <p class="bold">{{ trans('education.edu_specialization2') }}</p>
                    </div>
                    <div class="section__text__specialization__block">
                        <div class="section__text__specialization__block__text">
                            <ul>
                                <li>{{ trans('education.edu_special1') }}</li>
                                <li>{{ trans('education.edu_special2') }}</li>
                                <li>{{ trans('education.edu_special3') }}</li>
                            </ul>
                        </div>
                        <div class="section__text__specialization__block__text">
                            <ul>
                                <li>{{ trans('education.edu_special4') }}</li>
                                <li>{{ trans('education.edu_special5') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="section__text__address">
                    <p>{{ trans('education.edu_text2') }}</p>
                    <ul>
                        <li>{{ trans('education.edu_address') }}</li>
                        <li>{{ trans('education.edu_address2') }}</li>
                        <li>{{ trans('education.edu_address3') }}</li>
                    </ul>
                    <p class="bold">{{ trans('education.edu_text3') }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
