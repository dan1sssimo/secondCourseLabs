import time
import random


def timing(f):
    def wrap(*args):
        time1 = time.time()
        ret = f(*args)
        time2 = time.time()
        print('%s функція зайняла %0.2f секунд' % (f.__name__, (time2 - time1) * 100.0))
        return ret

    return wrap


@timing
def maximum_minimum(list_randomly_num):
    return max(list_randomly_num), min(list_randomly_num)


a1 = 0
b1 = 0

leanth_list = int(input('Введіть довжину списку: '))
while leanth_list <= 0:
    print("Введіть додатнє значення!")
    leanth_list = int(input('Введіть довжину списку: '))
a1 = int(input("Введіть нижню межу списку: "))
b1 = int(input("Введіть верхню межу списку: "))
while a1 >= b1:
    print("Верхня межа повинна бути більшою за нижню межу!")
    a1 = int(input("Введіть нижню межу списку: "))
    b1 = int(input("Введіть верхню межу списку: "))
list = [random.randint(a1, b1) for i in range(leanth_list)]
print("Згенерований список:\n", list)
max_list, min_list = maximum_minimum(list)
print('MAX:{0}\nMIN:{1}'.format(max_list, min_list))
bottom = int(input("Введіть bottom: "))
upper = int(input("Введіть upper: "))
while min_list + bottom >= max_list - upper:
    print('Ви вийшли за межі рандомізації! Введіть bottom та upper ще раз!')
    bottom = int(input("Введіть bottom: "))
    upper = int(input("Введіть upper: "))
list2 = [random.randint(min_list + bottom, max_list - upper) for i in range(leanth_list)]
print("Згенерований новий список:\n", list2)
max_list2, min_list2 = maximum_minimum(list2)
print('MAX (новий список):{0}\nMIN (новий список):{1}'.format(max_list2, min_list2))
