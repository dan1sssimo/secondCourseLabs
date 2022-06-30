def isint(x):
    try:
        int(x)
        return True
    except ValueError:
        return False


tmp = 1
tmp1 = 0
summa = 0
while tmp:
    A = int(input("Введіть A: "))
    if A >= 200:
        print("Введіть А ще раз, умова A<=200")
        tmp = 1
    else:
        for i in range(A, 200 + 1):
            if isint(i) is True:
                summa += i
                tmp1 += 1
        tmp = 0
serznach = float(summa / tmp1)
print("Середнє арифметичне цілих чисел з проміжку: ", serznach)
