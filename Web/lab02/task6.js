if (typeof String.prototype.toCamel !== '') { // надання рядку типу vvedenih dannih
    String.prototype.toCamel = function () {
        return this.replace(/\d{4}[/](0?[1-9]|1[012])[/](0?[1-9]|[12][0-9]|3[01])\w/g, function (string) {
            string=string.split('');
            string[7]='.';
            string[4]='.';
            string=string.join('')
            return string[8] + string[9] + string[7] + string[5] + string[6] + string[4] + string[0] + string[1] + string[2] + string[3];
        })
    };
}
console.log('Собака гав маруся гав 2000/09/12. S04E06. 3111/10/17 Ватахелвітфт1999/08/15.HDTV Сюда підійди барабарабанушка _1981/06/31_'.toCamel())
