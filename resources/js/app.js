import './bootstrap';
import 'bootstrap-icons/font/bootstrap-icons.css';
import 'animate.css';
import Alpine from 'alpinejs';
import Swiper from 'swiper';
import 'swiper/css';
 
window.Alpine = Alpine;
Alpine.start();


document.addEventListener('DOMContentLoaded', function () {
    new Swiper('.mySwiper', {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        breakpoints: {
            640: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            }
        }
    });
});
