import math

# Вводити тільки цілі числа
tmp = 1
S = 0
while tmp:
    bichnaStorona = int(input("Введіть довжину бічної сторони трикутника: "))
    osnova = int(input("Введіть довжину основи трикутника: "))
    if bichnaStorona * 2 <= osnova:
        print("Сума двох бічних сторін повинна бути більша за основу рівнобедренного трикутника\n Введіть дані ще раз.")
        tmp = 1
    else:
        bichStrquadrat = math.pow(bichnaStorona, 2)
        osnovaquadrat = math.pow((osnova / 2), 2)
        vusota = math.sqrt(bichStrquadrat - osnovaquadrat)
        S = round(0.5 * (osnova * vusota), 2)
        print("Площа трикутника: ", S)
        tmp = 0
if S % 2 == 0:
    print("Площа трикутника парна, а тому поділена на 2: ", S / 2)
else:
    print("Не можу ділити на 2!")
