const modalCV = document.getElementById('cv');

document.getElementById('view').addEventListener('click', () => {
    modalCV.showModal();
})

modalCV.addEventListener('click', e => {
    if (e.target == modalCV) {
        modalCV.close();
    }
})

window.addEventListener('keydown', e => {
    modalCV.close();
})
document.addEventListener('keydown', e => {
    modalCV.close();
})
document.getElementById('pdf').addEventListener('keydown', e => {
    modalCV.close();
})