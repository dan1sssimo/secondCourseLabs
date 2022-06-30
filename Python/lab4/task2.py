list2 = list()
list3 = list()
n = int(input("Кількість елементів у списку: "))
list1 = list()
for i in range(n):
    element = int(input("Введіть елемент списку: "))
    list1.append(element)
print("Список (1): ", list1)
for i in range(len(list1)):
    if int(list1[i]) >= 0:
        list2.append(list1[i])
    else:
        list3.append(list1[i])
print("Список (2): {0}\nСписок (3): {1}".format(list2, list3))