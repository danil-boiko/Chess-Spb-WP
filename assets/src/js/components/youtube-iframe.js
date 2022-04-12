export default function (){
    const playBtn = document.querySelector('.home-about_video-play')

    playBtn && playBtn.addEventListener('click', e => {
        playBtn.classList.add('hidden');
        var src = playBtn.getAttribute("data-src");
        src = 'https://www.youtube.com/embed/' + src + '?autoplay=1'
        const iframe = document.createElement("iframe");
        iframe.setAttribute("src", src);
        iframe.classList.add('home-about_video-iframe')
        playBtn.insertAdjacentElement('afterend', iframe);
    })
}