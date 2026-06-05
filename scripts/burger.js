document.getElementById('burger').addEventListener('click', () => {
    document.body.classList.toggle('deployed');
    document.getElementById('menu').classList.toggle('open');
    document.querySelector('header nav ul').classList.toggle('hidden');
    document.querySelector('aside').classList.toggle('hidden');
    document.getElementById('burger').classList.toggle('clicked');
})

window.addEventListener('load', () => document.body.classList.add('loaded'));