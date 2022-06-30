import math

import time


def timing(f):
    def wrap(*args):
        time1 = time.time()
        ret = f(*args)
        time2 = time.time()
        print('%s функція зайняла %0.2f секунд' % (f.__name__, (time2 - time1) * 100.0))
        return ret

    return wrap


@timing
def circle01(x, y, a, b, r):
    one_part = math.pow((float(x) - float(a)), 2)
    two_part = math.pow((float(y) - float(b)), 2)
    third_part = one_part + two_part
    powradius = math.pow(r, 2)
    if third_part <= powradius:
        info = 'Точка лежить у колі'
    elif third_part > powradius:
        info = 'Точка не лежить у колі'
    return info


centerX = float(input('Введіть центральні точки\nВведіть точку x: '))
centerY = float(input('Введіть точку y: '))
R = float(input('Введіть радіус кола: '))
tochka_one = float(input('Точка (1): '))
tochka_two = float(input('Точка (2): '))
rez = circle01(centerX, centerY, tochka_one, tochka_two, R)
print(rez)
