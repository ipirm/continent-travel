@extends('layouts.app') @section('pageTitle', ' - Tours') @section('content')
    <section class="about-header" style="background-image: url('/storage/aazerbajdzhan1.png');" data-aos="fade-down">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="about-header__card"><span>@lang('translate.tours')</span></div>
                </div>
            </div>
        </div>
    </section>
    <section class="tours-grid">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6" data-aos="fade-right">
                    @include('sections.default.sidebar')
                </div>
                <div class="col-lg-8 col-md-6 ml-auto">
                    <div class="overlay-cat__button">
                        <button class="hamburger hamburger--collapse" type="button">
                        <span class="hamburger-box">
                             <span class="hamburger-inner">
                             </span>
                        </span>
                        </button>
                    </div>
                    <div class="tours-overlay__row"> @include('sections.main_tours')</div>
                </div>
            </div> {{ $tours->links() }}</div>
    </section> @endsection
