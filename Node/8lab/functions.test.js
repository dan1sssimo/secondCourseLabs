const functions = require('./modules/functions');
const assert = require('assert');
const User = require('./models/user');

describe('factorial', function () {
    it('F(0)', function () {
        assert.equal(functions.factorial(0), 1)
    })
    it('F(-5)', function () {
        assert.equal(functions.factorial(-5), -120)
    })
    it('F(6)', function () {
        assert.equal(functions.factorial(6), 720)
    })
})

let users = [
    {name: 'Ivan', age: 'sd', email: 'asdasdasdasdaag@gmail.com'}, // неправильний вік(рядком)
    {name: 'Max', age: 8, email: 'asdasdasdh@gmail.com'},
    {name: 'Ethan', age: 23, email: 'asdasdasdh@gmail.com'}, // дубльвонай email
    {name: 'asdasdasdsd', age: -15, email: 'sd@ukr.net'}, // неправильний вік(<=0)
    {name: "Name"}, // не вказаний вік та email
    {name: 'Kevin', age: 43, email: 'kevin@gmail.com'},
    {name: 'David', age: 12, email: 'asdasdasd'}, // неправильний email
    {name: 'Chloe', age: 8, email: 'asdasdasdasdaag@gmail.com'},
    {name: 'M', age: 15, email: 'm@gmail.com'}, // коротке ім'я
]

describe('User', function () {
    for (let i = 0; i < users.length; i++) {
        it(`User ${i + 1} is testing`, function (done) {
            let user = new User({name: users[i].name, email: users[i].email, age:users[i].age});
            user.save(done);
        })
    }
})