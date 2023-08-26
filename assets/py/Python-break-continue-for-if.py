# break und continue mit for und if
for i in range(0, 20) : # &lt;- bis ausschliesslich 20
if i%2 == 1 : # aufhören bei gerader Zahl
   continue
print(i)
print("fertg")
# dann kommen alle **geraden Zahlen** von 0 bis unter 20
# in der letzten Zeil kommt "fertig"
