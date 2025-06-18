fetch('../data/competences.json').then(response => {
    if (!response.ok) {
        throw new Error('Network response was not ok');
    }

    return response.json();

}).then(data => {
    const competences = data;
    let i = 1;

    for (const competence of competences) {
        const clas = i > 10 ? 'plus' : 'moins';
        const dis = i > 10 ? 'none' : 'block';
        document.getElementById('comp').innerHTML += `
        
<div class="${clas}" style="display: ${dis};">${competence}</div>

        `;
        i++;
    }

}).catch(error => {
    console.error('Error fetching JSON:', error);
});

let expanded = false;

document.getElementById('vp').addEventListener('click', () => {
    const plus = document.querySelectorAll('.plus');
    expanded = !expanded;

    if (expanded) {
        plus.forEach((element, index) => {
            setTimeout(() => {
                element.style.display = 'block';
            }, index * 100);
        });
        document.getElementById('vp').innerHTML = 'Voir Moins ▲';
    } else {
        plus.forEach(pl => {
            pl.style.display = 'none';
        });
        document.getElementById('vp').innerHTML = 'Voir Plus ▼';
    }
});