text = input('Введіть текст: ')
golosni = 'aeiouy'
text.lower()
print("Кількість голосних літер: ", sum(i in golosni for i in text))
