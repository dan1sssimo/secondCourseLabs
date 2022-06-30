const express = require("express");
const hbs = require("hbs");
const ipInfo = require("ipinfo")
let app = express();
hbs.registerPartials(__dirname + '/views/partials');
app.use("/static", express.static('./static/'));
app.set('view engine', 'hbs');
app.get('/', (req, res) => {
    res.render('home.hbs')
});
app.get('/weather/:city', (req, res) => {
    let cCity = req.params.city;
    res.render('weather.hbs', {cCity});
});
app.get('/weather', (req, res) => {
    let cityN = req.query.city;
    if(!cityN)
    {
        ipInfo((err, cLoc) => {
            let cCity = cLoc.city;
            res.render('weather.hbs', {cCity});
        })
    }
    else {
        res.redirect('/weather/' + cityN);
    }
});
app.use(function (req, res, next) {
    res.status(404).render("404.hbs");
})
app.listen(3000, () => {
    console.log("Example app listening on port 3000")
})