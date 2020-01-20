@extends('layouts.app') @section('pageTitle', ' - Contact us') @section('content')
    <section class="about-header"
             data-aos="fade-down"
             style="background-image: url('/img/heydar-aliyev-center-3d-model-3d-model-max-obj-mtl-3ds-fbx 1.png');">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="about-header__card"><span>@lang('translate.contact_us')</span></div>
                </div>
            </div>
        </div>
    </section> @foreach($socials as $social)
        <div class="map-overlay" data-aos="zoom-in">
            <div id="map"></div>
            <div class="container map-content">
                <div class="row">
                    <div class="col-lg-12"><a href="javascript:void(0);" class="map-content__btn">
                            <span>@lang('translate.show')</span> </a></div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="map-content__text">
                            <div class="map-content__title"><span>@lang('translate.stay')</span> <span
                                        class="input__success">@lang('translate.linked')</span></div>
                            <form class="map-content__row" method="post" action=""
                                  id="contact__form"> {{ csrf_field() }}
                                <div class="map-content__col"><input class="map-content__input" name="name"
                                                                     placeholder="@lang('translate.your_name')"> <input
                                            class="map-content__input" name="email"
                                            placeholder="@lang('translate.your_mail')"></div>
                                <div class="map-content__col">
                                    <div class="map-content__overlay"><span>@lang('translate.so_so')</span></div>
                                    <button type="submit" class="map-content__btn2"><span><p>Send</p></span></button>
                                </div>
                                <div class="map-content__col"><input class="map-content__input" name="surname"
                                                                     placeholder="@lang('translate.your_surname')">
                                    <input type="number" class="map-content__input number__input" name="number"
                                           placeholder="@lang('translate.your_number')"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-12">
                        <div class="map-content__item">
                            <div class="map-content__item__col">
                                <div class="map-content__item__text">
                                    <ul>
                                        <li><a href="javascript:void(0);">
                                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M20.0585 17.9632C21.8368 17.9632 23.2784 16.5216 23.2784 14.7433C23.2784 12.965 21.8368 11.5234 20.0585 11.5234C18.2802 11.5234 16.8386 12.965 16.8386 14.7433C16.8386 16.5216 18.2802 17.9632 20.0585 17.9632Z"
                                                          fill="#43426B"/>
                                                    <path d="M20.0005 0C8.95523 0 0.00100708 8.95449 0.00100708 19.9998C0.00100708 31.0448 8.95523 40 20.0005 40C31.0458 40 40.0007 31.0448 40.0007 19.9998C40.0007 8.95449 31.0458 0 20.0005 0ZM19.9591 9.15716C19.9732 9.15716 19.9871 9.15649 20.0009 9.15582C20.0148 9.15649 20.0285 9.15716 20.0428 9.15716C23.4127 9.21036 26.1541 11.9956 26.1541 15.3663C26.1541 19.2118 22.3201 23.1024 20.3855 24.8205C20.1654 25.016 19.8356 25.0152 19.6157 24.8194C19.6133 24.8173 19.6112 24.8156 19.6092 24.8136C17.6726 23.0928 13.8479 19.2075 13.8479 15.3663C13.8478 11.9956 16.5894 9.21049 19.9591 9.15716ZM20.0877 30.967C16.3993 30.967 12.6651 29.9088 12.6651 27.8872C12.6651 26.5346 14.3363 25.6139 16.5464 25.1523C16.7509 25.1096 16.9842 25.1987 17.1333 25.345C17.5246 25.7289 17.281 26.4048 16.7453 26.5207C15.0253 26.8929 14.0485 27.4964 14.0485 27.8868C14.0485 28.4847 16.3412 29.5834 20.0877 29.5834C23.8343 29.5834 26.1274 28.4847 26.1274 27.8868C26.1274 27.4861 25.0976 26.8629 23.2936 26.4942C22.7532 26.3837 22.5044 25.7032 22.8976 25.3163C23.0455 25.1708 23.2764 25.0812 23.4799 25.1214C25.764 25.5726 27.5106 26.504 27.5106 27.8872C27.5106 29.9088 23.7764 30.967 20.0877 30.967Z"
                                                          fill="#43426B"/>
                                                </svg>
                                                <span style="max-width: 160px;">{{ $social->first_address }} </span>
                                            </a></li>
                                        <li><a href="javascript:void(0);">
                                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M20.0585 17.9632C21.8368 17.9632 23.2784 16.5216 23.2784 14.7433C23.2784 12.965 21.8368 11.5234 20.0585 11.5234C18.2802 11.5234 16.8386 12.965 16.8386 14.7433C16.8386 16.5216 18.2802 17.9632 20.0585 17.9632Z"
                                                          fill="#43426B"/>
                                                    <path d="M20.0005 0C8.95523 0 0.00100708 8.95449 0.00100708 19.9998C0.00100708 31.0448 8.95523 40 20.0005 40C31.0458 40 40.0007 31.0448 40.0007 19.9998C40.0007 8.95449 31.0458 0 20.0005 0ZM19.9591 9.15716C19.9732 9.15716 19.9871 9.15649 20.0009 9.15582C20.0148 9.15649 20.0285 9.15716 20.0428 9.15716C23.4127 9.21036 26.1541 11.9956 26.1541 15.3663C26.1541 19.2118 22.3201 23.1024 20.3855 24.8205C20.1654 25.016 19.8356 25.0152 19.6157 24.8194C19.6133 24.8173 19.6112 24.8156 19.6092 24.8136C17.6726 23.0928 13.8479 19.2075 13.8479 15.3663C13.8478 11.9956 16.5894 9.21049 19.9591 9.15716ZM20.0877 30.967C16.3993 30.967 12.6651 29.9088 12.6651 27.8872C12.6651 26.5346 14.3363 25.6139 16.5464 25.1523C16.7509 25.1096 16.9842 25.1987 17.1333 25.345C17.5246 25.7289 17.281 26.4048 16.7453 26.5207C15.0253 26.8929 14.0485 27.4964 14.0485 27.8868C14.0485 28.4847 16.3412 29.5834 20.0877 29.5834C23.8343 29.5834 26.1274 28.4847 26.1274 27.8868C26.1274 27.4861 25.0976 26.8629 23.2936 26.4942C22.7532 26.3837 22.5044 25.7032 22.8976 25.3163C23.0455 25.1708 23.2764 25.0812 23.4799 25.1214C25.764 25.5726 27.5106 26.504 27.5106 27.8872C27.5106 29.9088 23.7764 30.967 20.0877 30.967Z"
                                                          fill="#43426B"/>
                                                </svg>
                                                <span style="max-width: 160px;">{{ $social->second_address }}</span>
                                            </a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="map-content__item__col">
                                <div class="map-content__item__text">
                                    <ul>
                                        <li><a href="tel:+994{{ $social->first_number }}">
                                                <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13.001 0C5.82181 0 0.00100708 5.82081 0.00100708 13C0.00100708 20.1791 5.82181 26 13.001 26C20.1801 26 26.0008 20.179 26.0008 13C26.0009 5.82081 20.1801 0 13.001 0ZM19.8658 18.9684L18.8249 20.0095C18.6391 20.1951 18.095 20.3109 18.0775 20.3109C14.7846 20.3396 11.614 19.0462 9.2845 16.7164C6.94859 14.3792 5.65366 11.1973 5.68843 7.89331C5.68843 7.89181 5.80761 7.36325 5.99328 7.17935L7.03411 6.13836C7.41499 5.75571 8.14663 5.58279 8.65917 5.75426L8.87812 5.8273C9.38915 5.99861 9.9257 6.56366 10.0669 7.08424L10.5905 9.00589C10.7317 9.52797 10.5412 10.2707 10.1605 10.6516C9.73052 11.0816 9.54895 11.7151 9.78444 12.2757C10.5309 14.0527 11.9504 15.4725 13.7276 16.2198C14.2879 16.4555 14.9214 16.274 15.3511 15.844C15.7337 15.4613 16.4762 15.271 16.9972 15.412L18.9185 15.9375C19.4392 16.0805 20.0042 16.6137 20.1754 17.1246L20.2485 17.3467C20.4182 17.8578 20.2466 18.5893 19.8658 18.9684Z"
                                                          fill="#43426B"/>
                                                </svg>
                                                <span>0{{ $social->first_number }}</span> </a></li>
                                        <li><a href="tel:+994{{ $social->second_number }}">
                                                <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13.001 0C5.82181 0 0.00100708 5.82081 0.00100708 13C0.00100708 20.1791 5.82181 26 13.001 26C20.1801 26 26.0008 20.179 26.0008 13C26.0009 5.82081 20.1801 0 13.001 0ZM19.8658 18.9684L18.8249 20.0095C18.6391 20.1951 18.095 20.3109 18.0775 20.3109C14.7846 20.3396 11.614 19.0462 9.2845 16.7164C6.94859 14.3792 5.65366 11.1973 5.68843 7.89331C5.68843 7.89181 5.80761 7.36325 5.99328 7.17935L7.03411 6.13836C7.41499 5.75571 8.14663 5.58279 8.65917 5.75426L8.87812 5.8273C9.38915 5.99861 9.9257 6.56366 10.0669 7.08424L10.5905 9.00589C10.7317 9.52797 10.5412 10.2707 10.1605 10.6516C9.73052 11.0816 9.54895 11.7151 9.78444 12.2757C10.5309 14.0527 11.9504 15.4725 13.7276 16.2198C14.2879 16.4555 14.9214 16.274 15.3511 15.844C15.7337 15.4613 16.4762 15.271 16.9972 15.412L18.9185 15.9375C19.4392 16.0805 20.0042 16.6137 20.1754 17.1246L20.2485 17.3467C20.4182 17.8578 20.2466 18.5893 19.8658 18.9684Z"
                                                          fill="#43426B"/>
                                                </svg>
                                                <span>0{{ $social->second_number }}</span> </a></li>
                                        <li><a href="mailto:{{ $social->mail }}">
                                                <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13.0007 0C5.82125 0 0.00100708 5.82042 0.00100708 12.9999C0.00100708 20.1791 5.82125 26 13.0007 26C20.1802 26 26.0008 20.1791 26.0008 12.9999C26.0008 5.82042 20.1802 0 13.0007 0ZM11.8358 5.29271C12.5489 4.84803 13.453 4.84803 14.1661 5.29271C16.0444 6.46394 15.2145 9.36321 13.001 9.36321C10.7874 9.36321 9.95756 6.46394 11.8358 5.29271ZM20.7897 17.0231C20.7897 17.0233 20.7895 17.0235 20.7893 17.0235C20.7891 17.0235 20.7889 17.0237 20.7889 17.0239C20.7887 17.7931 20.1652 18.4164 19.396 18.4164H6.60594C5.8365 18.4164 5.21302 17.7928 5.21302 17.0235V9.66846C5.21302 9.55398 5.34099 9.49639 5.43813 9.55696L12.585 14.0134C12.594 14.0191 12.6036 14.0229 12.6129 14.0281C12.6226 14.0335 12.6325 14.0387 12.6423 14.0436C12.6942 14.0704 12.7477 14.092 12.8024 14.1061C12.808 14.1077 12.8137 14.1083 12.8193 14.1096C12.8793 14.1238 12.94 14.1326 13.0007 14.1326H13.0011C13.0016 14.1326 13.002 14.1326 13.002 14.1326C13.002 14.1326 13.002 14.1326 13.002 14.1326C13.0627 14.1326 13.1234 14.124 13.1834 14.1096C13.189 14.1083 13.1947 14.1077 13.2003 14.1061C13.2549 14.092 13.3082 14.0704 13.3604 14.0436C13.3703 14.0387 13.3801 14.0335 13.3898 14.0281C13.399 14.0229 13.4087 14.0191 13.4177 14.0134L20.5646 9.55696C20.6617 9.49639 20.7897 9.55398 20.7897 9.66846V17.0231Z"
                                                          fill="#43426B"/>
                                                </svg>
                                                <span>{{ $social->mail }}</span> </a></li>
                                        <li><a href="{{ $social->facebook_url }}">
                                                <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M22.1914 0H3.80859C1.70871 0 0 1.70871 0 3.80859V22.1914C0 24.2913 1.70871 26 3.80859 26H11.4766V16.8086H8.42969V12.2383H11.4766V9.14062C11.4766 6.62041 13.5267 4.57031 16.0469 4.57031H20.668V9.14062H16.0469V12.2383H20.668L19.9062 16.8086H16.0469V26H22.1914C24.2913 26 26 24.2913 26 22.1914V3.80859C26 1.70871 24.2913 0 22.1914 0Z"
                                                          fill="#43426B"/>
                                                </svg>
                                                <span>{{ $social->facebook }}</span> </a></li>
                                        <li><a href="{{ $social->instagram_url }}">
                                                <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M18.962 0H7.03795C3.15716 0 0 3.15716 0 7.03795V18.9622C0 22.8428 3.15716 26 7.03795 26H18.9622C22.8428 26 26 22.8428 26 18.9622V7.03795C26 3.15716 22.8428 0 18.962 0V0ZM13 20.1091C9.07991 20.1091 5.89081 16.92 5.89081 13C5.89081 9.07991 9.07991 5.89081 13 5.89081C16.92 5.89081 20.1091 9.07991 20.1091 13C20.1091 16.92 16.92 20.1091 13 20.1091ZM20.2791 7.56738C19.1207 7.56738 18.1785 6.62515 18.1785 5.46671C18.1785 4.30827 19.1207 3.36584 20.2791 3.36584C21.4376 3.36584 22.38 4.30827 22.38 5.46671C22.38 6.62515 21.4376 7.56738 20.2791 7.56738Z"
                                                          fill="#43426B"/>
                                                    <path d="M13 7.41504C9.92057 7.41504 7.41504 9.92037 7.41504 13C7.41504 16.0794 9.92057 18.5849 13 18.5849C16.0796 18.5849 18.5849 16.0794 18.5849 13C18.5849 9.92037 16.0796 7.41504 13 7.41504Z"
                                                          fill="#43426B"/>
                                                    <path d="M20.2791 4.89062C19.9613 4.89062 19.7027 5.14929 19.7027 5.46707C19.7027 5.78485 19.9613 6.04352 20.2791 6.04352C20.5971 6.04352 20.8558 5.78505 20.8558 5.46707C20.8558 5.14909 20.5971 4.89062 20.2791 4.89062Z"
                                                          fill="#43426B"/>
                                                </svg>
                                                <span>{{ $social->instagram }}</span> </a></li>
                                        <li><a href="{{ $social->youtube_url }}">
                                                <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M11.3807 15.4355L15.6095 13L11.3807 10.5645V15.4355Z"
                                                          fill="#43426B"/>
                                                    <path d="M13 0C5.8214 0 0 5.8214 0 13C0 20.1786 5.8214 26 13 26C20.1786 26 26 20.1786 26 13C26 5.8214 20.1786 0 13 0ZM21.123 13.0133C21.123 13.0133 21.123 15.6497 20.7886 16.9211C20.6011 17.6169 20.0524 18.1656 19.3566 18.3529C18.0853 18.6875 13 18.6875 13 18.6875C13 18.6875 7.92802 18.6875 6.64342 18.3396C5.94756 18.1523 5.39888 17.6034 5.21143 16.9076C4.87679 15.6497 4.87679 13 4.87679 13C4.87679 13 4.87679 10.3637 5.21143 9.09242C5.39868 8.39656 5.96085 7.8344 6.64342 7.64714C7.91473 7.3125 13 7.3125 13 7.3125C13 7.3125 18.0853 7.3125 19.3566 7.66043C20.0524 7.84769 20.6011 8.39656 20.7886 9.09242C21.1365 10.3637 21.123 13.0133 21.123 13.0133Z"
                                                          fill="#43426B"/>
                                                </svg>
                                                <span>{{ $social->youtube }}</span> </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>var map;
            var marker;
            var myLatLng;
            if (document.querySelector('#map') !== null) {
                function initMap() {
                    let text = '{{ $social->location }}';
                    let text_position = text.split('').indexOf('|');
                    let full_location = text.substr(text_position + 1).split(',');
                    myLatLng = {lat: parseFloat(full_location[0]), lng: parseFloat(full_location[1])};
                    map = new google.maps.Map(document.getElementById('map'), {
                        center: myLatLng,
                        zoom: 8,
                        disableDefaultUI: true,
                        styles: [{
                            "featureType": "administrative",
                            "elementType": "all",
                            "stylers": [{"visibility": "on"}, {"lightness": 10}]
                        }, {
                            "featureType": "landscape",
                            "elementType": "all",
                            "stylers": [{"color": "#e7ecef"}, {"visibility": "on"}]
                        }, {
                            "featureType": "landscape",
                            "elementType": "labels.text",
                            "stylers": [{"visibility": "off"}]
                        }, {
                            "featureType": "landscape.natural.landcover",
                            "elementType": "all",
                            "stylers": [{"visibility": "on"}]
                        }, {
                            "featureType": "landscape.natural.landcover",
                            "elementType": "geometry.fill",
                            "stylers": [{"color": "#43426B"}]
                        }, {
                            "featureType": "poi",
                            "elementType": "all",
                            "stylers": [{"visibility": "off"}]
                        }, {
                            "featureType": "poi",
                            "elementType": "labels.text",
                            "stylers": [{"visibility": "on"}]
                        }, {
                            "featureType": "poi",
                            "elementType": "labels.text.fill",
                            "stylers": [{"color": "#43426B"}]
                        }, {
                            "featureType": "poi.attraction",
                            "elementType": "all",
                            "stylers": [{"visibility": "off"}]
                        }, {
                            "featureType": "poi.business",
                            "elementType": "all",
                            "stylers": [{"visibility": "on"}]
                        }, {
                            "featureType": "poi.business",
                            "elementType": "labels.icon",
                            "stylers": [{"visibility": "off"}]
                        }, {
                            "featureType": "poi.government",
                            "elementType": "all",
                            "stylers": [{"visibility": "off"}]
                        }, {
                            "featureType": "poi.park",
                            "elementType": "geometry",
                            "stylers": [{"color": "#e3eed3"}]
                        }, {
                            "featureType": "poi.park",
                            "elementType": "labels",
                            "stylers": [{"visibility": "on"}, {"lightness": 20}]
                        }, {
                            "featureType": "road",
                            "elementType": "all",
                            "stylers": [{"lightness": 20}]
                        }, {
                            "featureType": "road",
                            "elementType": "labels.text",
                            "stylers": [{"visibility": "on"}]
                        }, {
                            "featureType": "road.highway",
                            "elementType": "geometry",
                            "stylers": [{"color": "#83a5b0"}]
                        }, {
                            "featureType": "road.arterial",
                            "elementType": "geometry",
                            "stylers": [{"color": "#bdcdd3"}]
                        }, {
                            "featureType": "road.local",
                            "elementType": "geometry",
                            "stylers": [{"color": "#ffffff"}]
                        }, {
                            "featureType": "water",
                            "elementType": "all",
                            "stylers": [{"visibility": "on"}, {"color": "#b5cbe4"}]
                        }]
                    });
                    marker = new google.maps.Marker({
                        position: myLatLng,
                        map: map,
                        icon: {url: "../img/google_marker.svg", scaledSize: new google.maps.Size(60, 60),}
                    });
                    map.addListener('center_changed', function () {
                        window.setTimeout(function () {
                            map.panTo(marker.getPosition());
                        }, 3000);
                    });
                }
            }
            if (document.querySelector('.map-content__btn') !== null) {
                document.querySelector('.map-content__btn').onclick = () => {
                    document.querySelector('.map-content').classList.toggle('active-map');
                    if (document.querySelector('.map-content').classList.contains('active-map')) {
                        setTimeout(function () {
                            map.setZoom(14);
                            marker.icon.scaledSize.width = 50;
                            marker.icon.scaledSize.height = 50;
                        }, 1000);
                        setTimeout(function () {
                            map.setZoom(17);
                            marker.icon.scaledSize.width = 40;
                            marker.icon.scaledSize.height = 40;
                        }, 2000);
                        marker.icon.scaledSize.width = 60;
                        marker.icon.scaledSize.height = 60;
                        map.setZoom(11);
                        map.setCenter(marker.getPosition());
                    } else {
                        setTimeout(function () {
                            map.setZoom(11);
                            marker.icon.scaledSize.width = 50;
                            marker.icon.scaledSize.height = 50;
                        }, 1000);
                        setTimeout(function () {
                            marker.icon.scaledSize.width = 60;
                            marker.icon.scaledSize.height = 60;
                            map.setZoom(7);
                        }, 2000);
                        marker.icon.scaledSize.width = 40;
                        marker.icon.scaledSize.height = 40;
                        map.setZoom(14);
                        map.setCenter(marker.getPosition());
                    }
                    if (document.querySelector('.map-content').classList.contains('active-map')) {
                        setTimeout(function () {
                            document.querySelector('.map-content').childNodes[3].style.display = 'none';
                            document.querySelector('.map-content').childNodes[5].style.display = 'none';
                        }, 1000);
                    } else {
                        document.querySelector('.map-content').childNodes[3].style.display = 'block';
                        document.querySelector('.map-content').childNodes[5].style.display = 'block';
                    }
                    if (document.querySelector('.map-content__btn span').innerHTML === "@lang('translate.hide')") {
                        document.querySelector('.map-content__btn span').innerHTML = "@lang('translate.show')";
                    } else {
                        document.querySelector('.map-content__btn span').innerHTML = "@lang('translate.hide')";
                    }
                };
            }</script> @endforeach @endsection

