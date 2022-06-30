tmp = 1
number = int(input('Введіть число : '))
print('Для зупинки програми введіть "0" ')
while tmp != 0:
    dil = int(input('Введіть дільник числа: '))
    if dil == 0:
        break
    if number % dil == 0:
        print("Число є дільником числа")
    else:
        print("Число не є дільником числа")
