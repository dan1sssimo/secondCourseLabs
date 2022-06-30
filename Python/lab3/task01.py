import re

result = 0
text = 'l like stud kulikali musli bitii grande like stud musli'
bukva = input("Введіть англійську літеру на яку починається слово: ")
text.lower()
bukva.lower()
tmp = re.findall(r'\b\w', text)
for i in tmp:
    if i == bukva:
        result += 1
print("Кількість слів які починаються на відповідну літеру: ", result)
