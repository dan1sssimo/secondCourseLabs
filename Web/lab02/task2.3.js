console.log(console.log("Hello, world")) //Hello, world , undefined
console.log(null || undefined) // undefined
console.log(null || 2 || undefined) // 2
console.log(1 && null && 2) // null
console.log(1 && console.log("Hello")) // Hello , undefined