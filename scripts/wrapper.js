document.addEventListener('DOMContentLoaded', () => {
    if (!localStorage.getItem('projectsWrapped')) {
        localStorage.setItem('projectsWrapped', JSON.stringify({
            perso: false,
            study: false
        }))

    } else {
        const value = JSON.parse(localStorage.getItem('projectsWrapped'));
        if (value.perso) {
            document.getElementById('perso').closest('section').querySelectorAll('article').forEach(article => {
                article.style.display = 'flex';
            })
            
            document.getElementById('perso').closest('section').querySelectorAll('svg').forEach(icon => {
                icon.classList.toggle('rotated');
            })
        }

        if (value.study) {
            document.getElementById('study').closest('section').querySelectorAll('article').forEach(article => {
                article.style.display = 'flex';
            })
            
            document.getElementById('study').closest('section').querySelectorAll('svg').forEach(icon => {
                icon.classList.toggle('rotated');
            })
        }
    }
})

document.querySelectorAll('.wrapper').forEach(wrap => {
    wrap.addEventListener('click', () => {
        wrap.closest('section').querySelectorAll('article').forEach(article => {
            const current = window.getComputedStyle(article).display;
            article.style.display = current === 'none' ? 'flex' : 'none';
        })
        
        wrap.closest('section').querySelectorAll('svg').forEach(icon => {
            icon.classList.toggle('rotated');
        })
        
        const current = JSON.parse(localStorage.getItem('projectsWrapped'));
        if (wrap.id === 'perso') {
            localStorage.setItem('projectsWrapped', JSON.stringify({
                perso: !current.perso,
                study: current.study
            }))
        }
        if (wrap.id === 'study') {
            localStorage.setItem('projectsWrapped', JSON.stringify({
                perso: current.perso,
                study: !current.study
            }))
        }

        document.getElementById(wrap.id).scrollIntoView({ behavior: 'smooth' });
    })
})