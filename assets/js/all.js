"use strict";
var _breakpoints;
function _defineProperty(e, s, t) {
    return s in e ? Object.defineProperty(e, s, { value: t, enumerable: !0, configurable: !0, writable: !0 }) : (e[s] = t), e;
}
var swiper_banner = new Swiper(".slide-banner", {
        speed: 800,
        spaceBetween: 30,
        centeredSlides: !0,
        effect: "fade",
        autoplay: { delay: 7e3, disableOnInteraction: !1 },
        fadeEffect: { crossFade: !0 },
        pagination: { el: ".s-banner .swiper-pagination" },
    }),
    swiper_banner_v2 = new Swiper(".slide-banner-v2", {
        speed: 800,
        spaceBetween: 30,
        centeredSlides: !0,
        effect: "fade",
        autoplay: { delay: 7e3, disableOnInteraction: !1 },
        fadeEffect: { crossFade: !0 },
        pagination: { el: ".s-banner-v2 .swiper-pagination" },
    }),
    swiper_zorg = new Swiper(".slide-zorg", {
        slidesPerView: 2.3,
        spaceBetween: 33,
        speed: 800,
        navigation: { nextEl: ".s-zorg .btn-next", prevEl: ".s-zorg .btn-prev" },
        breakpoints: { 1100: { slidesPerView: 2.3 }, 700: { slidesPerView: 2 }, 500: { slidesPerView: 1.8 }, 420: { slidesPerView: 1.4 }, 375: { slidesPerView: 1.2 }, 320: { slidesPerView: 1 } },
    }),
    swiper_nieuws = new Swiper(".slide-nieuws", {
        slidesPerView: 4,
        spaceBetween: 32,
        speed: 800,
        observer: !0,
        observeParents: !0,
        pagination: { el: ".slide-nieuws .swiper-pagination", clickable: !0 },
        navigation: { nextEl: ".slide-nieuws .btn-next", prevEl: ".slide-nieuws .btn-prev" },
        breakpoints: {
            1280: { slidesPerView: 4 },
            960: { slidesPerView: 3 },
            800: { slidesPerView: 2.4 },
            720: { slidesPerView: 2.3 },
            656: { slidesPerView: 2 },
            578: { slidesPerView: 1.8 },
            530: { slidesPerView: 1.3, spaceBetween: 16 },
            375: { slidesPerView: 1.2, spaceBetween: 16 },
            330: { slidesPerView: 1, spaceBetween: 16 },
            300: { slidesPerView: 0.8, spaceBetween: 16 },
        },
    }),
    swiper_whitepapers = new Swiper(".slide-whitepapers", {
        slidesPerView: 4,
        spaceBetween: 32,
        speed: 800,
        observer: !0,
        observeParents: !0,
        pagination: { el: ".slide-whitepapers .swiper-pagination", clickable: !0 },
        navigation: { nextEl: ".slide-whitepapers .btn-next", prevEl: ".slide-whitepapers .btn-prev" },
        breakpoints: {
            1280: { slidesPerView: 4 },
            960: { slidesPerView: 3 },
            800: { slidesPerView: 2.4 },
            720: { slidesPerView: 2.3 },
            656: { slidesPerView: 2 },
            578: { slidesPerView: 1.8 },
            530: { slidesPerView: 1.3, spaceBetween: 16 },
            375: { slidesPerView: 1.2, spaceBetween: 16 },
            330: { slidesPerView: 1, spaceBetween: 16 },
            300: { slidesPerView: 0.8, spaceBetween: 16 },
        },
    }),
    swiper_klanten = new Swiper(".slide-klanten", {
        slidesPerView: 2,
        spaceBetween: 24,
        speed: 800,
        navigation: { nextEl: ".s-klanten .btn-next", prevEl: ".s-klanten .btn-prev" },
        breakpoints:
            (_defineProperty((_breakpoints = { 750: { slidesPerView: 2, spaceBetween: 24 }, 650: { slidesPerView: 1.7, spaceBetween: 8 }, 560: { slidesPerView: 1.2, spaceBetween: 8 } }), "560", { slidesPerView: 1.2, spaceBetween: 8 }),
            _defineProperty(_breakpoints, 375, { slidesPerView: 1.02, spaceBetween: 8 }),
            _defineProperty(_breakpoints, 300, { slidesPerView: 0.8, spaceBetween: 8 }),
            _breakpoints),
    }),
    swiper_tabs = new Swiper(".slide-tabs", {
        slidesPerView: 4,
        observer: !0,
        observeParents: !0,
        speed: 800,
        navigation: { nextEl: ".s-all-nieuws .btn-next", prevEl: ".s-all-nieuws .btn-prev" },
        breakpoints: {
            1201: { slidesPerView: 4, spaceBetween: 15 },
            1100: { slidesPerView: 3.6, spaceBetween: 15 },
            900: { slidesPerView: 3.3, spaceBetween: 15 },
            700: { slidesPerView: 3, spaceBetween: 15 },
            550: { slidesPerView: 2.6, spaceBetween: 15 },
            300: { slidesPerView: 2, spaceBetween: 12 },
        },
    }),
    swiper_gerelateerde = new Swiper(".slide-gerelateerde", {
        slidesPerView: 4,
        spaceBetween: 32,
        speed: 800,
        observer: !0,
        observeParents: !0,
        pagination: { el: ".slide-gerelateerde .swiper-pagination", clickable: !0 },
        navigation: { nextEl: ".slide-gerelateerde .btn-next", prevEl: ".slide-gerelateerde .btn-prev" },
        breakpoints: {
            1300: { slidesPerView: 4, spaceBetween: 32 },
            900: { slidesPerView: 3, spaceBetween: 25 },
            800: { slidesPerView: 2.6, spaceBetween: 25 },
            670: { slidesPerView: 2.2, spaceBetween: 12 },
            600: { slidesPerView: 2, spaceBetween: 12 },
            500: { slidesPerView: 1.6, spaceBetween: 12 },
            430: { slidesPerView: 1.4, spaceBetween: 12 },
            380: { slidesPerView: 1.2, spaceBetween: 12 },
            350: { slidesPerView: 1.1, spaceBetween: 12 },
            30: { slidesPerView: 1, spaceBetween: 12 },
        },
    }),
    swiper_slide = new Swiper(".slide-images", {
        slidesPerView: 2.2,
        spaceBetween: 9,
        speed: 800,
        pagination: { el: ".s-slide .swiper-pagination", clickable: !0 },
        navigation: { nextEl: ".s-slide .btn-next", prevEl: ".s-slide .btn-prev" },
        breakpoints: { 700: { slidesPerView: 2.2, spaceBetween: 9 }, 300: { slidesPerView: 1.7, spaceBetween: 3 } },
    }),
    swiper_tabs_faq = new Swiper(".slide-tabs-faq", {
        slidesPerView: 6,
        spaceBetween: 27,
        observer: !0,
        observeParents: !0,
        speed: 800,
        navigation: { nextEl: ".s-faq .btn-next", prevEl: ".s-faq .btn-prev" },
        breakpoints: {
            1060: { slidesPerView: 6, spaceBetween: 27 },
            900: { slidesPerView: 5, spaceBetween: 20 },
            740: { slidesPerView: 4, spaceBetween: 20 },
            550: { slidesPerView: 3, spaceBetween: 12 },
            300: { slidesPerView: 2, spaceBetween: 12 },
        },
    });
