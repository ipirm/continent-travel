"use strict";

if (document.querySelectorAll('#js-slider__blur') !== null) {
    var mySwiper = new Swiper('#js-slider__blur', {
        speed: 400,
        effect: 'fade',
        autoplay: true
    });
}

if (document.querySelectorAll('.tour-days__item') !== null) {
    $(document).ready(function () {
        var items = document.querySelectorAll('.tour-days__item');
        items.forEach(function (item, i) {
            if (i % 2 !== 0) item.classList.add('ml-auto');
        });
    });
}

if (document.querySelector('#main-slider') !== null && document.querySelector('#main-slider2') !== null) {
    $(document).ready(function () {
        var swiper3 = new Swiper('#main-slider', {
            slidesPerView: 1,
            effect: 'fade'
        });
        var swiper4 = new Swiper('#main-slider2', {
            slidesPerView: 2,
            clickable: true
        });
        document.querySelectorAll('#main-slider2 .swiper-slide').forEach(function (item, i) {
            item.onmouseover = function (e) {
                item.setAttribute('data-index', "".concat(i));
                swiper3.slideTo(e.target.getAttribute('data-index'));
                document.querySelector('.swiper-slide[data-index="' + e.target.getAttribute('data-index') + '"]').classList.add('active-slide__btn');
            };

            item.onmouseout = function () {
                swiper3.slideTo(0);
                document.querySelector('.swiper-slide[data-index="0"]').classList.add('active-slide__btn');
                if (item.classList.contains('active-slide__btn')) item.classList.remove('active-slide__btn');
            };
        });
        document.querySelector('#main-slider2 .swiper-slide').classList.add('active-slide__btn');
    });
}

if (document.querySelector('.grid') !== null) {
    $(document).ready(function () {
        var container = document.querySelector('.grid');
        var msnry;
        imagesLoaded(container, function () {
            msnry = new Masonry(container);

            itemSelector: '.item';
        });
    });
}

$(document).ready(function () {
    $(".datepicker").datepicker();
    $(".date__input").datepicker();
    $(".date__input").datepicker();
});
$(document).ready(function () {
    function getRandomInt(max) {
        return Math.floor(Math.random() * Math.floor(max));
    }

    $('.sidebar-body__tag ').each(function () {
        $(this).css({
            "left": getRandomInt(300),
            "top": getRandomInt(200)
        });
    });
});

if (document.querySelector('.sidebar_tours') !== null) {
    $(document).ready(function () {
        var ps = new PerfectScrollbar('.sidebar_tours', {
            wheelSpeed: 2,
            wheelPropagation: true,
            minScrollbarLength: 20
        });
        ps.update();
    });
}

if (document.querySelector('#js-services_slider') !== null) {
    var mySwiper5 = new Swiper('#js-services_slider', {
        speed: 400,
        slidesPerView: 6,
        loop: true,
        spaceBetween: 93,
        autoplay: true,
        breakpoints: {
            500: {
                slidesPerView: 1,
                spaceBetween: 0,
                loop: true
            }
        }
    });
}

if (document.querySelector('#js-services_slider2') !== null) {
    var mySwiper6 = new Swiper('#js-services_slider2', {
        speed: 400,
        slidesPerView: 6,
        loop: true,
        spaceBetween: 93,
        autoplay: true,
        breakpoints: {
            500: {
                slidesPerView: 1,
                spaceBetween: 0,
                loop: true
            }
        }
    });
}

if (document.querySelector('#js-swiper__rated') !== null) {
    var swiper28 = new Swiper('#js-swiper__rated', {
        slidesPerView: 4,
        spaceBetween: 30,
        autoplay: true,
        centeredSlides: true,
        loop: true,
        loopedSlides: 50,
        breakpoints: {
            500: {
                slidesPerView: 1,
                spaceBetween: 40
            }
        }
    });
}

if (document.querySelector('.tours-overlay__item') !== null) {
    document.querySelectorAll('.tours-overlay__item').forEach(function (item) {
        item.onmouseover = function () {
            item.classList.add('active-tours__list');
        };

        item.onmouseout = function () {
            item.classList.remove('active-tours__list');
        };
    });
}

