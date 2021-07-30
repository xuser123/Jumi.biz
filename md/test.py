Liste1 = ["a","b","c"]
Liste2 = [2,3]
Liste3 = [Liste2,Liste1]
print(Liste3)
# dann kommt [[2, 3], ['a', 'b', 'c']]


# append Funktion
Liste1 = [0,1,2,3,4,5,6,7]
Liste2 = [8,9,'a','b','c','d','e','f']
Liste1.append(Liste2)
print(Liste1)
# dann kommt [0, 1, 2, 3, 4, 5, 6, 7, [8, 9, 'a', 'b', 'c', 'd', 'e', 'f']]

x = [42, 5, 10]
for w in x :
  if w >= 10:
    print(w)
  if w <= 10 :
    print("w kleiner oder gleich 10")
# dann kommt:
# 42
# w kleiner oder gleich 10
# 10
# w kleiner oder gleich 10


for i in range(0, 10) :
  if i > 4 :
    break
  print(i)
print("fertig")
# dann kommen **alle Zahlen** von 0 bis 4

def Funktion123(n, step) :
  for i in range(0, n, step) :
    print(i)
  print("fertig")
i = 20
Funktion123(i, 2)
# 0 2 4 6 8 10 12 14 16 18 fertig
Funktion123(2, 1)
# 0 1 fertig