# RPi-GPIO-Layout benutzen
GPIO.setmode(GPIO.BOARD)
GPIO.setup(1, GPIO.output)
GPIO.setup(1, GPIO.input)
# sudo apt-get install python -dev
# sudo apt-get install pythonrpi.gpio
# sudo pip install rpi.gpio
# vi pgio.py

# Neuer Ordner in /sys/class/gpio/gpio_
echo "1" &gt; /sys/class/gpio/export

echo "out" &gt; /sys/class/gpio/gpio_/direction # out = schreiben
echo "in" &gt; /sys/class/gpio/gpio_/value # in = lesen
# Rueckgaengig machen
echo "1" &gt; /sys/class/gpio/unexport

#### Andere Moeglichkeit:

git clone git ://git.dragon.net/wiringpi
# cd WiringPi | ./build
# gpio export _ out
# gpio -g read _ # lesen (ohne -g gilt die WiringPi GPIO-Tabelle)
