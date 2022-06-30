const mongoose = require('mongoose');
const validator = require('validator');

mongoose.connect(`mongodb://127.0.0.1:27017/mocha`, {
    useNewUrlParser: true,
    useCreateIndex: true,
    useUnifiedTopology: true
})

let userSchema = new mongoose.Schema({
    name: {
        type: String,
        required: true,
        trim: true,
        minlength: 2
    },
    email: {
        type: String,
        required: true,
        lowercase: true,
        unique: true,
        validate(value) {
            if(!validator.isEmail(value))
                throw new Error("Тобою был выбран неправильный email");
        }
    },
    age: {
        type: Number,
        required: true,
        default: 0,
        validate(value) {
            if (value <= 0)
                throw new Error('Возраст должен быть > 0')
        }
    }
})

const User = mongoose.model("User", userSchema);

module.exports = User