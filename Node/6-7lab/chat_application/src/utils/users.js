const users = [];
let typingUsers = [];

const addUser = ({ id, username, room}) => {
    // Clean the data
    username = username.trim().toLowerCase()
    room = room.trim().toLowerCase()

    // Validate the data
    if (!username || !room) {
        return {
            error: 'Username and room are required!'
        }
    }

    // Check for existing user
    const existingUser = users.find((user) => {
        return user.room === room && user.username === username
    })

    // Validate username
    if (existingUser) {
        return {
            error: 'Username is in use!'
        }
    }

    // Store user
    let backgrounds = [
        'alert-primary',
        'alert-secondary',
        'alert-success',
        'alert-warning',
    ];
    let bgClass = backgrounds[Math.floor(Math.random()*backgrounds.length)];
    const user = { id, username, room, bgClass}
    users.push(user)
    return { user }
}
const removeUser = (id) => {
    const index = users.findIndex((user) => user.id === id)

    if (index !== -1) {
        return users.splice(index, 1)[0]
    }
}

const getUser = (id) => {
    return users.find((user) => user.id === id)
}

const getUsersInRoom = (room) => {
    room = room.trim().toLowerCase()
    return users.filter((user) => user.room === room)
}

const addTypingUser = (id) => {
    let user = getUser(id);
    // Check for existing user
    const isTypingUser = typingUsers.find((typingUser) => {
        return typingUser.id === id
    })
    // Validate username
    if (!isTypingUser) {
        typingUsers.push(user)
    }
}

const removeTypingUser = (id) => {
    const index = typingUsers.findIndex((user) => user.id === id);

    if (index !== -1) {
        return typingUsers.splice(index, 1)[0];
    }
}

const getTypingUsersInRoom = (room) => {
    room = room.trim().toLowerCase();
    return typingUsers.filter((user) => user.room === room);
}

module.exports = {
    addUser,
    removeUser,
    getUser,
    getUsersInRoom,
    addTypingUser,
    removeTypingUser,
    getTypingUsersInRoom
}