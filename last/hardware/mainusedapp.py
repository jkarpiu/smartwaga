#!/usr/bin/env  python3

import serial
import time

def avg(tab, amount):
    total = 0
    for i in range (amount):
        total = total + tab[i]
    return total/amount
ser = serial.Serial('/dev/ttyUSB0')
while True:

    if r != '0':
        for i in range (30):
            r[i] = str(ser.readline())[12:-3]
        print(avg(r, 30))
        try:
            print(file = open("/var/lib/dhcpd/dhcp.leases", "r")[10:])
        except NameError:
            continue

    else:
        print(" ")
    