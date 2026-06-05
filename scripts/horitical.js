document.querySelectorAll('article div').forEach(div => {
    div.addEventListener('wheel', wh => {
        wh.preventDefault();
        div.scrollLeft += wh.deltaY;
    })
})