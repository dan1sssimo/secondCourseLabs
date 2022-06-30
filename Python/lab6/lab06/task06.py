import os
import time

tmp = str(input("Введіть те, що будете шукати у тексті на англ.мові: "))
tmp1 = tmp.lower()
startTime = time.time()
with open('task06_info.txt', 'rt') as br:
    full_info = br.read()
    count = full_info.lower().count(tmp1)
    print(count)
totalTime = str(round(time.time() - startTime, 10))
rez = open('rez_task6.txt', 'w')
(mode, ino, dev, nlink, uid, gid, size, atime, mtime, ctime) = os.stat("rez_task6.txt")
time_mod = time.ctime(mtime)
created = time.ctime(os.path.getctime("rez_task6.txt"))
print("last modified: {0}".format(time_mod), file=rez, sep='', end='\n')
print("created: {0}".format(created), file=rez, sep='', end='\n')
print("time of searching: {0}".format(totalTime), file=rez, sep='', end='\n')
rez.write(str(count))
print(totalTime)
