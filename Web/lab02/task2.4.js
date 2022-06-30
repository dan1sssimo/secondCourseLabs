console.log("5" + "1"); // 51
console.log("5" + 1); // 51
console.log(5 + 1);//6
console.log("5" + true);//5true
console.log(1 / 0); // infinity
console.log(-5 / 0); // - infinity
console.log(1 / Infinity); // 0
console.log(Infinity - Infinity); // NaN
console.log(Infinity + 10); //infinity
console.log(Infinity + Infinity);//infinity
console.log(Infinity + "3");//infinity3
console.log(undefined + 5); // NaN
console.log(parseInt("10")); //10
console.log(parseInt("10.3")); //10
console.log(parseInt(10.3));//10
console.log(parseInt("34 38 23"));// 34
console.log(parseInt("   60   ")); //60
console.log(parseInt("x10"));//NaN
console.log(parseInt("0x10"));//16
console.log(parseInt("010")); // 10
console.log(parseInt("24", 8)); //255
console.log(parseInt("FF", 16)); // 0
console.log(parseFloat("0xFF")); // false
console.log(false && 0); //0
console.log(0 && false);// false
console.log(!0); // true
console.log(!5); // false
console.log(1 && 0);// 0
console.log(1 && false); // false
console.log(1 || 5); //5
console.log(0 || 5);  // 5
console.log(5 + 4 + "!"); // 9!
console.log(!null); //true
console.log(!!null); // false
console.log(!!5); // true
console.log(null == 0); //false
console.log(null === 0); // false
console.log(null > -5); // true
console.log(undefined > 5); //false
console.log(undefined > 5 != true); //true
console.log(a = null + 5); // 5
