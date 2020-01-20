<section class="header-main__slider" data-aos="zoom-in">
    <div class="swiper-container" id="js-slider__blur">
        <div class="swiper-wrapper"> @foreach($sliders as $slider)
                <div class="swiper-slide" style="background-image: url('/storage/{{ $slider->image }}')">
                    <div class="swiper-main__content"><span>{{ $slider->title }}</span>
                        <p>{{ $slider->subtitle }}</p></div>
                </div> @endforeach</div>
    </div>
</section>
