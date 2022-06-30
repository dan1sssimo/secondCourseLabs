function OnMouseClick() {
    let myElement = document.getElementById('firsttask')
    myElement.innerHTML = dateInfo()
}

function OnMouseClick1() {
    let myElement = document.getElementById('task2')
    myElement.innerHTML = task2()
}

function OnMouseClick2() {
    let myElement = document.getElementById('task3')
    let info = document.getElementById('dni').value
    myElement.innerHTML = task3(info)
}

function OnMouseClick3() {
    let myElement = document.getElementById('task4')
    let info1 = document.getElementById('rik').value
    let info2 = document.getElementById('nummonth').value
    myElement.innerHTML = task4(info1, info2)
}

function OnMouseClick4() {
    let myElement = document.getElementById('task5')
    let myElement1 = document.getElementById('task5.1')
    myElement.innerHTML = task5_1()
    myElement1.innerHTML = task5_2()
}

function OnMouseClick5() {
    let year = document.getElementById('date11').value
    let result1 = document.getElementById("task6_1")
    let result2 = document.getElementById("task6_2")
    let result3 = document.getElementById("task6_3")

    result1.innerText = task6_1(year)
    result2.innerText = task6_2(year)
    result3.innerText = task6_3(year)
}
function  OnMouseClick6(){
    let myElement = document.getElementById('task7')
    let info1 = document.getElementById('one1').value
    let info2 = document.getElementById('two2').value
    myElement.innerHTML = task7(info1, info2)
}
function OnMouseClick7() {
    let str = document.getElementById('task8');
    let time1 = document.getElementById('time1').value;
    let time2 = document.getElementById('time2').value;
    str.innerHTML = task8(time1, time2);
}

