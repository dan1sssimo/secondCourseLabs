class Car:
    def __init__(self, mar, mod, year, speed):
        self.mark = mar
        self.model = mod
        self.year = year
        self.speed = speed

    def accelerate(self):
        self.speed += 5
        return self.speed

    def brake(self):
        self.speed -= 5
        return self.speed

    def get_speed(self):
        return self.speed


if __name__ == "__main__":
    mark = str(input("Введіть марку автомобіля: "))
    model = str(input("Введіть модель автомобіля: "))
    year = int(input("Введіть рік виготовлення автомобіля: "))
    car = Car(mark, model, year, 0)
    for i in range(5):
        print(car.accelerate())
        print(f"Ваша швидкість: {car.get_speed()}")
    for i in range(5):
        print(car.brake())
        print(f"Ваша швидкість: {car.get_speed()}")
