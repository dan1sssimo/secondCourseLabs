import math

a = 0
b = 0
c = 0
minimum = 1000000
maximum = 0
for i in range(2):
    a = float(input('Введіть довжину катету(1): '))
    while a <= 0:
        print('Довжина катету <=0!')
        a = float(input('Введіть довжину катету(1):  '))
    b = float(input('Введіть довжину катету(2):'))
    while b <= 0:
        print('Довжина катету <=0!')
        b = float(input('Введіть довжину катету(2): '))
    rez = math.pow(a, 2) + math.pow(b, 2)
    c = round(math.sqrt(rez))
    if c < minimum:
        minimum = c
    if c > maximum:
        maximum = c
    print("Гіпотенуза : ", c)
print("Найбільша гіпотенуза: {0}\nНайменша гіпотенуза: {1}".format(maximum, minimum))
