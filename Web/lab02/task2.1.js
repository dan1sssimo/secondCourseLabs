let a = 2;
let b = 3;
let c, d;

c = ++a;
d = b++;
c = (2 + ++a);
d = (2 + b++);

console.log(a); //4
console.log(b); //5
console.log(c); //6
console.log(d); //6
