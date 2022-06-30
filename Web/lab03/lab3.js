let {
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
} = require("./lab3lib")
let obj = {
    className: 'open menu'
}
console.log("--------------------------------------Task01")
// --------------------------------------Task01
addClass(obj, 'new')
addClass(obj, 'open')
addClass(obj, 'me')
console.log(obj.className)
console.log("--------------------------------------Task02")
// --------------------------------------Task02
let sub1 = {name: "Math", point: "19", status: "Не зараховано"}
let sub2 = {name: "Python", point: "50", status: "Не зараховано"}
let sub3 = {name: "Web", point: "69", status: "Зараховано"}
let sesiya = {sub1, sub2, sub3}
Zarahovano(sesiya)
let a = 19;
vivod(sesiya, a)
console.log(high(sesiya))
console.log(nez(sesiya))
console.log(avg(sesiya))
let sub4 = {name: "Python", point: "55", status: "Не зараховано"}
addSub(sesiya, sub4)
console.log(sesiya)
console.log("--------------------------------------Task03")
// --------------------------------------Task03
removeClass(obj, 'open');   // obj.className='menu'
removeClass(obj, 'blabla'); // без змін (такого класу немає)
console.log(obj.className);
console.log("--------------------------------------Task04")
// --------------------------------------Task04
arr = [5, 3, 8, 5, 5, 5, 5, 5, 5, 1];
filterRangeInPlace(arr, 1, 4);
console.log(arr);
console.log("--------------------------------------Task05")
// --------------------------------------Task05
let arr1 = [5, 2, 1, -10, 8];
reverseSort(arr1);
console.log(arr1);
console.log("--------------------------------------Task06")
// --------------------------------------Task06
let arr2 = ["HTML", "JavaScript", "CSS"];
arraySort(arr2)
console.log(arr2)
console.log("--------------------------------------Task07")
// --------------------------------------Task07
let arr3 = [1, 2, 3, 4, 5];
let compareFN = function randomchik() {
    return Math.random() - 0.5;
}
arr3.sort(compareFN);
console.log(arr3);
console.log("--------------------------------------Task08")
// --------------------------------------Task08
let vasya = {name: "Вася", age: 23};
let masha = {name: "Маша", age: 18};
let vovochka = {name: "Вовочка", age: 6};
let people = [vasya, masha, vovochka];
people.sort(compare)
console.log(people[0].age)
console.log("--------------------------------------Task09")
// --------------------------------------Task09
let dog1 = new SobakaGovorit("Пудж", "Бібіп", 3.5)
let dog2 = new SobakaGovorit("Луна", "Бобоп", 0.8)
let dog3 = new SobakaGovorit("Снайпер", "Культяпка", 8)

dog1.f();
dog2.f();
dog3.f();
console.log("--------------------------------------Task10")
// --------------------------------------Task10
let strings = ["C++", "C#", "C++", "C#",
    "C", "C++", "JavaScript", "C++", "JavaScript"
];
console.log(unique(strings));