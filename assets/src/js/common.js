// Libs
import AOS from 'aos';
import { Fancybox } from '@fancyapps/ui';

//Components
import mobileMenu from './components/mobile-menu';
import youtubeIframe from './components/youtube-iframe';
import sliders from './components/sliders';

document.addEventListener("DOMContentLoaded", () => {
    mobileMenu();
    youtubeIframe();
    sliders();

    AOS.init({
        duration: 500,
    });

});