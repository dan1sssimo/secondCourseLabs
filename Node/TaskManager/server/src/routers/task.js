const express = require("express");
const Task = require('../models/task');
const auth = require('../middleware/auth');
const router = new express.Router();

router.get("/tasks", auth, async (req, res) => {
    if (req.query.id) {
        await Task.findOne({_id: req.query.id}).then((task) => {
            if (task.owner === req.user.id || req.user.admin)
                res.status(200).send(task);
            else
                res.status(404).send({error: "This task is not yours"});
        }).catch((e) => {
            res.status(500).send(e.message);
        });
    } else {
        let filter = {owner: req.user.id};
        if (req.user.admin)
            filter = null;
        await Task.find(filter).then((tasks) => {
            res.status(200).send(tasks);
        }).catch((e) => {
            res.status(500).send(e.message);
        });
    }
});

router.post("/tasks", auth, async (req, res) => {
    const task = new Task({
        description: req.query.description,
        completed: req.query.completed,
        owner: req.user.id
    });
    try {
        await task.save();
        res.status(201).send(task);
    } catch (e) {
        res.status(500).send(e.message);
    }
});

router.put("/tasks", auth, async (req, res) => {
    try {
        await Task.findOne({_id: req.query.id}).then((task) => {
            if (task.owner === req.user.id || req.user.admin) {
                const updates = ['description', 'completed'];
                updates.forEach((update) => task[update] = req.query[update]);
                task.save();
                res.status(200).send(task);
            } else
                res.status(404).send({error: "This task is not yours"});
        });
    } catch (e) {
        res.status(500).send(e.message);
    }
});

router.delete("/tasks", (req, res) => {
    let id = req.query.id;
    Task.findOneAndDelete({_id: id}).then(() => {
        res.status(200).send();
    }).catch((error) => {
        res.status(500).send();
    });
});


router.get("/tasks/:id", async (req, res) => {
    try {
        let task = await Task.findById(req.params.id);
        res.status(200).send(task);
    } catch (error) {
        res.send(error.message);
    }
})


router.delete("/tasks/:id", (req, res) => {
    Task.findOneAndDelete({_id: req.params.id}).then(() => {
        res.status(200).send();
    }).catch((error) => {
        res.status(500).send(error);
    });
});
module.exports = router;