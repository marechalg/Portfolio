const projects = require('../data/projects.json');
const { adlog } = require('../../server');

for (const project of projects) {
    for (const category of project.categories) {
        document.getElementById(category).innerHTML = `
            <article>
                <p>haha</p>
            </article>
        `
    }
}