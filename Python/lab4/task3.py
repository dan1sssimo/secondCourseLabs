from random import *  # модуль рандома для псевдорандома чисел в список

sum1 = 0
list1 = list()
for i in range(6):
    num = randint(0, 20)
    list1.insert(i, num)
    if i % 2 != 0:
        sum1 += list1[i]
print("Ваш список: {0}\nСума елементів із непарними індексами: {1}".format(list1, sum1))