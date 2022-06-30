const express = require("express");
const userRouter = require('./routers/user')
const taskRouter = require('./routers/task')

let app = express()
app.use(userRouter)
app.use(taskRouter)
require('./db/mongoose');

app.listen(3000, () => {
    console.log("Listening on port 3000")
})