const express = require("express");
const User = require('../models/user');
const auth = require('../middleware/auth');
const router = new express.Router();

router.get("/users", auth, async (req, res) => {
    if (req.user.admin) {
        let id = req.query.id;
        if (!id) {
            User.find({}).then((users) => {
                res.status(200).send(users);
            }).catch((error) => {
                res.status(500).send();
            });
        } else {
            User.find({_id: id}).then((user) => {
                res.status(200).send(user);
            }).catch((error) => {
                res.status(500).send();
            });
        }
    }
    else {
        res.status(403).send({error: "You dont have administrator rights"});
    }
});

router.post("/users", async (req, res) => {
    try {const user = new User({
        name: req.query.name,
        password: req.query.password,
        age: req.query.age,
        email: req.query.email,
        admin: req.query.admin
    })
        await user.save();
        const token = await user.generateAuthToken();
        res.status(200).send({user, token});
    } catch(error) {
        res.status(500).send(error);
    }
});

router.delete("/users/me", auth, async (req, res) => {
    try {
        await req.user.remove();
        res.send(req.user);
    } catch (e) {
        res.status(500).send(e.message);
    }
});

router.post("/users/login", async (req, res) => {
    try {
        const user = await User.findOneByCredentials(req.query.email, req.query.password);
        const token = await user.generateAuthToken();
        res.send({user, token});
    } catch (e) {
        res.status(400).send(e.toString());
    }
});

router.put("/users/me", auth, async (req, res) => {
    try {
        const user = req.user;
        const updates = ['name', 'email', 'password', 'age'];
        updates.forEach((update) => user[update] = req.query[update]);
        await user.save();
        res.status(201).send(user);
    } catch (e) {
        res.status(500).send(e.toString());
    }
});

router.get("/users/me", auth, async (req, res) => {
    res.send(req.user);
});

router.post("/users/logout", auth, async (req, res) => {
    try {
        req.user.tokens = req.user.tokens.filter((token) => {
            return token.token !== req.token;
        });
        await req.user.save();
        res.send("Logout was successful");
    } catch (e) {
        res.status(500).send();
    }
});

module.exports = router;