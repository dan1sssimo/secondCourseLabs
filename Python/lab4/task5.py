from random import *  # модуль рандома для псевдорандома чисел в список

list1 = list()
for i in range(30):
    num = randint(-100, 100)
    list1.insert(i, num)
print("Список (1): ", list1)
for i in range(len(list1)):
    if list1[i] < 0 and i == len(list1) - 1:
        print("{0} - це останній елемент списку!".format(list1[i]))
        break
    if list1[i] < 0 and list1[i + 1] < 0:
        print("{0},{1}".format(list1[i], list1[i + 1]))
