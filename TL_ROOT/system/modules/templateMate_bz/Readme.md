# TemplateMate_bz #
This module adding a template switch for each content element.
This version is supported from contao 2.11.x to 3.x

## Instalation ##
1. Download this version as a zip and unarchive it into your system/modules folder.
2. Update the Database with the the Install Tool

## Quickstart ##

1. Copy the template ce_text.html5 into the templates folder and rename it to ce_text_test.html5
2. Open ce_text_test.html5 and make some changes like add a p Tag with the text "Test"
3. Went into the backend and go to Articles and chose some Article and create an content element text.
4. On the bottom you will see now the Teplatemate with selectbox. You can chose now between the standard template or your ce_text_test template

## Feature Named Templates

Every show template in the selectbox can be renamed for easier understanding. Just follow the steps below:

1. Open the file config/langconfig.php
2. Add your alternative template name for example > $GLOBALS['TL_LANG']['templateMate']['ce_text_test'] = 'Ausgabe Test';

That`s it.