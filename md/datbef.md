````bash
# sudo Superuser Do
# Administrative Rechte erlangen:
sudo dir -a /root
# Shell als Administrator übernehmen:
su -l root
# cd Change Directory
# Verzeichnis wechseln:
cd /home/user/Desktop
# ls List Directory
# Verzeichnisinhalt auflisten:
ls /home/user/Desktop
# Formatierte Liste + versteckten Dateien:
ls -al /home/user
dir -a Directory -all
# Alternative zu ls -la:
dir -a /home/user
# pwd Print Working Directory
# Vollen Verzechnis-Pfad anzeigen
pwd -P
# rm Remove
# Dateien entfernen:
rm /home/user/text.txt
# Verzeichnispfade entfernen:
rm -r /home/user/folder
# Datei-Löschen verstärken:
rm -f /home/user/text.txt
# Ordner-Löschen verstärken:
rm -rf /home/user/folder
# mv Move
# Dateien/Ordner verschieben/umbenennen:
mv text.txt /home/user/Documents/text.txt
# cp Copy
# Dateien/Ordner kopieren:
cp text.txt /home/user/Documents/copy.txt
# cp -r Copy -recursive
# Rekursiv kopieren (Ordnerinhalt):
cp -r /home/user/folder /home/user/Documents/foldercopy
# mkdir Make Directory
# Ordner erstellen:
cp /home/user/text.txt /home/user/Documents/copy.txt
# rmdir -Remove Directory
# Ordner/Verzeichnis löschen:
rmdir -r /home/user/folder
# chmod Change Modification
# Datei ausführbar machen:
chmod +x /home/user/install.sh
# Für alle und alles verfügbar machen:
chmod 777 /home/user/install.sh
# locate Find files by name
# Dateien über Dateinamen finden:
locate sudoers
# cat Concatenate files and print
# Dateiinhalt ausgeben:
cat /home/user/Desktop/text.txt
# Dateiinhalt einfügen und anhängen:
cat >> Inhalt.txt /home/user/text.txt
# Dateiinhalt einfügen und ersetzen:
cat > Inhalt.txt /home/user/text.txt
# ln -s Links
# Datei Link erstellen
ln -s /home/user/file /home/user/Desktop/Link
# touch
# Gut um leere Dateien zu erzeugen
touch neu.txt
# Time-stamp einer anderen Datei übertragen:
touch neu.txt -r alt.txt
#head Erste 10 Zeilen einer Datei ausgeben:
head /home/user/text.txt
#tail Letzten 10 Zeilen ausgeben:
tail /home/user/logfile
#Letzte 10 Zeilen aktualisierend ausgeben:
tail -f /home/user/logfile
````