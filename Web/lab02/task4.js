if (typeof String.prototype.toCamel !== '') { // надання рядку типу vvedenih dannih
    String.prototype.toCamel = function () {
        return this.replace(/[-_]([a-z])/g, function (string) { // видалення _ та заміна нижнього регістру на верхній у словах
            return string[1].toUpperCase();
        })
    };
}
console.log('my_classmate_pavlo_love_to_watch_gachi_films'.toCamel())