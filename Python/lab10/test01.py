from task08 import Shop, Discount
import unittest


class TestShop(unittest.TestCase):
    def setUp(self):
        self.shop = Shop('Minichek', 'Shop')

    def test_init(self):
        self.assertEqual((self.shop.shop_name, self.shop.shop_type), ('Minichek', 'Shop'),
                         'Отримані значення є помилковими')

    def test_set_number_of_units(self):
        numbers_of_units = int('5')
        self.shop.number_of_units = numbers_of_units
        self.assertEqual(self.shop.number_of_units, 5)

    def test_increment_number_of_units(self):
        numbers_of_units = int('5')
        self.shop.number_of_units = numbers_of_units
        increment_number_of_units = int('10')
        self.shop.number_of_units += increment_number_of_units
        self.assertEqual(self.shop.number_of_units, 15)

    def test_describe_shop(self):
        self.assertEqual(f"Назва магазину: {self.shop.shop_name}\nТип магазину: {self.shop.shop_type}",
                         self.shop.describe_shop())


class TestDiscount(unittest.TestCase):
    def setUp(self):
        list1 = ["Молоко", "Сир", "Ковбаса"]
        self.discount = Discount(list1, 'Minichek', 'Shop')

    def test_init(self):
        self.assertEqual((self.discount.discount_products, self.discount.shop_name, self.discount.shop_type),
                         (["Молоко", "Сир", "Ковбаса"], 'Minichek', 'Shop'),
                         'Отримані значення є помилковими')

    def test_get_discounts_products(self):
        list = []
        for i in self.discount.discount_products:
            list.append(i)
        self.assertEqual(f'Знижки на продукти:\n {list}', self.discount.get_discounts_products())


if __name__ == '__main__':
    unittest.main()
