a = int(float(input("Введіть значення року: ")))
if (a % 4 == 0 and a % 100 != 0) or a % 400 == 0:
    print("Рік високосний")
else:
    print("Рік не високосний")