$(window).on("scroll", function () {
    $(window).scrollTop() ? $("header").addClass("menu-scroll") : $("header").removeClass("menu-scroll");
});
var btnMenu = document.getElementById("js-open-menu");
function activeMenu() {
    document.documentElement.classList.toggle("menu-opened");
}
btnMenu.addEventListener("click", function () {
    return activeMenu();
});
// var navTabs = document.querySelectorAll(".s-nieuws .tabs li"),
//     tabContent = document.querySelectorAll(".s-nieuws .tab-content .content");
// navTabs.forEach(function (s, t) {
//     s.addEventListener("click", function (e) {
//         e.preventDefault(),
//             navTabs.forEach(function (e) {
//                 e.classList.remove("active");
//             }),
//             tabContent.forEach(function (e) {
//                 e.classList.remove("active");
//             }),
//             tabContent[t].classList.add("active"),
//             s.classList.add("active");
//     });
// });
// var navTabsNieuws = document.querySelectorAll(".s-all-nieuws .slide-tabs .tab"),
//     tabContentNieuws = document.querySelectorAll(".s-all-nieuws .tab-content .tab-pane");
// navTabsNieuws.forEach(function (s, t) {
//     s.addEventListener("click", function (e) {
//         e.preventDefault(),
//             navTabsNieuws.forEach(function (e) {
//                 e.classList.remove("active");
//             }),
//             tabContentNieuws.forEach(function (e) {
//                 e.classList.remove("active");
//             }),
//             tabContentNieuws[t].classList.add("active"),
//             s.classList.add("active");
//     });
// });
// var navTabsFaq = document.querySelectorAll(".s-faq .slide-tabs-faq .tab"),
//     tabContentFaq = document.querySelectorAll(".s-faq .tab-content .tab-pane");
function fadeOut(e, s) {
    fade(e, s, 100, 0);
}
function fadeIn(e, s) {
    fade(e, s, 0, 100);
}
function fade(e, s, t, n) {
    var i = document.getElementById(e),
        a = t,
        r = t <= n ? 2 : -2;
    timer = (1e3 * s) / 50;
    var l = setInterval(function () {
        ((0 < r && n <= a) || (r < 0 && a <= n)) && clearInterval(l), setAlpha(i, a), (a += r);
    }, timer);
}
function setAlpha(e, s) {
    (e.style.filter = "alpha(opacity=" + s + ")"), (e.style.opacity = s / 100);
}

