class Error:
    def __init__(self, lenth):
        self.len = lenth

    def check(self):
        if self.len < 10:
            raise ValueError("Ім'я має бути не менше 10 символів")


if __name__ == "__main__":
    x = input("Введіть ім'я ")
    x1 = Error(len(x))
    x1.check()
