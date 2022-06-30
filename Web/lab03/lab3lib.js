module.exports = {
    Zarahovano,
    addClass,
    addSub,
    avg,
    nez,
    high,
    vivod,
    removeClass,
    arraySort,
    filterRangeInPlace,
    reverseSort,
    compare,
    SobakaGovorit,
    unique
}

function addClass(obj, cls) {
    let sub_obj = {};
    let arr = obj.className ? obj.className.split(" ") : [];
    for (let i = 0; i < arr.length; i++) {
        sub_obj[arr[i]] = true;
    }
    sub_obj[cls] = true; // якщо немає такого класу, тру
    arr = Object.keys(sub_obj);
    obj.className = arr.join(" ");

}


// --------------------------------------Task02
//  --------------------------------------Task02.1
function Zarahovano(sesiya) {
    for (let i in sesiya) {
        if (sesiya[i].status == "Зараховано")
            console.log(sesiya[i]);
    }
    for (let i in sesiya) {
        if (sesiya[i].status == "Не зараховано")
            console.log(sesiya[i]);
    }
}


// --------------------------------------Task02.2
function addSub(arr, sub) {
    let k = 0
    for (let key in arr) {
        if (arr[key].name === sub.name) {
            k = 1
            arr[key].point += sub.point
            if (arr[key].point >= 60 && arr[key].status === "Не зараховано") {
                arr[key].status = "Зараховано"
            }
            if (arr[key].point > 100)
                arr[key].point = 100
        }
    }
    if (k === 0) {
        arr[arr.length] = sub
    }
}

// --------------------------------------Task02.3
function avg(arr) {
    let summ = 0
    let i = 0
    for (let key in arr) {
        summ += +(arr[key].point)
        i++
    }
    let avgbal = summ / i
    return avgbal
}

// --------------------------------------Task02.4
function nez(arr) {
    let i = 0
    for (let key in arr) {
        if (arr[key].status === "Не зараховано") {
            i++
        }
    }
    return i
}

// --------------------------------------Task02.5
function high(arr) {
    let tmp = 0
    let x
    for (let key in arr) {
        if (arr[key].point > tmp) {
            tmp = arr[key].point
            x = arr[key].name
        }
    }
    return x
}

// --------------------------------------Task02.6
function vivod(arr, x) {
    for (let key in arr) {
        if (x == arr[key].point)
            console.log(arr[key].name)
    }
}


// --------------------------------------Task03
function removeClass(obj, cls) {
    let arr = obj.className ? obj.className.split(" ") : [];
    for (let i = 0; i < arr.length; i++) {
        if (arr[i] == cls) {
            arr.splice(i, 1);
            i--;
        }
        obj.className = arr.join(" ");
    }
}


function filterRangeInPlace(arr, a, b) {
    for (let i = 0; i < arr.length; i++) {
        if (a > arr[i] || arr[i] > b) {
            arr.splice(i, 1);
            i--;
        }
    }
}

function reverseSort(arr) {
    arr.sort();
    arr.reverse();
}


function arraySort(arr) {
    arr.sort();
}


function compare(a, b) {
    if (a.age < b.age) {
        return -1;
    }
    if (a.age > b.age) {
        return 1;
    }
    return 0;
}

function SobakaGovorit(imya, zvuk, old) {
    this.name = imya
    this.zvuk = zvuk
    this.age = old
    this.f = function () {
        if (this.age >= 4) console.log("Ррр!")
        else if (this.age < 1) console.log("Тяф!")
        else console.log("Гав!")
    }
}

function unique(arr) {
    let rezz = [];

    for (let tmp22 of arr) {
        if (!rezz.includes(tmp22)) {
            rezz.push(tmp22);
        }
    }

    return rezz;
}

