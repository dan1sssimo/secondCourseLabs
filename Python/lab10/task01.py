class Bank:
    def __init__(self, balance):
        self.balance = balance

    def __sub__(self, other):
        self.balance += other
        return self.balance

    def __neg__(self, other):
        if self.balance - other >= 0:
            self.balance -= other
        else:
            print("Недостатньо коштів")

    def check(self):
        print(f"Ваш баланс: {self.balance}")


if __name__ == "__main__":
    x = int(input("Початковий баланс "))
    user = Bank(x)
    while 1:
        print(
            "Натисніть:\n 1 - покласти на баланс\n 2 - зняти з балансу \n 3 - перевірити баланс\n 0 - end")
        n = int(input())
        if n == 1:
            sub = int(input("Покласти покласти на баланс: "))
            user.__sub__(sub)
        elif n == 2:
            neg = int(input("Зняти з балансу: "))
            user.__neg__(neg)
        elif n == 3:
            user.check()
        elif n == 0:
            break
        else:
            print("Спробуйте ще раз!!!")
