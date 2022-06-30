info_sort = list()
with open('learning_python.txt') as f:
    for line in f:
        print(line.rstrip())
        info_sort.append(line.rstrip())
info_sort.sort()
info_sort.reverse()
print(info_sort)