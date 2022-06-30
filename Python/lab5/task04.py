import math


def smallestTriangle(x, y):  # s прямок.тр. і діагоналі
    return round((x * y) / 2, 2), math.sqrt(math.pow(x, 2) + math.pow(y, 2))


def sTriangle(pivperiment, a1, b1, diagonal):  # s трикутника
    return math.sqrt((pivperiment - a1) * (pivperiment - b1) * (pivperiment - diagonal) * pivperiment)


A = 0
B = 0
C = 0
D = 0
A = float(input("Введіть сторону:"))
B = float(input("Введіть сторону:"))
C = float(input("Введіть сторону:"))
D = float(input("Введіть сторону:"))
while A <= 0:
    print('Сторона <=0')
    A = float(input('Введіть сторону: '))
while B <= 0:
    print('Сторона <=0')
    B = float(input('Введіть сторону: '))
while C <= 0:
    print('Сторона <=0')
    C = float(input('Введіть сторону: '))
while D <= 0:
    print('Сторона <=0')
    D = float(input('Введіть сторону: '))
s1Triangle, diagonal = smallestTriangle(B, A)
print("Діагональ= ", round(diagonal, 2))
pivperum = round((C + D + diagonal) / 2)
print("Півпериметр= ", round(pivperum, 2))
print("Площа меншого трикутника: ", round(s1Triangle, 2))
SSStriangle = sTriangle(pivperum, C, D, diagonal)
print("Площа іншого трикутника: ", round(SSStriangle, 2))
rezzz = round(SSStriangle + s1Triangle, 2)
print("Площа чотирикутника: ", rezzz)
# 3 4 5 6 Вводити
