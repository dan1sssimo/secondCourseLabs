import math

N = 225
tmp = 1
tmp1 = 0
while tmp:
    if math.pow(5, tmp1) > N:
        tmp = 0
        break
    else:
        tmp1 += 1
        tmp = 1
print("Найменше ціле число K= {0} , 5^{0} = {1}".format(tmp1 - 1, math.pow(5, (tmp1 - 1))))
