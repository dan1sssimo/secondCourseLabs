const yargs = require("yargs")
const notes = require("./user.js")
const user = require('./user.json')

yargs.command({
    command: "add",
    describe: "Add",
    builder: {
        title: {
            type: "string",
            demandOption: true
        },
        level: {
            type: "string",
            demandOption: true
        }
    },
    handler(args) {
        notes.addNote(user, args)
    }
})

yargs.command({
    command: "list",
    describe: "All information",
    handler() {
        notes.list(user)
    }
})

yargs.command({
    command: "read",
    builder: {
        title: {
            type: "string",
            demandOption: true
        }
    },
    describe: "Show one info",
    handler(args) {
        notes.read(user, args)
    }
})

yargs.command({
    command: "remove",
    describe: "Remove info",
    builder: {
        title: {
            type: "string",
            demandOption: true
        },
    },
    handler(args) {
        notes.remove(user, args)
    }
})

yargs.parse()