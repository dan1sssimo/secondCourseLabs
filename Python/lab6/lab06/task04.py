import os

tmp = ''
tmp1 = ''
info_user = ''
rez_task4 = ''
with open('learning_python.txt') as file_in:
    text = file_in.read()
text = text.replace("Python", "C")
os.mkdir("rez_t4")
with open('rez_t4/file.txt', 'w') as f:
    f.write(text)
with open('rez_t4/file.txt', 'r+') as f:
    while True:
        line = f.readline()
        if not line:
            break
        print(line)
        print("Інформація (Актуальна) чи (Не актуальна)? ( Відповідь записати як показано у дужках )")
        info_user = str(input("Відповідь: "))
        if info_user == "Актуальна":
            tmp += line + "\n"
        elif info_user == "Не актуальна":
            tmp1 += line + "\n"
with open('rez_t4/file.txt', 'w') as f:
    f.write(tmp)
with open('rez_t4/rezult.txt', 'w') as b:
    b.write(tmp1)
