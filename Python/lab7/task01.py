import re
import datetime


class Person:
    def __init__(self, surname, first_name, birth_date, nickname=''):
        self.surname = surname
        self.first_name = first_name
        self.nickname = nickname
        self.search_date(birth_date)

    def search_date(self, birth_date):
        regex = r'(\d{4})-(\d{2})-(\d{2})'
        result = re.match(regex, birth_date)
        self.birth_date = datetime.date(int(result.group(1)), int(result.group(2)), int(result.group(3)))

    def get_age(self):
        year = int(datetime.datetime.today().year - self.birth_date.year)
        month = int(datetime.datetime.today().month - self.birth_date.month)
        day = int(datetime.datetime.today().day - self.birth_date.day)
        if self.birth_date.month > month or self.birth_date.day > day and self.birth_date.month == month:
            year -= 1
        return year

    def get_fullname(self):
        return self.surname + " " + self.first_name


if __name__ == "__main__":
    surname = input("Введіть прізвище: ")
    first_name = input("Введіть ім'я: ")
    birth_date = input("Введіть дату народження у форматі ХХХХ-ХХ-ХХ: ")
    nickname = input("Введіть нікнейм (не обов'язково): ")
if len(nickname) > 0:
    person = Person(surname, first_name, birth_date, nickname)
else:
    person = Person(surname, first_name, birth_date)
print("Прізвище та ім'я особи: ", person.get_fullname())
print("Повних років: ", person.get_age())

print("TASK02")


def modifier(filename):
    arr = []
    with open(f"{filename}", "r", encoding="UTF-8") as a:
        for line in a:
            tmp1 = line.rstrip("\n")
            arr.append(tmp1.split(", "))
        for i in range(len(arr)):
            user = (Person(arr[i][0], arr[i][1], arr[i][2]))
            arr[i].append(str(user.get_age()))
    with open(r'rez_task02.txt', "w", encoding="UTF-8") as rez_file:
        for info in arr:
            info = ', '.join(info)
            rez_file.write(info + '\n')


modifier('task02.txt')
