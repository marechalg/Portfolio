const boutonHaut = document.getElementById('up');
const footer = document.querySelector('footer');

boutonHaut.addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
})

window.addEventListener('scroll', () => {
    if (window.scrollY > window.innerHeight) {
        boutonHaut.classList.add('visible');
    } else {
        boutonHaut.classList.remove('visible');
    }

    // Empêcher le bouton de passer sur le footer
    const footerTop = footer.getBoundingClientRect().top;
    const windowHeight = window.innerHeight;
    const buttonHeight = boutonHaut.offsetHeight;
    
    if (footerTop < windowHeight - buttonHeight - 16) {
        boutonHaut.style.bottom = `${windowHeight - footerTop + 16}px`;
    } else {
        boutonHaut.style.bottom = '1em';
    }
})