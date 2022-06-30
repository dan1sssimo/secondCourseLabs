from random import *  # модуль рандома для псевдорандома чисел в список

list1 = list()
list2 = list()
for i in range(30):
    num = uniform(-100, 100)
    num = round(num, 1)
    list1.insert(i, num)
print("Список (1): ", list1)
for i in range(0, len(list1), 3):
    list2.append(list1[i:3 + i])
sum(abs(i) for i in range(len(list2)))
list2.sort()
print("Список (2) відсортований: ", list2)
