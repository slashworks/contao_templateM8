# TemplateMate_bz #
Dieses Modul ermöglicht das nutzen von mehreren Templates pro Content Element.
Unterstützt werden contao 2.11.x bis 3.x

## Instalation ##
1. Entpacke das Modul in system/modules.
2. Führe eine Datenbankaktualisierung mit dem Installations Werkzeug von Contao durch.

## Quickstart ##

1. Kopiere dir das template ce_text.html5 in das /templates Verzeichnis und bennene es in ce_text_test.html5 um
2. Öffne das Template ce_text_test.html5 und nimm ein Paar Änderungen vor wie z.b. einen p Tag mit dem Inhalt "Test"
3. Gehe ins Backend und lege in einem beliebigen artikel ein Content Element an.
4. Ganz am Ende findest du nun die Sektion TemplateMate. In der Selectbox kannst du nun zwischen den Templates Standard Template und ce_text_test wählen. Wähle ce_text_test und speichere die Änderungen.
5. geh ins Frontend, du siehst nun dein geändertes Template.

## Umbenennung der Namen in der Auflistung

Jedes von dir angelegte Template kann in der Selectbox mit einem alternativen Namen belegt werden. Z.B. ce_text_test = Test Ausgabe. Dies kannst du wiefolgt erreichen:

1. Öffne die Datei config/langconfig.php
2. Füge hier nun die Sprachvariable zu zum Beispiel > $GLOBALS['TL_LANG']['templateMate']['ce_text_test'] = 'Ausgabe Test';

Das ist alles. Im Backend wird nun der alternative Namen angezeigt.