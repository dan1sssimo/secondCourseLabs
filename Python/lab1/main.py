a = int(float(input("Введіть ціле значення:\n")))
b = float(input("Введіть дробове значення:\n"))
c = int(float(input("Введіть друге ціле значення:\n")))
d = float(input("Введіть друге дробове значення:\n"))
c1 = a + b
c2 = c - d
c3 = a * b
c4 = c / d
c5 = a ** b
c6 = c // d
c7 = a % b
print("Список:")
rez_list = [c1, c2, c3, c4, c5, c6, c7]
print(rez_list)
print("Кількість елементів списку:")
print(len(rez_list))
print("Парні елементи списку:")
for element in rez_list:
    if element % 2 == 0:
        print(element)
print("Поміняв місцями 2 та 5 елементи:")
rez_list[1], rez_list[4] = rez_list[4], rez_list[1]
print(rez_list)
name = input("Прізвище та ім'я:")
print("В ході виконання данної лабораторної роботи ми ознайомилися з алгоритмами \n"
      "послідовної (лінійної) структури, з процедурами запуску програм, які реалізують ці алгоритми\n"
      "на мові Python; ознайомились з інтегрованим середовищем розробки – integrated development environment (IDLE).")
