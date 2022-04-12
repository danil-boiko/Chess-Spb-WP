export default function(){
    const openBtn = document.querySelector('.js-menu-open');
    const closeBtns = document.querySelectorAll('.js-menu-close');
    const header = document.querySelector('header.header')

    function scrollHeader(){
        if (window.pageYOffset > 0){
            header.classList.add('scrolled')
            if (header.classList.contains('transparent')){
                header.classList.add('colored')
            }
        } else {
            header.classList.remove('scrolled') 
            if (header.classList.contains('transparent')){
                header.classList.remove('colored')
            }
        }
    }

    openBtn.addEventListener('click', e => {
        header.classList.add('active');
        document.body.style.overflowY = 'hidden';
    })
    closeBtns.forEach(btn => {
        btn.addEventListener('click', e => {
            header.classList.remove('active');
            document.body.style.overflowY = 'auto';
        })
    })
    
    //scrollHeader();
    document.addEventListener('scroll', e => {
        scrollHeader()
    })
}