navTabsFaq.forEach(function (s, t) {
    s.addEventListener("click", function (e) {
        e.preventDefault(),
            navTabsFaq.forEach(function (e) {
                e.classList.remove("active");
            }),
            tabContentFaq.forEach(function (e) {
                e.classList.remove("active");
            }),
            tabContentFaq[t].classList.add("active"),
            s.classList.add("active");
    });
}),
    $(".play").modalVideo(),
    AOS.init({ duration: 1e3, once: !0, disable: "mobile" });
// var imageList = [
//     "./img/illustra_team_01.png",
//     "./img/illustra_team_02.png",
//     "./img/illustra_team_03.png",
//     "./img/illustra_team_04.png",
//     "./img/illustra_team_05.png",
//     "./img/illustra_team_06.png",
//     "./img/illustra_team_01.png",
//     "./img/illustra_team_02.png",
// ];
setInterval(function () {
    var t = (function (e) {
        for (var s, t, n = e.length; 0 !== n; ) (t = Math.floor(Math.random() * n)), (s = e[--n]), (e[n] = e[t]), (e[t] = s);
        return e;
    })(imageList);
    document.querySelectorAll(".s-team .left .photo img").forEach(function (e, s) {
        e.classList.remove("fade"),
            setTimeout(function () {
                e.setAttribute("src", t[s]), e.classList.add("fade");
            }, 1e3);
    });
}, 4e3),
    lightbox.option({ resizeDuration: 300, wrapAround: !0, positionFromTop: 300 });
var marker,
    popup,
    inputForm = document.querySelectorAll(".js-input");
