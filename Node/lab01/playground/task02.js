const fs = require("fs");
fs.appendFile("task02.txt", "Hello, World!\n", function (error) {
    if (error)
        throw error;
    console.log("Запись файла завершена. Содержимое файла:");
    let data = fs.readFileSync("task02.txt", "utf8");
    console.log(data);
});