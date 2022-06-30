n = int(input("Кількість елементів у списку: "))
list1 = list()
for i in range(n):
    element = int(input("Введіть елемент списку: "))
    list1.append(element)
print("Список: ", list1)
max_num = max(list1)
list1.reverse()
print("Перевернутий список: {0}\nМаксимальний елемент у списку: {1}".format(list1, max_num))