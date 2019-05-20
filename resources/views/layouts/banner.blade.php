<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
</head>

<body>
<div class="main-slider">		
		@foreach ($banners as $banner)
   					   <div class="t-slide current-t-slide">
   					   	
					      <img src="{{ $banner ? asset('uploads/' . $banner->image_show) : ""}}">
					      <div class=" banner__img__text">
					        <H1>{!! $banner->description !!}</H1>
					        <p>{!! $banner->description_short !!}</p>
					      </div>
					   </div>
			@endforeach	
	<div class="t-slider-controls">
		<div class="arrow right-arrow">
			<div class="arrow-container">
				<div class="arrow-icon"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
			</div>
		</div>
		<div class="arrow left-arrow">
			<div class="arrow-container">
				<div class="arrow-icon"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
			</div>
		</div>
		<div class="t-load-bar">
			<div class="inner-load-bar"></div>
		</div>
		<div class="t-dots-container">
			<div class="t-slide-dots-wrap">
				<div class="t-slide-dots">
				</div>
			</div>
		</div>
	</div>
</div>

<div class="third-slider text-slider" style="display: none;"> 
			<div class="t-slider-controls">
				<div class="arrow right-arrow">
					<div class="arrow-container">
						<div class="arrow-icon"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
					</div>
				</div>
				<div class="arrow left-arrow">
					<div class="arrow-container">
						<div class="arrow-icon"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
					</div>
				</div>
				<div class="t-dots-container">
					<div class="t-slide-dots-wrap">
						<div class="t-slide-dots">

						</div>
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript">
			$(document).ready(function() {
//------------------trent's slider
function tRunSlider(sliderName) {
	$(sliderName).addClass('trent-slider');
	$offset = $(sliderName).width();
	$tSlideInStyles = {left: '0', right: '0'}
	$t_loadBarStopStyles = {animation : "none", width : "0%"}
	$hiddenSlideStylesRight = {left: $offset, right: 0 - $offset}
	$hiddenSlideStylesLeft = {right: $offset, left: 0 - $offset}

	//slider functions
	function setTextSlideHeight()  {
		if ($(sliderName).hasClass('text-slider')) {
			if ($(window).width() >= 768 ) {
				$(''+ sliderName +'.text-slider').css('height', $(''+ sliderName +' .current-t-slide .t-slide-content').height() + 245);
				if ($(''+ sliderName +'.text-slider').hasClass('small-slider')) {
					$(''+ sliderName +'.text-slider.small-slider').css('height', $(''+ sliderName +' .current-t-slide .t-slide-content').height() + 100);
				}
			} else {
				$(''+ sliderName +'.text-slider').css('height', $(''+ sliderName +' .current-t-slide .t-slide-content').height() + 70);
			}
		}
	}

	function tStartLoadBar() {$(''+ sliderName +' .t-load-bar .inner-load-bar').css('animation', 'load 4.5s linear infinite');}

	function tSliderHasStopped() {
		if ($('.current-t-slide').css('left') === "0px" && $(''+ sliderName +' .current-t-slide').css('right') === "0px") {
			return true;
		} else {
			return false;
		}
	}

	function tSlideChangerRight() {
		if ($(''+ sliderName +' .current-t-slide').next().hasClass('t-slide') && tSliderHasStopped()) {
			$(''+ sliderName +' .current-t-slide').removeClass('current-t-slide').css($hiddenSlideStylesLeft).next().css($tSlideInStyles).addClass('current-t-slide');
			$(''+ sliderName +' .current-dot').removeClass('current-dot').next().addClass('current-dot');
			setTextSlideHeight();
		} else if (tSliderHasStopped()) {
			$(''+ sliderName +' .current-t-slide').removeClass('current-t-slide');
			$(''+ sliderName +' .t-slide').first().addClass('current-t-slide').css($tSlideInStyles);
			tSetCss();
			$(''+ sliderName +' .current-dot').removeClass('current-dot')
			$(''+ sliderName +' .t-dot').first().addClass('current-dot');
			setTextSlideHeight();
		}
	}
	function tSlideChangerLeft() {
		if ($(''+ sliderName +' .current-t-slide').prev().hasClass('t-slide') && tSliderHasStopped()) {
			$(''+ sliderName +' .current-t-slide').removeClass('current-t-slide').css($hiddenSlideStylesRight).prev().css($tSlideInStyles).addClass('current-t-slide');
			$(''+ sliderName +' .current-dot').removeClass('current-dot').prev().addClass('current-dot');
			setTextSlideHeight();
		} else if (tSliderHasStopped()) {
			$(''+ sliderName +' .current-t-slide').removeClass('current-t-slide');
			$(''+ sliderName +' .t-slide').last().addClass('current-t-slide').css($tSlideInStyles);
			tSetCssLeft();
			$(''+ sliderName +' .current-dot').removeClass('current-dot')
			$(''+ sliderName +' .t-dot').last().addClass('current-dot');
			setTextSlideHeight();
		}
	}

	function tSetCss() {
		$(''+ sliderName +' .t-slide').each(function(index, value) {
			if (index > 0) {
				$(this).css($hiddenSlideStylesRight);
			}
		});
	}
	function tSetCssLeft() {
		$t_total = $(''+ sliderName +' .t-slide').length - 1;
		$(''+ sliderName +' .t-slide').each(function(index, value) {
			if (index < $t_total) {
				$(this).css($hiddenSlideStylesLeft)
			}
		});
	}


	//populate dots for every slide
	$(''+ sliderName +' .t-slide').each(function(index, value) {
		$(''+ sliderName +' .t-slide-dots').append('<div class="t-dot"></div>');
		if (index === 0) {$(''+ sliderName +' .t-dot').first().addClass('current-dot')}
	});

	//slider-code
	$tSliderHeight = $(''+ sliderName +'.trent-slider').width() / 2;
	if ($tSliderHeight > 650) {
		$('.t-slide').each(function(index, value) {
				$src = $('.t-slide').eq(index).find('img').attr('src');
				$slideBgStyles = {backgroundImage: 'url(' + $src + ')', backgroundSize: 'cover',backgroudRepeat: 'no-repeat',backgroundPosition: 'center'}
				$(this).css($slideBgStyles);
				$(this).find('img').first().hide();
		});
		$tSliderHeight = 650;
	}
	$(sliderName).css('height', $tSliderHeight);
	setTextSlideHeight();
	tSetCss();
	//load bar 
	tStartLoadBar();
	//interval sllide change
	var tSlideChange = window.setInterval(function() {
		tSlideChangerRight();
	}, 4500);
	$(sliderName).mouseover(function() {
		$(''+ sliderName +' .t-load-bar .inner-load-bar').css($t_loadBarStopStyles);
		clearInterval(tSlideChange);
	}).mouseout(function() {
			$(''+ sliderName +' .t-load-bar .inner-load-bar').css($t_loadBarStopStyles);
			tStartLoadBar();
			clearInterval(tSlideChange);
			tSlideChange = window.setInterval(function() {
				tSlideChangerRight();
			},4500);
	});


	// -----slider controls
	//arrow
	$(''+ sliderName +' .t-slider-controls .arrow').click(function() {
		if ($(this).hasClass('right-arrow')) {tSlideChangerRight();}
		else if ($(this).hasClass('left-arrow')) {tSlideChangerLeft();}
	});
	//dots 
	$(''+ sliderName +' .t-slide-dots .t-dot').click(function() {
		$newDotIndex = $(this).index();
		$currentDotIndex = $(''+ sliderName +' .current-dot').index();
		if (tSliderHasStopped()) {
			$(''+ sliderName +' .t-slide').each(function(index, value) {
				$(''+ sliderName +' .current-dot').removeClass('current-dot');
				$(''+ sliderName +' .current-t-slide').removeClass('current-t-slide');
				$(''+ sliderName +' .t-dot').eq($newDotIndex).addClass('current-dot');
				$(''+ sliderName +' .t-slide').eq($newDotIndex).css($tSlideInStyles).addClass('current-t-slide');
				if (index > $newDotIndex) {
					$(this).css($hiddenSlideStylesRight);
				} else if (index < $newDotIndex) {
					$(this).css($hiddenSlideStylesLeft);
				}
			});
			setTextSlideHeight();
		}
	});
}//close slider JS

tRunSlider('.main-slider')
tRunSlider('.secondary-slider');
tRunSlider('.third-slider');
});
		</script>
</body>
</html>
