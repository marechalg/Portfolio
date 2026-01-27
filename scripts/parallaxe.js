window.addEventListener('mousemove', mouse => {
    [...document.getElementsByClassName('frame')].forEach(frame => {
        frame.style.backgroundPositionX = `${50 + (mouse.clientX / window.innerWidth - 0.5) * 10}%`;
        frame.style.backgroundPositionY = `${50 + (mouse.clientY / window.innerHeight - 0.5) * 10}%`;
    })
})