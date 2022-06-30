from random import *  # модуль рандома для псевдорандома чисел в список
import math

min1 = 0
list1 = list()
for i in range(30):
    num = uniform(-100, 100)
    num = round(num, 1)
    list1.insert(i, num)
print("Список (1): ", list1)
for i in range(len(list1)):
    list1[i] = math.fabs(list1[i])
min1 = min(list1)
list1.sort()
print("Мінімальний елемент за модулем: {0}\nСписок (2): {1}".format(min1, list1))
