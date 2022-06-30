let citiesL = document.getElementById("cities");
let forecastB = document.getElementById('forecast');
let path = location.pathname.split('/');
let gCity = cCity;
gCity = gCity.replace("%20", " ");
let urlWeather = `http://api.openweathermap.org/data/2.5/weather?q=${gCity}&appid=933bd6563a17e1e2e253116f04139ed9&units=metric`;
loadForecast()
async function loadForecast() {
    let citiesJ = "/static/cities.json";
    fetch(citiesJ)
        .then(function (response) {
            return response.json();
        })
        .then(function (cities) {
            for(let i = 0; i < cities.length; i++) {
                let button = document.createElement("a");
                button.href = '/weather/' + cities[i].city;
                if(cities[i].city == gCity) {
                    button.classList.add("active");
                    button.classList.add("disabled");
                }
                button.classList.add("list-group-item");
                button.classList.add("list-group-item-action");
                button.innerHTML = cities[i].city;
                citiesL.appendChild(button);
            }
        });
    fetch(urlWeather)
        .then(function (response) {
            return response.json();
        })
        .then(function (weather) {
            let weatherList = weather;
            if (weatherList.name === undefined)
                return;
            forecastB.innerText = '';
            let titleWeather = document.createElement('h2');
            titleWeather.innerText = 'Weather in ' + weatherList.name;
            forecastB.appendChild(titleWeather);
            let iconCode = weatherList.weather[0].icon;
            let iconUrl = 'http://openweathermap.org/img/wn/' + iconCode + '@2x.png';
            let icon = document.createElement('img');
            icon.src = iconUrl;
            icon.classList.add('mx-auto');
            icon.classList.add('d-block');
            forecastB.appendChild(icon);
            let tableWeather = document.createElement('table');
            tableWeather.classList.add('table');
            tableWeather.classList.add('table-striped');
            let firstRow = tableWeather.insertRow();
            let cellOneOne = firstRow.insertCell();
            cellOneOne.innerText = 'Pressure';
            let cellOneTwo = firstRow.insertCell();
            cellOneTwo.innerText = weatherList.main.pressure + 'hPa';
            let secondRow = tableWeather.insertRow();
            let cellTwoOne = secondRow.insertCell();
            cellTwoOne.innerText = 'Humidity';
            let cell22 = secondRow.insertCell();
            cell22.innerText = weatherList.main.humidity + '%';
            let thirdRow = tableWeather.insertRow();
            let cellThreeOne = thirdRow.insertCell();
            cellThreeOne.innerText = 'Temperature';
            let cellThreeTwo = thirdRow.insertCell();
            cellThreeTwo.innerText = (weatherList.main.temp).toFixed(1) + '°C';
            forecastB.appendChild(tableWeather);
        })
}