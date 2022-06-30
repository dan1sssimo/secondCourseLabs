prugolos = 'BCDFGHJKLMNPQRSTVWXYZ'
prugolos1 = prugolos.lower()
text = input('Введіть текст: ')
text.lower()
print("Кількість приголосних літер: ", sum(i in prugolos1 for i in text))
