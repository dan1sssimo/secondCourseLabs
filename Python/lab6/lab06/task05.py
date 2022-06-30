import os
import time
from datetime import datetime

book = open('guest_book.txt', 'at')
(mode, ino, dev, nlink, uid, gid, size, atime, mtime, ctime) = os.stat("guest_book.txt")
time_mod = time.ctime(mtime)
created = time.ctime(os.path.getctime("guest_book.txt"))
print("last modified: {0}".format(time_mod), file=book, sep='', end='\n')
print("created: {0}".format(created), file=book, sep='', end='\n')
while True:
    name_user = input('Enter a name (q - quit): ')
    if name_user == 'q':
        book.close()
        break
    current_datetime = datetime.now()
    print('Hello, {0:s}. {1}'.format(name_user, current_datetime), file=book)
    print('Hello, {0:s}. {1}'.format(name_user, current_datetime))