var swiper_banner = new Swiper(".slide-banner", {
  speed: 800,
  spaceBetween: 30,
  centeredSlides: true,
  effect: "fade",
  autoplay: {
    delay: 7000,
    disableOnInteraction: false,
  },
  fadeEffect: {
    crossFade: true,
  },
  pagination: {
    el: ".s-banner .swiper-pagination",
  },
});

var swiper_banner_v2 = new Swiper(".slide-banner-v2", {
  speed: 800,
  spaceBetween: 30,
  centeredSlides: true,
  effect: "fade",
  autoplay: {
    delay: 7000,
    disableOnInteraction: false,
  },
  fadeEffect: {
    crossFade: true,
  },
  pagination: {
    el: ".s-banner-v2 .swiper-pagination",
  },
});

var swiper_zorg = new Swiper(".slide-zorg", {
  slidesPerView: 2.3,
  spaceBetween: 33,
  speed: 800,
  navigation: {
    nextEl: ".s-zorg .btn-next",
    prevEl: ".s-zorg .btn-prev",
  },
  breakpoints: {
    1100: {
      slidesPerView: 2.3,
    },
    700: {
      slidesPerView: 2,
    },
    500: {
      slidesPerView: 1.8,
    },
    420: {
      slidesPerView: 1.4,
    },
    375: {
      slidesPerView: 1.2,
    },
    320: {
      slidesPerView: 1,
    },
  },
});

var swiper_nieuws = new Swiper(".slide-nieuws", {
  slidesPerView: 4,
  spaceBetween: 32,
  speed: 800,
  observer: true,
  observeParents: true,
  pagination: {
    el: ".slide-nieuws .swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".slide-nieuws .btn-next",
    prevEl: ".slide-nieuws .btn-prev",
  },
  breakpoints: {
    1280: {
      slidesPerView: 4,
    },
    960: {
      slidesPerView: 3,
    },
    800: {
      slidesPerView: 2.4,
    },
    720: {
      slidesPerView: 2.3,
    },
    656: {
      slidesPerView: 2,
    },
    578: {
      slidesPerView: 1.8,
    },
    530: {
      slidesPerView: 1.3,
      spaceBetween: 16,
    },
    375: {
      slidesPerView: 1.2,
      spaceBetween: 16,
    },
    330: {
      slidesPerView: 1,
      spaceBetween: 16,
    },
    300: {
      slidesPerView: 0.8,
      spaceBetween: 16,
    },
  },
});

var swiper_whitepapers = new Swiper(".slide-whitepapers", {
  slidesPerView: 4,
  spaceBetween: 32,
  speed: 800,
  observer: true,
  observeParents: true,
  pagination: {
    el: ".slide-whitepapers .swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".slide-whitepapers .btn-next",
    prevEl: ".slide-whitepapers .btn-prev",
  },
  breakpoints: {
    1280: {
      slidesPerView: 4,
    },
    960: {
      slidesPerView: 3,
    },
    800: {
      slidesPerView: 2.4,
    },
    720: {
      slidesPerView: 2.3,
    },
    656: {
      slidesPerView: 2,
    },
    578: {
      slidesPerView: 1.8,
    },
    530: {
      slidesPerView: 1.3,
      spaceBetween: 16,
    },
    375: {
      slidesPerView: 1.2,
      spaceBetween: 16,
    },
    330: {
      slidesPerView: 1,
      spaceBetween: 16,
    },
    300: {
      slidesPerView: 0.8,
      spaceBetween: 16,
    },
  },
});

var swiper_klanten = new Swiper(".slide-klanten", {
  slidesPerView: 2,
  spaceBetween: 24,
  speed: 800,

  navigation: {
    nextEl: ".s-klanten .btn-next",
    prevEl: ".s-klanten .btn-prev",
  },

  breakpoints: {
    750: {
      slidesPerView: 2,
      spaceBetween: 24,
    },
    650: {
      slidesPerView: 1.7,
      spaceBetween: 8,
    },
    560: {
      slidesPerView: 1.2,
      spaceBetween: 8,
    },
    560: {
      slidesPerView: 1.2,
      spaceBetween: 8,
    },
    375: {
      slidesPerView: 1.02,
      spaceBetween: 8,
    },
    300: {
      slidesPerView: 0.8,
      spaceBetween: 8,
    },
  },
});

