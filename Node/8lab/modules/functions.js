const factorial = (n) => {
    if (n === 0)
        return 1;
    else if (n > 0)
        return (n !== 1) ? n * factorial(n - 1) : 1;
    else
        return (n !== -1) ? n * factorial(n + 1) : -1;
}

const functions = {factorial}

module.exports = functions