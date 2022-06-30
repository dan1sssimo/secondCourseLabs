const express = require('express')
const hbs = require('hbs')
hbs.registerPartials(__dirname + '/views/partials')
const fs = require("fs")
const fetch = require('node-fetch')

var citiesJSON = fs.readFileSync("cities.json", "utf-8")
var cities = JSON.parse(citiesJSON)

const app = express()
app.set('view engine', 'hbs')
app.use(express.static(__dirname + '/public'))
app.get('/', function (req, res) {
    res.render('main.hbs')
})

app.get('/weather/:city', async function (req, res) {
    var city = req.params.city;
    var appId = 'e525a00caf58572579c3e2723291965b'
    var url = `https://api.openweathermap.org/data/2.5/weather?q=${city}&appid=${appId}`
    var result = await fetch(url)
    console.log(result);
    var weather = await result.json();
    res.render('weather.hbs', {city, weather, cities})
})

app.listen(process.env.PORT || 3000, () => {
    console.log("Server is listening")
})