var swiper_tabs = new Swiper(".slide-tabs", {
  slidesPerView: 4,
  observer: true,
  observeParents: true,
  speed: 800,
  navigation: {
    nextEl: ".s-all-nieuws .btn-next",
    prevEl: ".s-all-nieuws .btn-prev",
  },
  breakpoints: {
    1201: {
      slidesPerView: 4,
      spaceBetween: 15,
    },
    1100: {
      slidesPerView: 3.6,
      spaceBetween: 15,
    },
    900: {
      slidesPerView: 3.3,
      spaceBetween: 15,
    },
    700: {
      slidesPerView: 3,
      spaceBetween: 15,
    },
    550: {
      slidesPerView: 2.6,
      spaceBetween: 15,
    },
    300: {
      slidesPerView: 2,
      spaceBetween: 12,
    },
  },
});

var swiper_gerelateerde = new Swiper(".slide-gerelateerde", {
  slidesPerView: 4,
  spaceBetween: 32,
  speed: 800,
  observer: true,
  observeParents: true,
  pagination: {
    el: ".slide-gerelateerde .swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".slide-gerelateerde .btn-next",
    prevEl: ".slide-gerelateerde .btn-prev",
  },
  breakpoints: {
    1300: {
      slidesPerView: 4,
      spaceBetween: 32,
    },
    900: {
      slidesPerView: 3,
      spaceBetween: 25,
    },
    800: {
      slidesPerView: 2.6,
      spaceBetween: 25,
    },
    670: {
      slidesPerView: 2.2,
      spaceBetween: 12,
    },
    600: {
      slidesPerView: 2,
      spaceBetween: 12,
    },
    500: {
      slidesPerView: 1.6,
      spaceBetween: 12,
    },
    430: {
      slidesPerView: 1.4,
      spaceBetween: 12,
    },
    380: {
      slidesPerView: 1.2,
      spaceBetween: 12,
    },
    350: {
      slidesPerView: 1.1,
      spaceBetween: 12,
    },
    30: {
      slidesPerView: 1,
      spaceBetween: 12,
    },
  },
});

var swiper_slide = new Swiper(".slide-images", {
  slidesPerView: 2.2,
  spaceBetween: 9,
  speed: 800,
  pagination: {
    el: ".s-slide .swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".s-slide .btn-next",
    prevEl: ".s-slide .btn-prev",
  },

  breakpoints: {
    700: {
      slidesPerView: 2.2,
      spaceBetween: 9,
    },
    300: {
      slidesPerView: 1.7,
      spaceBetween: 3,
    },
  },
});

var swiper_tabs_faq = new Swiper(".slide-tabs-faq", {
  slidesPerView: 6,
  spaceBetween: 27,
  observer: true,
  observeParents: true,
  speed: 800,
  navigation: {
    nextEl: ".s-faq .btn-next",
    prevEl: ".s-faq .btn-prev",
  },
  breakpoints: {
    1060: {
      slidesPerView: 6,
      spaceBetween: 27,
    },
    900: {
      slidesPerView: 5,
      spaceBetween: 20,
    },
    740: {
      slidesPerView: 4,
      spaceBetween: 20,
    },
    550: {
      slidesPerView: 3,
      spaceBetween: 12,
    },
    300: {
      slidesPerView: 2,
      spaceBetween: 12,
    },
  },
});

//menu
$(window).on("scroll", function () {
  if ($(window).scrollTop()) {
    $("header").addClass("menu-scroll");
  } else {
    $("header").removeClass("menu-scroll");
  }
});

const btnMenu = document.getElementById("js-open-menu");
function activeMenu() {
  document.documentElement.classList.toggle("menu-opened");
}
btnMenu.addEventListener("click", () => activeMenu());

