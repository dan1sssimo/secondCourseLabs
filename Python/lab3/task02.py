result = 0
text = 'l like stud: kulikali: musli: bitii:: grande like stud musli'
rez = text.count(":")
print("Текст із заміненими двокрапками: {0}\n Кількість замін: {1}".format((text.replace(":", "%")), rez))