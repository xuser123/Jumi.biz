# **Python Basics**
## Datentypen
- **Strings** = Zeichenkette
- **Integer** = Ganzzahlen
- **Float** = Rationale, reelle Zahlen
  - wie Zum Beispiel 1.5
  - Punkt statt Komma verwenden ;)
- **Variable** = Unbekannte, veränderliche Größe
- **Arrays** = Anordnung
  - list = geordnete Liste ("mutable")
  - tuble = ungeordnete Liste ("immutable")
  - set = Liste mit einzigartigen Werten ("unique")
  - dict = Liste mit doppelten Werten
    - (*collection of key-value pairs*)
- **boolean** = Boolisches Gesetz
  - True / False
 
## Operatoren und Schlüsselwörter
- < > <= >= == != + - / * % ...
- print append str int float ...
 ### Arrays
````python
# Liste füllen
v = [A,B,C,D]
v = v + [e,f,g]
print(v)
# dann kommt [A,B,C,D,e,f,g] 
````
````python
# Liste in Liste einfügen
Liste1 = ["a","b","c"]
Liste2 = [2,3]
Liste3 = [Liste2,Liste1]
print(Liste3)
# dann kommt [[2, 3], ['a', 'b', 'c']]
````
#### append Funktion
````python
# Werte an Liste fest-anhängen
Liste1 = [0,1,2,3,4,5,6,7]
Liste2 = [8,9,'a','b','c','d','e','f']
Liste1.append(Liste2)
print(Liste1)
# dann kommt [0, 1, 2, 3, 4, 5, 6, 7, [8, 9, 'a', 'b', 'c', 'd', 'e', 'f']]
````
#### String-Arrays
````python
# Zeichen aus String ausgeben mit Zeichenposition
Zeichenkette = "1234 5678"

Zeichen = Zeichenkette[3]
print(Zeichen)
# dann kommt 4
Zeichen = Zeichenkette[-3]
print(Zeichen)
# jetzt kommt 6
````
````python
# Strings aus Strings
Zeichenkette = "1234 5678"

Zeichen = Zeichenkette[2:6]
print(Zeichen)
# dann kommt "34 5"
Zeichen = Zeichenkette[:3]
print(Zeichen)
# dann kommt "123"
Zeichen = Zeichenkette[4:]
print(Zeichen)
# dann kommt " 5678"
````
#### Strings verändern
````python
# String übernehmen
Zeichenkette = "1234 5678"
Zeichenkette = "990" + Zeichenkette[3:]
print(Zeichenkette)
# dann kommt "9904 5678"
````
#### len Funktion
````python
# len Funktion
Zeichenkette = "1234 5678"
Zeichen = len(Zeichenkette) #length
print(Zeichen)
# dann kommt 9
````
### Abfragen und Schleifen
````python
# if Abfrage
x = 42
if x = < 50 :
  print("x ist kleiner als 50")
  x = 0
# x bekommt Wert 0
````
#### elif und else
````python
x = 50
if x < 50:
  print("x kleiner als 50")
elif x == 50:
  print("x ist 50")
else:
  print("x größer als 50")
# dann kommt: "x ist 50"
````
````python
# Mit **Boolischen** Werten
x = true
if x:
  print("x is true")
# dann komt: x is true
````
#### while Schleife
````python
# while
x = 0
while x < 11:
  x = x + 1
  print(x)
print("fertig")
# dann wird jede Zahl von 1 bis 10 in einer Zeile ausgegeben
# in der letzten Zeile kommt "fertig"
````
````python
# for _ in _ (aus Liste)
x = ["Eins","Zwei","Drei"]
for y in x :
  print(y)
# dann kommt: Eins Zei Drei, in jeweils einer Zeile
````
#### for _ in _ Schleife
````python
# for _ in _ mit if
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
````
#### range for _ in _ , break und continue
````python
# range Funktion
for i in range(0, -10, -3)
  print(i)
# dann kommt: 0 -3 -6 -9, in jeweils einer Zeile
x = ["a","b","c"]
for i in range(0, len(x), 2) :
  print(x[i])
# dann kommt: a b c, in jeweils einer Zeile
````
````python
# break und continue mit for und if
for i in range(0, 20) : # <- bis ausschliesslich 20
  if i%2 == 1 : # aufhören bei gerader Zahl
    continue
  print(i)
print("fertg")
# dann kommen alle **geraden Zahlen** von 0 bis unter 20
# in der letzten Zeil kommt "fertig"

for i in range(0, 10) :
  if i > 4 :
    break
  print(i)
