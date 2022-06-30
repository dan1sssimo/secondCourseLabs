class User:
    def __init__(self, first_name, last_name, adress, nickname, login_attempts=0):
        self.first_name = first_name
        self.last_name = last_name
        self.adress = adress
        self.nickname = nickname
        self.login_attempts = login_attempts

    def describe_user(self):
        print(self.first_name, self.last_name)

    def greeting_user(self):
        print(f"Вітаю {self.nickname}!!!")

    def increment_login_attempts(self):
        self.login_attempts += 1
        return self.login_attempts

    def reset_login_attempts(self):
        self.login_attempts = 0
        return self.login_attempts
