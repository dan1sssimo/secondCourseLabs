import math


def isint(x):
    try:
        int(x)
        return True
    except ValueError:
        return False


tmp = 1
summa = 0
while tmp:
    A = int(input("Введіть A: "))
    if A > 50 or A < 0:
        print("Введіть А ще раз, умова 0≤A≤50")
        tmp = 1
    else:
        for i in range(A, 50 + 1):
            if isint(i) is True:
                summa += math.pow(i, 2)
        tmp = 0
print("Сума квадратів усіх цілих чисел: ", summa)
