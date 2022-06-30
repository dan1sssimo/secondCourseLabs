import random


class Coin:
    def __init__(self, __sideup):
        self.sideup = __sideup

    def toss(self):
        tmp = random.randint(1, 2)
        if self.sideup == "head" and tmp == 1:
            return "Орел"
        elif self.sideup == "head" and tmp == 2:
            return "Решка"
        elif self.sideup == "tail" and tmp == 1:
            return "Решка"
        elif self.sideup == "tail" and tmp == 2:
            return "Орел"
        else:
            print("Помилка стартового положення монети")


if __name__ == "__main__":
    x = str(input("Введіть початкове положення монети (head or tail): "))
    coin = Coin(x)
    tmp = int(input("Введіть кількість підкидань "))
    for i in range(tmp):
        print(coin.toss())
