a = 0
b = 0
for i in range(3):
    a = float(input('Введіть довжишу прямокутника: '))
    while a <= 0:
        print('Довжина прямокутника <=0!')
        a = float(input('Введіть довжишу прямокутника: '))
    b = float(input('Введіть ширину прямокутника: '))
    while b <= 0:
        print('Ширина прямокутника <=0!')
        b = float(input('Введіть ширину прямокутника: '))
    res = a * b
    print("Площа прямокутника: ", res)