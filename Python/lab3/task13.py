import re
text = input('Введіть текст: ')
rez = re.findall(r'[A-Z]\w+', text)
print(rez)