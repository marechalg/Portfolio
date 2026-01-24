document.querySelectorAll('button').forEach(button => {
    button.addEventListener('click', () => window.open(`/${button.id}`, '_self'));
    
    button.addEventListener('mousedown', mouse => {
        if (mouse.button === 1) {
            mouse.preventDefault();
            window.open(`/${button.id}`, '_blank');
        }
    })
})