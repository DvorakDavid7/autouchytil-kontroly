import './bootstrap';
import 'bootstrap-icons/font/bootstrap-icons.css';
import 'animate.css';
import Alpine from 'alpinejs';
import Swiper from 'swiper';
import { Navigation, Pagination, Autoplay } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import Hotjar from '@hotjar/browser';

const siteId = 6506610;
const hotjarVersion = 6;
Hotjar.init(siteId, hotjarVersion);

window.Alpine = Alpine;
Alpine.start();


document.addEventListener('DOMContentLoaded', function () {
    new Swiper(".mySwiper", {
        slidesPerView: 1,
        breakpoints: {
            640: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            }
        },
        spaceBetween: 20,
        loop: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        modules: [Navigation, Pagination, Autoplay],
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
});
