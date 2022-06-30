import random
import datetime
import time
import telebot

telegramBot = telebot.TeleBot('5098993428:AAEIwtIxf5lPjCEcGAkEOAbr1xsSqAtnnqU')

class Question:
    def __init__(self, question, answerOptions, rightId):
        self.question = question
        self.answerOptions = answerOptions
        self.rightId = rightId

listQuestions = [Question('Який тип даних відповідає за цілі числа?', ['int', 'float', 'get', 'bet'], 0),
                 Question('Где правильно создана переменная?', ['Нет подходящего варианта', 'Статична', 'Локальна', 'Динамічна'], 3),
                 Question('Какая функция выводит что-либо в консоль?', ['consol.log', 'str', 'num_pad', 'print()'], 3),
                 Question("Как получить данные от пользователя?", ['get()', 'read()', 'sort', 'print..'], 1),
                 Question('Какая библиотека отвечает за время?', ['time', 'Time', 'belt', 'liber'], 1),
                 Question('Сколько библиотек можно импортировать в один проект?', ['1', '3', '100', 'Неограниченое количество'], 3),
                 Question('Где правильно создана переменная?', ['str=''', 'int 3', 'str=5', 'str=555'], 0),
                 Question('Где правильно создана переменная?', ['try', 'for', 'str=''', 'int 5'], 2),
                 Question('Яка бібліотека найкраще підходе для створення бота?', ['telebot', 'aboba.bot', 'linkIN', 'claassmet'], 0),
                 Question('Яка бібліотека потрібна для працювання з random?', ['telebot', 'os', 'random', 'datetime'], 2)]


currentQuestionId = 0

currentRight = listQuestions[currentQuestionId].rightId

currentReply = False

theNumberOfCorrectAnswers = 0


def generateRandomNumbers():
    randomNumbers = []
    while len(randomNumbers) < 10:
        number = random.randint(0, 9)
        while number in randomNumbers:
            number = random.randint(0, 9)

        randomNumbers.append(number)

    return randomNumbers

def createButton(data):
    button = telebot.types.ReplyKeyboardMarkup()
    button.row(telebot.types.InlineKeyboardButton(data.answerOptions[0], callback_data='0'))
    button.row(telebot.types.InlineKeyboardButton(data.answerOptions[1], callback_data='1'))
    button.row(telebot.types.InlineKeyboardButton(data.answerOptions[2], callback_data='2'))
    button.row(telebot.types.InlineKeyboardButton(data.answerOptions[3], callback_data='3'))
    return button


def createMessage(index, number, message):
    telegramBot.send_message(message.chat.id, f'{index}. {listQuestions[number].question}', reply_markup=createButton(listQuestions[number]))

@telegramBot.message_handler(['start', 'help'])
def main(message):
    global theNumberOfCorrectAnswers
    theNumberOfCorrectAnswers = 0
    randomNumbers = generateRandomNumbers()
    startTime = time.time()
    for i in range(10):
        createMessage(i + 1, randomNumbers[i], message)
        global currentReply
        global currentRight
        global currentQuestionId

        currentQuestionId = randomNumbers[i]
        currentRight = listQuestions[currentQuestionId].rightId
        currentReply = False
        while not currentReply:
            pass
    endTime = time.time()
    messageResult = f'Проходження тесту завершено!\nУвага, ваші результати:\nДата та час проходження тесту: {datetime.datetime.now().strftime("%d.%m.%Y %H:%M:%S")}\nЧас проходження тесту: {int((endTime - startTime) // 60)} хв. {int((endTime - startTime) % 60)} с.\nОцінка: {theNumberOfCorrectAnswers} із 10'
    telegramBot.send_message(message.chat.id, messageResult, reply_markup=telebot.types.ReplyKeyboardRemove())
    currentQuestionId = None
    currentRight = None

@telegramBot.callback_query_handler(lambda q: int(q.date) == currentRight)
def callbackButton(massage: telebot.types.CallbackQuery):
    telegramBot.send_message(telebot.message.chat.id, 'Правильно! ✅')

    global currentReply
    currentReply = True
    global  theNumberOfCorrectAnswers
    theNumberOfCorrectAnswers += 1

@telegramBot.callback_query_handler(lambda q: int(q.date) == currentRight)
def callbackButton(massage: telebot.types.CallbackQuery):
    telegramBot.send_message(massage.message.chat.id, 'Неправильно! ❌')

    global currentReply
    currentReply = True

@telegramBot.message_handler()
def callbackText(message: telebot.types.Message):
    global currentReply
    global currentRight
    global currentQuestionId

    #
    if message.text.lower() == listQuestions[currentQuestionId].answerOptions[currentRight].lower():
        telegramBot.reply_to(message, 'Правильно! ✅')
        global theNumberOfCorrectAnswers
        theNumberOfCorrectAnswers += 1
    else:
        telegramBot.reply_to(message, 'Неправильно! ❌')


    global currentReply
    currentReply = True

telegramBot.polling(non_stop=True)