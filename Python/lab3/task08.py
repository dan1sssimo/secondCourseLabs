text = input('Введіть текст: ')
slovo = input('Введіть слово: ')
rez = 0
text1 = text.split()
for i in text1:
    if i == slovo:
        rez += 1
print('Кількість зустрічей вашого слова у тексі: ', rez)
