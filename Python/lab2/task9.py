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
    B = int(input("Введіть B: "))
    if A > B:
        print("Введіть А та B ще раз, умова A<B")
        tmp = 1
    else:
        for i in range(A, B + 1):
            if isint(i) is True:
                summa += i
        tmp = 0
print("Сума усіх цілих чисел: ", summa)
