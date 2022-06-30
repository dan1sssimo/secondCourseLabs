from random import *  # модуль рандома для псевдорандома чисел в список

list1 = list()
list2 = list()
for i in range(10):
    num = randint(1, 15)
    list1.insert(i, num)
print("Список (1): ", list1)
max1 = max(list1)
for i in range(len(list1)):
    if int(max1) > int(list1[i] ** 2):
        list2.append(list1[i] ** 2)
list2.sort()
list2.reverse()
print("Максимальний елемент першого списку: {0}\nСписок (2): {1}".format(max1, list2))
