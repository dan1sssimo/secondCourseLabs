x1 = [1, 10, 3]
print("3 цілих числа:", x1)
print("Числа, які належать проміжку [1,3]: ", end="")
for i in range(len(x1)):
    if x1[i] >= 1 and x1[i] <= 3:
        print(x1[i], end="; ")