//tabs
const navTabs = document.querySelectorAll(".s-nieuws .tabs li");
const tabContent = document.querySelectorAll(".s-nieuws .tab-content .content");

navTabs.forEach((nav, index) => {
  nav.addEventListener("click", (event) => {
    event.preventDefault();

    navTabs.forEach((link) => {
      link.classList.remove("active");
    });
    tabContent.forEach((tab) => {
      tab.classList.remove("active");
    });
    tabContent[index].classList.add("active");
    nav.classList.add("active");
  });
});

const navTabsNieuws = document.querySelectorAll(
  ".s-all-nieuws .slide-tabs .tab"
);
const tabContentNieuws = document.querySelectorAll(
  ".s-all-nieuws .tab-content .tab-pane"
);

navTabsNieuws.forEach((nav, index) => {
  nav.addEventListener("click", (event) => {
    event.preventDefault();

    navTabsNieuws.forEach((nav) => {
      nav.classList.remove("active");
    });
    tabContentNieuws.forEach((tab) => {
      tab.classList.remove("active");
    });
    tabContentNieuws[index].classList.add("active");
    nav.classList.add("active");
  });
});

const navTabsFaq = document.querySelectorAll(".s-faq .slide-tabs-faq .tab");
const tabContentFaq = document.querySelectorAll(
  ".s-faq .tab-content .tab-pane"
);

navTabsFaq.forEach((nav, index) => {
  nav.addEventListener("click", (event) => {
    event.preventDefault();

    navTabsFaq.forEach((link) => {
      link.classList.remove("active");
    });
    tabContentFaq.forEach((tab) => {
      tab.classList.remove("active");
    });
    tabContentFaq[index].classList.add("active");
    nav.classList.add("active");
  });
});

//modal vídeo
$(".play").modalVideo();

//animation
AOS.init({
  duration: 1000,
  once: true,
  disable: "mobile",
});

//array images
function fadeOut(id, time) {
  fade(id, time, 100, 0);
}

function fadeIn(id, time) {
  fade(id, time, 0, 100);
}

function fade(id, time, ini, fin) {
  var target = document.getElementById(id);
  var alpha = ini;
  var inc;
  if (fin >= ini) {
    inc = 2;
  } else {
    inc = -2;
  }
  timer = (time * 1000) / 50;
  var i = setInterval(function () {
    if ((inc > 0 && alpha >= fin) || (inc < 0 && alpha <= fin)) {
      clearInterval(i);
    }
    setAlpha(target, alpha);
    alpha += inc;
  }, timer);
}

function setAlpha(target, alpha) {
  target.style.filter = "alpha(opacity=" + alpha + ")";
  target.style.opacity = alpha / 100;
}

let imageList = [
  "./img/illustra_team_01.png",
  "./img/illustra_team_02.png",
  "./img/illustra_team_03.png",
  "./img/illustra_team_04.png",
  "./img/illustra_team_05.png",
  "./img/illustra_team_06.png",
  "./img/illustra_team_01.png",
  "./img/illustra_team_02.png",
];

setInterval(function () {
  function shuffle(array) {
    var currentIndex = array.length,
      temporaryValue,
      randomIndex;

    // While there remain elements to shuffle...
    while (0 !== currentIndex) {
      // Pick a remaining element...
      randomIndex = Math.floor(Math.random() * currentIndex);
      currentIndex -= 1;

      // And swap it with the current element.
      temporaryValue = array[currentIndex];
      array[currentIndex] = array[randomIndex];
      array[randomIndex] = temporaryValue;
    }

    return array;
  }

  const newImage = shuffle(imageList);

  const Images = document.querySelectorAll(".s-team .left .photo img");
  Images.forEach((img, index) => {
    img.classList.remove("fade");
    setTimeout(function () {
      img.setAttribute("src", newImage[index]);
      img.classList.add("fade");
    }, 1000);
  });
}, 4000);

//lightbox
lightbox.option({
  resizeDuration: 300,
  wrapAround: true,
  positionFromTop: 300,
});