if (document.querySelector('.swiper-slide__item') !== null) {
    document.querySelectorAll('.swiper-slide__item').forEach(function (item) {
        item.onmouseover = function () {
            item.classList.add('swiper-slide__item__active');
        };

        item.onmouseout = function () {
            item.classList.remove('swiper-slide__item__active');
        };
    });
}

if (document.querySelector('.triangle-down__text span') !== null) {
    var text = document.querySelector('.triangle-down__text span');

    if (text.innerText.length > 150) {
        var new_text = text.innerHTML.substr(0, 140);
        text.innerText = "".concat(new_text, "...");
    }
}

if (document.querySelector('.contact-col span') !== null) {
    var _text = document.querySelector('.contact-col span');

    if (_text.innerText.length > 90) {
        var _new_text = _text.innerHTML.substr(0, 90);

        _text.innerText = "".concat(_new_text, "...");
    }
}

if (document.querySelector('#form') !== null) {
    var form = document.querySelector('#form');
    document.querySelectorAll('.sidebar-body__input').forEach(function (item) {
        item.addEventListener("keyup", function (event) {
            if (event.keyCode === 13) {
                if (item.value !== null) {
                    form.submit();
                }
            }
        });
    });
}

var hamburger = document.querySelector('.hamburger');

hamburger.onclick = function () {
    hamburger.classList.toggle('is-active');

    if (hamburger.classList.contains('is-active')) {
        document.querySelector('.header-menu__toggle').style.height = 190 + 'px';
    } else {
        document.querySelector('.header-menu__toggle').style.height = 0;
    }
};

if (document.querySelector('.custom-lang') !== null) {
    var lang = document.querySelector('.custom-lang');
    var lang_items = document.querySelectorAll('.custom-lang a ');
    lang_items.forEach(function (item) {
        item.onclick = function (e) {
            return e.preventDefault();
        };
    });

    lang.onmouseover = function () {
        lang.classList.add('active-lang');
        lang_items.forEach(function (item) {
            item.style.display = 'block';

            item.onclick = function () {
                window.location.href = "".concat(item.href);
            };
        });
    };

    lang.onmouseout = function () {
        if (lang.classList.contains('active-lang')) lang.classList.remove('active-lang');
    };
}

