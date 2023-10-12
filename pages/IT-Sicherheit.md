KRITIS = Kritische Infrastrukuren
=================================

**§ 2 Abs. 10 BSI-Gesetz (BSIG)**
---------------------------------

Kritische Infrastrukturen _sind **_Einrichtungen_**, **_Anlagen_** oder **_Teile_** davon, die den Sektoren:_

*   Energie
*   Informationstechnik & Telekommunikation
*   Transport & Verkehr
*   Gesundheit
*   Wasser
*   Ernährung
*   Finanz- & Versicherungswesen

_angehören und von **_hoher Bedeutung_** für das **_Funktionieren des Gemeinwesens_** sind, weil durch ihren **_Ausfall_** oder ihre **_Beeinträchtigung_** erherbliche **_Versorgungsengpässe_** oder **_Gefährdungen_** für die **_öffentliche Sicherheit_** eintreten würden._

**§ 8a Abs. 3 BSI-Gesetz (BSIG)**
---------------------------------

### Pflichten für Kritis-Betreiber

*   IT-Sicherheits**maßnahmen ergreifen**
*   **Vermeidung** _von Versorgungsausfällen /-engpässen_
*   **Nachweis** _der Einhaltung alle 2 Jahre_
*   **Meldung** _von außergewöhnlichen IT-Sicherheitsvorfällen an das BSI_
*   **Berücksichtigung** _der BSI-Warnungen und -Lagebilder_

**§§ 2 bis 8 BSI-KRITIS-Verordnung (BSI-KritisV)**
--------------------------------------------------

*   **Gemeinwohlschwelle**: ab 500.000 betroffene Personen
*   **Regelschwellenwert**: Durchschnittliche Berührungspunkte, pro Person, pro Jahr
    *   z.B. durchschn. Geldabhebungen / Person / Jahr = Regelschwellenwert

Akteure
-------

*   **AG KRITIS** -> _Mitglied des Chaos Computer Club_
*   **UP KRITIS** -> _Zusammenschluss von Kritis-Betreibern_
*   **BSI** = _Bundesamt für Sicherheit in der Informationstechnik_
    *   **MIRT** = _Mobile Incident Response Team_
*   **BMI** = _Bundesamt des Innern für Bau und Heimat_
    *   **IT-Sicherheitsgesetz 2.0 (ITSiG 2.0)**
        *   Sektoren: Entsorgung, Rüstungsindustrie,
        *   **Isböfl** = _Infrastrukturen im besonderen öffentlichen Interesse_
*   **BBK** = _Bundesamt für Bevölkerung und Katastrophenschutz_
    *   Chemie-Branche
*   Staat und Verwaltung (unabhängiger Sektor)
    *   **UP Bund** = _Umsetzungsplan Bund_
*   Bundesländer
    *   Kultur und Medien (unabhängiger Sektor)
*   [**Netzpolitik.org**](https://www.netzpolitik.org "haben ITSiG 2.0 geleaked")
    *   ITSiG 2.0 öffentlich zugänglich gemacht
*   **DSGVO** = _Datenschutz-Grundverordnung_
*   **CHW** = _Cyber-Hilfswerk_
*   **PMeV** = _Professioneller Mobilfunk e.V._
    *   Baden-württemberg
    *   Breitbandlösungen für KRITIS
    *   Digitalisierung der Energiewende
*   **APT’s** = _Advanced Persistant Threats_
    *   Bedrohungen und Hackergruppen
*   _“und noch viele Mehr”_ -HonkHase

Standards
---------

*   **BSI-Grundschutz**
*   **ISMS** = _Information Security Management System_
*   ISO/IEC-27000-Reihe
    *   ISO = _International Organization for Standardisation_
    *   IEC = _International Electrotechnical Commission_
    *   **ISO 27001**
        *   Anforderungen
        *   Umsetzung
        *   Aufrechterhaltung
        *   fortlaufende Verbesserung
        *   Dokumentation
        *   Beurteilung und Behandlung von Informationssicherheitsrisiken
    *   Vertraulichkeit
    *   Authentifizierung
    *   Integrität
    *   Verfügbarkeit
*   **IEC 62443**
    *   Industrielle Kommunikationsnetze
        *   Verteidigung
        *   Redundanz
        *   **SL** - _Security Level_ Zonen
        *   **PMR** = _Professional Mobile Radio_
            *   4G/LTE und 5G
            *   3,7 - 3,8 GHz
            *   Frequenzbereich: 450 MHz
            *   Dedizierte, lokale Netze
            *   Energieversorger und Industrie

Anwendung
---------

*   **ICS** = _Industrial Control System_
    *   Industrielle Kontrollsysteme
*   **DCS** = _Distributed Control System_
    *   Verteiltes Steuersystem
*   Automatisierungpyramide:
    *   Lvl. 4 - ERP => **Unternehmen**
    *   Lvl. 3 - MES => **Betrieb**
    *   Lvl. 2 - SCADA => **Prozessleitung**
    *   Lvl. 1 - SPS => **Steuerung**
    *   Ein- / Ausgnagssignale => **Feldebene**
    *   Fertigung / Produktionsprozess => **Prozessebene**
*   **SCADA** = _Supervisory Control and Data Acquisition_
    *   Prozessleitsysteme
    *   **PLC** = \*Programmable Logic Controller
    *   **RTU** = _Remote Terminal Unit_
    *   **ICG** = _Industrial Control Gateways_
        *   Verbindet Protokolle mit IP-Netz
        *   Ethernet, Wifi, RF, LoRa, GSM, GPRS,…
        *   Webinterface, SNMP, Telnet, Serial Driver Protocol,…
    *   PV’s - Prozessgrößen von entfernten Sensoren
        *   Datenempfang
    *   SP’s - Sollwerte
        *   Datenvergleich
    *   FCE’s - Stellglieder
        *   Steuerung durch Befehlsfunktionen
        *   Regelventile
            *   elektrisch, pneumatisch, hydraulisch,…
*   Angriffspunkte:
    *   Cross-Site-Scripting
    *   Cross–Site-Request-Forgery
    *   Authentifizierung / Hashing
    *   Default-Passwörter
    *   Command-Injection
    *   Stack-Overflows
    *   Zero-Day-Exploits
    *   Physikalischer Zugang bei geteilten APNs
    *   GPRS / RF auf Feldebene
    *   Satelliten…
    *   Vorbereitung:
        *   Firmware-Verfügbarkeit?
        *   Geräte auf dem Markt verfügbar?

Probleme
--------

*   Alte Systeme
*   Alte Komponenten
*   **Vernetzung** von Komponenten
    *   _“IP-ifizierung”_ -HonkHase
*   **Zentralisierung**
    *   Monitoring
*   **Globalisierung**
    *   Komplexität
    *   Lobbyismus
    *   Immer größere Vielzahl von Aufsichtsbehörden
    *   Immer mehr Vorschriften und Gesetzgebungen
*   **Pflichtenkollision**
    *   Zertifizierungen ungültig nach Updates
*   Haftung
    *   Risiko beim verändern von Komponenten
*   Safety / Arbeitssicherheit
    *   Polizeiliche Untersuchungen nach Arbeitsunfällen
*   Spionage
*   Hackback / Aktive Cyber-Abwehr
    *   Sicherheitslücken werden absichtlich nicht geschlossen
*   Macht des Sektors: Geldabhängigkeit
