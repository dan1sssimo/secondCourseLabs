onmessage = function (event) {
    let x
    let from = event.data.from
    let to = event.data.to
    while (from != to) {
        let prime = findPrimes(from)
        if(prime)
            postMessage(prime)
        from++
    }
    x = true
    postMessage(x)
}

function findPrimes(from) {
    let check = 1
    if (from < 2)
        check = 0
    else {
        for (let i = 2; i <= Math.sqrt(from); i++) {
            if (from % i === 0){
                check = 0
                break
            }
            else
                check = 1
        }
    }
    if (check === 1)
        return from
}