$(function () {
    document.querySelector('.mail-col__input__btn').onclick = function (e) {
        if (document.querySelector('.mail-col__target').value !== '') {
            $('#idForm').on('submit', function (e) {
                e.preventDefault();
                var forma = $('#idForm').serialize();
                $.ajax({
                    url: '/',
                    type: 'POST',
                    data: forma,
                    success: function success() {
                        document.querySelector('.ThanksForFollow').style.display = 'block';
                        document.querySelector('.mail-col__target').style.border = 'none';
                        document.querySelector('.stayUp').style.display = 'none';
                    }
                });
            });
        } else {
            e.preventDefault();
            document.querySelector('.mail-col__target').style.border = '1px solid #DE3D3D';
            document.querySelector('.ThanksForFollow').style.display = 'none';
        }
    };
});
$(function () {
    if (document.querySelector('.map-content__btn2') !== null) {
        document.querySelector('.map-content__btn2').onclick = function (event) {
            if (document.querySelector('.map-content__input[name=name]').value !== '' && document.querySelector('.map-content__input[name=surname]').value !== '' && document.querySelector('.map-content__input[name=number]').value !== '' && document.querySelector('.map-content__input[name=email]').value !== '') {
                $('#contact__form').on('submit', function (e) {
                    e.preventDefault();
                    var forma = $('#contact__form').serialize();
                    $.ajax({
                        url: '/contact',
                        type: 'POST',
                        data: forma,
                        success: function success() {
                            document.querySelectorAll('.map-content__input').forEach(function (item) {
                                item.style.border = 'none';
                            });
                            document.querySelector('.input__success').style.display = 'flex';
                        }
                    });
                });
            } else {
                event.preventDefault();

                if (document.querySelector('.map-content__input[name=name]').value == '') {
                    document.querySelector('.map-content__input[name=name]').style.border = '1px solid red';
                }

                if (document.querySelector('.map-content__input[name=surname]').value == '') {
                    document.querySelector('.map-content__input[name=surname]').style.border = '1px solid red';
                }

                if (document.querySelector('.map-content__input[name=email]').value == '') {
                    document.querySelector('.map-content__input[name=email]').style.border = '1px solid red';
                }

                if (document.querySelector('.map-content__input[name=number]').value == '') {
                    document.querySelector('.map-content__input[name=number]').style.border = '1px solid red';
                }
            }
        };
    }
    if (document.querySelector('.tours-overlay__title') !== null) {
        let title = document.querySelector('.tours-overlay__title span').innerText.split(' ');
        let titles = title.slice(0, 2);
        document.querySelector('.tours-overlay__title span').innerText = titles.join(' ');
        document.querySelector('.tours-overlay__list p').innerText = titles.join(' ');
    }
});
if (document.querySelector('#main-slider') !== null) {
    $("#main-slider2 .swiper-slide").on("click", function () {
        $(".swiper-slide").eq(0).trigger("click");
        return false;
    });
    $(".swiper-slide__show").on("click", function () {
        $(".swiper-slide").eq(0).trigger("click");
        return false;
    });
}
if (document.querySelector('#form22 input[name=price]') !== null) {
    $('.dropdown').click(function () {
        $(this).attr('tabindex', 1).focus();
        $(this).toggleClass('active');
        $(this).find('.dropdown-menu').slideToggle(300);
    });
    $('.dropdown').focusout(function () {
        $(this).removeClass('active');
        $(this).find('.dropdown-menu').slideUp(300);
    });
    $('.dropdown .dropdown-menu li').click(function () {
        $(this).parents('.dropdown').find('span').text($(this).text());
        $(this).parents('.dropdown').find('input').attr('value', $(this).attr('id'));
        ajaxPost();
    });
    $(".datepicker").inputmask();


    const name = document.querySelector('#form22 input[name=title]');
    const price = document.querySelector('#form22 input[name=price]');
    const city = document.querySelector('#form22 input[name=city]');
    const type = document.querySelector('#form22 input[name=type]');
    const day1 = document.querySelector('#form22 input[name=day1]');
    const day2 = document.querySelector('#form22 input[name=day2]');

    let filters = []
    let filters2 = []
    filters.push(price, name);
    filters2.push(day1, day2);


    filters.forEach(function (item) {
        item.oninput = () => {
            ajaxPost();
        }
    });
    filters2.forEach(function (item) {
        item.onblur = () => {
            ajaxPost();
        }
    });

}

function ajaxPost() {
    var forma = $('#form22').serialize();
    $.ajax({
        type: "POST",
        url: '/tours',
        data: forma,
        success: function (data) {
            let tours = document.querySelectorAll('.tours-overlay__item');
            tours.forEach(function (item) {
                item.style.display = 'none';
            });
            data.forEach(function (item) {
                if (data !== undefined) {
                    tours.forEach(function (item2) {
                        if (item2.childNodes[5].childNodes[0].textContent === item[0]) {
                            item2.style.display = 'block'
                        }
                    });
                }
            })
        }
    });
}

function toUnicode(str) {
    return str.split('').map(function (value) {
        var temp = value.charCodeAt(0).toString(16).toLowerCase();
        if (temp.length > 2) {
            return '\\u0' + temp;
        }
        return value;
    }).join('');
}

$(".date__input").inputmask();
if (document.querySelector('.overlay-cat__button button') !== null) {
    const cat = document.querySelector('.overlay-cat__button button');
    const sidebar = document.querySelector('.tours-grid .col-lg-4');
    cat.onclick = () => {
        cat.classList.toggle('is-active');
        if (cat.classList.contains('is-active')) {
            sidebar.style.display = 'block'
        } else {
            sidebar.style.display = 'none'
        }
    }
}

document.querySelector('.custom-lang-mob').onchange = (e) => {
   let location = document.querySelector('.custom-lang-mob').options[ document.querySelector('.custom-lang-mob').selectedIndex ].getAttribute('href');
   console.log(location);
    window.location.href = location;
}
