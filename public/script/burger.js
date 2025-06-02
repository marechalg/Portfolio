const ACCENT_COLOR = getComputedStyle(document.documentElement).getPropertyValue('--color-accent');
const burger = document.getElementById('burger');

let isDeployed = false;

burger.addEventListener('click', () => {
    isDeployed = !isDeployed;

    if (isDeployed) {
        for (let i = 1; i < 4; i++) {
            burger.children[i].style.setProperty('display', 'none');
        }

        const finalDivs = [burger.children[0], burger.children[burger.children.length - 1]];
        for (const child of finalDivs) {
            child.style.setProperty('background-color', ACCENT_COLOR);
            child.style.setProperty('width', '2em');
            child.style.setProperty('position', 'absolute');
            child.style.setProperty('align-self', 'center');
            child.style.setProperty('margin-top', '1em');
        }

        finalDivs[0].style.setProperty('transform', 'rotate(45deg)');

        finalDivs[1].style.setProperty('transform', 'rotate(-45deg)');

        burger.classList.add('clicked');
        
    } else {
        for (let i = 1; i < 4; i++) {
            burger.children[i].style.setProperty('display', 'block');
        }

        const finalDivs = [burger.children[0], burger.children[burger.children.length - 1]];
        for (const child of finalDivs) {
            child.style.setProperty('position', 'relative');
            child.style.setProperty('align-self', 'flex-end');
            child.style.setProperty('margin-top', '0em');
        }

        finalDivs[0].style.setProperty('transform', 'rotate(0deg)');
        finalDivs[0].style.setProperty('width', '2em');
        finalDivs[0].style.setProperty('background-color', '#ff2222');

        finalDivs[1].style.setProperty('transform', 'rotate(0deg)');
        finalDivs[1].style.setProperty('width', '1.6em');
        finalDivs[1].style.setProperty('background-color', '#ff22aa');

        burger.classList.remove('clicked');
    }
})