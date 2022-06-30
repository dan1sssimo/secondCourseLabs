text = input('Введіть текст: ')
N = input('Введіть N: ')
P = input('Введіть P: ')
for i in text.split():
    if i.startswith(N) or i.endswith(P):
        print(i)
