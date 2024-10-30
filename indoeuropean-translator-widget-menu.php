<?php
/*
Plugin Name: Indoeuropean Translator Widget (Menu)
Plugin URI: http://indo-european.info/
Description: Provides a menu of links to different automatic translations from the sidebar
Version: 1.2.3
Author: Carlos Quiles
Author URI: http://dnghu.org/
*/

function widget_indoeuropean_init() {
	function widget_indoeuropean($args) {
	
			extract($args);
			
			$options	        = get_option('widget_indoeuropean');
		
			$title		        = empty($options['title'])	? __('Indo-European')	: $options['title'];
			$path		        = empty($options['path'])	? __('Indo-European')	: $options['path'];

			$show_en_menu		= $options['show_en_menu']		? '1'			: '0';
			$show_af_menu		= $options['show_af_menu']		? '1'			: '0';
			$show_ar_menu		= $options['show_ar_menu']		? '1'			: '0';
			$show_be_menu		= $options['show_be_menu']		? '1'			: '0';
			$show_bg_menu		= $options['show_bg_menu']		? '1'			: '0';
			$show_ca_menu		= $options['show_ca_menu']		? '1'			: '0';
			$show_cs_menu		= $options['show_cs_menu']		? '1'			: '0';
			$show_cy_menu		= $options['show_cy_menu']		? '1'			: '0';
			$show_da_menu		= $options['show_da_menu']		? '1'			: '0';
			$show_de_menu		= $options['show_de_menu']		? '1'			: '0';
			$show_el_menu		= $options['show_el_menu']		? '1'			: '0';
			$show_et_menu		= $options['show_et_menu']		? '1'			: '0';
			$show_es_menu		= $options['show_es_menu']		? '1'			: '0';
			$show_fa_menu		= $options['show_fa_menu']		? '1'			: '0';
			$show_fr_menu		= $options['show_fr_menu']		? '1'			: '0';
			$show_ga_menu		= $options['show_ga_menu']		? '1'			: '0';
			$show_gl_menu		= $options['show_gl_menu']		? '1'			: '0';
			$show_hi_menu		= $options['show_hi_menu']		? '1'			: '0';
			$show_hr_menu		= $options['show_hr_menu']		? '1'			: '0';
			$show_id_menu		= $options['show_id_menu']		? '1'			: '0';
			$show_is_menu		= $options['show_is_menu']		? '1'			: '0';
			$show_it_menu		= $options['show_it_menu']		? '1'			: '0';
			$show_he_menu		= $options['show_he_menu']		? '1'			: '0';
			$show_lv_menu		= $options['show_lv_menu']		? '1'			: '0';
			$show_lt_menu		= $options['show_lt_menu']		? '1'			: '0';
			$show_ko_menu		= $options['show_ko_menu']		? '1'			: '0';
			$show_hu_menu		= $options['show_hu_menu']		? '1'			: '0';
			$show_mk_menu		= $options['show_mk_menu']		? '1'			: '0';
			$show_ml_menu		= $options['show_ml_menu']		? '1'			: '0';
			$show_mt_menu		= $options['show_mt_menu']		? '1'			: '0';
			$show_nl_menu		= $options['show_nl_menu']		? '1'			: '0';
			$show_ja_menu		= $options['show_ja_menu']		? '1'			: '0';
			$show_no_menu		= $options['show_no_menu']		? '1'			: '0';
			$show_pl_menu		= $options['show_pl_menu']		? '1'			: '0';
			$show_pt_menu		= $options['show_pt_menu']		? '1'			: '0';
			$show_ro_menu		= $options['show_ro_menu']		? '1'			: '0';
			$show_ru_menu		= $options['show_ru_menu']		? '1'			: '0';
			$show_sk_menu		= $options['show_sk_menu']		? '1'			: '0';
			$show_sl_menu		= $options['show_sl_menu']		? '1'			: '0';
			$show_sq_menu		= $options['show_sq_menu']		? '1'			: '0';
			$show_sr_menu		= $options['show_sr_menu']		? '1'			: '0';
			$show_fi_menu		= $options['show_fi_menu']		? '1'			: '0';
			$show_sv_menu		= $options['show_sv_menu']		? '1'			: '0';
			$show_sw_menu		= $options['show_sw_menu']		? '1'			: '0';
			$show_th_menu		= $options['show_th_menu']		? '1'			: '0';
			$show_tl_menu		= $options['show_tl_menu']		? '1'			: '0';
			$show_tr_menu		= $options['show_tr_menu']		? '1'			: '0';
			$show_uk_menu		= $options['show_uk_menu']		? '1'			: '0';
			$show_vi_menu		= $options['show_vi_menu']		? '1'			: '0';
			$show_yi_menu		= $options['show_yi_menu']		? '1'			: '0';
			$show_zh_menu		= $options['show_zh_menu']		? '1'			: '0';
			$show_zt_menu		= $options['show_zt_menu']		? '1'			: '0';
			
			$url = $_SERVER["PHP_SELF"];
               if ( $_SERVER['QUERY_STRING'] <> '') {
                    $url .= "?" . $_SERVER['QUERY_STRING'];
                    	}
 
			$url = 'http://' . $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
			$url = str_replace(":", "%3A", $url);
			$url = str_replace("/", "%2F", $url);
			$url = str_replace("&", "%26", $url);
				
			$english = '
<option value="#" selected="selected">Select language</option>
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Cen&amp;u='.$url.'">English</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Caf&amp;u='.$url.'">Afrikaans</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Car&amp;u='.$url.'">العربية</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Cbe&amp;u='.$url.'">Беларуская</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Cbg&amp;u='.$url.'">Български</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Cca&amp;u='.$url.'">Català</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Ccs&amp;u='.$url.'">Česky</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Ccy&amp;u='.$url.'">Cymraeg</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Cda&amp;u='.$url.'">Dansk</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Cde&amp;u='.$url.'">Deutsch</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Cet&amp;u='.$url.'">Eesti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Cel&amp;u='.$url.'">Ελληνικά</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Ces&amp;u='.$url.'">Español</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Cfa&amp;u='.$url.'">فارسی</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Cfr&amp;u='.$url.'">Français</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Cga&amp;u='.$url.'">Gaeilge</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Cgl&amp;u='.$url.'">Galego</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Chi&amp;u='.$url.'">हिन्दी</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Chr&amp;u='.$url.'">Hrvatski</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Cid&amp;u='.$url.'">Bahasa Indonesia</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Cis&amp;u='.$url.'">Íslenska</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Cit&amp;u='.$url.'">Italiano</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Che&amp;u='.$url.'">עברית</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Clv&amp;u='.$url.'">Latviešu</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Clt&amp;u='.$url.'">Lietuvių</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Cko&amp;u='.$url.'">한국어</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Chu&amp;u='.$url.'">Magyar</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Cmk&amp;u='.$url.'">Македонски</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Cml&amp;u='.$url.'">മലയാളം</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Cmt&amp;u='.$url.'">Malti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Cnl&amp;u='.$url.'">Nederlands</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Cja&amp;u='.$url.'">日本語</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Cno&amp;u='.$url.'">Norsk (Bokmål)</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Cpl&amp;u='.$url.'">Polski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Cpt&amp;u='.$url.'">Português</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Cro&amp;u='.$url.'">Română</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Cru&amp;u='.$url.'">Русский</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Csk&amp;u='.$url.'">Slovenčina</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Csl&amp;u='.$url.'">Slovenščina</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Csq&amp;u='.$url.'">Shqip</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Csr&amp;u='.$url.'">Srpski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Cfi&amp;u='.$url.'">Suomi</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Csv&amp;u='.$url.'">Svenska</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Csw&amp;u='.$url.'">Kiswahili</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Cth&amp;u='.$url.'">ไทย</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Ctl&amp;u='.$url.'">Tagalog</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Ctr&amp;u='.$url.'">Türkçe</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Cuk&amp;u='.$url.'">Українська</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Cvi&amp;u='.$url.'">Tiếng Việt</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Cyi&amp;u='.$url.'">ייִדיש</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Czh-CN&amp;u='.$url.'">中文</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Czh-TW&amp;u='.$url.'">漢語</option>';
		$afrikaans = '
<option value="#" selected="selected">Select language</option>
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Cen&amp;u='.$url.'">English</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Caf&amp;u='.$url.'">Afrikaans</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Car&amp;u='.$url.'">العربية</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Cbe&amp;u='.$url.'">Беларуская</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Cbg&amp;u='.$url.'">Български</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Cca&amp;u='.$url.'">Català</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Ccs&amp;u='.$url.'">Česky</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Ccy&amp;u='.$url.'">Cymraeg</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Cda&amp;u='.$url.'">Dansk</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Cde&amp;u='.$url.'">Deutsch</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Cet&amp;u='.$url.'">Eesti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Cel&amp;u='.$url.'">Ελληνικά</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Ces&amp;u='.$url.'">Español</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Cfa&amp;u='.$url.'">فارسی</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Cfr&amp;u='.$url.'">Français</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Cga&amp;u='.$url.'">Gaeilge</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Cgl&amp;u='.$url.'">Galego</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Chi&amp;u='.$url.'">हिन्दी</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Chr&amp;u='.$url.'">Hrvatski</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Cid&amp;u='.$url.'">Bahasa Indonesia</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Cis&amp;u='.$url.'">Íslenska</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Cit&amp;u='.$url.'">Italiano</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Che&amp;u='.$url.'">עברית</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Clv&amp;u='.$url.'">Latviešu</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Clt&amp;u='.$url.'">Lietuvių</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Cko&amp;u='.$url.'">한국어</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Chu&amp;u='.$url.'">Magyar</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Cmk&amp;u='.$url.'">Македонски</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Cml&amp;u='.$url.'">മലയാളം</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Cmt&amp;u='.$url.'">Malti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Cnl&amp;u='.$url.'">Nederlands</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Cja&amp;u='.$url.'">日本語</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Cno&amp;u='.$url.'">Norsk (Bokmål)</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Cpl&amp;u='.$url.'">Polski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Cpt&amp;u='.$url.'">Português</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Cro&amp;u='.$url.'">Română</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Cru&amp;u='.$url.'">Русский</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Csk&amp;u='.$url.'">Slovenčina</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Csl&amp;u='.$url.'">Slovenščina</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Csq&amp;u='.$url.'">Shqip</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Csr&amp;u='.$url.'">Srpski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Cfi&amp;u='.$url.'">Suomi</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Csv&amp;u='.$url.'">Svenska</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Csw&amp;u='.$url.'">Kiswahili</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Cth&amp;u='.$url.'">ไทย</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Ctl&amp;u='.$url.'">Tagalog</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Ctr&amp;u='.$url.'">Türkçe</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Cuk&amp;u='.$url.'">Українська</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Cvi&amp;u='.$url.'">Tiếng Việt</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Cyi&amp;u='.$url.'">ייִדיש</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Czh-CN&amp;u='.$url.'">中文</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Czh-TW&amp;u='.$url.'">漢語</option>';
				$araby = '
<option value="#" selected="selected">Select language</option>
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Cen&amp;u='.$url.'">English</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Caf&amp;u='.$url.'">Afrikaans</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Car&amp;u='.$url.'">العربية</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Cbe&amp;u='.$url.'">Беларуская</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Cbg&amp;u='.$url.'">Български</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Cca&amp;u='.$url.'">Català</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Ccs&amp;u='.$url.'">Česky</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Ccy&amp;u='.$url.'">Cymraeg</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Cda&amp;u='.$url.'">Dansk</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Cde&amp;u='.$url.'">Deutsch</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Cet&amp;u='.$url.'">Eesti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Cel&amp;u='.$url.'">Ελληνικά</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Ces&amp;u='.$url.'">Español</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Cfa&amp;u='.$url.'">فارسی</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Cfr&amp;u='.$url.'">Français</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Cga&amp;u='.$url.'">Gaeilge</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Cgl&amp;u='.$url.'">Galego</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Chi&amp;u='.$url.'">हिन्दी</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Chr&amp;u='.$url.'">Hrvatski</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Cid&amp;u='.$url.'">Bahasa Indonesia</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Cis&amp;u='.$url.'">Íslenska</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Cit&amp;u='.$url.'">Italiano</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Che&amp;u='.$url.'">עברית</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Clv&amp;u='.$url.'">Latviešu</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Clt&amp;u='.$url.'">Lietuvių</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Cko&amp;u='.$url.'">한국어</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Chu&amp;u='.$url.'">Magyar</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Cmk&amp;u='.$url.'">Македонски</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Cml&amp;u='.$url.'">മലയാളം</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Cmt&amp;u='.$url.'">Malti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Cnl&amp;u='.$url.'">Nederlands</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Cja&amp;u='.$url.'">日本語</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Cno&amp;u='.$url.'">Norsk (Bokmål)</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Cpl&amp;u='.$url.'">Polski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Cpt&amp;u='.$url.'">Português</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Cro&amp;u='.$url.'">Română</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Cru&amp;u='.$url.'">Русский</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Csk&amp;u='.$url.'">Slovenčina</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Csl&amp;u='.$url.'">Slovenščina</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Csq&amp;u='.$url.'">Shqip</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Csr&amp;u='.$url.'">Srpski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Cfi&amp;u='.$url.'">Suomi</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Csv&amp;u='.$url.'">Svenska</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Csw&amp;u='.$url.'">Kiswahili</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Cth&amp;u='.$url.'">ไทย</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Ctl&amp;u='.$url.'">Tagalog</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Ctr&amp;u='.$url.'">Türkçe</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Cuk&amp;u='.$url.'">Українська</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Cvi&amp;u='.$url.'">Tiếng Việt</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Cyi&amp;u='.$url.'">ייִדיש</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Czh-CN&amp;u='.$url.'">中文</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Czh-TW&amp;u='.$url.'">漢語</option>';
		$belaruskaya = '
<option value="#" selected="selected">Select language</option>
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Cen&amp;u='.$url.'">English</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Caf&amp;u='.$url.'">Afrikaans</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Car&amp;u='.$url.'">العربية</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Cbe&amp;u='.$url.'">Беларуская</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Cbg&amp;u='.$url.'">Български</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Cca&amp;u='.$url.'">Català</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Ccs&amp;u='.$url.'">Česky</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Ccy&amp;u='.$url.'">Cymraeg</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Cda&amp;u='.$url.'">Dansk</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Cde&amp;u='.$url.'">Deutsch</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Cet&amp;u='.$url.'">Eesti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Cel&amp;u='.$url.'">Ελληνικά</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Ces&amp;u='.$url.'">Español</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Cfa&amp;u='.$url.'">فارسی</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Cfr&amp;u='.$url.'">Français</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Cga&amp;u='.$url.'">Gaeilge</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Cgl&amp;u='.$url.'">Galego</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Chi&amp;u='.$url.'">हिन्दी</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Chr&amp;u='.$url.'">Hrvatski</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Cid&amp;u='.$url.'">Bahasa Indonesia</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Cis&amp;u='.$url.'">Íslenska</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Cit&amp;u='.$url.'">Italiano</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Che&amp;u='.$url.'">עברית</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Clv&amp;u='.$url.'">Latviešu</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Clt&amp;u='.$url.'">Lietuvių</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Cko&amp;u='.$url.'">한국어</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Chu&amp;u='.$url.'">Magyar</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Cmk&amp;u='.$url.'">Македонски</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Cml&amp;u='.$url.'">മലയാളം</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Cmt&amp;u='.$url.'">Malti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Cnl&amp;u='.$url.'">Nederlands</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Cja&amp;u='.$url.'">日本語</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Cno&amp;u='.$url.'">Norsk (Bokmål)</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Cpl&amp;u='.$url.'">Polski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Cpt&amp;u='.$url.'">Português</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Cro&amp;u='.$url.'">Română</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Cru&amp;u='.$url.'">Русский</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Csk&amp;u='.$url.'">Slovenčina</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Csl&amp;u='.$url.'">Slovenščina</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Csq&amp;u='.$url.'">Shqip</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Csr&amp;u='.$url.'">Srpski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Cfi&amp;u='.$url.'">Suomi</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Csv&amp;u='.$url.'">Svenska</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Csw&amp;u='.$url.'">Kiswahili</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Cth&amp;u='.$url.'">ไทย</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Ctl&amp;u='.$url.'">Tagalog</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Ctr&amp;u='.$url.'">Türkçe</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Cuk&amp;u='.$url.'">Українська</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Cvi&amp;u='.$url.'">Tiếng Việt</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Cyi&amp;u='.$url.'">ייִדיש</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Czh-CN&amp;u='.$url.'">中文</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Czh-TW&amp;u='.$url.'">漢語</option>';
		$bulgarski = '
<option value="#" selected="selected">Select language</option>
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Cen&amp;u='.$url.'">English</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Caf&amp;u='.$url.'">Afrikaans</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Car&amp;u='.$url.'">العربية</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Cbe&amp;u='.$url.'">Беларуская</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Cbg&amp;u='.$url.'">Български</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Cca&amp;u='.$url.'">Català</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Ccs&amp;u='.$url.'">Česky</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Ccy&amp;u='.$url.'">Cymraeg</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Cda&amp;u='.$url.'">Dansk</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Cde&amp;u='.$url.'">Deutsch</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Cet&amp;u='.$url.'">Eesti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Cel&amp;u='.$url.'">Ελληνικά</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Ces&amp;u='.$url.'">Español</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Cfa&amp;u='.$url.'">فارسی</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Cfr&amp;u='.$url.'">Français</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Cga&amp;u='.$url.'">Gaeilge</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Cgl&amp;u='.$url.'">Galego</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Chi&amp;u='.$url.'">हिन्दी</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Chr&amp;u='.$url.'">Hrvatski</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Cid&amp;u='.$url.'">Bahasa Indonesia</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Cis&amp;u='.$url.'">Íslenska</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Cit&amp;u='.$url.'">Italiano</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Che&amp;u='.$url.'">עברית</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Clv&amp;u='.$url.'">Latviešu</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Clt&amp;u='.$url.'">Lietuvių</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Cko&amp;u='.$url.'">한국어</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Chu&amp;u='.$url.'">Magyar</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Cmk&amp;u='.$url.'">Македонски</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Cml&amp;u='.$url.'">മലയാളം</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Cmt&amp;u='.$url.'">Malti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Cnl&amp;u='.$url.'">Nederlands</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Cja&amp;u='.$url.'">日本語</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Cno&amp;u='.$url.'">Norsk (Bokmål)</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Cpl&amp;u='.$url.'">Polski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Cpt&amp;u='.$url.'">Português</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Cro&amp;u='.$url.'">Română</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Cru&amp;u='.$url.'">Русский</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Csk&amp;u='.$url.'">Slovenčina</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Csl&amp;u='.$url.'">Slovenščina</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Csq&amp;u='.$url.'">Shqip</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Csr&amp;u='.$url.'">Srpski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Cfi&amp;u='.$url.'">Suomi</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Csv&amp;u='.$url.'">Svenska</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Csw&amp;u='.$url.'">Kiswahili</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Cth&amp;u='.$url.'">ไทย</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Ctl&amp;u='.$url.'">Tagalog</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Ctr&amp;u='.$url.'">Türkçe</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Cuk&amp;u='.$url.'">Українська</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Cvi&amp;u='.$url.'">Tiếng Việt</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Cyi&amp;u='.$url.'">ייִדיש</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Czh-CN&amp;u='.$url.'">中文</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Czh-TW&amp;u='.$url.'">漢語</option>';
		$catala = '
<option value="#" selected="selected">Select language</option>
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Cen&amp;u='.$url.'">English</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Caf&amp;u='.$url.'">Afrikaans</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Car&amp;u='.$url.'">العربية</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Cbe&amp;u='.$url.'">Беларуская</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Cbg&amp;u='.$url.'">Български</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Cca&amp;u='.$url.'">Català</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Ccs&amp;u='.$url.'">Česky</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Ccy&amp;u='.$url.'">Cymraeg</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Cda&amp;u='.$url.'">Dansk</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Cde&amp;u='.$url.'">Deutsch</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Cet&amp;u='.$url.'">Eesti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Cel&amp;u='.$url.'">Ελληνικά</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Ces&amp;u='.$url.'">Español</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Cfa&amp;u='.$url.'">فارسی</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Cfr&amp;u='.$url.'">Français</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Cga&amp;u='.$url.'">Gaeilge</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Cgl&amp;u='.$url.'">Galego</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Chi&amp;u='.$url.'">हिन्दी</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Chr&amp;u='.$url.'">Hrvatski</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Cid&amp;u='.$url.'">Bahasa Indonesia</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Cis&amp;u='.$url.'">Íslenska</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Cit&amp;u='.$url.'">Italiano</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Che&amp;u='.$url.'">עברית</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Clv&amp;u='.$url.'">Latviešu</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Clt&amp;u='.$url.'">Lietuvių</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Cko&amp;u='.$url.'">한국어</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Chu&amp;u='.$url.'">Magyar</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Cmk&amp;u='.$url.'">Македонски</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Cml&amp;u='.$url.'">മലയാളം</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Cmt&amp;u='.$url.'">Malti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Cnl&amp;u='.$url.'">Nederlands</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Cja&amp;u='.$url.'">日本語</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Cno&amp;u='.$url.'">Norsk (Bokmål)</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Cpl&amp;u='.$url.'">Polski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Cpt&amp;u='.$url.'">Português</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Cro&amp;u='.$url.'">Română</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Cru&amp;u='.$url.'">Русский</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Csk&amp;u='.$url.'">Slovenčina</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Csl&amp;u='.$url.'">Slovenščina</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Csq&amp;u='.$url.'">Shqip</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Csr&amp;u='.$url.'">Srpski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Cfi&amp;u='.$url.'">Suomi</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Csv&amp;u='.$url.'">Svenska</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Csw&amp;u='.$url.'">Kiswahili</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Cth&amp;u='.$url.'">ไทย</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Ctl&amp;u='.$url.'">Tagalog</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Ctr&amp;u='.$url.'">Türkçe</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Cuk&amp;u='.$url.'">Українська</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Cvi&amp;u='.$url.'">Tiếng Việt</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Cyi&amp;u='.$url.'">ייִדיש</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Czh-CN&amp;u='.$url.'">中文</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Czh-TW&amp;u='.$url.'">漢語</option>';
		$cesky = '
<option value="#" selected="selected">Select language</option>
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Cen&amp;u='.$url.'">English</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Caf&amp;u='.$url.'">Afrikaans</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Car&amp;u='.$url.'">العربية</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Cbe&amp;u='.$url.'">Беларуская</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Cbg&amp;u='.$url.'">Български</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Cca&amp;u='.$url.'">Català</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Ccs&amp;u='.$url.'">Česky</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Ccy&amp;u='.$url.'">Cymraeg</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Cda&amp;u='.$url.'">Dansk</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Cde&amp;u='.$url.'">Deutsch</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Cet&amp;u='.$url.'">Eesti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Cel&amp;u='.$url.'">Ελληνικά</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Ces&amp;u='.$url.'">Español</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Cfa&amp;u='.$url.'">فارسی</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Cfr&amp;u='.$url.'">Français</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Cga&amp;u='.$url.'">Gaeilge</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Cgl&amp;u='.$url.'">Galego</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Chi&amp;u='.$url.'">हिन्दी</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Chr&amp;u='.$url.'">Hrvatski</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Cid&amp;u='.$url.'">Bahasa Indonesia</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Cis&amp;u='.$url.'">Íslenska</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Cit&amp;u='.$url.'">Italiano</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Che&amp;u='.$url.'">עברית</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Clv&amp;u='.$url.'">Latviešu</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Clt&amp;u='.$url.'">Lietuvių</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Cko&amp;u='.$url.'">한국어</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Chu&amp;u='.$url.'">Magyar</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Cmk&amp;u='.$url.'">Македонски</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Cml&amp;u='.$url.'">മലയാളം</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Cmt&amp;u='.$url.'">Malti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Cnl&amp;u='.$url.'">Nederlands</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Cja&amp;u='.$url.'">日本語</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Cno&amp;u='.$url.'">Norsk (Bokmål)</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Cpl&amp;u='.$url.'">Polski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Cpt&amp;u='.$url.'">Português</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Cro&amp;u='.$url.'">Română</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Cru&amp;u='.$url.'">Русский</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Csk&amp;u='.$url.'">Slovenčina</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Csl&amp;u='.$url.'">Slovenščina</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Csq&amp;u='.$url.'">Shqip</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Csr&amp;u='.$url.'">Srpski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Cfi&amp;u='.$url.'">Suomi</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Csv&amp;u='.$url.'">Svenska</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Csw&amp;u='.$url.'">Kiswahili</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Cth&amp;u='.$url.'">ไทย</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Ctl&amp;u='.$url.'">Tagalog</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Ctr&amp;u='.$url.'">Türkçe</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Cuk&amp;u='.$url.'">Українська</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Cvi&amp;u='.$url.'">Tiếng Việt</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Cyi&amp;u='.$url.'">ייִדיש</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Czh-CN&amp;u='.$url.'">中文</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Czh-TW&amp;u='.$url.'">漢語</option>';
		$cymraeg = '
<option value="#" selected="selected">Select language</option>
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Cen&amp;u='.$url.'">English</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Caf&amp;u='.$url.'">Afrikaans</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Car&amp;u='.$url.'">العربية</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Cbe&amp;u='.$url.'">Беларуская</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Cbg&amp;u='.$url.'">Български</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Cca&amp;u='.$url.'">Català</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Ccs&amp;u='.$url.'">Česky</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Ccy&amp;u='.$url.'">Cymraeg</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Cda&amp;u='.$url.'">Dansk</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Cde&amp;u='.$url.'">Deutsch</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Cet&amp;u='.$url.'">Eesti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Cel&amp;u='.$url.'">Ελληνικά</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Ces&amp;u='.$url.'">Español</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Cfa&amp;u='.$url.'">فارسی</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Cfr&amp;u='.$url.'">Français</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Cga&amp;u='.$url.'">Gaeilge</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Cgl&amp;u='.$url.'">Galego</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Chi&amp;u='.$url.'">हिन्दी</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Chr&amp;u='.$url.'">Hrvatski</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Cid&amp;u='.$url.'">Bahasa Indonesia</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Cis&amp;u='.$url.'">Íslenska</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Cit&amp;u='.$url.'">Italiano</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Che&amp;u='.$url.'">עברית</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Clv&amp;u='.$url.'">Latviešu</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Clt&amp;u='.$url.'">Lietuvių</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Cko&amp;u='.$url.'">한국어</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Chu&amp;u='.$url.'">Magyar</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Cmk&amp;u='.$url.'">Македонски</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Cml&amp;u='.$url.'">മലയാളം</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Cmt&amp;u='.$url.'">Malti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Cnl&amp;u='.$url.'">Nederlands</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Cja&amp;u='.$url.'">日本語</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Cno&amp;u='.$url.'">Norsk (Bokmål)</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Cpl&amp;u='.$url.'">Polski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Cpt&amp;u='.$url.'">Português</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Cro&amp;u='.$url.'">Română</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Cru&amp;u='.$url.'">Русский</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Csk&amp;u='.$url.'">Slovenčina</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Csl&amp;u='.$url.'">Slovenščina</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Csq&amp;u='.$url.'">Shqip</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Csr&amp;u='.$url.'">Srpski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Cfi&amp;u='.$url.'">Suomi</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Csv&amp;u='.$url.'">Svenska</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Csw&amp;u='.$url.'">Kiswahili</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Cth&amp;u='.$url.'">ไทย</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Ctl&amp;u='.$url.'">Tagalog</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Ctr&amp;u='.$url.'">Türkçe</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Cuk&amp;u='.$url.'">Українська</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Cvi&amp;u='.$url.'">Tiếng Việt</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Cyi&amp;u='.$url.'">ייִדיש</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Czh-CN&amp;u='.$url.'">中文</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Czh-TW&amp;u='.$url.'">漢語</option>';
		$dansk = '
<option value="#" selected="selected">Select language</option>
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Cen&amp;u='.$url.'">English</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Caf&amp;u='.$url.'">Afrikaans</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Car&amp;u='.$url.'">العربية</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Cbe&amp;u='.$url.'">Беларуская</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Cbg&amp;u='.$url.'">Български</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Cca&amp;u='.$url.'">Català</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Ccs&amp;u='.$url.'">Česky</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Ccy&amp;u='.$url.'">Cymraeg</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Cda&amp;u='.$url.'">Dansk</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Cde&amp;u='.$url.'">Deutsch</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Cet&amp;u='.$url.'">Eesti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Cel&amp;u='.$url.'">Ελληνικά</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Ces&amp;u='.$url.'">Español</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Cfa&amp;u='.$url.'">فارسی</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Cfr&amp;u='.$url.'">Français</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Cga&amp;u='.$url.'">Gaeilge</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Cgl&amp;u='.$url.'">Galego</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Chi&amp;u='.$url.'">हिन्दी</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Chr&amp;u='.$url.'">Hrvatski</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Cid&amp;u='.$url.'">Bahasa Indonesia</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Cis&amp;u='.$url.'">Íslenska</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Cit&amp;u='.$url.'">Italiano</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Che&amp;u='.$url.'">עברית</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Clv&amp;u='.$url.'">Latviešu</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Clt&amp;u='.$url.'">Lietuvių</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Cko&amp;u='.$url.'">한국어</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Chu&amp;u='.$url.'">Magyar</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Cmk&amp;u='.$url.'">Македонски</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Cml&amp;u='.$url.'">മലയാളം</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Cmt&amp;u='.$url.'">Malti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Cnl&amp;u='.$url.'">Nederlands</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Cja&amp;u='.$url.'">日本語</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Cno&amp;u='.$url.'">Norsk (Bokmål)</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Cpl&amp;u='.$url.'">Polski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Cpt&amp;u='.$url.'">Português</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Cro&amp;u='.$url.'">Română</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Cru&amp;u='.$url.'">Русский</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Csk&amp;u='.$url.'">Slovenčina</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Csl&amp;u='.$url.'">Slovenščina</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Csq&amp;u='.$url.'">Shqip</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Csr&amp;u='.$url.'">Srpski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Cfi&amp;u='.$url.'">Suomi</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Csv&amp;u='.$url.'">Svenska</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Csw&amp;u='.$url.'">Kiswahili</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Cth&amp;u='.$url.'">ไทย</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Ctl&amp;u='.$url.'">Tagalog</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Ctr&amp;u='.$url.'">Türkçe</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Cuk&amp;u='.$url.'">Українська</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Cvi&amp;u='.$url.'">Tiếng Việt</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Cyi&amp;u='.$url.'">ייִדיש</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Czh-CN&amp;u='.$url.'">中文</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Czh-TW&amp;u='.$url.'">漢語</option>';
		$deutsch = '
<option value="#" selected="selected">Select language</option>
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Cen&amp;u='.$url.'">English</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Caf&amp;u='.$url.'">Afrikaans</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Car&amp;u='.$url.'">العربية</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Cbe&amp;u='.$url.'">Беларуская</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Cbg&amp;u='.$url.'">Български</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Cca&amp;u='.$url.'">Català</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Ccs&amp;u='.$url.'">Česky</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Ccy&amp;u='.$url.'">Cymraeg</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Cda&amp;u='.$url.'">Dansk</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Cde&amp;u='.$url.'">Deutsch</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Cet&amp;u='.$url.'">Eesti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Cel&amp;u='.$url.'">Ελληνικά</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Ces&amp;u='.$url.'">Español</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Cfa&amp;u='.$url.'">فارسی</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Cfr&amp;u='.$url.'">Français</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Cga&amp;u='.$url.'">Gaeilge</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Cgl&amp;u='.$url.'">Galego</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Chi&amp;u='.$url.'">हिन्दी</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Chr&amp;u='.$url.'">Hrvatski</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Cid&amp;u='.$url.'">Bahasa Indonesia</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Cis&amp;u='.$url.'">Íslenska</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Cit&amp;u='.$url.'">Italiano</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Che&amp;u='.$url.'">עברית</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Clv&amp;u='.$url.'">Latviešu</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Clt&amp;u='.$url.'">Lietuvių</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Cko&amp;u='.$url.'">한국어</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Chu&amp;u='.$url.'">Magyar</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Cmk&amp;u='.$url.'">Македонски</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Cml&amp;u='.$url.'">മലയാളം</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Cmt&amp;u='.$url.'">Malti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Cnl&amp;u='.$url.'">Nederlands</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Cja&amp;u='.$url.'">日本語</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Cno&amp;u='.$url.'">Norsk (Bokmål)</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Cpl&amp;u='.$url.'">Polski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Cpt&amp;u='.$url.'">Português</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Cro&amp;u='.$url.'">Română</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Cru&amp;u='.$url.'">Русский</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Csk&amp;u='.$url.'">Slovenčina</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Csl&amp;u='.$url.'">Slovenščina</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Csq&amp;u='.$url.'">Shqip</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Csr&amp;u='.$url.'">Srpski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Cfi&amp;u='.$url.'">Suomi</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Csv&amp;u='.$url.'">Svenska</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Csw&amp;u='.$url.'">Kiswahili</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Cth&amp;u='.$url.'">ไทย</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Ctl&amp;u='.$url.'">Tagalog</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Ctr&amp;u='.$url.'">Türkçe</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Cuk&amp;u='.$url.'">Українська</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Cvi&amp;u='.$url.'">Tiếng Việt</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Cyi&amp;u='.$url.'">ייִדיש</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Czh-CN&amp;u='.$url.'">中文</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Czh-TW&amp;u='.$url.'">漢語</option>';
		$eesti = '
<option value="#" selected="selected">Select language</option>
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Cen&amp;u='.$url.'">English</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Caf&amp;u='.$url.'">Afrikaans</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Car&amp;u='.$url.'">العربية</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Cbe&amp;u='.$url.'">Беларуская</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Cbg&amp;u='.$url.'">Български</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Cca&amp;u='.$url.'">Català</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Ccs&amp;u='.$url.'">Česky</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Ccy&amp;u='.$url.'">Cymraeg</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Cda&amp;u='.$url.'">Dansk</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Cde&amp;u='.$url.'">Deutsch</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Cet&amp;u='.$url.'">Eesti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Cel&amp;u='.$url.'">Ελληνικά</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Ces&amp;u='.$url.'">Español</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Cfa&amp;u='.$url.'">فارسی</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Cfr&amp;u='.$url.'">Français</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Cga&amp;u='.$url.'">Gaeilge</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Cgl&amp;u='.$url.'">Galego</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Chi&amp;u='.$url.'">हिन्दी</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Chr&amp;u='.$url.'">Hrvatski</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Cid&amp;u='.$url.'">Bahasa Indonesia</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Cis&amp;u='.$url.'">Íslenska</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Cit&amp;u='.$url.'">Italiano</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Che&amp;u='.$url.'">עברית</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Clv&amp;u='.$url.'">Latviešu</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Clt&amp;u='.$url.'">Lietuvių</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Cko&amp;u='.$url.'">한국어</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Chu&amp;u='.$url.'">Magyar</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Cmk&amp;u='.$url.'">Македонски</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Cml&amp;u='.$url.'">മലയാളം</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Cmt&amp;u='.$url.'">Malti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Cnl&amp;u='.$url.'">Nederlands</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Cja&amp;u='.$url.'">日本語</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Cno&amp;u='.$url.'">Norsk (Bokmål)</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Cpl&amp;u='.$url.'">Polski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Cpt&amp;u='.$url.'">Português</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Cro&amp;u='.$url.'">Română</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Cru&amp;u='.$url.'">Русский</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Csk&amp;u='.$url.'">Slovenčina</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Csl&amp;u='.$url.'">Slovenščina</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Csq&amp;u='.$url.'">Shqip</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Csr&amp;u='.$url.'">Srpski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Cfi&amp;u='.$url.'">Suomi</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Csv&amp;u='.$url.'">Svenska</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Csw&amp;u='.$url.'">Kiswahili</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Cth&amp;u='.$url.'">ไทย</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Ctl&amp;u='.$url.'">Tagalog</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Ctr&amp;u='.$url.'">Türkçe</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Cuk&amp;u='.$url.'">Українська</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Cvi&amp;u='.$url.'">Tiếng Việt</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Cyi&amp;u='.$url.'">ייִדיש</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Czh-CN&amp;u='.$url.'">中文</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Czh-TW&amp;u='.$url.'">漢語</option>';
		$ellenika = '
<option value="#" selected="selected">Select language</option>
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Cen&amp;u='.$url.'">English</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Caf&amp;u='.$url.'">Afrikaans</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Car&amp;u='.$url.'">العربية</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Cbe&amp;u='.$url.'">Беларуская</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Cbg&amp;u='.$url.'">Български</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Cca&amp;u='.$url.'">Català</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Ccs&amp;u='.$url.'">Česky</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Ccy&amp;u='.$url.'">Cymraeg</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Cda&amp;u='.$url.'">Dansk</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Cde&amp;u='.$url.'">Deutsch</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Cet&amp;u='.$url.'">Eesti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Cel&amp;u='.$url.'">Ελληνικά</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Ces&amp;u='.$url.'">Español</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Cfa&amp;u='.$url.'">فارسی</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Cfr&amp;u='.$url.'">Français</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Cga&amp;u='.$url.'">Gaeilge</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Cgl&amp;u='.$url.'">Galego</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Chi&amp;u='.$url.'">हिन्दी</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Chr&amp;u='.$url.'">Hrvatski</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Cid&amp;u='.$url.'">Bahasa Indonesia</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Cis&amp;u='.$url.'">Íslenska</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Cit&amp;u='.$url.'">Italiano</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Che&amp;u='.$url.'">עברית</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Clv&amp;u='.$url.'">Latviešu</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Clt&amp;u='.$url.'">Lietuvių</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Cko&amp;u='.$url.'">한국어</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Chu&amp;u='.$url.'">Magyar</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Cmk&amp;u='.$url.'">Македонски</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Cml&amp;u='.$url.'">മലയാളം</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Cmt&amp;u='.$url.'">Malti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Cnl&amp;u='.$url.'">Nederlands</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Cja&amp;u='.$url.'">日本語</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Cno&amp;u='.$url.'">Norsk (Bokmål)</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Cpl&amp;u='.$url.'">Polski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Cpt&amp;u='.$url.'">Português</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Cro&amp;u='.$url.'">Română</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Cru&amp;u='.$url.'">Русский</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Csk&amp;u='.$url.'">Slovenčina</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Csl&amp;u='.$url.'">Slovenščina</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Csq&amp;u='.$url.'">Shqip</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Csr&amp;u='.$url.'">Srpski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Cfi&amp;u='.$url.'">Suomi</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Csv&amp;u='.$url.'">Svenska</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Csw&amp;u='.$url.'">Kiswahili</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Cth&amp;u='.$url.'">ไทย</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Ctl&amp;u='.$url.'">Tagalog</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Ctr&amp;u='.$url.'">Türkçe</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Cuk&amp;u='.$url.'">Українська</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Cvi&amp;u='.$url.'">Tiếng Việt</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Cyi&amp;u='.$url.'">ייִדיש</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Czh-CN&amp;u='.$url.'">中文</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Czh-TW&amp;u='.$url.'">漢語</option>';
		$espanol = '
<option value="#" selected="selected">Select language</option>
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Cen&amp;u='.$url.'">English</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Caf&amp;u='.$url.'">Afrikaans</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Car&amp;u='.$url.'">العربية</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Cbe&amp;u='.$url.'">Беларуская</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Cbg&amp;u='.$url.'">Български</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Cca&amp;u='.$url.'">Català</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Ccs&amp;u='.$url.'">Česky</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Ccy&amp;u='.$url.'">Cymraeg</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Cda&amp;u='.$url.'">Dansk</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Cde&amp;u='.$url.'">Deutsch</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Cet&amp;u='.$url.'">Eesti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Cel&amp;u='.$url.'">Ελληνικά</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Ces&amp;u='.$url.'">Español</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Cfa&amp;u='.$url.'">فارسی</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Cfr&amp;u='.$url.'">Français</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Cga&amp;u='.$url.'">Gaeilge</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Cgl&amp;u='.$url.'">Galego</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Chi&amp;u='.$url.'">हिन्दी</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Chr&amp;u='.$url.'">Hrvatski</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Cid&amp;u='.$url.'">Bahasa Indonesia</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Cis&amp;u='.$url.'">Íslenska</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Cit&amp;u='.$url.'">Italiano</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Che&amp;u='.$url.'">עברית</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Clv&amp;u='.$url.'">Latviešu</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Clt&amp;u='.$url.'">Lietuvių</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Cko&amp;u='.$url.'">한국어</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Chu&amp;u='.$url.'">Magyar</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Cmk&amp;u='.$url.'">Македонски</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Cml&amp;u='.$url.'">മലയാളം</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Cmt&amp;u='.$url.'">Malti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Cnl&amp;u='.$url.'">Nederlands</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Cja&amp;u='.$url.'">日本語</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Cno&amp;u='.$url.'">Norsk (Bokmål)</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Cpl&amp;u='.$url.'">Polski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Cpt&amp;u='.$url.'">Português</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Cro&amp;u='.$url.'">Română</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Cru&amp;u='.$url.'">Русский</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Csk&amp;u='.$url.'">Slovenčina</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Csl&amp;u='.$url.'">Slovenščina</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Csq&amp;u='.$url.'">Shqip</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Csr&amp;u='.$url.'">Srpski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Cfi&amp;u='.$url.'">Suomi</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Csv&amp;u='.$url.'">Svenska</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Csw&amp;u='.$url.'">Kiswahili</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Cth&amp;u='.$url.'">ไทย</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Ctl&amp;u='.$url.'">Tagalog</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Ctr&amp;u='.$url.'">Türkçe</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Cuk&amp;u='.$url.'">Українська</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Cvi&amp;u='.$url.'">Tiếng Việt</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Cyi&amp;u='.$url.'">ייִדיש</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Czh-CN&amp;u='.$url.'">中文</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Czh-TW&amp;u='.$url.'">漢語</option>';
		$farsi = '
<option value="#" selected="selected">Select language</option>
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Cen&amp;u='.$url.'">English</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Caf&amp;u='.$url.'">Afrikaans</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Car&amp;u='.$url.'">العربية</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Cbe&amp;u='.$url.'">Беларуская</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Cbg&amp;u='.$url.'">Български</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Cca&amp;u='.$url.'">Català</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Ccs&amp;u='.$url.'">Česky</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Ccy&amp;u='.$url.'">Cymraeg</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Cda&amp;u='.$url.'">Dansk</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Cde&amp;u='.$url.'">Deutsch</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Cet&amp;u='.$url.'">Eesti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Cel&amp;u='.$url.'">Ελληνικά</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Ces&amp;u='.$url.'">Español</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Cfa&amp;u='.$url.'">فارسی</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Cfr&amp;u='.$url.'">Français</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Cga&amp;u='.$url.'">Gaeilge</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Cgl&amp;u='.$url.'">Galego</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Chi&amp;u='.$url.'">हिन्दी</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Chr&amp;u='.$url.'">Hrvatski</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Cid&amp;u='.$url.'">Bahasa Indonesia</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Cis&amp;u='.$url.'">Íslenska</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Cit&amp;u='.$url.'">Italiano</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Che&amp;u='.$url.'">עברית</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Clv&amp;u='.$url.'">Latviešu</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Clt&amp;u='.$url.'">Lietuvių</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Cko&amp;u='.$url.'">한국어</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Chu&amp;u='.$url.'">Magyar</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Cmk&amp;u='.$url.'">Македонски</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Cml&amp;u='.$url.'">മലയാളം</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Cmt&amp;u='.$url.'">Malti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Cnl&amp;u='.$url.'">Nederlands</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Cja&amp;u='.$url.'">日本語</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Cno&amp;u='.$url.'">Norsk (Bokmål)</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Cpl&amp;u='.$url.'">Polski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Cpt&amp;u='.$url.'">Português</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Cro&amp;u='.$url.'">Română</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Cru&amp;u='.$url.'">Русский</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Csk&amp;u='.$url.'">Slovenčina</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Csl&amp;u='.$url.'">Slovenščina</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Csq&amp;u='.$url.'">Shqip</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Csr&amp;u='.$url.'">Srpski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Cfi&amp;u='.$url.'">Suomi</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Csv&amp;u='.$url.'">Svenska</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Csw&amp;u='.$url.'">Kiswahili</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Cth&amp;u='.$url.'">ไทย</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Ctl&amp;u='.$url.'">Tagalog</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Ctr&amp;u='.$url.'">Türkçe</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Cuk&amp;u='.$url.'">Українська</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Cvi&amp;u='.$url.'">Tiếng Việt</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Cyi&amp;u='.$url.'">ייִדיש</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Czh-CN&amp;u='.$url.'">中文</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Czh-TW&amp;u='.$url.'">漢語</option>';
		$francais = '
<option value="#" selected="selected">Select language</option>
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Cen&amp;u='.$url.'">English</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Caf&amp;u='.$url.'">Afrikaans</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Car&amp;u='.$url.'">العربية</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Cbe&amp;u='.$url.'">Беларуская</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Cbg&amp;u='.$url.'">Български</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Cca&amp;u='.$url.'">Català</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Ccs&amp;u='.$url.'">Česky</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Ccy&amp;u='.$url.'">Cymraeg</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Cda&amp;u='.$url.'">Dansk</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Cde&amp;u='.$url.'">Deutsch</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Cet&amp;u='.$url.'">Eesti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Cel&amp;u='.$url.'">Ελληνικά</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Ces&amp;u='.$url.'">Español</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Cfa&amp;u='.$url.'">فارسی</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Cfr&amp;u='.$url.'">Français</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Cga&amp;u='.$url.'">Gaeilge</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Cgl&amp;u='.$url.'">Galego</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Chi&amp;u='.$url.'">हिन्दी</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Chr&amp;u='.$url.'">Hrvatski</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Cid&amp;u='.$url.'">Bahasa Indonesia</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Cis&amp;u='.$url.'">Íslenska</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Cit&amp;u='.$url.'">Italiano</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Che&amp;u='.$url.'">עברית</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Clv&amp;u='.$url.'">Latviešu</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Clt&amp;u='.$url.'">Lietuvių</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Cko&amp;u='.$url.'">한국어</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Chu&amp;u='.$url.'">Magyar</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Cmk&amp;u='.$url.'">Македонски</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Cml&amp;u='.$url.'">മലയാളം</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Cmt&amp;u='.$url.'">Malti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Cnl&amp;u='.$url.'">Nederlands</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Cja&amp;u='.$url.'">日本語</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Cno&amp;u='.$url.'">Norsk (Bokmål)</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Cpl&amp;u='.$url.'">Polski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Cpt&amp;u='.$url.'">Português</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Cro&amp;u='.$url.'">Română</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Cru&amp;u='.$url.'">Русский</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Csk&amp;u='.$url.'">Slovenčina</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Csl&amp;u='.$url.'">Slovenščina</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Csq&amp;u='.$url.'">Shqip</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Csr&amp;u='.$url.'">Srpski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Cfi&amp;u='.$url.'">Suomi</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Csv&amp;u='.$url.'">Svenska</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Csw&amp;u='.$url.'">Kiswahili</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Cth&amp;u='.$url.'">ไทย</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Ctl&amp;u='.$url.'">Tagalog</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Ctr&amp;u='.$url.'">Türkçe</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Cuk&amp;u='.$url.'">Українська</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Cvi&amp;u='.$url.'">Tiếng Việt</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Cyi&amp;u='.$url.'">ייִדיש</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Czh-CN&amp;u='.$url.'">中文</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Czh-TW&amp;u='.$url.'">漢語</option>';
		$gaeilge = '
<option value="#" selected="selected">Select language</option>
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Cen&amp;u='.$url.'">English</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Caf&amp;u='.$url.'">Afrikaans</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Car&amp;u='.$url.'">العربية</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Cbe&amp;u='.$url.'">Беларуская</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Cbg&amp;u='.$url.'">Български</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Cca&amp;u='.$url.'">Català</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Ccs&amp;u='.$url.'">Česky</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Ccy&amp;u='.$url.'">Cymraeg</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Cda&amp;u='.$url.'">Dansk</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Cde&amp;u='.$url.'">Deutsch</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Cet&amp;u='.$url.'">Eesti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Cel&amp;u='.$url.'">Ελληνικά</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Ces&amp;u='.$url.'">Español</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Cfa&amp;u='.$url.'">فارسی</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Cfr&amp;u='.$url.'">Français</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Cga&amp;u='.$url.'">Gaeilge</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Cgl&amp;u='.$url.'">Galego</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Chi&amp;u='.$url.'">हिन्दी</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Chr&amp;u='.$url.'">Hrvatski</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Cid&amp;u='.$url.'">Bahasa Indonesia</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Cis&amp;u='.$url.'">Íslenska</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Cit&amp;u='.$url.'">Italiano</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Che&amp;u='.$url.'">עברית</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Clv&amp;u='.$url.'">Latviešu</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Clt&amp;u='.$url.'">Lietuvių</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Cko&amp;u='.$url.'">한국어</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Chu&amp;u='.$url.'">Magyar</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Cmk&amp;u='.$url.'">Македонски</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Cml&amp;u='.$url.'">മലയാളം</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Cmt&amp;u='.$url.'">Malti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Cnl&amp;u='.$url.'">Nederlands</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Cja&amp;u='.$url.'">日本語</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Cno&amp;u='.$url.'">Norsk (Bokmål)</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Cpl&amp;u='.$url.'">Polski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Cpt&amp;u='.$url.'">Português</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Cro&amp;u='.$url.'">Română</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Cru&amp;u='.$url.'">Русский</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Csk&amp;u='.$url.'">Slovenčina</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Csl&amp;u='.$url.'">Slovenščina</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Csq&amp;u='.$url.'">Shqip</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Csr&amp;u='.$url.'">Srpski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Cfi&amp;u='.$url.'">Suomi</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Csv&amp;u='.$url.'">Svenska</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Csw&amp;u='.$url.'">Kiswahili</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Cth&amp;u='.$url.'">ไทย</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Ctl&amp;u='.$url.'">Tagalog</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Ctr&amp;u='.$url.'">Türkçe</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Cuk&amp;u='.$url.'">Українська</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Cvi&amp;u='.$url.'">Tiếng Việt</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Cyi&amp;u='.$url.'">ייִדיש</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Czh-CN&amp;u='.$url.'">中文</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Czh-TW&amp;u='.$url.'">漢語</option>';
		$galego = '
<option value="#" selected="selected">Select language</option>
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Cen&amp;u='.$url.'">English</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Caf&amp;u='.$url.'">Afrikaans</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Car&amp;u='.$url.'">العربية</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Cbe&amp;u='.$url.'">Беларуская</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Cbg&amp;u='.$url.'">Български</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Cca&amp;u='.$url.'">Català</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Ccs&amp;u='.$url.'">Česky</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Ccy&amp;u='.$url.'">Cymraeg</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Cda&amp;u='.$url.'">Dansk</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Cde&amp;u='.$url.'">Deutsch</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Cet&amp;u='.$url.'">Eesti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Cel&amp;u='.$url.'">Ελληνικά</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Ces&amp;u='.$url.'">Español</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Cfa&amp;u='.$url.'">فارسی</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Cfr&amp;u='.$url.'">Français</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Cga&amp;u='.$url.'">Gaeilge</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Cgl&amp;u='.$url.'">Galego</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Chi&amp;u='.$url.'">हिन्दी</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Chr&amp;u='.$url.'">Hrvatski</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Cid&amp;u='.$url.'">Bahasa Indonesia</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Cis&amp;u='.$url.'">Íslenska</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Cit&amp;u='.$url.'">Italiano</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Che&amp;u='.$url.'">עברית</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Clv&amp;u='.$url.'">Latviešu</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Clt&amp;u='.$url.'">Lietuvių</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Cko&amp;u='.$url.'">한국어</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Chu&amp;u='.$url.'">Magyar</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Cmk&amp;u='.$url.'">Македонски</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Cml&amp;u='.$url.'">മലയാളം</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Cmt&amp;u='.$url.'">Malti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Cnl&amp;u='.$url.'">Nederlands</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Cja&amp;u='.$url.'">日本語</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Cno&amp;u='.$url.'">Norsk (Bokmål)</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Cpl&amp;u='.$url.'">Polski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Cpt&amp;u='.$url.'">Português</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Cro&amp;u='.$url.'">Română</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Cru&amp;u='.$url.'">Русский</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Csk&amp;u='.$url.'">Slovenčina</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Csl&amp;u='.$url.'">Slovenščina</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Csq&amp;u='.$url.'">Shqip</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Csr&amp;u='.$url.'">Srpski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Cfi&amp;u='.$url.'">Suomi</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Csv&amp;u='.$url.'">Svenska</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Csw&amp;u='.$url.'">Kiswahili</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Cth&amp;u='.$url.'">ไทย</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Ctl&amp;u='.$url.'">Tagalog</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Ctr&amp;u='.$url.'">Türkçe</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Cuk&amp;u='.$url.'">Українська</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Cvi&amp;u='.$url.'">Tiếng Việt</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Cyi&amp;u='.$url.'">ייִדיש</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Czh-CN&amp;u='.$url.'">中文</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Czh-TW&amp;u='.$url.'">漢語</option>';
		$hindi = '
<option value="#" selected="selected">Select language</option>
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Cen&amp;u='.$url.'">English</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Caf&amp;u='.$url.'">Afrikaans</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Car&amp;u='.$url.'">العربية</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Cbe&amp;u='.$url.'">Беларуская</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Cbg&amp;u='.$url.'">Български</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Cca&amp;u='.$url.'">Català</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Ccs&amp;u='.$url.'">Česky</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Ccy&amp;u='.$url.'">Cymraeg</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Cda&amp;u='.$url.'">Dansk</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Cde&amp;u='.$url.'">Deutsch</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Cet&amp;u='.$url.'">Eesti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Cel&amp;u='.$url.'">Ελληνικά</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Ces&amp;u='.$url.'">Español</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Cfa&amp;u='.$url.'">فارسی</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Cfr&amp;u='.$url.'">Français</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Cga&amp;u='.$url.'">Gaeilge</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Cgl&amp;u='.$url.'">Galego</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Chi&amp;u='.$url.'">हिन्दी</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Chr&amp;u='.$url.'">Hrvatski</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Cid&amp;u='.$url.'">Bahasa Indonesia</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Cis&amp;u='.$url.'">Íslenska</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Cit&amp;u='.$url.'">Italiano</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Che&amp;u='.$url.'">עברית</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Clv&amp;u='.$url.'">Latviešu</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Clt&amp;u='.$url.'">Lietuvių</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Cko&amp;u='.$url.'">한국어</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Chu&amp;u='.$url.'">Magyar</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Cmk&amp;u='.$url.'">Македонски</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Cml&amp;u='.$url.'">മലയാളം</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Cmt&amp;u='.$url.'">Malti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Cnl&amp;u='.$url.'">Nederlands</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Cja&amp;u='.$url.'">日本語</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Cno&amp;u='.$url.'">Norsk (Bokmål)</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Cpl&amp;u='.$url.'">Polski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Cpt&amp;u='.$url.'">Português</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Cro&amp;u='.$url.'">Română</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Cru&amp;u='.$url.'">Русский</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Csk&amp;u='.$url.'">Slovenčina</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Csl&amp;u='.$url.'">Slovenščina</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Csq&amp;u='.$url.'">Shqip</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Csr&amp;u='.$url.'">Srpski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Cfi&amp;u='.$url.'">Suomi</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Csv&amp;u='.$url.'">Svenska</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Csw&amp;u='.$url.'">Kiswahili</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Cth&amp;u='.$url.'">ไทย</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Ctl&amp;u='.$url.'">Tagalog</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Ctr&amp;u='.$url.'">Türkçe</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Cuk&amp;u='.$url.'">Українська</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Cvi&amp;u='.$url.'">Tiếng Việt</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Cyi&amp;u='.$url.'">ייִדיש</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Czh-CN&amp;u='.$url.'">中文</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Czh-TW&amp;u='.$url.'">漢語</option>';
		$hrvatski = '
<option value="#" selected="selected">Select language</option>
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Cen&amp;u='.$url.'">English</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Caf&amp;u='.$url.'">Afrikaans</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Car&amp;u='.$url.'">العربية</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Cbe&amp;u='.$url.'">Беларуская</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Cbg&amp;u='.$url.'">Български</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Cca&amp;u='.$url.'">Català</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Ccs&amp;u='.$url.'">Česky</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Ccy&amp;u='.$url.'">Cymraeg</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Cda&amp;u='.$url.'">Dansk</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Cde&amp;u='.$url.'">Deutsch</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Cet&amp;u='.$url.'">Eesti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Cel&amp;u='.$url.'">Ελληνικά</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Ces&amp;u='.$url.'">Español</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Cfa&amp;u='.$url.'">فارسی</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Cfr&amp;u='.$url.'">Français</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Cga&amp;u='.$url.'">Gaeilge</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Cgl&amp;u='.$url.'">Galego</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Chi&amp;u='.$url.'">हिन्दी</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Chr&amp;u='.$url.'">Hrvatski</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Cid&amp;u='.$url.'">Bahasa Indonesia</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Cis&amp;u='.$url.'">Íslenska</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Cit&amp;u='.$url.'">Italiano</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Che&amp;u='.$url.'">עברית</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Clv&amp;u='.$url.'">Latviešu</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Clt&amp;u='.$url.'">Lietuvių</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Cko&amp;u='.$url.'">한국어</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Chu&amp;u='.$url.'">Magyar</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Cmk&amp;u='.$url.'">Македонски</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Cml&amp;u='.$url.'">മലയാളം</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Cmt&amp;u='.$url.'">Malti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Cnl&amp;u='.$url.'">Nederlands</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Cja&amp;u='.$url.'">日本語</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Cno&amp;u='.$url.'">Norsk (Bokmål)</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Cpl&amp;u='.$url.'">Polski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Cpt&amp;u='.$url.'">Português</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Cro&amp;u='.$url.'">Română</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Cru&amp;u='.$url.'">Русский</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Csk&amp;u='.$url.'">Slovenčina</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Csl&amp;u='.$url.'">Slovenščina</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Csq&amp;u='.$url.'">Shqip</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Csr&amp;u='.$url.'">Srpski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Cfi&amp;u='.$url.'">Suomi</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Csv&amp;u='.$url.'">Svenska</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Csw&amp;u='.$url.'">Kiswahili</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Cth&amp;u='.$url.'">ไทย</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Ctl&amp;u='.$url.'">Tagalog</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Ctr&amp;u='.$url.'">Türkçe</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Cuk&amp;u='.$url.'">Українська</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Cvi&amp;u='.$url.'">Tiếng Việt</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Cyi&amp;u='.$url.'">ייִדיש</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Czh-CN&amp;u='.$url.'">中文</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Czh-TW&amp;u='.$url.'">漢語</option>';
		$indonesia = '
<option value="#" selected="selected">Select language</option>
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Cen&amp;u='.$url.'">English</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Caf&amp;u='.$url.'">Afrikaans</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Car&amp;u='.$url.'">العربية</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Cbe&amp;u='.$url.'">Беларуская</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Cbg&amp;u='.$url.'">Български</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Cca&amp;u='.$url.'">Català</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Ccs&amp;u='.$url.'">Česky</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Ccy&amp;u='.$url.'">Cymraeg</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Cda&amp;u='.$url.'">Dansk</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Cde&amp;u='.$url.'">Deutsch</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Cet&amp;u='.$url.'">Eesti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Cel&amp;u='.$url.'">Ελληνικά</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Ces&amp;u='.$url.'">Español</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Cfa&amp;u='.$url.'">فارسی</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Cfr&amp;u='.$url.'">Français</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Cga&amp;u='.$url.'">Gaeilge</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Cgl&amp;u='.$url.'">Galego</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Chi&amp;u='.$url.'">हिन्दी</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Chr&amp;u='.$url.'">Hrvatski</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Cid&amp;u='.$url.'">Bahasa Indonesia</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Cis&amp;u='.$url.'">Íslenska</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Cit&amp;u='.$url.'">Italiano</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Che&amp;u='.$url.'">עברית</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Clv&amp;u='.$url.'">Latviešu</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Clt&amp;u='.$url.'">Lietuvių</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Cko&amp;u='.$url.'">한국어</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Chu&amp;u='.$url.'">Magyar</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Cmk&amp;u='.$url.'">Македонски</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Cml&amp;u='.$url.'">മലയാളം</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Cmt&amp;u='.$url.'">Malti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Cnl&amp;u='.$url.'">Nederlands</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Cja&amp;u='.$url.'">日本語</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Cno&amp;u='.$url.'">Norsk (Bokmål)</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Cpl&amp;u='.$url.'">Polski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Cpt&amp;u='.$url.'">Português</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Cro&amp;u='.$url.'">Română</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Cru&amp;u='.$url.'">Русский</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Csk&amp;u='.$url.'">Slovenčina</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Csl&amp;u='.$url.'">Slovenščina</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Csq&amp;u='.$url.'">Shqip</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Csr&amp;u='.$url.'">Srpski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Cfi&amp;u='.$url.'">Suomi</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Csv&amp;u='.$url.'">Svenska</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Csw&amp;u='.$url.'">Kiswahili</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Cth&amp;u='.$url.'">ไทย</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Ctl&amp;u='.$url.'">Tagalog</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Ctr&amp;u='.$url.'">Türkçe</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Cuk&amp;u='.$url.'">Українська</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Cvi&amp;u='.$url.'">Tiếng Việt</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Cyi&amp;u='.$url.'">ייִדיש</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Czh-CN&amp;u='.$url.'">中文</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Czh-TW&amp;u='.$url.'">漢語</option>';
		$islenska = '
<option value="#" selected="selected">Select language</option>
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Cen&amp;u='.$url.'">English</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Caf&amp;u='.$url.'">Afrikaans</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Car&amp;u='.$url.'">العربية</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Cbe&amp;u='.$url.'">Беларуская</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Cbg&amp;u='.$url.'">Български</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Cca&amp;u='.$url.'">Català</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Ccs&amp;u='.$url.'">Česky</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Ccy&amp;u='.$url.'">Cymraeg</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Cda&amp;u='.$url.'">Dansk</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Cde&amp;u='.$url.'">Deutsch</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Cet&amp;u='.$url.'">Eesti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Cel&amp;u='.$url.'">Ελληνικά</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Ces&amp;u='.$url.'">Español</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Cfa&amp;u='.$url.'">فارسی</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Cfr&amp;u='.$url.'">Français</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Cga&amp;u='.$url.'">Gaeilge</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Cgl&amp;u='.$url.'">Galego</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Chi&amp;u='.$url.'">हिन्दी</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Chr&amp;u='.$url.'">Hrvatski</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Cid&amp;u='.$url.'">Bahasa Indonesia</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Cis&amp;u='.$url.'">Íslenska</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Cit&amp;u='.$url.'">Italiano</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Che&amp;u='.$url.'">עברית</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Clv&amp;u='.$url.'">Latviešu</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Clt&amp;u='.$url.'">Lietuvių</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Cko&amp;u='.$url.'">한국어</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Chu&amp;u='.$url.'">Magyar</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Cmk&amp;u='.$url.'">Македонски</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Cml&amp;u='.$url.'">മലയാളം</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Cmt&amp;u='.$url.'">Malti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Cnl&amp;u='.$url.'">Nederlands</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Cja&amp;u='.$url.'">日本語</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Cno&amp;u='.$url.'">Norsk (Bokmål)</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Cpl&amp;u='.$url.'">Polski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Cpt&amp;u='.$url.'">Português</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Cro&amp;u='.$url.'">Română</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Cru&amp;u='.$url.'">Русский</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Csk&amp;u='.$url.'">Slovenčina</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Csl&amp;u='.$url.'">Slovenščina</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Csq&amp;u='.$url.'">Shqip</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Csr&amp;u='.$url.'">Srpski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Cfi&amp;u='.$url.'">Suomi</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Csv&amp;u='.$url.'">Svenska</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Csw&amp;u='.$url.'">Kiswahili</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Cth&amp;u='.$url.'">ไทย</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Ctl&amp;u='.$url.'">Tagalog</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Ctr&amp;u='.$url.'">Türkçe</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Cuk&amp;u='.$url.'">Українська</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Cvi&amp;u='.$url.'">Tiếng Việt</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Cyi&amp;u='.$url.'">ייִדיש</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Czh-CN&amp;u='.$url.'">中文</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Czh-TW&amp;u='.$url.'">漢語</option>';
		$italiano = '
<option value="#" selected="selected">Select language</option>
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Cen&amp;u='.$url.'">English</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Caf&amp;u='.$url.'">Afrikaans</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Car&amp;u='.$url.'">العربية</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Cbe&amp;u='.$url.'">Беларуская</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Cbg&amp;u='.$url.'">Български</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Cca&amp;u='.$url.'">Català</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Ccs&amp;u='.$url.'">Česky</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Ccy&amp;u='.$url.'">Cymraeg</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Cda&amp;u='.$url.'">Dansk</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Cde&amp;u='.$url.'">Deutsch</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Cet&amp;u='.$url.'">Eesti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Cel&amp;u='.$url.'">Ελληνικά</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Ces&amp;u='.$url.'">Español</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Cfa&amp;u='.$url.'">فارسی</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Cfr&amp;u='.$url.'">Français</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Cga&amp;u='.$url.'">Gaeilge</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Cgl&amp;u='.$url.'">Galego</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Chi&amp;u='.$url.'">हिन्दी</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Chr&amp;u='.$url.'">Hrvatski</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Cid&amp;u='.$url.'">Bahasa Indonesia</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Cis&amp;u='.$url.'">Íslenska</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Cit&amp;u='.$url.'">Italiano</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Che&amp;u='.$url.'">עברית</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Clv&amp;u='.$url.'">Latviešu</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Clt&amp;u='.$url.'">Lietuvių</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Cko&amp;u='.$url.'">한국어</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Chu&amp;u='.$url.'">Magyar</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Cmk&amp;u='.$url.'">Македонски</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Cml&amp;u='.$url.'">മലയാളം</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Cmt&amp;u='.$url.'">Malti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Cnl&amp;u='.$url.'">Nederlands</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Cja&amp;u='.$url.'">日本語</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Cno&amp;u='.$url.'">Norsk (Bokmål)</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Cpl&amp;u='.$url.'">Polski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Cpt&amp;u='.$url.'">Português</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Cro&amp;u='.$url.'">Română</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Cru&amp;u='.$url.'">Русский</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Csk&amp;u='.$url.'">Slovenčina</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Csl&amp;u='.$url.'">Slovenščina</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Csq&amp;u='.$url.'">Shqip</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Csr&amp;u='.$url.'">Srpski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Cfi&amp;u='.$url.'">Suomi</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Csv&amp;u='.$url.'">Svenska</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Csw&amp;u='.$url.'">Kiswahili</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Cth&amp;u='.$url.'">ไทย</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Ctl&amp;u='.$url.'">Tagalog</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Ctr&amp;u='.$url.'">Türkçe</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Cuk&amp;u='.$url.'">Українська</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Cvi&amp;u='.$url.'">Tiếng Việt</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Cyi&amp;u='.$url.'">ייִדיש</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Czh-CN&amp;u='.$url.'">中文</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Czh-TW&amp;u='.$url.'">漢語</option>';
		$ivrit = '
<option value="#" selected="selected">Select language</option>
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Cen&amp;u='.$url.'">English</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Caf&amp;u='.$url.'">Afrikaans</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Car&amp;u='.$url.'">العربية</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Cbe&amp;u='.$url.'">Беларуская</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Cbg&amp;u='.$url.'">Български</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Cca&amp;u='.$url.'">Català</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Ccs&amp;u='.$url.'">Česky</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Ccy&amp;u='.$url.'">Cymraeg</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Cda&amp;u='.$url.'">Dansk</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Cde&amp;u='.$url.'">Deutsch</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Cet&amp;u='.$url.'">Eesti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Cel&amp;u='.$url.'">Ελληνικά</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Ces&amp;u='.$url.'">Español</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Cfa&amp;u='.$url.'">فارسی</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Cfr&amp;u='.$url.'">Français</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Cga&amp;u='.$url.'">Gaeilge</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Cgl&amp;u='.$url.'">Galego</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Chi&amp;u='.$url.'">हिन्दी</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Chr&amp;u='.$url.'">Hrvatski</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Cid&amp;u='.$url.'">Bahasa Indonesia</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Cis&amp;u='.$url.'">Íslenska</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Cit&amp;u='.$url.'">Italiano</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Che&amp;u='.$url.'">עברית</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Clv&amp;u='.$url.'">Latviešu</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Clt&amp;u='.$url.'">Lietuvių</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Cko&amp;u='.$url.'">한국어</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Chu&amp;u='.$url.'">Magyar</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Cmk&amp;u='.$url.'">Македонски</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Cml&amp;u='.$url.'">മലയാളം</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Cmt&amp;u='.$url.'">Malti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Cnl&amp;u='.$url.'">Nederlands</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Cja&amp;u='.$url.'">日本語</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Cno&amp;u='.$url.'">Norsk (Bokmål)</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Cpl&amp;u='.$url.'">Polski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Cpt&amp;u='.$url.'">Português</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Cro&amp;u='.$url.'">Română</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Cru&amp;u='.$url.'">Русский</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Csk&amp;u='.$url.'">Slovenčina</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Csl&amp;u='.$url.'">Slovenščina</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Csq&amp;u='.$url.'">Shqip</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Csr&amp;u='.$url.'">Srpski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Cfi&amp;u='.$url.'">Suomi</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Csv&amp;u='.$url.'">Svenska</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Csw&amp;u='.$url.'">Kiswahili</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Cth&amp;u='.$url.'">ไทย</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Ctl&amp;u='.$url.'">Tagalog</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Ctr&amp;u='.$url.'">Türkçe</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Cuk&amp;u='.$url.'">Українська</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Cvi&amp;u='.$url.'">Tiếng Việt</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Cyi&amp;u='.$url.'">ייִדיש</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Czh-CN&amp;u='.$url.'">中文</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Czh-TW&amp;u='.$url.'">漢語</option>';
		$latviesu = '
<option value="#" selected="selected">Select language</option>
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Cen&amp;u='.$url.'">English</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Caf&amp;u='.$url.'">Afrikaans</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Car&amp;u='.$url.'">العربية</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Cbe&amp;u='.$url.'">Беларуская</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Cbg&amp;u='.$url.'">Български</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Cca&amp;u='.$url.'">Català</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Ccs&amp;u='.$url.'">Česky</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Ccy&amp;u='.$url.'">Cymraeg</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Cda&amp;u='.$url.'">Dansk</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Cde&amp;u='.$url.'">Deutsch</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Cet&amp;u='.$url.'">Eesti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Cel&amp;u='.$url.'">Ελληνικά</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Ces&amp;u='.$url.'">Español</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Cfa&amp;u='.$url.'">فارسی</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Cfr&amp;u='.$url.'">Français</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Cga&amp;u='.$url.'">Gaeilge</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Cgl&amp;u='.$url.'">Galego</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Chi&amp;u='.$url.'">हिन्दी</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Chr&amp;u='.$url.'">Hrvatski</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Cid&amp;u='.$url.'">Bahasa Indonesia</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Cis&amp;u='.$url.'">Íslenska</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Cit&amp;u='.$url.'">Italiano</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Che&amp;u='.$url.'">עברית</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Clv&amp;u='.$url.'">Latviešu</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Clt&amp;u='.$url.'">Lietuvių</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Cko&amp;u='.$url.'">한국어</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Chu&amp;u='.$url.'">Magyar</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Cmk&amp;u='.$url.'">Македонски</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Cml&amp;u='.$url.'">മലയാളം</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Cmt&amp;u='.$url.'">Malti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Cnl&amp;u='.$url.'">Nederlands</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Cja&amp;u='.$url.'">日本語</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Cno&amp;u='.$url.'">Norsk (Bokmål)</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Cpl&amp;u='.$url.'">Polski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Cpt&amp;u='.$url.'">Português</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Cro&amp;u='.$url.'">Română</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Cru&amp;u='.$url.'">Русский</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Csk&amp;u='.$url.'">Slovenčina</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Csl&amp;u='.$url.'">Slovenščina</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Csq&amp;u='.$url.'">Shqip</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Csr&amp;u='.$url.'">Srpski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Cfi&amp;u='.$url.'">Suomi</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Csv&amp;u='.$url.'">Svenska</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Csw&amp;u='.$url.'">Kiswahili</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Cth&amp;u='.$url.'">ไทย</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Ctl&amp;u='.$url.'">Tagalog</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Ctr&amp;u='.$url.'">Türkçe</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Cuk&amp;u='.$url.'">Українська</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Cvi&amp;u='.$url.'">Tiếng Việt</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Cyi&amp;u='.$url.'">ייִדיש</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Czh-CN&amp;u='.$url.'">中文</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Czh-TW&amp;u='.$url.'">漢語</option>';
		$lietuviu = '
<option value="#" selected="selected">Select language</option>
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Cen&amp;u='.$url.'">English</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Caf&amp;u='.$url.'">Afrikaans</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Car&amp;u='.$url.'">العربية</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Cbe&amp;u='.$url.'">Беларуская</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Cbg&amp;u='.$url.'">Български</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Cca&amp;u='.$url.'">Català</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Ccs&amp;u='.$url.'">Česky</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Ccy&amp;u='.$url.'">Cymraeg</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Cda&amp;u='.$url.'">Dansk</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Cde&amp;u='.$url.'">Deutsch</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Cet&amp;u='.$url.'">Eesti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Cel&amp;u='.$url.'">Ελληνικά</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Ces&amp;u='.$url.'">Español</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Cfa&amp;u='.$url.'">فارسی</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Cfr&amp;u='.$url.'">Français</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Cga&amp;u='.$url.'">Gaeilge</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Cgl&amp;u='.$url.'">Galego</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Chi&amp;u='.$url.'">हिन्दी</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Chr&amp;u='.$url.'">Hrvatski</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Cid&amp;u='.$url.'">Bahasa Indonesia</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Cis&amp;u='.$url.'">Íslenska</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Cit&amp;u='.$url.'">Italiano</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Che&amp;u='.$url.'">עברית</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Clv&amp;u='.$url.'">Latviešu</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Clt&amp;u='.$url.'">Lietuvių</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Cko&amp;u='.$url.'">한국어</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Chu&amp;u='.$url.'">Magyar</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Cmk&amp;u='.$url.'">Македонски</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Cml&amp;u='.$url.'">മലയാളം</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Cmt&amp;u='.$url.'">Malti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Cnl&amp;u='.$url.'">Nederlands</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Cja&amp;u='.$url.'">日本語</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Cno&amp;u='.$url.'">Norsk (Bokmål)</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Cpl&amp;u='.$url.'">Polski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Cpt&amp;u='.$url.'">Português</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Cro&amp;u='.$url.'">Română</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Cru&amp;u='.$url.'">Русский</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Csk&amp;u='.$url.'">Slovenčina</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Csl&amp;u='.$url.'">Slovenščina</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Csq&amp;u='.$url.'">Shqip</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Csr&amp;u='.$url.'">Srpski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Cfi&amp;u='.$url.'">Suomi</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Csv&amp;u='.$url.'">Svenska</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Csw&amp;u='.$url.'">Kiswahili</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Cth&amp;u='.$url.'">ไทย</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Ctl&amp;u='.$url.'">Tagalog</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Ctr&amp;u='.$url.'">Türkçe</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Cuk&amp;u='.$url.'">Українська</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Cvi&amp;u='.$url.'">Tiếng Việt</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Cyi&amp;u='.$url.'">ייִדיש</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Czh-CN&amp;u='.$url.'">中文</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Czh-TW&amp;u='.$url.'">漢語</option>';
		$hangugeo = '
<option value="#" selected="selected">Select language</option>
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Cen&amp;u='.$url.'">English</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Caf&amp;u='.$url.'">Afrikaans</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Car&amp;u='.$url.'">العربية</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Cbe&amp;u='.$url.'">Беларуская</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Cbg&amp;u='.$url.'">Български</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Cca&amp;u='.$url.'">Català</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Ccs&amp;u='.$url.'">Česky</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Ccy&amp;u='.$url.'">Cymraeg</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Cda&amp;u='.$url.'">Dansk</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Cde&amp;u='.$url.'">Deutsch</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Cet&amp;u='.$url.'">Eesti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Cel&amp;u='.$url.'">Ελληνικά</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Ces&amp;u='.$url.'">Español</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Cfa&amp;u='.$url.'">فارسی</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Cfr&amp;u='.$url.'">Français</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Cga&amp;u='.$url.'">Gaeilge</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Cgl&amp;u='.$url.'">Galego</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Chi&amp;u='.$url.'">हिन्दी</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Chr&amp;u='.$url.'">Hrvatski</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Cid&amp;u='.$url.'">Bahasa Indonesia</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Cis&amp;u='.$url.'">Íslenska</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Cit&amp;u='.$url.'">Italiano</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Che&amp;u='.$url.'">עברית</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Clv&amp;u='.$url.'">Latviešu</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Clt&amp;u='.$url.'">Lietuvių</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Cko&amp;u='.$url.'">한국어</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Chu&amp;u='.$url.'">Magyar</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Cmk&amp;u='.$url.'">Македонски</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Cml&amp;u='.$url.'">മലയാളം</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Cmt&amp;u='.$url.'">Malti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Cnl&amp;u='.$url.'">Nederlands</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Cja&amp;u='.$url.'">日本語</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Cno&amp;u='.$url.'">Norsk (Bokmål)</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Cpl&amp;u='.$url.'">Polski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Cpt&amp;u='.$url.'">Português</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Cro&amp;u='.$url.'">Română</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Cru&amp;u='.$url.'">Русский</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Csk&amp;u='.$url.'">Slovenčina</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Csl&amp;u='.$url.'">Slovenščina</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Csq&amp;u='.$url.'">Shqip</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Csr&amp;u='.$url.'">Srpski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Cfi&amp;u='.$url.'">Suomi</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Csv&amp;u='.$url.'">Svenska</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Csw&amp;u='.$url.'">Kiswahili</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Cth&amp;u='.$url.'">ไทย</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Ctl&amp;u='.$url.'">Tagalog</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Ctr&amp;u='.$url.'">Türkçe</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Cuk&amp;u='.$url.'">Українська</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Cvi&amp;u='.$url.'">Tiếng Việt</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Cyi&amp;u='.$url.'">ייִדיש</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Czh-CN&amp;u='.$url.'">中文</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Czh-TW&amp;u='.$url.'">漢語</option>';
		$magyar = '
<option value="#" selected="selected">Select language</option>
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Cen&amp;u='.$url.'">English</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Caf&amp;u='.$url.'">Afrikaans</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Car&amp;u='.$url.'">العربية</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Cbe&amp;u='.$url.'">Беларуская</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Cbg&amp;u='.$url.'">Български</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Cca&amp;u='.$url.'">Català</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Ccs&amp;u='.$url.'">Česky</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Ccy&amp;u='.$url.'">Cymraeg</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Cda&amp;u='.$url.'">Dansk</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Cde&amp;u='.$url.'">Deutsch</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Cet&amp;u='.$url.'">Eesti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Cel&amp;u='.$url.'">Ελληνικά</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Ces&amp;u='.$url.'">Español</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Cfa&amp;u='.$url.'">فارسی</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Cfr&amp;u='.$url.'">Français</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Cga&amp;u='.$url.'">Gaeilge</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Cgl&amp;u='.$url.'">Galego</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Chi&amp;u='.$url.'">हिन्दी</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Chr&amp;u='.$url.'">Hrvatski</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Cid&amp;u='.$url.'">Bahasa Indonesia</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Cis&amp;u='.$url.'">Íslenska</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Cit&amp;u='.$url.'">Italiano</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Che&amp;u='.$url.'">עברית</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Clv&amp;u='.$url.'">Latviešu</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Clt&amp;u='.$url.'">Lietuvių</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Cko&amp;u='.$url.'">한국어</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Chu&amp;u='.$url.'">Magyar</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Cmk&amp;u='.$url.'">Македонски</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Cml&amp;u='.$url.'">മലയാളം</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Cmt&amp;u='.$url.'">Malti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Cnl&amp;u='.$url.'">Nederlands</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Cja&amp;u='.$url.'">日本語</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Cno&amp;u='.$url.'">Norsk (Bokmål)</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Cpl&amp;u='.$url.'">Polski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Cpt&amp;u='.$url.'">Português</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Cro&amp;u='.$url.'">Română</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Cru&amp;u='.$url.'">Русский</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Csk&amp;u='.$url.'">Slovenčina</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Csl&amp;u='.$url.'">Slovenščina</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Csq&amp;u='.$url.'">Shqip</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Csr&amp;u='.$url.'">Srpski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Cfi&amp;u='.$url.'">Suomi</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Csv&amp;u='.$url.'">Svenska</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Csw&amp;u='.$url.'">Kiswahili</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Cth&amp;u='.$url.'">ไทย</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Ctl&amp;u='.$url.'">Tagalog</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Ctr&amp;u='.$url.'">Türkçe</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Cuk&amp;u='.$url.'">Українська</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Cvi&amp;u='.$url.'">Tiếng Việt</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Cyi&amp;u='.$url.'">ייִדיש</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Czh-CN&amp;u='.$url.'">中文</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Czh-TW&amp;u='.$url.'">漢語</option>';
		$makedonski = '
<option value="#" selected="selected">Select language</option>
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Cen&amp;u='.$url.'">English</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Caf&amp;u='.$url.'">Afrikaans</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Car&amp;u='.$url.'">العربية</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Cbe&amp;u='.$url.'">Беларуская</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Cbg&amp;u='.$url.'">Български</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Cca&amp;u='.$url.'">Català</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Ccs&amp;u='.$url.'">Česky</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Ccy&amp;u='.$url.'">Cymraeg</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Cda&amp;u='.$url.'">Dansk</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Cde&amp;u='.$url.'">Deutsch</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Cet&amp;u='.$url.'">Eesti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Cel&amp;u='.$url.'">Ελληνικά</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Ces&amp;u='.$url.'">Español</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Cfa&amp;u='.$url.'">فارسی</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Cfr&amp;u='.$url.'">Français</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Cga&amp;u='.$url.'">Gaeilge</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Cgl&amp;u='.$url.'">Galego</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Chi&amp;u='.$url.'">हिन्दी</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Chr&amp;u='.$url.'">Hrvatski</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Cid&amp;u='.$url.'">Bahasa Indonesia</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Cis&amp;u='.$url.'">Íslenska</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Cit&amp;u='.$url.'">Italiano</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Che&amp;u='.$url.'">עברית</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Clv&amp;u='.$url.'">Latviešu</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Clt&amp;u='.$url.'">Lietuvių</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Cko&amp;u='.$url.'">한국어</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Chu&amp;u='.$url.'">Magyar</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Cmk&amp;u='.$url.'">Македонски</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Cml&amp;u='.$url.'">മലയാളം</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Cmt&amp;u='.$url.'">Malti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Cnl&amp;u='.$url.'">Nederlands</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Cja&amp;u='.$url.'">日本語</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Cno&amp;u='.$url.'">Norsk (Bokmål)</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Cpl&amp;u='.$url.'">Polski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Cpt&amp;u='.$url.'">Português</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Cro&amp;u='.$url.'">Română</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Cru&amp;u='.$url.'">Русский</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Csk&amp;u='.$url.'">Slovenčina</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Csl&amp;u='.$url.'">Slovenščina</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Csq&amp;u='.$url.'">Shqip</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Csr&amp;u='.$url.'">Srpski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Cfi&amp;u='.$url.'">Suomi</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Csv&amp;u='.$url.'">Svenska</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Csw&amp;u='.$url.'">Kiswahili</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Cth&amp;u='.$url.'">ไทย</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Ctl&amp;u='.$url.'">Tagalog</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Ctr&amp;u='.$url.'">Türkçe</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Cuk&amp;u='.$url.'">Українська</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Cvi&amp;u='.$url.'">Tiếng Việt</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Cyi&amp;u='.$url.'">ייִדיש</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Czh-CN&amp;u='.$url.'">中文</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Czh-TW&amp;u='.$url.'">漢語</option>';
		$malayalam = '
<option value="#" selected="selected">Select language</option>
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Cen&amp;u='.$url.'">English</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Caf&amp;u='.$url.'">Afrikaans</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Car&amp;u='.$url.'">العربية</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Cbe&amp;u='.$url.'">Беларуская</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Cbg&amp;u='.$url.'">Български</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Cca&amp;u='.$url.'">Català</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Ccs&amp;u='.$url.'">Česky</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Ccy&amp;u='.$url.'">Cymraeg</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Cda&amp;u='.$url.'">Dansk</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Cde&amp;u='.$url.'">Deutsch</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Cet&amp;u='.$url.'">Eesti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Cel&amp;u='.$url.'">Ελληνικά</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Ces&amp;u='.$url.'">Español</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Cfa&amp;u='.$url.'">فارسی</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Cfr&amp;u='.$url.'">Français</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Cga&amp;u='.$url.'">Gaeilge</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Cgl&amp;u='.$url.'">Galego</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Chi&amp;u='.$url.'">हिन्दी</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Chr&amp;u='.$url.'">Hrvatski</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Cid&amp;u='.$url.'">Bahasa Indonesia</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Cis&amp;u='.$url.'">Íslenska</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Cit&amp;u='.$url.'">Italiano</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Che&amp;u='.$url.'">עברית</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Clv&amp;u='.$url.'">Latviešu</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Clt&amp;u='.$url.'">Lietuvių</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Cko&amp;u='.$url.'">한국어</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Chu&amp;u='.$url.'">Magyar</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Cmk&amp;u='.$url.'">Македонски</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Cml&amp;u='.$url.'">മലയാളം</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Cmt&amp;u='.$url.'">Malti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Cnl&amp;u='.$url.'">Nederlands</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Cja&amp;u='.$url.'">日本語</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Cno&amp;u='.$url.'">Norsk (Bokmål)</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Cpl&amp;u='.$url.'">Polski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Cpt&amp;u='.$url.'">Português</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Cro&amp;u='.$url.'">Română</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Cru&amp;u='.$url.'">Русский</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Csk&amp;u='.$url.'">Slovenčina</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Csl&amp;u='.$url.'">Slovenščina</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Csq&amp;u='.$url.'">Shqip</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Csr&amp;u='.$url.'">Srpski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Cfi&amp;u='.$url.'">Suomi</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Csv&amp;u='.$url.'">Svenska</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Csw&amp;u='.$url.'">Kiswahili</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Cth&amp;u='.$url.'">ไทย</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Ctl&amp;u='.$url.'">Tagalog</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Ctr&amp;u='.$url.'">Türkçe</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Cuk&amp;u='.$url.'">Українська</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Cvi&amp;u='.$url.'">Tiếng Việt</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Cyi&amp;u='.$url.'">ייִדיש</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Czh-CN&amp;u='.$url.'">中文</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Czh-TW&amp;u='.$url.'">漢語</option>';
		$malti = '
<option value="#" selected="selected">Select language</option>
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Cen&amp;u='.$url.'">English</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Caf&amp;u='.$url.'">Afrikaans</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Car&amp;u='.$url.'">العربية</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Cbe&amp;u='.$url.'">Беларуская</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Cbg&amp;u='.$url.'">Български</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Cca&amp;u='.$url.'">Català</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Ccs&amp;u='.$url.'">Česky</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Ccy&amp;u='.$url.'">Cymraeg</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Cda&amp;u='.$url.'">Dansk</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Cde&amp;u='.$url.'">Deutsch</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Cet&amp;u='.$url.'">Eesti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Cel&amp;u='.$url.'">Ελληνικά</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Ces&amp;u='.$url.'">Español</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Cfa&amp;u='.$url.'">فارسی</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Cfr&amp;u='.$url.'">Français</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Cga&amp;u='.$url.'">Gaeilge</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Cgl&amp;u='.$url.'">Galego</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Chi&amp;u='.$url.'">हिन्दी</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Chr&amp;u='.$url.'">Hrvatski</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Cid&amp;u='.$url.'">Bahasa Indonesia</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Cis&amp;u='.$url.'">Íslenska</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Cit&amp;u='.$url.'">Italiano</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Che&amp;u='.$url.'">עברית</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Clv&amp;u='.$url.'">Latviešu</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Clt&amp;u='.$url.'">Lietuvių</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Cko&amp;u='.$url.'">한국어</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Chu&amp;u='.$url.'">Magyar</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Cmk&amp;u='.$url.'">Македонски</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Cml&amp;u='.$url.'">മലയാളം</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Cmt&amp;u='.$url.'">Malti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Cnl&amp;u='.$url.'">Nederlands</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Cja&amp;u='.$url.'">日本語</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Cno&amp;u='.$url.'">Norsk (Bokmål)</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Cpl&amp;u='.$url.'">Polski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Cpt&amp;u='.$url.'">Português</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Cro&amp;u='.$url.'">Română</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Cru&amp;u='.$url.'">Русский</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Csk&amp;u='.$url.'">Slovenčina</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Csl&amp;u='.$url.'">Slovenščina</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Csq&amp;u='.$url.'">Shqip</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Csr&amp;u='.$url.'">Srpski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Cfi&amp;u='.$url.'">Suomi</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Csv&amp;u='.$url.'">Svenska</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Csw&amp;u='.$url.'">Kiswahili</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Cth&amp;u='.$url.'">ไทย</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Ctl&amp;u='.$url.'">Tagalog</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Ctr&amp;u='.$url.'">Türkçe</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Cuk&amp;u='.$url.'">Українська</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Cvi&amp;u='.$url.'">Tiếng Việt</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Cyi&amp;u='.$url.'">ייִדיש</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Czh-CN&amp;u='.$url.'">中文</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Czh-TW&amp;u='.$url.'">漢語</option>';
		$nederlands = '
<option value="#" selected="selected">Select language</option>
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Cen&amp;u='.$url.'">English</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Caf&amp;u='.$url.'">Afrikaans</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Car&amp;u='.$url.'">العربية</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Cbe&amp;u='.$url.'">Беларуская</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Cbg&amp;u='.$url.'">Български</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Cca&amp;u='.$url.'">Català</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Ccs&amp;u='.$url.'">Česky</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Ccy&amp;u='.$url.'">Cymraeg</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Cda&amp;u='.$url.'">Dansk</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Cde&amp;u='.$url.'">Deutsch</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Cet&amp;u='.$url.'">Eesti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Cel&amp;u='.$url.'">Ελληνικά</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Ces&amp;u='.$url.'">Español</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Cfa&amp;u='.$url.'">فارسی</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Cfr&amp;u='.$url.'">Français</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Cga&amp;u='.$url.'">Gaeilge</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Cgl&amp;u='.$url.'">Galego</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Chi&amp;u='.$url.'">हिन्दी</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Chr&amp;u='.$url.'">Hrvatski</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Cid&amp;u='.$url.'">Bahasa Indonesia</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Cis&amp;u='.$url.'">Íslenska</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Cit&amp;u='.$url.'">Italiano</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Che&amp;u='.$url.'">עברית</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Clv&amp;u='.$url.'">Latviešu</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Clt&amp;u='.$url.'">Lietuvių</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Cko&amp;u='.$url.'">한국어</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Chu&amp;u='.$url.'">Magyar</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Cmk&amp;u='.$url.'">Македонски</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Cml&amp;u='.$url.'">മലയാളം</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Cmt&amp;u='.$url.'">Malti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Cnl&amp;u='.$url.'">Nederlands</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Cja&amp;u='.$url.'">日本語</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Cno&amp;u='.$url.'">Norsk (Bokmål)</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Cpl&amp;u='.$url.'">Polski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Cpt&amp;u='.$url.'">Português</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Cro&amp;u='.$url.'">Română</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Cru&amp;u='.$url.'">Русский</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Csk&amp;u='.$url.'">Slovenčina</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Csl&amp;u='.$url.'">Slovenščina</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Csq&amp;u='.$url.'">Shqip</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Csr&amp;u='.$url.'">Srpski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Cfi&amp;u='.$url.'">Suomi</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Csv&amp;u='.$url.'">Svenska</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Csw&amp;u='.$url.'">Kiswahili</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Cth&amp;u='.$url.'">ไทย</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Ctl&amp;u='.$url.'">Tagalog</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Ctr&amp;u='.$url.'">Türkçe</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Cuk&amp;u='.$url.'">Українська</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Cvi&amp;u='.$url.'">Tiếng Việt</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Cyi&amp;u='.$url.'">ייִדיש</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Czh-CN&amp;u='.$url.'">中文</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Czh-TW&amp;u='.$url.'">漢語</option>';
		$nihongo = '
<option value="#" selected="selected">Select language</option>
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Cen&amp;u='.$url.'">English</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Caf&amp;u='.$url.'">Afrikaans</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Car&amp;u='.$url.'">العربية</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Cbe&amp;u='.$url.'">Беларуская</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Cbg&amp;u='.$url.'">Български</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Cca&amp;u='.$url.'">Català</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Ccs&amp;u='.$url.'">Česky</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Ccy&amp;u='.$url.'">Cymraeg</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Cda&amp;u='.$url.'">Dansk</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Cde&amp;u='.$url.'">Deutsch</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Cet&amp;u='.$url.'">Eesti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Cel&amp;u='.$url.'">Ελληνικά</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Ces&amp;u='.$url.'">Español</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Cfa&amp;u='.$url.'">فارسی</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Cfr&amp;u='.$url.'">Français</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Cga&amp;u='.$url.'">Gaeilge</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Cgl&amp;u='.$url.'">Galego</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Chi&amp;u='.$url.'">हिन्दी</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Chr&amp;u='.$url.'">Hrvatski</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Cid&amp;u='.$url.'">Bahasa Indonesia</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Cis&amp;u='.$url.'">Íslenska</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Cit&amp;u='.$url.'">Italiano</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Che&amp;u='.$url.'">עברית</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Clv&amp;u='.$url.'">Latviešu</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Clt&amp;u='.$url.'">Lietuvių</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Cko&amp;u='.$url.'">한국어</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Chu&amp;u='.$url.'">Magyar</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Cmk&amp;u='.$url.'">Македонски</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Cml&amp;u='.$url.'">മലയാളം</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Cmt&amp;u='.$url.'">Malti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Cnl&amp;u='.$url.'">Nederlands</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Cja&amp;u='.$url.'">日本語</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Cno&amp;u='.$url.'">Norsk (Bokmål)</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Cpl&amp;u='.$url.'">Polski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Cpt&amp;u='.$url.'">Português</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Cro&amp;u='.$url.'">Română</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Cru&amp;u='.$url.'">Русский</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Csk&amp;u='.$url.'">Slovenčina</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Csl&amp;u='.$url.'">Slovenščina</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Csq&amp;u='.$url.'">Shqip</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Csr&amp;u='.$url.'">Srpski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Cfi&amp;u='.$url.'">Suomi</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Csv&amp;u='.$url.'">Svenska</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Csw&amp;u='.$url.'">Kiswahili</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Cth&amp;u='.$url.'">ไทย</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Ctl&amp;u='.$url.'">Tagalog</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Ctr&amp;u='.$url.'">Türkçe</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Cuk&amp;u='.$url.'">Українська</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Cvi&amp;u='.$url.'">Tiếng Việt</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Cyi&amp;u='.$url.'">ייִדיש</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Czh-CN&amp;u='.$url.'">中文</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Czh-TW&amp;u='.$url.'">漢語</option>';
		$norsk = '
<option value="#" selected="selected">Select language</option>
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Cen&amp;u='.$url.'">English</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Caf&amp;u='.$url.'">Afrikaans</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Car&amp;u='.$url.'">العربية</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Cbe&amp;u='.$url.'">Беларуская</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Cbg&amp;u='.$url.'">Български</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Cca&amp;u='.$url.'">Català</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Ccs&amp;u='.$url.'">Česky</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Ccy&amp;u='.$url.'">Cymraeg</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Cda&amp;u='.$url.'">Dansk</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Cde&amp;u='.$url.'">Deutsch</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Cet&amp;u='.$url.'">Eesti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Cel&amp;u='.$url.'">Ελληνικά</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Ces&amp;u='.$url.'">Español</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Cfa&amp;u='.$url.'">فارسی</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Cfr&amp;u='.$url.'">Français</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Cga&amp;u='.$url.'">Gaeilge</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Cgl&amp;u='.$url.'">Galego</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Chi&amp;u='.$url.'">हिन्दी</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Chr&amp;u='.$url.'">Hrvatski</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Cid&amp;u='.$url.'">Bahasa Indonesia</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Cis&amp;u='.$url.'">Íslenska</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Cit&amp;u='.$url.'">Italiano</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Che&amp;u='.$url.'">עברית</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Clv&amp;u='.$url.'">Latviešu</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Clt&amp;u='.$url.'">Lietuvių</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Cko&amp;u='.$url.'">한국어</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Chu&amp;u='.$url.'">Magyar</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Cmk&amp;u='.$url.'">Македонски</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Cml&amp;u='.$url.'">മലയാളം</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Cmt&amp;u='.$url.'">Malti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Cnl&amp;u='.$url.'">Nederlands</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Cja&amp;u='.$url.'">日本語</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Cno&amp;u='.$url.'">Norsk (Bokmål)</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Cpl&amp;u='.$url.'">Polski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Cpt&amp;u='.$url.'">Português</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Cro&amp;u='.$url.'">Română</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Cru&amp;u='.$url.'">Русский</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Csk&amp;u='.$url.'">Slovenčina</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Csl&amp;u='.$url.'">Slovenščina</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Csq&amp;u='.$url.'">Shqip</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Csr&amp;u='.$url.'">Srpski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Cfi&amp;u='.$url.'">Suomi</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Csv&amp;u='.$url.'">Svenska</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Csw&amp;u='.$url.'">Kiswahili</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Cth&amp;u='.$url.'">ไทย</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Ctl&amp;u='.$url.'">Tagalog</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Ctr&amp;u='.$url.'">Türkçe</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Cuk&amp;u='.$url.'">Українська</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Cvi&amp;u='.$url.'">Tiếng Việt</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Cyi&amp;u='.$url.'">ייִדיש</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Czh-CN&amp;u='.$url.'">中文</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Czh-TW&amp;u='.$url.'">漢語</option>';
		$polski = '
<option value="#" selected="selected">Select language</option>
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Cen&amp;u='.$url.'">English</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Caf&amp;u='.$url.'">Afrikaans</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Car&amp;u='.$url.'">العربية</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Cbe&amp;u='.$url.'">Беларуская</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Cbg&amp;u='.$url.'">Български</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Cca&amp;u='.$url.'">Català</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Ccs&amp;u='.$url.'">Česky</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Ccy&amp;u='.$url.'">Cymraeg</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Cda&amp;u='.$url.'">Dansk</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Cde&amp;u='.$url.'">Deutsch</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Cet&amp;u='.$url.'">Eesti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Cel&amp;u='.$url.'">Ελληνικά</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Ces&amp;u='.$url.'">Español</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Cfa&amp;u='.$url.'">فارسی</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Cfr&amp;u='.$url.'">Français</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Cga&amp;u='.$url.'">Gaeilge</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Cgl&amp;u='.$url.'">Galego</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Chi&amp;u='.$url.'">हिन्दी</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Chr&amp;u='.$url.'">Hrvatski</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Cid&amp;u='.$url.'">Bahasa Indonesia</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Cis&amp;u='.$url.'">Íslenska</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Cit&amp;u='.$url.'">Italiano</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Che&amp;u='.$url.'">עברית</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Clv&amp;u='.$url.'">Latviešu</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Clt&amp;u='.$url.'">Lietuvių</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Cko&amp;u='.$url.'">한국어</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Chu&amp;u='.$url.'">Magyar</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Cmk&amp;u='.$url.'">Македонски</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Cml&amp;u='.$url.'">മലയാളം</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Cmt&amp;u='.$url.'">Malti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Cnl&amp;u='.$url.'">Nederlands</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Cja&amp;u='.$url.'">日本語</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Cno&amp;u='.$url.'">Norsk (Bokmål)</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Cpl&amp;u='.$url.'">Polski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Cpt&amp;u='.$url.'">Português</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Cro&amp;u='.$url.'">Română</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Cru&amp;u='.$url.'">Русский</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Csk&amp;u='.$url.'">Slovenčina</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Csl&amp;u='.$url.'">Slovenščina</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Csq&amp;u='.$url.'">Shqip</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Csr&amp;u='.$url.'">Srpski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Cfi&amp;u='.$url.'">Suomi</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Csv&amp;u='.$url.'">Svenska</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Csw&amp;u='.$url.'">Kiswahili</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Cth&amp;u='.$url.'">ไทย</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Ctl&amp;u='.$url.'">Tagalog</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Ctr&amp;u='.$url.'">Türkçe</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Cuk&amp;u='.$url.'">Українська</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Cvi&amp;u='.$url.'">Tiếng Việt</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Cyi&amp;u='.$url.'">ייִדיש</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Czh-CN&amp;u='.$url.'">中文</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Czh-TW&amp;u='.$url.'">漢語</option>';
		$portugues = '
<option value="#" selected="selected">Select language</option>
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Cen&amp;u='.$url.'">English</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Caf&amp;u='.$url.'">Afrikaans</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Car&amp;u='.$url.'">العربية</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Cbe&amp;u='.$url.'">Беларуская</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Cbg&amp;u='.$url.'">Български</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Cca&amp;u='.$url.'">Català</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Ccs&amp;u='.$url.'">Česky</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Ccy&amp;u='.$url.'">Cymraeg</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Cda&amp;u='.$url.'">Dansk</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Cde&amp;u='.$url.'">Deutsch</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Cet&amp;u='.$url.'">Eesti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Cel&amp;u='.$url.'">Ελληνικά</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Ces&amp;u='.$url.'">Español</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Cfa&amp;u='.$url.'">فارسی</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Cfr&amp;u='.$url.'">Français</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Cga&amp;u='.$url.'">Gaeilge</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Cgl&amp;u='.$url.'">Galego</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Chi&amp;u='.$url.'">हिन्दी</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Chr&amp;u='.$url.'">Hrvatski</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Cid&amp;u='.$url.'">Bahasa Indonesia</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Cis&amp;u='.$url.'">Íslenska</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Cit&amp;u='.$url.'">Italiano</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Che&amp;u='.$url.'">עברית</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Clv&amp;u='.$url.'">Latviešu</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Clt&amp;u='.$url.'">Lietuvių</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Cko&amp;u='.$url.'">한국어</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Chu&amp;u='.$url.'">Magyar</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Cmk&amp;u='.$url.'">Македонски</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Cml&amp;u='.$url.'">മലയാളം</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Cmt&amp;u='.$url.'">Malti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Cnl&amp;u='.$url.'">Nederlands</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Cja&amp;u='.$url.'">日本語</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Cno&amp;u='.$url.'">Norsk (Bokmål)</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Cpl&amp;u='.$url.'">Polski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Cpt&amp;u='.$url.'">Português</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Cro&amp;u='.$url.'">Română</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Cru&amp;u='.$url.'">Русский</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Csk&amp;u='.$url.'">Slovenčina</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Csl&amp;u='.$url.'">Slovenščina</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Csq&amp;u='.$url.'">Shqip</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Csr&amp;u='.$url.'">Srpski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Cfi&amp;u='.$url.'">Suomi</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Csv&amp;u='.$url.'">Svenska</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Csw&amp;u='.$url.'">Kiswahili</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Cth&amp;u='.$url.'">ไทย</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Ctl&amp;u='.$url.'">Tagalog</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Ctr&amp;u='.$url.'">Türkçe</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Cuk&amp;u='.$url.'">Українська</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Cvi&amp;u='.$url.'">Tiếng Việt</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Cyi&amp;u='.$url.'">ייִדיש</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Czh-CN&amp;u='.$url.'">中文</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Czh-TW&amp;u='.$url.'">漢語</option>';
		$romana = '
<option value="#" selected="selected">Select language</option>
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Cen&amp;u='.$url.'">English</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Caf&amp;u='.$url.'">Afrikaans</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Car&amp;u='.$url.'">العربية</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Cbe&amp;u='.$url.'">Беларуская</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Cbg&amp;u='.$url.'">Български</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Cca&amp;u='.$url.'">Català</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Ccs&amp;u='.$url.'">Česky</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Ccy&amp;u='.$url.'">Cymraeg</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Cda&amp;u='.$url.'">Dansk</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Cde&amp;u='.$url.'">Deutsch</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Cet&amp;u='.$url.'">Eesti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Cel&amp;u='.$url.'">Ελληνικά</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Ces&amp;u='.$url.'">Español</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Cfa&amp;u='.$url.'">فارسی</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Cfr&amp;u='.$url.'">Français</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Cga&amp;u='.$url.'">Gaeilge</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Cgl&amp;u='.$url.'">Galego</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Chi&amp;u='.$url.'">हिन्दी</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Chr&amp;u='.$url.'">Hrvatski</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Cid&amp;u='.$url.'">Bahasa Indonesia</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Cis&amp;u='.$url.'">Íslenska</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Cit&amp;u='.$url.'">Italiano</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Che&amp;u='.$url.'">עברית</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Clv&amp;u='.$url.'">Latviešu</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Clt&amp;u='.$url.'">Lietuvių</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Cko&amp;u='.$url.'">한국어</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Chu&amp;u='.$url.'">Magyar</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Cmk&amp;u='.$url.'">Македонски</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Cml&amp;u='.$url.'">മലയാളം</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Cmt&amp;u='.$url.'">Malti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Cnl&amp;u='.$url.'">Nederlands</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Cja&amp;u='.$url.'">日本語</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Cno&amp;u='.$url.'">Norsk (Bokmål)</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Cpl&amp;u='.$url.'">Polski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Cpt&amp;u='.$url.'">Português</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Cro&amp;u='.$url.'">Română</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Cru&amp;u='.$url.'">Русский</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Csk&amp;u='.$url.'">Slovenčina</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Csl&amp;u='.$url.'">Slovenščina</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Csq&amp;u='.$url.'">Shqip</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Csr&amp;u='.$url.'">Srpski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Cfi&amp;u='.$url.'">Suomi</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Csv&amp;u='.$url.'">Svenska</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Csw&amp;u='.$url.'">Kiswahili</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Cth&amp;u='.$url.'">ไทย</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Ctl&amp;u='.$url.'">Tagalog</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Ctr&amp;u='.$url.'">Türkçe</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Cuk&amp;u='.$url.'">Українська</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Cvi&amp;u='.$url.'">Tiếng Việt</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Cyi&amp;u='.$url.'">ייִדיש</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Czh-CN&amp;u='.$url.'">中文</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Czh-TW&amp;u='.$url.'">漢語</option>';
		$russkij = '
<option value="#" selected="selected">Select language</option>
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Cen&amp;u='.$url.'">English</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Caf&amp;u='.$url.'">Afrikaans</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Car&amp;u='.$url.'">العربية</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Cbe&amp;u='.$url.'">Беларуская</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Cbg&amp;u='.$url.'">Български</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Cca&amp;u='.$url.'">Català</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Ccs&amp;u='.$url.'">Česky</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Ccy&amp;u='.$url.'">Cymraeg</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Cda&amp;u='.$url.'">Dansk</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Cde&amp;u='.$url.'">Deutsch</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Cet&amp;u='.$url.'">Eesti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Cel&amp;u='.$url.'">Ελληνικά</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Ces&amp;u='.$url.'">Español</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Cfa&amp;u='.$url.'">فارسی</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Cfr&amp;u='.$url.'">Français</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Cga&amp;u='.$url.'">Gaeilge</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Cgl&amp;u='.$url.'">Galego</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Chi&amp;u='.$url.'">हिन्दी</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Chr&amp;u='.$url.'">Hrvatski</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Cid&amp;u='.$url.'">Bahasa Indonesia</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Cis&amp;u='.$url.'">Íslenska</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Cit&amp;u='.$url.'">Italiano</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Che&amp;u='.$url.'">עברית</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Clv&amp;u='.$url.'">Latviešu</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Clt&amp;u='.$url.'">Lietuvių</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Cko&amp;u='.$url.'">한국어</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Chu&amp;u='.$url.'">Magyar</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Cmk&amp;u='.$url.'">Македонски</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Cml&amp;u='.$url.'">മലയാളം</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Cmt&amp;u='.$url.'">Malti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Cnl&amp;u='.$url.'">Nederlands</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Cja&amp;u='.$url.'">日本語</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Cno&amp;u='.$url.'">Norsk (Bokmål)</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Cpl&amp;u='.$url.'">Polski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Cpt&amp;u='.$url.'">Português</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Cro&amp;u='.$url.'">Română</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Cru&amp;u='.$url.'">Русский</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Csk&amp;u='.$url.'">Slovenčina</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Csl&amp;u='.$url.'">Slovenščina</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Csq&amp;u='.$url.'">Shqip</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Csr&amp;u='.$url.'">Srpski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Cfi&amp;u='.$url.'">Suomi</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Csv&amp;u='.$url.'">Svenska</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Csw&amp;u='.$url.'">Kiswahili</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Cth&amp;u='.$url.'">ไทย</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Ctl&amp;u='.$url.'">Tagalog</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Ctr&amp;u='.$url.'">Türkçe</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Cuk&amp;u='.$url.'">Українська</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Cvi&amp;u='.$url.'">Tiếng Việt</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Cyi&amp;u='.$url.'">ייִדיש</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Czh-CN&amp;u='.$url.'">中文</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Czh-TW&amp;u='.$url.'">漢語</option>';
		$slovencina = '
<option value="#" selected="selected">Select language</option>
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Cen&amp;u='.$url.'">English</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Caf&amp;u='.$url.'">Afrikaans</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Car&amp;u='.$url.'">العربية</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Cbe&amp;u='.$url.'">Беларуская</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Cbg&amp;u='.$url.'">Български</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Cca&amp;u='.$url.'">Català</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Ccs&amp;u='.$url.'">Česky</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Ccy&amp;u='.$url.'">Cymraeg</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Cda&amp;u='.$url.'">Dansk</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Cde&amp;u='.$url.'">Deutsch</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Cet&amp;u='.$url.'">Eesti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Cel&amp;u='.$url.'">Ελληνικά</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Ces&amp;u='.$url.'">Español</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Cfa&amp;u='.$url.'">فارسی</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Cfr&amp;u='.$url.'">Français</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Cga&amp;u='.$url.'">Gaeilge</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Cgl&amp;u='.$url.'">Galego</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Chi&amp;u='.$url.'">हिन्दी</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Chr&amp;u='.$url.'">Hrvatski</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Cid&amp;u='.$url.'">Bahasa Indonesia</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Cis&amp;u='.$url.'">Íslenska</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Cit&amp;u='.$url.'">Italiano</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Che&amp;u='.$url.'">עברית</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Clv&amp;u='.$url.'">Latviešu</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Clt&amp;u='.$url.'">Lietuvių</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Cko&amp;u='.$url.'">한국어</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Chu&amp;u='.$url.'">Magyar</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Cmk&amp;u='.$url.'">Македонски</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Cml&amp;u='.$url.'">മലയാളം</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Cmt&amp;u='.$url.'">Malti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Cnl&amp;u='.$url.'">Nederlands</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Cja&amp;u='.$url.'">日本語</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Cno&amp;u='.$url.'">Norsk (Bokmål)</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Cpl&amp;u='.$url.'">Polski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Cpt&amp;u='.$url.'">Português</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Cro&amp;u='.$url.'">Română</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Cru&amp;u='.$url.'">Русский</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Csk&amp;u='.$url.'">Slovenčina</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Csl&amp;u='.$url.'">Slovenščina</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Csq&amp;u='.$url.'">Shqip</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Csr&amp;u='.$url.'">Srpski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Cfi&amp;u='.$url.'">Suomi</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Csv&amp;u='.$url.'">Svenska</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Csw&amp;u='.$url.'">Kiswahili</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Cth&amp;u='.$url.'">ไทย</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Ctl&amp;u='.$url.'">Tagalog</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Ctr&amp;u='.$url.'">Türkçe</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Cuk&amp;u='.$url.'">Українська</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Cvi&amp;u='.$url.'">Tiếng Việt</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Cyi&amp;u='.$url.'">ייִדיש</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Czh-CN&amp;u='.$url.'">中文</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Czh-TW&amp;u='.$url.'">漢語</option>';
		$slovenscina = '
<option value="#" selected="selected">Select language</option>
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Cen&amp;u='.$url.'">English</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Caf&amp;u='.$url.'">Afrikaans</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Car&amp;u='.$url.'">العربية</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Cbe&amp;u='.$url.'">Беларуская</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Cbg&amp;u='.$url.'">Български</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Cca&amp;u='.$url.'">Català</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Ccs&amp;u='.$url.'">Česky</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Ccy&amp;u='.$url.'">Cymraeg</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Cda&amp;u='.$url.'">Dansk</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Cde&amp;u='.$url.'">Deutsch</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Cet&amp;u='.$url.'">Eesti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Cel&amp;u='.$url.'">Ελληνικά</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Ces&amp;u='.$url.'">Español</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Cfa&amp;u='.$url.'">فارسی</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Cfr&amp;u='.$url.'">Français</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Cga&amp;u='.$url.'">Gaeilge</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Cgl&amp;u='.$url.'">Galego</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Chi&amp;u='.$url.'">हिन्दी</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Chr&amp;u='.$url.'">Hrvatski</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Cid&amp;u='.$url.'">Bahasa Indonesia</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Cis&amp;u='.$url.'">Íslenska</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Cit&amp;u='.$url.'">Italiano</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Che&amp;u='.$url.'">עברית</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Clv&amp;u='.$url.'">Latviešu</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Clt&amp;u='.$url.'">Lietuvių</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Cko&amp;u='.$url.'">한국어</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Chu&amp;u='.$url.'">Magyar</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Cmk&amp;u='.$url.'">Македонски</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Cml&amp;u='.$url.'">മലയാളം</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Cmt&amp;u='.$url.'">Malti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Cnl&amp;u='.$url.'">Nederlands</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Cja&amp;u='.$url.'">日本語</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Cno&amp;u='.$url.'">Norsk (Bokmål)</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Cpl&amp;u='.$url.'">Polski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Cpt&amp;u='.$url.'">Português</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Cro&amp;u='.$url.'">Română</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Cru&amp;u='.$url.'">Русский</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Csk&amp;u='.$url.'">Slovenčina</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Csl&amp;u='.$url.'">Slovenščina</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Csq&amp;u='.$url.'">Shqip</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Csr&amp;u='.$url.'">Srpski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Cfi&amp;u='.$url.'">Suomi</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Csv&amp;u='.$url.'">Svenska</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Csw&amp;u='.$url.'">Kiswahili</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Cth&amp;u='.$url.'">ไทย</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Ctl&amp;u='.$url.'">Tagalog</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Ctr&amp;u='.$url.'">Türkçe</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Cuk&amp;u='.$url.'">Українська</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Cvi&amp;u='.$url.'">Tiếng Việt</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Cyi&amp;u='.$url.'">ייִדיש</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Czh-CN&amp;u='.$url.'">中文</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Czh-TW&amp;u='.$url.'">漢語</option>';
		$shqip = '
<option value="#" selected="selected">Select language</option>
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Cen&amp;u='.$url.'">English</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Caf&amp;u='.$url.'">Afrikaans</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Car&amp;u='.$url.'">العربية</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Cbe&amp;u='.$url.'">Беларуская</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Cbg&amp;u='.$url.'">Български</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Cca&amp;u='.$url.'">Català</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Ccs&amp;u='.$url.'">Česky</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Ccy&amp;u='.$url.'">Cymraeg</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Cda&amp;u='.$url.'">Dansk</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Cde&amp;u='.$url.'">Deutsch</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Cet&amp;u='.$url.'">Eesti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Cel&amp;u='.$url.'">Ελληνικά</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Ces&amp;u='.$url.'">Español</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Cfa&amp;u='.$url.'">فارسی</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Cfr&amp;u='.$url.'">Français</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Cga&amp;u='.$url.'">Gaeilge</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Cgl&amp;u='.$url.'">Galego</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Chi&amp;u='.$url.'">हिन्दी</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Chr&amp;u='.$url.'">Hrvatski</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Cid&amp;u='.$url.'">Bahasa Indonesia</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Cis&amp;u='.$url.'">Íslenska</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Cit&amp;u='.$url.'">Italiano</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Che&amp;u='.$url.'">עברית</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Clv&amp;u='.$url.'">Latviešu</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Clt&amp;u='.$url.'">Lietuvių</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Cko&amp;u='.$url.'">한국어</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Chu&amp;u='.$url.'">Magyar</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Cmk&amp;u='.$url.'">Македонски</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Cml&amp;u='.$url.'">മലയാളം</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Cmt&amp;u='.$url.'">Malti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Cnl&amp;u='.$url.'">Nederlands</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Cja&amp;u='.$url.'">日本語</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Cno&amp;u='.$url.'">Norsk (Bokmål)</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Cpl&amp;u='.$url.'">Polski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Cpt&amp;u='.$url.'">Português</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Cro&amp;u='.$url.'">Română</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Cru&amp;u='.$url.'">Русский</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Csk&amp;u='.$url.'">Slovenčina</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Csl&amp;u='.$url.'">Slovenščina</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Csq&amp;u='.$url.'">Shqip</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Csr&amp;u='.$url.'">Srpski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Cfi&amp;u='.$url.'">Suomi</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Csv&amp;u='.$url.'">Svenska</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Csw&amp;u='.$url.'">Kiswahili</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Cth&amp;u='.$url.'">ไทย</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Ctl&amp;u='.$url.'">Tagalog</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Ctr&amp;u='.$url.'">Türkçe</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Cuk&amp;u='.$url.'">Українська</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Cvi&amp;u='.$url.'">Tiếng Việt</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Cyi&amp;u='.$url.'">ייִדיש</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Czh-CN&amp;u='.$url.'">中文</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Czh-TW&amp;u='.$url.'">漢語</option>';
		$srpski = '
<option value="#" selected="selected">Select language</option>
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Cen&amp;u='.$url.'">English</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Caf&amp;u='.$url.'">Afrikaans</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Car&amp;u='.$url.'">العربية</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Cbe&amp;u='.$url.'">Беларуская</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Cbg&amp;u='.$url.'">Български</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Cca&amp;u='.$url.'">Català</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Ccs&amp;u='.$url.'">Česky</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Ccy&amp;u='.$url.'">Cymraeg</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Cda&amp;u='.$url.'">Dansk</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Cde&amp;u='.$url.'">Deutsch</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Cet&amp;u='.$url.'">Eesti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Cel&amp;u='.$url.'">Ελληνικά</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Ces&amp;u='.$url.'">Español</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Cfa&amp;u='.$url.'">فارسی</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Cfr&amp;u='.$url.'">Français</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Cga&amp;u='.$url.'">Gaeilge</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Cgl&amp;u='.$url.'">Galego</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Chi&amp;u='.$url.'">हिन्दी</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Chr&amp;u='.$url.'">Hrvatski</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Cid&amp;u='.$url.'">Bahasa Indonesia</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Cis&amp;u='.$url.'">Íslenska</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Cit&amp;u='.$url.'">Italiano</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Che&amp;u='.$url.'">עברית</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Clv&amp;u='.$url.'">Latviešu</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Clt&amp;u='.$url.'">Lietuvių</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Cko&amp;u='.$url.'">한국어</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Chu&amp;u='.$url.'">Magyar</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Cmk&amp;u='.$url.'">Македонски</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Cml&amp;u='.$url.'">മലയാളം</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Cmt&amp;u='.$url.'">Malti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Cnl&amp;u='.$url.'">Nederlands</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Cja&amp;u='.$url.'">日本語</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Cno&amp;u='.$url.'">Norsk (Bokmål)</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Cpl&amp;u='.$url.'">Polski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Cpt&amp;u='.$url.'">Português</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Cro&amp;u='.$url.'">Română</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Cru&amp;u='.$url.'">Русский</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Csk&amp;u='.$url.'">Slovenčina</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Csl&amp;u='.$url.'">Slovenščina</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Csq&amp;u='.$url.'">Shqip</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Csr&amp;u='.$url.'">Srpski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Cfi&amp;u='.$url.'">Suomi</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Csv&amp;u='.$url.'">Svenska</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Csw&amp;u='.$url.'">Kiswahili</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Cth&amp;u='.$url.'">ไทย</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Ctl&amp;u='.$url.'">Tagalog</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Ctr&amp;u='.$url.'">Türkçe</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Cuk&amp;u='.$url.'">Українська</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Cvi&amp;u='.$url.'">Tiếng Việt</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Cyi&amp;u='.$url.'">ייִדיש</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Czh-CN&amp;u='.$url.'">中文</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Czh-TW&amp;u='.$url.'">漢語</option>';
		$suomi = '
<option value="#" selected="selected">Select language</option>
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Cen&amp;u='.$url.'">English</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Caf&amp;u='.$url.'">Afrikaans</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Car&amp;u='.$url.'">العربية</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Cbe&amp;u='.$url.'">Беларуская</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Cbg&amp;u='.$url.'">Български</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Cca&amp;u='.$url.'">Català</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Ccs&amp;u='.$url.'">Česky</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Ccy&amp;u='.$url.'">Cymraeg</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Cda&amp;u='.$url.'">Dansk</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Cde&amp;u='.$url.'">Deutsch</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Cet&amp;u='.$url.'">Eesti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Cel&amp;u='.$url.'">Ελληνικά</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Ces&amp;u='.$url.'">Español</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Cfa&amp;u='.$url.'">فارسی</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Cfr&amp;u='.$url.'">Français</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Cga&amp;u='.$url.'">Gaeilge</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Cgl&amp;u='.$url.'">Galego</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Chi&amp;u='.$url.'">हिन्दी</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Chr&amp;u='.$url.'">Hrvatski</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Cid&amp;u='.$url.'">Bahasa Indonesia</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Cis&amp;u='.$url.'">Íslenska</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Cit&amp;u='.$url.'">Italiano</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Che&amp;u='.$url.'">עברית</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Clv&amp;u='.$url.'">Latviešu</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Clt&amp;u='.$url.'">Lietuvių</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Cko&amp;u='.$url.'">한국어</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Chu&amp;u='.$url.'">Magyar</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Cmk&amp;u='.$url.'">Македонски</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Cml&amp;u='.$url.'">മലയാളം</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Cmt&amp;u='.$url.'">Malti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Cnl&amp;u='.$url.'">Nederlands</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Cja&amp;u='.$url.'">日本語</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Cno&amp;u='.$url.'">Norsk (Bokmål)</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Cpl&amp;u='.$url.'">Polski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Cpt&amp;u='.$url.'">Português</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Cro&amp;u='.$url.'">Română</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Cru&amp;u='.$url.'">Русский</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Csk&amp;u='.$url.'">Slovenčina</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Csl&amp;u='.$url.'">Slovenščina</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Csq&amp;u='.$url.'">Shqip</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Csr&amp;u='.$url.'">Srpski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Cfi&amp;u='.$url.'">Suomi</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Csv&amp;u='.$url.'">Svenska</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Csw&amp;u='.$url.'">Kiswahili</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Cth&amp;u='.$url.'">ไทย</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Ctl&amp;u='.$url.'">Tagalog</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Ctr&amp;u='.$url.'">Türkçe</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Cuk&amp;u='.$url.'">Українська</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Cvi&amp;u='.$url.'">Tiếng Việt</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Cyi&amp;u='.$url.'">ייִדיש</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Czh-CN&amp;u='.$url.'">中文</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Czh-TW&amp;u='.$url.'">漢語</option>';
		$svenska = '
<option value="#" selected="selected">Select language</option>
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Cen&amp;u='.$url.'">English</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Caf&amp;u='.$url.'">Afrikaans</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Car&amp;u='.$url.'">العربية</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Cbe&amp;u='.$url.'">Беларуская</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Cbg&amp;u='.$url.'">Български</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Cca&amp;u='.$url.'">Català</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Ccs&amp;u='.$url.'">Česky</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Ccy&amp;u='.$url.'">Cymraeg</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Cda&amp;u='.$url.'">Dansk</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Cde&amp;u='.$url.'">Deutsch</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Cet&amp;u='.$url.'">Eesti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Cel&amp;u='.$url.'">Ελληνικά</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Ces&amp;u='.$url.'">Español</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Cfa&amp;u='.$url.'">فارسی</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Cfr&amp;u='.$url.'">Français</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Cga&amp;u='.$url.'">Gaeilge</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Cgl&amp;u='.$url.'">Galego</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Chi&amp;u='.$url.'">हिन्दी</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Chr&amp;u='.$url.'">Hrvatski</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Cid&amp;u='.$url.'">Bahasa Indonesia</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Cis&amp;u='.$url.'">Íslenska</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Cit&amp;u='.$url.'">Italiano</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Che&amp;u='.$url.'">עברית</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Clv&amp;u='.$url.'">Latviešu</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Clt&amp;u='.$url.'">Lietuvių</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Cko&amp;u='.$url.'">한국어</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Chu&amp;u='.$url.'">Magyar</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Cmk&amp;u='.$url.'">Македонски</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Cml&amp;u='.$url.'">മലയാളം</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Cmt&amp;u='.$url.'">Malti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Cnl&amp;u='.$url.'">Nederlands</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Cja&amp;u='.$url.'">日本語</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Cno&amp;u='.$url.'">Norsk (Bokmål)</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Cpl&amp;u='.$url.'">Polski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Cpt&amp;u='.$url.'">Português</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Cro&amp;u='.$url.'">Română</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Cru&amp;u='.$url.'">Русский</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Csk&amp;u='.$url.'">Slovenčina</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Csl&amp;u='.$url.'">Slovenščina</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Csq&amp;u='.$url.'">Shqip</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Csr&amp;u='.$url.'">Srpski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Cfi&amp;u='.$url.'">Suomi</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Csv&amp;u='.$url.'">Svenska</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Csw&amp;u='.$url.'">Kiswahili</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Cth&amp;u='.$url.'">ไทย</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Ctl&amp;u='.$url.'">Tagalog</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Ctr&amp;u='.$url.'">Türkçe</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Cuk&amp;u='.$url.'">Українська</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Cvi&amp;u='.$url.'">Tiếng Việt</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Cyi&amp;u='.$url.'">ייִדיש</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Czh-CN&amp;u='.$url.'">中文</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Czh-TW&amp;u='.$url.'">漢語</option>';
		$swahili = '
<option value="#" selected="selected">Select language</option>
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Cen&amp;u='.$url.'">English</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Caf&amp;u='.$url.'">Afrikaans</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Car&amp;u='.$url.'">العربية</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Cbe&amp;u='.$url.'">Беларуская</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Cbg&amp;u='.$url.'">Български</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Cca&amp;u='.$url.'">Català</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Ccs&amp;u='.$url.'">Česky</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Ccy&amp;u='.$url.'">Cymraeg</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Cda&amp;u='.$url.'">Dansk</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Cde&amp;u='.$url.'">Deutsch</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Cet&amp;u='.$url.'">Eesti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Cel&amp;u='.$url.'">Ελληνικά</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Ces&amp;u='.$url.'">Español</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Cfa&amp;u='.$url.'">فارسی</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Cfr&amp;u='.$url.'">Français</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Cga&amp;u='.$url.'">Gaeilge</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Cgl&amp;u='.$url.'">Galego</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Chi&amp;u='.$url.'">हिन्दी</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Chr&amp;u='.$url.'">Hrvatski</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Cid&amp;u='.$url.'">Bahasa Indonesia</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Cis&amp;u='.$url.'">Íslenska</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Cit&amp;u='.$url.'">Italiano</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Che&amp;u='.$url.'">עברית</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Clv&amp;u='.$url.'">Latviešu</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Clt&amp;u='.$url.'">Lietuvių</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Cko&amp;u='.$url.'">한국어</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Chu&amp;u='.$url.'">Magyar</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Cmk&amp;u='.$url.'">Македонски</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Cml&amp;u='.$url.'">മലയാളം</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Cmt&amp;u='.$url.'">Malti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Cnl&amp;u='.$url.'">Nederlands</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Cja&amp;u='.$url.'">日本語</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Cno&amp;u='.$url.'">Norsk (Bokmål)</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Cpl&amp;u='.$url.'">Polski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Cpt&amp;u='.$url.'">Português</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Cro&amp;u='.$url.'">Română</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Cru&amp;u='.$url.'">Русский</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Csk&amp;u='.$url.'">Slovenčina</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Csl&amp;u='.$url.'">Slovenščina</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Csq&amp;u='.$url.'">Shqip</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Csr&amp;u='.$url.'">Srpski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Cfi&amp;u='.$url.'">Suomi</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Csv&amp;u='.$url.'">Svenska</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Csw&amp;u='.$url.'">Kiswahili</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Cth&amp;u='.$url.'">ไทย</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Ctl&amp;u='.$url.'">Tagalog</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Ctr&amp;u='.$url.'">Türkçe</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Cuk&amp;u='.$url.'">Українська</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Cvi&amp;u='.$url.'">Tiếng Việt</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Cyi&amp;u='.$url.'">ייִדיש</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Czh-CN&amp;u='.$url.'">中文</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Czh-TW&amp;u='.$url.'">漢語</option>';
		$thai = '
<option value="#" selected="selected">Select language</option>
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Cen&amp;u='.$url.'">English</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Caf&amp;u='.$url.'">Afrikaans</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Car&amp;u='.$url.'">العربية</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Cbe&amp;u='.$url.'">Беларуская</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Cbg&amp;u='.$url.'">Български</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Cca&amp;u='.$url.'">Català</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Ccs&amp;u='.$url.'">Česky</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Ccy&amp;u='.$url.'">Cymraeg</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Cda&amp;u='.$url.'">Dansk</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Cde&amp;u='.$url.'">Deutsch</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Cet&amp;u='.$url.'">Eesti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Cel&amp;u='.$url.'">Ελληνικά</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Ces&amp;u='.$url.'">Español</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Cfa&amp;u='.$url.'">فارسی</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Cfr&amp;u='.$url.'">Français</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Cga&amp;u='.$url.'">Gaeilge</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Cgl&amp;u='.$url.'">Galego</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Chi&amp;u='.$url.'">हिन्दी</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Chr&amp;u='.$url.'">Hrvatski</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Cid&amp;u='.$url.'">Bahasa Indonesia</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Cis&amp;u='.$url.'">Íslenska</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Cit&amp;u='.$url.'">Italiano</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Che&amp;u='.$url.'">עברית</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Clv&amp;u='.$url.'">Latviešu</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Clt&amp;u='.$url.'">Lietuvių</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Cko&amp;u='.$url.'">한국어</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Chu&amp;u='.$url.'">Magyar</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Cmk&amp;u='.$url.'">Македонски</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Cml&amp;u='.$url.'">മലയാളം</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Cmt&amp;u='.$url.'">Malti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Cnl&amp;u='.$url.'">Nederlands</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Cja&amp;u='.$url.'">日本語</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Cno&amp;u='.$url.'">Norsk (Bokmål)</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Cpl&amp;u='.$url.'">Polski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Cpt&amp;u='.$url.'">Português</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Cro&amp;u='.$url.'">Română</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Cru&amp;u='.$url.'">Русский</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Csk&amp;u='.$url.'">Slovenčina</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Csl&amp;u='.$url.'">Slovenščina</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Csq&amp;u='.$url.'">Shqip</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Csr&amp;u='.$url.'">Srpski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Cfi&amp;u='.$url.'">Suomi</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Csv&amp;u='.$url.'">Svenska</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Csw&amp;u='.$url.'">Kiswahili</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Cth&amp;u='.$url.'">ไทย</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Ctl&amp;u='.$url.'">Tagalog</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Ctr&amp;u='.$url.'">Türkçe</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Cuk&amp;u='.$url.'">Українська</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Cvi&amp;u='.$url.'">Tiếng Việt</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Cyi&amp;u='.$url.'">ייִדיש</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Czh-CN&amp;u='.$url.'">中文</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Czh-TW&amp;u='.$url.'">漢語</option>';
		$tagalog = '
<option value="#" selected="selected">Select language</option>
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Cen&amp;u='.$url.'">English</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Caf&amp;u='.$url.'">Afrikaans</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Car&amp;u='.$url.'">العربية</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Cbe&amp;u='.$url.'">Беларуская</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Cbg&amp;u='.$url.'">Български</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Cca&amp;u='.$url.'">Català</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Ccs&amp;u='.$url.'">Česky</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Ccy&amp;u='.$url.'">Cymraeg</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Cda&amp;u='.$url.'">Dansk</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Cde&amp;u='.$url.'">Deutsch</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Cet&amp;u='.$url.'">Eesti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Cel&amp;u='.$url.'">Ελληνικά</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Ces&amp;u='.$url.'">Español</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Cfa&amp;u='.$url.'">فارسی</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Cfr&amp;u='.$url.'">Français</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Cga&amp;u='.$url.'">Gaeilge</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Cgl&amp;u='.$url.'">Galego</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Chi&amp;u='.$url.'">हिन्दी</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Chr&amp;u='.$url.'">Hrvatski</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Cid&amp;u='.$url.'">Bahasa Indonesia</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Cis&amp;u='.$url.'">Íslenska</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Cit&amp;u='.$url.'">Italiano</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Che&amp;u='.$url.'">עברית</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Clv&amp;u='.$url.'">Latviešu</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Clt&amp;u='.$url.'">Lietuvių</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Cko&amp;u='.$url.'">한국어</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Chu&amp;u='.$url.'">Magyar</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Cmk&amp;u='.$url.'">Македонски</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Cml&amp;u='.$url.'">മലയാളം</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Cmt&amp;u='.$url.'">Malti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Cnl&amp;u='.$url.'">Nederlands</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Cja&amp;u='.$url.'">日本語</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Cno&amp;u='.$url.'">Norsk (Bokmål)</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Cpl&amp;u='.$url.'">Polski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Cpt&amp;u='.$url.'">Português</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Cro&amp;u='.$url.'">Română</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Cru&amp;u='.$url.'">Русский</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Csk&amp;u='.$url.'">Slovenčina</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Csl&amp;u='.$url.'">Slovenščina</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Csq&amp;u='.$url.'">Shqip</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Csr&amp;u='.$url.'">Srpski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Cfi&amp;u='.$url.'">Suomi</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Csv&amp;u='.$url.'">Svenska</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Csw&amp;u='.$url.'">Kiswahili</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Cth&amp;u='.$url.'">ไทย</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Ctl&amp;u='.$url.'">Tagalog</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Ctr&amp;u='.$url.'">Türkçe</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Cuk&amp;u='.$url.'">Українська</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Cvi&amp;u='.$url.'">Tiếng Việt</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Cyi&amp;u='.$url.'">ייִדיש</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Czh-CN&amp;u='.$url.'">中文</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Czh-TW&amp;u='.$url.'">漢語</option>';
		$turkce = '
<option value="#" selected="selected">Select language</option>
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Cen&amp;u='.$url.'">English</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Caf&amp;u='.$url.'">Afrikaans</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Car&amp;u='.$url.'">العربية</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Cbe&amp;u='.$url.'">Беларуская</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Cbg&amp;u='.$url.'">Български</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Cca&amp;u='.$url.'">Català</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Ccs&amp;u='.$url.'">Česky</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Ccy&amp;u='.$url.'">Cymraeg</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Cda&amp;u='.$url.'">Dansk</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Cde&amp;u='.$url.'">Deutsch</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Cet&amp;u='.$url.'">Eesti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Cel&amp;u='.$url.'">Ελληνικά</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Ces&amp;u='.$url.'">Español</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Cfa&amp;u='.$url.'">فارسی</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Cfr&amp;u='.$url.'">Français</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Cga&amp;u='.$url.'">Gaeilge</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Cgl&amp;u='.$url.'">Galego</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Chi&amp;u='.$url.'">हिन्दी</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Chr&amp;u='.$url.'">Hrvatski</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Cid&amp;u='.$url.'">Bahasa Indonesia</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Cis&amp;u='.$url.'">Íslenska</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Cit&amp;u='.$url.'">Italiano</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Che&amp;u='.$url.'">עברית</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Clv&amp;u='.$url.'">Latviešu</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Clt&amp;u='.$url.'">Lietuvių</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Cko&amp;u='.$url.'">한국어</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Chu&amp;u='.$url.'">Magyar</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Cmk&amp;u='.$url.'">Македонски</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Cml&amp;u='.$url.'">മലയാളം</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Cmt&amp;u='.$url.'">Malti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Cnl&amp;u='.$url.'">Nederlands</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Cja&amp;u='.$url.'">日本語</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Cno&amp;u='.$url.'">Norsk (Bokmål)</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Cpl&amp;u='.$url.'">Polski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Cpt&amp;u='.$url.'">Português</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Cro&amp;u='.$url.'">Română</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Cru&amp;u='.$url.'">Русский</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Csk&amp;u='.$url.'">Slovenčina</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Csl&amp;u='.$url.'">Slovenščina</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Csq&amp;u='.$url.'">Shqip</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Csr&amp;u='.$url.'">Srpski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Cfi&amp;u='.$url.'">Suomi</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Csv&amp;u='.$url.'">Svenska</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Csw&amp;u='.$url.'">Kiswahili</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Cth&amp;u='.$url.'">ไทย</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Ctl&amp;u='.$url.'">Tagalog</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Ctr&amp;u='.$url.'">Türkçe</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Cuk&amp;u='.$url.'">Українська</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Cvi&amp;u='.$url.'">Tiếng Việt</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Cyi&amp;u='.$url.'">ייִדיש</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Czh-CN&amp;u='.$url.'">中文</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Czh-TW&amp;u='.$url.'">漢語</option>';
		$ukrainska = '
<option value="#" selected="selected">Select language</option>
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Cen&amp;u='.$url.'">English</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Caf&amp;u='.$url.'">Afrikaans</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Car&amp;u='.$url.'">العربية</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Cbe&amp;u='.$url.'">Беларуская</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Cbg&amp;u='.$url.'">Български</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Cca&amp;u='.$url.'">Català</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Ccs&amp;u='.$url.'">Česky</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Ccy&amp;u='.$url.'">Cymraeg</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Cda&amp;u='.$url.'">Dansk</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Cde&amp;u='.$url.'">Deutsch</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Cet&amp;u='.$url.'">Eesti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Cel&amp;u='.$url.'">Ελληνικά</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Ces&amp;u='.$url.'">Español</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Cfa&amp;u='.$url.'">فارسی</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Cfr&amp;u='.$url.'">Français</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Cga&amp;u='.$url.'">Gaeilge</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Cgl&amp;u='.$url.'">Galego</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Chi&amp;u='.$url.'">हिन्दी</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Chr&amp;u='.$url.'">Hrvatski</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Cid&amp;u='.$url.'">Bahasa Indonesia</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Cis&amp;u='.$url.'">Íslenska</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Cit&amp;u='.$url.'">Italiano</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Che&amp;u='.$url.'">עברית</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Clv&amp;u='.$url.'">Latviešu</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Clt&amp;u='.$url.'">Lietuvių</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Cko&amp;u='.$url.'">한국어</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Chu&amp;u='.$url.'">Magyar</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Cmk&amp;u='.$url.'">Македонски</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Cml&amp;u='.$url.'">മലയാളം</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Cmt&amp;u='.$url.'">Malti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Cnl&amp;u='.$url.'">Nederlands</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Cja&amp;u='.$url.'">日本語</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Cno&amp;u='.$url.'">Norsk (Bokmål)</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Cpl&amp;u='.$url.'">Polski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Cpt&amp;u='.$url.'">Português</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Cro&amp;u='.$url.'">Română</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Cru&amp;u='.$url.'">Русский</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Csk&amp;u='.$url.'">Slovenčina</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Csl&amp;u='.$url.'">Slovenščina</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Csq&amp;u='.$url.'">Shqip</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Csr&amp;u='.$url.'">Srpski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Cfi&amp;u='.$url.'">Suomi</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Csv&amp;u='.$url.'">Svenska</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Csw&amp;u='.$url.'">Kiswahili</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Cth&amp;u='.$url.'">ไทย</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Ctl&amp;u='.$url.'">Tagalog</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Ctr&amp;u='.$url.'">Türkçe</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Cuk&amp;u='.$url.'">Українська</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Cvi&amp;u='.$url.'">Tiếng Việt</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Cyi&amp;u='.$url.'">ייִדיש</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Czh-CN&amp;u='.$url.'">中文</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Czh-TW&amp;u='.$url.'">漢語</option>';
		$viet = '
<option value="#" selected="selected">Select language</option>
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Cen&amp;u='.$url.'">English</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Caf&amp;u='.$url.'">Afrikaans</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Car&amp;u='.$url.'">العربية</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Cbe&amp;u='.$url.'">Беларуская</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Cbg&amp;u='.$url.'">Български</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Cca&amp;u='.$url.'">Català</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Ccs&amp;u='.$url.'">Česky</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Ccy&amp;u='.$url.'">Cymraeg</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Cda&amp;u='.$url.'">Dansk</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Cde&amp;u='.$url.'">Deutsch</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Cet&amp;u='.$url.'">Eesti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Cel&amp;u='.$url.'">Ελληνικά</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Ces&amp;u='.$url.'">Español</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Cfa&amp;u='.$url.'">فارسی</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Cfr&amp;u='.$url.'">Français</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Cga&amp;u='.$url.'">Gaeilge</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Cgl&amp;u='.$url.'">Galego</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Chi&amp;u='.$url.'">हिन्दी</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Chr&amp;u='.$url.'">Hrvatski</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Cid&amp;u='.$url.'">Bahasa Indonesia</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Cis&amp;u='.$url.'">Íslenska</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Cit&amp;u='.$url.'">Italiano</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Che&amp;u='.$url.'">עברית</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Clv&amp;u='.$url.'">Latviešu</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Clt&amp;u='.$url.'">Lietuvių</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Cko&amp;u='.$url.'">한국어</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Chu&amp;u='.$url.'">Magyar</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Cmk&amp;u='.$url.'">Македонски</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Cml&amp;u='.$url.'">മലയാളം</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Cmt&amp;u='.$url.'">Malti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Cnl&amp;u='.$url.'">Nederlands</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Cja&amp;u='.$url.'">日本語</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Cno&amp;u='.$url.'">Norsk (Bokmål)</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Cpl&amp;u='.$url.'">Polski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Cpt&amp;u='.$url.'">Português</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Cro&amp;u='.$url.'">Română</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Cru&amp;u='.$url.'">Русский</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Csk&amp;u='.$url.'">Slovenčina</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Csl&amp;u='.$url.'">Slovenščina</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Csq&amp;u='.$url.'">Shqip</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Csr&amp;u='.$url.'">Srpski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Cfi&amp;u='.$url.'">Suomi</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Csv&amp;u='.$url.'">Svenska</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Csw&amp;u='.$url.'">Kiswahili</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Cth&amp;u='.$url.'">ไทย</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Ctl&amp;u='.$url.'">Tagalog</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Ctr&amp;u='.$url.'">Türkçe</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Cuk&amp;u='.$url.'">Українська</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Cvi&amp;u='.$url.'">Tiếng Việt</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Cyi&amp;u='.$url.'">ייִדיש</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Czh-CN&amp;u='.$url.'">中文</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Czh-TW&amp;u='.$url.'">漢語</option>';
		$yidis = '
<option value="#" selected="selected">Select language</option>
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Cen&amp;u='.$url.'">English</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Caf&amp;u='.$url.'">Afrikaans</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Car&amp;u='.$url.'">العربية</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Cbe&amp;u='.$url.'">Беларуская</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Cbg&amp;u='.$url.'">Български</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Cca&amp;u='.$url.'">Català</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Ccs&amp;u='.$url.'">Česky</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Ccy&amp;u='.$url.'">Cymraeg</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Cda&amp;u='.$url.'">Dansk</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Cde&amp;u='.$url.'">Deutsch</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Cet&amp;u='.$url.'">Eesti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Cel&amp;u='.$url.'">Ελληνικά</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Ces&amp;u='.$url.'">Español</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Cfa&amp;u='.$url.'">فارسی</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Cfr&amp;u='.$url.'">Français</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Cga&amp;u='.$url.'">Gaeilge</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Cgl&amp;u='.$url.'">Galego</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Chi&amp;u='.$url.'">हिन्दी</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Chr&amp;u='.$url.'">Hrvatski</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Cid&amp;u='.$url.'">Bahasa Indonesia</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Cis&amp;u='.$url.'">Íslenska</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Cit&amp;u='.$url.'">Italiano</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Che&amp;u='.$url.'">עברית</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Clv&amp;u='.$url.'">Latviešu</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Clt&amp;u='.$url.'">Lietuvių</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Cko&amp;u='.$url.'">한국어</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Chu&amp;u='.$url.'">Magyar</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Cmk&amp;u='.$url.'">Македонски</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Cml&amp;u='.$url.'">മലയാളം</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Cmt&amp;u='.$url.'">Malti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Cnl&amp;u='.$url.'">Nederlands</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Cja&amp;u='.$url.'">日本語</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Cno&amp;u='.$url.'">Norsk (Bokmål)</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Cpl&amp;u='.$url.'">Polski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Cpt&amp;u='.$url.'">Português</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Cro&amp;u='.$url.'">Română</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Cru&amp;u='.$url.'">Русский</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Csk&amp;u='.$url.'">Slovenčina</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Csl&amp;u='.$url.'">Slovenščina</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Csq&amp;u='.$url.'">Shqip</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Csr&amp;u='.$url.'">Srpski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Cfi&amp;u='.$url.'">Suomi</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Csv&amp;u='.$url.'">Svenska</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Csw&amp;u='.$url.'">Kiswahili</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Cth&amp;u='.$url.'">ไทย</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Ctl&amp;u='.$url.'">Tagalog</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Ctr&amp;u='.$url.'">Türkçe</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Cuk&amp;u='.$url.'">Українська</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Cvi&amp;u='.$url.'">Tiếng Việt</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Cyi&amp;u='.$url.'">ייִדיש</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Czh-CN&amp;u='.$url.'">中文</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Czh-TW&amp;u='.$url.'">漢語</option>';
		$zhongwen = '
<option value="#" selected="selected">Select language</option>
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Cen&amp;u='.$url.'">English</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Caf&amp;u='.$url.'">Afrikaans</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Car&amp;u='.$url.'">العربية</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Cbe&amp;u='.$url.'">Беларуская</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Cbg&amp;u='.$url.'">Български</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Cca&amp;u='.$url.'">Català</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Ccs&amp;u='.$url.'">Česky</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Ccy&amp;u='.$url.'">Cymraeg</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Cda&amp;u='.$url.'">Dansk</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Cde&amp;u='.$url.'">Deutsch</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Cet&amp;u='.$url.'">Eesti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Cel&amp;u='.$url.'">Ελληνικά</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Ces&amp;u='.$url.'">Español</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Cfa&amp;u='.$url.'">فارسی</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Cfr&amp;u='.$url.'">Français</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Cga&amp;u='.$url.'">Gaeilge</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Cgl&amp;u='.$url.'">Galego</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Chi&amp;u='.$url.'">हिन्दी</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Chr&amp;u='.$url.'">Hrvatski</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Cid&amp;u='.$url.'">Bahasa Indonesia</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Cis&amp;u='.$url.'">Íslenska</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Cit&amp;u='.$url.'">Italiano</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Che&amp;u='.$url.'">עברית</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Clv&amp;u='.$url.'">Latviešu</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Clt&amp;u='.$url.'">Lietuvių</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Cko&amp;u='.$url.'">한국어</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Chu&amp;u='.$url.'">Magyar</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Cmk&amp;u='.$url.'">Македонски</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Cml&amp;u='.$url.'">മലയാളം</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Cmt&amp;u='.$url.'">Malti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Cnl&amp;u='.$url.'">Nederlands</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Cja&amp;u='.$url.'">日本語</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Cno&amp;u='.$url.'">Norsk (Bokmål)</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Cpl&amp;u='.$url.'">Polski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Cpt&amp;u='.$url.'">Português</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Cro&amp;u='.$url.'">Română</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Cru&amp;u='.$url.'">Русский</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Csk&amp;u='.$url.'">Slovenčina</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Csl&amp;u='.$url.'">Slovenščina</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Csq&amp;u='.$url.'">Shqip</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Csr&amp;u='.$url.'">Srpski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Cfi&amp;u='.$url.'">Suomi</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Csv&amp;u='.$url.'">Svenska</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Csw&amp;u='.$url.'">Kiswahili</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Cth&amp;u='.$url.'">ไทย</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Ctl&amp;u='.$url.'">Tagalog</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Ctr&amp;u='.$url.'">Türkçe</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Cuk&amp;u='.$url.'">Українська</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Cvi&amp;u='.$url.'">Tiếng Việt</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Cyi&amp;u='.$url.'">ייִדיש</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Czh-CN&amp;u='.$url.'">中文</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Czh-TW&amp;u='.$url.'">漢語</option>';
		$zhongwent = '
<option value="#" selected="selected">Select language</option>
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Cen&amp;u='.$url.'">English</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Caf&amp;u='.$url.'">Afrikaans</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Car&amp;u='.$url.'">العربية</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Cbe&amp;u='.$url.'">Беларуская</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Cbg&amp;u='.$url.'">Български</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Cca&amp;u='.$url.'">Català</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Ccs&amp;u='.$url.'">Česky</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Ccy&amp;u='.$url.'">Cymraeg</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Cda&amp;u='.$url.'">Dansk</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Cde&amp;u='.$url.'">Deutsch</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Cet&amp;u='.$url.'">Eesti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Cel&amp;u='.$url.'">Ελληνικά</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Ces&amp;u='.$url.'">Español</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Cfa&amp;u='.$url.'">فارسی</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Cfr&amp;u='.$url.'">Français</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Cga&amp;u='.$url.'">Gaeilge</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Cgl&amp;u='.$url.'">Galego</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Chi&amp;u='.$url.'">हिन्दी</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Chr&amp;u='.$url.'">Hrvatski</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Cid&amp;u='.$url.'">Bahasa Indonesia</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Cis&amp;u='.$url.'">Íslenska</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Cit&amp;u='.$url.'">Italiano</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Che&amp;u='.$url.'">עברית</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Clv&amp;u='.$url.'">Latviešu</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Clt&amp;u='.$url.'">Lietuvių</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Cko&amp;u='.$url.'">한국어</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Chu&amp;u='.$url.'">Magyar</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Cmk&amp;u='.$url.'">Македонски</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Cml&amp;u='.$url.'">മലയാളം</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Cmt&amp;u='.$url.'">Malti</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Cnl&amp;u='.$url.'">Nederlands</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Cja&amp;u='.$url.'">日本語</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Cno&amp;u='.$url.'">Norsk (Bokmål)</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Cpl&amp;u='.$url.'">Polski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Cpt&amp;u='.$url.'">Português</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Cro&amp;u='.$url.'">Română</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Cru&amp;u='.$url.'">Русский</option>  
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Csk&amp;u='.$url.'">Slovenčina</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Csl&amp;u='.$url.'">Slovenščina</option>   
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Csq&amp;u='.$url.'">Shqip</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Csr&amp;u='.$url.'">Srpski</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Cfi&amp;u='.$url.'">Suomi</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Csv&amp;u='.$url.'">Svenska</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Csw&amp;u='.$url.'">Kiswahili</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Cth&amp;u='.$url.'">ไทย</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Ctl&amp;u='.$url.'">Tagalog</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Ctr&amp;u='.$url.'">Türkçe</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Cuk&amp;u='.$url.'">Українська</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Cvi&amp;u='.$url.'">Tiếng Việt</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Cyi&amp;u='.$url.'">ייִדיש</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Czh-CN&amp;u='.$url.'">中文</option> 
<option value="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Czh-TW&amp;u='.$url.'">漢語</option>';

	 		echo $before_widget;
			echo $before_title . $title . $after_title;
			
			if ($show_en_menu) { 
			          echo '<select onchange="self.location=this.options[this.selectedIndex].value; return true;" size="1" name="languages" class="menulang">';
			          echo $english;
			          echo '</select>';
					    }
			if ($show_af_menu) { 
			          echo '<select onchange="self.location=this.options[this.selectedIndex].value; return true;" size="1" name="languages" class="menulang">';
			          echo $afrikaans;
			          echo '</select>';
					    }
			if ($show_ar_menu) { 
			          echo '<select onchange="self.location=this.options[this.selectedIndex].value; return true;" size="1" name="languages" class="menulang">';
			          echo $araby;
			          echo '</select>';
					    }
	     	if ($show_be_menu) {
			          echo '<select onchange="self.location=this.options[this.selectedIndex].value; return true;" size="1" name="languages" class="menulang">';
			          echo $belaruskaya;
			          echo '</select>';
					    }			
	     	if ($show_bg_menu) {
			          echo '<select onchange="self.location=this.options[this.selectedIndex].value; return true;" size="1" name="languages" class="menulang">';
			          echo $bulgarski;
			          echo '</select>';
					    }		
	     	if ($show_ca_menu) {
			          echo '<select onchange="self.location=this.options[this.selectedIndex].value; return true;" size="1" name="languages" class="menulang">';
			          echo $catala;
			          echo '</select>';
					    }
			if ($show_cs_menu) { 
			          echo '<select onchange="self.location=this.options[this.selectedIndex].value; return true;" size="1" name="languages" class="menulang">';
			          echo $cesky;
			          echo '</select>';
					    }
			if ($show_cy_menu) {
			          echo '<select onchange="self.location=this.options[this.selectedIndex].value; return true;" size="1" name="languages" class="menulang">';
			          echo $cymraeg;
			          echo '</select>';
					    }
			if ($show_de_menu) {
			          echo '<select onchange="self.location=this.options[this.selectedIndex].value; return true;" size="1" name="languages" class="menulang">';
			          echo $deutsch;
			          echo '</select>';
					    }
			if ($show_da_menu) {
			          echo '<select onchange="self.location=this.options[this.selectedIndex].value; return true;" size="1" name="languages" class="menulang">';
			          echo $dansk;
			          echo '</select>';
					    }
			if ($show_el_menu) {
			          echo '<select onchange="self.location=this.options[this.selectedIndex].value; return true;" size="1" name="languages" class="menulang">';
			          echo $ellenika;
			          echo '</select>';
					    }		
	     	if ($show_et_menu) { 
			          echo '<select onchange="self.location=this.options[this.selectedIndex].value; return true;" size="1" name="languages" class="menulang">';
			          echo $eesti;
			          echo '</select>';
					    }
			if ($show_es_menu) { 
			          echo '<select onchange="self.location=this.options[this.selectedIndex].value; return true;" size="1" name="languages" class="menulang">';
			          echo $espanol;
			          echo '</select>';
					    }
			if ($show_fa_menu) {
			          echo '<select onchange="self.location=this.options[this.selectedIndex].value; return true;" size="1" name="languages" class="menulang">';
			          echo $farsi;
			          echo '</select>';
					    }		
			if ($show_fr_menu) { 
			          echo '<select onchange="self.location=this.options[this.selectedIndex].value; return true;" size="1" name="languages" class="menulang">';
			          echo $francais;
			          echo '</select>';
					    }
	     	if ($show_ga_menu) { 
			          echo '<select onchange="self.location=this.options[this.selectedIndex].value; return true;" size="1" name="languages" class="menulang">';
			          echo $gaeilge;
			          echo '</select>';
					    }	
	     	if ($show_gl_menu) { 
			          echo '<select onchange="self.location=this.options[this.selectedIndex].value; return true;" size="1" name="languages" class="menulang">';
			          echo $galego;
			          echo '</select>';
					    }
			if ($show_hi_menu) { 
			          echo '<select onchange="self.location=this.options[this.selectedIndex].value; return true;" size="1" name="languages" class="menulang">';
			          echo $hindi;
			          echo '</select>';
					    }
			if ($show_hr_menu) {
			          echo '<select onchange="self.location=this.options[this.selectedIndex].value; return true;" size="1" name="languages" class="menulang">';
			          echo $hrvatski;
			          echo '</select>';
					    }
			if ($show_id_menu) { 
			          echo '<select onchange="self.location=this.options[this.selectedIndex].value; return true;" size="1" name="languages" class="menulang">';
			          echo $indonesia;
			          echo '</select>';
					    }
			if ($show_is_menu) {
			          echo '<select onchange="self.location=this.options[this.selectedIndex].value; return true;" size="1" name="languages" class="menulang">';
			          echo $islenska;
			          echo '</select>';
					    }
			if ($show_it_menu) { 
			          echo '<select onchange="self.location=this.options[this.selectedIndex].value; return true;" size="1" name="languages" class="menulang">';
			          echo $italiano;
			          echo '</select>';
					    }
			if ($show_he_menu) {
			          echo '<select onchange="self.location=this.options[this.selectedIndex].value; return true;" size="1" name="languages" class="menulang">';
			          echo $ivrit;
			          echo '</select>';
					    }
			if ($show_lv_menu) { 
			          echo '<select onchange="self.location=this.options[this.selectedIndex].value; return true;" size="1" name="languages" class="menulang">';
			          echo $latviesu;
			          echo '</select>';
					    }
			if ($show_lt_menu) {
			          echo '<select onchange="self.location=this.options[this.selectedIndex].value; return true;" size="1" name="languages" class="menulang">';
			          echo $lietuviu;
			          echo '</select>';
					    }
			if ($show_ko_menu) { 
			          echo '<select onchange="self.location=this.options[this.selectedIndex].value; return true;" size="1" name="languages" class="menulang">';
			          echo $hangugeo;
			          echo '</select>';
					    }
			if ($show_hu_menu) {
			          echo '<select onchange="self.location=this.options[this.selectedIndex].value; return true;" size="1" name="languages" class="menulang">';
			          echo $magyar;
			          echo '</select>';
					    }
			if ($show_mk_menu) { 
			          echo '<select onchange="self.location=this.options[this.selectedIndex].value; return true;" size="1" name="languages" class="menulang">';
			          echo $makedonski;
			          echo '</select>';
					    }
			if ($show_ml_menu) { 
			          echo '<select onchange="self.location=this.options[this.selectedIndex].value; return true;" size="1" name="languages" class="menulang">';
			          echo $malayalam;
			          echo '</select>';
					    }
			if ($show_mt_menu) {
			          echo '<select onchange="self.location=this.options[this.selectedIndex].value; return true;" size="1" name="languages" class="menulang">';
			          echo $malti;
			          echo '</select>';
					    }
			if ($show_nl_menu) {
			          echo '<select onchange="self.location=this.options[this.selectedIndex].value; return true;" size="1" name="languages" class="menulang">';
			          echo $nederlands;
			          echo '</select>';
					    }
			if ($show_ja_menu) { 
			          echo '<select onchange="self.location=this.options[this.selectedIndex].value; return true;" size="1" name="languages" class="menulang">';
			          echo $nihongo;
			          echo '</select>';
					    }
			if ($show_no_menu) { 
			          echo '<select onchange="self.location=this.options[this.selectedIndex].value; return true;" size="1" name="languages" class="menulang">';
			          echo $norsk;
			          echo '</select>';
					    }
			if ($show_pl_menu) { 
			          echo '<select onchange="self.location=this.options[this.selectedIndex].value; return true;" size="1" name="languages" class="menulang">';
			          echo $polski;
			          echo '</select>';
					    }
			if ($show_pt_menu) { 
			          echo '<select onchange="self.location=this.options[this.selectedIndex].value; return true;" size="1" name="languages" class="menulang">';
			          echo $portugues;
			          echo '</select>';
					    }
			if ($show_ro_menu) {
			          echo '<select onchange="self.location=this.options[this.selectedIndex].value; return true;" size="1" name="languages" class="menulang">';
			          echo $romana;
			          echo '</select>';
					    }
			if ($show_ru_menu) {
			          echo '<select onchange="self.location=this.options[this.selectedIndex].value; return true;" size="1" name="languages" class="menulang">';
			          echo $russkij;
			          echo '</select>';
					    }
			if ($show_sk_menu) {
			          echo '<select onchange="self.location=this.options[this.selectedIndex].value; return true;" size="1" name="languages" class="menulang">';
			          echo $slovencina;
			          echo '</select>';
					    }
			if ($show_sl_menu) { 
			          echo '<select onchange="self.location=this.options[this.selectedIndex].value; return true;" size="1" name="languages" class="menulang">';
			          echo $slovenscina;
			          echo '</select>';
					    }
			if ($show_sq_menu) { 
			          echo '<select onchange="self.location=this.options[this.selectedIndex].value; return true;" size="1" name="languages" class="menulang">';
			          echo $shqip;
			          echo '</select>';
					    }
			if ($show_sr_menu) { 
			          echo '<select onchange="self.location=this.options[this.selectedIndex].value; return true;" size="1" name="languages" class="menulang">';
			          echo $srpski;
			          echo '</select>';
					    }
			if ($show_fi_menu) {
			          echo '<select onchange="self.location=this.options[this.selectedIndex].value; return true;" size="1" name="languages" class="menulang">';
			          echo $suomi;
			          echo '</select>';
					    }
			if ($show_sv_menu) { 
			          echo '<select onchange="self.location=this.options[this.selectedIndex].value; return true;" size="1" name="languages" class="menulang">';
			          echo $svenska;
			          echo '</select>';
					    }
			if ($show_sw_menu) {
			          echo '<select onchange="self.location=this.options[this.selectedIndex].value; return true;" size="1" name="languages" class="menulang">';
			          echo $swahili;
			          echo '</select>';
					    }
			if ($show_th_menu) { 
			          echo '<select onchange="self.location=this.options[this.selectedIndex].value; return true;" size="1" name="languages" class="menulang">';
			          echo $thai;
			          echo '</select>';
					    }
			if ($show_tl_menu) {
			          echo '<select onchange="self.location=this.options[this.selectedIndex].value; return true;" size="1" name="languages" class="menulang">';
			          echo $tagalog;
			          echo '</select>';
					    }
			if ($show_tr_menu) {
			          echo '<select onchange="self.location=this.options[this.selectedIndex].value; return true;" size="1" name="languages" class="menulang">';
			          echo $turkce;
			          echo '</select>';
					    }
			if ($show_uk_menu) {
			          echo '<select onchange="self.location=this.options[this.selectedIndex].value; return true;" size="1" name="languages" class="menulang">';
			          echo $ukrainska;
			          echo '</select>';
					    }
			if ($show_yi_menu) {
			          echo '<select onchange="self.location=this.options[this.selectedIndex].value; return true;" size="1" name="languages" class="menulang">';
			          echo $yidis;
			          echo '</select>';
					    }
			if ($show_vi_menu) { 
			          echo '<select onchange="self.location=this.options[this.selectedIndex].value; return true;" size="1" name="languages" class="menulang">';
			          echo $viet;
			          echo '</select>';
					    }
			if ($show_zh_menu) {
			          echo '<select onchange="self.location=this.options[this.selectedIndex].value; return true;" size="1" name="languages" class="menulang">';
			          echo $zhongwen;
			          echo '</select>';
					    }
			if ($show_zt_menu) { 
			          echo '<select onchange="self.location=this.options[this.selectedIndex].value; return true;" size="1" name="languages" class="menulang">';
			          echo $zhongwent;
			          echo '</select>';
					    }
			echo $after_widget;
		}

	function widget_indoeuropean_control() {
		$options = $newoptions = get_option('widget_indoeuropean');
		if ( $_POST["indoeuro_submit"] ) {
			$newoptions['title']	= strip_tags(stripslashes($_POST["indoeuro_title"]));
			$newoptions['show_en_menu']	= isset($_POST['indoeuro_show_en_menu']);
			$newoptions['show_af_menu']	= isset($_POST['indoeuro_show_af_menu']);
			$newoptions['show_ar_menu']	= isset($_POST['indoeuro_show_ar_menu']);
			$newoptions['show_be_menu']	= isset($_POST['indoeuro_show_be_menu']);
			$newoptions['show_bg_menu']	= isset($_POST['indoeuro_show_bg_menu']);
			$newoptions['show_ca_menu']	= isset($_POST['indoeuro_show_ca_menu']);
			$newoptions['show_cs_menu']	= isset($_POST['indoeuro_show_cs_menu']);
			$newoptions['show_cy_menu']	= isset($_POST['indoeuro_show_cy_menu']);
			$newoptions['show_da_menu']	= isset($_POST['indoeuro_show_da_menu']);
			$newoptions['show_de_menu']	= isset($_POST['indoeuro_show_de_menu']);
			$newoptions['show_el_menu']	= isset($_POST['indoeuro_show_el_menu']);
			$newoptions['show_et_menu']	= isset($_POST['indoeuro_show_et_menu']);
			$newoptions['show_es_menu']	= isset($_POST['indoeuro_show_es_menu']);
			$newoptions['show_fa_menu']	= isset($_POST['indoeuro_show_fa_menu']);
			$newoptions['show_fr_menu']	= isset($_POST['indoeuro_show_fr_menu']);
			$newoptions['show_ga_menu']	= isset($_POST['indoeuro_show_gl_menu']);
			$newoptions['show_gl_menu']	= isset($_POST['indoeuro_show_gl_menu']);
			$newoptions['show_hi_menu']	= isset($_POST['indoeuro_show_hi_menu']);
			$newoptions['show_hr_menu']	= isset($_POST['indoeuro_show_hr_menu']);
			$newoptions['show_id_menu']	= isset($_POST['indoeuro_show_id_menu']);
			$newoptions['show_is_menu']	= isset($_POST['indoeuro_show_is_menu']);
			$newoptions['show_it_menu']	= isset($_POST['indoeuro_show_it_menu']);
			$newoptions['show_he_menu']	= isset($_POST['indoeuro_show_he_menu']);
			$newoptions['show_lv_menu']	= isset($_POST['indoeuro_show_lv_menu']);
			$newoptions['show_lt_menu']	= isset($_POST['indoeuro_show_lt_menu']);
			$newoptions['show_ko_menu']	= isset($_POST['indoeuro_show_ko_menu']);
			$newoptions['show_hu_menu']	= isset($_POST['indoeuro_show_hu_menu']);
			$newoptions['show_mk_menu']	= isset($_POST['indoeuro_show_mk_menu']);
			$newoptions['show_ml_menu']	= isset($_POST['indoeuro_show_ml_menu']);
			$newoptions['show_mt_menu']	= isset($_POST['indoeuro_show_mt_menu']);
			$newoptions['show_nl_menu']	= isset($_POST['indoeuro_show_nl_menu']);
			$newoptions['show_ja_menu']	= isset($_POST['indoeuro_show_ja_menu']);
			$newoptions['show_no_menu']	= isset($_POST['indoeuro_show_no_menu']);
			$newoptions['show_pl_menu']	= isset($_POST['indoeuro_show_pl_menu']);
			$newoptions['show_pt_menu']	= isset($_POST['indoeuro_show_pt_menu']);
			$newoptions['show_ro_menu']	= isset($_POST['indoeuro_show_ro_menu']);
			$newoptions['show_ru_menu']	= isset($_POST['indoeuro_show_ru_menu']);
			$newoptions['show_sk_menu']	= isset($_POST['indoeuro_show_sk_menu']);
			$newoptions['show_sl_menu']	= isset($_POST['indoeuro_show_sl_menu']);
			$newoptions['show_sq_menu']	= isset($_POST['indoeuro_show_sq_menu']);
			$newoptions['show_sr_menu']	= isset($_POST['indoeuro_show_sr_menu']);
			$newoptions['show_fi_menu']	= isset($_POST['indoeuro_show_fi_menu']);
			$newoptions['show_sv_menu']	= isset($_POST['indoeuro_show_sv_menu']);
			$newoptions['show_sw_menu']	= isset($_POST['indoeuro_show_sw_menu']);
			$newoptions['show_th_menu']	= isset($_POST['indoeuro_show_th_menu']);
			$newoptions['show_tl_menu']	= isset($_POST['indoeuro_show_tl_menu']);
			$newoptions['show_tr_menu']	= isset($_POST['indoeuro_show_tr_menu']);
			$newoptions['show_uk_menu']	= isset($_POST['indoeuro_show_uk_menu']);
			$newoptions['show_vi_menu']	= isset($_POST['indoeuro_show_vi_menu']);
			$newoptions['show_yi_menu']	= isset($_POST['indoeuro_show_yi_menu']);
			$newoptions['show_zh_menu']	= isset($_POST['indoeuro_show_zh_menu']);
			$newoptions['show_zt_menu']	= isset($_POST['indoeuro_show_zt_menu']);
		}
		if ( $options != $newoptions ) {
			$options = $newoptions;
			update_option('widget_indoeuropean', $options);
		}
		$title			  = htmlspecialchars($options['title'], ENT_QUOTES);
		$show_en_menu	  = $options['show_en_menu'] ? 'checked="checked"' : '';
		$show_af_menu	  = $options['show_af_menu'] ? 'checked="checked"' : '';   
		$show_ar_menu	  = $options['show_ar_menu'] ? 'checked="checked"' : '';
		$show_be_menu   = $options['show_be_menu'] ? 'checked="checked"' : ''; 
		$show_bg_menu   = $options['show_bg_menu'] ? 'checked="checked"' : ''; 
		$show_ca_menu   = $options['show_ca_menu'] ? 'checked="checked"' : ''; 
		$show_cs_menu   = $options['show_cs_menu'] ? 'checked="checked"' : ''; 
		$show_cy_menu   = $options['show_cy_menu'] ? 'checked="checked"' : ''; 
		$show_da_menu  = $options['show_da_menu'] ? 'checked="checked"' : ''; 
		$show_de_menu   = $options['show_de_menu'] ? 'checked="checked"' : ''; 
		$show_el_menu   = $options['show_el_menu'] ? 'checked="checked"' : ''; 
		$show_et_menu   = $options['show_et_menu'] ? 'checked="checked"' : ''; 
		$show_es_menu   = $options['show_es_menu'] ? 'checked="checked"' : ''; 
		$show_fa_menu  = $options['show_fa_menu'] ? 'checked="checked"' : ''; 
		$show_fr_menu  = $options['show_fr_menu'] ? 'checked="checked"' : ''; 
		$show_ga_menu   = $options['show_ga_menu'] ? 'checked="checked"' : ''; 
		$show_gl_menu   = $options['show_gl_menu'] ? 'checked="checked"' : ''; 
		$show_hi_menu   = $options['show_hi_menu'] ? 'checked="checked"' : ''; 
		$show_hr_menu   = $options['show_hr_menu'] ? 'checked="checked"' : ''; 
		$show_id_menu   = $options['show_id_menu'] ? 'checked="checked"' : ''; 
		$show_is_menu   = $options['show_is_menu'] ? 'checked="checked"' : ''; 
		$show_it_menu   = $options['show_it_menu'] ? 'checked="checked"' : ''; 
		$show_he_menu   = $options['show_he_menu'] ? 'checked="checked"' : ''; 
		$show_lv_menu   = $options['show_lv_menu'] ? 'checked="checked"' : ''; 
		$show_lt_menu   = $options['show_lt_menu'] ? 'checked="checked"' : '';  
		$show_ko_menu   = $options['show_ko_menu'] ? 'checked="checked"' : ''; 
		$show_hu_menu   = $options['show_hu_menu'] ? 'checked="checked"' : ''; 
		$show_mk_menu   = $options['show_mk_menu'] ? 'checked="checked"' : ''; 
		$show_ml_menu   = $options['show_ml_menu'] ? 'checked="checked"' : ''; 
		$show_mt_menu   = $options['show_mt_menu'] ? 'checked="checked"' : ''; 
		$show_nl_menu   = $options['show_nl_menu'] ? 'checked="checked"' : ''; 
		$show_ja_menu	  = $options['show_ja_menu'] ? 'checked="checked"' : '';
		$show_no_menu   = $options['show_no_menu'] ? 'checked="checked"' : ''; 
		$show_pl_menu   = $options['show_pl_menu'] ? 'checked="checked"' : ''; 
		$show_pt_menu   = $options['show_pt_menu'] ? 'checked="checked"' : ''; 
		$show_ro_menu  = $options['show_ro_menu'] ? 'checked="checked"' : '';  
		$show_ru_menu   = $options['show_ru_menu'] ? 'checked="checked"' : ''; 
		$show_sk_menu   = $options['show_sk_menu'] ? 'checked="checked"' : ''; 
		$show_sl_menu   = $options['show_sl_menu'] ? 'checked="checked"' : ''; 
		$show_sq_menu   = $options['show_sq_menu'] ? 'checked="checked"' : ''; 
		$show_sr_menu   = $options['show_sr_menu'] ? 'checked="checked"' : ''; 
		$show_fi_menu   = $options['show_fi_menu'] ? 'checked="checked"' : ''; 
		$show_sv_menu   = $options['show_sv_menu'] ? 'checked="checked"' : ''; 
		$show_sw_menu   = $options['show_sw_menu'] ? 'checked="checked"' : ''; 
		$show_th_menu   = $options['show_th_menu'] ? 'checked="checked"' : ''; 
		$show_tl_menu   = $options['show_tl_menu'] ? 'checked="checked"' : ''; 
		$show_tr_menu   = $options['show_tr_menu'] ? 'checked="checked"' : ''; 
		$show_uk_menu   = $options['show_uk_menu'] ? 'checked="checked"' : ''; 
		$show_vi_menu   = $options['show_vi_menu'] ? 'checked="checked"' : ''; 
		$show_yi_menu   = $options['show_yi_menu'] ? 'checked="checked"' : ''; 
		$show_zh_menu   = $options['show_zh_menu'] ? 'checked="checked"' : ''; 
		$show_zt_menu   = $options['show_zt_menu'] ? 'checked="checked"' : ''; 
	?>
				<p>Title: <input style="width: 250px;" id="indoeuro_title" name="indoeuro_title" type="text" value="<?php echo $title; ?>" /></p>
				<p>Please select ONLY ONE BOX, with your blog's language.</p>
				<p style="text-align:right;margin-right:40px;">
				Afrikaans <input class="checkbox" type="checkbox" <?php echo $show_af_menu; ?>id="indoeuro_show_af_menu" name="indoeuro_show_af_menu" />
 						  </p>
 						  <p style="text-align:right;margin-right:40px;">
				  العربية
				<input class="checkbox" type="checkbox" <?php echo $show_ar_menu; ?>id="indoeuro_show_ar_menu" name="indoeuro_show_ar_menu" />
 						   </p>
 				<p style="text-align:right;margin-right:40px;">
				Беларуская<input class="checkbox" type="checkbox" <?php echo $show_be_menu; ?>id="indoeuro_show_be_menu" name="indoeuro_show_be_menu" />
 						   </p>
 				<p style="text-align:right;margin-right:40px;">
				Български<input class="checkbox" type="checkbox" <?php echo $show_bg_menu; ?>id="indoeuro_show_bg_menu" name="indoeuro_show_bg_menu" />
 						   </p>
				<p style="text-align:right;margin-right:40px;">
				Català<input class="checkbox" type="checkbox" <?php echo $show_ca_menu; ?>id="indoeuro_show_ca_menu" name="indoeuro_show_ca_menu" />
 						   </p>
				<p style="text-align:right;margin-right:40px;">
				Česky<input class="checkbox" type="checkbox" <?php echo $show_cs_menu; ?>id="indoeuro_show_cs_menu" name="indoeuro_show_cs_menu" />
 						   </p>
				<p style="text-align:right;margin-right:40px;">
				Cymraeg<input class="checkbox" type="checkbox" <?php echo $show_cy_menu; ?>id="indoeuro_show_cy_menu" name="indoeuro_show_cy_menu" />
 						   </p>
				<p style="text-align:right;margin-right:40px;">
				Dansk<input class="checkbox" type="checkbox" <?php echo $show_da_menu; ?>id="indoeuro_show_da_menu" name="indoeuro_show_da_menu" />
 						   </p>
				<p style="text-align:right;margin-right:40px;">
				Deutsch<input class="checkbox" type="checkbox" <?php echo $show_de_menu; ?>id="indoeuro_show_de_menu" name="indoeuro_show_de_menu" />
 					       </p>
				<p style="text-align:right;margin-right:40px;">
				Ελληνικά<input class="checkbox" type="checkbox" <?php echo $show_el_menu; ?>id="indoeuro_show_el_menu" name="indoeuro_show_el_menu" />
 						   </p>
				<p style="text-align:right;margin-right:40px;">
				Eesti<input class="checkbox" type="checkbox" <?php echo $show_et_menu; ?>id="indoeuro_show_et_menu" name="indoeuro_show_et_menu" />
 						   </p>
				<p style="text-align:right;margin-right:40px;">
				English<input class="checkbox" type="checkbox" <?php echo $show_en_menu; ?> id="indoeuro_show_en_menu" name="indoeuro_show_en_menu" />
                         </p>
				<p style="text-align:right;margin-right:40px;">فارسی
				<input class="checkbox" type="checkbox" <?php echo $show_fa_menu; ?>id="indoeuro_show_fa_menu" name="indoeuro_show_fa_menu" />
 						    </p>
				<p style="text-align:right;margin-right:40px;">
				Español<input class="checkbox" type="checkbox" <?php echo $show_es_menu; ?>id="indoeuro_show_es_menu" name="indoeuro_show_es_menu" />
 						    </p>
				<p style="text-align:right;margin-right:40px;">
				Français<input class="checkbox" type="checkbox" <?php echo $show_fr_menu; ?> id="indoeuro_show_fr_menu" name="indoeuro_show_fr_menu" />
                          </p>
				<p style="text-align:right;margin-right:40px;">
				Gaeilge<input class="checkbox" type="checkbox" <?php echo $show_ga_menu; ?>id="indoeuro_show_ga_menu" name="indoeuro_show_ga_menu" />
 						   </p>
				<p style="text-align:right;margin-right:40px;">
				Galego<input class="checkbox" type="checkbox" <?php echo $show_gl_menu; ?>id="indoeuro_show_gl_menu" name="indoeuro_show_gl_menu" />
 						   </p>
				<p style="text-align:right;margin-right:40px;">
				हिन्दी<input class="checkbox" type="checkbox" <?php echo $show_hi_menu; ?>id="indoeuro_show_hi_menu" name="indoeuro_show_hi_menu" />
 						   </p>
				<p style="text-align:right;margin-right:40px;">
				Hrvatski<input class="checkbox" type="checkbox" <?php echo $show_hr_menu; ?>id="indoeuro_show_hr_menu" name="indoeuro_show_hr_menu" />
 						   </p>
				<p style="text-align:right;margin-right:40px;">
				Bahasa Indonesia<input class="checkbox" type="checkbox" <?php echo $show_id_menu; ?>id="indoeuro_show_id_menu" name="indoeuro_show_id_menu" />
 						   </p>
				<p style="text-align:right;margin-right:40px;">
				Íslenska<input class="checkbox" type="checkbox" <?php echo $show_is_menu; ?>id="indoeuro_show_is_menu" name="indoeuro_show_is_menu" />
 						   </p>
				<p style="text-align:right;margin-right:40px;">
				Italiano<input class="checkbox" type="checkbox" <?php echo $show_it_menu; ?>id="indoeuro_show_it_menu" name="indoeuro_show_it_menu" />
 						    </p>
				<p style="text-align:right;margin-right:40px;">עברית
				<input class="checkbox" type="checkbox" <?php echo $show_he_menu; ?>id="indoeuro_show_he_menu" name="indoeuro_show_he_menu" />
 						    </p>
				<p style="text-align:right;margin-right:40px;">
				Latviešu<input class="checkbox" type="checkbox" <?php echo $show_lv_menu; ?>id="indoeuro_show_lv_menu" name="indoeuro_show_lv_menu" />
 						   </p>
				<p style="text-align:right;margin-right:40px;">
				Lietuvių<input class="checkbox" type="checkbox" <?php echo $show_lt_menu; ?>id="indoeuro_show_lt_menu" name="indoeuro_show_lt_menu" />
 						   </p>
				<p style="text-align:right;margin-right:40px;">
				한국어<input class="checkbox" type="checkbox" <?php echo $show_ko_menu; ?>id="indoeuro_show_ko_menu" name="indoeuro_show_ko_menu" />
 						   </p>
				<p style="text-align:right;margin-right:40px;">
				Magyar<input class="checkbox" type="checkbox" <?php echo $show_hu_menu; ?>id="indoeuro_show_hu_menu" name="indoeuro_show_hu_menu" />
 						   </p>
				<p style="text-align:right;margin-right:40px;">
				Македонски<input class="checkbox" type="checkbox" <?php echo $show_mk_menu; ?>id="indoeuro_show_mk_menu" name="indoeuro_show_mk_menu" />
 						   </p>
				<p style="text-align:right;margin-right:40px;">
				മലയാളം<input class="checkbox" type="checkbox" <?php echo $show_ml_menu; ?>id="indoeuro_show_ml_menu" name="indoeuro_show_ml_menu" />
 						   </p>
				<p style="text-align:right;margin-right:40px;">
				Malti<input class="checkbox" type="checkbox" <?php echo $show_mt_menu; ?>id="indoeuro_show_mt_menu" name="indoeuro_show_mt_menu" />
 						   </p>
				<p style="text-align:right;margin-right:40px;">
				Nederlands<input class="checkbox" type="checkbox" <?php echo $show_nl_menu; ?>id="indoeuro_show_nl_menu" name="indoeuro_show_nl_menu" />
 						  </p>
				<p style="text-align:right;margin-right:40px;">
				日本語<input class="checkbox" type="checkbox" <?php echo $show_ja_menu; ?>id="indoeuro_show_ja_menu" name="indoeuro_show_ja_menu" />
 						   </p>
				<p style="text-align:right;margin-right:40px;">
				Norsk<input class="checkbox" type="checkbox" <?php echo $show_no_menu; ?>id="indoeuro_show_no_menu" name="indoeuro_show_no_menu" />
 						   </p>
				<p style="text-align:right;margin-right:40px;">
				Polski<input class="checkbox" type="checkbox" <?php echo $show_pl_menu; ?>id="indoeuro_show_pl_menu" name="indoeuro_show_pl_menu" />
 						   </p>
				<p style="text-align:right;margin-right:40px;">
				Português<input class="checkbox" type="checkbox" <?php echo $show_pt_menu; ?>id="indoeuro_show_pt_menu" name="indoeuro_show_pt_menu" />
 						   </p>
				<p style="text-align:right;margin-right:40px;">
				Română<input class="checkbox" type="checkbox" <?php echo $show_ro_menu; ?>id="indoeuro_show_ro_menu" name="indoeuro_show_ro_menu" />
 						   </p>
				<p style="text-align:right;margin-right:40px;">
				Русский<input class="checkbox" type="checkbox" <?php echo $show_ru_menu; ?>id="indoeuro_show_ru_menu" name="indoeuro_show_ru_menu" />
 						   </p>
				<p style="text-align:right;margin-right:40px;">
				Slovenčina<input class="checkbox" type="checkbox" <?php echo $show_sk_menu; ?>id="indoeuro_show_sk_menu" name="indoeuro_show_sk_menu" />
 						   </p>
				<p style="text-align:right;margin-right:40px;">
				Slovenščina<input class="checkbox" type="checkbox" <?php echo $show_sl_menu; ?>id="indoeuro_show_sl_menu" name="indoeuro_show_sl_menu" />
 						   </p>
				<p style="text-align:right;margin-right:40px;">
				Shqip<input class="checkbox" type="checkbox" <?php echo $show_sq_menu; ?>id="indoeuro_show_sq_menu" name="indoeuro_show_sq_menu" />
 						   </p>
				<p style="text-align:right;margin-right:40px;">
				Srpski<input class="checkbox" type="checkbox" <?php echo $show_sr_menu; ?>id="indoeuro_show_sr_menu" name="indoeuro_show_sr_menu" />
 						   </p>
				<p style="text-align:right;margin-right:40px;">
				Suomi<input class="checkbox" type="checkbox" <?php echo $show_fi_menu; ?>id="indoeuro_show_fi_menu" name="indoeuro_show_fi_menu" />
 						   </p>
				<p style="text-align:right;margin-right:40px;">
				Svenska<input class="checkbox" type="checkbox" <?php echo $show_sv_menu; ?>id="indoeuro_show_sv_menu" name="indoeuro_show_sv_menu" />
 						   </p>
				<p style="text-align:right;margin-right:40px;">
				Kiswahili<input class="checkbox" type="checkbox" <?php echo $show_sw_menu; ?>id="indoeuro_show_sw_menu" name="indoeuro_show_sw_menu" />
 						   </p>
				<p style="text-align:right;margin-right:40px;">
				ไทย<input class="checkbox" type="checkbox" <?php echo $show_th_menu; ?>id="indoeuro_show_th_menu" name="indoeuro_show_th_menu" />
 						   </p>
				<p style="text-align:right;margin-right:40px;">
				Tagalog<input class="checkbox" type="checkbox" <?php echo $show_tl_menu; ?>id="indoeuro_show_tl_menu" name="indoeuro_show_tl_menu" />
 						   </p>
				<p style="text-align:right;margin-right:40px;">
				Türkçe<input class="checkbox" type="checkbox" <?php echo $show_tr_menu; ?>id="indoeuro_show_tr_menu" name="indoeuro_show_tr_menu" />
 						   </p>
				<p style="text-align:right;margin-right:40px;">
				Українська<input class="checkbox" type="checkbox" <?php echo $show_uk_menu; ?>id="indoeuro_show_uk_menu" name="indoeuro_show_uk_menu" />
 						   </p>
				<p style="text-align:right;margin-right:40px;">
				Tiếng Việt<input class="checkbox" type="checkbox" <?php echo $show_vi_menu; ?>id="indoeuro_show_vi_menu" name="indoeuro_show_vi_menu" />
 						   </p>
				<p style="text-align:right;margin-right:40px;">ייִדיש
				<input class="checkbox" type="checkbox" <?php echo $show_yi_menu; ?>id="indoeuro_show_yi_menu" name="indoeuro_show_yi_menu" />
 						   </p>
				<p style="text-align:right;margin-right:40px;">
				中文<input class="checkbox" type="checkbox" <?php echo $show_zh_menu; ?>id="indoeuro_show_zh_menu" name="indoeuro_show_zh_menu" />
 						   </p>
				<p style="text-align:right;margin-right:40px;">
				漢語<input class="checkbox" type="checkbox" <?php echo $show_sv_menu; ?>id="indoeuro_show_zt_menu" name="indoeuro_show_zt_menu" />
 						   </p>
				
				<input type="hidden" id="indoeuro_submit" name="indoeuro_submit" value="1" />
	<?php
	}

	if (function_exists('register_sidebar_widget')) {
		register_sidebar_widget('Indo-European', 'widget_indoeuropean');
		register_widget_control('Indo-European', 'widget_indoeuropean_control', 300, 300);
	}
}

// Run our code later in case this loads prior to any required plugins.
add_action('plugins_loaded', 'widget_indoeuropean_init');

?>