=== Indoeuropean Translator Widget ===
Contributors: cacarlos
Donate link: http://carlosquiles.com/indo-european-language-blog/
Version: 1.2.3
Tags: translator, translation, language, widget, sidebar, english, albanian, arabic, bulgarian, catalan, chinese, croatian, czech, danish, dutch, estonian, filipino, finnish, french, galician, german, greek, hebrew, hindi, hungarian, icelandic, indonesian, italian, japanese, korean, latvian, lithuanian, macedonian, maltese, norwegian, polish, portuguese, romanian, russian, serbian, slovak, slovenian, spanish, swahili, swedish, thai, turkish, ukrainian, vietnamese, welsh, deutsch, français, español, italiano, português, nederlands, svenska, bulgarski, cesky, dansk, 日本語, Ελληνικά, hindi, hrvatski, 한국어, norsk, polski, Русский, română, suomi, Беларуская, afrikaans, 中文, 漢語, català, galego, cymraeg, gaeilge, bahasa, indonesia, tagalog, magyar, islenska, Македонски, മലയാളം, ייִדיש, עברית  ,فارسی ,العربية,  türkçe
Requires at least: 1.5
Tested up to: 2.8.5
Stable Tag: 1.2.3

Provides links to different automatic translations from the sidebar

== Description ==

This plugin provides a widget which offers links to different automatic translations of the current site in one of your sidebars.

It is one of the simplest widgets available for this task, using the individual plugins listed at http://carlosquiles.com/indo-european-language-blog/wordpress-translation-plugin/ 

*Feature List*
 
* it doesn't show <u>flag images</u> but instead uses the <b>native language name</b> - it saves load time, and visitors don't have to click the flag of the UK to read the English version, or the flag of Spain to read the Spanish one.
* it displays <b>valid XHTML</b> code - with correct XML lang definitions.
* links (horizontal and vertical versions) come by default with the <b>tag "rel=nofollow"</b>, so  they are not followed by search engines like Google and you don't 'lose' pagerank.
* it is <i>easily customised</i> - for language deletions or additions alike.
* it links to all available languages and <b>language pairs of Google Translation Engine</b>, from and into English, Afrikaans, Albanian, Arabic, Belarusian, Bulgarian, Catalan, Chinese (Simplified and Traditional), Croatian, Czech, Danish, Dutch, Estonian, Filipino, Finnish, French, Galician, German, Greek, Hebrew, Hindi, Hungarian, Indonesian, Irish, Italian, Japanese, Korean, Latvian, Lithuanian, Macedonian, Malay, Maltese, Norwegian, Persian, Polish, Portuguese, Romanian, Russian, Serbian, Slovak, Slovenian, Spanish, Swahili, Swedish, Thai, Turkish, Ukrainian, Vietnamese, Welsh, Yiddish.
* other translation plugins usually play with your DB or Permalinks to create a fiction of having more blog pages with hiden links to external translations, to <u>cheat Google</u> and get more indexed (fictional) pages: with this plugin, you only <b>add automatic links</b>, and you can quit it when you want without any problems at all.

== Installation ==
1. Extract the folder with indoeuropean-translator-widget.php and indoeuropean-translator-widget-menu.php into your wp-content/plugins folder (or a subfolder)
2. Activate one of the plugins in Wordpress (under "Plugins"), the general one (with vertical and horizontal versions) or the menu version.
3. Add the widget to your page (under "Presentation" -> "Widgets")
4.1. If you have activated the general widget, set the options to select which one is your blog's main language or the language of the texts that your visitors will try to translate. From that main language, select (only ONE checkbox!) : 
4.1.1. "Horizontal" to keep the languages on the same line, separated by dots;
4.1.2. "Vertical" to create a list of languages.
4.2. If you activated indoeuropean-translator-widget-menu.php, select the box with your blog's language.

== Frequently Asked Questions ==

= How do you remove a language? =

1. Open the file indo-european-translator-widget.php or indo-european-translator-widget-menu.php in your preferred text editor
2. Look for your language definition - say, for English, [$english].
3. Find the line where the language you want to remove is - say, for Swahili, the line which contains [lang="sw"']
4. Delete that whole line.

= How do you add a language link to an existing language? =

A) You can contact me to add it at http://indo-european.info/ OR at http://dnghu.org/, so that others benefit from the change; OR

B) You can do it yourself:

1. Open the file indo-european-translator-widget.php in your preferred text editor
2. Look for your language definition from line 135 onwards - say, for English, [$english].
3. Find the line which corresponds (alphabetically) to the language you want to add - say, for Lithuanian, between Latvian and Korean.
4. Add a line copying one of the others, and replace a) the "lang" code, b)the url with the one you know and c)the language name.

= How do you add a whole list for different language pairs? =

A) You can contact me to add it at http://indo-european.info/ OR at http://dnghu.org/, so that others benefit from the change; OR

B) You can do it yourself if you know some PHP - and please contact us showing us the changes made, so that we can improve the plugin for everyone.

== Screenshots ==

1. This is an example of the plugin from English into other languages, HORIZONTAL version, at http://indo-european.info/wordpress/
2. Another example of the plugin from English into other languages, VERTICAL (list-type) version, at http://dnghu.org/Indo-European/

== Release History ==

This is the plugin history:

	Version		Date			Changes
	
	1.2.3		2009/10/23		General widget corrected. Addition of the menu widget.
    
	1.2.2		2009/10/22		New Google language pairs added.
    
	1.2.1		2009/2/28		Readme.txt corrected.
    
	1.2			2009/2/28		New Google language pairs added.
    
	1.1.2		2008/6/08		Readme.txt corrected, snapshots added.
    
	1.1.1		2008/6/05		English translation from other languages corrected.
    
	1.1			2008/6/05		New: Adapted to new Google language pairs. 
								Non-functioning pairs deleted.
    
    1.0.3		2008/1/08		Fix: Plugin works for the German version (2).
    
    1.0.2		2008/1/07		Fix: Plugin didn't work for the German version.

    1.0.1		2007/12/31		Fix: HTML error corrected. Invalidly nested list, UL and LI.

	1.0			2007/12/24		New code for an easy-to-install widget, adapted from Dnghu's 
								Wordpress Translator Plugin.

== Feedback ==

cquiles@dnghu.org
