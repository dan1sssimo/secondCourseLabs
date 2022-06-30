import math

arr = [90, 30, 180]
maximum = 0
kyt = 0

for i in range(len(arr)):
    tmp = arr[i] * (math.pi / 180)
    tmp1 = math.sin(tmp)
    if tmp1 > maximum:
        maximum = tmp1
        kyt = arr[i]
print("Максимальний синус кута: {0} === {1}".format(kyt, maximum))
