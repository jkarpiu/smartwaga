#!/usr/bin/env python3
try:
    file = open("waga.txt", "r")
    print (file)

except FileNotFoundError:
    print ("Nie zapisano żadnej wagi")
