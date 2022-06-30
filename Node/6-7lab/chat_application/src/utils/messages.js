const generateMessage = (username, text, bgClass) => {
    return {
        username,
        text,
        bgClass,
        createdAt: new Date().getTime()
    }
}

const generateLocationMessage = (username, text, to, bgClass) => {
    return {
        username,
        text,
        to,
        bgClass,
        createdAt: new Date().getTime()
    }
}

module.exports = {
    generateMessage,
    generateLocationMessage
}