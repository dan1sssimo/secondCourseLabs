sum_pokupok = float(input("Введіть суму покупок: "))
if sum_pokupok > 1000:
    print("Вартість покупки зі знижкою: ", sum_pokupok - (sum_pokupok / 100) * 5)
elif sum_pokupok > 500:
    print("Вартість покупки зі знижкою: ", sum_pokupok - (sum_pokupok / 100) * 3)
else:
    print("Вартість покупки зі знижкою: ", sum_pokupok)
