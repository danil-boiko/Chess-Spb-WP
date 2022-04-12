export default function(){
    const textareaAutosize = document.querySelector('.textarea-autosize textarea');
    textareaAutosize && textareaAutosize.addEventListener('input', e => {
        textareaAutosize.parentNode.dataset.replicatedValue = textareaAutosize.value;
    })
}