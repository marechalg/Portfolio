const modalCV = document.getElementById('cv');

document.getElementById('view').addEventListener('click', () => {
    modalCV.showModal();
})

modalCV.addEventListener('click', e => {
    if (e.target == modalCV) {
        modalCV.close();
    }
})