fetch('../data/projects.json').then(response => {
    if (!response.ok) {
        throw new Error('Network response was not ok');
    }
    return response.json();
}).then(data => {
    const projects = data;

    for (const project of projects) {
        for (const category of project.categories) {
            document.getElementById(category).innerHTML += `

<article>
    <h3>${project.name}</h3>
    <p>${project.description}</p>
</article>

            `
        }
    }
}).catch(error => {
    console.error('Error fetching JSON:', error);
});