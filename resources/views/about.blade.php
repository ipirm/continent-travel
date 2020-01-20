@extends('layouts.app') @section('pageTitle', ' - About') @section('content')
    <div>
        <section class="about-header" style="background-image: url('/img/maxresdefault 1.png');" data-aos="fade-down">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="about-header__card"><span>@lang('translate.about_us')</span></div>
                    </div>
                </div>
            </div>
        </section> @foreach($abouts as $about)
            <section class="about-us__content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6" data-aos="fade-down-right">
                            <div class="about-us__content__text"> {!! $about->about_text !!}</div>
                        </div>
                        <div class="col-lg-6"  data-aos="fade-up-left"><img class="img-fluid" src='/storage/{{ $about->background}}'></div>
                    </div>
                    <div class="row our_benefits"  data-aos="fade-up">
                        <div class="col-lg-12 text-center"><p class="about-us__content__title">
                            <h2>{!! $about-> title!!}</h2></p></div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-lg-10" style="margin: auto" data-aos="zoom-in"><p
                                    class="about-us__content__subtext"> {!! $about-> possibility_text !!}</p></div>
                    </div>
                </div>
            </section> @include('sections.default.about_us_tours') @endforeach</div> @endsection
