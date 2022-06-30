class Shop:
    def __init__(self, shop_name, shop_type, numbers_of_units=0):
        self.shop_name = shop_name
        self.shop_type = shop_type
        self.number_of_units = numbers_of_units

    def set_number_of_units(self):
        numbers_of_units = int(input("Кількість видів товару "))
        self.number_of_units = numbers_of_units
        return self.number_of_units

    def increment_number_of_units(self):
        increment_number_of_units = int(input("Кількість нових видів това-ру "))
        self.number_of_units += increment_number_of_units
        return self.number_of_units

    def describe_shop(self):
        print(f"Назва магазину: {self.shop_name}\nТип магазину: {self.shop_type}")

    @staticmethod
    def open_shop():
        print("Магазин відкрито")


class Discount(Shop):
    def __init__(self, discount_products, shop_name, shop_type):
        super().__init__(shop_name, shop_type)
        self.discount_products = discount_products

    def get_discounts_products(self):
        print("Знижки на продукти:")
        for i in self.discount_products:
            print(i)


if __name__ == "__main__":
    store = Shop("Minichek", "Shop")
    print(f"Назва магазину: {store.shop_name}\nТип магазину: {store.shop_type}")
    store.describe_shop()
    store1 = Shop("Morgenshtern", "Store")
    store2 = Shop("ATB", "Food store")
    store3 = Shop("Omega", "Food store")
    store1.describe_shop()
    store2.describe_shop()
    store3.describe_shop()
    store_C = Shop("Nikotino", "Tabako store")
    print(store_C.number_of_units)
    store_C.number_of_units = 100
    print(store_C.number_of_units)
    print(store_C.set_number_of_units())
    print(store_C.increment_number_of_units())
    list1 = ["Молоко", "Сир", "Ковбаса"]
    store_discount = Discount(list1, "ATB", "Food store")
    store_discount.get_discounts_products()