print("fertig")
# dann kommen **alle Zahlen** von 0 bis 4
# in der letzen Zeile kommt "ferig"
````
### Funktionen und Parameter
````python
# Funktionen definieren
def Funktion123() :
  for i in range(0, 20) :
    print(i)
  print("fertig")
Funktion123()
# dann kommen **alle Zahlen** von 0 bis 19
# in der letzten Zeile kommt "fertig"
````
````python
# Parameter an Funktion übergeben
def Funktion123(n) :
  for i in range(0, n) :
    print(i)
  print("fertig")
# i = 20
# Funktion123(20)
# dann kommen **alle Zahlen** von 0 bis 19
# in der letzten Zeile kommt "fertig"
````
````python
# Mehrere Parameter an Funktion übergeben
def Funktion123(n, step) :
  for i in range(0, n, step) :
    print(i)
  print("fertig")
i = 20
Funktion123(i, 2)
# 0 2 4 6 8 10 12 14 16 18 fertig
Funktion123(2, 1)
# 0 1 fertig
````
### Raspberry Pi GPIO programmieren
````python
# Raspberry Pi GPIO-Pins Strom AN/AUS
# 0 = kein Strom, 1 = 3,3V
while 1 : # Dauerschleife
  GPIO.output(1, GPIO.HIGH) : # Licht an
  time.sleep(0.3) # 300ms warten
  if GPIO.input(1) == GPIO.HIGH :
    GPIO.output(1, GPIO.LOW) # Licht aus
````
````python
# RPi-GPIO-Layout benutzen
GPIO.setmode(GPIO.BOARD)
GPIO.setup(1, GPIO.output)
GPIO.setup(1, GPIO.input)
# sudo apt-get install python -dev
# sudo apt-get install pythonrpi.gpio
# sudo pip install rpi.gpio
# vi pgio.py

# Neuer Ordner in /sys/class/gpio/gpio_
echo "1" > /sys/class/gpio/export

echo "out" > /sys/class/gpio/gpio_/direction # out = schreiben
echo "in" > /sys/class/gpio/gpio_/value # in = lesen
# Rueckgaengig machen
echo "1" > /sys/class/gpio/unexport
````
````python
git clone git ://git.dragon.net/wiringpi
# cd WiringPi | ./build
# gpio export _ out
# gpio -g read _ # lesen (ohne -g gilt die WiringPi GPIO-Tabelle)
````
### Python 3 Passwort-Generator
````python
import string
import secrets

chars = string.digits + string.ascii_letters + string.punctuation
print(len(chars)) # Entropie: 6.555, Min: 100 Bit
print(''.join(secrets.choice(chars) for _ in range(21)))
````
### PDF-Binder
````python
# Mehrere PDF-Dateien zusammenfügen
from tkinter.constants import PAGES
from PyPDF2 import PdfFileReader, PdfFileWriter
import tkinter
from tkinter import filedialog

def merge_pdfs(result_name):
    pdf_writer = PdfFileWriter()
    root = tkinter.Tk()
    files = filedialog.askopenfilenames(parent=root,title='PDFs auswählen!')
    for file in root.tk.splitlist(files):
        pdf_reader = PdfFileReader(file)
        pdf_reader.getPage(0)
#            for page in range(pdf_reader.getNumPages()):
        pdf_writer.addPage(pdf_reader.getPage(0)) # nach rechts rücken und statt 1 "page"
    print('PDFs zusammengefügt.')
    with open(result_name, 'wb') as out:
        pdf_writer.write(out)
        print('PDF-Datei erfolgreich erstellt.')

merge_pdfs('merged.pdf')
# GUI (tkinter) erscheint
````
### PDF-Verschlüsselung
````python
# PDF-Datei verschlüsseln
import tkinter
from tkinter import filedialog
from PyPDF2 import PdfFileReader, PdfFileWriter

def encrypt_pdf(filename=filedialog.askopenfile().name):
	pdf_reader = PdfFileReader(filename)
	pdf_writer = PdfFileWriter()
	password = input("Passwort erstellen:\n")

	for page in range(pdf_reader.getNumPages()):
		pdf_writer.addPage(pdf_reader.getPage(page))
	pdf_writer.encrypt(user_pwd=password, use_128bit=True)

	with open(filename + ".encrypted.pdf", "wb") as out:
		pdf_writer.write(out)

	print("PDF wurde verschlüsselt.")
encrypt_pdf()
# GUI (tkinter) erscheint
````
# JavaScript Basics