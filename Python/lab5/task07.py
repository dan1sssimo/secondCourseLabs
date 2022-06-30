import time


def timing(f):
    def wrap(*args):
        time1 = time.time()
        ret = f(*args)
        time2 = time.time()
        print('%s функція зайняла %0.2f секунд' % (f.__name__, (time2 - time1) * 100.0))
        return ret

    return wrap


def checkforproste(chuslo):
    i = 2
    while i < chuslo:
        if chuslo % i == 0:
            return False
        i += 1
    return True


@timing
def show_info(number, element_menu):
    array = []
    for i in range(2, number + 1):
        if checkforproste(i):
            array.append(i)
    if element_menu == 1:
        print("Список: ")
        print(array)
    if element_menu == 2:
        print("Рядками у стовпчик: ")
        for i in range(len(array)):
            tmp = array[i]
            print(tmp)
    if element_menu == 3:
        print("Кількість простих чисел: ", len(array))


number = int(input("Введіть границю N: "))
rez = int(input("Введіть елемент меню в якому буде представлено результат:\n1. Список\n"
                "2. Рядками у стовпчик:\n3. Кількість простих чисел\n"))
show_info(number, rez)