inputForm.forEach(function (e) {
    e.addEventListener("focusin", function () {
        e.parentElement.classList.add("focus");
    }),
        e.addEventListener("focusout", function () {
            "" === e.value && e.parentElement.classList.remove("focus");
        });
}),
    document.getElementById("map") &&
        ((mapboxgl.accessToken = "pk.eyJ1IjoiYW1hbmRhbGFwYSIsImEiOiJjazY2cjdkcjAwNDY4M2VwODFyZnZpbDg5In0.yZurTAPPw4f1D-VkffaHpw"),
        (map = new mapboxgl.Map({ container: "map", style: "mapbox://styles/mapbox/light-v10", center: [5.9891917, 52.297697], zoom: 15 })),
        (marker = new mapboxgl.Marker().setLngLat([5.9891917, 52.297697]).addTo(map)),
        (popup = new mapboxgl.Popup({ closeOnClick: !1, closeButton: !1 })
            .setLngLat([5.9781917, 52.296697])
            .setHTML(
                '\n<a href="https://goo.gl/maps/f2Jvi2t5ksHRSLfG8" target="_blank" class="popup">\n                  <div class="text">\n                    <strong>\n                    Adres\n                    </strong>\n                      <p>\n                      Schorsweg 13e <br>\n                      8171 ME Vaassen\n                      </p>\n                  </div>\n              </a>\n          '
            )
        .addTo(map)));

var question = document.querySelectorAll(".js-faq");
question.forEach(function (e) {
    e.addEventListener("click", function () {
        e.classList.contains("active")
            ? e.classList.remove("active")
            : (question.forEach(function (e) {
                  e.classList.remove("active");
              }),
              e.classList.add("active"));
    });
});

var btnDropdownLogin = document.querySelectorAll(".js-btn-login");
btnDropdownLogin.forEach(function (s) {
    s.addEventListener("click", function (e) {
        e.preventDefault(), s.classList.toggle("active"), s.nextElementSibling.classList.toggle("active");
    });
});
var btnDropdownOverons = document.querySelectorAll(".js-btn-overons");
btnDropdownOverons.forEach(function (s) {
    s.addEventListener("click", function (e) {
        e.preventDefault(), s.classList.toggle("active"), s.nextElementSibling.classList.toggle("active");
    });
});
var btnDropdownDiensten = document.querySelectorAll(".js-btn-diensten");
btnDropdownDiensten.forEach(function (s) {
    s.addEventListener("click", function (e) {
        e.preventDefault(), s.classList.toggle("active"), s.nextElementSibling.classList.toggle("active");
    });
});
var dropdownMenu = document.querySelectorAll(".dropdown"),
    btnDropdownDisable = document.querySelectorAll(".cta-drop");
dropdownMenu.forEach(function (e) {
    e.addEventListener("mouseleave", function () {
        e.classList.remove("active"),
            btnDropdownDisable.forEach(function (e) {
                e.classList.remove("active");
            });
    });
});
var btnShowMobile = document.querySelectorAll(".js-menu");
btnShowMobile.forEach(function (s) {
    s.addEventListener("click", function (e) {
        s.classList.toggle("active");
    });
}),
    $(function () {
        setTimeout(function () {
            $(".popup").addClass("show");
        }, 3e3);
    }),
    $(".close-pop").on("click", function () {
        $(".popup").removeClass("show");
    }),
    $(function () {
        setTimeout(function () {
            $(".cookies").addClass("show");
        }, 1e3);
    }),
    $(".close").on("click", function () {
        $(".cookies").removeClass("show");
    }),
    $(".btn-form-mobile")
        .not('[href="#"]')
        .not('[href="#0"]')
        .click(function (e) {
            var s;
            location.pathname.replace(/^\//, "") != this.pathname.replace(/^\//, "") ||
                location.hostname != this.hostname ||
                ((s = (s = $(this.hash)).length ? s : $("[name=" + this.hash.slice(1) + "]")).length && (e.preventDefault(), $("html, body").animate({ scrollTop: s.offset().top - 100 }, 1e3)));
        });
