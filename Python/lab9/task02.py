class House:
    def __init__(self, area: float = 100, price: float = 1000000) -> None:
        self._area = area
        self._price = price

    def __str__(self) -> str:
        return f'Будинок(площа: {self._area}, ціна: {self._price})'

    def final_price(self, discount: float) -> float:  # ціна зі знижкою
        return self._price - self._price * (discount / 100)


class SmallHouse(House):
    def __init__(self) -> None:
        super().__init__(area=40, price=100000)  # супер клас для доступа до батьківського класу


class Human:
    default_name = 'Undefined'
    default_age = -1

    def __init__(self, name: str, age: int, money: float, house: House) -> None:
        self.name = name
        self.age = age
        self.__money = money
        self.__house = house

    @classmethod  # вивід станд. інформації
    def default_info(cls):
        print(f'Стандартне ім\'я: {cls.default_name}')
        print(f'Стандартний вік: {cls.default_age}')

    def info(self):  # вивід інформації про власника і будинок
        print(f'Ім\'я: {self.name}')
        print(f'Вік: {self.age}')
        print(f'Гроші: {self.__money}')
        print(f'Будинок: {self.__house}')

    def earn_money(self, value: float):  # заробити гроші
        self.__money += value

    def buy_house(self, house: House, discount: float = 10):  # купити будинок
        if self.__money < house._price:  # якщо невистачає грошей
            print('Недостатньо грошей!')
            return None
        self.__money -= house.final_price(discount)
        self.__house = house
        print(f'Успішно куплено: {house}')  # будинок куплено!

    def __make_deal(self, house: House):  # заключити угоду
        self.buy_house(house)


if __name__ == '__main__':
    Human.default_info()
    human = Human('Danilo_Savchenko', 19, 10000, None)
    human.info()
    shs = SmallHouse()
    human.buy_house(shs)
    human.earn_money(110000)
    human.buy_house(shs)
    human.info()
