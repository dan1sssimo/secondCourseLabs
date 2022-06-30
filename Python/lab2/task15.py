import math

n = 35
for i in range(1, n * n):
    if math.pow(i, 2) > n:
        print("Перше число, що більше n", math.pow(i, 2))
        break
    else:
        continue
