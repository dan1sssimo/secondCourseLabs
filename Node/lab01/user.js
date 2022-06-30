const fs = require("fs");

const addNote = async (user, args) => {
    let newLanguages = {
        title: args.title,
        level: args.level
    }
    let check = true
    for (let i = 0; i < user.languages.length; i++) {
        if (user.languages[i].title === newLanguages.title) {
            if (user.languages[i].level === newLanguages.level) {
                check = false
                break
            }
        }
    }
    if (check === true) {
        user.languages.push(newLanguages)
        fs.writeFile('./user.json', JSON.stringify(user, null, ' '), (err) => {
            if (err) console.log(err);
        });
    } else {
        console.log('Такий запис вже існує')
    }
    console.log(user)
}

const remove = async (user, args) => {
    let removeLanguages = {
        title: args.title
    }
    for (let i = 0; i < user.languages.length; i++) {
        if (user.languages[i].title === removeLanguages.title) {
            let q = i
            delete user.languages[i]
            user.languages.splice(q, 1)
        }
    }
    fs.writeFile('./user.json', JSON.stringify(user, null, ' '), (err) => {
        if (err) console.log(err);
    });
    console.log(user)
}

const list = (user) => {
    let allLanguages = ''
    for (let i = 0; i < user.languages.length; i++) {
        allLanguages += `language ${user.languages[i].title}, level ${user.languages[i].level}\n`
    }
    console.log(allLanguages)
}

const read = (user, args) => {
    let check = true
    for (let i = 0; i < user.languages.length; i++) {
        if (user.languages[i].title === args.title) {
            check = true
            console.log(`language ${user.languages[i].title}, level ${user.languages[i].level}\n`)
            break
        } else {
            check = false
        }
    }
    if (check === false) {
        console.log("No info")
    }
}

module.exports = {
    addNote,
    list,
    remove,
    read
}