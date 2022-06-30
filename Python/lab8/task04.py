class Dog:
    count = 0

    def __init__(self, name, age):
        Dog.count += 1
        self.name = name
        self.age = age
        self.mammal = "ссавець"
        self.breed = input(f"Введіть породу {Dog.count} пса ")
        self.nature = Behavior.natures(self)

    def print_name_age(self):
        print(f"{self.name} має вік {self.age}")

    def voice(self):
        if (self.age >= 0) and (self.age < 10):
            return "GAV"
        elif (self.age >= 10) and (self.age < 20):
            return "GAV GAV"
        elif (self.age >= 20) and (self.age < 30):
            return "GAV GAV GAV"
        else:
            return "AUU"


class Behavior(Dog):
    def __init__(self, nature, breed):
        Dog.__init__(self, nature, breed)

    def natures(self):
        if self.breed == "pikines":
            self.nature = "calm"
            return self.nature
        elif self.breed == "ovcharka":
            self.nature = "kindness"
            return self.nature
        elif self.breed == "bulldog":
            self.nature = "angry"
            return self.nature
        else:
            self.nature = ""
            return self.nature


class Pets:
    def __init__(self, list_):
        self.list = list_

    def print_all(self):
        for i in self.list:
            print(i)


if __name__ == "__main__":
    dog1 = Dog("Malek", 8)
    dog2 = Dog("Bibo", 16)
    dog3 = Dog("Alert", 26)
    list1 = [dog1.name, dog2.name, dog3.name]
    list2 = Pets(list1)
    print("Весь список тварин: ")
    list2.print_all()
    print(
        f"Name: {dog1.name}\n {dog1.age} years\n {dog1.mammal}\n Breed: {dog1.breed}\n Character: {dog1.nature}\n Voice:{dog1.voice()}\n")
    print(
        f"Name: {dog2.name}\n {dog2.age} years\n {dog2.mammal}\n Breed: {dog2.breed}\n Character: {dog2.nature}\n Voice:{dog2.voice()}\n")
    print(
        f"Name: {dog3.name}\n {dog3.age} years\n {dog3.mammal}\n Breed: {dog3.breed}\n Character: {dog3.nature}\n Voice:{dog3.voice()}\n")
