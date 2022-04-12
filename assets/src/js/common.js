// Libs
import AOS from 'aos';
import { Fancybox } from '@fancyapps/ui';

//Components
import mobileMenu from './components/mobile-menu';
import youtubeIframe from './components/youtube-iframe';
import sliders from './components/sliders';
import transfer from './components/transfer';
import textarea from './components/textarea';

document.addEventListener("DOMContentLoaded", () => {
    mobileMenu();
    youtubeIframe();
    transfer();
    sliders();
    textarea();

    AOS.init({
        duration: 500,
    });

});