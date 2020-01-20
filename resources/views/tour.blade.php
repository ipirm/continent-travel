@extends('layouts.app') @section('pageTitle', ' - Tour') @section('content')
    <section class="about-header" style="background-image: url('/img/Central-Park.png');"  data-aos="fade-down">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="about-header__card"><span>@lang('translate.tour')</span></div>
                </div>
            </div>
        </div>
    </section>
    <section class="tour-slider">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 ml-auto">
                    <div class="tour-slider__title_ref"><span>{{ $tour->title }}</span>
                       @if($tour->subtitle) <p class="mt-2">( {{ $tour->subtitle }} )</p> @endif
                    </div>
                </div>
            </div>
            <div class="row tour-slider__card mt-3">
                @include('sections.slider_card')
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="tour-slider__sidebar">
                        <div class="tour-slider__title"><span>@lang('translate.include')</span></div>
                        <div class="tour-slider__body">
                            <ol> @foreach(json_decode($tour->details) as $detail)
                                    <li>{{ $detail->key }}  {{ $detail->value }}</li> @endforeach</ol>
                            <a class="tour-slider_btn" href="javascript:void(0);"> <span>@lang('translate.cost')</span>
                                <p>{{ $tour->price }} $</p></a></div>
                    </div>
                </div>
            </div>
            <div class="row tour-detail" data-aos="zoom-in">
                <div class="col-lg-12" >
                    <div class="tour-detail__title"><span>@lang('translate.tour_detail')</span></div>
                    <div class="tour-detail__underline"></div>
                </div>
            </div>
            <div class="row tour-subtext" data-aos="zoom-in">
                <div class="col-lg-12">
                    <div class="tour-subtext__text"> {!! $tour->about_tour !!}</div>
                    @if(json_decode($tour->days))  <div class="tour-subtext__underline"></div> @endif
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="tour-days__row"> @foreach(json_decode($tour->days) as $day)
                            <div class="col-lg-6" data-aos="fade-down">
                                <div class="tour-days__item">
                                    <div class="tour-days__title"> @lang('translate.day') {{ $loop->iteration }}</div>
                                    <div class="tour-days__body"> {{ $day->value }}</div>
                                </div>
                            </div> @endforeach</div>
                </div>
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
                        <div class="swiper-slide__price"><span>{{ $item->price }} $</span></div>
                        <div class="swiper-slide__item__content">
                            <div class="swiper-slide__item__text"><p class="swiper-slide__title">{{ $item->title }}</p>
                                <div class="swiper-slide__subtitle">{!! $item->about_tour !!}</div>
                            </div>
                        </div>
                    </div>
                </a> @endforeach</div>
        </div>
    </section>
    <style>.swiper-slide__show::after {
            content: '@lang('translate.show_more')';
            font-family: 'Nunito', sans-serif;
            position: absolute;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 16px;
            color: #fff;
            font-weight: bold;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 98;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5)
        }</style>@endsection
