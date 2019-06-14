@extends('layouts.app')

@section('content')
    <div class="culrure__wrap">
        <div class="news_page__way">
            <a href="{{ URL::to('/') }}">{{ trans('content.main') }}</a>&nbsp;/
            <a href="{{ URL::to('/books') }}">{{ trans('content.books') }}</a>&nbsp;/
            {{ $bok->title }}
        </div>
        <div>
            <div class="news">
                <div class="news__state">
                    <div class="news__state__headline">
                        <h1>{{ $bok->title }}</h1>
                    </div>
                    <div class="news__state__text news__books__text">
                        <div class="news__books__img">
                            <img src="{{ $bok ? asset('uploads/' . $bok->image_show) : ""}}" alt="">
                        </div>
                        <div class="news__state__text__descr">
                            <div class="news__state__text__descr__aphtor">
                                <p>{{ trans('content.author') }}</p><p>{!! $bok->description_short !!}</p>
                            </div>
                            <div class="news__state__reader">
                                <a href="{{ route('reader.index', [ 'id' => $bok->id ]) }}" target="_blank">Читать книгу</a>
                            </div>
                            <div class="news__state__text__descr__items">
                                @if(empty($bok->audio_show))
                                    <div class="audio-player" style="display: none">
                                        <div class="timeline">
                                            <div class="progress"></div>
                                        </div>
                                        <div class="controls">
                                            <div class="play-container">
                                                <div class="toggle-play play">
                                                </div>
                                            </div>
                                            <div class="time">
                                                <div class="current">0:00</div>
                                                <div class="divider">/</div>
                                                <div class="length"></div>
                                            </div>
                                            <div class="volume-container">
                                                <div class="volume-button">
                                                    <div class="volume icono-volumeMedium"></div>
                                                </div>

                                                <div class="volume-slider">
                                                    <div class="volume-percentage"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="audio-player">
                                        <div class="timeline">
                                            <div class="progress"></div>
                                        </div>
                                        <div class="controls">
                                            <div class="play-container">
                                                <div class="toggle-play play">
                                                </div>
                                            </div>
                                            <div class="time">
                                                <div class="current">0:00</div>
                                                <div class="divider">/</div>
                                                <div class="length"></div>
                                            </div>
                                            <div class="volume-container">
                                                <div class="volume-button">
                                                    <div class="volume icono-volumeMedium"></div>
                                                </div>

                                                <div class="volume-slider">
                                                    <div class="volume-percentage"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                <p>{!! $bok->description !!}</p>
                            </div>

                        </div>
                    </div>
                    {{--                <div class="news__state__date">--}}
                    {{--                    <div class="pnew__state__date">--}}
                    {{--                        <i class="far fa-calendar-alt"></i><p>&nbsp;&nbsp;{{ $bok->created_at }}&nbsp;&nbsp;</p>--}}
                    {{--                        <i class="far fa-eye"></i><p>&nbsp;&nbsp;1222</p>--}}
                    {{--                    </div>--}}
                    {{--                </div>--}}
                </div>
            </div>
        </div>
    </div>

<script>
    const audioPlayer=document.querySelector(".audio-player");const audio=new Audio("{{ URL::to($bok ? asset('uploads/' . $bok->audio_show) : "") }}");console.dir(audio);audio.addEventListener("loadeddata",()=>{audioPlayer.querySelector(".time .length").textContent=getTimeCodeFromNum(audio.duration);audio.volume=.75},!1);const timeline=audioPlayer.querySelector(".timeline");timeline.addEventListener("click",e=>{const timelineWidth=window.getComputedStyle(timeline).width;const timeToSeek=e.offsetX/parseInt(timelineWidth)*audio.duration;audio.currentTime=timeToSeek},!1);const volumeSlider=audioPlayer.querySelector(".controls .volume-slider");volumeSlider.addEventListener('click',e=>{const sliderWidth=window.getComputedStyle(volumeSlider).width;const newVolume=e.offsetX/parseInt(sliderWidth);audio.volume=newVolume;audioPlayer.querySelector(".controls .volume-percentage").style.width=newVolume*100+'%'},!1)
    setInterval(()=>{const progressBar=audioPlayer.querySelector(".progress");progressBar.style.width=audio.currentTime/audio.duration*100+"%";audioPlayer.querySelector(".time .current").textContent=getTimeCodeFromNum(audio.currentTime)},500);const playBtn=audioPlayer.querySelector(".controls .toggle-play");playBtn.addEventListener("click",()=>{if(audio.paused){playBtn.classList.remove("play");playBtn.classList.add("pause");audio.play()}else{playBtn.classList.remove("pause");playBtn.classList.add("play");audio.pause()}},!1);audioPlayer.querySelector(".volume-button").addEventListener("click",()=>{const volumeEl=audioPlayer.querySelector(".volume-container .volume");audio.muted=!audio.muted;if(audio.muted){volumeEl.classList.remove("icono-volumeMedium");volumeEl.classList.add("icono-volumeMute")}else{volumeEl.classList.add("icono-volumeMedium");volumeEl.classList.remove("icono-volumeMute")}});function getTimeCodeFromNum(num){let seconds=parseInt(num);let minutes=parseInt(seconds/60);seconds-=minutes*60;const hours=parseInt(minutes/60);minutes-=hours*60;if(hours===0)return `${minutes}:${String(seconds % 60).padStart(2, 0)}`;return `${String(hours).padStart(2, 0)}:${minutes}:${String(
        seconds % 60
    ).padStart(2, 0)}`}
</script>
@endsection


