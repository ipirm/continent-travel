@extends('layouts.app') @section('pageTitle', ' - Service')
@section('content')
    <section class="about-header" style="background-image: url('/img/maxresdefault 1.png');" data-aos="fade-down">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="about-header__card"><span>Service</span></div>
                </div>
            </div>
        </div>
    </section>
        <section class="services-page_section">
        <div class="services-page_content_title" data-aos="fade-up">
            <div class="services-page_content_logo" style="background-image:url('/storage/{{ $activity->image }}')"></div>
            <p>{{ $activity->title }}</p>
        </div>
        <div class="services-page_content">
            <div class="services-page_content_frame" data-aos="fade-right">
                <div class="services-page_content_rgb"><img src="/storage/{{ $activity->big_image }}" alt="wedding"></div>
            </div>
            <div class="services-page_content_text_frame" data-aos="fade-left">
                <p> {!! $activity->text !!}</p>
            </div>
        </div>
    </section>
    <section class="rated-overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" data-aos="fade-right">
                    <div class="rated-overlay__title" style="margin-top: 30px"><span>@lang('translate.rated_top')</span></div>
                </div>
            </div>
        </div>
        <div class="swiper-container" id="js-swiper__rated">
            <div class="swiper-wrapper"> @foreach($tours_mains as $item) <a href="/tour/{{ $item->slug }}"
                                                                            class="swiper-slide" data-aos="zoom-in">
                    <div class="swiper-slide__item"
                         @foreach(json_decode($item->images) as $image) @if($loop->first) style="background-image: url('{{ $image->url }}')" @endif @endforeach >
                        <div class="swiper-slide__item__content">
                            <div class="swiper-slide__item__text"><p class="swiper-slide__title">{{ $item->title }}</p>
                                <div class="swiper-slide__subtitle">{!! $item->about_tour !!}</div>
                            </div>
                        </div>
                        <div class="swiper-slide__price"><span>{{ $item->price }} $</span></div>
                    </div>
                </a> @endforeach</div>
        </div>
    </section>
@endsection

