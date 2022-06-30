from task09_adm import Admin
from task09_user import User

if __name__ == "__main__":
    user1 = User("Богданенко", "Карпо", "Клосовського 14", "chill")
    user2 = User("Савченко", "Данило", "Вільський 14", "top")
    user3 = User("Вітренко", "Петро", "Корольова 12", "lol")
    user1.describe_user()
    user1.greeting_user()
    user2.describe_user()
    user2.greeting_user()
    user3.describe_user()
    user3.greeting_user()
    for i in range(5):
        user1.increment_login_attempts()
    print(user1.login_attempts)
    user1.reset_login_attempts()
    print(user1.login_attempts)
    list1 = ["Allowed to add message", "Allowed to delete users", "Allowed to ban users"]
    user4 = Admin(list1, "Савченко", "Данило", "Вільський шлях 14", "dan1ssimo_")
    user4.priv.show_privileges()
