const mongoose = require("mongoose");
const validator = require("validator");
const bcrypt = require("bcrypt");
const jwt = require("jsonwebtoken")

let userSchema = new mongoose.Schema({
    name: {
        type: String,
        required: true,
        trim: true
    },
    email: {
        type: String,
        lowercase: true,
        unique: true,
        validate(value) {
            if (!validator.isEmail(value)) {
                throw new Error("Email невірний");
            }
        }
    },
    password: {
        type: String,
        required: true,
        validate(value) {
            if (value.length < 7) {
                throw new Error("Пароль занадто короткий");
            }
            if (validator.contains(value, 'password', {ignoreCase: true})) {
                throw new Error("Пароль не може містити слово: \"password\"")
            }
        },
        trim: true
    },
    age: {
        type: Number,
        default: 0,
        validate(value) {
            if (value < 0) {
                throw new Error("Вік має бути більше нуля");
            }
        }
    },
    admin: {
        type: Boolean,
        required: false,
        default: false
    },
    tokens: [{
        token: {
            type: String,
            required: true
        }
    }]
});

userSchema.pre('save', async function (next) {
    const user = this;
    if (user.isModified('password')) {
        user.password = await bcrypt.hash(user.password, 8);
    }
    next();
});

userSchema.statics.findOneByCredentials = async (email, password) => {
    const user = await User.findOne({email});
    if (!user) {
        throw new Error('Incorrect email');
    }
    const isMatch = await bcrypt.compare(password, user.password);
    if (!isMatch) {
        throw new Error('Incorrect password');
    }
    return user;
};

userSchema.methods.generateAuthToken = async function() {
    const user = this;
    const token = jwt.sign({_id: user._id.toString()}, 'kdweueksdsjfij');
    user.tokens = user.tokens.concat({token});
    await user.save();
    return token;
};

userSchema.methods.toJSON = function () {
    const user = this;
    const userObject = user.toObject();
    delete userObject.password;
    delete userObject.tokens;
    return userObject;
};

userSchema.virtual('tasks', {
    ref: "Task",
    localField: '_id',
    foreignField: 'owner'
});

const User = mongoose.model('User', userSchema)

module.exports = User;