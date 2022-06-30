import requests
from bs4 import BeautifulSoup

# TODO task1

baseURL = 'https://rozklad.ztu.edu.ua/'

try:
    response = requests.get(baseURL, headers={
        'Accept': 'text/html,application/xhtml+xml,application/xml;q=0.9,' 'image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9'})

    htmlCode = BeautifulSoup(response.text, 'html.parser')
    fikt = htmlCode.find_all('div', class_='auto-clear')[1]
    groupFikt = fikt.find_all('a', class_='collection-item')
    allClassrooms = {}

    for i in range(len(groupFikt)):
        response = requests.get(baseURL + groupFikt[i]['href'])
        htmlCode = BeautifulSoup(response.text, 'html.parser')

        classrooms = htmlCode.find_all('span', class_='room')

        for room in classrooms:
            if room != None:
                current_room = room.text.strip()
                if current_room in allClassrooms:
                    allClassrooms[current_room] = allClassrooms[current_room] + 1
                else:
                    allClassrooms[current_room] = 1

    allClassrooms = dict(sorted(allClassrooms.items(), key=lambda item: item[1], reverse=True))

    print('аудиторіяї в яких проводиться більше всього занять на ФІКТі')
    i = 0
    for key, value in allClassrooms.items():
        print('Аудиторія     ' + str(key) + ' використовується   ' + str(value) + '   разів.')

        i += 1
        if i >= 4:
            break
except:
    print('Помилка в завдані 1.')
else:
    print('Завдання 1 виконано.')
# TODO task2

roomsURL = 'https://rozklad.ztu.edu.ua/schedule/room'

try:
    response = requests.get(roomsURL)
    htmlCode = BeautifulSoup(response.text, 'html.parser')

    classrooms = htmlCode.find_all('a')
    #
    classrooms = [i for i in classrooms if i.text.startswith('ОЦ')]

    classroomsDict = {}

    for i in range(len(classrooms)):
        response = requests.get(baseURL + classrooms[i]['href'])
        htmlCode = BeautifulSoup(response.text, 'html.parser')
        count_lessons = len(htmlCode.find_all('td', class_='content'))

        classroomsDict[classrooms[i].text] = count_lessons

    classroomsDict = dict(sorted(classroomsDict.items(), key=lambda item: item[1]))

    print(
        'Аудиторії обчислювального центру які частіше всього залишаються не задіяними.')
    i = 0
    for key, value in classroomsDict.items():
        print('Аудиторія     ' + str(key) + '     не використовується    ' + str(value) + '    разів.')

        i += 1
        if i == 3:
            break
except:
    print('Помилка в завданні 2.')
else:
    print('Завдання 2 виконано.')
# TODO task3

groupURL = 'https://rozklad.ztu.edu.ua/schedule/group/ІПЗ-20-4'

try:
    response = requests.get(groupURL)
    htmlCode = BeautifulSoup(response.text, 'html.parser')

    classrooms = htmlCode.find_all('span', class_='room')

    groupClassroom = {}

    for room in classrooms:
        if room != None:
            current_room = room.text.strip()
            if current_room in groupClassroom:
                groupClassroom[current_room] = groupClassroom[current_room] + 1
            else:
                groupClassroom[current_room] = 1

    groupClassroom = dict(sorted(groupClassroom.items(), key=lambda item: item[1], reverse=True))
    print('Аудиторії в яких частіше всього проходять заняття у моїй групи')

    i = 0
    for key, value in groupClassroom.items():
        print('Аудиторія     ' + str(key) + '     використовується      ' + str(value) + '      разів.')

        i += 1
        if i >= 4:
            break
except:
    print('Помилка в завданні 3.')
else:
    print('Завдання 3 виконано.')
