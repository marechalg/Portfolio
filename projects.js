fetch('../data/projects.json')
    .then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        return response.json();
    })
    .then(data => {
        console.log(data);
    })
    .catch(error => {
        console.error('Error fetching JSON:', error);
    });

for (const project of projects) {
    for (const category of project.categories) {
        document.getElementById(category).innerHTML = `
            <article>
                <p>haha</p>
            </article>
        `
    }
}