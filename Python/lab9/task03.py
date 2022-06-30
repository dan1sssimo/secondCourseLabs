class Apple:  # apple
    states = ("Відсутнє", "Цвітіння", "Зелене", "Червоне")
    all_apples = []  # список всіх яблук

    def __init__(self) -> None:
        self._index = len(Apple.all_apples) + 1
        self._state = Apple.states[0]
        Apple.all_apples.append(self)

    def __str__(self) -> str:
        return f'Яблуко {self._index}'

    def grow(self) -> None:  # підвищення  стиглості яблука
        i = Apple.states.index(self._state)
        if i + 1 < len(Apple.states):
            print(f'{self._index} росте...')
            self._state = Apple.states[i + 1]

    def is_ripe(self) -> bool:  # перевірка чи яблуко стигле
        return Apple.states.index(self._state) + 1 == len(Apple.states)

    @classmethod  # вивід статистики усіх яблук
    def apple_base(cls):
        print(f'Кількість яблук - {len(cls.all_apples)}')
        for apple in cls.all_apples:
            print(f'{apple} - {apple._state}')


class AppleTree:  # tree
    def __init__(self, amount: int) -> None:  # список усіх існ яблук на дереві
        self.apples = [Apple() for _ in range(amount)]

    def __str__(self) -> str:
        return f'Яблукове дерево({", ".join([str(apple) for apple in self.apples])})'  # вивід існ ябл на дереві

    def grow_all(self) -> None:  # підвищити стиглості усіх яблук
        for apple in self.apples:
            apple.grow()

    def all_are_ripe(self) -> bool:  # перевірка чи усі яблука стиглі
        return all(apple.is_ripe() for apple in self.apples)

    # очистити список від усіх стигли яблук
    def give_away_all(self):
        self.apples = list(filter(lambda apple: not apple.is_ripe(), self.apples))


class Gardener:  # садівник
    def __init__(self, name: str, tree: AppleTree) -> None:
        self.name = name
        self._tree = tree

    def __str__(self) -> str:
        return f'Садівник {self.name}'

    def work(self):  # статус роботи працівника
        print(f'{self} працює...')
        self._tree.grow_all()

    def harvest(self):  # зібрати яблука
        if self._tree.all_are_ripe():
            self._tree.give_away_all()
        else:
            print('Ще не всі плоди дозріли')


if __name__ == '__main__':
    apple1 = Apple()
    apple2 = Apple()
    apple3 = Apple()
    Apple.apple_base()
    tree = AppleTree(4)
    worker = Gardener('Danilo', tree)
    print(worker._tree)
    worker.work()
    worker.harvest()
    worker.work()
    worker.work()
    worker.work()
    worker.harvest()
    print(worker._tree)
