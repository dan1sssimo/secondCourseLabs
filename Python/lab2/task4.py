import math

arr = [180, 75, 30, 45]
minimum = 0
kyt = 0

for i in range(len(arr)):
    tmp = arr[i] * (math.pi / 180)
    tmp1 = math.cos(tmp)
    if tmp1 < minimum:
        minimum = tmp1
        kyt = arr[i]
print("Мінімальний косинус кута: {0} === {1}".format(kyt, minimum))
