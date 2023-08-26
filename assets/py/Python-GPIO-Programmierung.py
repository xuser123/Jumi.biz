# Raspberry Pi GPIO-Pins Strom AN/AUS
# 0 = kein Strom, 1 = 3,3V
while 1 : # Dauerschleife
GPIO.output(1, GPIO.HIGH) : # Licht an
time.sleep(0.3) # 300ms warten
if GPIO.input(1) == GPIO.HIGH :
   GPIO.output(1, GPIO.LOW) # Licht aus
