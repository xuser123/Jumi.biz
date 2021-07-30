# **Binärcode**
- Zahlen mit Basis 2
- g = 2
- 0 und 1
 
|Binärcode|0|1|1|0|
|:-:|:-:|:-:|:-:|:-:|
|Dezimal|2³|2²|2*1|2*0|
- Von rechts nach links aufsteigend
- 0 + 2² + 2*1 + 0
- 0110 => **6**

## Zahl **z** mit Basis **g** multiplizieren
|...|g³|g²|g*1|g*0|
|:-:|:-:|:-:|:-:|:-:|
|...|z|z|z|z|
## Produkte addieren
---
## IPv4 - **32 Bit Adresse**
### **11000000101010001011001000100101**
### *8 Bit Octet Chart*

**Oktett 1**
|128|64|32|16|8|4|2|1|
|:---:|:---|:---:|:---:|:---|:---:|:---:|:---|
|1|1|0|0|0|0|0|0|
- 128 + 64 + 0 + 0 + 0 + 0 + 0 + 0
- 11000000 => 192

**Oktett 2**
|128|64|32|16|8|4|2|1|
|:---:|:---|:---:|:---:|:---|:---:|:---:|:---|
|1|0|1|0|1|0|0|0|
- 128 + 0 + 32 + 0 + 8 + 0 + 0 + 0
- 10101000 => 168

**Oktett 3**
|128|64|32|16|8|4|2|1|
|:---:|:---|:---:|:---:|:---|:---:|:---:|:---|
|1|0|1|1|0|0|1|0|
- 128 + 0 + 32 + 16 + 0 + 0 + 2 + 0
- 10110010 => 178

**Oktett 4**
|128|64|32|16|8|4|2|1|
|:---:|:---|:---:|:---:|:---|:---:|:---:|:---|
|0|0|1|0|0|1|0|1|
- 0 + 0 + 32 + 0 + 0 + 4 + 0 + 1
- 00100101 => 37

|Oktett|1||2||3||4|
|:-:|:-:|:-:|:-:|:-:|:-:|:-:|:-:|
|Binär|11000000||10101000||10110010||00100101|
|Dezimal|192|.|168|.|178|.|37|
- IP-Adresse: 192.168.178.37
- IP-Klasse: C
---
## IPv4 - **Klassen und Reichweiten**
|Klasse|First Qctet||Default Subnetmask|
|:-:|-:|:-|:-|
|**A**|1 - 126|.|255.0.0.0|
|**B**|128 - 191|.|255.255.0.0|
|**C**|192 - 223|.|255.255.255.0|
|loopback testing (reserviert)|127|.|Nicht für Netzwerk|

*Zum Beispiel:*
|01010000|11011001|11001111|1011101|
|:-:|:-:|:-:|:-:|
|80|217|207|189|
- IP-Adresse: 80.217.207.189
- IP-Klasse: A
- 0101000011011001110011111011101
---
## **Hex-Code**
### **5AFBE864** => Hexadezimale
- Ziffern mit Basis 16
- g = 16
- **0** 1 2 3 4 5 6 7 8 9 a b c d e f

|dezimal|hex|
|:-:|:-:|
|10|A|
|11|B|
|12|C|
|13|D|
|14|E|
|15|F|

## IPv6 - **128 Bit hexadezimal Adresse**
### **aa02:8070:8769:e400:5afb:e864:feb:d7cc**

- 4 Byte = 10101011 00000010 10000000 01110000 ... 
- mit 4 mal 4 Bit multipliziert = 128 Bit = 1 Kilobyte

**Erste 2 Bytes in 4 Bit Charts**
|8|4|2|1|
|:-:|:-:|:-:|:-:|
|1|0|1|0|
- 8 + 0 + 2 + 1
- 1011 => 10 => **a**

|8|4|2|1|
|:-:|:-:|:-:|:-:|
|1|0|1|1|
- 8 + 0 + 2 + 1
- 1011 => 11 => **b**

|8|4|2|1|
|:-:|:-:|:-:|:-:|
|0|0|0|0|
- 0 + 0 + 0 + 0
- 0000 => 0 => **0**

|8|4|2|1|
|:-:|:-:|:-:|:-:|
|0|0|1|0|
- 0 + 0 + 2 + 0
- 0010 => 2 => **2**

**Zweite 2 Bytes in 4 Bit Charts**
#### *4 Bit Chart Nr. 5*
|8|4|2|1|
|:-:|:-:|:-:|:-:|
|1|0|0|0|
- 1 + 0 + 0 + 0
- 1000 => 8 => **8**

|8|4|2|1|
|:-:|:-:|:-:|:-:|
|0|0|0|0|
- 0 + 0 + 0 + 0
- 0000 => 0 => **0**

|8|4|2|1|
|:-:|:-:|:-:|:-:|
|0|1|1|1|
- 0 + 1 + 1 + 1
- 0111 => 7 => **7**

|8|4|2|1|
|:-:|:-:|:-:|:-:|
|0|0|0|0|
- 0 + 0 + 0 + 0
- 0000 => 0 => **0**

Im Gegensatz zum Dezimalsystem eignet sich das Hexadezimalsystem mit seiner Basis als vierte Zweierpotenz (16 = 2hoch4) zur einfacheren Notation der Binärzahlen, da stets eine feste Anzahl zur Wiedergabe des Datenwortes benötigt wird. **Nibbles** (2 Bytes) können exakt mit einer hexadezimalen Ziffer und **Bytes** (8 Bits) mit zwei hexadezimalen Ziffern dargestellt werden.

---