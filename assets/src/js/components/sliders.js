import Swiper from 'swiper/swiper-bundle.min.js';

export default function(){

    const reviewsSlider = document.querySelector('.home-reviews__wrapper')

    //Home reviews slider

    reviewsSlider && new Swiper(reviewsSlider, {
        breakpoints: {
            320:{
                slidesPerView: 1,
                spaceBetween: 24
            },
            556:{
                slidesPerView: 2,
                spaceBetween: 24
            },
            992:{
                slidesPerView: 3,
                spaceBetween: 24
            }
        }
    });


}