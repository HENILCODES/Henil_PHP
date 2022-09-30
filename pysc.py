#! E:\Python\python.exe

import sys
str = ' '
for x in range(len(sys.argv)):
    if x==0:
        continue
    else:
        print(sys.argv[x] + "_")