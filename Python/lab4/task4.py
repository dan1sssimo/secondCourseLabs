from random import *  # модуль рандома для псевдорандома чисел в список

max1 = 0
list2 = list()
list1 = list()
for i in range(30):
    num = randint(-100, 100)
    list1.insert(i, num)
print("Список (1): ", list1)
for i in range(len(list1)):
    if int(list1[i]) > int(max1):
        max1 = list1[i]
        tmp = i + 1
for i in range(len(list1)):
    if int(list1[i]) % 2 != 0:
        list2.append(list1[i])
print("Масимальний елемент це : {0}\nЗ порядковим номером: {1}".format(max1, tmp))
list2.sort()
list2.reverse()
if len(list2) == 0:
    print("У першому списку немає непарних чисел!!!")
else:
    print("Список (2)", list2)