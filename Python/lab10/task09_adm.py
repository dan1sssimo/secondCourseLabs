from task09_user import User


class Admin(User):
    def __init__(self, privileges, first_name, last_name, adress, nickname):
        super().__init__(first_name, last_name, adress, nickname)
        self.privileges = privileges
        self.priv = Privileges()


class Privileges:
    def __init__(self):
        self.privileges = ['Allowed to add message', 'Allowed to delete users', 'Allowed to ban users']

    def show_privileges(self):
        return self.privileges
