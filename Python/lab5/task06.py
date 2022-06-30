max_NUM = 0
tmp = 0
M = int(input('Введіть число M: '))
N = int(input('Введіть число N: '))
for i in range(M, N + 1, 1):
    tmp1 = 0
    print('Число = ', i)
    for j in range(1, i + 1, 1):
        if int(i) % int(j) == 0:
            tmp1 += 1
    print('Кількість дільників = {0}\n-------------------'.format(tmp1))
    if tmp1 > max_NUM:
        max_NUM = tmp1
        tmp = i
print("Найбільше дільників у числа: {0}, їх кількість {1}".format(tmp, max_NUM))
