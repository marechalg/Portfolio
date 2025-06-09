const exp = require('express');
const app = exp();
const path = require('node:path');
const moment = require('moment');

const PORT = 8080;

app.use(exp.static(path.join(__dirname, 'public')));

app.get('/', (req, res) => {
    res.sendFile(path.join(__dirname, 'public/src/index.html'));
});

app.use((req, res) => {
    res.status(404).sendFile(path.join(__dirname, 'public/src/404.html'));
});

app.listen(PORT, () => {
    adlog('log', 'express', `Server is running on http://localhost:${PORT}`);
})
 
// Custom ALS (Advanced Log System)
const LOG_NORMALIZER = 30;
const COLORS = {
    reset: "\x1b[0m",
    log: "\x1b[37m",
    info: "\x1b[34m",
    warn: "\x1b[33m",
    error: "\x1b[31m",
    debug: "\x1b[35m"
};
function adlog(type, from, message) {
    const hour = moment().format('DD/MM/YYYY_HH:mm:ss');
    const msg = `${`[${hour}-${from}]:`.padEnd(LOG_NORMALIZER)} ${message}`;
    switch(type) {
        case 'log':
            console.log(COLORS.log + msg);
            break;
        case 'info':
            console.info(COLORS.info + msg);
            break;
        case 'warn':
            console.warn(COLORS.warn + msg);
            break;
        case 'error':
            console.error(COLORS.error + msg);
            break;
        case 'debug':
            console.debug(COLORS.debug + msg);
        default:
            console.log(COLORS.log + msg);
            break;
    }
}

module.exports = { adlog };