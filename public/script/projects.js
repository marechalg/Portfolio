fetch('../data/projects.json').then(response => {
    if (!response.ok) {
        throw new Error('Network response was not ok');
    }
    return response.json();
}).then(data => {
    const projects = data;

    for (const project of projects) {
        let technologies = ``;
        for (const technologie of projects.technologies) {
            technologies.concat(`

<div>${technologie}</div>

            `)
        }

        for (const category of project.categories) {
            document.getElementById(category).innerHTML += `

<article>
    <figure>
        <img src="${project.icon}" alt="${project.name}">
        <figcaption>
            <h3>${project.name}</h3>
        </figcaption>
    </figure>
    <h3>Technologies Associées</h3>
    ${technologies}
    <button>En savoir plus</button>
</article>

            `
        }
    }
}).catch(error => {
    console.error('Error fetching JSON:', error);
});