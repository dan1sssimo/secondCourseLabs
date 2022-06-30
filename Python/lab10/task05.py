class Buffer:
    def __init__(self):
        self.__buffer = []

    def get_current_part(self):
        return [self.__buffer.pop(0) for _ in self.__buffer[:5]] if len(self.__buffer) >= 5 else None

    def add(self, *amount):
        self.__buffer += amount
        while part := self.get_current_part():
            print(f'Pulling from buffer: {part}')

    @property
    def buffer(self):
        return self.__buffer


if __name__ == '__main__':
    b = Buffer()
    print(f'Buffer: {b.buffer}')
    b.add(1, 2, 3, 4)
    print(f'Buffer: {b.buffer}')
    b.add(5, 6, 7)
    print(f'Buffer: {b.buffer}')
    b.add(8, 9, 10, 11, 12, 13, 14, 15, 16, 17)
    print(f'Buffer: {b.buffer}')
