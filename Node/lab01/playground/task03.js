const fs = require("fs");
const namePer = require("os").userInfo().username
fs.appendFile("task03.txt", `Hello, ${namePer}\n`, function (error) {
    if (error)
        throw error;
    console.log("Запись файла завершена. Содержимое файла:");
    let data = fs.readFileSync("task03.txt", "utf8");
    console.log(data);
});