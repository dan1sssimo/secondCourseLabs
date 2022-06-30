num = 0
my_file = open('numbers.txt', 'r')
rez_file = open("sum_numbers.txt", "w")
for line in my_file:
    num += int(line)
rez_file.write(str(num))
rez_file.close()
my_file.close()
print(num)