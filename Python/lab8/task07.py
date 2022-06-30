import roman


class Transform1:
    def __init__(self, num):
        self.num = num

    def function1(self):
        result = roman.toRoman(self.num)
        return result


class Transform2:
    def __init__(self, num):
        self.num = num

    def function2(self):
        result = roman.fromRoman(self.num)
        return result


if __name__ == "__main__":
    num1 = int(input("Введіть десятокве число: "))
    x1 = Transform1(num1)
    print(x1.function1())
    num2 = input("Введіть римське  число: ")
    x2 = Transform2(num2)
    print(x2.function2())
