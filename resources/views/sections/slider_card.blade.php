<div class="col-lg-6" data-aos="fade-right">
    <div class="swiper-container" id="main-slider">
        <div class="swiper-wrapper"> @foreach(json_decode($tour-> images) as $image)
                <a data-fancybox="gallery"
                   class="swiper-slide"
                   href="{{ $image->url }}"
                   style="background-image: url('{{ $image->url }}')">
                </a>
            @endforeach
        </div>
    </div>
    <div class="swiper-container" id="main-slider2">
        <div data-fancybox="gallery" href="{{ $image->url }}" class="swiper-wrapper">
            @foreach(json_decode($tour-> images) as $image)
                @if ($loop->iteration <3)
                    <a class="swiper-slide" style="background-image: url('{{ $image->url }}')">
            </a>
            @endif
                    @if ($loop->iteration ===3)
            <a
                    data-fancybox="gallery" href="{{ $image->url }}" class="swiper-slide__show"> <img src="{{ $image->url }}">
            </a>
        </div>
        @endif
        @endforeach
    </div>
</div>
