from task09_adm import Admin
from task09_adm import Privileges
from task09_user import User
import unittest


class TestUser(unittest.TestCase):
    def setUp(self):
        self.user = User("Савченко", "Данило", "Вільський шлях 14", "dan1ssimo_")

    def test_init(self):
        self.assertEqual((self.user.first_name, self.user.last_name, self.user.adress, self.user.nickname),
                         ("Савченко", "Данило", "Вільський шлях 14", "dan1ssimo_"))

    def test_describe_user(self):
        self.assertEqual((self.user.first_name, self.user.last_name), self.user.describe_user())

    def test_greeting_user(self):
        self.assertEqual(f"Вітаю {self.user.nickname}!!!", self.user.greeting_user())

    def test_increment_login_attempts(self):
        self.user.login_attempts += 1
        self.assertEqual(self.user.increment_login_attempts(), self.user.login_attempts)

    def test_reset_login_attempts(self):
        self.user.login_attempts = 0
        self.assertEqual(self.user.reset_login_attempts(), self.user.login_attempts)


class TestAdmin(unittest.TestCase):
    def setUp(self):
        list1 = ["Allowed to add message", "Allowed to delete users", "Allowed to ban users"]
        self.admin = Admin(list1, "Савченко", "Данило", "Вільський шлях 14", "dan1ssimo_")
        self.privileges = list1

    def test_init(self):
        self.assertEqual(
            (
                self.admin.privileges, self.admin.first_name, self.admin.last_name, self.admin.adress,
                self.admin.nickname),
            (["Allowed to add message", "Allowed to delete users", "Allowed to ban users"], "Савченко", "Данило",
             "Вільський шлях 14", "dan1ssimo_"))

    def test_show_privileges(self):
        self.assertEqual(self.admin.privileges, Privileges().show_privileges())


if __name__ == '__main__':
    unittest.main()
