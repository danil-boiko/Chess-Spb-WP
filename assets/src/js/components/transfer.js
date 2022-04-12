export default function() {
    
    const footerItems = document.querySelectorAll('.js-footer-item-transfer');
    const footerItemsTarget = document.querySelector('.home-form__map-content');

    footerItems && footerItems.forEach(item => {
        if (window.innerWidth < 992){
            footerItemsTarget.insertAdjacentElement('beforebegin', item)
        }
    })
}