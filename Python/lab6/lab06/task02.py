tmp = ''
rez_file = open("rez_task2.txt", "w")
num = 1
print("0 завершує програму!")
while num != 0:
    num = int(input("Введіть число: "))
    if num == 0:
        print("", file=rez_file, sep='', end='\n')
    elif num % 2 == 0:
        print("Парне число {0}".format(num), file=rez_file, sep='', end='\n')
    else:
        print("Не парне число {0}".format(num), file=rez_file, sep='', end='\n')
rez_file.close()
