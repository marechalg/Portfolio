import toRoman from "./toRoman.js";

let n = 1;
[...document.getElementsByTagName('section')].forEach(section => {
    const h2 = section.querySelector('h2');
    h2.innerHTML = `${toRoman(n)}. ${h2.innerHTML}`;
    n++;
})