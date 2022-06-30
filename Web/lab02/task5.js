function toSnakeCase(str) {
    return str.split('').map((arr) => {  // перетворення у двовимірний масив
        if (arr == arr.toUpperCase()) {
            return '_' + arr.toLowerCase(); // зміна верхнього регістра на нижній та прочерк між словами
        } else {
            return arr;
        }
    })
        .join(''); // перетворення д.м. назад у рядок
}
console.log(toSnakeCase("dsadsadsaDdsadsaDsadasdas"))