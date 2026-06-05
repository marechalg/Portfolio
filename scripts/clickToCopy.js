[...document.getElementsByClassName('copy')].forEach(copy => {
    copy.addEventListener('click', () => {
        navigator.clipboard.writeText(copy.textContent);
    })
})