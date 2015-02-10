# templateM8

TemplateM8 is an contao modul to add multiple templates for content elements.

## How to use

Just create a template in the templates folder with the m8_ prefix and your custom suffix _myTpl.

### Examples ###


	m8_ce_text_BackgroundImage.html5
	m8_ce_image_myOwn.html5

## Meaningful names 
templatem8 allows you to give the templates "meaningful names" like "with Background Image" instead of "m8_ce_text_BackgroundImage".

All you have to do is to create a new language entry in your langconfig or module.

	$GLOBALS['TL_LANG']['templateMate']['m8_ce_text_BackgroundImage'] = 'with Background Image';