fetch('../data/projects.json').then(response => {
    if (!response.ok) {
        throw new Error('Network response was not ok');
    }

    return response.json();

}).then(data => {
    const projects = data;

    for (const project of projects) {
        let technologies = ``;

        for (const technologie of project.technologies) {
            technologies += `

<div>${technologie}</div>

            `;
        }

        clas = project.perso ? 'perso' : 'pasperso';

        for (const category of project.categories) {
            document.getElementById(category).innerHTML += `

<article class="${clas}">
    <figure>
        <img src="${project.icon}" alt="${project.name}">
        <figcaption>
            <h3>${project.name}</h3>
        </figcaption>
    </figure>
    <h4>Technologies Associées</h4>
    <div class="techs">
        ${technologies}
    </div>
    <button type="button" id="${project.id}">En savoir plus</button>
</article>

            `
        }
    }

}).catch(error => {
    console.error('Error fetching JSON:', error);
});