//form
const inputForm = document.querySelectorAll(".js-input");
inputForm.forEach((input) => {
  input.addEventListener("focusin", () => {
    input.parentElement.classList.add("focus");
  });
  input.addEventListener("focusout", () => {
    if (input.value === "") input.parentElement.classList.remove("focus");
  });
});

//map
if (document.getElementById("map")) {
  mapboxgl.accessToken =
    "pk.eyJ1IjoiYW1hbmRhbGFwYSIsImEiOiJjazY2cjdkcjAwNDY4M2VwODFyZnZpbDg5In0.yZurTAPPw4f1D-VkffaHpw";
  var map = new mapboxgl.Map({
    container: "map",
    style: "mapbox://styles/mapbox/light-v10", // stylesheet location
    center: [5.9891917, 52.297697], // starting position [lng, lat]
    zoom: 15, // starting zoom
  });
  var marker = new mapboxgl.Marker()
    .setLngLat([5.9891917, 52.297697])
    .addTo(map);
  var popup = new mapboxgl.Popup({
    closeOnClick: false,
    closeButton: false,
  })
    .setLngLat([5.9781917, 52.296697])
    .setHTML(
      `
              <a href="https://goo.gl/maps/f2Jvi2t5ksHRSLfG8" target="_blank" class="popup">
                  <div class="text">
                    <strong>
                    Adres
                    </strong>
                      <p>
                      Schorsweg 13e <br>
                      8171 ME Vaassen
                      </p>
                  </div>
              </a>
          `
    )
    .addTo(map);
}

//faq
const question = document.querySelectorAll(".js-faq");
question.forEach((item) => {
  item.addEventListener("click", () => {
    if (item.classList.contains("active")) {
      item.classList.remove("active");
    } else {
      question.forEach((i) => {
        i.classList.remove("active");
      });
      item.classList.add("active");
    }
  });
});

//dropdown
const btnDropdownLogin = document.querySelectorAll(".js-btn-login");
btnDropdownLogin.forEach((btn) => {
  btn.addEventListener("click", (event) => {
    event.preventDefault();
    btn.classList.toggle("active");
    btn.nextElementSibling.classList.toggle("active");
  });
});

const btnDropdownOverons = document.querySelectorAll(".js-btn-overons");
btnDropdownOverons.forEach((btn) => {
  btn.addEventListener("click", (event) => {
    event.preventDefault();
    btn.classList.toggle("active");
    btn.nextElementSibling.classList.toggle("active");
  });
});

const btnDropdownDiensten = document.querySelectorAll(".js-btn-diensten");
btnDropdownDiensten.forEach((btn) => {
  btn.addEventListener("click", (event) => {
    event.preventDefault();
    btn.classList.toggle("active");
    btn.nextElementSibling.classList.toggle("active");
  });
});

const dropdownMenu = document.querySelectorAll(".dropdown");
const btnDropdownDisable = document.querySelectorAll(".cta-drop");
dropdownMenu.forEach((drop) => {
  drop.addEventListener("mouseleave", () => {
    drop.classList.remove("active");

    btnDropdownDisable.forEach((cta) => {
      cta.classList.remove("active");
    });
  });
});

const btnShowMobile = document.querySelectorAll(".js-menu");
btnShowMobile.forEach((btn) => {
  btn.addEventListener("click", (event) => {
    btn.classList.toggle("active");
  });
});

//pop up
$(function () {
  setTimeout(function () {
    $(".popup").addClass("show");
  }, 3000);
});

$(".close-pop").on("click", function () {
  $(".popup").removeClass("show");
});

$(function () {
  setTimeout(function () {
    $(".cookies").addClass("show");
  }, 1000);
});

$(".close").on("click", function () {
  $(".cookies").removeClass("show");
});


//scroll
$('.btn-form-mobile')
    // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function(event) {
        // On-page links
        if (
            location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
            location.hostname == this.hostname
        ) {
            // Figure out element to scroll to
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            // Does a scroll target exist?
            if (target.length) {
                // Only prevent default if animation is actually gonna happen
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: target.offset().top - 100
                }, 1000);
            }
        }
    });