tmp = 1
summa = 0
while tmp:
    A = int(input("Введіть A: "))
    B = int(input("Введіть B: "))
    if B <= A:
        print("Введіть А та B ще раз, умова B>=A")
        tmp = 1
    else:
        tmp = 0
while A != B + 1:
    summa += A
    A += 1
print("Сума усіх цілих чисел: ", summa)
