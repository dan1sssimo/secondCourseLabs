//task 1
function dateInfo() {
    let info = new Date()
    let weekDay = info.getDay()
    let week = getWeekDay(weekDay)
    let hours = info.getHours()
    let minutes = info.getMinutes()
    let seconds = info.getSeconds()
    let day = info.getDate()
    let month = info.getMonth()
    let month1 = getDay(String(month))
    let year = info.getFullYear()
    let information = 'Дата: ' + "" + day + "" + month1 + year + " року" + " День: " + week + "\n\n" + "Час: " + hours + ":" + minutes + ":" + seconds
    console.log(information)
    return information
}

function getDay(date) {
    date1 = "" + date;
    if (date1 == 0) return " січня "
    if (date1 == 1) return " лютого "
    if (date1 == 2) return " березня "
    if (date1 == 3) return " квітня "
    if (date1 == 4) return " травня "
    if (date1 == 5) return " червня "
    if (date1 == 6) return " липня "
    if (date1 == 7) return " серпня "
    if (date1 == 8) return " вересня "
    if (date1 == 9) return " жовтня "
    if (date1 == 10) return " листопада "
    if (date1 == 11) return " грудня "
}

function getWeekDay(date) {
    if (date == 0) return " неділя"
    if (date == 1) return " понеділок"
    if (date == 2) return " віторок"
    if (date == 3) return " середа"
    if (date == 4) return " четвер"
    if (date == 5) return " п‘ятниця"
    if (date == 6) return " субота"
}

//task2
function task2() {
    let datainfo = new Date()
    let weekDay = datainfo.getDay()
    let week = getWeekDay(weekDay)
    let information = 'Номер дня: ' + weekDay + "\n" + 'Назва дня: ' + " " + week
    console.log(information)
    return information
}

//task3
function task3(dni) {
    let datainfo = new Date()
    if (dni >= 0)
        datainfo.setDate(datainfo.getDate() - (dni))
    else if (dni < 0)
        datainfo.setDate(datainfo.getDate() + (dni))
    console.log(datainfo)
    return datainfo
}

//task4
function task4(info1, info2) {
    let datainfo = new Date(info1, info2, 0)
    console.log(datainfo.getDate())
    return datainfo.getDate()
}

//task5
function task5_1() {
    let datainfo = new Date()
    let arr = {}
    arr.Today = datainfo.getHours() * 3600 + datainfo.getMinutes() * 60 + datainfo.getSeconds()
    arr.Tomorrow = 86400 - datainfo.getHours() * 3600 + datainfo.getMinutes() * 60 + datainfo.getSeconds()
    console.log(arr.Today)
    return arr.Today
}

function task5_2() {
    let datainfo = new Date()
    let arr = {}
    arr.Today = datainfo.getHours() * 3600 + datainfo.getMinutes() * 60 + datainfo.getSeconds()
    arr.Tomorrow = 86400 - datainfo.getHours() * 3600 + datainfo.getMinutes() * 60 + datainfo.getSeconds()
    console.log(arr.Tomorrow)
    return arr.Tomorrow
}

//task6
function task6_1(year) {
    let year_int = parseInt(year);
    let stolittya;
    stolittya = Math.trunc(year / 100) + 1;
    console.log(stolittya);
    return stolittya
}

function task6_2(year) {
    let year_int = parseInt(year);
    let stolittya;
    stolittya = Math.trunc(year / 100) + 1;
    if (year >= ((parseInt(stolittya) - 2) * 100) + 50) {
        let a = 2
        console.log(a)
        return a
    } else {
        let b = 1
        console.log(b);
        return b
    }
}

function task6_3(year) {
    let year_int = parseInt(year);
    for (let i = 1000; i < 20000; i = i + 1000) {
        if (year_int > i + 1 && year_int < i + 1000) {
            tuczcholetie = (i / 1000) + 1;
            console.log(tuczcholetie);
            return tuczcholetie
            break
        } else if (parseInt(year_int) <= 1000) {
            let aa = 1
            console.log(aa)
            return aa
            break;
        }
    }
}

//task7
function task7(info1, info2) {
    let fullyears = (-1970) + new Date((new Date(info2) - new Date(info1))).getFullYear()
    console.log(fullyears)
    return fullyears
}

//task8
function task8(time1, time2) {
    let Time1 = 1200 - Math.round(time1.slice(0, 2) * 100 + time1.slice(-2) * 100 / 60.0);
    let Time2 = (time2.slice(0, 2) * 100 + time2.slice(-2) * 100 / 60.0) - 1200;
    let rezult = ((Math.abs(Time1 - Time2) / 2.0) * 60 / 100.0).toFixed(2);
    let info = 'Відхилення: ' + rezult + ' хв'
    console.log(info)
    return info
}


