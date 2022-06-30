class Alphabet:
    lang = 'Українська'
    letters = 'а, б, в, г, ґ, д, е, є, ж, з, и, і, ї, й, к, л, м, н, о, п, р, с, т, у, ф, х, ц, ч, ш, щ, ь, ю, я'.split(
        ', ')

    def __init__(self, lang: str = lang, letters: list[str] = letters) -> None:
        Alphabet.lang = lang
        Alphabet.letters = letters

    @classmethod  # вивід алфавіту
    def print_alphabet(cls) -> None:
        print(f'Алфавіт: {", ".join(cls.letters)}')

    @classmethod  # клкст. усіх літер
    def letters_num(cls) -> int:
        return len(cls.letters)

    @classmethod  # перевірити чи мова українська
    def is_ua_lang(cls, text: str) -> bool:
        return all([sign.lower() in ''.join(
            cls.letters).lower()  # перетворюєм великі літери у малі, повертаємо тру якщо літера укр
                    if sign.lower().isalpha() else True
                    for sign in text])


class EngAlphabet(Alphabet):
    lang = 'English'
    letters = 'a, b, c, d, e, f, g, h, i, j, k, l, m, n, o, p, q, r, s, t, u, v, w, x, y, z'.split(', ')
    __en_letters_num = len(letters)

    def __init__(self, lang: str = lang, letters: str = ''.join(letters)) -> None:
        EngAlphabet.lang = lang
        EngAlphabet.letters = letters
        EngAlphabet.__en_letters_num = len(letters)

    @classmethod  # перевірка чи мова англ
    def is_en_letter(cls, text: str) -> bool:
        return all(sign.lower() in ''.join(
            cls.letters).lower()  # перетворюєм великі літери у малі, повертаємо тру якщо літера англ
                   if sign.lower().isalpha() else True for sign in text)

    @classmethod  # кількість літер
    def letters_num(cls) -> int:
        return cls.__en_letters_num

    @staticmethod  # текст англ мовою
    def example() -> str:
        return 'Python the best!!!'


if __name__ == '__main__':
    ENG = EngAlphabet()
    EngAlphabet.print_alphabet()
    print(f'Кількість букв: {ENG.letters_num()}')
    print(f'Чи відноситься буква J до англійського алфавіту: {ENG.is_en_letter("J")}')
    print(f'Чи відноситься буква Щ до українського алфавіту: {Alphabet.is_ua_lang("Щ")}')
    print(ENG.example())
