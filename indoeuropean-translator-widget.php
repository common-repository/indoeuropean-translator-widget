<?php
/*
Plugin Name: Indoeuropean Translator Widget
Plugin URI: http://indo-european.info/
Description: Provides links to different automatic translations from the sidebar
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

			$show_en_h		= $options['show_en_h']		? '1'			: '0';
			$show_en_v		= $options['show_en_v']		? '1'			: '0';
			$show_af_h		= $options['show_af_h']		? '1'			: '0';
			$show_af_v		= $options['show_af_v']		? '1'			: '0';
			$show_ar_h		= $options['show_ar_h']		? '1'			: '0';
			$show_ar_v		= $options['show_ar_v']		? '1'			: '0';
			$show_be_h		= $options['show_be_h']		? '1'			: '0';
			$show_be_v		= $options['show_be_v']		? '1'			: '0';
			$show_bg_h		= $options['show_bg_h']		? '1'			: '0';
			$show_bg_v		= $options['show_bg_v']		? '1'			: '0';
			$show_ca_h		= $options['show_ca_h']		? '1'			: '0';
			$show_ca_v		= $options['show_ca_v']		? '1'			: '0';
			$show_cs_h		= $options['show_cs_h']		? '1'			: '0';
			$show_cs_v		= $options['show_cs_v']		? '1'			: '0';
			$show_cy_h		= $options['show_cy_h']		? '1'			: '0';
			$show_cy_v		= $options['show_cy_v']		? '1'			: '0';
			$show_da_h		= $options['show_da_h']		? '1'			: '0';
			$show_da_v		= $options['show_da_v']		? '1'			: '0';
			$show_de_h		= $options['show_de_h']		? '1'			: '0';
			$show_de_v		= $options['show_de_v']		? '1'			: '0';
			$show_el_h		= $options['show_el_h']		? '1'			: '0';
			$show_el_v		= $options['show_el_v']		? '1'			: '0';
			$show_et_h		= $options['show_et_h']		? '1'			: '0';
			$show_et_v		= $options['show_et_v']		? '1'			: '0';
			$show_es_h		= $options['show_es_h']		? '1'			: '0';
			$show_es_v		= $options['show_es_v']		? '1'			: '0';
			$show_fa_h		= $options['show_fa_h']		? '1'			: '0';
			$show_fa_v		= $options['show_fa_v']		? '1'			: '0';
			$show_fr_h		= $options['show_fr_h']		? '1'			: '0';
			$show_fr_v		= $options['show_fr_v']		? '1'			: '0';
			$show_ga_h		= $options['show_ga_h']		? '1'			: '0';
			$show_ga_v		= $options['show_ga_v']		? '1'			: '0';
			$show_gl_h		= $options['show_gl_h']		? '1'			: '0';
			$show_gl_v		= $options['show_gl_v']		? '1'			: '0';
			$show_hi_h		= $options['show_hi_h']		? '1'			: '0';
			$show_hi_v		= $options['show_hi_v']		? '1'			: '0';
			$show_hr_h		= $options['show_hr_h']		? '1'			: '0';
			$show_hr_v		= $options['show_hr_v']		? '1'			: '0';
			$show_id_h		= $options['show_id_h']		? '1'			: '0';
			$show_id_v		= $options['show_id_v']		? '1'			: '0';
			$show_is_h		= $options['show_is_h']		? '1'			: '0';
			$show_is_v		= $options['show_is_v']		? '1'			: '0';
			$show_it_h		= $options['show_it_h']		? '1'			: '0';
			$show_it_v		= $options['show_it_v']		? '1'			: '0';
			$show_he_h		= $options['show_he_h']		? '1'			: '0';
			$show_he_v		= $options['show_he_v']		? '1'			: '0';
			$show_lv_h		= $options['show_lv_h']		? '1'			: '0';
			$show_lv_v		= $options['show_lv_v']		? '1'			: '0';
			$show_lt_h		= $options['show_lt_h']		? '1'			: '0';
			$show_lt_v		= $options['show_lt_v']		? '1'			: '0';
			$show_ko_h		= $options['show_ko_h']		? '1'			: '0';
			$show_ko_v		= $options['show_ko_v']		? '1'			: '0';
			$show_hu_h		= $options['show_hu_h']		? '1'			: '0';
			$show_hu_v		= $options['show_hu_v']		? '1'			: '0';
			$show_mk_h		= $options['show_mk_h']		? '1'			: '0';
			$show_mk_v		= $options['show_mk_v']		? '1'			: '0';
			$show_ml_h		= $options['show_ml_h']		? '1'			: '0';
			$show_ml_v		= $options['show_ml_v']		? '1'			: '0';
			$show_mt_h		= $options['show_mt_h']		? '1'			: '0';
			$show_mt_v		= $options['show_mt_v']		? '1'			: '0';
			$show_nl_h		= $options['show_nl_h']		? '1'			: '0';
			$show_nl_v		= $options['show_nl_v']		? '1'			: '0';
			$show_ja_h		= $options['show_ja_h']		? '1'			: '0';
			$show_ja_v		= $options['show_ja_v']		? '1'			: '0';
			$show_no_h		= $options['show_no_h']		? '1'			: '0';
			$show_no_v		= $options['show_no_v']		? '1'			: '0';
			$show_pl_h		= $options['show_pl_h']		? '1'			: '0';
			$show_pl_v		= $options['show_pl_v']		? '1'			: '0';
			$show_pt_h		= $options['show_pt_h']		? '1'			: '0';
			$show_pt_v		= $options['show_pt_v']		? '1'			: '0';
			$show_ro_h		= $options['show_ro_h']		? '1'			: '0';
			$show_ro_v		= $options['show_ro_v']		? '1'			: '0';
			$show_ru_h		= $options['show_ru_h']		? '1'			: '0';
			$show_ru_v		= $options['show_ru_v']		? '1'			: '0';
			$show_sk_h		= $options['show_sk_h']		? '1'			: '0';
			$show_sk_v		= $options['show_sk_v']		? '1'			: '0';
			$show_sl_h		= $options['show_sl_h']		? '1'			: '0';
			$show_sl_v		= $options['show_sl_v']		? '1'			: '0';
			$show_sq_h		= $options['show_sq_h']		? '1'			: '0';
			$show_sq_v		= $options['show_sq_v']		? '1'			: '0';
			$show_sr_h		= $options['show_sr_h']		? '1'			: '0';
			$show_sr_v		= $options['show_sr_v']		? '1'			: '0';
			$show_fi_h		= $options['show_fi_h']		? '1'			: '0';
			$show_fi_v		= $options['show_fi_v']		? '1'			: '0';
			$show_sv_h		= $options['show_sv_h']		? '1'			: '0';
			$show_sv_v		= $options['show_sv_v']		? '1'			: '0';
			$show_sw_h		= $options['show_sw_h']		? '1'			: '0';
			$show_sw_v		= $options['show_sw_v']		? '1'			: '0';
			$show_th_h		= $options['show_th_h']		? '1'			: '0';
			$show_th_v		= $options['show_th_v']		? '1'			: '0';
			$show_tl_h		= $options['show_tl_h']		? '1'			: '0';
			$show_tl_v		= $options['show_tl_v']		? '1'			: '0';
			$show_tr_h		= $options['show_tr_h']		? '1'			: '0';
			$show_tr_v		= $options['show_tr_v']		? '1'			: '0';
			$show_uk_h		= $options['show_uk_h']		? '1'			: '0';
			$show_uk_v		= $options['show_uk_v']		? '1'			: '0';
			$show_vi_h		= $options['show_vi_h']		? '1'			: '0';
			$show_vi_v		= $options['show_vi_v']		? '1'			: '0';
			$show_yi_h		= $options['show_yi_h']		? '1'			: '0';
			$show_yi_v		= $options['show_yi_v']		? '1'			: '0';
			$show_zh_h		= $options['show_zh_h']		? '1'			: '0';
			$show_zh_v		= $options['show_zh_v']		? '1'			: '0';
			$show_zt_h		= $options['show_zt_h']		? '1'			: '0';
			$show_zt_v		= $options['show_zt_v']		? '1'			: '0';
			
			$url = $_SERVER["PHP_SELF"];
               if ( $_SERVER['QUERY_STRING'] <> '') {
                    $url .= "?" . $_SERVER['QUERY_STRING'];
                    	}
 
			$url = 'http://' . $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
			$url = str_replace(":", "%3A", $url);
			$url = str_replace("/", "%2F", $url);
			$url = str_replace("&", "%26", $url);
	        $medhjos = $medhi;
	        
	          if($medhi = $show_en_h){
				$medhjos = " •";
				}  else if ($medhi = $show_af_h) {
				$medhjos = " •";
				}  else if ($medhi = $show_ar_h) {
				$medhjos = " •";
				}  else if ($medhi = $show_be_h) {
				$medhjos = " •";
				}  else if ($medhi = $show_bg_h) {
				$medhjos = " •";
				}  else if ($medhi = $show_ca_h) {
				$medhjos = " •";
				}  else if ($medhi = $show_cs_h) {
				$medhjos = " •";
				}  else if ($medhi = $show_cy_h) {
				$medhjos = " •";
				}  else if ($medhi = $show_da_h) {
				$medhjos = " •";
				}  else if ($medhi = $show_de_h) {
				$medhjos = " •";
				}  else if ($medhi = $show_el_h) {
				$medhjos = " •";
				}  else if ($medhi = $show_et_h) {
				$medhjos = " •";
				}  else if ($medhi = $show_es_h) {
				$medhjos = " •";
				}  else if ($medhi = $show_fa_h) {
				$medhjos = " •";
				}  else if ($medhi = $show_fr_h) {
				$medhjos = " •";
				}  else if ($medhi = $show_ga_h) {
				$medhjos = " •";
				}  else if ($medhi = $show_gl_h) {
				$medhjos = " •";
				}  else if ($medhi = $show_hi_h) {
				$medhjos = " •";
				}   else if ($medhi = $show_hr_h) {
				$medhjos = " •";
				}  else if ($medhi = $show_id_h) {
				$medhjos = " •";
				}  else if ($medhi = $show_is_h) {
				$medhjos = " •";
				}  else if ($medhi = $show_it_h) {
				$medhjos = " •";
				}  else if ($medhi = $show_he_h) {
				$medhjos = " •";
				}  else if ($medhi = $show_lv_h) {
				$medhjos = " •";
				}  else if ($medhi = $show_lt_h) {
				$medhjos = " •";
				}  else if ($medhi = $show_ko_h) {
				$medhjos = " •";
				}  else if ($medhi = $show_hu_h) {
				$medhjos = " •";
				}  else if ($medhi = $show_mk_h) {
				$medhjos = " •";
				}  else if ($medhi = $show_ml_h) {
				$medhjos = " •";
				}  else if ($medhi = $show_mt_h) {
				$medhjos = " •";
				}  else if ($medhi = $show_nl_h) {
				$medhjos = " •";
				}  else if ($medhi = $show_ja_h) {
				$medhjos = " •";
				}  else if ($medhi = $show_no_h) {
				$medhjos = " •";
				}  else if ($medhi = $show_pl_h) {
				$medhjos = " •";
				}  else if ($medhi = $show_pt_h) {
				$medhjos = " •";
				}  else if ($medhi = $show_ro_h) {
				$medhjos = " •";
				}  else if ($medhi = $show_ru_h) {
				$medhjos = " •";
				}   else if ($medhi = $show_sk_h) {
				$medhjos = " •";
				}  else if ($medhi = $show_sl_h) {
				$medhjos = " •";
				}  else if ($medhi = $show_sq_h) {
				$medhjos = " •";
				}  else if ($medhi = $show_sr_h) {
				$medhjos = " •";
				}  else if ($medhi = $show_fi_h) {
				$medhjos = " •";
				}   else if ($medhi = $show_sv_h) {
				$medhjos = " •";
				}   else if ($medhi = $show_sw_h) {
				$medhjos = " •";
				}  else if ($medhi = $show_th_h) {
				$medhjos = " •";
				}  else if ($medhi = $show_tl_h) {
				$medhjos = " •";
				}  else if ($medhi = $show_tr_h) {
				$medhjos = " •";
				}  else if ($medhi = $show_uk_h) {
				$medhjos = " •";
				}  else if ($medhi = $show_vi_h) {
				$medhjos = " •";
				}  else if ($medhi = $show_yi_h) {
				$medhjos = " •";
				}  else if ($medhi = $show_zh_h) {
				$medhjos = " •";
				}   else if ($medhi = $show_zt_h) {
				$medhjos = " •";
				}  else {
				$medhjos = "</li><li>";
				} 
				
				
			$english = '<a lang="en" xml:lang="en" href="#">English</a>'.$medhjos.'
<a lang="af" xml:lang="af" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Caf&amp;u='.$url.'" rel="nofollow">Afrikaans</a>'.$medhjos.'  
<a lang="ar" xml:lang="ar" title="Araby" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Car&amp;u='.$url.'" rel="nofollow">العربية</a>'.$medhjos.'  
<a lang="be" xml:lang="be" title="Belaruskaya" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Cbe&amp;u='.$url.'" rel="nofollow">Беларуская</a>'.$medhjos.'  
<a lang="bg" xml:lang="bg" title="Bulgarski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Cbg&amp;u='.$url.'" rel="nofollow">Български</a>'.$medhjos.'  
<a lang="ca" xml:lang="ca" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Cca&amp;u='.$url.'" rel="nofollow">Català</a>'.$medhjos.'  
<a lang="cs" xml:lang="cs" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Ccs&amp;u='.$url.'" rel="nofollow">Česky</a>'.$medhjos.'  
<a lang="cy" xml:lang="cy" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Ccy&amp;u='.$url.'" rel="nofollow">Cymraeg</a>'.$medhjos.'  
<a lang="da" xml:lang="da" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Cda&amp;u='.$url.'" rel="nofollow">Dansk</a>'.$medhjos.'  
<a lang="de" xml:lang="de" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Cde&amp;u='.$url.'" rel="nofollow">Deutsch</a>'.$medhjos.'  
<a lang="et" xml:lang="et" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Cet&amp;u='.$url.'" rel="nofollow">Eesti</a>'.$medhjos.'  
<a lang="el" xml:lang="el" title="Ellenika" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Cel&amp;u='.$url.'" rel="nofollow">Ελληνικά</a>'.$medhjos.'  
<a lang="es" xml:lang="es" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Ces&amp;u='.$url.'" rel="nofollow">Español</a>'.$medhjos.'  
<a lang="fa" xml:lang="fa" title="Fārsī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Cfa&amp;u='.$url.'" rel="nofollow">فارسی</a>'.$medhjos.'  
<a lang="fr" xml:lang="fr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Cfr&amp;u='.$url.'" rel="nofollow">Français</a>'.$medhjos.'  
<a lang="ga" xml:lang="ga" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Cga&amp;u='.$url.'" rel="nofollow">Gaeilge</a>'.$medhjos.'  
<a lang="gl" xml:lang="gl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Cgl&amp;u='.$url.'" rel="nofollow">Galego</a>'.$medhjos.'  
<a lang="hi" xml:lang="hi" title="Hindī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Chi&amp;u='.$url.'" rel="nofollow">हिन्दी</a>'.$medhjos.'  
<a lang="hr" xml:lang="hr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Chr&amp;u='.$url.'" rel="nofollow">Hrvatski</a>'.$medhjos.'  
<a lang="id" xml:lang="id" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Cid&amp;u='.$url.'" rel="nofollow">Bahasa Indonesia</a>'.$medhjos.'  
<a lang="is" xml:lang="is" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Cis&amp;u='.$url.'" rel="nofollow">Íslenska</a>'.$medhjos.'  
<a lang="it" xml:lang="it" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Cit&amp;u='.$url.'" rel="nofollow">Italiano</a>'.$medhjos.'  
<a lang="he" xml:lang="he" title="‘Ivrit" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Che&amp;u='.$url.'" rel="nofollow">עברית</a>'.$medhjos.'  
<a lang="lv" xml:lang="lv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Clv&amp;u='.$url.'" rel="nofollow">Latviešu</a>'.$medhjos.'  
<a lang="lt" xml:lang="lt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Clt&amp;u='.$url.'" rel="nofollow">Lietuvių</a>'.$medhjos.'  
<a lang="ko" xml:lang="ko" title="Hangugeo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Cko&amp;u='.$url.'" rel="nofollow">한국어</a>'.$medhjos.'  
<a lang="hu" xml:lang="hu" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Chu&amp;u='.$url.'" rel="nofollow">Magyar</a>'.$medhjos.'  
<a lang="mk" xml:lang="mk" title="Makedonski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Cmk&amp;u='.$url.'" rel="nofollow">Македонски</a>'.$medhjos.'  
<a lang="ml" xml:lang="ml" title="Malayalam" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Cml&amp;u='.$url.'" rel="nofollow">മലയാളം</a>'.$medhjos.'  
<a lang="mt" xml:lang="mt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Cmt&amp;u='.$url.'" rel="nofollow">Malti</a>'.$medhjos.'  
<a lang="nl" xml:lang="nl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Cnl&amp;u='.$url.'" rel="nofollow">Nederlands</a>'.$medhjos.'  
<a lang="ja" xml:lang="ja" title="Nihongo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Cja&amp;u='.$url.'" rel="nofollow">日本語</a>'.$medhjos.'  
<a lang="no" xml:lang="no" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Cno&amp;u='.$url.'" rel="nofollow">Norsk (Bokmål)</a>'.$medhjos.'  
<a lang="pl" xml:lang="pl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Cpl&amp;u='.$url.'" rel="nofollow">Polski</a>'.$medhjos.'  
<a lang="pt" xml:lang="pt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Cpt&amp;u='.$url.'" rel="nofollow">Português</a>'.$medhjos.'  
<a lang="ro" xml:lang="ro" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Cro&amp;u='.$url.'" rel="nofollow">Română</a>'.$medhjos.'  
<a lang="ru" xml:lang="ru" title="Russkij" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Cru&amp;u='.$url.'" rel="nofollow">Русский</a>'.$medhjos.'  
<a lang="sk" xml:lang="sk" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Csk&amp;u='.$url.'" rel="nofollow">Slovenčina</a>'.$medhjos.'  
<a lang="sl" xml:lang="sl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Csl&amp;u='.$url.'" rel="nofollow">Slovenščina</a>'.$medhjos.'  
<a lang="sq" xml:lang="sq" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Csq&amp;u='.$url.'" rel="nofollow">Shqip</a>'.$medhjos.'  
<a lang="sr" xml:lang="sr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Csr&amp;u='.$url.'" rel="nofollow">Srpski</a>'.$medhjos.'  
<a lang="fi" xml:lang="fi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Cfi&amp;u='.$url.'" rel="nofollow">Suomi</a>'.$medhjos.'  
<a lang="sv" xml:lang="sv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Csv&amp;u='.$url.'" rel="nofollow">Svenska</a>'.$medhjos.'  
<a lang="sw" xml:lang="sw" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Csw&amp;u='.$url.'" rel="nofollow">Kiswahili</a>'.$medhjos.'  
<a lang="th" xml:lang="th" title="Thai" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Cth&amp;u='.$url.'" rel="nofollow">ไทย</a>'.$medhjos.'  
<a lang="tl" xml:lang="tl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Ctl&amp;u='.$url.'" rel="nofollow">Tagalog</a>'.$medhjos.'  
<a lang="tr" xml:lang="tr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Ctr&amp;u='.$url.'" rel="nofollow">Türkçe</a>'.$medhjos.'  
<a lang="uk" xml:lang="uk" title="Ukraïns’ka" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Cuk&amp;u='.$url.'" rel="nofollow">Українська</a>'.$medhjos.'  
<a lang="vi" xml:lang="vi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Cvi&amp;u='.$url.'" rel="nofollow">Tiếng Việt</a>'.$medhjos.'  
<a lang="yi" xml:lang="yi" title="Yidiš" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Cyi&amp;u='.$url.'" rel="nofollow">ייִדיש</a>.'.$medhjos.'  
<a lang="zh-CN" xml:lang="zh-CN" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Czh-CN&amp;u='.$url.'" rel="nofollow">中文</a> /
<a lang="zh-TW" xml:lang="zh-TW" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=en%7Czh-TW&amp;u='.$url.'" rel="nofollow">漢語</a>';
		$afrikaans = '<a lang="af" xml:lang="af" href="#">Afrikaans</a>'.$medhjos.'
<a lang="en" xml:lang="en" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Cen&amp;u='.$url.'" rel="nofollow">English</a>'.$medhjos.'
<a lang="ar" xml:lang="ar" title="Araby" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Car&amp;u='.$url.'" rel="nofollow">العربية</a>'.$medhjos.'  
<a lang="be" xml:lang="be" title="Belaruskaya" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Cbe&amp;u='.$url.'" rel="nofollow">Беларуская</a>'.$medhjos.'  
<a lang="bg" xml:lang="bg" title="Bulgarski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Cbg&amp;u='.$url.'" rel="nofollow">Български</a>'.$medhjos.'  
<a lang="ca" xml:lang="ca" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Cca&amp;u='.$url.'" rel="nofollow">Català</a>'.$medhjos.'  
<a lang="cs" xml:lang="cs" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Ccs&amp;u='.$url.'" rel="nofollow">Česky</a>'.$medhjos.'  
<a lang="cy" xml:lang="cy" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Ccy&amp;u='.$url.'" rel="nofollow">Cymraeg</a>'.$medhjos.'  
<a lang="da" xml:lang="da" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Cda&amp;u='.$url.'" rel="nofollow">Dansk</a>'.$medhjos.'  
<a lang="de" xml:lang="de" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Cde&amp;u='.$url.'" rel="nofollow">Deutsch</a>'.$medhjos.'  
<a lang="et" xml:lang="et" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Cet&amp;u='.$url.'" rel="nofollow">Eesti</a>'.$medhjos.'  
<a lang="el" xml:lang="el" title="Ellenika" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Cel&amp;u='.$url.'" rel="nofollow">Ελληνικά</a>'.$medhjos.'  
<a lang="es" xml:lang="es" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Ces&amp;u='.$url.'" rel="nofollow">Español</a>'.$medhjos.'  
<a lang="fa" xml:lang="fa" title="Fārsī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Cfa&amp;u='.$url.'" rel="nofollow">فارسی</a>'.$medhjos.'  
<a lang="fr" xml:lang="fr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Cfr&amp;u='.$url.'" rel="nofollow">Français</a>'.$medhjos.'  
<a lang="ga" xml:lang="ga" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Cga&amp;u='.$url.'" rel="nofollow">Gaeilge</a>'.$medhjos.'  
<a lang="gl" xml:lang="gl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Cgl&amp;u='.$url.'" rel="nofollow">Galego</a>'.$medhjos.'  
<a lang="hi" xml:lang="hi" title="Hindī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Chi&amp;u='.$url.'" rel="nofollow">हिन्दी</a>'.$medhjos.'  
<a lang="hr" xml:lang="hr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Chr&amp;u='.$url.'" rel="nofollow">Hrvatski</a>'.$medhjos.'  
<a lang="id" xml:lang="id" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Cid&amp;u='.$url.'" rel="nofollow">Bahasa Indonesia</a>'.$medhjos.'  
<a lang="is" xml:lang="is" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Cis&amp;u='.$url.'" rel="nofollow">Íslenska</a>'.$medhjos.'  
<a lang="it" xml:lang="it" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Cit&amp;u='.$url.'" rel="nofollow">Italiano</a>'.$medhjos.'  
<a lang="he" xml:lang="he" title="‘Ivrit" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Che&amp;u='.$url.'" rel="nofollow">עברית</a>'.$medhjos.'  
<a lang="lv" xml:lang="lv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Clv&amp;u='.$url.'" rel="nofollow">Latviešu</a>'.$medhjos.'  
<a lang="lt" xml:lang="lt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Clt&amp;u='.$url.'" rel="nofollow">Lietuvių</a>'.$medhjos.'  
<a lang="ko" xml:lang="ko" title="Hangugeo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Cko&amp;u='.$url.'" rel="nofollow">한국어</a>'.$medhjos.'  
<a lang="hu" xml:lang="hu" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Chu&amp;u='.$url.'" rel="nofollow">Magyar</a>'.$medhjos.'  
<a lang="mk" xml:lang="mk" title="Makedonski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Cmk&amp;u='.$url.'" rel="nofollow">Македонски</a>'.$medhjos.'  
<a lang="ml" xml:lang="ml" title="Malayalam" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Cml&amp;u='.$url.'" rel="nofollow">മലയാളം</a>'.$medhjos.'  
<a lang="mt" xml:lang="mt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Cmt&amp;u='.$url.'" rel="nofollow">Malti</a>'.$medhjos.'  
<a lang="nl" xml:lang="nl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Cnl&amp;u='.$url.'" rel="nofollow">Nederlands</a>'.$medhjos.'  
<a lang="ja" xml:lang="ja" title="Nihongo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Cja&amp;u='.$url.'" rel="nofollow">日本語</a>'.$medhjos.'  
<a lang="no" xml:lang="no" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Cno&amp;u='.$url.'" rel="nofollow">Norsk (Bokmål)</a>'.$medhjos.'  
<a lang="pl" xml:lang="pl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Cpl&amp;u='.$url.'" rel="nofollow">Polski</a>'.$medhjos.'  
<a lang="pt" xml:lang="pt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Cpt&amp;u='.$url.'" rel="nofollow">Português</a>'.$medhjos.'  
<a lang="ro" xml:lang="ro" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Cro&amp;u='.$url.'" rel="nofollow">Română</a>'.$medhjos.'  
<a lang="ru" xml:lang="ru" title="Russkij" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Cru&amp;u='.$url.'" rel="nofollow">Русский</a>'.$medhjos.'  
<a lang="sk" xml:lang="sk" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Csk&amp;u='.$url.'" rel="nofollow">Slovenčina</a>'.$medhjos.'  
<a lang="sl" xml:lang="sl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Csl&amp;u='.$url.'" rel="nofollow">Slovenščina</a>'.$medhjos.'  
<a lang="sq" xml:lang="sq" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Csq&amp;u='.$url.'" rel="nofollow">Shqip</a>'.$medhjos.'  
<a lang="sr" xml:lang="sr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Csr&amp;u='.$url.'" rel="nofollow">Srpski</a>'.$medhjos.'  
<a lang="fi" xml:lang="fi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Cfi&amp;u='.$url.'" rel="nofollow">Suomi</a>'.$medhjos.'  
<a lang="sv" xml:lang="sv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Csv&amp;u='.$url.'" rel="nofollow">Svenska</a>'.$medhjos.'  
<a lang="sw" xml:lang="sw" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Csw&amp;u='.$url.'" rel="nofollow">Kiswahili</a>'.$medhjos.'  
<a lang="th" xml:lang="th" title="Thai" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Cth&amp;u='.$url.'" rel="nofollow">ไทย</a>'.$medhjos.'  
<a lang="tl" xml:lang="tl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Ctl&amp;u='.$url.'" rel="nofollow">Tagalog</a>'.$medhjos.'  
<a lang="tr" xml:lang="tr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Ctr&amp;u='.$url.'" rel="nofollow">Türkçe</a>'.$medhjos.'  
<a lang="uk" xml:lang="uk" title="Ukraïns’ka" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Cuk&amp;u='.$url.'" rel="nofollow">Українська</a>'.$medhjos.'  
<a lang="vi" xml:lang="vi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Cvi&amp;u='.$url.'" rel="nofollow">Tiếng Việt</a>'.$medhjos.'  
<a lang="yi" xml:lang="yi" title="Yidiš" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Cyi&amp;u='.$url.'" rel="nofollow">ייִדיש</a>.'.$medhjos.'  
<a lang="zh-CN" xml:lang="zh-CN" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Czh-CN&amp;u='.$url.'" rel="nofollow">中文</a> /
<a lang="zh-TW" xml:lang="zh-TW" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=af%7Czh-TW&amp;u='.$url.'" rel="nofollow">漢語</a>';
				$araby = '<a lang="ar" xml:lang="ar" href="#">العربية</a>'.$medhjos.'
<a lang="en" xml:lang="en" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Cen&amp;u='.$url.'" rel="nofollow">English</a>'.$medhjos.'
<a lang="af" xml:lang="af" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Caf&amp;u='.$url.'" rel="nofollow">Afrikaans</a>'.$medhjos.'  
<a lang="be" xml:lang="be" title="Belaruskaya" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Cbe&amp;u='.$url.'" rel="nofollow">Беларуская</a>'.$medhjos.'  
<a lang="bg" xml:lang="bg" title="Bulgarski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Cbg&amp;u='.$url.'" rel="nofollow">Български</a>'.$medhjos.'  
<a lang="ca" xml:lang="ca" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Cca&amp;u='.$url.'" rel="nofollow">Català</a>'.$medhjos.'  
<a lang="cs" xml:lang="cs" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Ccs&amp;u='.$url.'" rel="nofollow">Česky</a>'.$medhjos.'  
<a lang="cy" xml:lang="cy" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Ccy&amp;u='.$url.'" rel="nofollow">Cymraeg</a>'.$medhjos.'  
<a lang="da" xml:lang="da" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Cda&amp;u='.$url.'" rel="nofollow">Dansk</a>'.$medhjos.'  
<a lang="de" xml:lang="de" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Cde&amp;u='.$url.'" rel="nofollow">Deutsch</a>'.$medhjos.'  
<a lang="et" xml:lang="et" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Cet&amp;u='.$url.'" rel="nofollow">Eesti</a>'.$medhjos.'  
<a lang="el" xml:lang="el" title="Ellenika" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Cel&amp;u='.$url.'" rel="nofollow">Ελληνικά</a>'.$medhjos.'  
<a lang="es" xml:lang="es" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Ces&amp;u='.$url.'" rel="nofollow">Español</a>'.$medhjos.'  
<a lang="fa" xml:lang="fa" title="Fārsī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Cfa&amp;u='.$url.'" rel="nofollow">فارسی</a>'.$medhjos.'  
<a lang="fr" xml:lang="fr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Cfr&amp;u='.$url.'" rel="nofollow">Français</a>'.$medhjos.'  
<a lang="ga" xml:lang="ga" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Cga&amp;u='.$url.'" rel="nofollow">Gaeilge</a>'.$medhjos.'  
<a lang="gl" xml:lang="gl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Cgl&amp;u='.$url.'" rel="nofollow">Galego</a>'.$medhjos.'  
<a lang="hi" xml:lang="hi" title="Hindī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Chi&amp;u='.$url.'" rel="nofollow">हिन्दी</a>'.$medhjos.'  
<a lang="hr" xml:lang="hr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Chr&amp;u='.$url.'" rel="nofollow">Hrvatski</a>'.$medhjos.'  
<a lang="id" xml:lang="id" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Cid&amp;u='.$url.'" rel="nofollow">Bahasa Indonesia</a>'.$medhjos.'  
<a lang="is" xml:lang="is" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Cis&amp;u='.$url.'" rel="nofollow">Íslenska</a>'.$medhjos.'  
<a lang="it" xml:lang="it" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Cit&amp;u='.$url.'" rel="nofollow">Italiano</a>'.$medhjos.'  
<a lang="he" xml:lang="he" title="‘Ivrit" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Che&amp;u='.$url.'" rel="nofollow">עברית</a>'.$medhjos.'  
<a lang="lv" xml:lang="lv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Clv&amp;u='.$url.'" rel="nofollow">Latviešu</a>'.$medhjos.'  
<a lang="lt" xml:lang="lt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Clt&amp;u='.$url.'" rel="nofollow">Lietuvių</a>'.$medhjos.'  
<a lang="ko" xml:lang="ko" title="Hangugeo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Cko&amp;u='.$url.'" rel="nofollow">한국어</a>'.$medhjos.'  
<a lang="hu" xml:lang="hu" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Chu&amp;u='.$url.'" rel="nofollow">Magyar</a>'.$medhjos.'  
<a lang="mk" xml:lang="mk" title="Makedonski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Cmk&amp;u='.$url.'" rel="nofollow">Македонски</a>'.$medhjos.'  
<a lang="ml" xml:lang="ml" title="Malayalam" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Cml&amp;u='.$url.'" rel="nofollow">മലയാളം</a>'.$medhjos.'  
<a lang="mt" xml:lang="mt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Cmt&amp;u='.$url.'" rel="nofollow">Malti</a>'.$medhjos.'  
<a lang="nl" xml:lang="nl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Cnl&amp;u='.$url.'" rel="nofollow">Nederlands</a>'.$medhjos.'  
<a lang="ja" xml:lang="ja" title="Nihongo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Cja&amp;u='.$url.'" rel="nofollow">日本語</a>'.$medhjos.'  
<a lang="no" xml:lang="no" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Cno&amp;u='.$url.'" rel="nofollow">Norsk (Bokmål)</a>'.$medhjos.'  
<a lang="pl" xml:lang="pl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Cpl&amp;u='.$url.'" rel="nofollow">Polski</a>'.$medhjos.'  
<a lang="pt" xml:lang="pt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Cpt&amp;u='.$url.'" rel="nofollow">Português</a>'.$medhjos.'  
<a lang="ro" xml:lang="ro" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Cro&amp;u='.$url.'" rel="nofollow">Română</a>'.$medhjos.'  
<a lang="ru" xml:lang="ru" title="Russkij" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Cru&amp;u='.$url.'" rel="nofollow">Русский</a>'.$medhjos.'  
<a lang="sk" xml:lang="sk" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Csk&amp;u='.$url.'" rel="nofollow">Slovenčina</a>'.$medhjos.'  
<a lang="sl" xml:lang="sl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Csl&amp;u='.$url.'" rel="nofollow">Slovenščina</a>'.$medhjos.'  
<a lang="sq" xml:lang="sq" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Csq&amp;u='.$url.'" rel="nofollow">Shqip</a>'.$medhjos.'  
<a lang="sr" xml:lang="sr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Csr&amp;u='.$url.'" rel="nofollow">Srpski</a>'.$medhjos.'  
<a lang="fi" xml:lang="fi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Cfi&amp;u='.$url.'" rel="nofollow">Suomi</a>'.$medhjos.'  
<a lang="sv" xml:lang="sv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Csv&amp;u='.$url.'" rel="nofollow">Svenska</a>'.$medhjos.'  
<a lang="sw" xml:lang="sw" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Csw&amp;u='.$url.'" rel="nofollow">Kiswahili</a>'.$medhjos.'  
<a lang="th" xml:lang="th" title="Thai" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Cth&amp;u='.$url.'" rel="nofollow">ไทย</a>'.$medhjos.'  
<a lang="tl" xml:lang="tl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Ctl&amp;u='.$url.'" rel="nofollow">Tagalog</a>'.$medhjos.'  
<a lang="tr" xml:lang="tr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Ctr&amp;u='.$url.'" rel="nofollow">Türkçe</a>'.$medhjos.'  
<a lang="uk" xml:lang="uk" title="Ukraïns’ka" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Cuk&amp;u='.$url.'" rel="nofollow">Українська</a>'.$medhjos.'  
<a lang="vi" xml:lang="vi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Cvi&amp;u='.$url.'" rel="nofollow">Tiếng Việt</a>'.$medhjos.'  
<a lang="yi" xml:lang="yi" title="Yidiš" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Cyi&amp;u='.$url.'" rel="nofollow">ייִדיש</a>.'.$medhjos.'  
<a lang="zh-CN" xml:lang="zh-CN" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Czh-CN&amp;u='.$url.'" rel="nofollow">中文</a> /
<a lang="zh-TW" xml:lang="zh-TW" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ar%7Czh-TW&amp;u='.$url.'" rel="nofollow">漢語</a>';
		$belaruskaya = '<a lang="be" xml:lang="be" href="#">Беларуская</a>'.$medhjos.'
<a lang="en" xml:lang="en" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Cen&amp;u='.$url.'" rel="nofollow">English</a>'.$medhjos.'
<a lang="af" xml:lang="af" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Caf&amp;u='.$url.'" rel="nofollow">Afrikaans</a>'.$medhjos.'  
<a lang="ar" xml:lang="ar" title="Araby" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Car&amp;u='.$url.'" rel="nofollow">العربية</a>'.$medhjos.'  
<a lang="bg" xml:lang="bg" title="Bulgarski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Cbg&amp;u='.$url.'" rel="nofollow">Български</a>'.$medhjos.'  
<a lang="ca" xml:lang="ca" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Cca&amp;u='.$url.'" rel="nofollow">Català</a>'.$medhjos.'  
<a lang="cs" xml:lang="cs" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Ccs&amp;u='.$url.'" rel="nofollow">Česky</a>'.$medhjos.'  
<a lang="cy" xml:lang="cy" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Ccy&amp;u='.$url.'" rel="nofollow">Cymraeg</a>'.$medhjos.'  
<a lang="da" xml:lang="da" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Cda&amp;u='.$url.'" rel="nofollow">Dansk</a>'.$medhjos.'  
<a lang="de" xml:lang="de" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Cde&amp;u='.$url.'" rel="nofollow">Deutsch</a>'.$medhjos.'  
<a lang="et" xml:lang="et" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Cet&amp;u='.$url.'" rel="nofollow">Eesti</a>'.$medhjos.'  
<a lang="el" xml:lang="el" title="Ellenika" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Cel&amp;u='.$url.'" rel="nofollow">Ελληνικά</a>'.$medhjos.'  
<a lang="es" xml:lang="es" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Ces&amp;u='.$url.'" rel="nofollow">Español</a>'.$medhjos.'  
<a lang="fa" xml:lang="fa" title="Fārsī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Cfa&amp;u='.$url.'" rel="nofollow">فارسی</a>'.$medhjos.'  
<a lang="fr" xml:lang="fr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Cfr&amp;u='.$url.'" rel="nofollow">Français</a>'.$medhjos.'  
<a lang="ga" xml:lang="ga" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Cga&amp;u='.$url.'" rel="nofollow">Gaeilge</a>'.$medhjos.'  
<a lang="gl" xml:lang="gl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Cgl&amp;u='.$url.'" rel="nofollow">Galego</a>'.$medhjos.'  
<a lang="hi" xml:lang="hi" title="Hindī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Chi&amp;u='.$url.'" rel="nofollow">हिन्दी</a>'.$medhjos.'  
<a lang="hr" xml:lang="hr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Chr&amp;u='.$url.'" rel="nofollow">Hrvatski</a>'.$medhjos.'  
<a lang="id" xml:lang="id" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Cid&amp;u='.$url.'" rel="nofollow">Bahasa Indonesia</a>'.$medhjos.'  
<a lang="is" xml:lang="is" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Cis&amp;u='.$url.'" rel="nofollow">Íslenska</a>'.$medhjos.'  
<a lang="it" xml:lang="it" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Cit&amp;u='.$url.'" rel="nofollow">Italiano</a>'.$medhjos.'  
<a lang="he" xml:lang="he" title="‘Ivrit" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Che&amp;u='.$url.'" rel="nofollow">עברית</a>'.$medhjos.'  
<a lang="lv" xml:lang="lv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Clv&amp;u='.$url.'" rel="nofollow">Latviešu</a>'.$medhjos.'  
<a lang="lt" xml:lang="lt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Clt&amp;u='.$url.'" rel="nofollow">Lietuvių</a>'.$medhjos.'  
<a lang="ko" xml:lang="ko" title="Hangugeo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Cko&amp;u='.$url.'" rel="nofollow">한국어</a>'.$medhjos.'  
<a lang="hu" xml:lang="hu" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Chu&amp;u='.$url.'" rel="nofollow">Magyar</a>'.$medhjos.'  
<a lang="mk" xml:lang="mk" title="Makedonski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Cmk&amp;u='.$url.'" rel="nofollow">Македонски</a>'.$medhjos.'  
<a lang="ml" xml:lang="ml" title="Malayalam" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Cml&amp;u='.$url.'" rel="nofollow">മലയാളം</a>'.$medhjos.'  
<a lang="mt" xml:lang="mt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Cmt&amp;u='.$url.'" rel="nofollow">Malti</a>'.$medhjos.'  
<a lang="nl" xml:lang="nl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Cnl&amp;u='.$url.'" rel="nofollow">Nederlands</a>'.$medhjos.'  
<a lang="ja" xml:lang="ja" title="Nihongo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Cja&amp;u='.$url.'" rel="nofollow">日本語</a>'.$medhjos.'  
<a lang="no" xml:lang="no" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Cno&amp;u='.$url.'" rel="nofollow">Norsk (Bokmål)</a>'.$medhjos.'  
<a lang="pl" xml:lang="pl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Cpl&amp;u='.$url.'" rel="nofollow">Polski</a>'.$medhjos.'  
<a lang="pt" xml:lang="pt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Cpt&amp;u='.$url.'" rel="nofollow">Português</a>'.$medhjos.'  
<a lang="ro" xml:lang="ro" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Cro&amp;u='.$url.'" rel="nofollow">Română</a>'.$medhjos.'  
<a lang="ru" xml:lang="ru" title="Russkij" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Cru&amp;u='.$url.'" rel="nofollow">Русский</a>'.$medhjos.'  
<a lang="sk" xml:lang="sk" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Csk&amp;u='.$url.'" rel="nofollow">Slovenčina</a>'.$medhjos.'  
<a lang="sl" xml:lang="sl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Csl&amp;u='.$url.'" rel="nofollow">Slovenščina</a>'.$medhjos.'  
<a lang="sq" xml:lang="sq" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Csq&amp;u='.$url.'" rel="nofollow">Shqip</a>'.$medhjos.'  
<a lang="sr" xml:lang="sr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Csr&amp;u='.$url.'" rel="nofollow">Srpski</a>'.$medhjos.'  
<a lang="fi" xml:lang="fi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Cfi&amp;u='.$url.'" rel="nofollow">Suomi</a>'.$medhjos.'  
<a lang="sv" xml:lang="sv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Csv&amp;u='.$url.'" rel="nofollow">Svenska</a>'.$medhjos.'  
<a lang="sw" xml:lang="sw" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Csw&amp;u='.$url.'" rel="nofollow">Kiswahili</a>'.$medhjos.'  
<a lang="th" xml:lang="th" title="Thai" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Cth&amp;u='.$url.'" rel="nofollow">ไทย</a>'.$medhjos.'  
<a lang="tl" xml:lang="tl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Ctl&amp;u='.$url.'" rel="nofollow">Tagalog</a>'.$medhjos.'  
<a lang="tr" xml:lang="tr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Ctr&amp;u='.$url.'" rel="nofollow">Türkçe</a>'.$medhjos.'  
<a lang="uk" xml:lang="uk" title="Ukraïns’ka" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Cuk&amp;u='.$url.'" rel="nofollow">Українська</a>'.$medhjos.'  
<a lang="vi" xml:lang="vi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Cvi&amp;u='.$url.'" rel="nofollow">Tiếng Việt</a>'.$medhjos.'  
<a lang="yi" xml:lang="yi" title="Yidiš" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Cyi&amp;u='.$url.'" rel="nofollow">ייִדיש</a>.'.$medhjos.'  
<a lang="zh-CN" xml:lang="zh-CN" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Czh-CN&amp;u='.$url.'" rel="nofollow">中文</a> /
<a lang="zh-TW" xml:lang="zh-TW" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=be%7Czh-TW&amp;u='.$url.'" rel="nofollow">漢語</a>';
		$bulgarski = '<a lang="bg" xml:lang="bg" href="#">Български</a>'.$medhjos.'
<a lang="en" xml:lang="en" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Cen&amp;u='.$url.'" rel="nofollow">English</a>'.$medhjos.'
<a lang="af" xml:lang="af" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Caf&amp;u='.$url.'" rel="nofollow">Afrikaans</a>'.$medhjos.'  
<a lang="ar" xml:lang="ar" title="Araby" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Car&amp;u='.$url.'" rel="nofollow">العربية</a>'.$medhjos.'  
<a lang="be" xml:lang="be" title="Belaruskaya" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Cbe&amp;u='.$url.'" rel="nofollow">Беларуская</a>'.$medhjos.'  
<a lang="ca" xml:lang="ca" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Cca&amp;u='.$url.'" rel="nofollow">Català</a>'.$medhjos.'  
<a lang="cs" xml:lang="cs" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Ccs&amp;u='.$url.'" rel="nofollow">Česky</a>'.$medhjos.'  
<a lang="cy" xml:lang="cy" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Ccy&amp;u='.$url.'" rel="nofollow">Cymraeg</a>'.$medhjos.'  
<a lang="da" xml:lang="da" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Cda&amp;u='.$url.'" rel="nofollow">Dansk</a>'.$medhjos.'  
<a lang="de" xml:lang="de" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Cde&amp;u='.$url.'" rel="nofollow">Deutsch</a>'.$medhjos.'  
<a lang="et" xml:lang="et" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Cet&amp;u='.$url.'" rel="nofollow">Eesti</a>'.$medhjos.'  
<a lang="el" xml:lang="el" title="Ellenika" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Cel&amp;u='.$url.'" rel="nofollow">Ελληνικά</a>'.$medhjos.'  
<a lang="es" xml:lang="es" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Ces&amp;u='.$url.'" rel="nofollow">Español</a>'.$medhjos.'  
<a lang="fa" xml:lang="fa" title="Fārsī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Cfa&amp;u='.$url.'" rel="nofollow">فارسی</a>'.$medhjos.'  
<a lang="fr" xml:lang="fr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Cfr&amp;u='.$url.'" rel="nofollow">Français</a>'.$medhjos.'  
<a lang="ga" xml:lang="ga" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Cga&amp;u='.$url.'" rel="nofollow">Gaeilge</a>'.$medhjos.'  
<a lang="gl" xml:lang="gl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Cgl&amp;u='.$url.'" rel="nofollow">Galego</a>'.$medhjos.'  
<a lang="hi" xml:lang="hi" title="Hindī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Chi&amp;u='.$url.'" rel="nofollow">हिन्दी</a>'.$medhjos.'  
<a lang="hr" xml:lang="hr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Chr&amp;u='.$url.'" rel="nofollow">Hrvatski</a>'.$medhjos.'  
<a lang="id" xml:lang="id" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Cid&amp;u='.$url.'" rel="nofollow">Bahasa Indonesia</a>'.$medhjos.'  
<a lang="is" xml:lang="is" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Cis&amp;u='.$url.'" rel="nofollow">Íslenska</a>'.$medhjos.'  
<a lang="it" xml:lang="it" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Cit&amp;u='.$url.'" rel="nofollow">Italiano</a>'.$medhjos.'  
<a lang="he" xml:lang="he" title="‘Ivrit" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Che&amp;u='.$url.'" rel="nofollow">עברית</a>'.$medhjos.'  
<a lang="lv" xml:lang="lv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Clv&amp;u='.$url.'" rel="nofollow">Latviešu</a>'.$medhjos.'  
<a lang="lt" xml:lang="lt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Clt&amp;u='.$url.'" rel="nofollow">Lietuvių</a>'.$medhjos.'  
<a lang="ko" xml:lang="ko" title="Hangugeo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Cko&amp;u='.$url.'" rel="nofollow">한국어</a>'.$medhjos.'  
<a lang="hu" xml:lang="hu" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Chu&amp;u='.$url.'" rel="nofollow">Magyar</a>'.$medhjos.'  
<a lang="mk" xml:lang="mk" title="Makedonski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Cmk&amp;u='.$url.'" rel="nofollow">Македонски</a>'.$medhjos.'  
<a lang="ml" xml:lang="ml" title="Malayalam" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Cml&amp;u='.$url.'" rel="nofollow">മലയാളം</a>'.$medhjos.'  
<a lang="mt" xml:lang="mt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Cmt&amp;u='.$url.'" rel="nofollow">Malti</a>'.$medhjos.'  
<a lang="nl" xml:lang="nl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Cnl&amp;u='.$url.'" rel="nofollow">Nederlands</a>'.$medhjos.'  
<a lang="ja" xml:lang="ja" title="Nihongo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Cja&amp;u='.$url.'" rel="nofollow">日本語</a>'.$medhjos.'  
<a lang="no" xml:lang="no" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Cno&amp;u='.$url.'" rel="nofollow">Norsk (Bokmål)</a>'.$medhjos.'  
<a lang="pl" xml:lang="pl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Cpl&amp;u='.$url.'" rel="nofollow">Polski</a>'.$medhjos.'  
<a lang="pt" xml:lang="pt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Cpt&amp;u='.$url.'" rel="nofollow">Português</a>'.$medhjos.'  
<a lang="ro" xml:lang="ro" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Cro&amp;u='.$url.'" rel="nofollow">Română</a>'.$medhjos.'  
<a lang="ru" xml:lang="ru" title="Russkij" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Cru&amp;u='.$url.'" rel="nofollow">Русский</a>'.$medhjos.'  
<a lang="sk" xml:lang="sk" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Csk&amp;u='.$url.'" rel="nofollow">Slovenčina</a>'.$medhjos.'  
<a lang="sl" xml:lang="sl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Csl&amp;u='.$url.'" rel="nofollow">Slovenščina</a>'.$medhjos.'  
<a lang="sq" xml:lang="sq" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Csq&amp;u='.$url.'" rel="nofollow">Shqip</a>'.$medhjos.'  
<a lang="sr" xml:lang="sr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Csr&amp;u='.$url.'" rel="nofollow">Srpski</a>'.$medhjos.'  
<a lang="fi" xml:lang="fi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Cfi&amp;u='.$url.'" rel="nofollow">Suomi</a>'.$medhjos.'  
<a lang="sv" xml:lang="sv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Csv&amp;u='.$url.'" rel="nofollow">Svenska</a>'.$medhjos.'  
<a lang="sw" xml:lang="sw" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Csw&amp;u='.$url.'" rel="nofollow">Kiswahili</a>'.$medhjos.'  
<a lang="th" xml:lang="th" title="Thai" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Cth&amp;u='.$url.'" rel="nofollow">ไทย</a>'.$medhjos.'  
<a lang="tl" xml:lang="tl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Ctl&amp;u='.$url.'" rel="nofollow">Tagalog</a>'.$medhjos.'  
<a lang="tr" xml:lang="tr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Ctr&amp;u='.$url.'" rel="nofollow">Türkçe</a>'.$medhjos.'  
<a lang="uk" xml:lang="uk" title="Ukraïns’ka" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Cuk&amp;u='.$url.'" rel="nofollow">Українська</a>'.$medhjos.'  
<a lang="vi" xml:lang="vi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Cvi&amp;u='.$url.'" rel="nofollow">Tiếng Việt</a>'.$medhjos.'  
<a lang="yi" xml:lang="yi" title="Yidiš" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Cyi&amp;u='.$url.'" rel="nofollow">ייִדיש</a>.'.$medhjos.'  
<a lang="zh-CN" xml:lang="zh-CN" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Czh-CN&amp;u='.$url.'" rel="nofollow">中文</a> /
<a lang="zh-TW" xml:lang="zh-TW" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=bg%7Czh-TW&amp;u='.$url.'" rel="nofollow">漢語</a>';
		$catala = '<a lang="ca" xml:lang="ca" href="#">Català</a>'.$medhjos.'
<a lang="en" xml:lang="en" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Cen&amp;u='.$url.'" rel="nofollow">English</a>'.$medhjos.'
<a lang="af" xml:lang="af" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Caf&amp;u='.$url.'" rel="nofollow">Afrikaans</a>'.$medhjos.'  
<a lang="ar" xml:lang="ar" title="Araby" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Car&amp;u='.$url.'" rel="nofollow">العربية</a>'.$medhjos.'  
<a lang="be" xml:lang="be" title="Belaruskaya" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Cbe&amp;u='.$url.'" rel="nofollow">Беларуская</a>'.$medhjos.'  
<a lang="bg" xml:lang="bg" title="Bulgarski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Cbg&amp;u='.$url.'" rel="nofollow">Български</a>'.$medhjos.'  
<a lang="cs" xml:lang="cs" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Ccs&amp;u='.$url.'" rel="nofollow">Česky</a>'.$medhjos.'  
<a lang="cy" xml:lang="cy" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Ccy&amp;u='.$url.'" rel="nofollow">Cymraeg</a>'.$medhjos.'  
<a lang="da" xml:lang="da" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Cda&amp;u='.$url.'" rel="nofollow">Dansk</a>'.$medhjos.'  
<a lang="de" xml:lang="de" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Cde&amp;u='.$url.'" rel="nofollow">Deutsch</a>'.$medhjos.'  
<a lang="et" xml:lang="et" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Cet&amp;u='.$url.'" rel="nofollow">Eesti</a>'.$medhjos.'  
<a lang="el" xml:lang="el" title="Ellenika" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Cel&amp;u='.$url.'" rel="nofollow">Ελληνικά</a>'.$medhjos.'  
<a lang="es" xml:lang="es" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Ces&amp;u='.$url.'" rel="nofollow">Español</a>'.$medhjos.'  
<a lang="fa" xml:lang="fa" title="Fārsī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Cfa&amp;u='.$url.'" rel="nofollow">فارسی</a>'.$medhjos.'  
<a lang="fr" xml:lang="fr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Cfr&amp;u='.$url.'" rel="nofollow">Français</a>'.$medhjos.'  
<a lang="ga" xml:lang="ga" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Cga&amp;u='.$url.'" rel="nofollow">Gaeilge</a>'.$medhjos.'  
<a lang="gl" xml:lang="gl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Cgl&amp;u='.$url.'" rel="nofollow">Galego</a>'.$medhjos.'  
<a lang="hi" xml:lang="hi" title="Hindī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Chi&amp;u='.$url.'" rel="nofollow">हिन्दी</a>'.$medhjos.'  
<a lang="hr" xml:lang="hr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Chr&amp;u='.$url.'" rel="nofollow">Hrvatski</a>'.$medhjos.'  
<a lang="id" xml:lang="id" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Cid&amp;u='.$url.'" rel="nofollow">Bahasa Indonesia</a>'.$medhjos.'  
<a lang="is" xml:lang="is" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Cis&amp;u='.$url.'" rel="nofollow">Íslenska</a>'.$medhjos.'  
<a lang="it" xml:lang="it" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Cit&amp;u='.$url.'" rel="nofollow">Italiano</a>'.$medhjos.'  
<a lang="he" xml:lang="he" title="‘Ivrit" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Che&amp;u='.$url.'" rel="nofollow">עברית</a>'.$medhjos.'  
<a lang="lv" xml:lang="lv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Clv&amp;u='.$url.'" rel="nofollow">Latviešu</a>'.$medhjos.'  
<a lang="lt" xml:lang="lt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Clt&amp;u='.$url.'" rel="nofollow">Lietuvių</a>'.$medhjos.'  
<a lang="ko" xml:lang="ko" title="Hangugeo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Cko&amp;u='.$url.'" rel="nofollow">한국어</a>'.$medhjos.'  
<a lang="hu" xml:lang="hu" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Chu&amp;u='.$url.'" rel="nofollow">Magyar</a>'.$medhjos.'  
<a lang="mk" xml:lang="mk" title="Makedonski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Cmk&amp;u='.$url.'" rel="nofollow">Македонски</a>'.$medhjos.'  
<a lang="ml" xml:lang="ml" title="Malayalam" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Cml&amp;u='.$url.'" rel="nofollow">മലയാളം</a>'.$medhjos.'  
<a lang="mt" xml:lang="mt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Cmt&amp;u='.$url.'" rel="nofollow">Malti</a>'.$medhjos.'  
<a lang="nl" xml:lang="nl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Cnl&amp;u='.$url.'" rel="nofollow">Nederlands</a>'.$medhjos.'  
<a lang="ja" xml:lang="ja" title="Nihongo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Cja&amp;u='.$url.'" rel="nofollow">日本語</a>'.$medhjos.'  
<a lang="no" xml:lang="no" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Cno&amp;u='.$url.'" rel="nofollow">Norsk (Bokmål)</a>'.$medhjos.'  
<a lang="pl" xml:lang="pl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Cpl&amp;u='.$url.'" rel="nofollow">Polski</a>'.$medhjos.'  
<a lang="pt" xml:lang="pt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Cpt&amp;u='.$url.'" rel="nofollow">Português</a>'.$medhjos.'  
<a lang="ro" xml:lang="ro" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Cro&amp;u='.$url.'" rel="nofollow">Română</a>'.$medhjos.'  
<a lang="ru" xml:lang="ru" title="Russkij" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Cru&amp;u='.$url.'" rel="nofollow">Русский</a>'.$medhjos.'  
<a lang="sk" xml:lang="sk" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Csk&amp;u='.$url.'" rel="nofollow">Slovenčina</a>'.$medhjos.'  
<a lang="sl" xml:lang="sl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Csl&amp;u='.$url.'" rel="nofollow">Slovenščina</a>'.$medhjos.'  
<a lang="sq" xml:lang="sq" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Csq&amp;u='.$url.'" rel="nofollow">Shqip</a>'.$medhjos.'  
<a lang="sr" xml:lang="sr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Csr&amp;u='.$url.'" rel="nofollow">Srpski</a>'.$medhjos.'  
<a lang="fi" xml:lang="fi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Cfi&amp;u='.$url.'" rel="nofollow">Suomi</a>'.$medhjos.'  
<a lang="sv" xml:lang="sv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Csv&amp;u='.$url.'" rel="nofollow">Svenska</a>'.$medhjos.'  
<a lang="sw" xml:lang="sw" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Csw&amp;u='.$url.'" rel="nofollow">Kiswahili</a>'.$medhjos.'  
<a lang="th" xml:lang="th" title="Thai" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Cth&amp;u='.$url.'" rel="nofollow">ไทย</a>'.$medhjos.'  
<a lang="tl" xml:lang="tl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Ctl&amp;u='.$url.'" rel="nofollow">Tagalog</a>'.$medhjos.'  
<a lang="tr" xml:lang="tr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Ctr&amp;u='.$url.'" rel="nofollow">Türkçe</a>'.$medhjos.'  
<a lang="uk" xml:lang="uk" title="Ukraïns’ka" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Cuk&amp;u='.$url.'" rel="nofollow">Українська</a>'.$medhjos.'  
<a lang="vi" xml:lang="vi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Cvi&amp;u='.$url.'" rel="nofollow">Tiếng Việt</a>'.$medhjos.'  
<a lang="yi" xml:lang="yi" title="Yidiš" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Cyi&amp;u='.$url.'" rel="nofollow">ייִדיש</a>.'.$medhjos.'  
<a lang="zh-CN" xml:lang="zh-CN" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Czh-CN&amp;u='.$url.'" rel="nofollow">中文</a> /
<a lang="zh-TW" xml:lang="zh-TW" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ca%7Czh-TW&amp;u='.$url.'" rel="nofollow">漢語</a>';
		$cesky = '<a lang="cs" xml:lang="cs" href="#">Česky</a>'.$medhjos.'
<a lang="en" xml:lang="en" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Cen&amp;u='.$url.'" rel="nofollow">English</a>'.$medhjos.'
<a lang="af" xml:lang="af" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Caf&amp;u='.$url.'" rel="nofollow">Afrikaans</a>'.$medhjos.'  
<a lang="ar" xml:lang="ar" title="Araby" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Car&amp;u='.$url.'" rel="nofollow">العربية</a>'.$medhjos.'  
<a lang="be" xml:lang="be" title="Belaruskaya" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Cbe&amp;u='.$url.'" rel="nofollow">Беларуская</a>'.$medhjos.'  
<a lang="bg" xml:lang="bg" title="Bulgarski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Cbg&amp;u='.$url.'" rel="nofollow">Български</a>'.$medhjos.'  
<a lang="ca" xml:lang="ca" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Cca&amp;u='.$url.'" rel="nofollow">Català</a>'.$medhjos.'  
<a lang="cy" xml:lang="cy" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Ccy&amp;u='.$url.'" rel="nofollow">Cymraeg</a>'.$medhjos.'  
<a lang="da" xml:lang="da" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Cda&amp;u='.$url.'" rel="nofollow">Dansk</a>'.$medhjos.'  
<a lang="de" xml:lang="de" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Cde&amp;u='.$url.'" rel="nofollow">Deutsch</a>'.$medhjos.'  
<a lang="et" xml:lang="et" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Cet&amp;u='.$url.'" rel="nofollow">Eesti</a>'.$medhjos.'  
<a lang="el" xml:lang="el" title="Ellenika" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Cel&amp;u='.$url.'" rel="nofollow">Ελληνικά</a>'.$medhjos.'  
<a lang="es" xml:lang="es" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Ces&amp;u='.$url.'" rel="nofollow">Español</a>'.$medhjos.'  
<a lang="fa" xml:lang="fa" title="Fārsī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Cfa&amp;u='.$url.'" rel="nofollow">فارسی</a>'.$medhjos.'  
<a lang="fr" xml:lang="fr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Cfr&amp;u='.$url.'" rel="nofollow">Français</a>'.$medhjos.'  
<a lang="ga" xml:lang="ga" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Cga&amp;u='.$url.'" rel="nofollow">Gaeilge</a>'.$medhjos.'  
<a lang="gl" xml:lang="gl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Cgl&amp;u='.$url.'" rel="nofollow">Galego</a>'.$medhjos.'  
<a lang="hi" xml:lang="hi" title="Hindī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Chi&amp;u='.$url.'" rel="nofollow">हिन्दी</a>'.$medhjos.'  
<a lang="hr" xml:lang="hr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Chr&amp;u='.$url.'" rel="nofollow">Hrvatski</a>'.$medhjos.'  
<a lang="id" xml:lang="id" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Cid&amp;u='.$url.'" rel="nofollow">Bahasa Indonesia</a>'.$medhjos.'  
<a lang="is" xml:lang="is" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Cis&amp;u='.$url.'" rel="nofollow">Íslenska</a>'.$medhjos.'  
<a lang="it" xml:lang="it" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Cit&amp;u='.$url.'" rel="nofollow">Italiano</a>'.$medhjos.'  
<a lang="he" xml:lang="he" title="‘Ivrit" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Che&amp;u='.$url.'" rel="nofollow">עברית</a>'.$medhjos.'  
<a lang="lv" xml:lang="lv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Clv&amp;u='.$url.'" rel="nofollow">Latviešu</a>'.$medhjos.'  
<a lang="lt" xml:lang="lt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Clt&amp;u='.$url.'" rel="nofollow">Lietuvių</a>'.$medhjos.'  
<a lang="ko" xml:lang="ko" title="Hangugeo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Cko&amp;u='.$url.'" rel="nofollow">한국어</a>'.$medhjos.'  
<a lang="hu" xml:lang="hu" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Chu&amp;u='.$url.'" rel="nofollow">Magyar</a>'.$medhjos.'  
<a lang="mk" xml:lang="mk" title="Makedonski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Cmk&amp;u='.$url.'" rel="nofollow">Македонски</a>'.$medhjos.'  
<a lang="ml" xml:lang="ml" title="Malayalam" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Cml&amp;u='.$url.'" rel="nofollow">മലയാളം</a>'.$medhjos.'  
<a lang="mt" xml:lang="mt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Cmt&amp;u='.$url.'" rel="nofollow">Malti</a>'.$medhjos.'  
<a lang="nl" xml:lang="nl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Cnl&amp;u='.$url.'" rel="nofollow">Nederlands</a>'.$medhjos.'  
<a lang="ja" xml:lang="ja" title="Nihongo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Cja&amp;u='.$url.'" rel="nofollow">日本語</a>'.$medhjos.'  
<a lang="no" xml:lang="no" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Cno&amp;u='.$url.'" rel="nofollow">Norsk (Bokmål)</a>'.$medhjos.'  
<a lang="pl" xml:lang="pl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Cpl&amp;u='.$url.'" rel="nofollow">Polski</a>'.$medhjos.'  
<a lang="pt" xml:lang="pt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Cpt&amp;u='.$url.'" rel="nofollow">Português</a>'.$medhjos.'  
<a lang="ro" xml:lang="ro" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Cro&amp;u='.$url.'" rel="nofollow">Română</a>'.$medhjos.'  
<a lang="ru" xml:lang="ru" title="Russkij" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Cru&amp;u='.$url.'" rel="nofollow">Русский</a>'.$medhjos.'  
<a lang="sk" xml:lang="sk" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Csk&amp;u='.$url.'" rel="nofollow">Slovenčina</a>'.$medhjos.'  
<a lang="sl" xml:lang="sl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Csl&amp;u='.$url.'" rel="nofollow">Slovenščina</a>'.$medhjos.'  
<a lang="sq" xml:lang="sq" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Csq&amp;u='.$url.'" rel="nofollow">Shqip</a>'.$medhjos.'  
<a lang="sr" xml:lang="sr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Csr&amp;u='.$url.'" rel="nofollow">Srpski</a>'.$medhjos.'  
<a lang="fi" xml:lang="fi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Cfi&amp;u='.$url.'" rel="nofollow">Suomi</a>'.$medhjos.'  
<a lang="sv" xml:lang="sv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Csv&amp;u='.$url.'" rel="nofollow">Svenska</a>'.$medhjos.'  
<a lang="sw" xml:lang="sw" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Csw&amp;u='.$url.'" rel="nofollow">Kiswahili</a>'.$medhjos.'  
<a lang="th" xml:lang="th" title="Thai" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Cth&amp;u='.$url.'" rel="nofollow">ไทย</a>'.$medhjos.'  
<a lang="tl" xml:lang="tl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Ctl&amp;u='.$url.'" rel="nofollow">Tagalog</a>'.$medhjos.'  
<a lang="tr" xml:lang="tr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Ctr&amp;u='.$url.'" rel="nofollow">Türkçe</a>'.$medhjos.'  
<a lang="uk" xml:lang="uk" title="Ukraïns’ka" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Cuk&amp;u='.$url.'" rel="nofollow">Українська</a>'.$medhjos.'  
<a lang="vi" xml:lang="vi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Cvi&amp;u='.$url.'" rel="nofollow">Tiếng Việt</a>'.$medhjos.'  
<a lang="yi" xml:lang="yi" title="Yidiš" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Cyi&amp;u='.$url.'" rel="nofollow">ייִדיש</a>.'.$medhjos.'  
<a lang="zh-CN" xml:lang="zh-CN" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Czh-CN&amp;u='.$url.'" rel="nofollow">中文</a> /
<a lang="zh-TW" xml:lang="zh-TW" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cs%7Czh-TW&amp;u='.$url.'" rel="nofollow">漢語</a>';
		$cymraeg = '<a lang="cy" xml:lang="cy" href="#">Cymraeg</a>'.$medhjos.'
<a lang="en" xml:lang="en" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Cen&amp;u='.$url.'" rel="nofollow">English</a>'.$medhjos.'
<a lang="af" xml:lang="af" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Caf&amp;u='.$url.'" rel="nofollow">Afrikaans</a>'.$medhjos.'  
<a lang="ar" xml:lang="ar" title="Araby" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Car&amp;u='.$url.'" rel="nofollow">العربية</a>'.$medhjos.'  
<a lang="be" xml:lang="be" title="Belaruskaya" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Cbe&amp;u='.$url.'" rel="nofollow">Беларуская</a>'.$medhjos.'  
<a lang="bg" xml:lang="bg" title="Bulgarski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Cbg&amp;u='.$url.'" rel="nofollow">Български</a>'.$medhjos.'  
<a lang="ca" xml:lang="ca" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Cca&amp;u='.$url.'" rel="nofollow">Català</a>'.$medhjos.'  
<a lang="cs" xml:lang="cs" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Ccs&amp;u='.$url.'" rel="nofollow">Česky</a>'.$medhjos.'  
<a lang="da" xml:lang="da" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Cda&amp;u='.$url.'" rel="nofollow">Dansk</a>'.$medhjos.'  
<a lang="de" xml:lang="de" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Cde&amp;u='.$url.'" rel="nofollow">Deutsch</a>'.$medhjos.'  
<a lang="et" xml:lang="et" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Cet&amp;u='.$url.'" rel="nofollow">Eesti</a>'.$medhjos.'  
<a lang="el" xml:lang="el" title="Ellenika" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Cel&amp;u='.$url.'" rel="nofollow">Ελληνικά</a>'.$medhjos.'  
<a lang="es" xml:lang="es" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Ces&amp;u='.$url.'" rel="nofollow">Español</a>'.$medhjos.'  
<a lang="fa" xml:lang="fa" title="Fārsī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Cfa&amp;u='.$url.'" rel="nofollow">فارسی</a>'.$medhjos.'  
<a lang="fr" xml:lang="fr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Cfr&amp;u='.$url.'" rel="nofollow">Français</a>'.$medhjos.'  
<a lang="ga" xml:lang="ga" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Cga&amp;u='.$url.'" rel="nofollow">Gaeilge</a>'.$medhjos.'  
<a lang="gl" xml:lang="gl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Cgl&amp;u='.$url.'" rel="nofollow">Galego</a>'.$medhjos.'  
<a lang="hi" xml:lang="hi" title="Hindī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Chi&amp;u='.$url.'" rel="nofollow">हिन्दी</a>'.$medhjos.'  
<a lang="hr" xml:lang="hr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Chr&amp;u='.$url.'" rel="nofollow">Hrvatski</a>'.$medhjos.'  
<a lang="id" xml:lang="id" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Cid&amp;u='.$url.'" rel="nofollow">Bahasa Indonesia</a>'.$medhjos.'  
<a lang="is" xml:lang="is" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Cis&amp;u='.$url.'" rel="nofollow">Íslenska</a>'.$medhjos.'  
<a lang="it" xml:lang="it" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Cit&amp;u='.$url.'" rel="nofollow">Italiano</a>'.$medhjos.'  
<a lang="he" xml:lang="he" title="‘Ivrit" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Che&amp;u='.$url.'" rel="nofollow">עברית</a>'.$medhjos.'  
<a lang="lv" xml:lang="lv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Clv&amp;u='.$url.'" rel="nofollow">Latviešu</a>'.$medhjos.'  
<a lang="lt" xml:lang="lt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Clt&amp;u='.$url.'" rel="nofollow">Lietuvių</a>'.$medhjos.'  
<a lang="ko" xml:lang="ko" title="Hangugeo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Cko&amp;u='.$url.'" rel="nofollow">한국어</a>'.$medhjos.'  
<a lang="hu" xml:lang="hu" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Chu&amp;u='.$url.'" rel="nofollow">Magyar</a>'.$medhjos.'  
<a lang="mk" xml:lang="mk" title="Makedonski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Cmk&amp;u='.$url.'" rel="nofollow">Македонски</a>'.$medhjos.'  
<a lang="ml" xml:lang="ml" title="Malayalam" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Cml&amp;u='.$url.'" rel="nofollow">മലയാളം</a>'.$medhjos.'  
<a lang="mt" xml:lang="mt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Cmt&amp;u='.$url.'" rel="nofollow">Malti</a>'.$medhjos.'  
<a lang="nl" xml:lang="nl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Cnl&amp;u='.$url.'" rel="nofollow">Nederlands</a>'.$medhjos.'  
<a lang="ja" xml:lang="ja" title="Nihongo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Cja&amp;u='.$url.'" rel="nofollow">日本語</a>'.$medhjos.'  
<a lang="no" xml:lang="no" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Cno&amp;u='.$url.'" rel="nofollow">Norsk (Bokmål)</a>'.$medhjos.'  
<a lang="pl" xml:lang="pl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Cpl&amp;u='.$url.'" rel="nofollow">Polski</a>'.$medhjos.'  
<a lang="pt" xml:lang="pt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Cpt&amp;u='.$url.'" rel="nofollow">Português</a>'.$medhjos.'  
<a lang="ro" xml:lang="ro" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Cro&amp;u='.$url.'" rel="nofollow">Română</a>'.$medhjos.'  
<a lang="ru" xml:lang="ru" title="Russkij" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Cru&amp;u='.$url.'" rel="nofollow">Русский</a>'.$medhjos.'  
<a lang="sk" xml:lang="sk" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Csk&amp;u='.$url.'" rel="nofollow">Slovenčina</a>'.$medhjos.'  
<a lang="sl" xml:lang="sl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Csl&amp;u='.$url.'" rel="nofollow">Slovenščina</a>'.$medhjos.'  
<a lang="sq" xml:lang="sq" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Csq&amp;u='.$url.'" rel="nofollow">Shqip</a>'.$medhjos.'  
<a lang="sr" xml:lang="sr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Csr&amp;u='.$url.'" rel="nofollow">Srpski</a>'.$medhjos.'  
<a lang="fi" xml:lang="fi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Cfi&amp;u='.$url.'" rel="nofollow">Suomi</a>'.$medhjos.'  
<a lang="sv" xml:lang="sv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Csv&amp;u='.$url.'" rel="nofollow">Svenska</a>'.$medhjos.'  
<a lang="sw" xml:lang="sw" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Csw&amp;u='.$url.'" rel="nofollow">Kiswahili</a>'.$medhjos.'  
<a lang="th" xml:lang="th" title="Thai" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Cth&amp;u='.$url.'" rel="nofollow">ไทย</a>'.$medhjos.'  
<a lang="tl" xml:lang="tl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Ctl&amp;u='.$url.'" rel="nofollow">Tagalog</a>'.$medhjos.'  
<a lang="tr" xml:lang="tr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Ctr&amp;u='.$url.'" rel="nofollow">Türkçe</a>'.$medhjos.'  
<a lang="uk" xml:lang="uk" title="Ukraïns’ka" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Cuk&amp;u='.$url.'" rel="nofollow">Українська</a>'.$medhjos.'  
<a lang="vi" xml:lang="vi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Cvi&amp;u='.$url.'" rel="nofollow">Tiếng Việt</a>'.$medhjos.'  
<a lang="yi" xml:lang="yi" title="Yidiš" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Cyi&amp;u='.$url.'" rel="nofollow">ייִדיש</a>.'.$medhjos.'  
<a lang="zh-CN" xml:lang="zh-CN" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Czh-CN&amp;u='.$url.'" rel="nofollow">中文</a> /
<a lang="zh-TW" xml:lang="zh-TW" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=cy%7Czh-TW&amp;u='.$url.'" rel="nofollow">漢語</a>';
		$dansk = '<a lang="da" xml:lang="da" href="#">Dansk</a>'.$medhjos.'
<a lang="en" xml:lang="en" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Cen&amp;u='.$url.'" rel="nofollow">English</a>'.$medhjos.'
<a lang="af" xml:lang="af" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Caf&amp;u='.$url.'" rel="nofollow">Afrikaans</a>'.$medhjos.'  
<a lang="ar" xml:lang="ar" title="Araby" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Car&amp;u='.$url.'" rel="nofollow">العربية</a>'.$medhjos.'  
<a lang="be" xml:lang="be" title="Belaruskaya" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Cbe&amp;u='.$url.'" rel="nofollow">Беларуская</a>'.$medhjos.'  
<a lang="bg" xml:lang="bg" title="Bulgarski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Cbg&amp;u='.$url.'" rel="nofollow">Български</a>'.$medhjos.'  
<a lang="ca" xml:lang="ca" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Cca&amp;u='.$url.'" rel="nofollow">Català</a>'.$medhjos.'  
<a lang="cs" xml:lang="cs" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Ccs&amp;u='.$url.'" rel="nofollow">Česky</a>'.$medhjos.'  
<a lang="cy" xml:lang="cy" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Ccy&amp;u='.$url.'" rel="nofollow">Cymraeg</a>'.$medhjos.'  
<a lang="de" xml:lang="de" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Cde&amp;u='.$url.'" rel="nofollow">Deutsch</a>'.$medhjos.'  
<a lang="et" xml:lang="et" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Cet&amp;u='.$url.'" rel="nofollow">Eesti</a>'.$medhjos.'  
<a lang="el" xml:lang="el" title="Ellenika" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Cel&amp;u='.$url.'" rel="nofollow">Ελληνικά</a>'.$medhjos.'  
<a lang="es" xml:lang="es" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Ces&amp;u='.$url.'" rel="nofollow">Español</a>'.$medhjos.'  
<a lang="fa" xml:lang="fa" title="Fārsī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Cfa&amp;u='.$url.'" rel="nofollow">فارسی</a>'.$medhjos.'  
<a lang="fr" xml:lang="fr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Cfr&amp;u='.$url.'" rel="nofollow">Français</a>'.$medhjos.'  
<a lang="ga" xml:lang="ga" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Cga&amp;u='.$url.'" rel="nofollow">Gaeilge</a>'.$medhjos.'  
<a lang="gl" xml:lang="gl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Cgl&amp;u='.$url.'" rel="nofollow">Galego</a>'.$medhjos.'  
<a lang="hi" xml:lang="hi" title="Hindī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Chi&amp;u='.$url.'" rel="nofollow">हिन्दी</a>'.$medhjos.'  
<a lang="hr" xml:lang="hr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Chr&amp;u='.$url.'" rel="nofollow">Hrvatski</a>'.$medhjos.'  
<a lang="id" xml:lang="id" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Cid&amp;u='.$url.'" rel="nofollow">Bahasa Indonesia</a>'.$medhjos.'  
<a lang="is" xml:lang="is" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Cis&amp;u='.$url.'" rel="nofollow">Íslenska</a>'.$medhjos.'  
<a lang="it" xml:lang="it" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Cit&amp;u='.$url.'" rel="nofollow">Italiano</a>'.$medhjos.'  
<a lang="he" xml:lang="he" title="‘Ivrit" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Che&amp;u='.$url.'" rel="nofollow">עברית</a>'.$medhjos.'  
<a lang="lv" xml:lang="lv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Clv&amp;u='.$url.'" rel="nofollow">Latviešu</a>'.$medhjos.'  
<a lang="lt" xml:lang="lt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Clt&amp;u='.$url.'" rel="nofollow">Lietuvių</a>'.$medhjos.'  
<a lang="ko" xml:lang="ko" title="Hangugeo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Cko&amp;u='.$url.'" rel="nofollow">한국어</a>'.$medhjos.'  
<a lang="hu" xml:lang="hu" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Chu&amp;u='.$url.'" rel="nofollow">Magyar</a>'.$medhjos.'  
<a lang="mk" xml:lang="mk" title="Makedonski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Cmk&amp;u='.$url.'" rel="nofollow">Македонски</a>'.$medhjos.'  
<a lang="ml" xml:lang="ml" title="Malayalam" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Cml&amp;u='.$url.'" rel="nofollow">മലയാളം</a>'.$medhjos.'  
<a lang="mt" xml:lang="mt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Cmt&amp;u='.$url.'" rel="nofollow">Malti</a>'.$medhjos.'  
<a lang="nl" xml:lang="nl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Cnl&amp;u='.$url.'" rel="nofollow">Nederlands</a>'.$medhjos.'  
<a lang="ja" xml:lang="ja" title="Nihongo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Cja&amp;u='.$url.'" rel="nofollow">日本語</a>'.$medhjos.'  
<a lang="no" xml:lang="no" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Cno&amp;u='.$url.'" rel="nofollow">Norsk (Bokmål)</a>'.$medhjos.'  
<a lang="pl" xml:lang="pl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Cpl&amp;u='.$url.'" rel="nofollow">Polski</a>'.$medhjos.'  
<a lang="pt" xml:lang="pt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Cpt&amp;u='.$url.'" rel="nofollow">Português</a>'.$medhjos.'  
<a lang="ro" xml:lang="ro" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Cro&amp;u='.$url.'" rel="nofollow">Română</a>'.$medhjos.'  
<a lang="ru" xml:lang="ru" title="Russkij" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Cru&amp;u='.$url.'" rel="nofollow">Русский</a>'.$medhjos.'  
<a lang="sk" xml:lang="sk" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Csk&amp;u='.$url.'" rel="nofollow">Slovenčina</a>'.$medhjos.'  
<a lang="sl" xml:lang="sl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Csl&amp;u='.$url.'" rel="nofollow">Slovenščina</a>'.$medhjos.'  
<a lang="sq" xml:lang="sq" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Csq&amp;u='.$url.'" rel="nofollow">Shqip</a>'.$medhjos.'  
<a lang="sr" xml:lang="sr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Csr&amp;u='.$url.'" rel="nofollow">Srpski</a>'.$medhjos.'  
<a lang="fi" xml:lang="fi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Cfi&amp;u='.$url.'" rel="nofollow">Suomi</a>'.$medhjos.'  
<a lang="sv" xml:lang="sv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Csv&amp;u='.$url.'" rel="nofollow">Svenska</a>'.$medhjos.'  
<a lang="sw" xml:lang="sw" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Csw&amp;u='.$url.'" rel="nofollow">Kiswahili</a>'.$medhjos.'  
<a lang="th" xml:lang="th" title="Thai" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Cth&amp;u='.$url.'" rel="nofollow">ไทย</a>'.$medhjos.'  
<a lang="tl" xml:lang="tl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Ctl&amp;u='.$url.'" rel="nofollow">Tagalog</a>'.$medhjos.'  
<a lang="tr" xml:lang="tr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Ctr&amp;u='.$url.'" rel="nofollow">Türkçe</a>'.$medhjos.'  
<a lang="uk" xml:lang="uk" title="Ukraïns’ka" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Cuk&amp;u='.$url.'" rel="nofollow">Українська</a>'.$medhjos.'  
<a lang="vi" xml:lang="vi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Cvi&amp;u='.$url.'" rel="nofollow">Tiếng Việt</a>'.$medhjos.'  
<a lang="yi" xml:lang="yi" title="Yidiš" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Cyi&amp;u='.$url.'" rel="nofollow">ייִדיש</a>.'.$medhjos.'  
<a lang="zh-CN" xml:lang="zh-CN" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Czh-CN&amp;u='.$url.'" rel="nofollow">中文</a> /
<a lang="zh-TW" xml:lang="zh-TW" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=da%7Czh-TW&amp;u='.$url.'" rel="nofollow">漢語</a>';
		$deutsch = '<a lang="de" xml:lang="de" href="#">Deutsch</a>'.$medhjos.'
<a lang="en" xml:lang="en" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Cen&amp;u='.$url.'" rel="nofollow">English</a>'.$medhjos.'
<a lang="af" xml:lang="af" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Caf&amp;u='.$url.'" rel="nofollow">Afrikaans</a>'.$medhjos.'  
<a lang="ar" xml:lang="ar" title="Araby" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Car&amp;u='.$url.'" rel="nofollow">العربية</a>'.$medhjos.'  
<a lang="be" xml:lang="be" title="Belaruskaya" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Cbe&amp;u='.$url.'" rel="nofollow">Беларуская</a>'.$medhjos.'  
<a lang="bg" xml:lang="bg" title="Bulgarski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Cbg&amp;u='.$url.'" rel="nofollow">Български</a>'.$medhjos.'  
<a lang="ca" xml:lang="ca" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Cca&amp;u='.$url.'" rel="nofollow">Català</a>'.$medhjos.'  
<a lang="cs" xml:lang="cs" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Ccs&amp;u='.$url.'" rel="nofollow">Česky</a>'.$medhjos.'  
<a lang="cy" xml:lang="cy" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Ccy&amp;u='.$url.'" rel="nofollow">Cymraeg</a>'.$medhjos.'  
<a lang="da" xml:lang="da" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Cda&amp;u='.$url.'" rel="nofollow">Dansk</a>'.$medhjos.'  
<a lang="et" xml:lang="et" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Cet&amp;u='.$url.'" rel="nofollow">Eesti</a>'.$medhjos.'  
<a lang="el" xml:lang="el" title="Ellenika" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Cel&amp;u='.$url.'" rel="nofollow">Ελληνικά</a>'.$medhjos.'  
<a lang="es" xml:lang="es" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Ces&amp;u='.$url.'" rel="nofollow">Español</a>'.$medhjos.'  
<a lang="fa" xml:lang="fa" title="Fārsī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Cfa&amp;u='.$url.'" rel="nofollow">فارسی</a>'.$medhjos.'  
<a lang="fr" xml:lang="fr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Cfr&amp;u='.$url.'" rel="nofollow">Français</a>'.$medhjos.'  
<a lang="ga" xml:lang="ga" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Cga&amp;u='.$url.'" rel="nofollow">Gaeilge</a>'.$medhjos.'  
<a lang="gl" xml:lang="gl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Cgl&amp;u='.$url.'" rel="nofollow">Galego</a>'.$medhjos.'  
<a lang="hi" xml:lang="hi" title="Hindī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Chi&amp;u='.$url.'" rel="nofollow">हिन्दी</a>'.$medhjos.'  
<a lang="hr" xml:lang="hr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Chr&amp;u='.$url.'" rel="nofollow">Hrvatski</a>'.$medhjos.'  
<a lang="id" xml:lang="id" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Cid&amp;u='.$url.'" rel="nofollow">Bahasa Indonesia</a>'.$medhjos.'  
<a lang="is" xml:lang="is" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Cis&amp;u='.$url.'" rel="nofollow">Íslenska</a>'.$medhjos.'  
<a lang="it" xml:lang="it" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Cit&amp;u='.$url.'" rel="nofollow">Italiano</a>'.$medhjos.'  
<a lang="he" xml:lang="he" title="‘Ivrit" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Che&amp;u='.$url.'" rel="nofollow">עברית</a>'.$medhjos.'  
<a lang="lv" xml:lang="lv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Clv&amp;u='.$url.'" rel="nofollow">Latviešu</a>'.$medhjos.'  
<a lang="lt" xml:lang="lt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Clt&amp;u='.$url.'" rel="nofollow">Lietuvių</a>'.$medhjos.'  
<a lang="ko" xml:lang="ko" title="Hangugeo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Cko&amp;u='.$url.'" rel="nofollow">한국어</a>'.$medhjos.'  
<a lang="hu" xml:lang="hu" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Chu&amp;u='.$url.'" rel="nofollow">Magyar</a>'.$medhjos.'  
<a lang="mk" xml:lang="mk" title="Makedonski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Cmk&amp;u='.$url.'" rel="nofollow">Македонски</a>'.$medhjos.'  
<a lang="ml" xml:lang="ml" title="Malayalam" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Cml&amp;u='.$url.'" rel="nofollow">മലയാളം</a>'.$medhjos.'  
<a lang="mt" xml:lang="mt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Cmt&amp;u='.$url.'" rel="nofollow">Malti</a>'.$medhjos.'  
<a lang="nl" xml:lang="nl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Cnl&amp;u='.$url.'" rel="nofollow">Nederlands</a>'.$medhjos.'  
<a lang="ja" xml:lang="ja" title="Nihongo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Cja&amp;u='.$url.'" rel="nofollow">日本語</a>'.$medhjos.'  
<a lang="no" xml:lang="no" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Cno&amp;u='.$url.'" rel="nofollow">Norsk (Bokmål)</a>'.$medhjos.'  
<a lang="pl" xml:lang="pl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Cpl&amp;u='.$url.'" rel="nofollow">Polski</a>'.$medhjos.'  
<a lang="pt" xml:lang="pt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Cpt&amp;u='.$url.'" rel="nofollow">Português</a>'.$medhjos.'  
<a lang="ro" xml:lang="ro" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Cro&amp;u='.$url.'" rel="nofollow">Română</a>'.$medhjos.'  
<a lang="ru" xml:lang="ru" title="Russkij" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Cru&amp;u='.$url.'" rel="nofollow">Русский</a>'.$medhjos.'  
<a lang="sk" xml:lang="sk" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Csk&amp;u='.$url.'" rel="nofollow">Slovenčina</a>'.$medhjos.'  
<a lang="sl" xml:lang="sl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Csl&amp;u='.$url.'" rel="nofollow">Slovenščina</a>'.$medhjos.'  
<a lang="sq" xml:lang="sq" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Csq&amp;u='.$url.'" rel="nofollow">Shqip</a>'.$medhjos.'  
<a lang="sr" xml:lang="sr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Csr&amp;u='.$url.'" rel="nofollow">Srpski</a>'.$medhjos.'  
<a lang="fi" xml:lang="fi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Cfi&amp;u='.$url.'" rel="nofollow">Suomi</a>'.$medhjos.'  
<a lang="sv" xml:lang="sv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Csv&amp;u='.$url.'" rel="nofollow">Svenska</a>'.$medhjos.'  
<a lang="sw" xml:lang="sw" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Csw&amp;u='.$url.'" rel="nofollow">Kiswahili</a>'.$medhjos.'  
<a lang="th" xml:lang="th" title="Thai" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Cth&amp;u='.$url.'" rel="nofollow">ไทย</a>'.$medhjos.'  
<a lang="tl" xml:lang="tl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Ctl&amp;u='.$url.'" rel="nofollow">Tagalog</a>'.$medhjos.'  
<a lang="tr" xml:lang="tr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Ctr&amp;u='.$url.'" rel="nofollow">Türkçe</a>'.$medhjos.'  
<a lang="uk" xml:lang="uk" title="Ukraïns’ka" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Cuk&amp;u='.$url.'" rel="nofollow">Українська</a>'.$medhjos.'  
<a lang="vi" xml:lang="vi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Cvi&amp;u='.$url.'" rel="nofollow">Tiếng Việt</a>'.$medhjos.'  
<a lang="yi" xml:lang="yi" title="Yidiš" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Cyi&amp;u='.$url.'" rel="nofollow">ייִדיש</a>.'.$medhjos.'  
<a lang="zh-CN" xml:lang="zh-CN" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Czh-CN&amp;u='.$url.'" rel="nofollow">中文</a> /
<a lang="zh-TW" xml:lang="zh-TW" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=de%7Czh-TW&amp;u='.$url.'" rel="nofollow">漢語</a>';
		$eesti = '<a lang="et" xml:lang="et" href="#">Eesti</a>'.$medhjos.'
<a lang="en" xml:lang="en" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Cen&amp;u='.$url.'" rel="nofollow">English</a>'.$medhjos.'
<a lang="af" xml:lang="af" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Caf&amp;u='.$url.'" rel="nofollow">Afrikaans</a>'.$medhjos.'  
<a lang="ar" xml:lang="ar" title="Araby" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Car&amp;u='.$url.'" rel="nofollow">العربية</a>'.$medhjos.'  
<a lang="be" xml:lang="be" title="Belaruskaya" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Cbe&amp;u='.$url.'" rel="nofollow">Беларуская</a>'.$medhjos.'  
<a lang="bg" xml:lang="bg" title="Bulgarski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Cbg&amp;u='.$url.'" rel="nofollow">Български</a>'.$medhjos.'  
<a lang="ca" xml:lang="ca" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Cca&amp;u='.$url.'" rel="nofollow">Català</a>'.$medhjos.'  
<a lang="cs" xml:lang="cs" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Ccs&amp;u='.$url.'" rel="nofollow">Česky</a>'.$medhjos.'  
<a lang="cy" xml:lang="cy" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Ccy&amp;u='.$url.'" rel="nofollow">Cymraeg</a>'.$medhjos.'  
<a lang="da" xml:lang="da" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Cda&amp;u='.$url.'" rel="nofollow">Dansk</a>'.$medhjos.'  
<a lang="de" xml:lang="de" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Cde&amp;u='.$url.'" rel="nofollow">Deutsch</a>'.$medhjos.'  
<a lang="el" xml:lang="el" title="Ellenika" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Cel&amp;u='.$url.'" rel="nofollow">Ελληνικά</a>'.$medhjos.'  
<a lang="es" xml:lang="es" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Ces&amp;u='.$url.'" rel="nofollow">Español</a>'.$medhjos.'  
<a lang="fa" xml:lang="fa" title="Fārsī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Cfa&amp;u='.$url.'" rel="nofollow">فارسی</a>'.$medhjos.'  
<a lang="fr" xml:lang="fr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Cfr&amp;u='.$url.'" rel="nofollow">Français</a>'.$medhjos.'  
<a lang="ga" xml:lang="ga" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Cga&amp;u='.$url.'" rel="nofollow">Gaeilge</a>'.$medhjos.'  
<a lang="gl" xml:lang="gl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Cgl&amp;u='.$url.'" rel="nofollow">Galego</a>'.$medhjos.'  
<a lang="hi" xml:lang="hi" title="Hindī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Chi&amp;u='.$url.'" rel="nofollow">हिन्दी</a>'.$medhjos.'  
<a lang="hr" xml:lang="hr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Chr&amp;u='.$url.'" rel="nofollow">Hrvatski</a>'.$medhjos.'  
<a lang="id" xml:lang="id" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Cid&amp;u='.$url.'" rel="nofollow">Bahasa Indonesia</a>'.$medhjos.'  
<a lang="is" xml:lang="is" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Cis&amp;u='.$url.'" rel="nofollow">Íslenska</a>'.$medhjos.'  
<a lang="it" xml:lang="it" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Cit&amp;u='.$url.'" rel="nofollow">Italiano</a>'.$medhjos.'  
<a lang="he" xml:lang="he" title="‘Ivrit" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Che&amp;u='.$url.'" rel="nofollow">עברית</a>'.$medhjos.'  
<a lang="lv" xml:lang="lv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Clv&amp;u='.$url.'" rel="nofollow">Latviešu</a>'.$medhjos.'  
<a lang="lt" xml:lang="lt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Clt&amp;u='.$url.'" rel="nofollow">Lietuvių</a>'.$medhjos.'  
<a lang="ko" xml:lang="ko" title="Hangugeo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Cko&amp;u='.$url.'" rel="nofollow">한국어</a>'.$medhjos.'  
<a lang="hu" xml:lang="hu" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Chu&amp;u='.$url.'" rel="nofollow">Magyar</a>'.$medhjos.'  
<a lang="mk" xml:lang="mk" title="Makedonski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Cmk&amp;u='.$url.'" rel="nofollow">Македонски</a>'.$medhjos.'  
<a lang="ml" xml:lang="ml" title="Malayalam" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Cml&amp;u='.$url.'" rel="nofollow">മലയാളം</a>'.$medhjos.'  
<a lang="mt" xml:lang="mt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Cmt&amp;u='.$url.'" rel="nofollow">Malti</a>'.$medhjos.'  
<a lang="nl" xml:lang="nl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Cnl&amp;u='.$url.'" rel="nofollow">Nederlands</a>'.$medhjos.'  
<a lang="ja" xml:lang="ja" title="Nihongo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Cja&amp;u='.$url.'" rel="nofollow">日本語</a>'.$medhjos.'  
<a lang="no" xml:lang="no" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Cno&amp;u='.$url.'" rel="nofollow">Norsk (Bokmål)</a>'.$medhjos.'  
<a lang="pl" xml:lang="pl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Cpl&amp;u='.$url.'" rel="nofollow">Polski</a>'.$medhjos.'  
<a lang="pt" xml:lang="pt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Cpt&amp;u='.$url.'" rel="nofollow">Português</a>'.$medhjos.'  
<a lang="ro" xml:lang="ro" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Cro&amp;u='.$url.'" rel="nofollow">Română</a>'.$medhjos.'  
<a lang="ru" xml:lang="ru" title="Russkij" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Cru&amp;u='.$url.'" rel="nofollow">Русский</a>'.$medhjos.'  
<a lang="sk" xml:lang="sk" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Csk&amp;u='.$url.'" rel="nofollow">Slovenčina</a>'.$medhjos.'  
<a lang="sl" xml:lang="sl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Csl&amp;u='.$url.'" rel="nofollow">Slovenščina</a>'.$medhjos.'  
<a lang="sq" xml:lang="sq" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Csq&amp;u='.$url.'" rel="nofollow">Shqip</a>'.$medhjos.'  
<a lang="sr" xml:lang="sr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Csr&amp;u='.$url.'" rel="nofollow">Srpski</a>'.$medhjos.'  
<a lang="fi" xml:lang="fi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Cfi&amp;u='.$url.'" rel="nofollow">Suomi</a>'.$medhjos.'  
<a lang="sv" xml:lang="sv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Csv&amp;u='.$url.'" rel="nofollow">Svenska</a>'.$medhjos.'  
<a lang="sw" xml:lang="sw" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Csw&amp;u='.$url.'" rel="nofollow">Kiswahili</a>'.$medhjos.'  
<a lang="th" xml:lang="th" title="Thai" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Cth&amp;u='.$url.'" rel="nofollow">ไทย</a>'.$medhjos.'  
<a lang="tl" xml:lang="tl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Ctl&amp;u='.$url.'" rel="nofollow">Tagalog</a>'.$medhjos.'  
<a lang="tr" xml:lang="tr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Ctr&amp;u='.$url.'" rel="nofollow">Türkçe</a>'.$medhjos.'  
<a lang="uk" xml:lang="uk" title="Ukraïns’ka" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Cuk&amp;u='.$url.'" rel="nofollow">Українська</a>'.$medhjos.'  
<a lang="vi" xml:lang="vi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Cvi&amp;u='.$url.'" rel="nofollow">Tiếng Việt</a>'.$medhjos.'  
<a lang="yi" xml:lang="yi" title="Yidiš" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Cyi&amp;u='.$url.'" rel="nofollow">ייִדיש</a>.'.$medhjos.'  
<a lang="zh-CN" xml:lang="zh-CN" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Czh-CN&amp;u='.$url.'" rel="nofollow">中文</a> /
<a lang="zh-TW" xml:lang="zh-TW" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=et%7Czh-TW&amp;u='.$url.'" rel="nofollow">漢語</a>';
		$ellenika = '<a lang="el" xml:lang="el" href="#">Ελληνικά</a>'.$medhjos.'
<a lang="en" xml:lang="en" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Cen&amp;u='.$url.'" rel="nofollow">English</a>'.$medhjos.'
<a lang="af" xml:lang="af" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Caf&amp;u='.$url.'" rel="nofollow">Afrikaans</a>'.$medhjos.'  
<a lang="ar" xml:lang="ar" title="Araby" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Car&amp;u='.$url.'" rel="nofollow">العربية</a>'.$medhjos.'  
<a lang="be" xml:lang="be" title="Belaruskaya" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Cbe&amp;u='.$url.'" rel="nofollow">Беларуская</a>'.$medhjos.'  
<a lang="bg" xml:lang="bg" title="Bulgarski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Cbg&amp;u='.$url.'" rel="nofollow">Български</a>'.$medhjos.'  
<a lang="ca" xml:lang="ca" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Cca&amp;u='.$url.'" rel="nofollow">Català</a>'.$medhjos.'  
<a lang="cs" xml:lang="cs" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Ccs&amp;u='.$url.'" rel="nofollow">Česky</a>'.$medhjos.'  
<a lang="cy" xml:lang="cy" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Ccy&amp;u='.$url.'" rel="nofollow">Cymraeg</a>'.$medhjos.'  
<a lang="da" xml:lang="da" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Cda&amp;u='.$url.'" rel="nofollow">Dansk</a>'.$medhjos.'  
<a lang="de" xml:lang="de" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Cde&amp;u='.$url.'" rel="nofollow">Deutsch</a>'.$medhjos.'  
<a lang="et" xml:lang="et" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Cet&amp;u='.$url.'" rel="nofollow">Eesti</a>'.$medhjos.'  
<a lang="es" xml:lang="es" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Ces&amp;u='.$url.'" rel="nofollow">Español</a>'.$medhjos.'  
<a lang="fa" xml:lang="fa" title="Fārsī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Cfa&amp;u='.$url.'" rel="nofollow">فارسی</a>'.$medhjos.'  
<a lang="fr" xml:lang="fr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Cfr&amp;u='.$url.'" rel="nofollow">Français</a>'.$medhjos.'  
<a lang="ga" xml:lang="ga" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Cga&amp;u='.$url.'" rel="nofollow">Gaeilge</a>'.$medhjos.'  
<a lang="gl" xml:lang="gl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Cgl&amp;u='.$url.'" rel="nofollow">Galego</a>'.$medhjos.'  
<a lang="hi" xml:lang="hi" title="Hindī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Chi&amp;u='.$url.'" rel="nofollow">हिन्दी</a>'.$medhjos.'  
<a lang="hr" xml:lang="hr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Chr&amp;u='.$url.'" rel="nofollow">Hrvatski</a>'.$medhjos.'  
<a lang="id" xml:lang="id" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Cid&amp;u='.$url.'" rel="nofollow">Bahasa Indonesia</a>'.$medhjos.'  
<a lang="is" xml:lang="is" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Cis&amp;u='.$url.'" rel="nofollow">Íslenska</a>'.$medhjos.'  
<a lang="it" xml:lang="it" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Cit&amp;u='.$url.'" rel="nofollow">Italiano</a>'.$medhjos.'  
<a lang="he" xml:lang="he" title="‘Ivrit" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Che&amp;u='.$url.'" rel="nofollow">עברית</a>'.$medhjos.'  
<a lang="lv" xml:lang="lv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Clv&amp;u='.$url.'" rel="nofollow">Latviešu</a>'.$medhjos.'  
<a lang="lt" xml:lang="lt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Clt&amp;u='.$url.'" rel="nofollow">Lietuvių</a>'.$medhjos.'  
<a lang="ko" xml:lang="ko" title="Hangugeo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Cko&amp;u='.$url.'" rel="nofollow">한국어</a>'.$medhjos.'  
<a lang="hu" xml:lang="hu" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Chu&amp;u='.$url.'" rel="nofollow">Magyar</a>'.$medhjos.'  
<a lang="mk" xml:lang="mk" title="Makedonski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Cmk&amp;u='.$url.'" rel="nofollow">Македонски</a>'.$medhjos.'  
<a lang="ml" xml:lang="ml" title="Malayalam" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Cml&amp;u='.$url.'" rel="nofollow">മലയാളം</a>'.$medhjos.'  
<a lang="mt" xml:lang="mt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Cmt&amp;u='.$url.'" rel="nofollow">Malti</a>'.$medhjos.'  
<a lang="nl" xml:lang="nl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Cnl&amp;u='.$url.'" rel="nofollow">Nederlands</a>'.$medhjos.'  
<a lang="ja" xml:lang="ja" title="Nihongo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Cja&amp;u='.$url.'" rel="nofollow">日本語</a>'.$medhjos.'  
<a lang="no" xml:lang="no" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Cno&amp;u='.$url.'" rel="nofollow">Norsk (Bokmål)</a>'.$medhjos.'  
<a lang="pl" xml:lang="pl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Cpl&amp;u='.$url.'" rel="nofollow">Polski</a>'.$medhjos.'  
<a lang="pt" xml:lang="pt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Cpt&amp;u='.$url.'" rel="nofollow">Português</a>'.$medhjos.'  
<a lang="ro" xml:lang="ro" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Cro&amp;u='.$url.'" rel="nofollow">Română</a>'.$medhjos.'  
<a lang="ru" xml:lang="ru" title="Russkij" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Cru&amp;u='.$url.'" rel="nofollow">Русский</a>'.$medhjos.'  
<a lang="sk" xml:lang="sk" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Csk&amp;u='.$url.'" rel="nofollow">Slovenčina</a>'.$medhjos.'  
<a lang="sl" xml:lang="sl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Csl&amp;u='.$url.'" rel="nofollow">Slovenščina</a>'.$medhjos.'  
<a lang="sq" xml:lang="sq" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Csq&amp;u='.$url.'" rel="nofollow">Shqip</a>'.$medhjos.'  
<a lang="sr" xml:lang="sr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Csr&amp;u='.$url.'" rel="nofollow">Srpski</a>'.$medhjos.'  
<a lang="fi" xml:lang="fi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Cfi&amp;u='.$url.'" rel="nofollow">Suomi</a>'.$medhjos.'  
<a lang="sv" xml:lang="sv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Csv&amp;u='.$url.'" rel="nofollow">Svenska</a>'.$medhjos.'  
<a lang="sw" xml:lang="sw" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Csw&amp;u='.$url.'" rel="nofollow">Kiswahili</a>'.$medhjos.'  
<a lang="th" xml:lang="th" title="Thai" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Cth&amp;u='.$url.'" rel="nofollow">ไทย</a>'.$medhjos.'  
<a lang="tl" xml:lang="tl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Ctl&amp;u='.$url.'" rel="nofollow">Tagalog</a>'.$medhjos.'  
<a lang="tr" xml:lang="tr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Ctr&amp;u='.$url.'" rel="nofollow">Türkçe</a>'.$medhjos.'  
<a lang="uk" xml:lang="uk" title="Ukraïns’ka" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Cuk&amp;u='.$url.'" rel="nofollow">Українська</a>'.$medhjos.'  
<a lang="vi" xml:lang="vi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Cvi&amp;u='.$url.'" rel="nofollow">Tiếng Việt</a>'.$medhjos.'  
<a lang="yi" xml:lang="yi" title="Yidiš" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Cyi&amp;u='.$url.'" rel="nofollow">ייִדיש</a>.'.$medhjos.'  
<a lang="zh-CN" xml:lang="zh-CN" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Czh-CN&amp;u='.$url.'" rel="nofollow">中文</a> /
<a lang="zh-TW" xml:lang="zh-TW" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=el%7Czh-TW&amp;u='.$url.'" rel="nofollow">漢語</a>';
		$espanol = '<a lang="es" xml:lang="es" href="#">Español</a>'.$medhjos.' 
<a lang="en" xml:lang="en" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Cen&amp;u='.$url.'" rel="nofollow">English</a>'.$medhjos.'
<a lang="af" xml:lang="af" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Caf&amp;u='.$url.'" rel="nofollow">Afrikaans</a>'.$medhjos.'  
<a lang="ar" xml:lang="ar" title="Araby" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Car&amp;u='.$url.'" rel="nofollow">العربية</a>'.$medhjos.'  
<a lang="be" xml:lang="be" title="Belaruskaya" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Cbe&amp;u='.$url.'" rel="nofollow">Беларуская</a>'.$medhjos.'  
<a lang="bg" xml:lang="bg" title="Bulgarski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Cbg&amp;u='.$url.'" rel="nofollow">Български</a>'.$medhjos.'  
<a lang="ca" xml:lang="ca" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Cca&amp;u='.$url.'" rel="nofollow">Català</a>'.$medhjos.'  
<a lang="cs" xml:lang="cs" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Ccs&amp;u='.$url.'" rel="nofollow">Česky</a>'.$medhjos.'  
<a lang="cy" xml:lang="cy" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Ccy&amp;u='.$url.'" rel="nofollow">Cymraeg</a>'.$medhjos.'  
<a lang="da" xml:lang="da" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Cda&amp;u='.$url.'" rel="nofollow">Dansk</a>'.$medhjos.'  
<a lang="de" xml:lang="de" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Cde&amp;u='.$url.'" rel="nofollow">Deutsch</a>'.$medhjos.'  
<a lang="et" xml:lang="et" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Cet&amp;u='.$url.'" rel="nofollow">Eesti</a>'.$medhjos.'  
<a lang="el" xml:lang="el" title="Ellenika" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Cel&amp;u='.$url.'" rel="nofollow">Ελληνικά</a>'.$medhjos.'  
<a lang="fa" xml:lang="fa" title="Fārsī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Cfa&amp;u='.$url.'" rel="nofollow">فارسی</a>'.$medhjos.'  
<a lang="fr" xml:lang="fr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Cfr&amp;u='.$url.'" rel="nofollow">Français</a>'.$medhjos.'  
<a lang="ga" xml:lang="ga" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Cga&amp;u='.$url.'" rel="nofollow">Gaeilge</a>'.$medhjos.'  
<a lang="gl" xml:lang="gl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Cgl&amp;u='.$url.'" rel="nofollow">Galego</a>'.$medhjos.'  
<a lang="hi" xml:lang="hi" title="Hindī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Chi&amp;u='.$url.'" rel="nofollow">हिन्दी</a>'.$medhjos.'  
<a lang="hr" xml:lang="hr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Chr&amp;u='.$url.'" rel="nofollow">Hrvatski</a>'.$medhjos.'  
<a lang="id" xml:lang="id" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Cid&amp;u='.$url.'" rel="nofollow">Bahasa Indonesia</a>'.$medhjos.'  
<a lang="is" xml:lang="is" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Cis&amp;u='.$url.'" rel="nofollow">Íslenska</a>'.$medhjos.'  
<a lang="it" xml:lang="it" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Cit&amp;u='.$url.'" rel="nofollow">Italiano</a>'.$medhjos.'  
<a lang="he" xml:lang="he" title="‘Ivrit" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Che&amp;u='.$url.'" rel="nofollow">עברית</a>'.$medhjos.'  
<a lang="lv" xml:lang="lv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Clv&amp;u='.$url.'" rel="nofollow">Latviešu</a>'.$medhjos.'  
<a lang="lt" xml:lang="lt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Clt&amp;u='.$url.'" rel="nofollow">Lietuvių</a>'.$medhjos.'  
<a lang="ko" xml:lang="ko" title="Hangugeo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Cko&amp;u='.$url.'" rel="nofollow">한국어</a>'.$medhjos.'  
<a lang="hu" xml:lang="hu" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Chu&amp;u='.$url.'" rel="nofollow">Magyar</a>'.$medhjos.'  
<a lang="mk" xml:lang="mk" title="Makedonski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Cmk&amp;u='.$url.'" rel="nofollow">Македонски</a>'.$medhjos.'  
<a lang="ml" xml:lang="ml" title="Malayalam" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Cml&amp;u='.$url.'" rel="nofollow">മലയാളം</a>'.$medhjos.'  
<a lang="mt" xml:lang="mt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Cmt&amp;u='.$url.'" rel="nofollow">Malti</a>'.$medhjos.'  
<a lang="nl" xml:lang="nl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Cnl&amp;u='.$url.'" rel="nofollow">Nederlands</a>'.$medhjos.'  
<a lang="ja" xml:lang="ja" title="Nihongo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Cja&amp;u='.$url.'" rel="nofollow">日本語</a>'.$medhjos.'  
<a lang="no" xml:lang="no" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Cno&amp;u='.$url.'" rel="nofollow">Norsk (Bokmål)</a>'.$medhjos.'  
<a lang="pl" xml:lang="pl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Cpl&amp;u='.$url.'" rel="nofollow">Polski</a>'.$medhjos.'  
<a lang="pt" xml:lang="pt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Cpt&amp;u='.$url.'" rel="nofollow">Português</a>'.$medhjos.'  
<a lang="ro" xml:lang="ro" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Cro&amp;u='.$url.'" rel="nofollow">Română</a>'.$medhjos.'  
<a lang="ru" xml:lang="ru" title="Russkij" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Cru&amp;u='.$url.'" rel="nofollow">Русский</a>'.$medhjos.'  
<a lang="sk" xml:lang="sk" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Csk&amp;u='.$url.'" rel="nofollow">Slovenčina</a>'.$medhjos.'  
<a lang="sl" xml:lang="sl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Csl&amp;u='.$url.'" rel="nofollow">Slovenščina</a>'.$medhjos.'  
<a lang="sq" xml:lang="sq" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Csq&amp;u='.$url.'" rel="nofollow">Shqip</a>'.$medhjos.'  
<a lang="sr" xml:lang="sr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Csr&amp;u='.$url.'" rel="nofollow">Srpski</a>'.$medhjos.'  
<a lang="fi" xml:lang="fi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Cfi&amp;u='.$url.'" rel="nofollow">Suomi</a>'.$medhjos.'  
<a lang="sv" xml:lang="sv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Csv&amp;u='.$url.'" rel="nofollow">Svenska</a>'.$medhjos.'  
<a lang="sw" xml:lang="sw" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Csw&amp;u='.$url.'" rel="nofollow">Kiswahili</a>'.$medhjos.'  
<a lang="th" xml:lang="th" title="Thai" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Cth&amp;u='.$url.'" rel="nofollow">ไทย</a>'.$medhjos.'  
<a lang="tl" xml:lang="tl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Ctl&amp;u='.$url.'" rel="nofollow">Tagalog</a>'.$medhjos.'  
<a lang="tr" xml:lang="tr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Ctr&amp;u='.$url.'" rel="nofollow">Türkçe</a>'.$medhjos.'  
<a lang="uk" xml:lang="uk" title="Ukraïns’ka" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Cuk&amp;u='.$url.'" rel="nofollow">Українська</a>'.$medhjos.'  
<a lang="vi" xml:lang="vi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Cvi&amp;u='.$url.'" rel="nofollow">Tiếng Việt</a>'.$medhjos.'  
<a lang="yi" xml:lang="yi" title="Yidiš" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Cyi&amp;u='.$url.'" rel="nofollow">ייִדיש</a>.'.$medhjos.'  
<a lang="zh-CN" xml:lang="zh-CN" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Czh-CN&amp;u='.$url.'" rel="nofollow">中文</a> /
<a lang="zh-TW" xml:lang="zh-TW" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=es%7Czh-TW&amp;u='.$url.'" rel="nofollow">漢語</a>';
		$farsi = '<a lang="fa" xml:lang="fa" title="Fārsī" href="#">فارسی</a>'.$medhjos.'
<a lang="en" xml:lang="en" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Cen&amp;u='.$url.'" rel="nofollow">English</a>'.$medhjos.'
<a lang="af" xml:lang="af" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Caf&amp;u='.$url.'" rel="nofollow">Afrikaans</a>'.$medhjos.'  
<a lang="ar" xml:lang="ar" title="Araby" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Car&amp;u='.$url.'" rel="nofollow">العربية</a>'.$medhjos.'  
<a lang="be" xml:lang="be" title="Belaruskaya" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Cbe&amp;u='.$url.'" rel="nofollow">Беларуская</a>'.$medhjos.'  
<a lang="bg" xml:lang="bg" title="Bulgarski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Cbg&amp;u='.$url.'" rel="nofollow">Български</a>'.$medhjos.'  
<a lang="ca" xml:lang="ca" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Cca&amp;u='.$url.'" rel="nofollow">Català</a>'.$medhjos.'  
<a lang="cs" xml:lang="cs" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Ccs&amp;u='.$url.'" rel="nofollow">Česky</a>'.$medhjos.'  
<a lang="cy" xml:lang="cy" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Ccy&amp;u='.$url.'" rel="nofollow">Cymraeg</a>'.$medhjos.'  
<a lang="da" xml:lang="da" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Cda&amp;u='.$url.'" rel="nofollow">Dansk</a>'.$medhjos.'  
<a lang="de" xml:lang="de" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Cde&amp;u='.$url.'" rel="nofollow">Deutsch</a>'.$medhjos.'  
<a lang="et" xml:lang="et" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Cet&amp;u='.$url.'" rel="nofollow">Eesti</a>'.$medhjos.'  
<a lang="el" xml:lang="el" title="Ellenika" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Cel&amp;u='.$url.'" rel="nofollow">Ελληνικά</a>'.$medhjos.'  
<a lang="es" xml:lang="es" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Ces&amp;u='.$url.'" rel="nofollow">Español</a>'.$medhjos.'  
<a lang="fr" xml:lang="fr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Cfr&amp;u='.$url.'" rel="nofollow">Français</a>'.$medhjos.'  
<a lang="ga" xml:lang="ga" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Cga&amp;u='.$url.'" rel="nofollow">Gaeilge</a>'.$medhjos.'  
<a lang="gl" xml:lang="gl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Cgl&amp;u='.$url.'" rel="nofollow">Galego</a>'.$medhjos.'  
<a lang="hi" xml:lang="hi" title="Hindī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Chi&amp;u='.$url.'" rel="nofollow">हिन्दी</a>'.$medhjos.'  
<a lang="hr" xml:lang="hr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Chr&amp;u='.$url.'" rel="nofollow">Hrvatski</a>'.$medhjos.'  
<a lang="id" xml:lang="id" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Cid&amp;u='.$url.'" rel="nofollow">Bahasa Indonesia</a>'.$medhjos.'  
<a lang="is" xml:lang="is" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Cis&amp;u='.$url.'" rel="nofollow">Íslenska</a>'.$medhjos.'  
<a lang="it" xml:lang="it" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Cit&amp;u='.$url.'" rel="nofollow">Italiano</a>'.$medhjos.'  
<a lang="he" xml:lang="he" title="‘Ivrit" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Che&amp;u='.$url.'" rel="nofollow">עברית</a>'.$medhjos.'  
<a lang="lv" xml:lang="lv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Clv&amp;u='.$url.'" rel="nofollow">Latviešu</a>'.$medhjos.'  
<a lang="lt" xml:lang="lt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Clt&amp;u='.$url.'" rel="nofollow">Lietuvių</a>'.$medhjos.'  
<a lang="ko" xml:lang="ko" title="Hangugeo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Cko&amp;u='.$url.'" rel="nofollow">한국어</a>'.$medhjos.'  
<a lang="hu" xml:lang="hu" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Chu&amp;u='.$url.'" rel="nofollow">Magyar</a>'.$medhjos.'  
<a lang="mk" xml:lang="mk" title="Makedonski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Cmk&amp;u='.$url.'" rel="nofollow">Македонски</a>'.$medhjos.'  
<a lang="ml" xml:lang="ml" title="Malayalam" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Cml&amp;u='.$url.'" rel="nofollow">മലയാളം</a>'.$medhjos.'  
<a lang="mt" xml:lang="mt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Cmt&amp;u='.$url.'" rel="nofollow">Malti</a>'.$medhjos.'  
<a lang="nl" xml:lang="nl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Cnl&amp;u='.$url.'" rel="nofollow">Nederlands</a>'.$medhjos.'  
<a lang="ja" xml:lang="ja" title="Nihongo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Cja&amp;u='.$url.'" rel="nofollow">日本語</a>'.$medhjos.'  
<a lang="no" xml:lang="no" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Cno&amp;u='.$url.'" rel="nofollow">Norsk (Bokmål)</a>'.$medhjos.'  
<a lang="pl" xml:lang="pl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Cpl&amp;u='.$url.'" rel="nofollow">Polski</a>'.$medhjos.'  
<a lang="pt" xml:lang="pt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Cpt&amp;u='.$url.'" rel="nofollow">Português</a>'.$medhjos.'  
<a lang="ro" xml:lang="ro" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Cro&amp;u='.$url.'" rel="nofollow">Română</a>'.$medhjos.'  
<a lang="ru" xml:lang="ru" title="Russkij" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Cru&amp;u='.$url.'" rel="nofollow">Русский</a>'.$medhjos.'  
<a lang="sk" xml:lang="sk" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Csk&amp;u='.$url.'" rel="nofollow">Slovenčina</a>'.$medhjos.'  
<a lang="sl" xml:lang="sl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Csl&amp;u='.$url.'" rel="nofollow">Slovenščina</a>'.$medhjos.'  
<a lang="sq" xml:lang="sq" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Csq&amp;u='.$url.'" rel="nofollow">Shqip</a>'.$medhjos.'  
<a lang="sr" xml:lang="sr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Csr&amp;u='.$url.'" rel="nofollow">Srpski</a>'.$medhjos.'  
<a lang="fi" xml:lang="fi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Cfi&amp;u='.$url.'" rel="nofollow">Suomi</a>'.$medhjos.'  
<a lang="sv" xml:lang="sv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Csv&amp;u='.$url.'" rel="nofollow">Svenska</a>'.$medhjos.'  
<a lang="sw" xml:lang="sw" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Csw&amp;u='.$url.'" rel="nofollow">Kiswahili</a>'.$medhjos.'  
<a lang="th" xml:lang="th" title="Thai" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Cth&amp;u='.$url.'" rel="nofollow">ไทย</a>'.$medhjos.'  
<a lang="tl" xml:lang="tl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Ctl&amp;u='.$url.'" rel="nofollow">Tagalog</a>'.$medhjos.'  
<a lang="tr" xml:lang="tr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Ctr&amp;u='.$url.'" rel="nofollow">Türkçe</a>'.$medhjos.'  
<a lang="uk" xml:lang="uk" title="Ukraïns’ka" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Cuk&amp;u='.$url.'" rel="nofollow">Українська</a>'.$medhjos.'  
<a lang="vi" xml:lang="vi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Cvi&amp;u='.$url.'" rel="nofollow">Tiếng Việt</a>'.$medhjos.'  
<a lang="yi" xml:lang="yi" title="Yidiš" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Cyi&amp;u='.$url.'" rel="nofollow">ייִדיש</a>.'.$medhjos.'  
<a lang="zh-CN" xml:lang="zh-CN" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Czh-CN&amp;u='.$url.'" rel="nofollow">中文</a> /
<a lang="zh-TW" xml:lang="zh-TW" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fa%7Czh-TW&amp;u='.$url.'" rel="nofollow">漢語</a>';
		$francais = '<a lang="fr" xml:lang="fr" href="#">Français</a>'.$medhjos.'
<a lang="en" xml:lang="en" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Cen&amp;u='.$url.'" rel="nofollow">English</a>'.$medhjos.'
<a lang="af" xml:lang="af" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Caf&amp;u='.$url.'" rel="nofollow">Afrikaans</a>'.$medhjos.'  
<a lang="ar" xml:lang="ar" title="Araby" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Car&amp;u='.$url.'" rel="nofollow">العربية</a>'.$medhjos.'  
<a lang="be" xml:lang="be" title="Belaruskaya" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Cbe&amp;u='.$url.'" rel="nofollow">Беларуская</a>'.$medhjos.'  
<a lang="bg" xml:lang="bg" title="Bulgarski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Cbg&amp;u='.$url.'" rel="nofollow">Български</a>'.$medhjos.'  
<a lang="ca" xml:lang="ca" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Cca&amp;u='.$url.'" rel="nofollow">Català</a>'.$medhjos.'  
<a lang="cs" xml:lang="cs" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Ccs&amp;u='.$url.'" rel="nofollow">Česky</a>'.$medhjos.'  
<a lang="cy" xml:lang="cy" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Ccy&amp;u='.$url.'" rel="nofollow">Cymraeg</a>'.$medhjos.'  
<a lang="da" xml:lang="da" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Cda&amp;u='.$url.'" rel="nofollow">Dansk</a>'.$medhjos.'  
<a lang="de" xml:lang="de" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Cde&amp;u='.$url.'" rel="nofollow">Deutsch</a>'.$medhjos.'  
<a lang="et" xml:lang="et" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Cet&amp;u='.$url.'" rel="nofollow">Eesti</a>'.$medhjos.'  
<a lang="el" xml:lang="el" title="Ellenika" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Cel&amp;u='.$url.'" rel="nofollow">Ελληνικά</a>'.$medhjos.'  
<a lang="es" xml:lang="es" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Ces&amp;u='.$url.'" rel="nofollow">Español</a>'.$medhjos.'  
<a lang="fa" xml:lang="fa" title="Fārsī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Cfa&amp;u='.$url.'" rel="nofollow">فارسی</a>'.$medhjos.'  
<a lang="ga" xml:lang="ga" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Cga&amp;u='.$url.'" rel="nofollow">Gaeilge</a>'.$medhjos.'  
<a lang="gl" xml:lang="gl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Cgl&amp;u='.$url.'" rel="nofollow">Galego</a>'.$medhjos.'  
<a lang="hi" xml:lang="hi" title="Hindī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Chi&amp;u='.$url.'" rel="nofollow">हिन्दी</a>'.$medhjos.'  
<a lang="hr" xml:lang="hr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Chr&amp;u='.$url.'" rel="nofollow">Hrvatski</a>'.$medhjos.'  
<a lang="id" xml:lang="id" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Cid&amp;u='.$url.'" rel="nofollow">Bahasa Indonesia</a>'.$medhjos.'  
<a lang="is" xml:lang="is" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Cis&amp;u='.$url.'" rel="nofollow">Íslenska</a>'.$medhjos.'  
<a lang="it" xml:lang="it" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Cit&amp;u='.$url.'" rel="nofollow">Italiano</a>'.$medhjos.'  
<a lang="he" xml:lang="he" title="‘Ivrit" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Che&amp;u='.$url.'" rel="nofollow">עברית</a>'.$medhjos.'  
<a lang="lv" xml:lang="lv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Clv&amp;u='.$url.'" rel="nofollow">Latviešu</a>'.$medhjos.'  
<a lang="lt" xml:lang="lt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Clt&amp;u='.$url.'" rel="nofollow">Lietuvių</a>'.$medhjos.'  
<a lang="ko" xml:lang="ko" title="Hangugeo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Cko&amp;u='.$url.'" rel="nofollow">한국어</a>'.$medhjos.'  
<a lang="hu" xml:lang="hu" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Chu&amp;u='.$url.'" rel="nofollow">Magyar</a>'.$medhjos.'  
<a lang="mk" xml:lang="mk" title="Makedonski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Cmk&amp;u='.$url.'" rel="nofollow">Македонски</a>'.$medhjos.'  
<a lang="ml" xml:lang="ml" title="Malayalam" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Cml&amp;u='.$url.'" rel="nofollow">മലയാളം</a>'.$medhjos.'  
<a lang="mt" xml:lang="mt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Cmt&amp;u='.$url.'" rel="nofollow">Malti</a>'.$medhjos.'  
<a lang="nl" xml:lang="nl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Cnl&amp;u='.$url.'" rel="nofollow">Nederlands</a>'.$medhjos.'  
<a lang="ja" xml:lang="ja" title="Nihongo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Cja&amp;u='.$url.'" rel="nofollow">日本語</a>'.$medhjos.'  
<a lang="no" xml:lang="no" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Cno&amp;u='.$url.'" rel="nofollow">Norsk (Bokmål)</a>'.$medhjos.'  
<a lang="pl" xml:lang="pl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Cpl&amp;u='.$url.'" rel="nofollow">Polski</a>'.$medhjos.'  
<a lang="pt" xml:lang="pt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Cpt&amp;u='.$url.'" rel="nofollow">Português</a>'.$medhjos.'  
<a lang="ro" xml:lang="ro" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Cro&amp;u='.$url.'" rel="nofollow">Română</a>'.$medhjos.'  
<a lang="ru" xml:lang="ru" title="Russkij" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Cru&amp;u='.$url.'" rel="nofollow">Русский</a>'.$medhjos.'  
<a lang="sk" xml:lang="sk" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Csk&amp;u='.$url.'" rel="nofollow">Slovenčina</a>'.$medhjos.'  
<a lang="sl" xml:lang="sl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Csl&amp;u='.$url.'" rel="nofollow">Slovenščina</a>'.$medhjos.'  
<a lang="sq" xml:lang="sq" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Csq&amp;u='.$url.'" rel="nofollow">Shqip</a>'.$medhjos.'  
<a lang="sr" xml:lang="sr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Csr&amp;u='.$url.'" rel="nofollow">Srpski</a>'.$medhjos.'  
<a lang="fi" xml:lang="fi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Cfi&amp;u='.$url.'" rel="nofollow">Suomi</a>'.$medhjos.'  
<a lang="sv" xml:lang="sv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Csv&amp;u='.$url.'" rel="nofollow">Svenska</a>'.$medhjos.'  
<a lang="sw" xml:lang="sw" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Csw&amp;u='.$url.'" rel="nofollow">Kiswahili</a>'.$medhjos.'  
<a lang="th" xml:lang="th" title="Thai" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Cth&amp;u='.$url.'" rel="nofollow">ไทย</a>'.$medhjos.'  
<a lang="tl" xml:lang="tl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Ctl&amp;u='.$url.'" rel="nofollow">Tagalog</a>'.$medhjos.'  
<a lang="tr" xml:lang="tr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Ctr&amp;u='.$url.'" rel="nofollow">Türkçe</a>'.$medhjos.'  
<a lang="uk" xml:lang="uk" title="Ukraïns’ka" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Cuk&amp;u='.$url.'" rel="nofollow">Українська</a>'.$medhjos.'  
<a lang="vi" xml:lang="vi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Cvi&amp;u='.$url.'" rel="nofollow">Tiếng Việt</a>'.$medhjos.'  
<a lang="yi" xml:lang="yi" title="Yidiš" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Cyi&amp;u='.$url.'" rel="nofollow">ייִדיש</a>.'.$medhjos.'  
<a lang="zh-CN" xml:lang="zh-CN" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Czh-CN&amp;u='.$url.'" rel="nofollow">中文</a> /
<a lang="zh-TW" xml:lang="zh-TW" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fr%7Czh-TW&amp;u='.$url.'" rel="nofollow">漢語</a>';
		$gaeilge = '<a lang="ga" xml:lang="ga" href="#">Gaeilge</a>'.$medhjos.'
<a lang="en" xml:lang="en" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Cen&amp;u='.$url.'" rel="nofollow">English</a>'.$medhjos.'
<a lang="af" xml:lang="af" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Caf&amp;u='.$url.'" rel="nofollow">Afrikaans</a>'.$medhjos.'  
<a lang="ar" xml:lang="ar" title="Araby" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Car&amp;u='.$url.'" rel="nofollow">العربية</a>'.$medhjos.'  
<a lang="be" xml:lang="be" title="Belaruskaya" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Cbe&amp;u='.$url.'" rel="nofollow">Беларуская</a>'.$medhjos.'  
<a lang="bg" xml:lang="bg" title="Bulgarski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Cbg&amp;u='.$url.'" rel="nofollow">Български</a>'.$medhjos.'  
<a lang="ca" xml:lang="ca" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Cca&amp;u='.$url.'" rel="nofollow">Català</a>'.$medhjos.'  
<a lang="cs" xml:lang="cs" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Ccs&amp;u='.$url.'" rel="nofollow">Česky</a>'.$medhjos.'  
<a lang="cy" xml:lang="cy" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Ccy&amp;u='.$url.'" rel="nofollow">Cymraeg</a>'.$medhjos.'  
<a lang="da" xml:lang="da" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Cda&amp;u='.$url.'" rel="nofollow">Dansk</a>'.$medhjos.'  
<a lang="de" xml:lang="de" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Cde&amp;u='.$url.'" rel="nofollow">Deutsch</a>'.$medhjos.'  
<a lang="et" xml:lang="et" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Cet&amp;u='.$url.'" rel="nofollow">Eesti</a>'.$medhjos.'  
<a lang="el" xml:lang="el" title="Ellenika" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Cel&amp;u='.$url.'" rel="nofollow">Ελληνικά</a>'.$medhjos.'  
<a lang="es" xml:lang="es" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Ces&amp;u='.$url.'" rel="nofollow">Español</a>'.$medhjos.'  
<a lang="fa" xml:lang="fa" title="Fārsī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Cfa&amp;u='.$url.'" rel="nofollow">فارسی</a>'.$medhjos.'  
<a lang="fr" xml:lang="fr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Cfr&amp;u='.$url.'" rel="nofollow">Français</a>'.$medhjos.'  
<a lang="gl" xml:lang="gl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Cgl&amp;u='.$url.'" rel="nofollow">Galego</a>'.$medhjos.'  
<a lang="hi" xml:lang="hi" title="Hindī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Chi&amp;u='.$url.'" rel="nofollow">हिन्दी</a>'.$medhjos.'  
<a lang="hr" xml:lang="hr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Chr&amp;u='.$url.'" rel="nofollow">Hrvatski</a>'.$medhjos.'  
<a lang="id" xml:lang="id" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Cid&amp;u='.$url.'" rel="nofollow">Bahasa Indonesia</a>'.$medhjos.'  
<a lang="is" xml:lang="is" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Cis&amp;u='.$url.'" rel="nofollow">Íslenska</a>'.$medhjos.'  
<a lang="it" xml:lang="it" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Cit&amp;u='.$url.'" rel="nofollow">Italiano</a>'.$medhjos.'  
<a lang="he" xml:lang="he" title="‘Ivrit" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Che&amp;u='.$url.'" rel="nofollow">עברית</a>'.$medhjos.'  
<a lang="lv" xml:lang="lv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Clv&amp;u='.$url.'" rel="nofollow">Latviešu</a>'.$medhjos.'  
<a lang="lt" xml:lang="lt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Clt&amp;u='.$url.'" rel="nofollow">Lietuvių</a>'.$medhjos.'  
<a lang="ko" xml:lang="ko" title="Hangugeo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Cko&amp;u='.$url.'" rel="nofollow">한국어</a>'.$medhjos.'  
<a lang="hu" xml:lang="hu" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Chu&amp;u='.$url.'" rel="nofollow">Magyar</a>'.$medhjos.'  
<a lang="mk" xml:lang="mk" title="Makedonski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Cmk&amp;u='.$url.'" rel="nofollow">Македонски</a>'.$medhjos.'  
<a lang="ml" xml:lang="ml" title="Malayalam" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Cml&amp;u='.$url.'" rel="nofollow">മലയാളം</a>'.$medhjos.'  
<a lang="mt" xml:lang="mt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Cmt&amp;u='.$url.'" rel="nofollow">Malti</a>'.$medhjos.'  
<a lang="nl" xml:lang="nl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Cnl&amp;u='.$url.'" rel="nofollow">Nederlands</a>'.$medhjos.'  
<a lang="ja" xml:lang="ja" title="Nihongo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Cja&amp;u='.$url.'" rel="nofollow">日本語</a>'.$medhjos.'  
<a lang="no" xml:lang="no" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Cno&amp;u='.$url.'" rel="nofollow">Norsk (Bokmål)</a>'.$medhjos.'  
<a lang="pl" xml:lang="pl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Cpl&amp;u='.$url.'" rel="nofollow">Polski</a>'.$medhjos.'  
<a lang="pt" xml:lang="pt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Cpt&amp;u='.$url.'" rel="nofollow">Português</a>'.$medhjos.'  
<a lang="ro" xml:lang="ro" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Cro&amp;u='.$url.'" rel="nofollow">Română</a>'.$medhjos.'  
<a lang="ru" xml:lang="ru" title="Russkij" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Cru&amp;u='.$url.'" rel="nofollow">Русский</a>'.$medhjos.'  
<a lang="sk" xml:lang="sk" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Csk&amp;u='.$url.'" rel="nofollow">Slovenčina</a>'.$medhjos.'  
<a lang="sl" xml:lang="sl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Csl&amp;u='.$url.'" rel="nofollow">Slovenščina</a>'.$medhjos.'  
<a lang="sq" xml:lang="sq" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Csq&amp;u='.$url.'" rel="nofollow">Shqip</a>'.$medhjos.'  
<a lang="sr" xml:lang="sr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Csr&amp;u='.$url.'" rel="nofollow">Srpski</a>'.$medhjos.'  
<a lang="fi" xml:lang="fi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Cfi&amp;u='.$url.'" rel="nofollow">Suomi</a>'.$medhjos.'  
<a lang="sv" xml:lang="sv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Csv&amp;u='.$url.'" rel="nofollow">Svenska</a>'.$medhjos.'  
<a lang="sw" xml:lang="sw" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Csw&amp;u='.$url.'" rel="nofollow">Kiswahili</a>'.$medhjos.'  
<a lang="th" xml:lang="th" title="Thai" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Cth&amp;u='.$url.'" rel="nofollow">ไทย</a>'.$medhjos.'  
<a lang="tl" xml:lang="tl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Ctl&amp;u='.$url.'" rel="nofollow">Tagalog</a>'.$medhjos.'  
<a lang="tr" xml:lang="tr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Ctr&amp;u='.$url.'" rel="nofollow">Türkçe</a>'.$medhjos.'  
<a lang="uk" xml:lang="uk" title="Ukraïns’ka" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Cuk&amp;u='.$url.'" rel="nofollow">Українська</a>'.$medhjos.'  
<a lang="vi" xml:lang="vi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Cvi&amp;u='.$url.'" rel="nofollow">Tiếng Việt</a>'.$medhjos.'  
<a lang="yi" xml:lang="yi" title="Yidiš" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Cyi&amp;u='.$url.'" rel="nofollow">ייִדיש</a>.'.$medhjos.'  
<a lang="zh-CN" xml:lang="zh-CN" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Czh-CN&amp;u='.$url.'" rel="nofollow">中文</a> /
<a lang="zh-TW" xml:lang="zh-TW" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ga%7Czh-TW&amp;u='.$url.'" rel="nofollow">漢語</a>';
		$galego = '<a lang="gl" xml:lang="gl" href="#">Galego</a>'.$medhjos.'	
<a lang="en" xml:lang="en" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Cen&amp;u='.$url.'" rel="nofollow">English</a>'.$medhjos.'
<a lang="af" xml:lang="af" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Caf&amp;u='.$url.'" rel="nofollow">Afrikaans</a>'.$medhjos.'  
<a lang="ar" xml:lang="ar" title="Araby" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Car&amp;u='.$url.'" rel="nofollow">العربية</a>'.$medhjos.'  
<a lang="be" xml:lang="be" title="Belaruskaya" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Cbe&amp;u='.$url.'" rel="nofollow">Беларуская</a>'.$medhjos.'  
<a lang="bg" xml:lang="bg" title="Bulgarski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Cbg&amp;u='.$url.'" rel="nofollow">Български</a>'.$medhjos.'  
<a lang="ca" xml:lang="ca" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Cca&amp;u='.$url.'" rel="nofollow">Català</a>'.$medhjos.'  
<a lang="cs" xml:lang="cs" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Ccs&amp;u='.$url.'" rel="nofollow">Česky</a>'.$medhjos.'  
<a lang="cy" xml:lang="cy" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Ccy&amp;u='.$url.'" rel="nofollow">Cymraeg</a>'.$medhjos.'  
<a lang="da" xml:lang="da" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Cda&amp;u='.$url.'" rel="nofollow">Dansk</a>'.$medhjos.'  
<a lang="de" xml:lang="de" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Cde&amp;u='.$url.'" rel="nofollow">Deutsch</a>'.$medhjos.'  
<a lang="et" xml:lang="et" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Cet&amp;u='.$url.'" rel="nofollow">Eesti</a>'.$medhjos.'  
<a lang="el" xml:lang="el" title="Ellenika" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Cel&amp;u='.$url.'" rel="nofollow">Ελληνικά</a>'.$medhjos.'  
<a lang="es" xml:lang="es" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Ces&amp;u='.$url.'" rel="nofollow">Español</a>'.$medhjos.'  
<a lang="fa" xml:lang="fa" title="Fārsī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Cfa&amp;u='.$url.'" rel="nofollow">فارسی</a>'.$medhjos.'  
<a lang="fr" xml:lang="fr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Cfr&amp;u='.$url.'" rel="nofollow">Français</a>'.$medhjos.'  
<a lang="ga" xml:lang="ga" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Cga&amp;u='.$url.'" rel="nofollow">Gaeilge</a>'.$medhjos.'  
<a lang="hi" xml:lang="hi" title="Hindī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Chi&amp;u='.$url.'" rel="nofollow">हिन्दी</a>'.$medhjos.'  
<a lang="hr" xml:lang="hr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Chr&amp;u='.$url.'" rel="nofollow">Hrvatski</a>'.$medhjos.'  
<a lang="id" xml:lang="id" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Cid&amp;u='.$url.'" rel="nofollow">Bahasa Indonesia</a>'.$medhjos.'  
<a lang="is" xml:lang="is" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Cis&amp;u='.$url.'" rel="nofollow">Íslenska</a>'.$medhjos.'  
<a lang="it" xml:lang="it" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Cit&amp;u='.$url.'" rel="nofollow">Italiano</a>'.$medhjos.'  
<a lang="he" xml:lang="he" title="‘Ivrit" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Che&amp;u='.$url.'" rel="nofollow">עברית</a>'.$medhjos.'  
<a lang="lv" xml:lang="lv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Clv&amp;u='.$url.'" rel="nofollow">Latviešu</a>'.$medhjos.'  
<a lang="lt" xml:lang="lt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Clt&amp;u='.$url.'" rel="nofollow">Lietuvių</a>'.$medhjos.'  
<a lang="ko" xml:lang="ko" title="Hangugeo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Cko&amp;u='.$url.'" rel="nofollow">한국어</a>'.$medhjos.'  
<a lang="hu" xml:lang="hu" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Chu&amp;u='.$url.'" rel="nofollow">Magyar</a>'.$medhjos.'  
<a lang="mk" xml:lang="mk" title="Makedonski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Cmk&amp;u='.$url.'" rel="nofollow">Македонски</a>'.$medhjos.'  
<a lang="ml" xml:lang="ml" title="Malayalam" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Cml&amp;u='.$url.'" rel="nofollow">മലയാളം</a>'.$medhjos.'  
<a lang="mt" xml:lang="mt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Cmt&amp;u='.$url.'" rel="nofollow">Malti</a>'.$medhjos.'  
<a lang="nl" xml:lang="nl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Cnl&amp;u='.$url.'" rel="nofollow">Nederlands</a>'.$medhjos.'  
<a lang="ja" xml:lang="ja" title="Nihongo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Cja&amp;u='.$url.'" rel="nofollow">日本語</a>'.$medhjos.'  
<a lang="no" xml:lang="no" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Cno&amp;u='.$url.'" rel="nofollow">Norsk (Bokmål)</a>'.$medhjos.'  
<a lang="pl" xml:lang="pl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Cpl&amp;u='.$url.'" rel="nofollow">Polski</a>'.$medhjos.'  
<a lang="pt" xml:lang="pt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Cpt&amp;u='.$url.'" rel="nofollow">Português</a>'.$medhjos.'  
<a lang="ro" xml:lang="ro" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Cro&amp;u='.$url.'" rel="nofollow">Română</a>'.$medhjos.'  
<a lang="ru" xml:lang="ru" title="Russkij" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Cru&amp;u='.$url.'" rel="nofollow">Русский</a>'.$medhjos.'  
<a lang="sk" xml:lang="sk" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Csk&amp;u='.$url.'" rel="nofollow">Slovenčina</a>'.$medhjos.'  
<a lang="sl" xml:lang="sl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Csl&amp;u='.$url.'" rel="nofollow">Slovenščina</a>'.$medhjos.'  
<a lang="sq" xml:lang="sq" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Csq&amp;u='.$url.'" rel="nofollow">Shqip</a>'.$medhjos.'  
<a lang="sr" xml:lang="sr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Csr&amp;u='.$url.'" rel="nofollow">Srpski</a>'.$medhjos.'  
<a lang="fi" xml:lang="fi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Cfi&amp;u='.$url.'" rel="nofollow">Suomi</a>'.$medhjos.'  
<a lang="sv" xml:lang="sv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Csv&amp;u='.$url.'" rel="nofollow">Svenska</a>'.$medhjos.'  
<a lang="sw" xml:lang="sw" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Csw&amp;u='.$url.'" rel="nofollow">Kiswahili</a>'.$medhjos.'  
<a lang="th" xml:lang="th" title="Thai" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Cth&amp;u='.$url.'" rel="nofollow">ไทย</a>'.$medhjos.'  
<a lang="tl" xml:lang="tl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Ctl&amp;u='.$url.'" rel="nofollow">Tagalog</a>'.$medhjos.'  
<a lang="tr" xml:lang="tr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Ctr&amp;u='.$url.'" rel="nofollow">Türkçe</a>'.$medhjos.'  
<a lang="uk" xml:lang="uk" title="Ukraïns’ka" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Cuk&amp;u='.$url.'" rel="nofollow">Українська</a>'.$medhjos.'  
<a lang="vi" xml:lang="vi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Cvi&amp;u='.$url.'" rel="nofollow">Tiếng Việt</a>'.$medhjos.'  
<a lang="yi" xml:lang="yi" title="Yidiš" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Cyi&amp;u='.$url.'" rel="nofollow">ייִדיש</a>.'.$medhjos.'  
<a lang="zh-CN" xml:lang="zh-CN" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Czh-CN&amp;u='.$url.'" rel="nofollow">中文</a> /
<a lang="zh-TW" xml:lang="zh-TW" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=gl%7Czh-TW&amp;u='.$url.'" rel="nofollow">漢語</a>';
		$hindi = '<a lang="hi" xml:lang="hi" href="#">हिन्दी</a>'.$medhjos.'
<a lang="en" xml:lang="en" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Cen&amp;u='.$url.'" rel="nofollow">English</a>'.$medhjos.'
<a lang="af" xml:lang="af" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Caf&amp;u='.$url.'" rel="nofollow">Afrikaans</a>'.$medhjos.'  
<a lang="ar" xml:lang="ar" title="Araby" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Car&amp;u='.$url.'" rel="nofollow">العربية</a>'.$medhjos.'  
<a lang="be" xml:lang="be" title="Belaruskaya" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Cbe&amp;u='.$url.'" rel="nofollow">Беларуская</a>'.$medhjos.'  
<a lang="bg" xml:lang="bg" title="Bulgarski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Cbg&amp;u='.$url.'" rel="nofollow">Български</a>'.$medhjos.'  
<a lang="ca" xml:lang="ca" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Cca&amp;u='.$url.'" rel="nofollow">Català</a>'.$medhjos.'  
<a lang="cs" xml:lang="cs" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Ccs&amp;u='.$url.'" rel="nofollow">Česky</a>'.$medhjos.'  
<a lang="cy" xml:lang="cy" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Ccy&amp;u='.$url.'" rel="nofollow">Cymraeg</a>'.$medhjos.'  
<a lang="da" xml:lang="da" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Cda&amp;u='.$url.'" rel="nofollow">Dansk</a>'.$medhjos.'  
<a lang="de" xml:lang="de" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Cde&amp;u='.$url.'" rel="nofollow">Deutsch</a>'.$medhjos.'  
<a lang="et" xml:lang="et" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Cet&amp;u='.$url.'" rel="nofollow">Eesti</a>'.$medhjos.'  
<a lang="el" xml:lang="el" title="Ellenika" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Cel&amp;u='.$url.'" rel="nofollow">Ελληνικά</a>'.$medhjos.'  
<a lang="es" xml:lang="es" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Ces&amp;u='.$url.'" rel="nofollow">Español</a>'.$medhjos.'  
<a lang="fa" xml:lang="fa" title="Fārsī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Cfa&amp;u='.$url.'" rel="nofollow">فارسی</a>'.$medhjos.'  
<a lang="fr" xml:lang="fr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Cfr&amp;u='.$url.'" rel="nofollow">Français</a>'.$medhjos.'  
<a lang="ga" xml:lang="ga" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Cga&amp;u='.$url.'" rel="nofollow">Gaeilge</a>'.$medhjos.'  
<a lang="gl" xml:lang="gl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Cgl&amp;u='.$url.'" rel="nofollow">Galego</a>'.$medhjos.'  
<a lang="hr" xml:lang="hr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Chr&amp;u='.$url.'" rel="nofollow">Hrvatski</a>'.$medhjos.'  
<a lang="id" xml:lang="id" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Cid&amp;u='.$url.'" rel="nofollow">Bahasa Indonesia</a>'.$medhjos.'  
<a lang="is" xml:lang="is" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Cis&amp;u='.$url.'" rel="nofollow">Íslenska</a>'.$medhjos.'  
<a lang="it" xml:lang="it" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Cit&amp;u='.$url.'" rel="nofollow">Italiano</a>'.$medhjos.'  
<a lang="he" xml:lang="he" title="‘Ivrit" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Che&amp;u='.$url.'" rel="nofollow">עברית</a>'.$medhjos.'  
<a lang="lv" xml:lang="lv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Clv&amp;u='.$url.'" rel="nofollow">Latviešu</a>'.$medhjos.'  
<a lang="lt" xml:lang="lt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Clt&amp;u='.$url.'" rel="nofollow">Lietuvių</a>'.$medhjos.'  
<a lang="ko" xml:lang="ko" title="Hangugeo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Cko&amp;u='.$url.'" rel="nofollow">한국어</a>'.$medhjos.'  
<a lang="hu" xml:lang="hu" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Chu&amp;u='.$url.'" rel="nofollow">Magyar</a>'.$medhjos.'  
<a lang="mk" xml:lang="mk" title="Makedonski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Cmk&amp;u='.$url.'" rel="nofollow">Македонски</a>'.$medhjos.'  
<a lang="ml" xml:lang="ml" title="Malayalam" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Cml&amp;u='.$url.'" rel="nofollow">മലയാളം</a>'.$medhjos.'  
<a lang="mt" xml:lang="mt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Cmt&amp;u='.$url.'" rel="nofollow">Malti</a>'.$medhjos.'  
<a lang="nl" xml:lang="nl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Cnl&amp;u='.$url.'" rel="nofollow">Nederlands</a>'.$medhjos.'  
<a lang="ja" xml:lang="ja" title="Nihongo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Cja&amp;u='.$url.'" rel="nofollow">日本語</a>'.$medhjos.'  
<a lang="no" xml:lang="no" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Cno&amp;u='.$url.'" rel="nofollow">Norsk (Bokmål)</a>'.$medhjos.'  
<a lang="pl" xml:lang="pl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Cpl&amp;u='.$url.'" rel="nofollow">Polski</a>'.$medhjos.'  
<a lang="pt" xml:lang="pt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Cpt&amp;u='.$url.'" rel="nofollow">Português</a>'.$medhjos.'  
<a lang="ro" xml:lang="ro" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Cro&amp;u='.$url.'" rel="nofollow">Română</a>'.$medhjos.'  
<a lang="ru" xml:lang="ru" title="Russkij" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Cru&amp;u='.$url.'" rel="nofollow">Русский</a>'.$medhjos.'  
<a lang="sk" xml:lang="sk" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Csk&amp;u='.$url.'" rel="nofollow">Slovenčina</a>'.$medhjos.'  
<a lang="sl" xml:lang="sl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Csl&amp;u='.$url.'" rel="nofollow">Slovenščina</a>'.$medhjos.'  
<a lang="sq" xml:lang="sq" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Csq&amp;u='.$url.'" rel="nofollow">Shqip</a>'.$medhjos.'  
<a lang="sr" xml:lang="sr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Csr&amp;u='.$url.'" rel="nofollow">Srpski</a>'.$medhjos.'  
<a lang="fi" xml:lang="fi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Cfi&amp;u='.$url.'" rel="nofollow">Suomi</a>'.$medhjos.'  
<a lang="sv" xml:lang="sv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Csv&amp;u='.$url.'" rel="nofollow">Svenska</a>'.$medhjos.'  
<a lang="sw" xml:lang="sw" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Csw&amp;u='.$url.'" rel="nofollow">Kiswahili</a>'.$medhjos.'  
<a lang="th" xml:lang="th" title="Thai" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Cth&amp;u='.$url.'" rel="nofollow">ไทย</a>'.$medhjos.'  
<a lang="tl" xml:lang="tl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Ctl&amp;u='.$url.'" rel="nofollow">Tagalog</a>'.$medhjos.'  
<a lang="tr" xml:lang="tr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Ctr&amp;u='.$url.'" rel="nofollow">Türkçe</a>'.$medhjos.'  
<a lang="uk" xml:lang="uk" title="Ukraïns’ka" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Cuk&amp;u='.$url.'" rel="nofollow">Українська</a>'.$medhjos.'  
<a lang="vi" xml:lang="vi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Cvi&amp;u='.$url.'" rel="nofollow">Tiếng Việt</a>'.$medhjos.'  
<a lang="yi" xml:lang="yi" title="Yidiš" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Cyi&amp;u='.$url.'" rel="nofollow">ייִדיש</a>.'.$medhjos.'  
<a lang="zh-CN" xml:lang="zh-CN" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Czh-CN&amp;u='.$url.'" rel="nofollow">中文</a> /
<a lang="zh-TW" xml:lang="zh-TW" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hi%7Czh-TW&amp;u='.$url.'" rel="nofollow">漢語</a>';
		$hrvatski = '<a lang="hr" xml:lang="hr" href="#">Hrvatski</a>'.$medhjos.'
<a lang="en" xml:lang="en" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Cen&amp;u='.$url.'" rel="nofollow">English</a>'.$medhjos.'
<a lang="af" xml:lang="af" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Caf&amp;u='.$url.'" rel="nofollow">Afrikaans</a>'.$medhjos.'  
<a lang="ar" xml:lang="ar" title="Araby" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Car&amp;u='.$url.'" rel="nofollow">العربية</a>'.$medhjos.'  
<a lang="be" xml:lang="be" title="Belaruskaya" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Cbe&amp;u='.$url.'" rel="nofollow">Беларуская</a>'.$medhjos.'  
<a lang="bg" xml:lang="bg" title="Bulgarski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Cbg&amp;u='.$url.'" rel="nofollow">Български</a>'.$medhjos.'  
<a lang="ca" xml:lang="ca" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Cca&amp;u='.$url.'" rel="nofollow">Català</a>'.$medhjos.'  
<a lang="cs" xml:lang="cs" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Ccs&amp;u='.$url.'" rel="nofollow">Česky</a>'.$medhjos.'  
<a lang="cy" xml:lang="cy" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Ccy&amp;u='.$url.'" rel="nofollow">Cymraeg</a>'.$medhjos.'  
<a lang="da" xml:lang="da" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Cda&amp;u='.$url.'" rel="nofollow">Dansk</a>'.$medhjos.'  
<a lang="de" xml:lang="de" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Cde&amp;u='.$url.'" rel="nofollow">Deutsch</a>'.$medhjos.'  
<a lang="et" xml:lang="et" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Cet&amp;u='.$url.'" rel="nofollow">Eesti</a>'.$medhjos.'  
<a lang="el" xml:lang="el" title="Ellenika" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Cel&amp;u='.$url.'" rel="nofollow">Ελληνικά</a>'.$medhjos.'  
<a lang="es" xml:lang="es" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Ces&amp;u='.$url.'" rel="nofollow">Español</a>'.$medhjos.'  
<a lang="fa" xml:lang="fa" title="Fārsī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Cfa&amp;u='.$url.'" rel="nofollow">فارسی</a>'.$medhjos.'  
<a lang="fr" xml:lang="fr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Cfr&amp;u='.$url.'" rel="nofollow">Français</a>'.$medhjos.'  
<a lang="ga" xml:lang="ga" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Cga&amp;u='.$url.'" rel="nofollow">Gaeilge</a>'.$medhjos.'  
<a lang="gl" xml:lang="gl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Cgl&amp;u='.$url.'" rel="nofollow">Galego</a>'.$medhjos.'  
<a lang="hi" xml:lang="hi" title="Hindī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Chi&amp;u='.$url.'" rel="nofollow">हिन्दी</a>'.$medhjos.'  
<a lang="id" xml:lang="id" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Cid&amp;u='.$url.'" rel="nofollow">Bahasa Indonesia</a>'.$medhjos.'  
<a lang="is" xml:lang="is" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Cis&amp;u='.$url.'" rel="nofollow">Íslenska</a>'.$medhjos.'  
<a lang="it" xml:lang="it" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Cit&amp;u='.$url.'" rel="nofollow">Italiano</a>'.$medhjos.'  
<a lang="he" xml:lang="he" title="‘Ivrit" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Che&amp;u='.$url.'" rel="nofollow">עברית</a>'.$medhjos.'  
<a lang="lv" xml:lang="lv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Clv&amp;u='.$url.'" rel="nofollow">Latviešu</a>'.$medhjos.'  
<a lang="lt" xml:lang="lt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Clt&amp;u='.$url.'" rel="nofollow">Lietuvių</a>'.$medhjos.'  
<a lang="ko" xml:lang="ko" title="Hangugeo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Cko&amp;u='.$url.'" rel="nofollow">한국어</a>'.$medhjos.'  
<a lang="hu" xml:lang="hu" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Chu&amp;u='.$url.'" rel="nofollow">Magyar</a>'.$medhjos.'  
<a lang="mk" xml:lang="mk" title="Makedonski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Cmk&amp;u='.$url.'" rel="nofollow">Македонски</a>'.$medhjos.'  
<a lang="ml" xml:lang="ml" title="Malayalam" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Cml&amp;u='.$url.'" rel="nofollow">മലയാളം</a>'.$medhjos.'  
<a lang="mt" xml:lang="mt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Cmt&amp;u='.$url.'" rel="nofollow">Malti</a>'.$medhjos.'  
<a lang="nl" xml:lang="nl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Cnl&amp;u='.$url.'" rel="nofollow">Nederlands</a>'.$medhjos.'  
<a lang="ja" xml:lang="ja" title="Nihongo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Cja&amp;u='.$url.'" rel="nofollow">日本語</a>'.$medhjos.'  
<a lang="no" xml:lang="no" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Cno&amp;u='.$url.'" rel="nofollow">Norsk (Bokmål)</a>'.$medhjos.'  
<a lang="pl" xml:lang="pl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Cpl&amp;u='.$url.'" rel="nofollow">Polski</a>'.$medhjos.'  
<a lang="pt" xml:lang="pt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Cpt&amp;u='.$url.'" rel="nofollow">Português</a>'.$medhjos.'  
<a lang="ro" xml:lang="ro" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Cro&amp;u='.$url.'" rel="nofollow">Română</a>'.$medhjos.'  
<a lang="ru" xml:lang="ru" title="Russkij" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Cru&amp;u='.$url.'" rel="nofollow">Русский</a>'.$medhjos.'  
<a lang="sk" xml:lang="sk" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Csk&amp;u='.$url.'" rel="nofollow">Slovenčina</a>'.$medhjos.'  
<a lang="sl" xml:lang="sl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Csl&amp;u='.$url.'" rel="nofollow">Slovenščina</a>'.$medhjos.'  
<a lang="sq" xml:lang="sq" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Csq&amp;u='.$url.'" rel="nofollow">Shqip</a>'.$medhjos.'  
<a lang="sr" xml:lang="sr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Csr&amp;u='.$url.'" rel="nofollow">Srpski</a>'.$medhjos.'  
<a lang="fi" xml:lang="fi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Cfi&amp;u='.$url.'" rel="nofollow">Suomi</a>'.$medhjos.'  
<a lang="sv" xml:lang="sv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Csv&amp;u='.$url.'" rel="nofollow">Svenska</a>'.$medhjos.'  
<a lang="sw" xml:lang="sw" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Csw&amp;u='.$url.'" rel="nofollow">Kiswahili</a>'.$medhjos.'  
<a lang="th" xml:lang="th" title="Thai" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Cth&amp;u='.$url.'" rel="nofollow">ไทย</a>'.$medhjos.'  
<a lang="tl" xml:lang="tl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Ctl&amp;u='.$url.'" rel="nofollow">Tagalog</a>'.$medhjos.'  
<a lang="tr" xml:lang="tr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Ctr&amp;u='.$url.'" rel="nofollow">Türkçe</a>'.$medhjos.'  
<a lang="uk" xml:lang="uk" title="Ukraïns’ka" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Cuk&amp;u='.$url.'" rel="nofollow">Українська</a>'.$medhjos.'  
<a lang="vi" xml:lang="vi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Cvi&amp;u='.$url.'" rel="nofollow">Tiếng Việt</a>'.$medhjos.'  
<a lang="yi" xml:lang="yi" title="Yidiš" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Cyi&amp;u='.$url.'" rel="nofollow">ייִדיש</a>.'.$medhjos.'  
<a lang="zh-CN" xml:lang="zh-CN" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Czh-CN&amp;u='.$url.'" rel="nofollow">中文</a> /
<a lang="zh-TW" xml:lang="zh-TW" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hr%7Czh-TW&amp;u='.$url.'" rel="nofollow">漢語</a>';
		$indonesia = '<a lang="id" xml:lang="id" href="#">Bahasa Indonesia</a>'.$medhjos.'
<a lang="en" xml:lang="en" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Cen&amp;u='.$url.'" rel="nofollow">English</a>'.$medhjos.'
<a lang="af" xml:lang="af" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Caf&amp;u='.$url.'" rel="nofollow">Afrikaans</a>'.$medhjos.'  
<a lang="ar" xml:lang="ar" title="Araby" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Car&amp;u='.$url.'" rel="nofollow">العربية</a>'.$medhjos.'  
<a lang="be" xml:lang="be" title="Belaruskaya" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Cbe&amp;u='.$url.'" rel="nofollow">Беларуская</a>'.$medhjos.'  
<a lang="bg" xml:lang="bg" title="Bulgarski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Cbg&amp;u='.$url.'" rel="nofollow">Български</a>'.$medhjos.'  
<a lang="ca" xml:lang="ca" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Cca&amp;u='.$url.'" rel="nofollow">Català</a>'.$medhjos.'  
<a lang="cs" xml:lang="cs" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Ccs&amp;u='.$url.'" rel="nofollow">Česky</a>'.$medhjos.'  
<a lang="cy" xml:lang="cy" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Ccy&amp;u='.$url.'" rel="nofollow">Cymraeg</a>'.$medhjos.'  
<a lang="da" xml:lang="da" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Cda&amp;u='.$url.'" rel="nofollow">Dansk</a>'.$medhjos.'  
<a lang="de" xml:lang="de" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Cde&amp;u='.$url.'" rel="nofollow">Deutsch</a>'.$medhjos.'  
<a lang="et" xml:lang="et" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Cet&amp;u='.$url.'" rel="nofollow">Eesti</a>'.$medhjos.'  
<a lang="el" xml:lang="el" title="Ellenika" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Cel&amp;u='.$url.'" rel="nofollow">Ελληνικά</a>'.$medhjos.'  
<a lang="es" xml:lang="es" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Ces&amp;u='.$url.'" rel="nofollow">Español</a>'.$medhjos.'  
<a lang="fa" xml:lang="fa" title="Fārsī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Cfa&amp;u='.$url.'" rel="nofollow">فارسی</a>'.$medhjos.'  
<a lang="fr" xml:lang="fr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Cfr&amp;u='.$url.'" rel="nofollow">Français</a>'.$medhjos.'  
<a lang="ga" xml:lang="ga" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Cga&amp;u='.$url.'" rel="nofollow">Gaeilge</a>'.$medhjos.'  
<a lang="gl" xml:lang="gl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Cgl&amp;u='.$url.'" rel="nofollow">Galego</a>'.$medhjos.'  
<a lang="hi" xml:lang="hi" title="Hindī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Chi&amp;u='.$url.'" rel="nofollow">हिन्दी</a>'.$medhjos.'  
<a lang="hr" xml:lang="hr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Chr&amp;u='.$url.'" rel="nofollow">Hrvatski</a>'.$medhjos.'  
<a lang="is" xml:lang="is" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Cis&amp;u='.$url.'" rel="nofollow">Íslenska</a>'.$medhjos.'  
<a lang="it" xml:lang="it" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Cit&amp;u='.$url.'" rel="nofollow">Italiano</a>'.$medhjos.'  
<a lang="he" xml:lang="he" title="‘Ivrit" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Che&amp;u='.$url.'" rel="nofollow">עברית</a>'.$medhjos.'  
<a lang="lv" xml:lang="lv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Clv&amp;u='.$url.'" rel="nofollow">Latviešu</a>'.$medhjos.'  
<a lang="lt" xml:lang="lt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Clt&amp;u='.$url.'" rel="nofollow">Lietuvių</a>'.$medhjos.'  
<a lang="ko" xml:lang="ko" title="Hangugeo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Cko&amp;u='.$url.'" rel="nofollow">한국어</a>'.$medhjos.'  
<a lang="hu" xml:lang="hu" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Chu&amp;u='.$url.'" rel="nofollow">Magyar</a>'.$medhjos.'  
<a lang="mk" xml:lang="mk" title="Makedonski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Cmk&amp;u='.$url.'" rel="nofollow">Македонски</a>'.$medhjos.'  
<a lang="ml" xml:lang="ml" title="Malayalam" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Cml&amp;u='.$url.'" rel="nofollow">മലയാളം</a>'.$medhjos.'  
<a lang="mt" xml:lang="mt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Cmt&amp;u='.$url.'" rel="nofollow">Malti</a>'.$medhjos.'  
<a lang="nl" xml:lang="nl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Cnl&amp;u='.$url.'" rel="nofollow">Nederlands</a>'.$medhjos.'  
<a lang="ja" xml:lang="ja" title="Nihongo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Cja&amp;u='.$url.'" rel="nofollow">日本語</a>'.$medhjos.'  
<a lang="no" xml:lang="no" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Cno&amp;u='.$url.'" rel="nofollow">Norsk (Bokmål)</a>'.$medhjos.'  
<a lang="pl" xml:lang="pl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Cpl&amp;u='.$url.'" rel="nofollow">Polski</a>'.$medhjos.'  
<a lang="pt" xml:lang="pt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Cpt&amp;u='.$url.'" rel="nofollow">Português</a>'.$medhjos.'  
<a lang="ro" xml:lang="ro" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Cro&amp;u='.$url.'" rel="nofollow">Română</a>'.$medhjos.'  
<a lang="ru" xml:lang="ru" title="Russkij" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Cru&amp;u='.$url.'" rel="nofollow">Русский</a>'.$medhjos.'  
<a lang="sk" xml:lang="sk" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Csk&amp;u='.$url.'" rel="nofollow">Slovenčina</a>'.$medhjos.'  
<a lang="sl" xml:lang="sl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Csl&amp;u='.$url.'" rel="nofollow">Slovenščina</a>'.$medhjos.'  
<a lang="sq" xml:lang="sq" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Csq&amp;u='.$url.'" rel="nofollow">Shqip</a>'.$medhjos.'  
<a lang="sr" xml:lang="sr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Csr&amp;u='.$url.'" rel="nofollow">Srpski</a>'.$medhjos.'  
<a lang="fi" xml:lang="fi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Cfi&amp;u='.$url.'" rel="nofollow">Suomi</a>'.$medhjos.'  
<a lang="sv" xml:lang="sv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Csv&amp;u='.$url.'" rel="nofollow">Svenska</a>'.$medhjos.'  
<a lang="sw" xml:lang="sw" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Csw&amp;u='.$url.'" rel="nofollow">Kiswahili</a>'.$medhjos.'  
<a lang="th" xml:lang="th" title="Thai" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Cth&amp;u='.$url.'" rel="nofollow">ไทย</a>'.$medhjos.'  
<a lang="tl" xml:lang="tl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Ctl&amp;u='.$url.'" rel="nofollow">Tagalog</a>'.$medhjos.'  
<a lang="tr" xml:lang="tr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Ctr&amp;u='.$url.'" rel="nofollow">Türkçe</a>'.$medhjos.'  
<a lang="uk" xml:lang="uk" title="Ukraïns’ka" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Cuk&amp;u='.$url.'" rel="nofollow">Українська</a>'.$medhjos.'  
<a lang="vi" xml:lang="vi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Cvi&amp;u='.$url.'" rel="nofollow">Tiếng Việt</a>'.$medhjos.'  
<a lang="yi" xml:lang="yi" title="Yidiš" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Cyi&amp;u='.$url.'" rel="nofollow">ייִדיש</a>.'.$medhjos.'  
<a lang="zh-CN" xml:lang="zh-CN" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Czh-CN&amp;u='.$url.'" rel="nofollow">中文</a> /
<a lang="zh-TW" xml:lang="zh-TW" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=id%7Czh-TW&amp;u='.$url.'" rel="nofollow">漢語</a>';
		$islenska = '<a lang="is" xml:lang="is" href="#">Íslenska</a>'.$medhjos.'
<a lang="en" xml:lang="en" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Cen&amp;u='.$url.'" rel="nofollow">English</a>'.$medhjos.'
<a lang="af" xml:lang="af" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Caf&amp;u='.$url.'" rel="nofollow">Afrikaans</a>'.$medhjos.'  
<a lang="ar" xml:lang="ar" title="Araby" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Car&amp;u='.$url.'" rel="nofollow">العربية</a>'.$medhjos.'  
<a lang="be" xml:lang="be" title="Belaruskaya" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Cbe&amp;u='.$url.'" rel="nofollow">Беларуская</a>'.$medhjos.'  
<a lang="bg" xml:lang="bg" title="Bulgarski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Cbg&amp;u='.$url.'" rel="nofollow">Български</a>'.$medhjos.'  
<a lang="ca" xml:lang="ca" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Cca&amp;u='.$url.'" rel="nofollow">Català</a>'.$medhjos.'  
<a lang="cs" xml:lang="cs" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Ccs&amp;u='.$url.'" rel="nofollow">Česky</a>'.$medhjos.'  
<a lang="cy" xml:lang="cy" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Ccy&amp;u='.$url.'" rel="nofollow">Cymraeg</a>'.$medhjos.'  
<a lang="da" xml:lang="da" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Cda&amp;u='.$url.'" rel="nofollow">Dansk</a>'.$medhjos.'  
<a lang="de" xml:lang="de" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Cde&amp;u='.$url.'" rel="nofollow">Deutsch</a>'.$medhjos.'  
<a lang="et" xml:lang="et" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Cet&amp;u='.$url.'" rel="nofollow">Eesti</a>'.$medhjos.'  
<a lang="el" xml:lang="el" title="Ellenika" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Cel&amp;u='.$url.'" rel="nofollow">Ελληνικά</a>'.$medhjos.'  
<a lang="es" xml:lang="es" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Ces&amp;u='.$url.'" rel="nofollow">Español</a>'.$medhjos.'  
<a lang="fa" xml:lang="fa" title="Fārsī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Cfa&amp;u='.$url.'" rel="nofollow">فارسی</a>'.$medhjos.'  
<a lang="fr" xml:lang="fr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Cfr&amp;u='.$url.'" rel="nofollow">Français</a>'.$medhjos.'  
<a lang="ga" xml:lang="ga" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Cga&amp;u='.$url.'" rel="nofollow">Gaeilge</a>'.$medhjos.'  
<a lang="gl" xml:lang="gl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Cgl&amp;u='.$url.'" rel="nofollow">Galego</a>'.$medhjos.'  
<a lang="hi" xml:lang="hi" title="Hindī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Chi&amp;u='.$url.'" rel="nofollow">हिन्दी</a>'.$medhjos.'  
<a lang="hr" xml:lang="hr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Chr&amp;u='.$url.'" rel="nofollow">Hrvatski</a>'.$medhjos.'  
<a lang="id" xml:lang="id" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Cid&amp;u='.$url.'" rel="nofollow">Bahasa Indonesia</a>'.$medhjos.'  
<a lang="it" xml:lang="it" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Cit&amp;u='.$url.'" rel="nofollow">Italiano</a>'.$medhjos.'  
<a lang="he" xml:lang="he" title="‘Ivrit" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Che&amp;u='.$url.'" rel="nofollow">עברית</a>'.$medhjos.'  
<a lang="lv" xml:lang="lv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Clv&amp;u='.$url.'" rel="nofollow">Latviešu</a>'.$medhjos.'  
<a lang="lt" xml:lang="lt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Clt&amp;u='.$url.'" rel="nofollow">Lietuvių</a>'.$medhjos.'  
<a lang="ko" xml:lang="ko" title="Hangugeo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Cko&amp;u='.$url.'" rel="nofollow">한국어</a>'.$medhjos.'  
<a lang="hu" xml:lang="hu" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Chu&amp;u='.$url.'" rel="nofollow">Magyar</a>'.$medhjos.'  
<a lang="mk" xml:lang="mk" title="Makedonski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Cmk&amp;u='.$url.'" rel="nofollow">Македонски</a>'.$medhjos.'  
<a lang="ml" xml:lang="ml" title="Malayalam" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Cml&amp;u='.$url.'" rel="nofollow">മലയാളം</a>'.$medhjos.'  
<a lang="mt" xml:lang="mt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Cmt&amp;u='.$url.'" rel="nofollow">Malti</a>'.$medhjos.'  
<a lang="nl" xml:lang="nl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Cnl&amp;u='.$url.'" rel="nofollow">Nederlands</a>'.$medhjos.'  
<a lang="ja" xml:lang="ja" title="Nihongo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Cja&amp;u='.$url.'" rel="nofollow">日本語</a>'.$medhjos.'  
<a lang="no" xml:lang="no" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Cno&amp;u='.$url.'" rel="nofollow">Norsk (Bokmål)</a>'.$medhjos.'  
<a lang="pl" xml:lang="pl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Cpl&amp;u='.$url.'" rel="nofollow">Polski</a>'.$medhjos.'  
<a lang="pt" xml:lang="pt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Cpt&amp;u='.$url.'" rel="nofollow">Português</a>'.$medhjos.'  
<a lang="ro" xml:lang="ro" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Cro&amp;u='.$url.'" rel="nofollow">Română</a>'.$medhjos.'  
<a lang="ru" xml:lang="ru" title="Russkij" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Cru&amp;u='.$url.'" rel="nofollow">Русский</a>'.$medhjos.'  
<a lang="sk" xml:lang="sk" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Csk&amp;u='.$url.'" rel="nofollow">Slovenčina</a>'.$medhjos.'  
<a lang="sl" xml:lang="sl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Csl&amp;u='.$url.'" rel="nofollow">Slovenščina</a>'.$medhjos.'  
<a lang="sq" xml:lang="sq" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Csq&amp;u='.$url.'" rel="nofollow">Shqip</a>'.$medhjos.'  
<a lang="sr" xml:lang="sr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Csr&amp;u='.$url.'" rel="nofollow">Srpski</a>'.$medhjos.'  
<a lang="fi" xml:lang="fi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Cfi&amp;u='.$url.'" rel="nofollow">Suomi</a>'.$medhjos.'  
<a lang="sv" xml:lang="sv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Csv&amp;u='.$url.'" rel="nofollow">Svenska</a>'.$medhjos.'  
<a lang="sw" xml:lang="sw" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Csw&amp;u='.$url.'" rel="nofollow">Kiswahili</a>'.$medhjos.'  
<a lang="th" xml:lang="th" title="Thai" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Cth&amp;u='.$url.'" rel="nofollow">ไทย</a>'.$medhjos.'  
<a lang="tl" xml:lang="tl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Ctl&amp;u='.$url.'" rel="nofollow">Tagalog</a>'.$medhjos.'  
<a lang="tr" xml:lang="tr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Ctr&amp;u='.$url.'" rel="nofollow">Türkçe</a>'.$medhjos.'  
<a lang="uk" xml:lang="uk" title="Ukraïns’ka" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Cuk&amp;u='.$url.'" rel="nofollow">Українська</a>'.$medhjos.'  
<a lang="vi" xml:lang="vi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Cvi&amp;u='.$url.'" rel="nofollow">Tiếng Việt</a>'.$medhjos.'  
<a lang="yi" xml:lang="yi" title="Yidiš" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Cyi&amp;u='.$url.'" rel="nofollow">ייִדיש</a>.'.$medhjos.'  
<a lang="zh-CN" xml:lang="zh-CN" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Czh-CN&amp;u='.$url.'" rel="nofollow">中文</a> /
<a lang="zh-TW" xml:lang="zh-TW" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=is%7Czh-TW&amp;u='.$url.'" rel="nofollow">漢語</a>';
		$italiano = '<a lang="it" xml:lang="it" href="#">Italiano</a>'.$medhjos.'
<a lang="en" xml:lang="en" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Cen&amp;u='.$url.'" rel="nofollow">English</a>'.$medhjos.'
<a lang="af" xml:lang="af" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Caf&amp;u='.$url.'" rel="nofollow">Afrikaans</a>'.$medhjos.'  
<a lang="ar" xml:lang="ar" title="Araby" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Car&amp;u='.$url.'" rel="nofollow">العربية</a>'.$medhjos.'  
<a lang="be" xml:lang="be" title="Belaruskaya" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Cbe&amp;u='.$url.'" rel="nofollow">Беларуская</a>'.$medhjos.'  
<a lang="bg" xml:lang="bg" title="Bulgarski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Cbg&amp;u='.$url.'" rel="nofollow">Български</a>'.$medhjos.'  
<a lang="ca" xml:lang="ca" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Cca&amp;u='.$url.'" rel="nofollow">Català</a>'.$medhjos.'  
<a lang="cs" xml:lang="cs" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Ccs&amp;u='.$url.'" rel="nofollow">Česky</a>'.$medhjos.'  
<a lang="cy" xml:lang="cy" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Ccy&amp;u='.$url.'" rel="nofollow">Cymraeg</a>'.$medhjos.'  
<a lang="da" xml:lang="da" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Cda&amp;u='.$url.'" rel="nofollow">Dansk</a>'.$medhjos.'  
<a lang="de" xml:lang="de" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Cde&amp;u='.$url.'" rel="nofollow">Deutsch</a>'.$medhjos.'  
<a lang="et" xml:lang="et" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Cet&amp;u='.$url.'" rel="nofollow">Eesti</a>'.$medhjos.'  
<a lang="el" xml:lang="el" title="Ellenika" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Cel&amp;u='.$url.'" rel="nofollow">Ελληνικά</a>'.$medhjos.'  
<a lang="es" xml:lang="es" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Ces&amp;u='.$url.'" rel="nofollow">Español</a>'.$medhjos.'  
<a lang="fa" xml:lang="fa" title="Fārsī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Cfa&amp;u='.$url.'" rel="nofollow">فارسی</a>'.$medhjos.'  
<a lang="fr" xml:lang="fr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Cfr&amp;u='.$url.'" rel="nofollow">Français</a>'.$medhjos.'  
<a lang="ga" xml:lang="ga" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Cga&amp;u='.$url.'" rel="nofollow">Gaeilge</a>'.$medhjos.'  
<a lang="gl" xml:lang="gl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Cgl&amp;u='.$url.'" rel="nofollow">Galego</a>'.$medhjos.'  
<a lang="hi" xml:lang="hi" title="Hindī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Chi&amp;u='.$url.'" rel="nofollow">हिन्दी</a>'.$medhjos.'  
<a lang="hr" xml:lang="hr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Chr&amp;u='.$url.'" rel="nofollow">Hrvatski</a>'.$medhjos.'  
<a lang="id" xml:lang="id" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Cid&amp;u='.$url.'" rel="nofollow">Bahasa Indonesia</a>'.$medhjos.'  
<a lang="is" xml:lang="is" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Cis&amp;u='.$url.'" rel="nofollow">Íslenska</a>'.$medhjos.'  
<a lang="he" xml:lang="he" title="‘Ivrit" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Che&amp;u='.$url.'" rel="nofollow">עברית</a>'.$medhjos.'  
<a lang="lv" xml:lang="lv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Clv&amp;u='.$url.'" rel="nofollow">Latviešu</a>'.$medhjos.'  
<a lang="lt" xml:lang="lt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Clt&amp;u='.$url.'" rel="nofollow">Lietuvių</a>'.$medhjos.'  
<a lang="ko" xml:lang="ko" title="Hangugeo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Cko&amp;u='.$url.'" rel="nofollow">한국어</a>'.$medhjos.'  
<a lang="hu" xml:lang="hu" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Chu&amp;u='.$url.'" rel="nofollow">Magyar</a>'.$medhjos.'  
<a lang="mk" xml:lang="mk" title="Makedonski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Cmk&amp;u='.$url.'" rel="nofollow">Македонски</a>'.$medhjos.'  
<a lang="ml" xml:lang="ml" title="Malayalam" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Cml&amp;u='.$url.'" rel="nofollow">മലയാളം</a>'.$medhjos.'  
<a lang="mt" xml:lang="mt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Cmt&amp;u='.$url.'" rel="nofollow">Malti</a>'.$medhjos.'  
<a lang="nl" xml:lang="nl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Cnl&amp;u='.$url.'" rel="nofollow">Nederlands</a>'.$medhjos.'  
<a lang="ja" xml:lang="ja" title="Nihongo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Cja&amp;u='.$url.'" rel="nofollow">日本語</a>'.$medhjos.'  
<a lang="no" xml:lang="no" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Cno&amp;u='.$url.'" rel="nofollow">Norsk (Bokmål)</a>'.$medhjos.'  
<a lang="pl" xml:lang="pl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Cpl&amp;u='.$url.'" rel="nofollow">Polski</a>'.$medhjos.'  
<a lang="pt" xml:lang="pt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Cpt&amp;u='.$url.'" rel="nofollow">Português</a>'.$medhjos.'  
<a lang="ro" xml:lang="ro" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Cro&amp;u='.$url.'" rel="nofollow">Română</a>'.$medhjos.'  
<a lang="ru" xml:lang="ru" title="Russkij" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Cru&amp;u='.$url.'" rel="nofollow">Русский</a>'.$medhjos.'  
<a lang="sk" xml:lang="sk" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Csk&amp;u='.$url.'" rel="nofollow">Slovenčina</a>'.$medhjos.'  
<a lang="sl" xml:lang="sl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Csl&amp;u='.$url.'" rel="nofollow">Slovenščina</a>'.$medhjos.'  
<a lang="sq" xml:lang="sq" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Csq&amp;u='.$url.'" rel="nofollow">Shqip</a>'.$medhjos.'  
<a lang="sr" xml:lang="sr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Csr&amp;u='.$url.'" rel="nofollow">Srpski</a>'.$medhjos.'  
<a lang="fi" xml:lang="fi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Cfi&amp;u='.$url.'" rel="nofollow">Suomi</a>'.$medhjos.'  
<a lang="sv" xml:lang="sv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Csv&amp;u='.$url.'" rel="nofollow">Svenska</a>'.$medhjos.'  
<a lang="sw" xml:lang="sw" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Csw&amp;u='.$url.'" rel="nofollow">Kiswahili</a>'.$medhjos.'  
<a lang="th" xml:lang="th" title="Thai" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Cth&amp;u='.$url.'" rel="nofollow">ไทย</a>'.$medhjos.'  
<a lang="tl" xml:lang="tl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Ctl&amp;u='.$url.'" rel="nofollow">Tagalog</a>'.$medhjos.'  
<a lang="tr" xml:lang="tr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Ctr&amp;u='.$url.'" rel="nofollow">Türkçe</a>'.$medhjos.'  
<a lang="uk" xml:lang="uk" title="Ukraïns’ka" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Cuk&amp;u='.$url.'" rel="nofollow">Українська</a>'.$medhjos.'  
<a lang="vi" xml:lang="vi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Cvi&amp;u='.$url.'" rel="nofollow">Tiếng Việt</a>'.$medhjos.'  
<a lang="yi" xml:lang="yi" title="Yidiš" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Cyi&amp;u='.$url.'" rel="nofollow">ייִדיש</a>.'.$medhjos.'  
<a lang="zh-CN" xml:lang="zh-CN" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Czh-CN&amp;u='.$url.'" rel="nofollow">中文</a> /
<a lang="zh-TW" xml:lang="zh-TW" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=it%7Czh-TW&amp;u='.$url.'" rel="nofollow">漢語</a>';
		$ivrit = '<a lang="he" xml:lang="he" href="#">עברית</a>'.$medhjos.'
<a lang="en" xml:lang="en" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Cen&amp;u='.$url.'" rel="nofollow">English</a>'.$medhjos.'
<a lang="af" xml:lang="af" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Caf&amp;u='.$url.'" rel="nofollow">Afrikaans</a>'.$medhjos.'  
<a lang="ar" xml:lang="ar" title="Araby" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Car&amp;u='.$url.'" rel="nofollow">العربية</a>'.$medhjos.'  
<a lang="be" xml:lang="be" title="Belaruskaya" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Cbe&amp;u='.$url.'" rel="nofollow">Беларуская</a>'.$medhjos.'  
<a lang="bg" xml:lang="bg" title="Bulgarski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Cbg&amp;u='.$url.'" rel="nofollow">Български</a>'.$medhjos.'  
<a lang="ca" xml:lang="ca" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Cca&amp;u='.$url.'" rel="nofollow">Català</a>'.$medhjos.'  
<a lang="cs" xml:lang="cs" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Ccs&amp;u='.$url.'" rel="nofollow">Česky</a>'.$medhjos.'  
<a lang="cy" xml:lang="cy" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Ccy&amp;u='.$url.'" rel="nofollow">Cymraeg</a>'.$medhjos.'  
<a lang="da" xml:lang="da" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Cda&amp;u='.$url.'" rel="nofollow">Dansk</a>'.$medhjos.'  
<a lang="de" xml:lang="de" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Cde&amp;u='.$url.'" rel="nofollow">Deutsch</a>'.$medhjos.'  
<a lang="et" xml:lang="et" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Cet&amp;u='.$url.'" rel="nofollow">Eesti</a>'.$medhjos.'  
<a lang="el" xml:lang="el" title="Ellenika" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Cel&amp;u='.$url.'" rel="nofollow">Ελληνικά</a>'.$medhjos.'  
<a lang="es" xml:lang="es" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Ces&amp;u='.$url.'" rel="nofollow">Español</a>'.$medhjos.'  
<a lang="fa" xml:lang="fa" title="Fārsī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Cfa&amp;u='.$url.'" rel="nofollow">فارسی</a>'.$medhjos.'  
<a lang="fr" xml:lang="fr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Cfr&amp;u='.$url.'" rel="nofollow">Français</a>'.$medhjos.'  
<a lang="ga" xml:lang="ga" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Cga&amp;u='.$url.'" rel="nofollow">Gaeilge</a>'.$medhjos.'  
<a lang="gl" xml:lang="gl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Cgl&amp;u='.$url.'" rel="nofollow">Galego</a>'.$medhjos.'  
<a lang="hi" xml:lang="hi" title="Hindī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Chi&amp;u='.$url.'" rel="nofollow">हिन्दी</a>'.$medhjos.'  
<a lang="hr" xml:lang="hr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Chr&amp;u='.$url.'" rel="nofollow">Hrvatski</a>'.$medhjos.'  
<a lang="id" xml:lang="id" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Cid&amp;u='.$url.'" rel="nofollow">Bahasa Indonesia</a>'.$medhjos.'  
<a lang="is" xml:lang="is" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Cis&amp;u='.$url.'" rel="nofollow">Íslenska</a>'.$medhjos.'  
<a lang="it" xml:lang="it" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Cit&amp;u='.$url.'" rel="nofollow">Italiano</a>'.$medhjos.'  
<a lang="lv" xml:lang="lv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Clv&amp;u='.$url.'" rel="nofollow">Latviešu</a>'.$medhjos.'  
<a lang="lt" xml:lang="lt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Clt&amp;u='.$url.'" rel="nofollow">Lietuvių</a>'.$medhjos.'  
<a lang="ko" xml:lang="ko" title="Hangugeo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Cko&amp;u='.$url.'" rel="nofollow">한국어</a>'.$medhjos.'  
<a lang="hu" xml:lang="hu" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Chu&amp;u='.$url.'" rel="nofollow">Magyar</a>'.$medhjos.'  
<a lang="mk" xml:lang="mk" title="Makedonski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Cmk&amp;u='.$url.'" rel="nofollow">Македонски</a>'.$medhjos.'  
<a lang="ml" xml:lang="ml" title="Malayalam" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Cml&amp;u='.$url.'" rel="nofollow">മലയാളം</a>'.$medhjos.'  
<a lang="mt" xml:lang="mt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Cmt&amp;u='.$url.'" rel="nofollow">Malti</a>'.$medhjos.'  
<a lang="nl" xml:lang="nl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Cnl&amp;u='.$url.'" rel="nofollow">Nederlands</a>'.$medhjos.'  
<a lang="ja" xml:lang="ja" title="Nihongo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Cja&amp;u='.$url.'" rel="nofollow">日本語</a>'.$medhjos.'  
<a lang="no" xml:lang="no" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Cno&amp;u='.$url.'" rel="nofollow">Norsk (Bokmål)</a>'.$medhjos.'  
<a lang="pl" xml:lang="pl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Cpl&amp;u='.$url.'" rel="nofollow">Polski</a>'.$medhjos.'  
<a lang="pt" xml:lang="pt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Cpt&amp;u='.$url.'" rel="nofollow">Português</a>'.$medhjos.'  
<a lang="ro" xml:lang="ro" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Cro&amp;u='.$url.'" rel="nofollow">Română</a>'.$medhjos.'  
<a lang="ru" xml:lang="ru" title="Russkij" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Cru&amp;u='.$url.'" rel="nofollow">Русский</a>'.$medhjos.'  
<a lang="sk" xml:lang="sk" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Csk&amp;u='.$url.'" rel="nofollow">Slovenčina</a>'.$medhjos.'  
<a lang="sl" xml:lang="sl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Csl&amp;u='.$url.'" rel="nofollow">Slovenščina</a>'.$medhjos.'  
<a lang="sq" xml:lang="sq" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Csq&amp;u='.$url.'" rel="nofollow">Shqip</a>'.$medhjos.'  
<a lang="sr" xml:lang="sr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Csr&amp;u='.$url.'" rel="nofollow">Srpski</a>'.$medhjos.'  
<a lang="fi" xml:lang="fi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Cfi&amp;u='.$url.'" rel="nofollow">Suomi</a>'.$medhjos.'  
<a lang="sv" xml:lang="sv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Csv&amp;u='.$url.'" rel="nofollow">Svenska</a>'.$medhjos.'  
<a lang="sw" xml:lang="sw" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Csw&amp;u='.$url.'" rel="nofollow">Kiswahili</a>'.$medhjos.'  
<a lang="th" xml:lang="th" title="Thai" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Cth&amp;u='.$url.'" rel="nofollow">ไทย</a>'.$medhjos.'  
<a lang="tl" xml:lang="tl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Ctl&amp;u='.$url.'" rel="nofollow">Tagalog</a>'.$medhjos.'  
<a lang="tr" xml:lang="tr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Ctr&amp;u='.$url.'" rel="nofollow">Türkçe</a>'.$medhjos.'  
<a lang="uk" xml:lang="uk" title="Ukraïns’ka" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Cuk&amp;u='.$url.'" rel="nofollow">Українська</a>'.$medhjos.'  
<a lang="vi" xml:lang="vi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Cvi&amp;u='.$url.'" rel="nofollow">Tiếng Việt</a>'.$medhjos.'  
<a lang="yi" xml:lang="yi" title="Yidiš" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Cyi&amp;u='.$url.'" rel="nofollow">ייִדיש</a>.'.$medhjos.'  
<a lang="zh-CN" xml:lang="zh-CN" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Czh-CN&amp;u='.$url.'" rel="nofollow">中文</a> /
<a lang="zh-TW" xml:lang="zh-TW" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=he%7Czh-TW&amp;u='.$url.'" rel="nofollow">漢語</a>';
		$latviesu = '<a lang="lv" xml:lang="lv" href="#">Latviešu</a>'.$medhjos.'
<a lang="en" xml:lang="en" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Cen&amp;u='.$url.'" rel="nofollow">English</a>'.$medhjos.'
<a lang="af" xml:lang="af" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Caf&amp;u='.$url.'" rel="nofollow">Afrikaans</a>'.$medhjos.'  
<a lang="ar" xml:lang="ar" title="Araby" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Car&amp;u='.$url.'" rel="nofollow">العربية</a>'.$medhjos.'  
<a lang="be" xml:lang="be" title="Belaruskaya" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Cbe&amp;u='.$url.'" rel="nofollow">Беларуская</a>'.$medhjos.'  
<a lang="bg" xml:lang="bg" title="Bulgarski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Cbg&amp;u='.$url.'" rel="nofollow">Български</a>'.$medhjos.'  
<a lang="ca" xml:lang="ca" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Cca&amp;u='.$url.'" rel="nofollow">Català</a>'.$medhjos.'  
<a lang="cs" xml:lang="cs" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Ccs&amp;u='.$url.'" rel="nofollow">Česky</a>'.$medhjos.'  
<a lang="cy" xml:lang="cy" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Ccy&amp;u='.$url.'" rel="nofollow">Cymraeg</a>'.$medhjos.'  
<a lang="da" xml:lang="da" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Cda&amp;u='.$url.'" rel="nofollow">Dansk</a>'.$medhjos.'  
<a lang="de" xml:lang="de" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Cde&amp;u='.$url.'" rel="nofollow">Deutsch</a>'.$medhjos.'  
<a lang="et" xml:lang="et" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Cet&amp;u='.$url.'" rel="nofollow">Eesti</a>'.$medhjos.'  
<a lang="el" xml:lang="el" title="Ellenika" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Cel&amp;u='.$url.'" rel="nofollow">Ελληνικά</a>'.$medhjos.'  
<a lang="es" xml:lang="es" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Ces&amp;u='.$url.'" rel="nofollow">Español</a>'.$medhjos.'  
<a lang="fa" xml:lang="fa" title="Fārsī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Cfa&amp;u='.$url.'" rel="nofollow">فارسی</a>'.$medhjos.'  
<a lang="fr" xml:lang="fr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Cfr&amp;u='.$url.'" rel="nofollow">Français</a>'.$medhjos.'  
<a lang="ga" xml:lang="ga" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Cga&amp;u='.$url.'" rel="nofollow">Gaeilge</a>'.$medhjos.'  
<a lang="gl" xml:lang="gl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Cgl&amp;u='.$url.'" rel="nofollow">Galego</a>'.$medhjos.'  
<a lang="hi" xml:lang="hi" title="Hindī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Chi&amp;u='.$url.'" rel="nofollow">हिन्दी</a>'.$medhjos.'  
<a lang="hr" xml:lang="hr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Chr&amp;u='.$url.'" rel="nofollow">Hrvatski</a>'.$medhjos.'  
<a lang="id" xml:lang="id" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Cid&amp;u='.$url.'" rel="nofollow">Bahasa Indonesia</a>'.$medhjos.'  
<a lang="is" xml:lang="is" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Cis&amp;u='.$url.'" rel="nofollow">Íslenska</a>'.$medhjos.'  
<a lang="it" xml:lang="it" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Cit&amp;u='.$url.'" rel="nofollow">Italiano</a>'.$medhjos.'  
<a lang="he" xml:lang="he" title="‘Ivrit" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Che&amp;u='.$url.'" rel="nofollow">עברית</a>'.$medhjos.'  
<a lang="lt" xml:lang="lt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Clt&amp;u='.$url.'" rel="nofollow">Lietuvių</a>'.$medhjos.'  
<a lang="ko" xml:lang="ko" title="Hangugeo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Cko&amp;u='.$url.'" rel="nofollow">한국어</a>'.$medhjos.'  
<a lang="hu" xml:lang="hu" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Chu&amp;u='.$url.'" rel="nofollow">Magyar</a>'.$medhjos.'  
<a lang="mk" xml:lang="mk" title="Makedonski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Cmk&amp;u='.$url.'" rel="nofollow">Македонски</a>'.$medhjos.'  
<a lang="ml" xml:lang="ml" title="Malayalam" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Cml&amp;u='.$url.'" rel="nofollow">മലയാളം</a>'.$medhjos.'  
<a lang="mt" xml:lang="mt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Cmt&amp;u='.$url.'" rel="nofollow">Malti</a>'.$medhjos.'  
<a lang="nl" xml:lang="nl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Cnl&amp;u='.$url.'" rel="nofollow">Nederlands</a>'.$medhjos.'  
<a lang="ja" xml:lang="ja" title="Nihongo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Cja&amp;u='.$url.'" rel="nofollow">日本語</a>'.$medhjos.'  
<a lang="no" xml:lang="no" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Cno&amp;u='.$url.'" rel="nofollow">Norsk (Bokmål)</a>'.$medhjos.'  
<a lang="pl" xml:lang="pl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Cpl&amp;u='.$url.'" rel="nofollow">Polski</a>'.$medhjos.'  
<a lang="pt" xml:lang="pt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Cpt&amp;u='.$url.'" rel="nofollow">Português</a>'.$medhjos.'  
<a lang="ro" xml:lang="ro" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Cro&amp;u='.$url.'" rel="nofollow">Română</a>'.$medhjos.'  
<a lang="ru" xml:lang="ru" title="Russkij" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Cru&amp;u='.$url.'" rel="nofollow">Русский</a>'.$medhjos.'  
<a lang="sk" xml:lang="sk" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Csk&amp;u='.$url.'" rel="nofollow">Slovenčina</a>'.$medhjos.'  
<a lang="sl" xml:lang="sl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Csl&amp;u='.$url.'" rel="nofollow">Slovenščina</a>'.$medhjos.'  
<a lang="sq" xml:lang="sq" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Csq&amp;u='.$url.'" rel="nofollow">Shqip</a>'.$medhjos.'  
<a lang="sr" xml:lang="sr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Csr&amp;u='.$url.'" rel="nofollow">Srpski</a>'.$medhjos.'  
<a lang="fi" xml:lang="fi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Cfi&amp;u='.$url.'" rel="nofollow">Suomi</a>'.$medhjos.'  
<a lang="sv" xml:lang="sv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Csv&amp;u='.$url.'" rel="nofollow">Svenska</a>'.$medhjos.'  
<a lang="sw" xml:lang="sw" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Csw&amp;u='.$url.'" rel="nofollow">Kiswahili</a>'.$medhjos.'  
<a lang="th" xml:lang="th" title="Thai" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Cth&amp;u='.$url.'" rel="nofollow">ไทย</a>'.$medhjos.'  
<a lang="tl" xml:lang="tl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Ctl&amp;u='.$url.'" rel="nofollow">Tagalog</a>'.$medhjos.'  
<a lang="tr" xml:lang="tr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Ctr&amp;u='.$url.'" rel="nofollow">Türkçe</a>'.$medhjos.'  
<a lang="uk" xml:lang="uk" title="Ukraïns’ka" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Cuk&amp;u='.$url.'" rel="nofollow">Українська</a>'.$medhjos.'  
<a lang="vi" xml:lang="vi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Cvi&amp;u='.$url.'" rel="nofollow">Tiếng Việt</a>'.$medhjos.'  
<a lang="yi" xml:lang="yi" title="Yidiš" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Cyi&amp;u='.$url.'" rel="nofollow">ייִדיש</a>.'.$medhjos.'  
<a lang="zh-CN" xml:lang="zh-CN" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Czh-CN&amp;u='.$url.'" rel="nofollow">中文</a> /
<a lang="zh-TW" xml:lang="zh-TW" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lv%7Czh-TW&amp;u='.$url.'" rel="nofollow">漢語</a>';
		$lietuviu = '<a lang="lt" xml:lang="lt" href="#">Lietuvių</a>'.$medhjos.'
<a lang="en" xml:lang="en" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Cen&amp;u='.$url.'" rel="nofollow">English</a>'.$medhjos.'
<a lang="af" xml:lang="af" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Caf&amp;u='.$url.'" rel="nofollow">Afrikaans</a>'.$medhjos.'  
<a lang="ar" xml:lang="ar" title="Araby" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Car&amp;u='.$url.'" rel="nofollow">العربية</a>'.$medhjos.'  
<a lang="be" xml:lang="be" title="Belaruskaya" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Cbe&amp;u='.$url.'" rel="nofollow">Беларуская</a>'.$medhjos.'  
<a lang="bg" xml:lang="bg" title="Bulgarski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Cbg&amp;u='.$url.'" rel="nofollow">Български</a>'.$medhjos.'  
<a lang="ca" xml:lang="ca" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Cca&amp;u='.$url.'" rel="nofollow">Català</a>'.$medhjos.'  
<a lang="cs" xml:lang="cs" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Ccs&amp;u='.$url.'" rel="nofollow">Česky</a>'.$medhjos.'  
<a lang="cy" xml:lang="cy" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Ccy&amp;u='.$url.'" rel="nofollow">Cymraeg</a>'.$medhjos.'  
<a lang="da" xml:lang="da" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Cda&amp;u='.$url.'" rel="nofollow">Dansk</a>'.$medhjos.'  
<a lang="de" xml:lang="de" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Cde&amp;u='.$url.'" rel="nofollow">Deutsch</a>'.$medhjos.'  
<a lang="et" xml:lang="et" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Cet&amp;u='.$url.'" rel="nofollow">Eesti</a>'.$medhjos.'  
<a lang="el" xml:lang="el" title="Ellenika" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Cel&amp;u='.$url.'" rel="nofollow">Ελληνικά</a>'.$medhjos.'  
<a lang="es" xml:lang="es" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Ces&amp;u='.$url.'" rel="nofollow">Español</a>'.$medhjos.'  
<a lang="fa" xml:lang="fa" title="Fārsī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Cfa&amp;u='.$url.'" rel="nofollow">فارسی</a>'.$medhjos.'  
<a lang="fr" xml:lang="fr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Cfr&amp;u='.$url.'" rel="nofollow">Français</a>'.$medhjos.'  
<a lang="ga" xml:lang="ga" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Cga&amp;u='.$url.'" rel="nofollow">Gaeilge</a>'.$medhjos.'  
<a lang="gl" xml:lang="gl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Cgl&amp;u='.$url.'" rel="nofollow">Galego</a>'.$medhjos.'  
<a lang="hi" xml:lang="hi" title="Hindī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Chi&amp;u='.$url.'" rel="nofollow">हिन्दी</a>'.$medhjos.'  
<a lang="hr" xml:lang="hr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Chr&amp;u='.$url.'" rel="nofollow">Hrvatski</a>'.$medhjos.'  
<a lang="id" xml:lang="id" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Cid&amp;u='.$url.'" rel="nofollow">Bahasa Indonesia</a>'.$medhjos.'  
<a lang="is" xml:lang="is" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Cis&amp;u='.$url.'" rel="nofollow">Íslenska</a>'.$medhjos.'  
<a lang="it" xml:lang="it" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Cit&amp;u='.$url.'" rel="nofollow">Italiano</a>'.$medhjos.'  
<a lang="he" xml:lang="he" title="‘Ivrit" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Che&amp;u='.$url.'" rel="nofollow">עברית</a>'.$medhjos.'  
<a lang="lv" xml:lang="lv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Clv&amp;u='.$url.'" rel="nofollow">Latviešu</a>'.$medhjos.'  
<a lang="ko" xml:lang="ko" title="Hangugeo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Cko&amp;u='.$url.'" rel="nofollow">한국어</a>'.$medhjos.'  
<a lang="hu" xml:lang="hu" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Chu&amp;u='.$url.'" rel="nofollow">Magyar</a>'.$medhjos.'  
<a lang="mk" xml:lang="mk" title="Makedonski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Cmk&amp;u='.$url.'" rel="nofollow">Македонски</a>'.$medhjos.'  
<a lang="ml" xml:lang="ml" title="Malayalam" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Cml&amp;u='.$url.'" rel="nofollow">മലയാളം</a>'.$medhjos.'  
<a lang="mt" xml:lang="mt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Cmt&amp;u='.$url.'" rel="nofollow">Malti</a>'.$medhjos.'  
<a lang="nl" xml:lang="nl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Cnl&amp;u='.$url.'" rel="nofollow">Nederlands</a>'.$medhjos.'  
<a lang="ja" xml:lang="ja" title="Nihongo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Cja&amp;u='.$url.'" rel="nofollow">日本語</a>'.$medhjos.'  
<a lang="no" xml:lang="no" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Cno&amp;u='.$url.'" rel="nofollow">Norsk (Bokmål)</a>'.$medhjos.'  
<a lang="pl" xml:lang="pl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Cpl&amp;u='.$url.'" rel="nofollow">Polski</a>'.$medhjos.'  
<a lang="pt" xml:lang="pt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Cpt&amp;u='.$url.'" rel="nofollow">Português</a>'.$medhjos.'  
<a lang="ro" xml:lang="ro" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Cro&amp;u='.$url.'" rel="nofollow">Română</a>'.$medhjos.'  
<a lang="ru" xml:lang="ru" title="Russkij" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Cru&amp;u='.$url.'" rel="nofollow">Русский</a>'.$medhjos.'  
<a lang="sk" xml:lang="sk" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Csk&amp;u='.$url.'" rel="nofollow">Slovenčina</a>'.$medhjos.'  
<a lang="sl" xml:lang="sl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Csl&amp;u='.$url.'" rel="nofollow">Slovenščina</a>'.$medhjos.'  
<a lang="sq" xml:lang="sq" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Csq&amp;u='.$url.'" rel="nofollow">Shqip</a>'.$medhjos.'  
<a lang="sr" xml:lang="sr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Csr&amp;u='.$url.'" rel="nofollow">Srpski</a>'.$medhjos.'  
<a lang="fi" xml:lang="fi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Cfi&amp;u='.$url.'" rel="nofollow">Suomi</a>'.$medhjos.'  
<a lang="sv" xml:lang="sv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Csv&amp;u='.$url.'" rel="nofollow">Svenska</a>'.$medhjos.'  
<a lang="sw" xml:lang="sw" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Csw&amp;u='.$url.'" rel="nofollow">Kiswahili</a>'.$medhjos.'  
<a lang="th" xml:lang="th" title="Thai" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Cth&amp;u='.$url.'" rel="nofollow">ไทย</a>'.$medhjos.'  
<a lang="tl" xml:lang="tl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Ctl&amp;u='.$url.'" rel="nofollow">Tagalog</a>'.$medhjos.'  
<a lang="tr" xml:lang="tr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Ctr&amp;u='.$url.'" rel="nofollow">Türkçe</a>'.$medhjos.'  
<a lang="uk" xml:lang="uk" title="Ukraïns’ka" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Cuk&amp;u='.$url.'" rel="nofollow">Українська</a>'.$medhjos.'  
<a lang="vi" xml:lang="vi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Cvi&amp;u='.$url.'" rel="nofollow">Tiếng Việt</a>'.$medhjos.'  
<a lang="yi" xml:lang="yi" title="Yidiš" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Cyi&amp;u='.$url.'" rel="nofollow">ייִדיש</a>.'.$medhjos.'  
<a lang="zh-CN" xml:lang="zh-CN" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Czh-CN&amp;u='.$url.'" rel="nofollow">中文</a> /
<a lang="zh-TW" xml:lang="zh-TW" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=lt%7Czh-TW&amp;u='.$url.'" rel="nofollow">漢語</a>';
		$hangugeo = '<a lang="ko" xml:lang="ko" title="‘Ivrit" href="#">한국어</a>'.$medhjos.'
<a lang="en" xml:lang="en" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Cen&amp;u='.$url.'" rel="nofollow">English</a>'.$medhjos.'
<a lang="af" xml:lang="af" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Caf&amp;u='.$url.'" rel="nofollow">Afrikaans</a>'.$medhjos.'  
<a lang="ar" xml:lang="ar" title="Araby" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Car&amp;u='.$url.'" rel="nofollow">العربية</a>'.$medhjos.'  
<a lang="be" xml:lang="be" title="Belaruskaya" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Cbe&amp;u='.$url.'" rel="nofollow">Беларуская</a>'.$medhjos.'  
<a lang="bg" xml:lang="bg" title="Bulgarski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Cbg&amp;u='.$url.'" rel="nofollow">Български</a>'.$medhjos.'  
<a lang="ca" xml:lang="ca" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Cca&amp;u='.$url.'" rel="nofollow">Català</a>'.$medhjos.'  
<a lang="cs" xml:lang="cs" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Ccs&amp;u='.$url.'" rel="nofollow">Česky</a>'.$medhjos.'  
<a lang="cy" xml:lang="cy" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Ccy&amp;u='.$url.'" rel="nofollow">Cymraeg</a>'.$medhjos.'  
<a lang="da" xml:lang="da" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Cda&amp;u='.$url.'" rel="nofollow">Dansk</a>'.$medhjos.'  
<a lang="de" xml:lang="de" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Cde&amp;u='.$url.'" rel="nofollow">Deutsch</a>'.$medhjos.'  
<a lang="et" xml:lang="et" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Cet&amp;u='.$url.'" rel="nofollow">Eesti</a>'.$medhjos.'  
<a lang="el" xml:lang="el" title="Ellenika" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Cel&amp;u='.$url.'" rel="nofollow">Ελληνικά</a>'.$medhjos.'  
<a lang="es" xml:lang="es" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Ces&amp;u='.$url.'" rel="nofollow">Español</a>'.$medhjos.'  
<a lang="fa" xml:lang="fa" title="Fārsī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Cfa&amp;u='.$url.'" rel="nofollow">فارسی</a>'.$medhjos.'  
<a lang="fr" xml:lang="fr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Cfr&amp;u='.$url.'" rel="nofollow">Français</a>'.$medhjos.'  
<a lang="ga" xml:lang="ga" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Cga&amp;u='.$url.'" rel="nofollow">Gaeilge</a>'.$medhjos.'  
<a lang="gl" xml:lang="gl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Cgl&amp;u='.$url.'" rel="nofollow">Galego</a>'.$medhjos.'  
<a lang="hi" xml:lang="hi" title="Hindī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Chi&amp;u='.$url.'" rel="nofollow">हिन्दी</a>'.$medhjos.'  
<a lang="hr" xml:lang="hr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Chr&amp;u='.$url.'" rel="nofollow">Hrvatski</a>'.$medhjos.'  
<a lang="id" xml:lang="id" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Cid&amp;u='.$url.'" rel="nofollow">Bahasa Indonesia</a>'.$medhjos.'  
<a lang="is" xml:lang="is" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Cis&amp;u='.$url.'" rel="nofollow">Íslenska</a>'.$medhjos.'  
<a lang="it" xml:lang="it" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Cit&amp;u='.$url.'" rel="nofollow">Italiano</a>'.$medhjos.'  
<a lang="he" xml:lang="he" title="‘Ivrit" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Che&amp;u='.$url.'" rel="nofollow">עברית</a>'.$medhjos.'  
<a lang="lv" xml:lang="lv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Clv&amp;u='.$url.'" rel="nofollow">Latviešu</a>'.$medhjos.'  
<a lang="lt" xml:lang="lt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Clt&amp;u='.$url.'" rel="nofollow">Lietuvių</a>'.$medhjos.'  
<a lang="hu" xml:lang="hu" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Chu&amp;u='.$url.'" rel="nofollow">Magyar</a>'.$medhjos.'  
<a lang="mk" xml:lang="mk" title="Makedonski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Cmk&amp;u='.$url.'" rel="nofollow">Македонски</a>'.$medhjos.'  
<a lang="ml" xml:lang="ml" title="Malayalam" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Cml&amp;u='.$url.'" rel="nofollow">മലയാളം</a>'.$medhjos.'  
<a lang="mt" xml:lang="mt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Cmt&amp;u='.$url.'" rel="nofollow">Malti</a>'.$medhjos.'  
<a lang="nl" xml:lang="nl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Cnl&amp;u='.$url.'" rel="nofollow">Nederlands</a>'.$medhjos.'  
<a lang="ja" xml:lang="ja" title="Nihongo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Cja&amp;u='.$url.'" rel="nofollow">日本語</a>'.$medhjos.'  
<a lang="no" xml:lang="no" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Cno&amp;u='.$url.'" rel="nofollow">Norsk (Bokmål)</a>'.$medhjos.'  
<a lang="pl" xml:lang="pl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Cpl&amp;u='.$url.'" rel="nofollow">Polski</a>'.$medhjos.'  
<a lang="pt" xml:lang="pt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Cpt&amp;u='.$url.'" rel="nofollow">Português</a>'.$medhjos.'  
<a lang="ro" xml:lang="ro" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Cro&amp;u='.$url.'" rel="nofollow">Română</a>'.$medhjos.'  
<a lang="ru" xml:lang="ru" title="Russkij" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Cru&amp;u='.$url.'" rel="nofollow">Русский</a>'.$medhjos.'  
<a lang="sk" xml:lang="sk" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Csk&amp;u='.$url.'" rel="nofollow">Slovenčina</a>'.$medhjos.'  
<a lang="sl" xml:lang="sl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Csl&amp;u='.$url.'" rel="nofollow">Slovenščina</a>'.$medhjos.'  
<a lang="sq" xml:lang="sq" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Csq&amp;u='.$url.'" rel="nofollow">Shqip</a>'.$medhjos.'  
<a lang="sr" xml:lang="sr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Csr&amp;u='.$url.'" rel="nofollow">Srpski</a>'.$medhjos.'  
<a lang="fi" xml:lang="fi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Cfi&amp;u='.$url.'" rel="nofollow">Suomi</a>'.$medhjos.'  
<a lang="sv" xml:lang="sv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Csv&amp;u='.$url.'" rel="nofollow">Svenska</a>'.$medhjos.'  
<a lang="sw" xml:lang="sw" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Csw&amp;u='.$url.'" rel="nofollow">Kiswahili</a>'.$medhjos.'  
<a lang="th" xml:lang="th" title="Thai" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Cth&amp;u='.$url.'" rel="nofollow">ไทย</a>'.$medhjos.'  
<a lang="tl" xml:lang="tl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Ctl&amp;u='.$url.'" rel="nofollow">Tagalog</a>'.$medhjos.'  
<a lang="tr" xml:lang="tr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Ctr&amp;u='.$url.'" rel="nofollow">Türkçe</a>'.$medhjos.'  
<a lang="uk" xml:lang="uk" title="Ukraïns’ka" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Cuk&amp;u='.$url.'" rel="nofollow">Українська</a>'.$medhjos.'  
<a lang="vi" xml:lang="vi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Cvi&amp;u='.$url.'" rel="nofollow">Tiếng Việt</a>'.$medhjos.'  
<a lang="yi" xml:lang="yi" title="Yidiš" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Cyi&amp;u='.$url.'" rel="nofollow">ייִדיש</a>.'.$medhjos.'  
<a lang="zh-CN" xml:lang="zh-CN" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Czh-CN&amp;u='.$url.'" rel="nofollow">中文</a> /
<a lang="zh-TW" xml:lang="zh-TW" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ko%7Czh-TW&amp;u='.$url.'" rel="nofollow">漢語</a>';
		$magyar = '<a lang="hu" xml:lang="hu" href="#">Magyar</a>'.$medhjos.'
<a lang="en" xml:lang="en" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Cen&amp;u='.$url.'" rel="nofollow">English</a>'.$medhjos.'
<a lang="af" xml:lang="af" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Caf&amp;u='.$url.'" rel="nofollow">Afrikaans</a>'.$medhjos.'  
<a lang="ar" xml:lang="ar" title="Araby" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Car&amp;u='.$url.'" rel="nofollow">العربية</a>'.$medhjos.'  
<a lang="be" xml:lang="be" title="Belaruskaya" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Cbe&amp;u='.$url.'" rel="nofollow">Беларуская</a>'.$medhjos.'  
<a lang="bg" xml:lang="bg" title="Bulgarski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Cbg&amp;u='.$url.'" rel="nofollow">Български</a>'.$medhjos.'  
<a lang="ca" xml:lang="ca" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Cca&amp;u='.$url.'" rel="nofollow">Català</a>'.$medhjos.'  
<a lang="cs" xml:lang="cs" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Ccs&amp;u='.$url.'" rel="nofollow">Česky</a>'.$medhjos.'  
<a lang="cy" xml:lang="cy" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Ccy&amp;u='.$url.'" rel="nofollow">Cymraeg</a>'.$medhjos.'  
<a lang="da" xml:lang="da" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Cda&amp;u='.$url.'" rel="nofollow">Dansk</a>'.$medhjos.'  
<a lang="de" xml:lang="de" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Cde&amp;u='.$url.'" rel="nofollow">Deutsch</a>'.$medhjos.'  
<a lang="et" xml:lang="et" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Cet&amp;u='.$url.'" rel="nofollow">Eesti</a>'.$medhjos.'  
<a lang="el" xml:lang="el" title="Ellenika" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Cel&amp;u='.$url.'" rel="nofollow">Ελληνικά</a>'.$medhjos.'  
<a lang="es" xml:lang="es" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Ces&amp;u='.$url.'" rel="nofollow">Español</a>'.$medhjos.'  
<a lang="fa" xml:lang="fa" title="Fārsī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Cfa&amp;u='.$url.'" rel="nofollow">فارسی</a>'.$medhjos.'  
<a lang="fr" xml:lang="fr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Cfr&amp;u='.$url.'" rel="nofollow">Français</a>'.$medhjos.'  
<a lang="ga" xml:lang="ga" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Cga&amp;u='.$url.'" rel="nofollow">Gaeilge</a>'.$medhjos.'  
<a lang="gl" xml:lang="gl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Cgl&amp;u='.$url.'" rel="nofollow">Galego</a>'.$medhjos.'  
<a lang="hi" xml:lang="hi" title="Hindī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Chi&amp;u='.$url.'" rel="nofollow">हिन्दी</a>'.$medhjos.'  
<a lang="hr" xml:lang="hr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Chr&amp;u='.$url.'" rel="nofollow">Hrvatski</a>'.$medhjos.'  
<a lang="id" xml:lang="id" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Cid&amp;u='.$url.'" rel="nofollow">Bahasa Indonesia</a>'.$medhjos.'  
<a lang="is" xml:lang="is" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Cis&amp;u='.$url.'" rel="nofollow">Íslenska</a>'.$medhjos.'  
<a lang="it" xml:lang="it" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Cit&amp;u='.$url.'" rel="nofollow">Italiano</a>'.$medhjos.'  
<a lang="he" xml:lang="he" title="‘Ivrit" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Che&amp;u='.$url.'" rel="nofollow">עברית</a>'.$medhjos.'  
<a lang="lv" xml:lang="lv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Clv&amp;u='.$url.'" rel="nofollow">Latviešu</a>'.$medhjos.'  
<a lang="lt" xml:lang="lt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Clt&amp;u='.$url.'" rel="nofollow">Lietuvių</a>'.$medhjos.'  
<a lang="ko" xml:lang="ko" title="Hangugeo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Cko&amp;u='.$url.'" rel="nofollow">한국어</a>'.$medhjos.'  
<a lang="hu" xml:lang="hu" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Chu&amp;u='.$url.'" rel="nofollow">Magyar</a>'.$medhjos.'  
<a lang="mk" xml:lang="mk" title="Makedonski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Cmk&amp;u='.$url.'" rel="nofollow">Македонски</a>'.$medhjos.'  
<a lang="ml" xml:lang="ml" title="Malayalam" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Cml&amp;u='.$url.'" rel="nofollow">മലയാളം</a>'.$medhjos.'  
<a lang="mt" xml:lang="mt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Cmt&amp;u='.$url.'" rel="nofollow">Malti</a>'.$medhjos.'  
<a lang="nl" xml:lang="nl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Cnl&amp;u='.$url.'" rel="nofollow">Nederlands</a>'.$medhjos.'  
<a lang="ja" xml:lang="ja" title="Nihongo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Cja&amp;u='.$url.'" rel="nofollow">日本語</a>'.$medhjos.'  
<a lang="no" xml:lang="no" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Cno&amp;u='.$url.'" rel="nofollow">Norsk (Bokmål)</a>'.$medhjos.'  
<a lang="pl" xml:lang="pl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Cpl&amp;u='.$url.'" rel="nofollow">Polski</a>'.$medhjos.'  
<a lang="pt" xml:lang="pt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Cpt&amp;u='.$url.'" rel="nofollow">Português</a>'.$medhjos.'  
<a lang="ro" xml:lang="ro" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Cro&amp;u='.$url.'" rel="nofollow">Română</a>'.$medhjos.'  
<a lang="ru" xml:lang="ru" title="Russkij" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Cru&amp;u='.$url.'" rel="nofollow">Русский</a>'.$medhjos.'  
<a lang="sk" xml:lang="sk" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Csk&amp;u='.$url.'" rel="nofollow">Slovenčina</a>'.$medhjos.'  
<a lang="sl" xml:lang="sl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Csl&amp;u='.$url.'" rel="nofollow">Slovenščina</a>'.$medhjos.'  
<a lang="sq" xml:lang="sq" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Csq&amp;u='.$url.'" rel="nofollow">Shqip</a>'.$medhjos.'  
<a lang="sr" xml:lang="sr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Csr&amp;u='.$url.'" rel="nofollow">Srpski</a>'.$medhjos.'  
<a lang="fi" xml:lang="fi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Cfi&amp;u='.$url.'" rel="nofollow">Suomi</a>'.$medhjos.'  
<a lang="sv" xml:lang="sv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Csv&amp;u='.$url.'" rel="nofollow">Svenska</a>'.$medhjos.'  
<a lang="sw" xml:lang="sw" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Csw&amp;u='.$url.'" rel="nofollow">Kiswahili</a>'.$medhjos.'  
<a lang="th" xml:lang="th" title="Thai" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Cth&amp;u='.$url.'" rel="nofollow">ไทย</a>'.$medhjos.'  
<a lang="tl" xml:lang="tl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Ctl&amp;u='.$url.'" rel="nofollow">Tagalog</a>'.$medhjos.'  
<a lang="tr" xml:lang="tr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Ctr&amp;u='.$url.'" rel="nofollow">Türkçe</a>'.$medhjos.'  
<a lang="uk" xml:lang="uk" title="Ukraïns’ka" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Cuk&amp;u='.$url.'" rel="nofollow">Українська</a>'.$medhjos.'  
<a lang="vi" xml:lang="vi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Cvi&amp;u='.$url.'" rel="nofollow">Tiếng Việt</a>'.$medhjos.'  
<a lang="yi" xml:lang="yi" title="Yidiš" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Cyi&amp;u='.$url.'" rel="nofollow">ייִדיש</a>.'.$medhjos.'  
<a lang="zh-CN" xml:lang="zh-CN" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Czh-CN&amp;u='.$url.'" rel="nofollow">中文</a> /
<a lang="zh-TW" xml:lang="zh-TW" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=hu%7Czh-TW&amp;u='.$url.'" rel="nofollow">漢語</a>';		
		$makedonski = '<a lang="mk" xml:lang="mk" title="Makedonski" href="#">Македонски</a>'.$medhjos.'
<a lang="en" xml:lang="en" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Cen&amp;u='.$url.'" rel="nofollow">English</a>'.$medhjos.'
<a lang="af" xml:lang="af" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Caf&amp;u='.$url.'" rel="nofollow">Afrikaans</a>'.$medhjos.'  
<a lang="ar" xml:lang="ar" title="Araby" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Car&amp;u='.$url.'" rel="nofollow">العربية</a>'.$medhjos.'  
<a lang="be" xml:lang="be" title="Belaruskaya" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Cbe&amp;u='.$url.'" rel="nofollow">Беларуская</a>'.$medhjos.'  
<a lang="bg" xml:lang="bg" title="Bulgarski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Cbg&amp;u='.$url.'" rel="nofollow">Български</a>'.$medhjos.'  
<a lang="ca" xml:lang="ca" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Cca&amp;u='.$url.'" rel="nofollow">Català</a>'.$medhjos.'  
<a lang="cs" xml:lang="cs" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Ccs&amp;u='.$url.'" rel="nofollow">Česky</a>'.$medhjos.'  
<a lang="cy" xml:lang="cy" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Ccy&amp;u='.$url.'" rel="nofollow">Cymraeg</a>'.$medhjos.'  
<a lang="da" xml:lang="da" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Cda&amp;u='.$url.'" rel="nofollow">Dansk</a>'.$medhjos.'  
<a lang="de" xml:lang="de" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Cde&amp;u='.$url.'" rel="nofollow">Deutsch</a>'.$medhjos.'  
<a lang="et" xml:lang="et" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Cet&amp;u='.$url.'" rel="nofollow">Eesti</a>'.$medhjos.'  
<a lang="el" xml:lang="el" title="Ellenika" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Cel&amp;u='.$url.'" rel="nofollow">Ελληνικά</a>'.$medhjos.'  
<a lang="es" xml:lang="es" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Ces&amp;u='.$url.'" rel="nofollow">Español</a>'.$medhjos.'  
<a lang="fa" xml:lang="fa" title="Fārsī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Cfa&amp;u='.$url.'" rel="nofollow">فارسی</a>'.$medhjos.'  
<a lang="fr" xml:lang="fr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Cfr&amp;u='.$url.'" rel="nofollow">Français</a>'.$medhjos.'  
<a lang="ga" xml:lang="ga" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Cga&amp;u='.$url.'" rel="nofollow">Gaeilge</a>'.$medhjos.'  
<a lang="gl" xml:lang="gl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Cgl&amp;u='.$url.'" rel="nofollow">Galego</a>'.$medhjos.'  
<a lang="hi" xml:lang="hi" title="Hindī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Chi&amp;u='.$url.'" rel="nofollow">हिन्दी</a>'.$medhjos.'  
<a lang="hr" xml:lang="hr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Chr&amp;u='.$url.'" rel="nofollow">Hrvatski</a>'.$medhjos.'  
<a lang="id" xml:lang="id" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Cid&amp;u='.$url.'" rel="nofollow">Bahasa Indonesia</a>'.$medhjos.'  
<a lang="is" xml:lang="is" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Cis&amp;u='.$url.'" rel="nofollow">Íslenska</a>'.$medhjos.'  
<a lang="it" xml:lang="it" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Cit&amp;u='.$url.'" rel="nofollow">Italiano</a>'.$medhjos.'  
<a lang="he" xml:lang="he" title="‘Ivrit" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Che&amp;u='.$url.'" rel="nofollow">עברית</a>'.$medhjos.'  
<a lang="lv" xml:lang="lv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Clv&amp;u='.$url.'" rel="nofollow">Latviešu</a>'.$medhjos.'  
<a lang="lt" xml:lang="lt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Clt&amp;u='.$url.'" rel="nofollow">Lietuvių</a>'.$medhjos.'  
<a lang="ko" xml:lang="ko" title="Hangugeo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Cko&amp;u='.$url.'" rel="nofollow">한국어</a>'.$medhjos.'  
<a lang="hu" xml:lang="hu" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Chu&amp;u='.$url.'" rel="nofollow">Magyar</a>'.$medhjos.'  
<a lang="ml" xml:lang="ml" title="Malayalam" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Cml&amp;u='.$url.'" rel="nofollow">മലയാളം</a>'.$medhjos.'  
<a lang="mt" xml:lang="mt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Cmt&amp;u='.$url.'" rel="nofollow">Malti</a>'.$medhjos.'  
<a lang="nl" xml:lang="nl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Cnl&amp;u='.$url.'" rel="nofollow">Nederlands</a>'.$medhjos.'  
<a lang="ja" xml:lang="ja" title="Nihongo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Cja&amp;u='.$url.'" rel="nofollow">日本語</a>'.$medhjos.'  
<a lang="no" xml:lang="no" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Cno&amp;u='.$url.'" rel="nofollow">Norsk (Bokmål)</a>'.$medhjos.'  
<a lang="pl" xml:lang="pl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Cpl&amp;u='.$url.'" rel="nofollow">Polski</a>'.$medhjos.'  
<a lang="pt" xml:lang="pt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Cpt&amp;u='.$url.'" rel="nofollow">Português</a>'.$medhjos.'  
<a lang="ro" xml:lang="ro" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Cro&amp;u='.$url.'" rel="nofollow">Română</a>'.$medhjos.'  
<a lang="ru" xml:lang="ru" title="Russkij" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Cru&amp;u='.$url.'" rel="nofollow">Русский</a>'.$medhjos.'  
<a lang="sk" xml:lang="sk" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Csk&amp;u='.$url.'" rel="nofollow">Slovenčina</a>'.$medhjos.'  
<a lang="sl" xml:lang="sl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Csl&amp;u='.$url.'" rel="nofollow">Slovenščina</a>'.$medhjos.'  
<a lang="sq" xml:lang="sq" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Csq&amp;u='.$url.'" rel="nofollow">Shqip</a>'.$medhjos.'  
<a lang="sr" xml:lang="sr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Csr&amp;u='.$url.'" rel="nofollow">Srpski</a>'.$medhjos.'  
<a lang="fi" xml:lang="fi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Cfi&amp;u='.$url.'" rel="nofollow">Suomi</a>'.$medhjos.'  
<a lang="sv" xml:lang="sv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Csv&amp;u='.$url.'" rel="nofollow">Svenska</a>'.$medhjos.'  
<a lang="sw" xml:lang="sw" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Csw&amp;u='.$url.'" rel="nofollow">Kiswahili</a>'.$medhjos.'  
<a lang="th" xml:lang="th" title="Thai" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Cth&amp;u='.$url.'" rel="nofollow">ไทย</a>'.$medhjos.'  
<a lang="tl" xml:lang="tl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Ctl&amp;u='.$url.'" rel="nofollow">Tagalog</a>'.$medhjos.'  
<a lang="tr" xml:lang="tr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Ctr&amp;u='.$url.'" rel="nofollow">Türkçe</a>'.$medhjos.'  
<a lang="uk" xml:lang="uk" title="Ukraïns’ka" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Cuk&amp;u='.$url.'" rel="nofollow">Українська</a>'.$medhjos.'  
<a lang="vi" xml:lang="vi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Cvi&amp;u='.$url.'" rel="nofollow">Tiếng Việt</a>'.$medhjos.'  
<a lang="yi" xml:lang="yi" title="Yidiš" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Cyi&amp;u='.$url.'" rel="nofollow">ייִדיש</a>.'.$medhjos.'  
<a lang="zh-CN" xml:lang="zh-CN" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Czh-CN&amp;u='.$url.'" rel="nofollow">中文</a> /
<a lang="zh-TW" xml:lang="zh-TW" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mk%7Czh-TW&amp;u='.$url.'" rel="nofollow">漢語</a>';
		$malayalam = '<a lang="ml" xml:lang="ml" title="Malayalam" href="#">മലയാളം</a>'.$medhjos.'
<a lang="en" xml:lang="en" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Cen&amp;u='.$url.'" rel="nofollow">English</a>'.$medhjos.'
<a lang="af" xml:lang="af" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Caf&amp;u='.$url.'" rel="nofollow">Afrikaans</a>'.$medhjos.'  
<a lang="ar" xml:lang="ar" title="Araby" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Car&amp;u='.$url.'" rel="nofollow">العربية</a>'.$medhjos.'  
<a lang="be" xml:lang="be" title="Belaruskaya" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Cbe&amp;u='.$url.'" rel="nofollow">Беларуская</a>'.$medhjos.'  
<a lang="bg" xml:lang="bg" title="Bulgarski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Cbg&amp;u='.$url.'" rel="nofollow">Български</a>'.$medhjos.'  
<a lang="ca" xml:lang="ca" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Cca&amp;u='.$url.'" rel="nofollow">Català</a>'.$medhjos.'  
<a lang="cs" xml:lang="cs" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Ccs&amp;u='.$url.'" rel="nofollow">Česky</a>'.$medhjos.'  
<a lang="cy" xml:lang="cy" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Ccy&amp;u='.$url.'" rel="nofollow">Cymraeg</a>'.$medhjos.'  
<a lang="da" xml:lang="da" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Cda&amp;u='.$url.'" rel="nofollow">Dansk</a>'.$medhjos.'  
<a lang="de" xml:lang="de" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Cde&amp;u='.$url.'" rel="nofollow">Deutsch</a>'.$medhjos.'  
<a lang="et" xml:lang="et" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Cet&amp;u='.$url.'" rel="nofollow">Eesti</a>'.$medhjos.'  
<a lang="el" xml:lang="el" title="Ellenika" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Cel&amp;u='.$url.'" rel="nofollow">Ελληνικά</a>'.$medhjos.'  
<a lang="es" xml:lang="es" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Ces&amp;u='.$url.'" rel="nofollow">Español</a>'.$medhjos.'  
<a lang="fa" xml:lang="fa" title="Fārsī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Cfa&amp;u='.$url.'" rel="nofollow">فارسی</a>'.$medhjos.'  
<a lang="fr" xml:lang="fr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Cfr&amp;u='.$url.'" rel="nofollow">Français</a>'.$medhjos.'  
<a lang="ga" xml:lang="ga" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Cga&amp;u='.$url.'" rel="nofollow">Gaeilge</a>'.$medhjos.'  
<a lang="gl" xml:lang="gl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Cgl&amp;u='.$url.'" rel="nofollow">Galego</a>'.$medhjos.'  
<a lang="hi" xml:lang="hi" title="Hindī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Chi&amp;u='.$url.'" rel="nofollow">हिन्दी</a>'.$medhjos.'  
<a lang="hr" xml:lang="hr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Chr&amp;u='.$url.'" rel="nofollow">Hrvatski</a>'.$medhjos.'  
<a lang="id" xml:lang="id" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Cid&amp;u='.$url.'" rel="nofollow">Bahasa Indonesia</a>'.$medhjos.'  
<a lang="is" xml:lang="is" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Cis&amp;u='.$url.'" rel="nofollow">Íslenska</a>'.$medhjos.'  
<a lang="it" xml:lang="it" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Cit&amp;u='.$url.'" rel="nofollow">Italiano</a>'.$medhjos.'  
<a lang="he" xml:lang="he" title="‘Ivrit" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Che&amp;u='.$url.'" rel="nofollow">עברית</a>'.$medhjos.'  
<a lang="lv" xml:lang="lv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Clv&amp;u='.$url.'" rel="nofollow">Latviešu</a>'.$medhjos.'  
<a lang="lt" xml:lang="lt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Clt&amp;u='.$url.'" rel="nofollow">Lietuvių</a>'.$medhjos.'  
<a lang="ko" xml:lang="ko" title="Hangugeo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Cko&amp;u='.$url.'" rel="nofollow">한국어</a>'.$medhjos.'  
<a lang="hu" xml:lang="hu" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Chu&amp;u='.$url.'" rel="nofollow">Magyar</a>'.$medhjos.'  
<a lang="mk" xml:lang="mk" title="Makedonski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Cmk&amp;u='.$url.'" rel="nofollow">Македонски</a>'.$medhjos.'  
<a lang="mt" xml:lang="mt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Cmt&amp;u='.$url.'" rel="nofollow">Malti</a>'.$medhjos.'  
<a lang="nl" xml:lang="nl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Cnl&amp;u='.$url.'" rel="nofollow">Nederlands</a>'.$medhjos.'  
<a lang="ja" xml:lang="ja" title="Nihongo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Cja&amp;u='.$url.'" rel="nofollow">日本語</a>'.$medhjos.'  
<a lang="no" xml:lang="no" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Cno&amp;u='.$url.'" rel="nofollow">Norsk (Bokmål)</a>'.$medhjos.'  
<a lang="pl" xml:lang="pl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Cpl&amp;u='.$url.'" rel="nofollow">Polski</a>'.$medhjos.'  
<a lang="pt" xml:lang="pt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Cpt&amp;u='.$url.'" rel="nofollow">Português</a>'.$medhjos.'  
<a lang="ro" xml:lang="ro" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Cro&amp;u='.$url.'" rel="nofollow">Română</a>'.$medhjos.'  
<a lang="ru" xml:lang="ru" title="Russkij" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Cru&amp;u='.$url.'" rel="nofollow">Русский</a>'.$medhjos.'  
<a lang="sk" xml:lang="sk" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Csk&amp;u='.$url.'" rel="nofollow">Slovenčina</a>'.$medhjos.'  
<a lang="sl" xml:lang="sl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Csl&amp;u='.$url.'" rel="nofollow">Slovenščina</a>'.$medhjos.'  
<a lang="sq" xml:lang="sq" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Csq&amp;u='.$url.'" rel="nofollow">Shqip</a>'.$medhjos.'  
<a lang="sr" xml:lang="sr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Csr&amp;u='.$url.'" rel="nofollow">Srpski</a>'.$medhjos.'  
<a lang="fi" xml:lang="fi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Cfi&amp;u='.$url.'" rel="nofollow">Suomi</a>'.$medhjos.'  
<a lang="sv" xml:lang="sv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Csv&amp;u='.$url.'" rel="nofollow">Svenska</a>'.$medhjos.'  
<a lang="sw" xml:lang="sw" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Csw&amp;u='.$url.'" rel="nofollow">Kiswahili</a>'.$medhjos.'  
<a lang="th" xml:lang="th" title="Thai" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Cth&amp;u='.$url.'" rel="nofollow">ไทย</a>'.$medhjos.'  
<a lang="tl" xml:lang="tl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Ctl&amp;u='.$url.'" rel="nofollow">Tagalog</a>'.$medhjos.'  
<a lang="tr" xml:lang="tr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Ctr&amp;u='.$url.'" rel="nofollow">Türkçe</a>'.$medhjos.'  
<a lang="uk" xml:lang="uk" title="Ukraïns’ka" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Cuk&amp;u='.$url.'" rel="nofollow">Українська</a>'.$medhjos.'  
<a lang="vi" xml:lang="vi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Cvi&amp;u='.$url.'" rel="nofollow">Tiếng Việt</a>'.$medhjos.'  
<a lang="yi" xml:lang="yi" title="Yidiš" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Cyi&amp;u='.$url.'" rel="nofollow">ייִדיש</a>.'.$medhjos.'  
<a lang="zh-CN" xml:lang="zh-CN" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Czh-CN&amp;u='.$url.'" rel="nofollow">中文</a> /
<a lang="zh-TW" xml:lang="zh-TW" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ml%7Czh-TW&amp;u='.$url.'" rel="nofollow">漢語</a>';
		$malti = '<a lang="mt" xml:lang="mt" href="#">Malti</a>'.$medhjos.'
<a lang="en" xml:lang="en" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Cen&amp;u='.$url.'" rel="nofollow">English</a>'.$medhjos.'
<a lang="af" xml:lang="af" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Caf&amp;u='.$url.'" rel="nofollow">Afrikaans</a>'.$medhjos.'  
<a lang="ar" xml:lang="ar" title="Araby" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Car&amp;u='.$url.'" rel="nofollow">العربية</a>'.$medhjos.'  
<a lang="be" xml:lang="be" title="Belaruskaya" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Cbe&amp;u='.$url.'" rel="nofollow">Беларуская</a>'.$medhjos.'  
<a lang="bg" xml:lang="bg" title="Bulgarski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Cbg&amp;u='.$url.'" rel="nofollow">Български</a>'.$medhjos.'  
<a lang="ca" xml:lang="ca" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Cca&amp;u='.$url.'" rel="nofollow">Català</a>'.$medhjos.'  
<a lang="cs" xml:lang="cs" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Ccs&amp;u='.$url.'" rel="nofollow">Česky</a>'.$medhjos.'  
<a lang="cy" xml:lang="cy" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Ccy&amp;u='.$url.'" rel="nofollow">Cymraeg</a>'.$medhjos.'  
<a lang="da" xml:lang="da" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Cda&amp;u='.$url.'" rel="nofollow">Dansk</a>'.$medhjos.'  
<a lang="de" xml:lang="de" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Cde&amp;u='.$url.'" rel="nofollow">Deutsch</a>'.$medhjos.'  
<a lang="et" xml:lang="et" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Cet&amp;u='.$url.'" rel="nofollow">Eesti</a>'.$medhjos.'  
<a lang="el" xml:lang="el" title="Ellenika" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Cel&amp;u='.$url.'" rel="nofollow">Ελληνικά</a>'.$medhjos.'  
<a lang="es" xml:lang="es" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Ces&amp;u='.$url.'" rel="nofollow">Español</a>'.$medhjos.'  
<a lang="fa" xml:lang="fa" title="Fārsī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Cfa&amp;u='.$url.'" rel="nofollow">فارسی</a>'.$medhjos.'  
<a lang="fr" xml:lang="fr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Cfr&amp;u='.$url.'" rel="nofollow">Français</a>'.$medhjos.'  
<a lang="ga" xml:lang="ga" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Cga&amp;u='.$url.'" rel="nofollow">Gaeilge</a>'.$medhjos.'  
<a lang="gl" xml:lang="gl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Cgl&amp;u='.$url.'" rel="nofollow">Galego</a>'.$medhjos.'  
<a lang="hi" xml:lang="hi" title="Hindī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Chi&amp;u='.$url.'" rel="nofollow">हिन्दी</a>'.$medhjos.'  
<a lang="hr" xml:lang="hr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Chr&amp;u='.$url.'" rel="nofollow">Hrvatski</a>'.$medhjos.'  
<a lang="id" xml:lang="id" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Cid&amp;u='.$url.'" rel="nofollow">Bahasa Indonesia</a>'.$medhjos.'  
<a lang="is" xml:lang="is" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Cis&amp;u='.$url.'" rel="nofollow">Íslenska</a>'.$medhjos.'  
<a lang="it" xml:lang="it" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Cit&amp;u='.$url.'" rel="nofollow">Italiano</a>'.$medhjos.'  
<a lang="he" xml:lang="he" title="‘Ivrit" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Che&amp;u='.$url.'" rel="nofollow">עברית</a>'.$medhjos.'  
<a lang="lv" xml:lang="lv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Clv&amp;u='.$url.'" rel="nofollow">Latviešu</a>'.$medhjos.'  
<a lang="lt" xml:lang="lt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Clt&amp;u='.$url.'" rel="nofollow">Lietuvių</a>'.$medhjos.'  
<a lang="ko" xml:lang="ko" title="Hangugeo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Cko&amp;u='.$url.'" rel="nofollow">한국어</a>'.$medhjos.'  
<a lang="hu" xml:lang="hu" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Chu&amp;u='.$url.'" rel="nofollow">Magyar</a>'.$medhjos.'  
<a lang="mk" xml:lang="mk" title="Makedonski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Cmk&amp;u='.$url.'" rel="nofollow">Македонски</a>'.$medhjos.'  
<a lang="ml" xml:lang="ml" title="Malayalam" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Cml&amp;u='.$url.'" rel="nofollow">മലയാളം</a>'.$medhjos.'  
<a lang="nl" xml:lang="nl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Cnl&amp;u='.$url.'" rel="nofollow">Nederlands</a>'.$medhjos.'  
<a lang="ja" xml:lang="ja" title="Nihongo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Cja&amp;u='.$url.'" rel="nofollow">日本語</a>'.$medhjos.'  
<a lang="no" xml:lang="no" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Cno&amp;u='.$url.'" rel="nofollow">Norsk (Bokmål)</a>'.$medhjos.'  
<a lang="pl" xml:lang="pl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Cpl&amp;u='.$url.'" rel="nofollow">Polski</a>'.$medhjos.'  
<a lang="pt" xml:lang="pt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Cpt&amp;u='.$url.'" rel="nofollow">Português</a>'.$medhjos.'  
<a lang="ro" xml:lang="ro" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Cro&amp;u='.$url.'" rel="nofollow">Română</a>'.$medhjos.'  
<a lang="ru" xml:lang="ru" title="Russkij" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Cru&amp;u='.$url.'" rel="nofollow">Русский</a>'.$medhjos.'  
<a lang="sk" xml:lang="sk" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Csk&amp;u='.$url.'" rel="nofollow">Slovenčina</a>'.$medhjos.'  
<a lang="sl" xml:lang="sl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Csl&amp;u='.$url.'" rel="nofollow">Slovenščina</a>'.$medhjos.'  
<a lang="sq" xml:lang="sq" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Csq&amp;u='.$url.'" rel="nofollow">Shqip</a>'.$medhjos.'  
<a lang="sr" xml:lang="sr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Csr&amp;u='.$url.'" rel="nofollow">Srpski</a>'.$medhjos.'  
<a lang="fi" xml:lang="fi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Cfi&amp;u='.$url.'" rel="nofollow">Suomi</a>'.$medhjos.'  
<a lang="sv" xml:lang="sv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Csv&amp;u='.$url.'" rel="nofollow">Svenska</a>'.$medhjos.'  
<a lang="sw" xml:lang="sw" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Csw&amp;u='.$url.'" rel="nofollow">Kiswahili</a>'.$medhjos.'  
<a lang="th" xml:lang="th" title="Thai" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Cth&amp;u='.$url.'" rel="nofollow">ไทย</a>'.$medhjos.'  
<a lang="tl" xml:lang="tl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Ctl&amp;u='.$url.'" rel="nofollow">Tagalog</a>'.$medhjos.'  
<a lang="tr" xml:lang="tr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Ctr&amp;u='.$url.'" rel="nofollow">Türkçe</a>'.$medhjos.'  
<a lang="uk" xml:lang="uk" title="Ukraïns’ka" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Cuk&amp;u='.$url.'" rel="nofollow">Українська</a>'.$medhjos.'  
<a lang="vi" xml:lang="vi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Cvi&amp;u='.$url.'" rel="nofollow">Tiếng Việt</a>'.$medhjos.'  
<a lang="yi" xml:lang="yi" title="Yidiš" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Cyi&amp;u='.$url.'" rel="nofollow">ייִדיש</a>.'.$medhjos.'  
<a lang="zh-CN" xml:lang="zh-CN" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Czh-CN&amp;u='.$url.'" rel="nofollow">中文</a> /
<a lang="zh-TW" xml:lang="zh-TW" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=mt%7Czh-TW&amp;u='.$url.'" rel="nofollow">漢語</a>';
		$nederlands = '<a lang="nl" xml:lang="nl" href="#">Nederlands</a>'.$medhjos.'
<a lang="en" xml:lang="en" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Cen&amp;u='.$url.'" rel="nofollow">English</a>'.$medhjos.'
<a lang="af" xml:lang="af" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Caf&amp;u='.$url.'" rel="nofollow">Afrikaans</a>'.$medhjos.'  
<a lang="ar" xml:lang="ar" title="Araby" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Car&amp;u='.$url.'" rel="nofollow">العربية</a>'.$medhjos.'  
<a lang="be" xml:lang="be" title="Belaruskaya" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Cbe&amp;u='.$url.'" rel="nofollow">Беларуская</a>'.$medhjos.'  
<a lang="bg" xml:lang="bg" title="Bulgarski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Cbg&amp;u='.$url.'" rel="nofollow">Български</a>'.$medhjos.'  
<a lang="ca" xml:lang="ca" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Cca&amp;u='.$url.'" rel="nofollow">Català</a>'.$medhjos.'  
<a lang="cs" xml:lang="cs" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Ccs&amp;u='.$url.'" rel="nofollow">Česky</a>'.$medhjos.'  
<a lang="cy" xml:lang="cy" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Ccy&amp;u='.$url.'" rel="nofollow">Cymraeg</a>'.$medhjos.'  
<a lang="da" xml:lang="da" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Cda&amp;u='.$url.'" rel="nofollow">Dansk</a>'.$medhjos.'  
<a lang="de" xml:lang="de" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Cde&amp;u='.$url.'" rel="nofollow">Deutsch</a>'.$medhjos.'  
<a lang="et" xml:lang="et" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Cet&amp;u='.$url.'" rel="nofollow">Eesti</a>'.$medhjos.'  
<a lang="el" xml:lang="el" title="Ellenika" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Cel&amp;u='.$url.'" rel="nofollow">Ελληνικά</a>'.$medhjos.'  
<a lang="es" xml:lang="es" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Ces&amp;u='.$url.'" rel="nofollow">Español</a>'.$medhjos.'  
<a lang="fa" xml:lang="fa" title="Fārsī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Cfa&amp;u='.$url.'" rel="nofollow">فارسی</a>'.$medhjos.'  
<a lang="fr" xml:lang="fr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Cfr&amp;u='.$url.'" rel="nofollow">Français</a>'.$medhjos.'  
<a lang="ga" xml:lang="ga" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Cga&amp;u='.$url.'" rel="nofollow">Gaeilge</a>'.$medhjos.'  
<a lang="gl" xml:lang="gl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Cgl&amp;u='.$url.'" rel="nofollow">Galego</a>'.$medhjos.'  
<a lang="hi" xml:lang="hi" title="Hindī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Chi&amp;u='.$url.'" rel="nofollow">हिन्दी</a>'.$medhjos.'  
<a lang="hr" xml:lang="hr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Chr&amp;u='.$url.'" rel="nofollow">Hrvatski</a>'.$medhjos.'  
<a lang="id" xml:lang="id" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Cid&amp;u='.$url.'" rel="nofollow">Bahasa Indonesia</a>'.$medhjos.'  
<a lang="is" xml:lang="is" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Cis&amp;u='.$url.'" rel="nofollow">Íslenska</a>'.$medhjos.'  
<a lang="it" xml:lang="it" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Cit&amp;u='.$url.'" rel="nofollow">Italiano</a>'.$medhjos.'  
<a lang="he" xml:lang="he" title="‘Ivrit" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Che&amp;u='.$url.'" rel="nofollow">עברית</a>'.$medhjos.'  
<a lang="lv" xml:lang="lv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Clv&amp;u='.$url.'" rel="nofollow">Latviešu</a>'.$medhjos.'  
<a lang="lt" xml:lang="lt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Clt&amp;u='.$url.'" rel="nofollow">Lietuvių</a>'.$medhjos.'  
<a lang="ko" xml:lang="ko" title="Hangugeo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Cko&amp;u='.$url.'" rel="nofollow">한국어</a>'.$medhjos.'  
<a lang="hu" xml:lang="hu" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Chu&amp;u='.$url.'" rel="nofollow">Magyar</a>'.$medhjos.'  
<a lang="mk" xml:lang="mk" title="Makedonski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Cmk&amp;u='.$url.'" rel="nofollow">Македонски</a>'.$medhjos.'  
<a lang="ml" xml:lang="ml" title="Malayalam" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Cml&amp;u='.$url.'" rel="nofollow">മലയാളം</a>'.$medhjos.'  
<a lang="mt" xml:lang="mt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Cmt&amp;u='.$url.'" rel="nofollow">Malti</a>'.$medhjos.'  
<a lang="ja" xml:lang="ja" title="Nihongo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Cja&amp;u='.$url.'" rel="nofollow">日本語</a>'.$medhjos.'  
<a lang="no" xml:lang="no" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Cno&amp;u='.$url.'" rel="nofollow">Norsk (Bokmål)</a>'.$medhjos.'  
<a lang="pl" xml:lang="pl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Cpl&amp;u='.$url.'" rel="nofollow">Polski</a>'.$medhjos.'  
<a lang="pt" xml:lang="pt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Cpt&amp;u='.$url.'" rel="nofollow">Português</a>'.$medhjos.'  
<a lang="ro" xml:lang="ro" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Cro&amp;u='.$url.'" rel="nofollow">Română</a>'.$medhjos.'  
<a lang="ru" xml:lang="ru" title="Russkij" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Cru&amp;u='.$url.'" rel="nofollow">Русский</a>'.$medhjos.'  
<a lang="sk" xml:lang="sk" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Csk&amp;u='.$url.'" rel="nofollow">Slovenčina</a>'.$medhjos.'  
<a lang="sl" xml:lang="sl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Csl&amp;u='.$url.'" rel="nofollow">Slovenščina</a>'.$medhjos.'  
<a lang="sq" xml:lang="sq" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Csq&amp;u='.$url.'" rel="nofollow">Shqip</a>'.$medhjos.'  
<a lang="sr" xml:lang="sr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Csr&amp;u='.$url.'" rel="nofollow">Srpski</a>'.$medhjos.'  
<a lang="fi" xml:lang="fi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Cfi&amp;u='.$url.'" rel="nofollow">Suomi</a>'.$medhjos.'  
<a lang="sv" xml:lang="sv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Csv&amp;u='.$url.'" rel="nofollow">Svenska</a>'.$medhjos.'  
<a lang="sw" xml:lang="sw" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Csw&amp;u='.$url.'" rel="nofollow">Kiswahili</a>'.$medhjos.'  
<a lang="th" xml:lang="th" title="Thai" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Cth&amp;u='.$url.'" rel="nofollow">ไทย</a>'.$medhjos.'  
<a lang="tl" xml:lang="tl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Ctl&amp;u='.$url.'" rel="nofollow">Tagalog</a>'.$medhjos.'  
<a lang="tr" xml:lang="tr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Ctr&amp;u='.$url.'" rel="nofollow">Türkçe</a>'.$medhjos.'  
<a lang="uk" xml:lang="uk" title="Ukraïns’ka" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Cuk&amp;u='.$url.'" rel="nofollow">Українська</a>'.$medhjos.'  
<a lang="vi" xml:lang="vi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Cvi&amp;u='.$url.'" rel="nofollow">Tiếng Việt</a>'.$medhjos.'  
<a lang="yi" xml:lang="yi" title="Yidiš" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Cyi&amp;u='.$url.'" rel="nofollow">ייִדיש</a>.'.$medhjos.'  
<a lang="zh-CN" xml:lang="zh-CN" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Czh-CN&amp;u='.$url.'" rel="nofollow">中文</a> /
<a lang="zh-TW" xml:lang="zh-TW" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=nl%7Czh-TW&amp;u='.$url.'" rel="nofollow">漢語</a>';
		$nihongo = '<a lang="ja" xml:lang="ja" href="#">日本語</a>'.$medhjos.'
<a lang="en" xml:lang="en" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Cen&amp;u='.$url.'" rel="nofollow">English</a>'.$medhjos.'
<a lang="af" xml:lang="af" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Caf&amp;u='.$url.'" rel="nofollow">Afrikaans</a>'.$medhjos.'  
<a lang="ar" xml:lang="ar" title="Araby" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Car&amp;u='.$url.'" rel="nofollow">العربية</a>'.$medhjos.'  
<a lang="be" xml:lang="be" title="Belaruskaya" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Cbe&amp;u='.$url.'" rel="nofollow">Беларуская</a>'.$medhjos.'  
<a lang="bg" xml:lang="bg" title="Bulgarski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Cbg&amp;u='.$url.'" rel="nofollow">Български</a>'.$medhjos.'  
<a lang="ca" xml:lang="ca" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Cca&amp;u='.$url.'" rel="nofollow">Català</a>'.$medhjos.'  
<a lang="cs" xml:lang="cs" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Ccs&amp;u='.$url.'" rel="nofollow">Česky</a>'.$medhjos.'  
<a lang="cy" xml:lang="cy" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Ccy&amp;u='.$url.'" rel="nofollow">Cymraeg</a>'.$medhjos.'  
<a lang="da" xml:lang="da" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Cda&amp;u='.$url.'" rel="nofollow">Dansk</a>'.$medhjos.'  
<a lang="de" xml:lang="de" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Cde&amp;u='.$url.'" rel="nofollow">Deutsch</a>'.$medhjos.'  
<a lang="et" xml:lang="et" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Cet&amp;u='.$url.'" rel="nofollow">Eesti</a>'.$medhjos.'  
<a lang="el" xml:lang="el" title="Ellenika" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Cel&amp;u='.$url.'" rel="nofollow">Ελληνικά</a>'.$medhjos.'  
<a lang="es" xml:lang="es" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Ces&amp;u='.$url.'" rel="nofollow">Español</a>'.$medhjos.'  
<a lang="fa" xml:lang="fa" title="Fārsī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Cfa&amp;u='.$url.'" rel="nofollow">فارسی</a>'.$medhjos.'  
<a lang="fr" xml:lang="fr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Cfr&amp;u='.$url.'" rel="nofollow">Français</a>'.$medhjos.'  
<a lang="ga" xml:lang="ga" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Cga&amp;u='.$url.'" rel="nofollow">Gaeilge</a>'.$medhjos.'  
<a lang="gl" xml:lang="gl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Cgl&amp;u='.$url.'" rel="nofollow">Galego</a>'.$medhjos.'  
<a lang="hi" xml:lang="hi" title="Hindī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Chi&amp;u='.$url.'" rel="nofollow">हिन्दी</a>'.$medhjos.'  
<a lang="hr" xml:lang="hr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Chr&amp;u='.$url.'" rel="nofollow">Hrvatski</a>'.$medhjos.'  
<a lang="id" xml:lang="id" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Cid&amp;u='.$url.'" rel="nofollow">Bahasa Indonesia</a>'.$medhjos.'  
<a lang="is" xml:lang="is" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Cis&amp;u='.$url.'" rel="nofollow">Íslenska</a>'.$medhjos.'  
<a lang="it" xml:lang="it" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Cit&amp;u='.$url.'" rel="nofollow">Italiano</a>'.$medhjos.'  
<a lang="he" xml:lang="he" title="‘Ivrit" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Che&amp;u='.$url.'" rel="nofollow">עברית</a>'.$medhjos.'  
<a lang="lv" xml:lang="lv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Clv&amp;u='.$url.'" rel="nofollow">Latviešu</a>'.$medhjos.'  
<a lang="lt" xml:lang="lt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Clt&amp;u='.$url.'" rel="nofollow">Lietuvių</a>'.$medhjos.'  
<a lang="ko" xml:lang="ko" title="Hangugeo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Cko&amp;u='.$url.'" rel="nofollow">한국어</a>'.$medhjos.'  
<a lang="hu" xml:lang="hu" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Chu&amp;u='.$url.'" rel="nofollow">Magyar</a>'.$medhjos.'  
<a lang="mk" xml:lang="mk" title="Makedonski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Cmk&amp;u='.$url.'" rel="nofollow">Македонски</a>'.$medhjos.'  
<a lang="ml" xml:lang="ml" title="Malayalam" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Cml&amp;u='.$url.'" rel="nofollow">മലയാളം</a>'.$medhjos.'  
<a lang="mt" xml:lang="mt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Cmt&amp;u='.$url.'" rel="nofollow">Malti</a>'.$medhjos.'  
<a lang="nl" xml:lang="nl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Cnl&amp;u='.$url.'" rel="nofollow">Nederlands</a>'.$medhjos.'  
<a lang="no" xml:lang="no" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Cno&amp;u='.$url.'" rel="nofollow">Norsk (Bokmål)</a>'.$medhjos.'  
<a lang="pl" xml:lang="pl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Cpl&amp;u='.$url.'" rel="nofollow">Polski</a>'.$medhjos.'  
<a lang="pt" xml:lang="pt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Cpt&amp;u='.$url.'" rel="nofollow">Português</a>'.$medhjos.'  
<a lang="ro" xml:lang="ro" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Cro&amp;u='.$url.'" rel="nofollow">Română</a>'.$medhjos.'  
<a lang="ru" xml:lang="ru" title="Russkij" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Cru&amp;u='.$url.'" rel="nofollow">Русский</a>'.$medhjos.'  
<a lang="sk" xml:lang="sk" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Csk&amp;u='.$url.'" rel="nofollow">Slovenčina</a>'.$medhjos.'  
<a lang="sl" xml:lang="sl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Csl&amp;u='.$url.'" rel="nofollow">Slovenščina</a>'.$medhjos.'  
<a lang="sq" xml:lang="sq" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Csq&amp;u='.$url.'" rel="nofollow">Shqip</a>'.$medhjos.'  
<a lang="sr" xml:lang="sr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Csr&amp;u='.$url.'" rel="nofollow">Srpski</a>'.$medhjos.'  
<a lang="fi" xml:lang="fi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Cfi&amp;u='.$url.'" rel="nofollow">Suomi</a>'.$medhjos.'  
<a lang="sv" xml:lang="sv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Csv&amp;u='.$url.'" rel="nofollow">Svenska</a>'.$medhjos.'  
<a lang="sw" xml:lang="sw" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Csw&amp;u='.$url.'" rel="nofollow">Kiswahili</a>'.$medhjos.'  
<a lang="th" xml:lang="th" title="Thai" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Cth&amp;u='.$url.'" rel="nofollow">ไทย</a>'.$medhjos.'  
<a lang="tl" xml:lang="tl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Ctl&amp;u='.$url.'" rel="nofollow">Tagalog</a>'.$medhjos.'  
<a lang="tr" xml:lang="tr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Ctr&amp;u='.$url.'" rel="nofollow">Türkçe</a>'.$medhjos.'  
<a lang="uk" xml:lang="uk" title="Ukraïns’ka" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Cuk&amp;u='.$url.'" rel="nofollow">Українська</a>'.$medhjos.'  
<a lang="vi" xml:lang="vi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Cvi&amp;u='.$url.'" rel="nofollow">Tiếng Việt</a>'.$medhjos.'  
<a lang="yi" xml:lang="yi" title="Yidiš" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Cyi&amp;u='.$url.'" rel="nofollow">ייִדיש</a>.'.$medhjos.'  
<a lang="zh-CN" xml:lang="zh-CN" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Czh-CN&amp;u='.$url.'" rel="nofollow">中文</a> /
<a lang="zh-TW" xml:lang="zh-TW" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ja%7Czh-TW&amp;u='.$url.'" rel="nofollow">漢語</a>';
		$norsk = '<a lang="no" xml:lang="no" href="#">Norsk</a>'.$medhjos.'
<a lang="en" xml:lang="en" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Cen&amp;u='.$url.'" rel="nofollow">English</a>'.$medhjos.'
<a lang="af" xml:lang="af" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Caf&amp;u='.$url.'" rel="nofollow">Afrikaans</a>'.$medhjos.'  
<a lang="ar" xml:lang="ar" title="Araby" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Car&amp;u='.$url.'" rel="nofollow">العربية</a>'.$medhjos.'  
<a lang="be" xml:lang="be" title="Belaruskaya" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Cbe&amp;u='.$url.'" rel="nofollow">Беларуская</a>'.$medhjos.'  
<a lang="bg" xml:lang="bg" title="Bulgarski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Cbg&amp;u='.$url.'" rel="nofollow">Български</a>'.$medhjos.'  
<a lang="ca" xml:lang="ca" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Cca&amp;u='.$url.'" rel="nofollow">Català</a>'.$medhjos.'  
<a lang="cs" xml:lang="cs" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Ccs&amp;u='.$url.'" rel="nofollow">Česky</a>'.$medhjos.'  
<a lang="cy" xml:lang="cy" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Ccy&amp;u='.$url.'" rel="nofollow">Cymraeg</a>'.$medhjos.'  
<a lang="da" xml:lang="da" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Cda&amp;u='.$url.'" rel="nofollow">Dansk</a>'.$medhjos.'  
<a lang="de" xml:lang="de" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Cde&amp;u='.$url.'" rel="nofollow">Deutsch</a>'.$medhjos.'  
<a lang="et" xml:lang="et" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Cet&amp;u='.$url.'" rel="nofollow">Eesti</a>'.$medhjos.'  
<a lang="el" xml:lang="el" title="Ellenika" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Cel&amp;u='.$url.'" rel="nofollow">Ελληνικά</a>'.$medhjos.'  
<a lang="es" xml:lang="es" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Ces&amp;u='.$url.'" rel="nofollow">Español</a>'.$medhjos.'  
<a lang="fa" xml:lang="fa" title="Fārsī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Cfa&amp;u='.$url.'" rel="nofollow">فارسی</a>'.$medhjos.'  
<a lang="fr" xml:lang="fr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Cfr&amp;u='.$url.'" rel="nofollow">Français</a>'.$medhjos.'  
<a lang="ga" xml:lang="ga" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Cga&amp;u='.$url.'" rel="nofollow">Gaeilge</a>'.$medhjos.'  
<a lang="gl" xml:lang="gl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Cgl&amp;u='.$url.'" rel="nofollow">Galego</a>'.$medhjos.'  
<a lang="hi" xml:lang="hi" title="Hindī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Chi&amp;u='.$url.'" rel="nofollow">हिन्दी</a>'.$medhjos.'  
<a lang="hr" xml:lang="hr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Chr&amp;u='.$url.'" rel="nofollow">Hrvatski</a>'.$medhjos.'  
<a lang="id" xml:lang="id" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Cid&amp;u='.$url.'" rel="nofollow">Bahasa Indonesia</a>'.$medhjos.'  
<a lang="is" xml:lang="is" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Cis&amp;u='.$url.'" rel="nofollow">Íslenska</a>'.$medhjos.'  
<a lang="it" xml:lang="it" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Cit&amp;u='.$url.'" rel="nofollow">Italiano</a>'.$medhjos.'  
<a lang="he" xml:lang="he" title="‘Ivrit" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Che&amp;u='.$url.'" rel="nofollow">עברית</a>'.$medhjos.'  
<a lang="lv" xml:lang="lv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Clv&amp;u='.$url.'" rel="nofollow">Latviešu</a>'.$medhjos.'  
<a lang="lt" xml:lang="lt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Clt&amp;u='.$url.'" rel="nofollow">Lietuvių</a>'.$medhjos.'  
<a lang="ko" xml:lang="ko" title="Hangugeo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Cko&amp;u='.$url.'" rel="nofollow">한국어</a>'.$medhjos.'  
<a lang="hu" xml:lang="hu" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Chu&amp;u='.$url.'" rel="nofollow">Magyar</a>'.$medhjos.'  
<a lang="mk" xml:lang="mk" title="Makedonski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Cmk&amp;u='.$url.'" rel="nofollow">Македонски</a>'.$medhjos.'  
<a lang="ml" xml:lang="ml" title="Malayalam" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Cml&amp;u='.$url.'" rel="nofollow">മലയാളം</a>'.$medhjos.'  
<a lang="mt" xml:lang="mt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Cmt&amp;u='.$url.'" rel="nofollow">Malti</a>'.$medhjos.'  
<a lang="nl" xml:lang="nl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Cnl&amp;u='.$url.'" rel="nofollow">Nederlands</a>'.$medhjos.'  
<a lang="ja" xml:lang="ja" title="Nihongo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Cja&amp;u='.$url.'" rel="nofollow">日本語</a>'.$medhjos.'  
<a lang="pl" xml:lang="pl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Cpl&amp;u='.$url.'" rel="nofollow">Polski</a>'.$medhjos.'  
<a lang="pt" xml:lang="pt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Cpt&amp;u='.$url.'" rel="nofollow">Português</a>'.$medhjos.'  
<a lang="ro" xml:lang="ro" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Cro&amp;u='.$url.'" rel="nofollow">Română</a>'.$medhjos.'  
<a lang="ru" xml:lang="ru" title="Russkij" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Cru&amp;u='.$url.'" rel="nofollow">Русский</a>'.$medhjos.'  
<a lang="sk" xml:lang="sk" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Csk&amp;u='.$url.'" rel="nofollow">Slovenčina</a>'.$medhjos.'  
<a lang="sl" xml:lang="sl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Csl&amp;u='.$url.'" rel="nofollow">Slovenščina</a>'.$medhjos.'  
<a lang="sq" xml:lang="sq" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Csq&amp;u='.$url.'" rel="nofollow">Shqip</a>'.$medhjos.'  
<a lang="sr" xml:lang="sr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Csr&amp;u='.$url.'" rel="nofollow">Srpski</a>'.$medhjos.'  
<a lang="fi" xml:lang="fi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Cfi&amp;u='.$url.'" rel="nofollow">Suomi</a>'.$medhjos.'  
<a lang="sv" xml:lang="sv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Csv&amp;u='.$url.'" rel="nofollow">Svenska</a>'.$medhjos.'  
<a lang="sw" xml:lang="sw" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Csw&amp;u='.$url.'" rel="nofollow">Kiswahili</a>'.$medhjos.'  
<a lang="th" xml:lang="th" title="Thai" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Cth&amp;u='.$url.'" rel="nofollow">ไทย</a>'.$medhjos.'  
<a lang="tl" xml:lang="tl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Ctl&amp;u='.$url.'" rel="nofollow">Tagalog</a>'.$medhjos.'  
<a lang="tr" xml:lang="tr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Ctr&amp;u='.$url.'" rel="nofollow">Türkçe</a>'.$medhjos.'  
<a lang="uk" xml:lang="uk" title="Ukraïns’ka" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Cuk&amp;u='.$url.'" rel="nofollow">Українська</a>'.$medhjos.'  
<a lang="vi" xml:lang="vi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Cvi&amp;u='.$url.'" rel="nofollow">Tiếng Việt</a>'.$medhjos.'  
<a lang="yi" xml:lang="yi" title="Yidiš" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Cyi&amp;u='.$url.'" rel="nofollow">ייִדיש</a>.'.$medhjos.'  
<a lang="zh-CN" xml:lang="zh-CN" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Czh-CN&amp;u='.$url.'" rel="nofollow">中文</a> /
<a lang="zh-TW" xml:lang="zh-TW" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=no%7Czh-TW&amp;u='.$url.'" rel="nofollow">漢語</a>';
		$polski = '<a lang="pl" xml:lang="pl" href="#">Polski</a>'.$medhjos.'
<a lang="en" xml:lang="en" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Cen&amp;u='.$url.'" rel="nofollow">English</a>'.$medhjos.'
<a lang="af" xml:lang="af" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Caf&amp;u='.$url.'" rel="nofollow">Afrikaans</a>'.$medhjos.'  
<a lang="ar" xml:lang="ar" title="Araby" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Car&amp;u='.$url.'" rel="nofollow">العربية</a>'.$medhjos.'  
<a lang="be" xml:lang="be" title="Belaruskaya" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Cbe&amp;u='.$url.'" rel="nofollow">Беларуская</a>'.$medhjos.'  
<a lang="bg" xml:lang="bg" title="Bulgarski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Cbg&amp;u='.$url.'" rel="nofollow">Български</a>'.$medhjos.'  
<a lang="ca" xml:lang="ca" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Cca&amp;u='.$url.'" rel="nofollow">Català</a>'.$medhjos.'  
<a lang="cs" xml:lang="cs" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Ccs&amp;u='.$url.'" rel="nofollow">Česky</a>'.$medhjos.'  
<a lang="cy" xml:lang="cy" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Ccy&amp;u='.$url.'" rel="nofollow">Cymraeg</a>'.$medhjos.'  
<a lang="da" xml:lang="da" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Cda&amp;u='.$url.'" rel="nofollow">Dansk</a>'.$medhjos.'  
<a lang="de" xml:lang="de" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Cde&amp;u='.$url.'" rel="nofollow">Deutsch</a>'.$medhjos.'  
<a lang="et" xml:lang="et" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Cet&amp;u='.$url.'" rel="nofollow">Eesti</a>'.$medhjos.'  
<a lang="el" xml:lang="el" title="Ellenika" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Cel&amp;u='.$url.'" rel="nofollow">Ελληνικά</a>'.$medhjos.'  
<a lang="es" xml:lang="es" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Ces&amp;u='.$url.'" rel="nofollow">Español</a>'.$medhjos.'  
<a lang="fa" xml:lang="fa" title="Fārsī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Cfa&amp;u='.$url.'" rel="nofollow">فارسی</a>'.$medhjos.'  
<a lang="fr" xml:lang="fr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Cfr&amp;u='.$url.'" rel="nofollow">Français</a>'.$medhjos.'  
<a lang="ga" xml:lang="ga" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Cga&amp;u='.$url.'" rel="nofollow">Gaeilge</a>'.$medhjos.'  
<a lang="gl" xml:lang="gl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Cgl&amp;u='.$url.'" rel="nofollow">Galego</a>'.$medhjos.'  
<a lang="hi" xml:lang="hi" title="Hindī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Chi&amp;u='.$url.'" rel="nofollow">हिन्दी</a>'.$medhjos.'  
<a lang="hr" xml:lang="hr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Chr&amp;u='.$url.'" rel="nofollow">Hrvatski</a>'.$medhjos.'  
<a lang="id" xml:lang="id" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Cid&amp;u='.$url.'" rel="nofollow">Bahasa Indonesia</a>'.$medhjos.'  
<a lang="is" xml:lang="is" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Cis&amp;u='.$url.'" rel="nofollow">Íslenska</a>'.$medhjos.'  
<a lang="it" xml:lang="it" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Cit&amp;u='.$url.'" rel="nofollow">Italiano</a>'.$medhjos.'  
<a lang="he" xml:lang="he" title="‘Ivrit" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Che&amp;u='.$url.'" rel="nofollow">עברית</a>'.$medhjos.'  
<a lang="lv" xml:lang="lv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Clv&amp;u='.$url.'" rel="nofollow">Latviešu</a>'.$medhjos.'  
<a lang="lt" xml:lang="lt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Clt&amp;u='.$url.'" rel="nofollow">Lietuvių</a>'.$medhjos.'  
<a lang="ko" xml:lang="ko" title="Hangugeo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Cko&amp;u='.$url.'" rel="nofollow">한국어</a>'.$medhjos.'  
<a lang="hu" xml:lang="hu" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Chu&amp;u='.$url.'" rel="nofollow">Magyar</a>'.$medhjos.'  
<a lang="mk" xml:lang="mk" title="Makedonski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Cmk&amp;u='.$url.'" rel="nofollow">Македонски</a>'.$medhjos.'  
<a lang="ml" xml:lang="ml" title="Malayalam" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Cml&amp;u='.$url.'" rel="nofollow">മലയാളം</a>'.$medhjos.'  
<a lang="mt" xml:lang="mt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Cmt&amp;u='.$url.'" rel="nofollow">Malti</a>'.$medhjos.'  
<a lang="nl" xml:lang="nl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Cnl&amp;u='.$url.'" rel="nofollow">Nederlands</a>'.$medhjos.'  
<a lang="ja" xml:lang="ja" title="Nihongo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Cja&amp;u='.$url.'" rel="nofollow">日本語</a>'.$medhjos.'  
<a lang="no" xml:lang="no" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Cno&amp;u='.$url.'" rel="nofollow">Norsk (Bokmål)</a>'.$medhjos.'  
<a lang="pt" xml:lang="pt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Cpt&amp;u='.$url.'" rel="nofollow">Português</a>'.$medhjos.'  
<a lang="ro" xml:lang="ro" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Cro&amp;u='.$url.'" rel="nofollow">Română</a>'.$medhjos.'  
<a lang="ru" xml:lang="ru" title="Russkij" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Cru&amp;u='.$url.'" rel="nofollow">Русский</a>'.$medhjos.'  
<a lang="sk" xml:lang="sk" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Csk&amp;u='.$url.'" rel="nofollow">Slovenčina</a>'.$medhjos.'  
<a lang="sl" xml:lang="sl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Csl&amp;u='.$url.'" rel="nofollow">Slovenščina</a>'.$medhjos.'  
<a lang="sq" xml:lang="sq" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Csq&amp;u='.$url.'" rel="nofollow">Shqip</a>'.$medhjos.'  
<a lang="sr" xml:lang="sr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Csr&amp;u='.$url.'" rel="nofollow">Srpski</a>'.$medhjos.'  
<a lang="fi" xml:lang="fi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Cfi&amp;u='.$url.'" rel="nofollow">Suomi</a>'.$medhjos.'  
<a lang="sv" xml:lang="sv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Csv&amp;u='.$url.'" rel="nofollow">Svenska</a>'.$medhjos.'  
<a lang="sw" xml:lang="sw" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Csw&amp;u='.$url.'" rel="nofollow">Kiswahili</a>'.$medhjos.'  
<a lang="th" xml:lang="th" title="Thai" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Cth&amp;u='.$url.'" rel="nofollow">ไทย</a>'.$medhjos.'  
<a lang="tl" xml:lang="tl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Ctl&amp;u='.$url.'" rel="nofollow">Tagalog</a>'.$medhjos.'  
<a lang="tr" xml:lang="tr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Ctr&amp;u='.$url.'" rel="nofollow">Türkçe</a>'.$medhjos.'  
<a lang="uk" xml:lang="uk" title="Ukraïns’ka" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Cuk&amp;u='.$url.'" rel="nofollow">Українська</a>'.$medhjos.'  
<a lang="vi" xml:lang="vi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Cvi&amp;u='.$url.'" rel="nofollow">Tiếng Việt</a>'.$medhjos.'  
<a lang="yi" xml:lang="yi" title="Yidiš" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Cyi&amp;u='.$url.'" rel="nofollow">ייִדיש</a>.'.$medhjos.'  
<a lang="zh-CN" xml:lang="zh-CN" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Czh-CN&amp;u='.$url.'" rel="nofollow">中文</a> /
<a lang="zh-TW" xml:lang="zh-TW" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pl%7Czh-TW&amp;u='.$url.'" rel="nofollow">漢語</a>';
		$portugues = '<a lang="pt" xml:lang="pt" href="#">Português</a>'.$medhjos.'
<a lang="en" xml:lang="en" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Cen&amp;u='.$url.'" rel="nofollow">English</a>'.$medhjos.'
<a lang="af" xml:lang="af" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Caf&amp;u='.$url.'" rel="nofollow">Afrikaans</a>'.$medhjos.'  
<a lang="ar" xml:lang="ar" title="Araby" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Car&amp;u='.$url.'" rel="nofollow">العربية</a>'.$medhjos.'  
<a lang="be" xml:lang="be" title="Belaruskaya" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Cbe&amp;u='.$url.'" rel="nofollow">Беларуская</a>'.$medhjos.'  
<a lang="bg" xml:lang="bg" title="Bulgarski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Cbg&amp;u='.$url.'" rel="nofollow">Български</a>'.$medhjos.'  
<a lang="ca" xml:lang="ca" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Cca&amp;u='.$url.'" rel="nofollow">Català</a>'.$medhjos.'  
<a lang="cs" xml:lang="cs" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Ccs&amp;u='.$url.'" rel="nofollow">Česky</a>'.$medhjos.'  
<a lang="cy" xml:lang="cy" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Ccy&amp;u='.$url.'" rel="nofollow">Cymraeg</a>'.$medhjos.'  
<a lang="da" xml:lang="da" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Cda&amp;u='.$url.'" rel="nofollow">Dansk</a>'.$medhjos.'  
<a lang="de" xml:lang="de" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Cde&amp;u='.$url.'" rel="nofollow">Deutsch</a>'.$medhjos.'  
<a lang="et" xml:lang="et" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Cet&amp;u='.$url.'" rel="nofollow">Eesti</a>'.$medhjos.'  
<a lang="el" xml:lang="el" title="Ellenika" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Cel&amp;u='.$url.'" rel="nofollow">Ελληνικά</a>'.$medhjos.'  
<a lang="es" xml:lang="es" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Ces&amp;u='.$url.'" rel="nofollow">Español</a>'.$medhjos.'  
<a lang="fa" xml:lang="fa" title="Fārsī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Cfa&amp;u='.$url.'" rel="nofollow">فارسی</a>'.$medhjos.'  
<a lang="fr" xml:lang="fr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Cfr&amp;u='.$url.'" rel="nofollow">Français</a>'.$medhjos.'  
<a lang="ga" xml:lang="ga" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Cga&amp;u='.$url.'" rel="nofollow">Gaeilge</a>'.$medhjos.'  
<a lang="gl" xml:lang="gl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Cgl&amp;u='.$url.'" rel="nofollow">Galego</a>'.$medhjos.'  
<a lang="hi" xml:lang="hi" title="Hindī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Chi&amp;u='.$url.'" rel="nofollow">हिन्दी</a>'.$medhjos.'  
<a lang="hr" xml:lang="hr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Chr&amp;u='.$url.'" rel="nofollow">Hrvatski</a>'.$medhjos.'  
<a lang="id" xml:lang="id" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Cid&amp;u='.$url.'" rel="nofollow">Bahasa Indonesia</a>'.$medhjos.'  
<a lang="is" xml:lang="is" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Cis&amp;u='.$url.'" rel="nofollow">Íslenska</a>'.$medhjos.'  
<a lang="it" xml:lang="it" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Cit&amp;u='.$url.'" rel="nofollow">Italiano</a>'.$medhjos.'  
<a lang="he" xml:lang="he" title="‘Ivrit" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Che&amp;u='.$url.'" rel="nofollow">עברית</a>'.$medhjos.'  
<a lang="lv" xml:lang="lv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Clv&amp;u='.$url.'" rel="nofollow">Latviešu</a>'.$medhjos.'  
<a lang="lt" xml:lang="lt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Clt&amp;u='.$url.'" rel="nofollow">Lietuvių</a>'.$medhjos.'  
<a lang="ko" xml:lang="ko" title="Hangugeo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Cko&amp;u='.$url.'" rel="nofollow">한국어</a>'.$medhjos.'  
<a lang="hu" xml:lang="hu" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Chu&amp;u='.$url.'" rel="nofollow">Magyar</a>'.$medhjos.'  
<a lang="mk" xml:lang="mk" title="Makedonski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Cmk&amp;u='.$url.'" rel="nofollow">Македонски</a>'.$medhjos.'  
<a lang="ml" xml:lang="ml" title="Malayalam" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Cml&amp;u='.$url.'" rel="nofollow">മലയാളം</a>'.$medhjos.'  
<a lang="mt" xml:lang="mt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Cmt&amp;u='.$url.'" rel="nofollow">Malti</a>'.$medhjos.'  
<a lang="nl" xml:lang="nl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Cnl&amp;u='.$url.'" rel="nofollow">Nederlands</a>'.$medhjos.'  
<a lang="ja" xml:lang="ja" title="Nihongo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Cja&amp;u='.$url.'" rel="nofollow">日本語</a>'.$medhjos.'  
<a lang="no" xml:lang="no" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Cno&amp;u='.$url.'" rel="nofollow">Norsk (Bokmål)</a>'.$medhjos.'  
<a lang="pl" xml:lang="pl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Cpl&amp;u='.$url.'" rel="nofollow">Polski</a>'.$medhjos.'  
<a lang="ro" xml:lang="ro" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Cro&amp;u='.$url.'" rel="nofollow">Română</a>'.$medhjos.'  
<a lang="ru" xml:lang="ru" title="Russkij" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Cru&amp;u='.$url.'" rel="nofollow">Русский</a>'.$medhjos.'  
<a lang="sk" xml:lang="sk" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Csk&amp;u='.$url.'" rel="nofollow">Slovenčina</a>'.$medhjos.'  
<a lang="sl" xml:lang="sl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Csl&amp;u='.$url.'" rel="nofollow">Slovenščina</a>'.$medhjos.'  
<a lang="sq" xml:lang="sq" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Csq&amp;u='.$url.'" rel="nofollow">Shqip</a>'.$medhjos.'  
<a lang="sr" xml:lang="sr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Csr&amp;u='.$url.'" rel="nofollow">Srpski</a>'.$medhjos.'  
<a lang="fi" xml:lang="fi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Cfi&amp;u='.$url.'" rel="nofollow">Suomi</a>'.$medhjos.'  
<a lang="sv" xml:lang="sv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Csv&amp;u='.$url.'" rel="nofollow">Svenska</a>'.$medhjos.'  
<a lang="sw" xml:lang="sw" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Csw&amp;u='.$url.'" rel="nofollow">Kiswahili</a>'.$medhjos.'  
<a lang="th" xml:lang="th" title="Thai" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Cth&amp;u='.$url.'" rel="nofollow">ไทย</a>'.$medhjos.'  
<a lang="tl" xml:lang="tl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Ctl&amp;u='.$url.'" rel="nofollow">Tagalog</a>'.$medhjos.'  
<a lang="tr" xml:lang="tr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Ctr&amp;u='.$url.'" rel="nofollow">Türkçe</a>'.$medhjos.'  
<a lang="uk" xml:lang="uk" title="Ukraïns’ka" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Cuk&amp;u='.$url.'" rel="nofollow">Українська</a>'.$medhjos.'  
<a lang="vi" xml:lang="vi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Cvi&amp;u='.$url.'" rel="nofollow">Tiếng Việt</a>'.$medhjos.'  
<a lang="yi" xml:lang="yi" title="Yidiš" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Cyi&amp;u='.$url.'" rel="nofollow">ייִדיש</a>.'.$medhjos.'  
<a lang="zh-CN" xml:lang="zh-CN" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Czh-CN&amp;u='.$url.'" rel="nofollow">中文</a> /
<a lang="zh-TW" xml:lang="zh-TW" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=pt%7Czh-TW&amp;u='.$url.'" rel="nofollow">漢語</a>';
		$romana = '<a lang="ro" xml:lang="ro" href="#">Română</a>'.$medhjos.'
<a lang="en" xml:lang="en" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Cen&amp;u='.$url.'" rel="nofollow">English</a>'.$medhjos.'
<a lang="af" xml:lang="af" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Caf&amp;u='.$url.'" rel="nofollow">Afrikaans</a>'.$medhjos.'  
<a lang="ar" xml:lang="ar" title="Araby" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Car&amp;u='.$url.'" rel="nofollow">العربية</a>'.$medhjos.'  
<a lang="be" xml:lang="be" title="Belaruskaya" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Cbe&amp;u='.$url.'" rel="nofollow">Беларуская</a>'.$medhjos.'  
<a lang="bg" xml:lang="bg" title="Bulgarski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Cbg&amp;u='.$url.'" rel="nofollow">Български</a>'.$medhjos.'  
<a lang="ca" xml:lang="ca" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Cca&amp;u='.$url.'" rel="nofollow">Català</a>'.$medhjos.'  
<a lang="cs" xml:lang="cs" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Ccs&amp;u='.$url.'" rel="nofollow">Česky</a>'.$medhjos.'  
<a lang="cy" xml:lang="cy" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Ccy&amp;u='.$url.'" rel="nofollow">Cymraeg</a>'.$medhjos.'  
<a lang="da" xml:lang="da" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Cda&amp;u='.$url.'" rel="nofollow">Dansk</a>'.$medhjos.'  
<a lang="de" xml:lang="de" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Cde&amp;u='.$url.'" rel="nofollow">Deutsch</a>'.$medhjos.'  
<a lang="et" xml:lang="et" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Cet&amp;u='.$url.'" rel="nofollow">Eesti</a>'.$medhjos.'  
<a lang="el" xml:lang="el" title="Ellenika" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Cel&amp;u='.$url.'" rel="nofollow">Ελληνικά</a>'.$medhjos.'  
<a lang="es" xml:lang="es" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Ces&amp;u='.$url.'" rel="nofollow">Español</a>'.$medhjos.'  
<a lang="fa" xml:lang="fa" title="Fārsī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Cfa&amp;u='.$url.'" rel="nofollow">فارسی</a>'.$medhjos.'  
<a lang="fr" xml:lang="fr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Cfr&amp;u='.$url.'" rel="nofollow">Français</a>'.$medhjos.'  
<a lang="ga" xml:lang="ga" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Cga&amp;u='.$url.'" rel="nofollow">Gaeilge</a>'.$medhjos.'  
<a lang="gl" xml:lang="gl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Cgl&amp;u='.$url.'" rel="nofollow">Galego</a>'.$medhjos.'  
<a lang="hi" xml:lang="hi" title="Hindī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Chi&amp;u='.$url.'" rel="nofollow">हिन्दी</a>'.$medhjos.'  
<a lang="hr" xml:lang="hr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Chr&amp;u='.$url.'" rel="nofollow">Hrvatski</a>'.$medhjos.'  
<a lang="id" xml:lang="id" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Cid&amp;u='.$url.'" rel="nofollow">Bahasa Indonesia</a>'.$medhjos.'  
<a lang="is" xml:lang="is" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Cis&amp;u='.$url.'" rel="nofollow">Íslenska</a>'.$medhjos.'  
<a lang="it" xml:lang="it" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Cit&amp;u='.$url.'" rel="nofollow">Italiano</a>'.$medhjos.'  
<a lang="he" xml:lang="he" title="‘Ivrit" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Che&amp;u='.$url.'" rel="nofollow">עברית</a>'.$medhjos.'  
<a lang="lv" xml:lang="lv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Clv&amp;u='.$url.'" rel="nofollow">Latviešu</a>'.$medhjos.'  
<a lang="lt" xml:lang="lt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Clt&amp;u='.$url.'" rel="nofollow">Lietuvių</a>'.$medhjos.'  
<a lang="ko" xml:lang="ko" title="Hangugeo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Cko&amp;u='.$url.'" rel="nofollow">한국어</a>'.$medhjos.'  
<a lang="hu" xml:lang="hu" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Chu&amp;u='.$url.'" rel="nofollow">Magyar</a>'.$medhjos.'  
<a lang="mk" xml:lang="mk" title="Makedonski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Cmk&amp;u='.$url.'" rel="nofollow">Македонски</a>'.$medhjos.'  
<a lang="ml" xml:lang="ml" title="Malayalam" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Cml&amp;u='.$url.'" rel="nofollow">മലയാളം</a>'.$medhjos.'  
<a lang="mt" xml:lang="mt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Cmt&amp;u='.$url.'" rel="nofollow">Malti</a>'.$medhjos.'  
<a lang="nl" xml:lang="nl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Cnl&amp;u='.$url.'" rel="nofollow">Nederlands</a>'.$medhjos.'  
<a lang="ja" xml:lang="ja" title="Nihongo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Cja&amp;u='.$url.'" rel="nofollow">日本語</a>'.$medhjos.'  
<a lang="no" xml:lang="no" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Cno&amp;u='.$url.'" rel="nofollow">Norsk (Bokmål)</a>'.$medhjos.'  
<a lang="pl" xml:lang="pl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Cpl&amp;u='.$url.'" rel="nofollow">Polski</a>'.$medhjos.'  
<a lang="pt" xml:lang="pt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Cpt&amp;u='.$url.'" rel="nofollow">Português</a>'.$medhjos.'  
<a lang="ru" xml:lang="ru" title="Russkij" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Cru&amp;u='.$url.'" rel="nofollow">Русский</a>'.$medhjos.'  
<a lang="sk" xml:lang="sk" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Csk&amp;u='.$url.'" rel="nofollow">Slovenčina</a>'.$medhjos.'  
<a lang="sl" xml:lang="sl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Csl&amp;u='.$url.'" rel="nofollow">Slovenščina</a>'.$medhjos.'  
<a lang="sq" xml:lang="sq" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Csq&amp;u='.$url.'" rel="nofollow">Shqip</a>'.$medhjos.'  
<a lang="sr" xml:lang="sr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Csr&amp;u='.$url.'" rel="nofollow">Srpski</a>'.$medhjos.'  
<a lang="fi" xml:lang="fi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Cfi&amp;u='.$url.'" rel="nofollow">Suomi</a>'.$medhjos.'  
<a lang="sv" xml:lang="sv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Csv&amp;u='.$url.'" rel="nofollow">Svenska</a>'.$medhjos.'  
<a lang="sw" xml:lang="sw" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Csw&amp;u='.$url.'" rel="nofollow">Kiswahili</a>'.$medhjos.'  
<a lang="th" xml:lang="th" title="Thai" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Cth&amp;u='.$url.'" rel="nofollow">ไทย</a>'.$medhjos.'  
<a lang="tl" xml:lang="tl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Ctl&amp;u='.$url.'" rel="nofollow">Tagalog</a>'.$medhjos.'  
<a lang="tr" xml:lang="tr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Ctr&amp;u='.$url.'" rel="nofollow">Türkçe</a>'.$medhjos.'  
<a lang="uk" xml:lang="uk" title="Ukraïns’ka" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Cuk&amp;u='.$url.'" rel="nofollow">Українська</a>'.$medhjos.'  
<a lang="vi" xml:lang="vi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Cvi&amp;u='.$url.'" rel="nofollow">Tiếng Việt</a>'.$medhjos.'  
<a lang="yi" xml:lang="yi" title="Yidiš" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Cyi&amp;u='.$url.'" rel="nofollow">ייִדיש</a>.'.$medhjos.'  
<a lang="zh-CN" xml:lang="zh-CN" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Czh-CN&amp;u='.$url.'" rel="nofollow">中文</a> /
<a lang="zh-TW" xml:lang="zh-TW" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ro%7Czh-TW&amp;u='.$url.'" rel="nofollow">漢語</a>';
		$russkij = '<a lang="ru" xml:lang="ru" href="#">Русский</a>'.$medhjos.'
<a lang="en" xml:lang="en" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Cen&amp;u='.$url.'" rel="nofollow">English</a>'.$medhjos.'
<a lang="af" xml:lang="af" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Caf&amp;u='.$url.'" rel="nofollow">Afrikaans</a>'.$medhjos.'  
<a lang="ar" xml:lang="ar" title="Araby" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Car&amp;u='.$url.'" rel="nofollow">العربية</a>'.$medhjos.'  
<a lang="be" xml:lang="be" title="Belaruskaya" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Cbe&amp;u='.$url.'" rel="nofollow">Беларуская</a>'.$medhjos.'  
<a lang="bg" xml:lang="bg" title="Bulgarski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Cbg&amp;u='.$url.'" rel="nofollow">Български</a>'.$medhjos.'  
<a lang="ca" xml:lang="ca" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Cca&amp;u='.$url.'" rel="nofollow">Català</a>'.$medhjos.'  
<a lang="cs" xml:lang="cs" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Ccs&amp;u='.$url.'" rel="nofollow">Česky</a>'.$medhjos.'  
<a lang="cy" xml:lang="cy" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Ccy&amp;u='.$url.'" rel="nofollow">Cymraeg</a>'.$medhjos.'  
<a lang="da" xml:lang="da" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Cda&amp;u='.$url.'" rel="nofollow">Dansk</a>'.$medhjos.'  
<a lang="de" xml:lang="de" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Cde&amp;u='.$url.'" rel="nofollow">Deutsch</a>'.$medhjos.'  
<a lang="et" xml:lang="et" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Cet&amp;u='.$url.'" rel="nofollow">Eesti</a>'.$medhjos.'  
<a lang="el" xml:lang="el" title="Ellenika" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Cel&amp;u='.$url.'" rel="nofollow">Ελληνικά</a>'.$medhjos.'  
<a lang="es" xml:lang="es" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Ces&amp;u='.$url.'" rel="nofollow">Español</a>'.$medhjos.'  
<a lang="fa" xml:lang="fa" title="Fārsī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Cfa&amp;u='.$url.'" rel="nofollow">فارسی</a>'.$medhjos.'  
<a lang="fr" xml:lang="fr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Cfr&amp;u='.$url.'" rel="nofollow">Français</a>'.$medhjos.'  
<a lang="ga" xml:lang="ga" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Cga&amp;u='.$url.'" rel="nofollow">Gaeilge</a>'.$medhjos.'  
<a lang="gl" xml:lang="gl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Cgl&amp;u='.$url.'" rel="nofollow">Galego</a>'.$medhjos.'  
<a lang="hi" xml:lang="hi" title="Hindī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Chi&amp;u='.$url.'" rel="nofollow">हिन्दी</a>'.$medhjos.'  
<a lang="hr" xml:lang="hr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Chr&amp;u='.$url.'" rel="nofollow">Hrvatski</a>'.$medhjos.'  
<a lang="id" xml:lang="id" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Cid&amp;u='.$url.'" rel="nofollow">Bahasa Indonesia</a>'.$medhjos.'  
<a lang="is" xml:lang="is" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Cis&amp;u='.$url.'" rel="nofollow">Íslenska</a>'.$medhjos.'  
<a lang="it" xml:lang="it" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Cit&amp;u='.$url.'" rel="nofollow">Italiano</a>'.$medhjos.'  
<a lang="he" xml:lang="he" title="‘Ivrit" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Che&amp;u='.$url.'" rel="nofollow">עברית</a>'.$medhjos.'  
<a lang="lv" xml:lang="lv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Clv&amp;u='.$url.'" rel="nofollow">Latviešu</a>'.$medhjos.'  
<a lang="lt" xml:lang="lt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Clt&amp;u='.$url.'" rel="nofollow">Lietuvių</a>'.$medhjos.'  
<a lang="ko" xml:lang="ko" title="Hangugeo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Cko&amp;u='.$url.'" rel="nofollow">한국어</a>'.$medhjos.'  
<a lang="hu" xml:lang="hu" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Chu&amp;u='.$url.'" rel="nofollow">Magyar</a>'.$medhjos.'  
<a lang="mk" xml:lang="mk" title="Makedonski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Cmk&amp;u='.$url.'" rel="nofollow">Македонски</a>'.$medhjos.'  
<a lang="ml" xml:lang="ml" title="Malayalam" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Cml&amp;u='.$url.'" rel="nofollow">മലയാളം</a>'.$medhjos.'  
<a lang="mt" xml:lang="mt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Cmt&amp;u='.$url.'" rel="nofollow">Malti</a>'.$medhjos.'  
<a lang="nl" xml:lang="nl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Cnl&amp;u='.$url.'" rel="nofollow">Nederlands</a>'.$medhjos.'  
<a lang="ja" xml:lang="ja" title="Nihongo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Cja&amp;u='.$url.'" rel="nofollow">日本語</a>'.$medhjos.'  
<a lang="no" xml:lang="no" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Cno&amp;u='.$url.'" rel="nofollow">Norsk (Bokmål)</a>'.$medhjos.'  
<a lang="pl" xml:lang="pl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Cpl&amp;u='.$url.'" rel="nofollow">Polski</a>'.$medhjos.'  
<a lang="pt" xml:lang="pt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Cpt&amp;u='.$url.'" rel="nofollow">Português</a>'.$medhjos.'  
<a lang="ro" xml:lang="ro" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Cro&amp;u='.$url.'" rel="nofollow">Română</a>'.$medhjos.'  
<a lang="sk" xml:lang="sk" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Csk&amp;u='.$url.'" rel="nofollow">Slovenčina</a>'.$medhjos.'  
<a lang="sl" xml:lang="sl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Csl&amp;u='.$url.'" rel="nofollow">Slovenščina</a>'.$medhjos.'  
<a lang="sq" xml:lang="sq" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Csq&amp;u='.$url.'" rel="nofollow">Shqip</a>'.$medhjos.'  
<a lang="sr" xml:lang="sr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Csr&amp;u='.$url.'" rel="nofollow">Srpski</a>'.$medhjos.'  
<a lang="fi" xml:lang="fi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Cfi&amp;u='.$url.'" rel="nofollow">Suomi</a>'.$medhjos.'  
<a lang="sv" xml:lang="sv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Csv&amp;u='.$url.'" rel="nofollow">Svenska</a>'.$medhjos.'  
<a lang="sw" xml:lang="sw" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Csw&amp;u='.$url.'" rel="nofollow">Kiswahili</a>'.$medhjos.'  
<a lang="th" xml:lang="th" title="Thai" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Cth&amp;u='.$url.'" rel="nofollow">ไทย</a>'.$medhjos.'  
<a lang="tl" xml:lang="tl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Ctl&amp;u='.$url.'" rel="nofollow">Tagalog</a>'.$medhjos.'  
<a lang="tr" xml:lang="tr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Ctr&amp;u='.$url.'" rel="nofollow">Türkçe</a>'.$medhjos.'  
<a lang="uk" xml:lang="uk" title="Ukraïns’ka" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Cuk&amp;u='.$url.'" rel="nofollow">Українська</a>'.$medhjos.'  
<a lang="vi" xml:lang="vi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Cvi&amp;u='.$url.'" rel="nofollow">Tiếng Việt</a>'.$medhjos.'  
<a lang="yi" xml:lang="yi" title="Yidiš" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Cyi&amp;u='.$url.'" rel="nofollow">ייִדיש</a>.'.$medhjos.'  
<a lang="zh-CN" xml:lang="zh-CN" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Czh-CN&amp;u='.$url.'" rel="nofollow">中文</a> /
<a lang="zh-TW" xml:lang="zh-TW" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=ru%7Czh-TW&amp;u='.$url.'" rel="nofollow">漢語</a>';
		$slovencina = '<a lang="sk" xml:lang="sk" href="#">Slovenčina</a>'.$medhjos.'
<a lang="en" xml:lang="en" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Cen&amp;u='.$url.'" rel="nofollow">English</a>'.$medhjos.'
<a lang="af" xml:lang="af" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Caf&amp;u='.$url.'" rel="nofollow">Afrikaans</a>'.$medhjos.'  
<a lang="ar" xml:lang="ar" title="Araby" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Car&amp;u='.$url.'" rel="nofollow">العربية</a>'.$medhjos.'  
<a lang="be" xml:lang="be" title="Belaruskaya" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Cbe&amp;u='.$url.'" rel="nofollow">Беларуская</a>'.$medhjos.'  
<a lang="bg" xml:lang="bg" title="Bulgarski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Cbg&amp;u='.$url.'" rel="nofollow">Български</a>'.$medhjos.'  
<a lang="ca" xml:lang="ca" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Cca&amp;u='.$url.'" rel="nofollow">Català</a>'.$medhjos.'  
<a lang="cs" xml:lang="cs" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Ccs&amp;u='.$url.'" rel="nofollow">Česky</a>'.$medhjos.'  
<a lang="cy" xml:lang="cy" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Ccy&amp;u='.$url.'" rel="nofollow">Cymraeg</a>'.$medhjos.'  
<a lang="da" xml:lang="da" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Cda&amp;u='.$url.'" rel="nofollow">Dansk</a>'.$medhjos.'  
<a lang="de" xml:lang="de" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Cde&amp;u='.$url.'" rel="nofollow">Deutsch</a>'.$medhjos.'  
<a lang="et" xml:lang="et" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Cet&amp;u='.$url.'" rel="nofollow">Eesti</a>'.$medhjos.'  
<a lang="el" xml:lang="el" title="Ellenika" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Cel&amp;u='.$url.'" rel="nofollow">Ελληνικά</a>'.$medhjos.'  
<a lang="es" xml:lang="es" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Ces&amp;u='.$url.'" rel="nofollow">Español</a>'.$medhjos.'  
<a lang="fa" xml:lang="fa" title="Fārsī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Cfa&amp;u='.$url.'" rel="nofollow">فارسی</a>'.$medhjos.'  
<a lang="fr" xml:lang="fr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Cfr&amp;u='.$url.'" rel="nofollow">Français</a>'.$medhjos.'  
<a lang="ga" xml:lang="ga" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Cga&amp;u='.$url.'" rel="nofollow">Gaeilge</a>'.$medhjos.'  
<a lang="gl" xml:lang="gl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Cgl&amp;u='.$url.'" rel="nofollow">Galego</a>'.$medhjos.'  
<a lang="hi" xml:lang="hi" title="Hindī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Chi&amp;u='.$url.'" rel="nofollow">हिन्दी</a>'.$medhjos.'  
<a lang="hr" xml:lang="hr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Chr&amp;u='.$url.'" rel="nofollow">Hrvatski</a>'.$medhjos.'  
<a lang="id" xml:lang="id" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Cid&amp;u='.$url.'" rel="nofollow">Bahasa Indonesia</a>'.$medhjos.'  
<a lang="is" xml:lang="is" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Cis&amp;u='.$url.'" rel="nofollow">Íslenska</a>'.$medhjos.'  
<a lang="it" xml:lang="it" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Cit&amp;u='.$url.'" rel="nofollow">Italiano</a>'.$medhjos.'  
<a lang="he" xml:lang="he" title="‘Ivrit" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Che&amp;u='.$url.'" rel="nofollow">עברית</a>'.$medhjos.'  
<a lang="lv" xml:lang="lv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Clv&amp;u='.$url.'" rel="nofollow">Latviešu</a>'.$medhjos.'  
<a lang="lt" xml:lang="lt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Clt&amp;u='.$url.'" rel="nofollow">Lietuvių</a>'.$medhjos.'  
<a lang="ko" xml:lang="ko" title="Hangugeo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Cko&amp;u='.$url.'" rel="nofollow">한국어</a>'.$medhjos.'  
<a lang="hu" xml:lang="hu" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Chu&amp;u='.$url.'" rel="nofollow">Magyar</a>'.$medhjos.'  
<a lang="mk" xml:lang="mk" title="Makedonski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Cmk&amp;u='.$url.'" rel="nofollow">Македонски</a>'.$medhjos.'  
<a lang="ml" xml:lang="ml" title="Malayalam" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Cml&amp;u='.$url.'" rel="nofollow">മലയാളം</a>'.$medhjos.'  
<a lang="mt" xml:lang="mt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Cmt&amp;u='.$url.'" rel="nofollow">Malti</a>'.$medhjos.'  
<a lang="nl" xml:lang="nl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Cnl&amp;u='.$url.'" rel="nofollow">Nederlands</a>'.$medhjos.'  
<a lang="ja" xml:lang="ja" title="Nihongo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Cja&amp;u='.$url.'" rel="nofollow">日本語</a>'.$medhjos.'  
<a lang="no" xml:lang="no" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Cno&amp;u='.$url.'" rel="nofollow">Norsk (Bokmål)</a>'.$medhjos.'  
<a lang="pl" xml:lang="pl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Cpl&amp;u='.$url.'" rel="nofollow">Polski</a>'.$medhjos.'  
<a lang="pt" xml:lang="pt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Cpt&amp;u='.$url.'" rel="nofollow">Português</a>'.$medhjos.'  
<a lang="ro" xml:lang="ro" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Cro&amp;u='.$url.'" rel="nofollow">Română</a>'.$medhjos.'  
<a lang="ru" xml:lang="ru" title="Russkij" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Cru&amp;u='.$url.'" rel="nofollow">Русский</a>'.$medhjos.'  
<a lang="sl" xml:lang="sl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Csl&amp;u='.$url.'" rel="nofollow">Slovenščina</a>'.$medhjos.'  
<a lang="sq" xml:lang="sq" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Csq&amp;u='.$url.'" rel="nofollow">Shqip</a>'.$medhjos.'  
<a lang="sr" xml:lang="sr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Csr&amp;u='.$url.'" rel="nofollow">Srpski</a>'.$medhjos.'  
<a lang="fi" xml:lang="fi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Cfi&amp;u='.$url.'" rel="nofollow">Suomi</a>'.$medhjos.'  
<a lang="sv" xml:lang="sv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Csv&amp;u='.$url.'" rel="nofollow">Svenska</a>'.$medhjos.'  
<a lang="sw" xml:lang="sw" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Csw&amp;u='.$url.'" rel="nofollow">Kiswahili</a>'.$medhjos.'  
<a lang="th" xml:lang="th" title="Thai" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Cth&amp;u='.$url.'" rel="nofollow">ไทย</a>'.$medhjos.'  
<a lang="tl" xml:lang="tl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Ctl&amp;u='.$url.'" rel="nofollow">Tagalog</a>'.$medhjos.'  
<a lang="tr" xml:lang="tr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Ctr&amp;u='.$url.'" rel="nofollow">Türkçe</a>'.$medhjos.'  
<a lang="uk" xml:lang="uk" title="Ukraïns’ka" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Cuk&amp;u='.$url.'" rel="nofollow">Українська</a>'.$medhjos.'  
<a lang="vi" xml:lang="vi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Cvi&amp;u='.$url.'" rel="nofollow">Tiếng Việt</a>'.$medhjos.'  
<a lang="yi" xml:lang="yi" title="Yidiš" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Cyi&amp;u='.$url.'" rel="nofollow">ייִדיש</a>.'.$medhjos.'  
<a lang="zh-CN" xml:lang="zh-CN" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Czh-CN&amp;u='.$url.'" rel="nofollow">中文</a> /
<a lang="zh-TW" xml:lang="zh-TW" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sk%7Czh-TW&amp;u='.$url.'" rel="nofollow">漢語</a>';
		$slovenscina = '<a lang="sl" xml:lang="sl" href="#">Slovenščina</a>'.$medhjos.'
<a lang="en" xml:lang="en" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Cen&amp;u='.$url.'" rel="nofollow">English</a>'.$medhjos.'
<a lang="af" xml:lang="af" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Caf&amp;u='.$url.'" rel="nofollow">Afrikaans</a>'.$medhjos.'  
<a lang="ar" xml:lang="ar" title="Araby" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Car&amp;u='.$url.'" rel="nofollow">العربية</a>'.$medhjos.'  
<a lang="be" xml:lang="be" title="Belaruskaya" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Cbe&amp;u='.$url.'" rel="nofollow">Беларуская</a>'.$medhjos.'  
<a lang="bg" xml:lang="bg" title="Bulgarski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Cbg&amp;u='.$url.'" rel="nofollow">Български</a>'.$medhjos.'  
<a lang="ca" xml:lang="ca" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Cca&amp;u='.$url.'" rel="nofollow">Català</a>'.$medhjos.'  
<a lang="cs" xml:lang="cs" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Ccs&amp;u='.$url.'" rel="nofollow">Česky</a>'.$medhjos.'  
<a lang="cy" xml:lang="cy" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Ccy&amp;u='.$url.'" rel="nofollow">Cymraeg</a>'.$medhjos.'  
<a lang="da" xml:lang="da" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Cda&amp;u='.$url.'" rel="nofollow">Dansk</a>'.$medhjos.'  
<a lang="de" xml:lang="de" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Cde&amp;u='.$url.'" rel="nofollow">Deutsch</a>'.$medhjos.'  
<a lang="et" xml:lang="et" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Cet&amp;u='.$url.'" rel="nofollow">Eesti</a>'.$medhjos.'  
<a lang="el" xml:lang="el" title="Ellenika" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Cel&amp;u='.$url.'" rel="nofollow">Ελληνικά</a>'.$medhjos.'  
<a lang="es" xml:lang="es" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Ces&amp;u='.$url.'" rel="nofollow">Español</a>'.$medhjos.'  
<a lang="fa" xml:lang="fa" title="Fārsī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Cfa&amp;u='.$url.'" rel="nofollow">فارسی</a>'.$medhjos.'  
<a lang="fr" xml:lang="fr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Cfr&amp;u='.$url.'" rel="nofollow">Français</a>'.$medhjos.'  
<a lang="ga" xml:lang="ga" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Cga&amp;u='.$url.'" rel="nofollow">Gaeilge</a>'.$medhjos.'  
<a lang="gl" xml:lang="gl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Cgl&amp;u='.$url.'" rel="nofollow">Galego</a>'.$medhjos.'  
<a lang="hi" xml:lang="hi" title="Hindī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Chi&amp;u='.$url.'" rel="nofollow">हिन्दी</a>'.$medhjos.'  
<a lang="hr" xml:lang="hr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Chr&amp;u='.$url.'" rel="nofollow">Hrvatski</a>'.$medhjos.'  
<a lang="id" xml:lang="id" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Cid&amp;u='.$url.'" rel="nofollow">Bahasa Indonesia</a>'.$medhjos.'  
<a lang="is" xml:lang="is" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Cis&amp;u='.$url.'" rel="nofollow">Íslenska</a>'.$medhjos.'  
<a lang="it" xml:lang="it" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Cit&amp;u='.$url.'" rel="nofollow">Italiano</a>'.$medhjos.'  
<a lang="he" xml:lang="he" title="‘Ivrit" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Che&amp;u='.$url.'" rel="nofollow">עברית</a>'.$medhjos.'  
<a lang="lv" xml:lang="lv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Clv&amp;u='.$url.'" rel="nofollow">Latviešu</a>'.$medhjos.'  
<a lang="lt" xml:lang="lt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Clt&amp;u='.$url.'" rel="nofollow">Lietuvių</a>'.$medhjos.'  
<a lang="ko" xml:lang="ko" title="Hangugeo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Cko&amp;u='.$url.'" rel="nofollow">한국어</a>'.$medhjos.'  
<a lang="hu" xml:lang="hu" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Chu&amp;u='.$url.'" rel="nofollow">Magyar</a>'.$medhjos.'  
<a lang="mk" xml:lang="mk" title="Makedonski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Cmk&amp;u='.$url.'" rel="nofollow">Македонски</a>'.$medhjos.'  
<a lang="ml" xml:lang="ml" title="Malayalam" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Cml&amp;u='.$url.'" rel="nofollow">മലയാളം</a>'.$medhjos.'  
<a lang="mt" xml:lang="mt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Cmt&amp;u='.$url.'" rel="nofollow">Malti</a>'.$medhjos.'  
<a lang="nl" xml:lang="nl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Cnl&amp;u='.$url.'" rel="nofollow">Nederlands</a>'.$medhjos.'  
<a lang="ja" xml:lang="ja" title="Nihongo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Cja&amp;u='.$url.'" rel="nofollow">日本語</a>'.$medhjos.'  
<a lang="no" xml:lang="no" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Cno&amp;u='.$url.'" rel="nofollow">Norsk (Bokmål)</a>'.$medhjos.'  
<a lang="pl" xml:lang="pl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Cpl&amp;u='.$url.'" rel="nofollow">Polski</a>'.$medhjos.'  
<a lang="pt" xml:lang="pt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Cpt&amp;u='.$url.'" rel="nofollow">Português</a>'.$medhjos.'  
<a lang="ro" xml:lang="ro" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Cro&amp;u='.$url.'" rel="nofollow">Română</a>'.$medhjos.'  
<a lang="ru" xml:lang="ru" title="Russkij" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Cru&amp;u='.$url.'" rel="nofollow">Русский</a>'.$medhjos.'  
<a lang="sl" xml:lang="sl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Csl&amp;u='.$url.'" rel="nofollow">Slovenščina</a>'.$medhjos.'  
<a lang="sq" xml:lang="sq" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Csq&amp;u='.$url.'" rel="nofollow">Shqip</a>'.$medhjos.'  
<a lang="sr" xml:lang="sr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Csr&amp;u='.$url.'" rel="nofollow">Srpski</a>'.$medhjos.'  
<a lang="fi" xml:lang="fi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Cfi&amp;u='.$url.'" rel="nofollow">Suomi</a>'.$medhjos.'  
<a lang="sv" xml:lang="sv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Csv&amp;u='.$url.'" rel="nofollow">Svenska</a>'.$medhjos.'  
<a lang="sw" xml:lang="sw" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Csw&amp;u='.$url.'" rel="nofollow">Kiswahili</a>'.$medhjos.'  
<a lang="th" xml:lang="th" title="Thai" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Cth&amp;u='.$url.'" rel="nofollow">ไทย</a>'.$medhjos.'  
<a lang="tl" xml:lang="tl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Ctl&amp;u='.$url.'" rel="nofollow">Tagalog</a>'.$medhjos.'  
<a lang="tr" xml:lang="tr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Ctr&amp;u='.$url.'" rel="nofollow">Türkçe</a>'.$medhjos.'  
<a lang="uk" xml:lang="uk" title="Ukraïns’ka" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Cuk&amp;u='.$url.'" rel="nofollow">Українська</a>'.$medhjos.'  
<a lang="vi" xml:lang="vi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Cvi&amp;u='.$url.'" rel="nofollow">Tiếng Việt</a>'.$medhjos.'  
<a lang="yi" xml:lang="yi" title="Yidiš" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Cyi&amp;u='.$url.'" rel="nofollow">ייִדיש</a>.'.$medhjos.'  
<a lang="zh-CN" xml:lang="zh-CN" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Czh-CN&amp;u='.$url.'" rel="nofollow">中文</a> /
<a lang="zh-TW" xml:lang="zh-TW" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sl%7Czh-TW&amp;u='.$url.'" rel="nofollow">漢語</a>';
		$shqip = '<a lang="sq" xml:lang="sq" href="#">Shqip</a>'.$medhjos.'
<a lang="en" xml:lang="en" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Cen&amp;u='.$url.'" rel="nofollow">English</a>'.$medhjos.'
<a lang="af" xml:lang="af" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Caf&amp;u='.$url.'" rel="nofollow">Afrikaans</a>'.$medhjos.'  
<a lang="ar" xml:lang="ar" title="Araby" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Car&amp;u='.$url.'" rel="nofollow">العربية</a>'.$medhjos.'  
<a lang="be" xml:lang="be" title="Belaruskaya" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Cbe&amp;u='.$url.'" rel="nofollow">Беларуская</a>'.$medhjos.'  
<a lang="bg" xml:lang="bg" title="Bulgarski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Cbg&amp;u='.$url.'" rel="nofollow">Български</a>'.$medhjos.'  
<a lang="ca" xml:lang="ca" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Cca&amp;u='.$url.'" rel="nofollow">Català</a>'.$medhjos.'  
<a lang="cs" xml:lang="cs" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Ccs&amp;u='.$url.'" rel="nofollow">Česky</a>'.$medhjos.'  
<a lang="cy" xml:lang="cy" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Ccy&amp;u='.$url.'" rel="nofollow">Cymraeg</a>'.$medhjos.'  
<a lang="da" xml:lang="da" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Cda&amp;u='.$url.'" rel="nofollow">Dansk</a>'.$medhjos.'  
<a lang="de" xml:lang="de" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Cde&amp;u='.$url.'" rel="nofollow">Deutsch</a>'.$medhjos.'  
<a lang="et" xml:lang="et" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Cet&amp;u='.$url.'" rel="nofollow">Eesti</a>'.$medhjos.'  
<a lang="el" xml:lang="el" title="Ellenika" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Cel&amp;u='.$url.'" rel="nofollow">Ελληνικά</a>'.$medhjos.'  
<a lang="es" xml:lang="es" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Ces&amp;u='.$url.'" rel="nofollow">Español</a>'.$medhjos.'  
<a lang="fa" xml:lang="fa" title="Fārsī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Cfa&amp;u='.$url.'" rel="nofollow">فارسی</a>'.$medhjos.'  
<a lang="fr" xml:lang="fr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Cfr&amp;u='.$url.'" rel="nofollow">Français</a>'.$medhjos.'  
<a lang="ga" xml:lang="ga" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Cga&amp;u='.$url.'" rel="nofollow">Gaeilge</a>'.$medhjos.'  
<a lang="gl" xml:lang="gl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Cgl&amp;u='.$url.'" rel="nofollow">Galego</a>'.$medhjos.'  
<a lang="hi" xml:lang="hi" title="Hindī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Chi&amp;u='.$url.'" rel="nofollow">हिन्दी</a>'.$medhjos.'  
<a lang="hr" xml:lang="hr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Chr&amp;u='.$url.'" rel="nofollow">Hrvatski</a>'.$medhjos.'  
<a lang="id" xml:lang="id" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Cid&amp;u='.$url.'" rel="nofollow">Bahasa Indonesia</a>'.$medhjos.'  
<a lang="is" xml:lang="is" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Cis&amp;u='.$url.'" rel="nofollow">Íslenska</a>'.$medhjos.'  
<a lang="it" xml:lang="it" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Cit&amp;u='.$url.'" rel="nofollow">Italiano</a>'.$medhjos.'  
<a lang="he" xml:lang="he" title="‘Ivrit" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Che&amp;u='.$url.'" rel="nofollow">עברית</a>'.$medhjos.'  
<a lang="lv" xml:lang="lv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Clv&amp;u='.$url.'" rel="nofollow">Latviešu</a>'.$medhjos.'  
<a lang="lt" xml:lang="lt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Clt&amp;u='.$url.'" rel="nofollow">Lietuvių</a>'.$medhjos.'  
<a lang="ko" xml:lang="ko" title="Hangugeo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Cko&amp;u='.$url.'" rel="nofollow">한국어</a>'.$medhjos.'  
<a lang="hu" xml:lang="hu" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Chu&amp;u='.$url.'" rel="nofollow">Magyar</a>'.$medhjos.'  
<a lang="mk" xml:lang="mk" title="Makedonski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Cmk&amp;u='.$url.'" rel="nofollow">Македонски</a>'.$medhjos.'  
<a lang="ml" xml:lang="ml" title="Malayalam" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Cml&amp;u='.$url.'" rel="nofollow">മലയാളം</a>'.$medhjos.'  
<a lang="mt" xml:lang="mt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Cmt&amp;u='.$url.'" rel="nofollow">Malti</a>'.$medhjos.'  
<a lang="nl" xml:lang="nl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Cnl&amp;u='.$url.'" rel="nofollow">Nederlands</a>'.$medhjos.'  
<a lang="ja" xml:lang="ja" title="Nihongo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Cja&amp;u='.$url.'" rel="nofollow">日本語</a>'.$medhjos.'  
<a lang="no" xml:lang="no" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Cno&amp;u='.$url.'" rel="nofollow">Norsk (Bokmål)</a>'.$medhjos.'  
<a lang="pl" xml:lang="pl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Cpl&amp;u='.$url.'" rel="nofollow">Polski</a>'.$medhjos.'  
<a lang="pt" xml:lang="pt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Cpt&amp;u='.$url.'" rel="nofollow">Português</a>'.$medhjos.'  
<a lang="ro" xml:lang="ro" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Cro&amp;u='.$url.'" rel="nofollow">Română</a>'.$medhjos.'  
<a lang="ru" xml:lang="ru" title="Russkij" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Cru&amp;u='.$url.'" rel="nofollow">Русский</a>'.$medhjos.'  
<a lang="sk" xml:lang="sk" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Csk&amp;u='.$url.'" rel="nofollow">Slovenčina</a>'.$medhjos.'  
<a lang="sl" xml:lang="sl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Csl&amp;u='.$url.'" rel="nofollow">Slovenščina</a>'.$medhjos.'  
<a lang="sr" xml:lang="sr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Csr&amp;u='.$url.'" rel="nofollow">Srpski</a>'.$medhjos.'  
<a lang="fi" xml:lang="fi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Cfi&amp;u='.$url.'" rel="nofollow">Suomi</a>'.$medhjos.'  
<a lang="sv" xml:lang="sv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Csv&amp;u='.$url.'" rel="nofollow">Svenska</a>'.$medhjos.'  
<a lang="sw" xml:lang="sw" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Csw&amp;u='.$url.'" rel="nofollow">Kiswahili</a>'.$medhjos.'  
<a lang="th" xml:lang="th" title="Thai" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Cth&amp;u='.$url.'" rel="nofollow">ไทย</a>'.$medhjos.'  
<a lang="tl" xml:lang="tl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Ctl&amp;u='.$url.'" rel="nofollow">Tagalog</a>'.$medhjos.'  
<a lang="tr" xml:lang="tr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Ctr&amp;u='.$url.'" rel="nofollow">Türkçe</a>'.$medhjos.'  
<a lang="uk" xml:lang="uk" title="Ukraïns’ka" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Cuk&amp;u='.$url.'" rel="nofollow">Українська</a>'.$medhjos.'  
<a lang="vi" xml:lang="vi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Cvi&amp;u='.$url.'" rel="nofollow">Tiếng Việt</a>'.$medhjos.'  
<a lang="yi" xml:lang="yi" title="Yidiš" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Cyi&amp;u='.$url.'" rel="nofollow">ייִדיש</a>.'.$medhjos.'  
<a lang="zh-CN" xml:lang="zh-CN" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Czh-CN&amp;u='.$url.'" rel="nofollow">中文</a> /
<a lang="zh-TW" xml:lang="zh-TW" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sq%7Czh-TW&amp;u='.$url.'" rel="nofollow">漢語</a>';
		$srpski = '<a lang="sr" xml:lang="sr" href="#">Srpski</a>'.$medhjos.'
<a lang="en" xml:lang="en" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Cen&amp;u='.$url.'" rel="nofollow">English</a>'.$medhjos.'
<a lang="af" xml:lang="af" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Caf&amp;u='.$url.'" rel="nofollow">Afrikaans</a>'.$medhjos.'  
<a lang="ar" xml:lang="ar" title="Araby" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Car&amp;u='.$url.'" rel="nofollow">العربية</a>'.$medhjos.'  
<a lang="be" xml:lang="be" title="Belaruskaya" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Cbe&amp;u='.$url.'" rel="nofollow">Беларуская</a>'.$medhjos.'  
<a lang="bg" xml:lang="bg" title="Bulgarski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Cbg&amp;u='.$url.'" rel="nofollow">Български</a>'.$medhjos.'  
<a lang="ca" xml:lang="ca" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Cca&amp;u='.$url.'" rel="nofollow">Català</a>'.$medhjos.'  
<a lang="cs" xml:lang="cs" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Ccs&amp;u='.$url.'" rel="nofollow">Česky</a>'.$medhjos.'  
<a lang="cy" xml:lang="cy" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Ccy&amp;u='.$url.'" rel="nofollow">Cymraeg</a>'.$medhjos.'  
<a lang="da" xml:lang="da" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Cda&amp;u='.$url.'" rel="nofollow">Dansk</a>'.$medhjos.'  
<a lang="de" xml:lang="de" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Cde&amp;u='.$url.'" rel="nofollow">Deutsch</a>'.$medhjos.'  
<a lang="et" xml:lang="et" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Cet&amp;u='.$url.'" rel="nofollow">Eesti</a>'.$medhjos.'  
<a lang="el" xml:lang="el" title="Ellenika" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Cel&amp;u='.$url.'" rel="nofollow">Ελληνικά</a>'.$medhjos.'  
<a lang="es" xml:lang="es" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Ces&amp;u='.$url.'" rel="nofollow">Español</a>'.$medhjos.'  
<a lang="fa" xml:lang="fa" title="Fārsī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Cfa&amp;u='.$url.'" rel="nofollow">فارسی</a>'.$medhjos.'  
<a lang="fr" xml:lang="fr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Cfr&amp;u='.$url.'" rel="nofollow">Français</a>'.$medhjos.'  
<a lang="ga" xml:lang="ga" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Cga&amp;u='.$url.'" rel="nofollow">Gaeilge</a>'.$medhjos.'  
<a lang="gl" xml:lang="gl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Cgl&amp;u='.$url.'" rel="nofollow">Galego</a>'.$medhjos.'  
<a lang="hi" xml:lang="hi" title="Hindī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Chi&amp;u='.$url.'" rel="nofollow">हिन्दी</a>'.$medhjos.'  
<a lang="hr" xml:lang="hr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Chr&amp;u='.$url.'" rel="nofollow">Hrvatski</a>'.$medhjos.'  
<a lang="id" xml:lang="id" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Cid&amp;u='.$url.'" rel="nofollow">Bahasa Indonesia</a>'.$medhjos.'  
<a lang="is" xml:lang="is" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Cis&amp;u='.$url.'" rel="nofollow">Íslenska</a>'.$medhjos.'  
<a lang="it" xml:lang="it" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Cit&amp;u='.$url.'" rel="nofollow">Italiano</a>'.$medhjos.'  
<a lang="he" xml:lang="he" title="‘Ivrit" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Che&amp;u='.$url.'" rel="nofollow">עברית</a>'.$medhjos.'  
<a lang="lv" xml:lang="lv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Clv&amp;u='.$url.'" rel="nofollow">Latviešu</a>'.$medhjos.'  
<a lang="lt" xml:lang="lt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Clt&amp;u='.$url.'" rel="nofollow">Lietuvių</a>'.$medhjos.'  
<a lang="ko" xml:lang="ko" title="Hangugeo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Cko&amp;u='.$url.'" rel="nofollow">한국어</a>'.$medhjos.'  
<a lang="hu" xml:lang="hu" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Chu&amp;u='.$url.'" rel="nofollow">Magyar</a>'.$medhjos.'  
<a lang="mk" xml:lang="mk" title="Makedonski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Cmk&amp;u='.$url.'" rel="nofollow">Македонски</a>'.$medhjos.'  
<a lang="ml" xml:lang="ml" title="Malayalam" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Cml&amp;u='.$url.'" rel="nofollow">മലയാളം</a>'.$medhjos.'  
<a lang="mt" xml:lang="mt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Cmt&amp;u='.$url.'" rel="nofollow">Malti</a>'.$medhjos.'  
<a lang="nl" xml:lang="nl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Cnl&amp;u='.$url.'" rel="nofollow">Nederlands</a>'.$medhjos.'  
<a lang="ja" xml:lang="ja" title="Nihongo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Cja&amp;u='.$url.'" rel="nofollow">日本語</a>'.$medhjos.'  
<a lang="no" xml:lang="no" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Cno&amp;u='.$url.'" rel="nofollow">Norsk (Bokmål)</a>'.$medhjos.'  
<a lang="pl" xml:lang="pl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Cpl&amp;u='.$url.'" rel="nofollow">Polski</a>'.$medhjos.'  
<a lang="pt" xml:lang="pt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Cpt&amp;u='.$url.'" rel="nofollow">Português</a>'.$medhjos.'  
<a lang="ro" xml:lang="ro" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Cro&amp;u='.$url.'" rel="nofollow">Română</a>'.$medhjos.'  
<a lang="ru" xml:lang="ru" title="Russkij" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Cru&amp;u='.$url.'" rel="nofollow">Русский</a>'.$medhjos.'  
<a lang="sk" xml:lang="sk" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Csk&amp;u='.$url.'" rel="nofollow">Slovenčina</a>'.$medhjos.'  
<a lang="sl" xml:lang="sl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Csl&amp;u='.$url.'" rel="nofollow">Slovenščina</a>'.$medhjos.'  
<a lang="sq" xml:lang="sq" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Csq&amp;u='.$url.'" rel="nofollow">Shqip</a>'.$medhjos.'  
<a lang="fi" xml:lang="fi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Cfi&amp;u='.$url.'" rel="nofollow">Suomi</a>'.$medhjos.'  
<a lang="sv" xml:lang="sv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Csv&amp;u='.$url.'" rel="nofollow">Svenska</a>'.$medhjos.'  
<a lang="sw" xml:lang="sw" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Csw&amp;u='.$url.'" rel="nofollow">Kiswahili</a>'.$medhjos.'  
<a lang="th" xml:lang="th" title="Thai" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Cth&amp;u='.$url.'" rel="nofollow">ไทย</a>'.$medhjos.'  
<a lang="tl" xml:lang="tl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Ctl&amp;u='.$url.'" rel="nofollow">Tagalog</a>'.$medhjos.'  
<a lang="tr" xml:lang="tr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Ctr&amp;u='.$url.'" rel="nofollow">Türkçe</a>'.$medhjos.'  
<a lang="uk" xml:lang="uk" title="Ukraïns’ka" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Cuk&amp;u='.$url.'" rel="nofollow">Українська</a>'.$medhjos.'  
<a lang="vi" xml:lang="vi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Cvi&amp;u='.$url.'" rel="nofollow">Tiếng Việt</a>'.$medhjos.'  
<a lang="yi" xml:lang="yi" title="Yidiš" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Cyi&amp;u='.$url.'" rel="nofollow">ייִדיש</a>.'.$medhjos.'  
<a lang="zh-CN" xml:lang="zh-CN" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Czh-CN&amp;u='.$url.'" rel="nofollow">中文</a> /
<a lang="zh-TW" xml:lang="zh-TW" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sr%7Czh-TW&amp;u='.$url.'" rel="nofollow">漢語</a>';
		$suomi = '<a lang="fi" xml:lang="fi" href="#">Suomi</a>'.$medhjos.'
<a lang="en" xml:lang="en" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Cen&amp;u='.$url.'" rel="nofollow">English</a>'.$medhjos.'
<a lang="af" xml:lang="af" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Caf&amp;u='.$url.'" rel="nofollow">Afrikaans</a>'.$medhjos.'  
<a lang="ar" xml:lang="ar" title="Araby" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Car&amp;u='.$url.'" rel="nofollow">العربية</a>'.$medhjos.'  
<a lang="be" xml:lang="be" title="Belaruskaya" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Cbe&amp;u='.$url.'" rel="nofollow">Беларуская</a>'.$medhjos.'  
<a lang="bg" xml:lang="bg" title="Bulgarski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Cbg&amp;u='.$url.'" rel="nofollow">Български</a>'.$medhjos.'  
<a lang="ca" xml:lang="ca" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Cca&amp;u='.$url.'" rel="nofollow">Català</a>'.$medhjos.'  
<a lang="cs" xml:lang="cs" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Ccs&amp;u='.$url.'" rel="nofollow">Česky</a>'.$medhjos.'  
<a lang="cy" xml:lang="cy" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Ccy&amp;u='.$url.'" rel="nofollow">Cymraeg</a>'.$medhjos.'  
<a lang="da" xml:lang="da" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Cda&amp;u='.$url.'" rel="nofollow">Dansk</a>'.$medhjos.'  
<a lang="de" xml:lang="de" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Cde&amp;u='.$url.'" rel="nofollow">Deutsch</a>'.$medhjos.'  
<a lang="et" xml:lang="et" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Cet&amp;u='.$url.'" rel="nofollow">Eesti</a>'.$medhjos.'  
<a lang="el" xml:lang="el" title="Ellenika" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Cel&amp;u='.$url.'" rel="nofollow">Ελληνικά</a>'.$medhjos.'  
<a lang="es" xml:lang="es" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Ces&amp;u='.$url.'" rel="nofollow">Español</a>'.$medhjos.'  
<a lang="fa" xml:lang="fa" title="Fārsī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Cfa&amp;u='.$url.'" rel="nofollow">فارسی</a>'.$medhjos.'  
<a lang="fr" xml:lang="fr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Cfr&amp;u='.$url.'" rel="nofollow">Français</a>'.$medhjos.'  
<a lang="ga" xml:lang="ga" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Cga&amp;u='.$url.'" rel="nofollow">Gaeilge</a>'.$medhjos.'  
<a lang="gl" xml:lang="gl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Cgl&amp;u='.$url.'" rel="nofollow">Galego</a>'.$medhjos.'  
<a lang="hi" xml:lang="hi" title="Hindī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Chi&amp;u='.$url.'" rel="nofollow">हिन्दी</a>'.$medhjos.'  
<a lang="hr" xml:lang="hr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Chr&amp;u='.$url.'" rel="nofollow">Hrvatski</a>'.$medhjos.'  
<a lang="id" xml:lang="id" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Cid&amp;u='.$url.'" rel="nofollow">Bahasa Indonesia</a>'.$medhjos.'  
<a lang="is" xml:lang="is" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Cis&amp;u='.$url.'" rel="nofollow">Íslenska</a>'.$medhjos.'  
<a lang="it" xml:lang="it" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Cit&amp;u='.$url.'" rel="nofollow">Italiano</a>'.$medhjos.'  
<a lang="he" xml:lang="he" title="‘Ivrit" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Che&amp;u='.$url.'" rel="nofollow">עברית</a>'.$medhjos.'  
<a lang="lv" xml:lang="lv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Clv&amp;u='.$url.'" rel="nofollow">Latviešu</a>'.$medhjos.'  
<a lang="lt" xml:lang="lt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Clt&amp;u='.$url.'" rel="nofollow">Lietuvių</a>'.$medhjos.'  
<a lang="ko" xml:lang="ko" title="Hangugeo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Cko&amp;u='.$url.'" rel="nofollow">한국어</a>'.$medhjos.'  
<a lang="hu" xml:lang="hu" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Chu&amp;u='.$url.'" rel="nofollow">Magyar</a>'.$medhjos.'  
<a lang="mk" xml:lang="mk" title="Makedonski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Cmk&amp;u='.$url.'" rel="nofollow">Македонски</a>'.$medhjos.'  
<a lang="ml" xml:lang="ml" title="Malayalam" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Cml&amp;u='.$url.'" rel="nofollow">മലയാളം</a>'.$medhjos.'  
<a lang="mt" xml:lang="mt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Cmt&amp;u='.$url.'" rel="nofollow">Malti</a>'.$medhjos.'  
<a lang="nl" xml:lang="nl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Cnl&amp;u='.$url.'" rel="nofollow">Nederlands</a>'.$medhjos.'  
<a lang="ja" xml:lang="ja" title="Nihongo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Cja&amp;u='.$url.'" rel="nofollow">日本語</a>'.$medhjos.'  
<a lang="no" xml:lang="no" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Cno&amp;u='.$url.'" rel="nofollow">Norsk (Bokmål)</a>'.$medhjos.'  
<a lang="pl" xml:lang="pl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Cpl&amp;u='.$url.'" rel="nofollow">Polski</a>'.$medhjos.'  
<a lang="pt" xml:lang="pt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Cpt&amp;u='.$url.'" rel="nofollow">Português</a>'.$medhjos.'  
<a lang="ro" xml:lang="ro" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Cro&amp;u='.$url.'" rel="nofollow">Română</a>'.$medhjos.'  
<a lang="ru" xml:lang="ru" title="Russkij" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Cru&amp;u='.$url.'" rel="nofollow">Русский</a>'.$medhjos.'  
<a lang="sk" xml:lang="sk" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Csk&amp;u='.$url.'" rel="nofollow">Slovenčina</a>'.$medhjos.'  
<a lang="sl" xml:lang="sl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Csl&amp;u='.$url.'" rel="nofollow">Slovenščina</a>'.$medhjos.'  
<a lang="sq" xml:lang="sq" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Csq&amp;u='.$url.'" rel="nofollow">Shqip</a>'.$medhjos.'  
<a lang="sr" xml:lang="sr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Csr&amp;u='.$url.'" rel="nofollow">Srpski</a>'.$medhjos.'  
<a lang="sv" xml:lang="sv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Csv&amp;u='.$url.'" rel="nofollow">Svenska</a>'.$medhjos.'  
<a lang="sw" xml:lang="sw" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Csw&amp;u='.$url.'" rel="nofollow">Kiswahili</a>'.$medhjos.'  
<a lang="th" xml:lang="th" title="Thai" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Cth&amp;u='.$url.'" rel="nofollow">ไทย</a>'.$medhjos.'  
<a lang="tl" xml:lang="tl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Ctl&amp;u='.$url.'" rel="nofollow">Tagalog</a>'.$medhjos.'  
<a lang="tr" xml:lang="tr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Ctr&amp;u='.$url.'" rel="nofollow">Türkçe</a>'.$medhjos.'  
<a lang="uk" xml:lang="uk" title="Ukraïns’ka" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Cuk&amp;u='.$url.'" rel="nofollow">Українська</a>'.$medhjos.'  
<a lang="vi" xml:lang="vi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Cvi&amp;u='.$url.'" rel="nofollow">Tiếng Việt</a>'.$medhjos.'  
<a lang="yi" xml:lang="yi" title="Yidiš" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Cyi&amp;u='.$url.'" rel="nofollow">ייִדיש</a>.'.$medhjos.'  
<a lang="zh-CN" xml:lang="zh-CN" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Czh-CN&amp;u='.$url.'" rel="nofollow">中文</a> /
<a lang="zh-TW" xml:lang="zh-TW" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=fi%7Czh-TW&amp;u='.$url.'" rel="nofollow">漢語</a>';
		$svenska = '<a lang="sv" xml:lang="sv" href="#">Svenska</a>'.$medhjos.'
<a lang="en" xml:lang="en" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Cen&amp;u='.$url.'" rel="nofollow">English</a>'.$medhjos.'
<a lang="af" xml:lang="af" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Caf&amp;u='.$url.'" rel="nofollow">Afrikaans</a>'.$medhjos.'  
<a lang="ar" xml:lang="ar" title="Araby" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Car&amp;u='.$url.'" rel="nofollow">العربية</a>'.$medhjos.'  
<a lang="be" xml:lang="be" title="Belaruskaya" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Cbe&amp;u='.$url.'" rel="nofollow">Беларуская</a>'.$medhjos.'  
<a lang="bg" xml:lang="bg" title="Bulgarski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Cbg&amp;u='.$url.'" rel="nofollow">Български</a>'.$medhjos.'  
<a lang="ca" xml:lang="ca" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Cca&amp;u='.$url.'" rel="nofollow">Català</a>'.$medhjos.'  
<a lang="cs" xml:lang="cs" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Ccs&amp;u='.$url.'" rel="nofollow">Česky</a>'.$medhjos.'  
<a lang="cy" xml:lang="cy" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Ccy&amp;u='.$url.'" rel="nofollow">Cymraeg</a>'.$medhjos.'  
<a lang="da" xml:lang="da" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Cda&amp;u='.$url.'" rel="nofollow">Dansk</a>'.$medhjos.'  
<a lang="de" xml:lang="de" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Cde&amp;u='.$url.'" rel="nofollow">Deutsch</a>'.$medhjos.'  
<a lang="et" xml:lang="et" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Cet&amp;u='.$url.'" rel="nofollow">Eesti</a>'.$medhjos.'  
<a lang="el" xml:lang="el" title="Ellenika" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Cel&amp;u='.$url.'" rel="nofollow">Ελληνικά</a>'.$medhjos.'  
<a lang="es" xml:lang="es" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Ces&amp;u='.$url.'" rel="nofollow">Español</a>'.$medhjos.'  
<a lang="fa" xml:lang="fa" title="Fārsī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Cfa&amp;u='.$url.'" rel="nofollow">فارسی</a>'.$medhjos.'  
<a lang="fr" xml:lang="fr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Cfr&amp;u='.$url.'" rel="nofollow">Français</a>'.$medhjos.'  
<a lang="ga" xml:lang="ga" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Cga&amp;u='.$url.'" rel="nofollow">Gaeilge</a>'.$medhjos.'  
<a lang="gl" xml:lang="gl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Cgl&amp;u='.$url.'" rel="nofollow">Galego</a>'.$medhjos.'  
<a lang="hi" xml:lang="hi" title="Hindī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Chi&amp;u='.$url.'" rel="nofollow">हिन्दी</a>'.$medhjos.'  
<a lang="hr" xml:lang="hr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Chr&amp;u='.$url.'" rel="nofollow">Hrvatski</a>'.$medhjos.'  
<a lang="id" xml:lang="id" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Cid&amp;u='.$url.'" rel="nofollow">Bahasa Indonesia</a>'.$medhjos.'  
<a lang="is" xml:lang="is" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Cis&amp;u='.$url.'" rel="nofollow">Íslenska</a>'.$medhjos.'  
<a lang="it" xml:lang="it" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Cit&amp;u='.$url.'" rel="nofollow">Italiano</a>'.$medhjos.'  
<a lang="he" xml:lang="he" title="‘Ivrit" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Che&amp;u='.$url.'" rel="nofollow">עברית</a>'.$medhjos.'  
<a lang="lv" xml:lang="lv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Clv&amp;u='.$url.'" rel="nofollow">Latviešu</a>'.$medhjos.'  
<a lang="lt" xml:lang="lt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Clt&amp;u='.$url.'" rel="nofollow">Lietuvių</a>'.$medhjos.'  
<a lang="ko" xml:lang="ko" title="Hangugeo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Cko&amp;u='.$url.'" rel="nofollow">한국어</a>'.$medhjos.'  
<a lang="hu" xml:lang="hu" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Chu&amp;u='.$url.'" rel="nofollow">Magyar</a>'.$medhjos.'  
<a lang="mk" xml:lang="mk" title="Makedonski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Cmk&amp;u='.$url.'" rel="nofollow">Македонски</a>'.$medhjos.'  
<a lang="ml" xml:lang="ml" title="Malayalam" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Cml&amp;u='.$url.'" rel="nofollow">മലയാളം</a>'.$medhjos.'  
<a lang="mt" xml:lang="mt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Cmt&amp;u='.$url.'" rel="nofollow">Malti</a>'.$medhjos.'  
<a lang="nl" xml:lang="nl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Cnl&amp;u='.$url.'" rel="nofollow">Nederlands</a>'.$medhjos.'  
<a lang="ja" xml:lang="ja" title="Nihongo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Cja&amp;u='.$url.'" rel="nofollow">日本語</a>'.$medhjos.'  
<a lang="no" xml:lang="no" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Cno&amp;u='.$url.'" rel="nofollow">Norsk (Bokmål)</a>'.$medhjos.'  
<a lang="pl" xml:lang="pl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Cpl&amp;u='.$url.'" rel="nofollow">Polski</a>'.$medhjos.'  
<a lang="pt" xml:lang="pt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Cpt&amp;u='.$url.'" rel="nofollow">Português</a>'.$medhjos.'  
<a lang="ro" xml:lang="ro" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Cro&amp;u='.$url.'" rel="nofollow">Română</a>'.$medhjos.'  
<a lang="ru" xml:lang="ru" title="Russkij" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Cru&amp;u='.$url.'" rel="nofollow">Русский</a>'.$medhjos.'  
<a lang="sk" xml:lang="sk" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Csk&amp;u='.$url.'" rel="nofollow">Slovenčina</a>'.$medhjos.'  
<a lang="sl" xml:lang="sl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Csl&amp;u='.$url.'" rel="nofollow">Slovenščina</a>'.$medhjos.'  
<a lang="sq" xml:lang="sq" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Csq&amp;u='.$url.'" rel="nofollow">Shqip</a>'.$medhjos.'  
<a lang="sr" xml:lang="sr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Csr&amp;u='.$url.'" rel="nofollow">Srpski</a>'.$medhjos.'  
<a lang="fi" xml:lang="fi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Cfi&amp;u='.$url.'" rel="nofollow">Suomi</a>'.$medhjos.'  
<a lang="sw" xml:lang="sw" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Csw&amp;u='.$url.'" rel="nofollow">Kiswahili</a>'.$medhjos.'  
<a lang="th" xml:lang="th" title="Thai" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Cth&amp;u='.$url.'" rel="nofollow">ไทย</a>'.$medhjos.'  
<a lang="tl" xml:lang="tl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Ctl&amp;u='.$url.'" rel="nofollow">Tagalog</a>'.$medhjos.'  
<a lang="tr" xml:lang="tr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Ctr&amp;u='.$url.'" rel="nofollow">Türkçe</a>'.$medhjos.'  
<a lang="uk" xml:lang="uk" title="Ukraïns’ka" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Cuk&amp;u='.$url.'" rel="nofollow">Українська</a>'.$medhjos.'  
<a lang="vi" xml:lang="vi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Cvi&amp;u='.$url.'" rel="nofollow">Tiếng Việt</a>'.$medhjos.'  
<a lang="yi" xml:lang="yi" title="Yidiš" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Cyi&amp;u='.$url.'" rel="nofollow">ייִדיש</a>.'.$medhjos.'  
<a lang="zh-CN" xml:lang="zh-CN" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Czh-CN&amp;u='.$url.'" rel="nofollow">中文</a> /
<a lang="zh-TW" xml:lang="zh-TW" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sv%7Czh-TW&amp;u='.$url.'" rel="nofollow">漢語</a>';
		$swahili = '<a lang="sw" xml:lang="sw"  href="#">Kiswahili</a>'.$medhjos.'
<a lang="en" xml:lang="en" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Cen&amp;u='.$url.'" rel="nofollow">English</a>'.$medhjos.'
<a lang="af" xml:lang="af" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Caf&amp;u='.$url.'" rel="nofollow">Afrikaans</a>'.$medhjos.'  
<a lang="ar" xml:lang="ar" title="Araby" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Car&amp;u='.$url.'" rel="nofollow">العربية</a>'.$medhjos.'  
<a lang="be" xml:lang="be" title="Belaruskaya" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Cbe&amp;u='.$url.'" rel="nofollow">Беларуская</a>'.$medhjos.'  
<a lang="bg" xml:lang="bg" title="Bulgarski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Cbg&amp;u='.$url.'" rel="nofollow">Български</a>'.$medhjos.'  
<a lang="ca" xml:lang="ca" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Cca&amp;u='.$url.'" rel="nofollow">Català</a>'.$medhjos.'  
<a lang="cs" xml:lang="cs" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Ccs&amp;u='.$url.'" rel="nofollow">Česky</a>'.$medhjos.'  
<a lang="cy" xml:lang="cy" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Ccy&amp;u='.$url.'" rel="nofollow">Cymraeg</a>'.$medhjos.'  
<a lang="da" xml:lang="da" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Cda&amp;u='.$url.'" rel="nofollow">Dansk</a>'.$medhjos.'  
<a lang="de" xml:lang="de" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Cde&amp;u='.$url.'" rel="nofollow">Deutsch</a>'.$medhjos.'  
<a lang="et" xml:lang="et" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Cet&amp;u='.$url.'" rel="nofollow">Eesti</a>'.$medhjos.'  
<a lang="el" xml:lang="el" title="Ellenika" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Cel&amp;u='.$url.'" rel="nofollow">Ελληνικά</a>'.$medhjos.'  
<a lang="es" xml:lang="es" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Ces&amp;u='.$url.'" rel="nofollow">Español</a>'.$medhjos.'  
<a lang="fa" xml:lang="fa" title="Fārsī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Cfa&amp;u='.$url.'" rel="nofollow">فارسی</a>'.$medhjos.'  
<a lang="fr" xml:lang="fr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Cfr&amp;u='.$url.'" rel="nofollow">Français</a>'.$medhjos.'  
<a lang="ga" xml:lang="ga" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Cga&amp;u='.$url.'" rel="nofollow">Gaeilge</a>'.$medhjos.'  
<a lang="gl" xml:lang="gl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Cgl&amp;u='.$url.'" rel="nofollow">Galego</a>'.$medhjos.'  
<a lang="hi" xml:lang="hi" title="Hindī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Chi&amp;u='.$url.'" rel="nofollow">हिन्दी</a>'.$medhjos.'  
<a lang="hr" xml:lang="hr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Chr&amp;u='.$url.'" rel="nofollow">Hrvatski</a>'.$medhjos.'  
<a lang="id" xml:lang="id" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Cid&amp;u='.$url.'" rel="nofollow">Bahasa Indonesia</a>'.$medhjos.'  
<a lang="is" xml:lang="is" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Cis&amp;u='.$url.'" rel="nofollow">Íslenska</a>'.$medhjos.'  
<a lang="it" xml:lang="it" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Cit&amp;u='.$url.'" rel="nofollow">Italiano</a>'.$medhjos.'  
<a lang="he" xml:lang="he" title="‘Ivrit" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Che&amp;u='.$url.'" rel="nofollow">עברית</a>'.$medhjos.'  
<a lang="lv" xml:lang="lv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Clv&amp;u='.$url.'" rel="nofollow">Latviešu</a>'.$medhjos.'  
<a lang="lt" xml:lang="lt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Clt&amp;u='.$url.'" rel="nofollow">Lietuvių</a>'.$medhjos.'  
<a lang="ko" xml:lang="ko" title="Hangugeo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Cko&amp;u='.$url.'" rel="nofollow">한국어</a>'.$medhjos.'  
<a lang="hu" xml:lang="hu" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Chu&amp;u='.$url.'" rel="nofollow">Magyar</a>'.$medhjos.'  
<a lang="mk" xml:lang="mk" title="Makedonski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Cmk&amp;u='.$url.'" rel="nofollow">Македонски</a>'.$medhjos.'  
<a lang="ml" xml:lang="ml" title="Malayalam" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Cml&amp;u='.$url.'" rel="nofollow">മലയാളം</a>'.$medhjos.'  
<a lang="mt" xml:lang="mt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Cmt&amp;u='.$url.'" rel="nofollow">Malti</a>'.$medhjos.'  
<a lang="nl" xml:lang="nl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Cnl&amp;u='.$url.'" rel="nofollow">Nederlands</a>'.$medhjos.'  
<a lang="ja" xml:lang="ja" title="Nihongo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Cja&amp;u='.$url.'" rel="nofollow">日本語</a>'.$medhjos.'  
<a lang="no" xml:lang="no" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Cno&amp;u='.$url.'" rel="nofollow">Norsk (Bokmål)</a>'.$medhjos.'  
<a lang="pl" xml:lang="pl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Cpl&amp;u='.$url.'" rel="nofollow">Polski</a>'.$medhjos.'  
<a lang="pt" xml:lang="pt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Cpt&amp;u='.$url.'" rel="nofollow">Português</a>'.$medhjos.'  
<a lang="ro" xml:lang="ro" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Cro&amp;u='.$url.'" rel="nofollow">Română</a>'.$medhjos.'  
<a lang="ru" xml:lang="ru" title="Russkij" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Cru&amp;u='.$url.'" rel="nofollow">Русский</a>'.$medhjos.'  
<a lang="sk" xml:lang="sk" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Csk&amp;u='.$url.'" rel="nofollow">Slovenčina</a>'.$medhjos.'  
<a lang="sl" xml:lang="sl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Csl&amp;u='.$url.'" rel="nofollow">Slovenščina</a>'.$medhjos.'  
<a lang="sq" xml:lang="sq" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Csq&amp;u='.$url.'" rel="nofollow">Shqip</a>'.$medhjos.'  
<a lang="sr" xml:lang="sr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Csr&amp;u='.$url.'" rel="nofollow">Srpski</a>'.$medhjos.'  
<a lang="fi" xml:lang="fi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Cfi&amp;u='.$url.'" rel="nofollow">Suomi</a>'.$medhjos.'  
<a lang="sv" xml:lang="sv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Csv&amp;u='.$url.'" rel="nofollow">Svenska</a>'.$medhjos.'  
<a lang="th" xml:lang="th" title="Thai" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Cth&amp;u='.$url.'" rel="nofollow">ไทย</a>'.$medhjos.'  
<a lang="tl" xml:lang="tl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Ctl&amp;u='.$url.'" rel="nofollow">Tagalog</a>'.$medhjos.'  
<a lang="tr" xml:lang="tr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Ctr&amp;u='.$url.'" rel="nofollow">Türkçe</a>'.$medhjos.'  
<a lang="uk" xml:lang="uk" title="Ukraïns’ka" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Cuk&amp;u='.$url.'" rel="nofollow">Українська</a>'.$medhjos.'  
<a lang="vi" xml:lang="vi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Cvi&amp;u='.$url.'" rel="nofollow">Tiếng Việt</a>'.$medhjos.'  
<a lang="yi" xml:lang="yi" title="Yidiš" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Cyi&amp;u='.$url.'" rel="nofollow">ייִדיש</a>.'.$medhjos.'  
<a lang="zh-CN" xml:lang="zh-CN" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Czh-CN&amp;u='.$url.'" rel="nofollow">中文</a> /
<a lang="zh-TW" xml:lang="zh-TW" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=sw%7Czh-TW&amp;u='.$url.'" rel="nofollow">漢語</a>';
		$thai = '<a lang="th" xml:lang="th" title="Thai" href="#">ไทย</a>'.$medhjos.'
<a lang="en" xml:lang="en" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Cen&amp;u='.$url.'" rel="nofollow">English</a>'.$medhjos.'
<a lang="af" xml:lang="af" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Caf&amp;u='.$url.'" rel="nofollow">Afrikaans</a>'.$medhjos.'  
<a lang="ar" xml:lang="ar" title="Araby" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Car&amp;u='.$url.'" rel="nofollow">العربية</a>'.$medhjos.'  
<a lang="be" xml:lang="be" title="Belaruskaya" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Cbe&amp;u='.$url.'" rel="nofollow">Беларуская</a>'.$medhjos.'  
<a lang="bg" xml:lang="bg" title="Bulgarski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Cbg&amp;u='.$url.'" rel="nofollow">Български</a>'.$medhjos.'  
<a lang="ca" xml:lang="ca" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Cca&amp;u='.$url.'" rel="nofollow">Català</a>'.$medhjos.'  
<a lang="cs" xml:lang="cs" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Ccs&amp;u='.$url.'" rel="nofollow">Česky</a>'.$medhjos.'  
<a lang="cy" xml:lang="cy" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Ccy&amp;u='.$url.'" rel="nofollow">Cymraeg</a>'.$medhjos.'  
<a lang="da" xml:lang="da" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Cda&amp;u='.$url.'" rel="nofollow">Dansk</a>'.$medhjos.'  
<a lang="de" xml:lang="de" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Cde&amp;u='.$url.'" rel="nofollow">Deutsch</a>'.$medhjos.'  
<a lang="et" xml:lang="et" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Cet&amp;u='.$url.'" rel="nofollow">Eesti</a>'.$medhjos.'  
<a lang="el" xml:lang="el" title="Ellenika" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Cel&amp;u='.$url.'" rel="nofollow">Ελληνικά</a>'.$medhjos.'  
<a lang="es" xml:lang="es" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Ces&amp;u='.$url.'" rel="nofollow">Español</a>'.$medhjos.'  
<a lang="fa" xml:lang="fa" title="Fārsī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Cfa&amp;u='.$url.'" rel="nofollow">فارسی</a>'.$medhjos.'  
<a lang="fr" xml:lang="fr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Cfr&amp;u='.$url.'" rel="nofollow">Français</a>'.$medhjos.'  
<a lang="ga" xml:lang="ga" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Cga&amp;u='.$url.'" rel="nofollow">Gaeilge</a>'.$medhjos.'  
<a lang="gl" xml:lang="gl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Cgl&amp;u='.$url.'" rel="nofollow">Galego</a>'.$medhjos.'  
<a lang="hi" xml:lang="hi" title="Hindī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Chi&amp;u='.$url.'" rel="nofollow">हिन्दी</a>'.$medhjos.'  
<a lang="hr" xml:lang="hr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Chr&amp;u='.$url.'" rel="nofollow">Hrvatski</a>'.$medhjos.'  
<a lang="id" xml:lang="id" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Cid&amp;u='.$url.'" rel="nofollow">Bahasa Indonesia</a>'.$medhjos.'  
<a lang="is" xml:lang="is" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Cis&amp;u='.$url.'" rel="nofollow">Íslenska</a>'.$medhjos.'  
<a lang="it" xml:lang="it" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Cit&amp;u='.$url.'" rel="nofollow">Italiano</a>'.$medhjos.'  
<a lang="he" xml:lang="he" title="‘Ivrit" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Che&amp;u='.$url.'" rel="nofollow">עברית</a>'.$medhjos.'  
<a lang="lv" xml:lang="lv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Clv&amp;u='.$url.'" rel="nofollow">Latviešu</a>'.$medhjos.'  
<a lang="lt" xml:lang="lt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Clt&amp;u='.$url.'" rel="nofollow">Lietuvių</a>'.$medhjos.'  
<a lang="ko" xml:lang="ko" title="Hangugeo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Cko&amp;u='.$url.'" rel="nofollow">한국어</a>'.$medhjos.'  
<a lang="hu" xml:lang="hu" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Chu&amp;u='.$url.'" rel="nofollow">Magyar</a>'.$medhjos.'  
<a lang="mk" xml:lang="mk" title="Makedonski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Cmk&amp;u='.$url.'" rel="nofollow">Македонски</a>'.$medhjos.'  
<a lang="ml" xml:lang="ml" title="Malayalam" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Cml&amp;u='.$url.'" rel="nofollow">മലയാളം</a>'.$medhjos.'  
<a lang="mt" xml:lang="mt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Cmt&amp;u='.$url.'" rel="nofollow">Malti</a>'.$medhjos.'  
<a lang="nl" xml:lang="nl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Cnl&amp;u='.$url.'" rel="nofollow">Nederlands</a>'.$medhjos.'  
<a lang="ja" xml:lang="ja" title="Nihongo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Cja&amp;u='.$url.'" rel="nofollow">日本語</a>'.$medhjos.'  
<a lang="no" xml:lang="no" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Cno&amp;u='.$url.'" rel="nofollow">Norsk (Bokmål)</a>'.$medhjos.'  
<a lang="pl" xml:lang="pl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Cpl&amp;u='.$url.'" rel="nofollow">Polski</a>'.$medhjos.'  
<a lang="pt" xml:lang="pt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Cpt&amp;u='.$url.'" rel="nofollow">Português</a>'.$medhjos.'  
<a lang="ro" xml:lang="ro" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Cro&amp;u='.$url.'" rel="nofollow">Română</a>'.$medhjos.'  
<a lang="ru" xml:lang="ru" title="Russkij" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Cru&amp;u='.$url.'" rel="nofollow">Русский</a>'.$medhjos.'  
<a lang="sk" xml:lang="sk" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Csk&amp;u='.$url.'" rel="nofollow">Slovenčina</a>'.$medhjos.'  
<a lang="sl" xml:lang="sl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Csl&amp;u='.$url.'" rel="nofollow">Slovenščina</a>'.$medhjos.'  
<a lang="sq" xml:lang="sq" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Csq&amp;u='.$url.'" rel="nofollow">Shqip</a>'.$medhjos.'  
<a lang="sr" xml:lang="sr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Csr&amp;u='.$url.'" rel="nofollow">Srpski</a>'.$medhjos.'  
<a lang="fi" xml:lang="fi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Cfi&amp;u='.$url.'" rel="nofollow">Suomi</a>'.$medhjos.'  
<a lang="sv" xml:lang="sv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Csv&amp;u='.$url.'" rel="nofollow">Svenska</a>'.$medhjos.'  
<a lang="sw" xml:lang="sw" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Csw&amp;u='.$url.'" rel="nofollow">Kiswahili</a>'.$medhjos.'  
<a lang="tl" xml:lang="tl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Ctl&amp;u='.$url.'" rel="nofollow">Tagalog</a>'.$medhjos.'  
<a lang="tr" xml:lang="tr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Ctr&amp;u='.$url.'" rel="nofollow">Türkçe</a>'.$medhjos.'  
<a lang="uk" xml:lang="uk" title="Ukraïns’ka" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Cuk&amp;u='.$url.'" rel="nofollow">Українська</a>'.$medhjos.'  
<a lang="vi" xml:lang="vi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Cvi&amp;u='.$url.'" rel="nofollow">Tiếng Việt</a>'.$medhjos.'  
<a lang="yi" xml:lang="yi" title="Yidiš" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Cyi&amp;u='.$url.'" rel="nofollow">ייִדיש</a>.'.$medhjos.'  
<a lang="zh-CN" xml:lang="zh-CN" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Czh-CN&amp;u='.$url.'" rel="nofollow">中文</a> /
<a lang="zh-TW" xml:lang="zh-TW" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=th%7Czh-TW&amp;u='.$url.'" rel="nofollow">漢語</a>';
		$tagalog = '<a lang="tl" xml:lang="tl" href="#">Tagalog</a>'.$medhjos.'
<a lang="en" xml:lang="en" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Cen&amp;u='.$url.'" rel="nofollow">English</a>'.$medhjos.'
<a lang="af" xml:lang="af" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Caf&amp;u='.$url.'" rel="nofollow">Afrikaans</a>'.$medhjos.'  
<a lang="ar" xml:lang="ar" title="Araby" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Car&amp;u='.$url.'" rel="nofollow">العربية</a>'.$medhjos.'  
<a lang="be" xml:lang="be" title="Belaruskaya" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Cbe&amp;u='.$url.'" rel="nofollow">Беларуская</a>'.$medhjos.'  
<a lang="bg" xml:lang="bg" title="Bulgarski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Cbg&amp;u='.$url.'" rel="nofollow">Български</a>'.$medhjos.'  
<a lang="ca" xml:lang="ca" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Cca&amp;u='.$url.'" rel="nofollow">Català</a>'.$medhjos.'  
<a lang="cs" xml:lang="cs" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Ccs&amp;u='.$url.'" rel="nofollow">Česky</a>'.$medhjos.'  
<a lang="cy" xml:lang="cy" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Ccy&amp;u='.$url.'" rel="nofollow">Cymraeg</a>'.$medhjos.'  
<a lang="da" xml:lang="da" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Cda&amp;u='.$url.'" rel="nofollow">Dansk</a>'.$medhjos.'  
<a lang="de" xml:lang="de" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Cde&amp;u='.$url.'" rel="nofollow">Deutsch</a>'.$medhjos.'  
<a lang="et" xml:lang="et" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Cet&amp;u='.$url.'" rel="nofollow">Eesti</a>'.$medhjos.'  
<a lang="el" xml:lang="el" title="Ellenika" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Cel&amp;u='.$url.'" rel="nofollow">Ελληνικά</a>'.$medhjos.'  
<a lang="es" xml:lang="es" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Ces&amp;u='.$url.'" rel="nofollow">Español</a>'.$medhjos.'  
<a lang="fa" xml:lang="fa" title="Fārsī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Cfa&amp;u='.$url.'" rel="nofollow">فارسی</a>'.$medhjos.'  
<a lang="fr" xml:lang="fr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Cfr&amp;u='.$url.'" rel="nofollow">Français</a>'.$medhjos.'  
<a lang="ga" xml:lang="ga" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Cga&amp;u='.$url.'" rel="nofollow">Gaeilge</a>'.$medhjos.'  
<a lang="gl" xml:lang="gl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Cgl&amp;u='.$url.'" rel="nofollow">Galego</a>'.$medhjos.'  
<a lang="hi" xml:lang="hi" title="Hindī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Chi&amp;u='.$url.'" rel="nofollow">हिन्दी</a>'.$medhjos.'  
<a lang="hr" xml:lang="hr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Chr&amp;u='.$url.'" rel="nofollow">Hrvatski</a>'.$medhjos.'  
<a lang="id" xml:lang="id" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Cid&amp;u='.$url.'" rel="nofollow">Bahasa Indonesia</a>'.$medhjos.'  
<a lang="is" xml:lang="is" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Cis&amp;u='.$url.'" rel="nofollow">Íslenska</a>'.$medhjos.'  
<a lang="it" xml:lang="it" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Cit&amp;u='.$url.'" rel="nofollow">Italiano</a>'.$medhjos.'  
<a lang="he" xml:lang="he" title="‘Ivrit" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Che&amp;u='.$url.'" rel="nofollow">עברית</a>'.$medhjos.'  
<a lang="lv" xml:lang="lv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Clv&amp;u='.$url.'" rel="nofollow">Latviešu</a>'.$medhjos.'  
<a lang="lt" xml:lang="lt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Clt&amp;u='.$url.'" rel="nofollow">Lietuvių</a>'.$medhjos.'  
<a lang="ko" xml:lang="ko" title="Hangugeo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Cko&amp;u='.$url.'" rel="nofollow">한국어</a>'.$medhjos.'  
<a lang="hu" xml:lang="hu" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Chu&amp;u='.$url.'" rel="nofollow">Magyar</a>'.$medhjos.'  
<a lang="mk" xml:lang="mk" title="Makedonski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Cmk&amp;u='.$url.'" rel="nofollow">Македонски</a>'.$medhjos.'  
<a lang="ml" xml:lang="ml" title="Malayalam" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Cml&amp;u='.$url.'" rel="nofollow">മലയാളം</a>'.$medhjos.'  
<a lang="mt" xml:lang="mt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Cmt&amp;u='.$url.'" rel="nofollow">Malti</a>'.$medhjos.'  
<a lang="nl" xml:lang="nl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Cnl&amp;u='.$url.'" rel="nofollow">Nederlands</a>'.$medhjos.'  
<a lang="ja" xml:lang="ja" title="Nihongo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Cja&amp;u='.$url.'" rel="nofollow">日本語</a>'.$medhjos.'  
<a lang="no" xml:lang="no" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Cno&amp;u='.$url.'" rel="nofollow">Norsk (Bokmål)</a>'.$medhjos.'  
<a lang="pl" xml:lang="pl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Cpl&amp;u='.$url.'" rel="nofollow">Polski</a>'.$medhjos.'  
<a lang="pt" xml:lang="pt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Cpt&amp;u='.$url.'" rel="nofollow">Português</a>'.$medhjos.'  
<a lang="ro" xml:lang="ro" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Cro&amp;u='.$url.'" rel="nofollow">Română</a>'.$medhjos.'  
<a lang="ru" xml:lang="ru" title="Russkij" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Cru&amp;u='.$url.'" rel="nofollow">Русский</a>'.$medhjos.'  
<a lang="sk" xml:lang="sk" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Csk&amp;u='.$url.'" rel="nofollow">Slovenčina</a>'.$medhjos.'  
<a lang="sl" xml:lang="sl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Csl&amp;u='.$url.'" rel="nofollow">Slovenščina</a>'.$medhjos.'  
<a lang="sq" xml:lang="sq" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Csq&amp;u='.$url.'" rel="nofollow">Shqip</a>'.$medhjos.'  
<a lang="sr" xml:lang="sr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Csr&amp;u='.$url.'" rel="nofollow">Srpski</a>'.$medhjos.'  
<a lang="fi" xml:lang="fi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Cfi&amp;u='.$url.'" rel="nofollow">Suomi</a>'.$medhjos.'  
<a lang="sv" xml:lang="sv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Csv&amp;u='.$url.'" rel="nofollow">Svenska</a>'.$medhjos.'  
<a lang="sw" xml:lang="sw" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Csw&amp;u='.$url.'" rel="nofollow">Kiswahili</a>'.$medhjos.'  
<a lang="th" xml:lang="th" title="Thai" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Cth&amp;u='.$url.'" rel="nofollow">ไทย</a>'.$medhjos.'  
<a lang="tr" xml:lang="tr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Ctr&amp;u='.$url.'" rel="nofollow">Türkçe</a>'.$medhjos.'  
<a lang="uk" xml:lang="uk" title="Ukraïns’ka" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Cuk&amp;u='.$url.'" rel="nofollow">Українська</a>'.$medhjos.'  
<a lang="vi" xml:lang="vi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Cvi&amp;u='.$url.'" rel="nofollow">Tiếng Việt</a>'.$medhjos.'  
<a lang="yi" xml:lang="yi" title="Yidiš" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Cyi&amp;u='.$url.'" rel="nofollow">ייִדיש</a>.'.$medhjos.'  
<a lang="zh-CN" xml:lang="zh-CN" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Czh-CN&amp;u='.$url.'" rel="nofollow">中文</a> /
<a lang="zh-TW" xml:lang="zh-TW" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tl%7Czh-TW&amp;u='.$url.'" rel="nofollow">漢語</a>';
		$turkce = '<a lang="tr" xml:lang="tr" href="#">Türkçe</a>'.$medhjos.'
<a lang="en" xml:lang="en" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Cen&amp;u='.$url.'" rel="nofollow">English</a>'.$medhjos.'
<a lang="af" xml:lang="af" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Caf&amp;u='.$url.'" rel="nofollow">Afrikaans</a>'.$medhjos.'  
<a lang="ar" xml:lang="ar" title="Araby" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Car&amp;u='.$url.'" rel="nofollow">العربية</a>'.$medhjos.'  
<a lang="be" xml:lang="be" title="Belaruskaya" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Cbe&amp;u='.$url.'" rel="nofollow">Беларуская</a>'.$medhjos.'  
<a lang="bg" xml:lang="bg" title="Bulgarski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Cbg&amp;u='.$url.'" rel="nofollow">Български</a>'.$medhjos.'  
<a lang="ca" xml:lang="ca" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Cca&amp;u='.$url.'" rel="nofollow">Català</a>'.$medhjos.'  
<a lang="cs" xml:lang="cs" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Ccs&amp;u='.$url.'" rel="nofollow">Česky</a>'.$medhjos.'  
<a lang="cy" xml:lang="cy" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Ccy&amp;u='.$url.'" rel="nofollow">Cymraeg</a>'.$medhjos.'  
<a lang="da" xml:lang="da" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Cda&amp;u='.$url.'" rel="nofollow">Dansk</a>'.$medhjos.'  
<a lang="de" xml:lang="de" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Cde&amp;u='.$url.'" rel="nofollow">Deutsch</a>'.$medhjos.'  
<a lang="et" xml:lang="et" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Cet&amp;u='.$url.'" rel="nofollow">Eesti</a>'.$medhjos.'  
<a lang="el" xml:lang="el" title="Ellenika" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Cel&amp;u='.$url.'" rel="nofollow">Ελληνικά</a>'.$medhjos.'  
<a lang="es" xml:lang="es" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Ces&amp;u='.$url.'" rel="nofollow">Español</a>'.$medhjos.'  
<a lang="fa" xml:lang="fa" title="Fārsī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Cfa&amp;u='.$url.'" rel="nofollow">فارسی</a>'.$medhjos.'  
<a lang="fr" xml:lang="fr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Cfr&amp;u='.$url.'" rel="nofollow">Français</a>'.$medhjos.'  
<a lang="ga" xml:lang="ga" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Cga&amp;u='.$url.'" rel="nofollow">Gaeilge</a>'.$medhjos.'  
<a lang="gl" xml:lang="gl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Cgl&amp;u='.$url.'" rel="nofollow">Galego</a>'.$medhjos.'  
<a lang="hi" xml:lang="hi" title="Hindī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Chi&amp;u='.$url.'" rel="nofollow">हिन्दी</a>'.$medhjos.'  
<a lang="hr" xml:lang="hr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Chr&amp;u='.$url.'" rel="nofollow">Hrvatski</a>'.$medhjos.'  
<a lang="id" xml:lang="id" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Cid&amp;u='.$url.'" rel="nofollow">Bahasa Indonesia</a>'.$medhjos.'  
<a lang="is" xml:lang="is" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Cis&amp;u='.$url.'" rel="nofollow">Íslenska</a>'.$medhjos.'  
<a lang="it" xml:lang="it" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Cit&amp;u='.$url.'" rel="nofollow">Italiano</a>'.$medhjos.'  
<a lang="he" xml:lang="he" title="‘Ivrit" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Che&amp;u='.$url.'" rel="nofollow">עברית</a>'.$medhjos.'  
<a lang="lv" xml:lang="lv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Clv&amp;u='.$url.'" rel="nofollow">Latviešu</a>'.$medhjos.'  
<a lang="lt" xml:lang="lt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Clt&amp;u='.$url.'" rel="nofollow">Lietuvių</a>'.$medhjos.'  
<a lang="ko" xml:lang="ko" title="Hangugeo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Cko&amp;u='.$url.'" rel="nofollow">한국어</a>'.$medhjos.'  
<a lang="hu" xml:lang="hu" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Chu&amp;u='.$url.'" rel="nofollow">Magyar</a>'.$medhjos.'  
<a lang="mk" xml:lang="mk" title="Makedonski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Cmk&amp;u='.$url.'" rel="nofollow">Македонски</a>'.$medhjos.'  
<a lang="ml" xml:lang="ml" title="Malayalam" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Cml&amp;u='.$url.'" rel="nofollow">മലയാളം</a>'.$medhjos.'  
<a lang="mt" xml:lang="mt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Cmt&amp;u='.$url.'" rel="nofollow">Malti</a>'.$medhjos.'  
<a lang="nl" xml:lang="nl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Cnl&amp;u='.$url.'" rel="nofollow">Nederlands</a>'.$medhjos.'  
<a lang="ja" xml:lang="ja" title="Nihongo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Cja&amp;u='.$url.'" rel="nofollow">日本語</a>'.$medhjos.'  
<a lang="no" xml:lang="no" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Cno&amp;u='.$url.'" rel="nofollow">Norsk (Bokmål)</a>'.$medhjos.'  
<a lang="pl" xml:lang="pl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Cpl&amp;u='.$url.'" rel="nofollow">Polski</a>'.$medhjos.'  
<a lang="pt" xml:lang="pt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Cpt&amp;u='.$url.'" rel="nofollow">Português</a>'.$medhjos.'  
<a lang="ro" xml:lang="ro" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Cro&amp;u='.$url.'" rel="nofollow">Română</a>'.$medhjos.'  
<a lang="ru" xml:lang="ru" title="Russkij" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Cru&amp;u='.$url.'" rel="nofollow">Русский</a>'.$medhjos.'  
<a lang="sk" xml:lang="sk" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Csk&amp;u='.$url.'" rel="nofollow">Slovenčina</a>'.$medhjos.'  
<a lang="sl" xml:lang="sl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Csl&amp;u='.$url.'" rel="nofollow">Slovenščina</a>'.$medhjos.'  
<a lang="sq" xml:lang="sq" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Csq&amp;u='.$url.'" rel="nofollow">Shqip</a>'.$medhjos.'  
<a lang="sr" xml:lang="sr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Csr&amp;u='.$url.'" rel="nofollow">Srpski</a>'.$medhjos.'  
<a lang="fi" xml:lang="fi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Cfi&amp;u='.$url.'" rel="nofollow">Suomi</a>'.$medhjos.'  
<a lang="sv" xml:lang="sv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Csv&amp;u='.$url.'" rel="nofollow">Svenska</a>'.$medhjos.'  
<a lang="sw" xml:lang="sw" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Csw&amp;u='.$url.'" rel="nofollow">Kiswahili</a>'.$medhjos.'  
<a lang="th" xml:lang="th" title="Thai" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Cth&amp;u='.$url.'" rel="nofollow">ไทย</a>'.$medhjos.'  
<a lang="tl" xml:lang="tl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Ctl&amp;u='.$url.'" rel="nofollow">Tagalog</a>'.$medhjos.'  
<a lang="uk" xml:lang="uk" title="Ukraïns’ka" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Cuk&amp;u='.$url.'" rel="nofollow">Українська</a>'.$medhjos.'  
<a lang="vi" xml:lang="vi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Cvi&amp;u='.$url.'" rel="nofollow">Tiếng Việt</a>'.$medhjos.'  
<a lang="yi" xml:lang="yi" title="Yidiš" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Cyi&amp;u='.$url.'" rel="nofollow">ייִדיש</a>.'.$medhjos.'  
<a lang="zh-CN" xml:lang="zh-CN" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Czh-CN&amp;u='.$url.'" rel="nofollow">中文</a> /
<a lang="zh-TW" xml:lang="zh-TW" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=tr%7Czh-TW&amp;u='.$url.'" rel="nofollow">漢語</a>';
		$ukrainska = '<a lang="uk" xml:lang="uk" href="#">Українська</a>'.$medhjos.'
<a lang="en" xml:lang="en" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Cen&amp;u='.$url.'" rel="nofollow">English</a>'.$medhjos.'
<a lang="af" xml:lang="af" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Caf&amp;u='.$url.'" rel="nofollow">Afrikaans</a>'.$medhjos.'  
<a lang="ar" xml:lang="ar" title="Araby" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Car&amp;u='.$url.'" rel="nofollow">العربية</a>'.$medhjos.'  
<a lang="be" xml:lang="be" title="Belaruskaya" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Cbe&amp;u='.$url.'" rel="nofollow">Беларуская</a>'.$medhjos.'  
<a lang="bg" xml:lang="bg" title="Bulgarski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Cbg&amp;u='.$url.'" rel="nofollow">Български</a>'.$medhjos.'  
<a lang="ca" xml:lang="ca" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Cca&amp;u='.$url.'" rel="nofollow">Català</a>'.$medhjos.'  
<a lang="cs" xml:lang="cs" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Ccs&amp;u='.$url.'" rel="nofollow">Česky</a>'.$medhjos.'  
<a lang="cy" xml:lang="cy" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Ccy&amp;u='.$url.'" rel="nofollow">Cymraeg</a>'.$medhjos.'  
<a lang="da" xml:lang="da" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Cda&amp;u='.$url.'" rel="nofollow">Dansk</a>'.$medhjos.'  
<a lang="de" xml:lang="de" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Cde&amp;u='.$url.'" rel="nofollow">Deutsch</a>'.$medhjos.'  
<a lang="et" xml:lang="et" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Cet&amp;u='.$url.'" rel="nofollow">Eesti</a>'.$medhjos.'  
<a lang="el" xml:lang="el" title="Ellenika" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Cel&amp;u='.$url.'" rel="nofollow">Ελληνικά</a>'.$medhjos.'  
<a lang="es" xml:lang="es" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Ces&amp;u='.$url.'" rel="nofollow">Español</a>'.$medhjos.'  
<a lang="fa" xml:lang="fa" title="Fārsī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Cfa&amp;u='.$url.'" rel="nofollow">فارسی</a>'.$medhjos.'  
<a lang="fr" xml:lang="fr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Cfr&amp;u='.$url.'" rel="nofollow">Français</a>'.$medhjos.'  
<a lang="ga" xml:lang="ga" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Cga&amp;u='.$url.'" rel="nofollow">Gaeilge</a>'.$medhjos.'  
<a lang="gl" xml:lang="gl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Cgl&amp;u='.$url.'" rel="nofollow">Galego</a>'.$medhjos.'  
<a lang="hi" xml:lang="hi" title="Hindī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Chi&amp;u='.$url.'" rel="nofollow">हिन्दी</a>'.$medhjos.'  
<a lang="hr" xml:lang="hr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Chr&amp;u='.$url.'" rel="nofollow">Hrvatski</a>'.$medhjos.'  
<a lang="id" xml:lang="id" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Cid&amp;u='.$url.'" rel="nofollow">Bahasa Indonesia</a>'.$medhjos.'  
<a lang="is" xml:lang="is" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Cis&amp;u='.$url.'" rel="nofollow">Íslenska</a>'.$medhjos.'  
<a lang="it" xml:lang="it" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Cit&amp;u='.$url.'" rel="nofollow">Italiano</a>'.$medhjos.'  
<a lang="he" xml:lang="he" title="‘Ivrit" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Che&amp;u='.$url.'" rel="nofollow">עברית</a>'.$medhjos.'  
<a lang="lv" xml:lang="lv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Clv&amp;u='.$url.'" rel="nofollow">Latviešu</a>'.$medhjos.'  
<a lang="lt" xml:lang="lt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Clt&amp;u='.$url.'" rel="nofollow">Lietuvių</a>'.$medhjos.'  
<a lang="ko" xml:lang="ko" title="Hangugeo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Cko&amp;u='.$url.'" rel="nofollow">한국어</a>'.$medhjos.'  
<a lang="hu" xml:lang="hu" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Chu&amp;u='.$url.'" rel="nofollow">Magyar</a>'.$medhjos.'  
<a lang="mk" xml:lang="mk" title="Makedonski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Cmk&amp;u='.$url.'" rel="nofollow">Македонски</a>'.$medhjos.'  
<a lang="ml" xml:lang="ml" title="Malayalam" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Cml&amp;u='.$url.'" rel="nofollow">മലയാളം</a>'.$medhjos.'  
<a lang="mt" xml:lang="mt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Cmt&amp;u='.$url.'" rel="nofollow">Malti</a>'.$medhjos.'  
<a lang="nl" xml:lang="nl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Cnl&amp;u='.$url.'" rel="nofollow">Nederlands</a>'.$medhjos.'  
<a lang="ja" xml:lang="ja" title="Nihongo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Cja&amp;u='.$url.'" rel="nofollow">日本語</a>'.$medhjos.'  
<a lang="no" xml:lang="no" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Cno&amp;u='.$url.'" rel="nofollow">Norsk (Bokmål)</a>'.$medhjos.'  
<a lang="pl" xml:lang="pl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Cpl&amp;u='.$url.'" rel="nofollow">Polski</a>'.$medhjos.'  
<a lang="pt" xml:lang="pt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Cpt&amp;u='.$url.'" rel="nofollow">Português</a>'.$medhjos.'  
<a lang="ro" xml:lang="ro" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Cro&amp;u='.$url.'" rel="nofollow">Română</a>'.$medhjos.'  
<a lang="ru" xml:lang="ru" title="Russkij" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Cru&amp;u='.$url.'" rel="nofollow">Русский</a>'.$medhjos.'  
<a lang="sk" xml:lang="sk" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Csk&amp;u='.$url.'" rel="nofollow">Slovenčina</a>'.$medhjos.'  
<a lang="sl" xml:lang="sl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Csl&amp;u='.$url.'" rel="nofollow">Slovenščina</a>'.$medhjos.'  
<a lang="sq" xml:lang="sq" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Csq&amp;u='.$url.'" rel="nofollow">Shqip</a>'.$medhjos.'  
<a lang="sr" xml:lang="sr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Csr&amp;u='.$url.'" rel="nofollow">Srpski</a>'.$medhjos.'  
<a lang="fi" xml:lang="fi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Cfi&amp;u='.$url.'" rel="nofollow">Suomi</a>'.$medhjos.'  
<a lang="sv" xml:lang="sv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Csv&amp;u='.$url.'" rel="nofollow">Svenska</a>'.$medhjos.'  
<a lang="sw" xml:lang="sw" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Csw&amp;u='.$url.'" rel="nofollow">Kiswahili</a>'.$medhjos.'  
<a lang="th" xml:lang="th" title="Thai" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Cth&amp;u='.$url.'" rel="nofollow">ไทย</a>'.$medhjos.'  
<a lang="tl" xml:lang="tl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Ctl&amp;u='.$url.'" rel="nofollow">Tagalog</a>'.$medhjos.'  
<a lang="tr" xml:lang="tr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Ctr&amp;u='.$url.'" rel="nofollow">Türkçe</a>'.$medhjos.'  
<a lang="vi" xml:lang="vi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Cvi&amp;u='.$url.'" rel="nofollow">Tiếng Việt</a>'.$medhjos.'  
<a lang="yi" xml:lang="yi" title="Yidiš" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Cyi&amp;u='.$url.'" rel="nofollow">ייִדיש</a>.'.$medhjos.'  
<a lang="zh-CN" xml:lang="zh-CN" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Czh-CN&amp;u='.$url.'" rel="nofollow">中文</a> /
<a lang="zh-TW" xml:lang="zh-TW" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=uk%7Czh-TW&amp;u='.$url.'" rel="nofollow">漢語</a>';
		$viet = '<a lang="vi" xml:lang="vi" href="#">Tiếng Việt</a>'.$medhjos.'
<a lang="en" xml:lang="en" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Cen&amp;u='.$url.'" rel="nofollow">English</a>'.$medhjos.'
<a lang="af" xml:lang="af" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Caf&amp;u='.$url.'" rel="nofollow">Afrikaans</a>'.$medhjos.'  
<a lang="ar" xml:lang="ar" title="Araby" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Car&amp;u='.$url.'" rel="nofollow">العربية</a>'.$medhjos.'  
<a lang="be" xml:lang="be" title="Belaruskaya" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Cbe&amp;u='.$url.'" rel="nofollow">Беларуская</a>'.$medhjos.'  
<a lang="bg" xml:lang="bg" title="Bulgarski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Cbg&amp;u='.$url.'" rel="nofollow">Български</a>'.$medhjos.'  
<a lang="ca" xml:lang="ca" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Cca&amp;u='.$url.'" rel="nofollow">Català</a>'.$medhjos.'  
<a lang="cs" xml:lang="cs" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Ccs&amp;u='.$url.'" rel="nofollow">Česky</a>'.$medhjos.'  
<a lang="cy" xml:lang="cy" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Ccy&amp;u='.$url.'" rel="nofollow">Cymraeg</a>'.$medhjos.'  
<a lang="da" xml:lang="da" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Cda&amp;u='.$url.'" rel="nofollow">Dansk</a>'.$medhjos.'  
<a lang="de" xml:lang="de" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Cde&amp;u='.$url.'" rel="nofollow">Deutsch</a>'.$medhjos.'  
<a lang="et" xml:lang="et" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Cet&amp;u='.$url.'" rel="nofollow">Eesti</a>'.$medhjos.'  
<a lang="el" xml:lang="el" title="Ellenika" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Cel&amp;u='.$url.'" rel="nofollow">Ελληνικά</a>'.$medhjos.'  
<a lang="es" xml:lang="es" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Ces&amp;u='.$url.'" rel="nofollow">Español</a>'.$medhjos.'  
<a lang="fa" xml:lang="fa" title="Fārsī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Cfa&amp;u='.$url.'" rel="nofollow">فارسی</a>'.$medhjos.'  
<a lang="fr" xml:lang="fr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Cfr&amp;u='.$url.'" rel="nofollow">Français</a>'.$medhjos.'  
<a lang="ga" xml:lang="ga" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Cga&amp;u='.$url.'" rel="nofollow">Gaeilge</a>'.$medhjos.'  
<a lang="gl" xml:lang="gl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Cgl&amp;u='.$url.'" rel="nofollow">Galego</a>'.$medhjos.'  
<a lang="hi" xml:lang="hi" title="Hindī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Chi&amp;u='.$url.'" rel="nofollow">हिन्दी</a>'.$medhjos.'  
<a lang="hr" xml:lang="hr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Chr&amp;u='.$url.'" rel="nofollow">Hrvatski</a>'.$medhjos.'  
<a lang="id" xml:lang="id" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Cid&amp;u='.$url.'" rel="nofollow">Bahasa Indonesia</a>'.$medhjos.'  
<a lang="is" xml:lang="is" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Cis&amp;u='.$url.'" rel="nofollow">Íslenska</a>'.$medhjos.'  
<a lang="it" xml:lang="it" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Cit&amp;u='.$url.'" rel="nofollow">Italiano</a>'.$medhjos.'  
<a lang="he" xml:lang="he" title="‘Ivrit" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Che&amp;u='.$url.'" rel="nofollow">עברית</a>'.$medhjos.'  
<a lang="lv" xml:lang="lv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Clv&amp;u='.$url.'" rel="nofollow">Latviešu</a>'.$medhjos.'  
<a lang="lt" xml:lang="lt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Clt&amp;u='.$url.'" rel="nofollow">Lietuvių</a>'.$medhjos.'  
<a lang="ko" xml:lang="ko" title="Hangugeo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Cko&amp;u='.$url.'" rel="nofollow">한국어</a>'.$medhjos.'  
<a lang="hu" xml:lang="hu" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Chu&amp;u='.$url.'" rel="nofollow">Magyar</a>'.$medhjos.'  
<a lang="mk" xml:lang="mk" title="Makedonski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Cmk&amp;u='.$url.'" rel="nofollow">Македонски</a>'.$medhjos.'  
<a lang="ml" xml:lang="ml" title="Malayalam" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Cml&amp;u='.$url.'" rel="nofollow">മലയാളം</a>'.$medhjos.'  
<a lang="mt" xml:lang="mt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Cmt&amp;u='.$url.'" rel="nofollow">Malti</a>'.$medhjos.'  
<a lang="nl" xml:lang="nl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Cnl&amp;u='.$url.'" rel="nofollow">Nederlands</a>'.$medhjos.'  
<a lang="ja" xml:lang="ja" title="Nihongo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Cja&amp;u='.$url.'" rel="nofollow">日本語</a>'.$medhjos.'  
<a lang="no" xml:lang="no" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Cno&amp;u='.$url.'" rel="nofollow">Norsk (Bokmål)</a>'.$medhjos.'  
<a lang="pl" xml:lang="pl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Cpl&amp;u='.$url.'" rel="nofollow">Polski</a>'.$medhjos.'  
<a lang="pt" xml:lang="pt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Cpt&amp;u='.$url.'" rel="nofollow">Português</a>'.$medhjos.'  
<a lang="ro" xml:lang="ro" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Cro&amp;u='.$url.'" rel="nofollow">Română</a>'.$medhjos.'  
<a lang="ru" xml:lang="ru" title="Russkij" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Cru&amp;u='.$url.'" rel="nofollow">Русский</a>'.$medhjos.'  
<a lang="sk" xml:lang="sk" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Csk&amp;u='.$url.'" rel="nofollow">Slovenčina</a>'.$medhjos.'  
<a lang="sl" xml:lang="sl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Csl&amp;u='.$url.'" rel="nofollow">Slovenščina</a>'.$medhjos.'  
<a lang="sq" xml:lang="sq" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Csq&amp;u='.$url.'" rel="nofollow">Shqip</a>'.$medhjos.'  
<a lang="sr" xml:lang="sr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Csr&amp;u='.$url.'" rel="nofollow">Srpski</a>'.$medhjos.'  
<a lang="fi" xml:lang="fi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Cfi&amp;u='.$url.'" rel="nofollow">Suomi</a>'.$medhjos.'  
<a lang="sv" xml:lang="sv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Csv&amp;u='.$url.'" rel="nofollow">Svenska</a>'.$medhjos.'  
<a lang="sw" xml:lang="sw" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Csw&amp;u='.$url.'" rel="nofollow">Kiswahili</a>'.$medhjos.'  
<a lang="th" xml:lang="th" title="Thai" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Cth&amp;u='.$url.'" rel="nofollow">ไทย</a>'.$medhjos.'  
<a lang="tl" xml:lang="tl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Ctl&amp;u='.$url.'" rel="nofollow">Tagalog</a>'.$medhjos.'  
<a lang="tr" xml:lang="tr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Ctr&amp;u='.$url.'" rel="nofollow">Türkçe</a>'.$medhjos.'  
<a lang="uk" xml:lang="uk" title="Ukraïns’ka" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Cuk&amp;u='.$url.'" rel="nofollow">Українська</a>'.$medhjos.'  
<a lang="yi" xml:lang="yi" title="Yidiš" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Cyi&amp;u='.$url.'" rel="nofollow">ייִדיש</a>.'.$medhjos.'  
<a lang="zh-CN" xml:lang="zh-CN" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Czh-CN&amp;u='.$url.'" rel="nofollow">中文</a> /
<a lang="zh-TW" xml:lang="zh-TW" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=vi%7Czh-TW&amp;u='.$url.'" rel="nofollow">漢語</a>';
		$yidis = '<a lang="yi" xml:lang="yi" title="Yidiš" href="#">ייִדיש</a>'.$medhjos.'
<a lang="en" xml:lang="en" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Cen&amp;u='.$url.'" rel="nofollow">English</a>'.$medhjos.'
<a lang="af" xml:lang="af" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Caf&amp;u='.$url.'" rel="nofollow">Afrikaans</a>'.$medhjos.'  
<a lang="ar" xml:lang="ar" title="Araby" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Car&amp;u='.$url.'" rel="nofollow">العربية</a>'.$medhjos.'  
<a lang="be" xml:lang="be" title="Belaruskaya" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Cbe&amp;u='.$url.'" rel="nofollow">Беларуская</a>'.$medhjos.'  
<a lang="bg" xml:lang="bg" title="Bulgarski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Cbg&amp;u='.$url.'" rel="nofollow">Български</a>'.$medhjos.'  
<a lang="ca" xml:lang="ca" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Cca&amp;u='.$url.'" rel="nofollow">Català</a>'.$medhjos.'  
<a lang="cs" xml:lang="cs" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Ccs&amp;u='.$url.'" rel="nofollow">Česky</a>'.$medhjos.'  
<a lang="cy" xml:lang="cy" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Ccy&amp;u='.$url.'" rel="nofollow">Cymraeg</a>'.$medhjos.'  
<a lang="da" xml:lang="da" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Cda&amp;u='.$url.'" rel="nofollow">Dansk</a>'.$medhjos.'  
<a lang="de" xml:lang="de" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Cde&amp;u='.$url.'" rel="nofollow">Deutsch</a>'.$medhjos.'  
<a lang="et" xml:lang="et" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Cet&amp;u='.$url.'" rel="nofollow">Eesti</a>'.$medhjos.'  
<a lang="el" xml:lang="el" title="Ellenika" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Cel&amp;u='.$url.'" rel="nofollow">Ελληνικά</a>'.$medhjos.'  
<a lang="es" xml:lang="es" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Ces&amp;u='.$url.'" rel="nofollow">Español</a>'.$medhjos.'  
<a lang="fa" xml:lang="fa" title="Fārsī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Cfa&amp;u='.$url.'" rel="nofollow">فارسی</a>'.$medhjos.'  
<a lang="fr" xml:lang="fr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Cfr&amp;u='.$url.'" rel="nofollow">Français</a>'.$medhjos.'  
<a lang="ga" xml:lang="ga" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Cga&amp;u='.$url.'" rel="nofollow">Gaeilge</a>'.$medhjos.'  
<a lang="gl" xml:lang="gl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Cgl&amp;u='.$url.'" rel="nofollow">Galego</a>'.$medhjos.'  
<a lang="hi" xml:lang="hi" title="Hindī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Chi&amp;u='.$url.'" rel="nofollow">हिन्दी</a>'.$medhjos.'  
<a lang="hr" xml:lang="hr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Chr&amp;u='.$url.'" rel="nofollow">Hrvatski</a>'.$medhjos.'  
<a lang="id" xml:lang="id" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Cid&amp;u='.$url.'" rel="nofollow">Bahasa Indonesia</a>'.$medhjos.'  
<a lang="is" xml:lang="is" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Cis&amp;u='.$url.'" rel="nofollow">Íslenska</a>'.$medhjos.'  
<a lang="it" xml:lang="it" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Cit&amp;u='.$url.'" rel="nofollow">Italiano</a>'.$medhjos.'  
<a lang="he" xml:lang="he" title="‘Ivrit" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Che&amp;u='.$url.'" rel="nofollow">עברית</a>'.$medhjos.'  
<a lang="lv" xml:lang="lv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Clv&amp;u='.$url.'" rel="nofollow">Latviešu</a>'.$medhjos.'  
<a lang="lt" xml:lang="lt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Clt&amp;u='.$url.'" rel="nofollow">Lietuvių</a>'.$medhjos.'  
<a lang="ko" xml:lang="ko" title="Hangugeo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Cko&amp;u='.$url.'" rel="nofollow">한국어</a>'.$medhjos.'  
<a lang="hu" xml:lang="hu" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Chu&amp;u='.$url.'" rel="nofollow">Magyar</a>'.$medhjos.'  
<a lang="mk" xml:lang="mk" title="Makedonski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Cmk&amp;u='.$url.'" rel="nofollow">Македонски</a>'.$medhjos.'  
<a lang="ml" xml:lang="ml" title="Malayalam" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Cml&amp;u='.$url.'" rel="nofollow">മലയാളം</a>'.$medhjos.'  
<a lang="mt" xml:lang="mt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Cmt&amp;u='.$url.'" rel="nofollow">Malti</a>'.$medhjos.'  
<a lang="nl" xml:lang="nl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Cnl&amp;u='.$url.'" rel="nofollow">Nederlands</a>'.$medhjos.'  
<a lang="ja" xml:lang="ja" title="Nihongo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Cja&amp;u='.$url.'" rel="nofollow">日本語</a>'.$medhjos.'  
<a lang="no" xml:lang="no" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Cno&amp;u='.$url.'" rel="nofollow">Norsk (Bokmål)</a>'.$medhjos.'  
<a lang="pl" xml:lang="pl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Cpl&amp;u='.$url.'" rel="nofollow">Polski</a>'.$medhjos.'  
<a lang="pt" xml:lang="pt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Cpt&amp;u='.$url.'" rel="nofollow">Português</a>'.$medhjos.'  
<a lang="ro" xml:lang="ro" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Cro&amp;u='.$url.'" rel="nofollow">Română</a>'.$medhjos.'  
<a lang="ru" xml:lang="ru" title="Russkij" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Cru&amp;u='.$url.'" rel="nofollow">Русский</a>'.$medhjos.'  
<a lang="sk" xml:lang="sk" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Csk&amp;u='.$url.'" rel="nofollow">Slovenčina</a>'.$medhjos.'  
<a lang="sl" xml:lang="sl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Csl&amp;u='.$url.'" rel="nofollow">Slovenščina</a>'.$medhjos.'  
<a lang="sq" xml:lang="sq" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Csq&amp;u='.$url.'" rel="nofollow">Shqip</a>'.$medhjos.'  
<a lang="sr" xml:lang="sr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Csr&amp;u='.$url.'" rel="nofollow">Srpski</a>'.$medhjos.'  
<a lang="fi" xml:lang="fi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Cfi&amp;u='.$url.'" rel="nofollow">Suomi</a>'.$medhjos.'  
<a lang="sv" xml:lang="sv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Csv&amp;u='.$url.'" rel="nofollow">Svenska</a>'.$medhjos.'  
<a lang="sw" xml:lang="sw" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Csw&amp;u='.$url.'" rel="nofollow">Kiswahili</a>'.$medhjos.'  
<a lang="th" xml:lang="th" title="Thai" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Cth&amp;u='.$url.'" rel="nofollow">ไทย</a>'.$medhjos.'  
<a lang="tl" xml:lang="tl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Ctl&amp;u='.$url.'" rel="nofollow">Tagalog</a>'.$medhjos.'  
<a lang="tr" xml:lang="tr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Ctr&amp;u='.$url.'" rel="nofollow">Türkçe</a>'.$medhjos.'  
<a lang="uk" xml:lang="uk" title="Ukraïns’ka" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Cuk&amp;u='.$url.'" rel="nofollow">Українська</a>'.$medhjos.'  
<a lang="vi" xml:lang="vi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Cvi&amp;u='.$url.'" rel="nofollow">Tiếng Việt</a>'.$medhjos.'  
<a lang="zh-CN" xml:lang="zh-CN" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Czh-CN&amp;u='.$url.'" rel="nofollow">中文</a> /
<a lang="zh-TW" xml:lang="zh-TW" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=yi%7Czh-TW&amp;u='.$url.'" rel="nofollow">漢語</a>';
		$zhongwen = '<a lang="zh-CN" xml:lang="zh-CN" href="#">中文</a>'.$medhjos.'
<a lang="en" xml:lang="en" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Cen&amp;u='.$url.'" rel="nofollow">English</a>'.$medhjos.'
<a lang="af" xml:lang="af" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Caf&amp;u='.$url.'" rel="nofollow">Afrikaans</a>'.$medhjos.'  
<a lang="ar" xml:lang="ar" title="Araby" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Car&amp;u='.$url.'" rel="nofollow">العربية</a>'.$medhjos.'  
<a lang="be" xml:lang="be" title="Belaruskaya" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Cbe&amp;u='.$url.'" rel="nofollow">Беларуская</a>'.$medhjos.'  
<a lang="bg" xml:lang="bg" title="Bulgarski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Cbg&amp;u='.$url.'" rel="nofollow">Български</a>'.$medhjos.'  
<a lang="ca" xml:lang="ca" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Cca&amp;u='.$url.'" rel="nofollow">Català</a>'.$medhjos.'  
<a lang="cs" xml:lang="cs" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Ccs&amp;u='.$url.'" rel="nofollow">Česky</a>'.$medhjos.'  
<a lang="cy" xml:lang="cy" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Ccy&amp;u='.$url.'" rel="nofollow">Cymraeg</a>'.$medhjos.'  
<a lang="da" xml:lang="da" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Cda&amp;u='.$url.'" rel="nofollow">Dansk</a>'.$medhjos.'  
<a lang="de" xml:lang="de" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Cde&amp;u='.$url.'" rel="nofollow">Deutsch</a>'.$medhjos.'  
<a lang="et" xml:lang="et" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Cet&amp;u='.$url.'" rel="nofollow">Eesti</a>'.$medhjos.'  
<a lang="el" xml:lang="el" title="Ellenika" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Cel&amp;u='.$url.'" rel="nofollow">Ελληνικά</a>'.$medhjos.'  
<a lang="es" xml:lang="es" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Ces&amp;u='.$url.'" rel="nofollow">Español</a>'.$medhjos.'  
<a lang="fa" xml:lang="fa" title="Fārsī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Cfa&amp;u='.$url.'" rel="nofollow">فارسی</a>'.$medhjos.'  
<a lang="fr" xml:lang="fr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Cfr&amp;u='.$url.'" rel="nofollow">Français</a>'.$medhjos.'  
<a lang="ga" xml:lang="ga" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Cga&amp;u='.$url.'" rel="nofollow">Gaeilge</a>'.$medhjos.'  
<a lang="gl" xml:lang="gl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Cgl&amp;u='.$url.'" rel="nofollow">Galego</a>'.$medhjos.'  
<a lang="hi" xml:lang="hi" title="Hindī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Chi&amp;u='.$url.'" rel="nofollow">हिन्दी</a>'.$medhjos.'  
<a lang="hr" xml:lang="hr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Chr&amp;u='.$url.'" rel="nofollow">Hrvatski</a>'.$medhjos.'  
<a lang="id" xml:lang="id" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Cid&amp;u='.$url.'" rel="nofollow">Bahasa Indonesia</a>'.$medhjos.'  
<a lang="is" xml:lang="is" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Cis&amp;u='.$url.'" rel="nofollow">Íslenska</a>'.$medhjos.'  
<a lang="it" xml:lang="it" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Cit&amp;u='.$url.'" rel="nofollow">Italiano</a>'.$medhjos.'  
<a lang="he" xml:lang="he" title="‘Ivrit" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Che&amp;u='.$url.'" rel="nofollow">עברית</a>'.$medhjos.'  
<a lang="lv" xml:lang="lv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Clv&amp;u='.$url.'" rel="nofollow">Latviešu</a>'.$medhjos.'  
<a lang="lt" xml:lang="lt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Clt&amp;u='.$url.'" rel="nofollow">Lietuvių</a>'.$medhjos.'  
<a lang="ko" xml:lang="ko" title="Hangugeo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Cko&amp;u='.$url.'" rel="nofollow">한국어</a>'.$medhjos.'  
<a lang="hu" xml:lang="hu" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Chu&amp;u='.$url.'" rel="nofollow">Magyar</a>'.$medhjos.'  
<a lang="mk" xml:lang="mk" title="Makedonski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Cmk&amp;u='.$url.'" rel="nofollow">Македонски</a>'.$medhjos.'  
<a lang="ml" xml:lang="ml" title="Malayalam" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Cml&amp;u='.$url.'" rel="nofollow">മലയാളം</a>'.$medhjos.'  
<a lang="mt" xml:lang="mt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Cmt&amp;u='.$url.'" rel="nofollow">Malti</a>'.$medhjos.'  
<a lang="nl" xml:lang="nl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Cnl&amp;u='.$url.'" rel="nofollow">Nederlands</a>'.$medhjos.'  
<a lang="ja" xml:lang="ja" title="Nihongo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Cja&amp;u='.$url.'" rel="nofollow">日本語</a>'.$medhjos.'  
<a lang="no" xml:lang="no" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Cno&amp;u='.$url.'" rel="nofollow">Norsk (Bokmål)</a>'.$medhjos.'  
<a lang="pl" xml:lang="pl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Cpl&amp;u='.$url.'" rel="nofollow">Polski</a>'.$medhjos.'  
<a lang="pt" xml:lang="pt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Cpt&amp;u='.$url.'" rel="nofollow">Português</a>'.$medhjos.'  
<a lang="ro" xml:lang="ro" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Cro&amp;u='.$url.'" rel="nofollow">Română</a>'.$medhjos.'  
<a lang="ru" xml:lang="ru" title="Russkij" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Cru&amp;u='.$url.'" rel="nofollow">Русский</a>'.$medhjos.'  
<a lang="sk" xml:lang="sk" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Csk&amp;u='.$url.'" rel="nofollow">Slovenčina</a>'.$medhjos.'  
<a lang="sl" xml:lang="sl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Csl&amp;u='.$url.'" rel="nofollow">Slovenščina</a>'.$medhjos.'  
<a lang="sq" xml:lang="sq" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Csq&amp;u='.$url.'" rel="nofollow">Shqip</a>'.$medhjos.'  
<a lang="sr" xml:lang="sr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Csr&amp;u='.$url.'" rel="nofollow">Srpski</a>'.$medhjos.'  
<a lang="fi" xml:lang="fi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Cfi&amp;u='.$url.'" rel="nofollow">Suomi</a>'.$medhjos.'  
<a lang="sv" xml:lang="sv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Csv&amp;u='.$url.'" rel="nofollow">Svenska</a>'.$medhjos.'  
<a lang="sw" xml:lang="sw" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Csw&amp;u='.$url.'" rel="nofollow">Kiswahili</a>'.$medhjos.'  
<a lang="th" xml:lang="th" title="Thai" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Cth&amp;u='.$url.'" rel="nofollow">ไทย</a>'.$medhjos.'  
<a lang="tl" xml:lang="tl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Ctl&amp;u='.$url.'" rel="nofollow">Tagalog</a>'.$medhjos.'  
<a lang="tr" xml:lang="tr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Ctr&amp;u='.$url.'" rel="nofollow">Türkçe</a>'.$medhjos.'  
<a lang="uk" xml:lang="uk" title="Ukraïns’ka" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Cuk&amp;u='.$url.'" rel="nofollow">Українська</a>'.$medhjos.'  
<a lang="vi" xml:lang="vi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Cvi&amp;u='.$url.'" rel="nofollow">Tiếng Việt</a>'.$medhjos.'  
<a lang="yi" xml:lang="yi" title="Yidiš" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Cyi&amp;u='.$url.'" rel="nofollow">ייִדיש</a>.'.$medhjos.'  
<a lang="zh-TW" xml:lang="zh-TW" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-CN%7Czh-TW&amp;u='.$url.'" rel="nofollow">漢語</a>';
		$zhongwent = '<a lang="zh-TW" xml:lang="zh-TW" href="#">漢語</a>'.$medhjos.'
<a lang="en" xml:lang="en" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Cen&amp;u='.$url.'" rel="nofollow">English</a>'.$medhjos.'
<a lang="af" xml:lang="af" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Caf&amp;u='.$url.'" rel="nofollow">Afrikaans</a>'.$medhjos.'  
<a lang="ar" xml:lang="ar" title="Araby" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Car&amp;u='.$url.'" rel="nofollow">العربية</a>'.$medhjos.'  
<a lang="be" xml:lang="be" title="Belaruskaya" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Cbe&amp;u='.$url.'" rel="nofollow">Беларуская</a>'.$medhjos.'  
<a lang="bg" xml:lang="bg" title="Bulgarski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Cbg&amp;u='.$url.'" rel="nofollow">Български</a>'.$medhjos.'  
<a lang="ca" xml:lang="ca" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Cca&amp;u='.$url.'" rel="nofollow">Català</a>'.$medhjos.'  
<a lang="cs" xml:lang="cs" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Ccs&amp;u='.$url.'" rel="nofollow">Česky</a>'.$medhjos.'  
<a lang="cy" xml:lang="cy" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Ccy&amp;u='.$url.'" rel="nofollow">Cymraeg</a>'.$medhjos.'  
<a lang="da" xml:lang="da" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Cda&amp;u='.$url.'" rel="nofollow">Dansk</a>'.$medhjos.'  
<a lang="de" xml:lang="de" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Cde&amp;u='.$url.'" rel="nofollow">Deutsch</a>'.$medhjos.'  
<a lang="et" xml:lang="et" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Cet&amp;u='.$url.'" rel="nofollow">Eesti</a>'.$medhjos.'  
<a lang="el" xml:lang="el" title="Ellenika" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Cel&amp;u='.$url.'" rel="nofollow">Ελληνικά</a>'.$medhjos.'  
<a lang="es" xml:lang="es" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Ces&amp;u='.$url.'" rel="nofollow">Español</a>'.$medhjos.'  
<a lang="fa" xml:lang="fa" title="Fārsī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Cfa&amp;u='.$url.'" rel="nofollow">فارسی</a>'.$medhjos.'  
<a lang="fr" xml:lang="fr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Cfr&amp;u='.$url.'" rel="nofollow">Français</a>'.$medhjos.'  
<a lang="ga" xml:lang="ga" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Cga&amp;u='.$url.'" rel="nofollow">Gaeilge</a>'.$medhjos.'  
<a lang="gl" xml:lang="gl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Cgl&amp;u='.$url.'" rel="nofollow">Galego</a>'.$medhjos.'  
<a lang="hi" xml:lang="hi" title="Hindī" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Chi&amp;u='.$url.'" rel="nofollow">हिन्दी</a>'.$medhjos.'  
<a lang="hr" xml:lang="hr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Chr&amp;u='.$url.'" rel="nofollow">Hrvatski</a>'.$medhjos.'  
<a lang="id" xml:lang="id" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Cid&amp;u='.$url.'" rel="nofollow">Bahasa Indonesia</a>'.$medhjos.'  
<a lang="is" xml:lang="is" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Cis&amp;u='.$url.'" rel="nofollow">Íslenska</a>'.$medhjos.'  
<a lang="it" xml:lang="it" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Cit&amp;u='.$url.'" rel="nofollow">Italiano</a>'.$medhjos.'  
<a lang="he" xml:lang="he" title="‘Ivrit" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Che&amp;u='.$url.'" rel="nofollow">עברית</a>'.$medhjos.'  
<a lang="lv" xml:lang="lv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Clv&amp;u='.$url.'" rel="nofollow">Latviešu</a>'.$medhjos.'  
<a lang="lt" xml:lang="lt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Clt&amp;u='.$url.'" rel="nofollow">Lietuvių</a>'.$medhjos.'  
<a lang="ko" xml:lang="ko" title="Hangugeo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Cko&amp;u='.$url.'" rel="nofollow">한국어</a>'.$medhjos.'  
<a lang="hu" xml:lang="hu" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Chu&amp;u='.$url.'" rel="nofollow">Magyar</a>'.$medhjos.'  
<a lang="mk" xml:lang="mk" title="Makedonski" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Cmk&amp;u='.$url.'" rel="nofollow">Македонски</a>'.$medhjos.'  
<a lang="ml" xml:lang="ml" title="Malayalam" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Cml&amp;u='.$url.'" rel="nofollow">മലയാളം</a>'.$medhjos.'  
<a lang="mt" xml:lang="mt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Cmt&amp;u='.$url.'" rel="nofollow">Malti</a>'.$medhjos.'  
<a lang="nl" xml:lang="nl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Cnl&amp;u='.$url.'" rel="nofollow">Nederlands</a>'.$medhjos.'  
<a lang="ja" xml:lang="ja" title="Nihongo" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Cja&amp;u='.$url.'" rel="nofollow">日本語</a>'.$medhjos.'  
<a lang="no" xml:lang="no" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Cno&amp;u='.$url.'" rel="nofollow">Norsk (Bokmål)</a>'.$medhjos.'  
<a lang="pl" xml:lang="pl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Cpl&amp;u='.$url.'" rel="nofollow">Polski</a>'.$medhjos.'  
<a lang="pt" xml:lang="pt" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Cpt&amp;u='.$url.'" rel="nofollow">Português</a>'.$medhjos.'  
<a lang="ro" xml:lang="ro" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Cro&amp;u='.$url.'" rel="nofollow">Română</a>'.$medhjos.'  
<a lang="ru" xml:lang="ru" title="Russkij" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Cru&amp;u='.$url.'" rel="nofollow">Русский</a>'.$medhjos.'  
<a lang="sk" xml:lang="sk" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Csk&amp;u='.$url.'" rel="nofollow">Slovenčina</a>'.$medhjos.'  
<a lang="sl" xml:lang="sl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Csl&amp;u='.$url.'" rel="nofollow">Slovenščina</a>'.$medhjos.'  
<a lang="sq" xml:lang="sq" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Csq&amp;u='.$url.'" rel="nofollow">Shqip</a>'.$medhjos.'  
<a lang="sr" xml:lang="sr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Csr&amp;u='.$url.'" rel="nofollow">Srpski</a>'.$medhjos.'  
<a lang="fi" xml:lang="fi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Cfi&amp;u='.$url.'" rel="nofollow">Suomi</a>'.$medhjos.'  
<a lang="sv" xml:lang="sv" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Csv&amp;u='.$url.'" rel="nofollow">Svenska</a>'.$medhjos.'  
<a lang="sw" xml:lang="sw" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Csw&amp;u='.$url.'" rel="nofollow">Kiswahili</a>'.$medhjos.'  
<a lang="th" xml:lang="th" title="Thai" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Cth&amp;u='.$url.'" rel="nofollow">ไทย</a>'.$medhjos.'  
<a lang="tl" xml:lang="tl" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Ctl&amp;u='.$url.'" rel="nofollow">Tagalog</a>'.$medhjos.'  
<a lang="tr" xml:lang="tr" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Ctr&amp;u='.$url.'" rel="nofollow">Türkçe</a>'.$medhjos.'  
<a lang="uk" xml:lang="uk" title="Ukraïns’ka" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Cuk&amp;u='.$url.'" rel="nofollow">Українська</a>'.$medhjos.'  
<a lang="vi" xml:lang="vi" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Cvi&amp;u='.$url.'" rel="nofollow">Tiếng Việt</a>'.$medhjos.'  
<a lang="yi" xml:lang="yi" title="Yidiš" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Cyi&amp;u='.$url.'" rel="nofollow">ייִדיש</a>.'.$medhjos.'  
<a lang="zh-CN" xml:lang="zh-CN" title="Zhōngwén" href="http://www.google.com/translate?hl=en&amp;ie=UTF8&amp;langpair=zh-TW%7Czh-CN&amp;u='.$url.'" rel="nofollow">中文</a>';

	 		echo $before_widget;
			echo $before_title . $title . $after_title;
			
			if ($show_en_h) { 
					    echo $english;
					    }
			if ($show_en_v) { 
					    echo '<ul><li>';
					    echo $english;  
					    echo '</li></ul>';
					    }
			if ($show_af_h) { 
					    echo $afrikaans;
					    }
			if ($show_af_v) { 
					    echo '<ul><li>';
					    echo $afrikaans;  
					    echo '</li></ul>';
					    }	
			if ($show_ar_h) { 
					    echo $araby;
					    }
			if ($show_ar_v) { 
					    echo '<ul><li>';
					    echo $araby;  
					    echo '</li></ul>';
					    }	
	     	if ($show_be_h) { 
					    echo $belaruskaya;
					    }
			if ($show_be_v) { 
					    echo '<ul><li>';
					    echo $belaruskaya;  
					    echo '</li></ul>';
					    }				
	     	if ($show_bg_h) { 
					    echo $bulgarski;
					    }
			if ($show_bg_v) { 
					    echo '<ul><li>';
					    echo $bulgarski;  
					    echo '</li></ul>';
					    }			
	     	if ($show_ca_h) { 
					    echo $catala;
					    }
			if ($show_ca_v) { 
					    echo '<ul><li>';
					    echo $catala;  
					    echo '</li></ul>';
					    }
			if ($show_cs_h) { 
					    echo $cesky;
					    }
			if ($show_cs_v) { 
					    echo '<ul><li>';
					    echo $cesky;  
					    echo '</li></ul>';
					    }
			if ($show_cy_h) { 
					    echo $cymraeg;
					    }
			if ($show_cy_v) { 
					    echo '<ul><li>';
					    echo $cymraeg;  
					    echo '</li></ul>';
					    }
			if ($show_de_h) { 
					    echo $deutsch;
					    }
			if ($show_de_v) { 
					    echo '<ul><li>';
					    echo $deutsch;  
					    echo '</li></ul>';
					    }
			if ($show_da_h) { 
					    echo $dansk;
					    }
			if ($show_da_v) { 
					    echo '<ul><li>';
					    echo $dansk;  
					    echo '</li></ul>';
					    }
			if ($show_el_h) { 
					    echo $ellenika;
					    }
			if ($show_el_v) { 
					    echo '<ul><li>';
					    echo $ellenika;  
					    echo '</li></ul>';
					    }			
	     	if ($show_et_h) { 
					    echo $eesti;
					    }
			if ($show_et_v) { 
					    echo '<ul><li>';
					    echo $eesti;  
					    echo '</li></ul>';
					    }
			if ($show_es_h) { 
					    echo $espanol;
					    }
			if ($show_es_v) { 
					    echo '<ul><li>';
					    echo $espanol;  
					    echo '</li></ul>';
					    }
			if ($show_fa_h) { 
					    echo $farsi;
					    }
			if ($show_fa_v) { 
					    echo '<ul><li>';
					    echo $farsi; 
					    echo '</li></ul>';
					    }		
			if ($show_fr_h) { 
					    echo $francais;
					    }
			if ($show_fr_v) { 
					    echo '<ul><li>';
					    echo $francais; 
					    echo '</li></ul>';
					    }	
	     	if ($show_ga_h) { 
					    echo $gaeilge;
					    }
			if ($show_ga_v) { 
					    echo '<ul><li>';
					    echo $gaeilge;  
					    echo '</li></ul>';
					    }		
	     	if ($show_gl_h) { 
					    echo $galego;
					    }
			if ($show_gl_v) { 
					    echo '<ul><li>';
					    echo $galego;  
					    echo '</li></ul>';
					    }
			if ($show_hi_h) { 
					    echo $hindi;
					    }
			if ($show_hi_v) { 
					    echo '<ul><li>';
					    echo $hindi;  
					    echo '</li></ul>';
					    }
			if ($show_hr_h) { 
					    echo $hrvatski;
					    }
			if ($show_hr_v) { 
					    echo '<ul><li>';
					    echo $hrvatski;  
					    echo '</li></ul>';
					    }
			if ($show_id_h) { 
					    echo $indonesia;
					    }
			if ($show_id_v) { 
					    echo '<ul><li>';
					    echo $indonesia;  
					    echo '</li></ul>';
					    }
			if ($show_is_h) { 
					    echo $islenska;
					    }
			if ($show_is_v) { 
					    echo '<ul><li>';
					    echo $islenska;  
					    echo '</li></ul>';
					    }
			if ($show_it_h) { 
					    echo $italiano;
					    }
			if ($show_it_v) { 
					    echo '<ul><li>';
					    echo $italiano;  
					    echo '</li></ul>';
					    }
			if ($show_he_h) { 
					    echo $ivrit;
					    }
			if ($show_he_v) { 
					    echo '<ul><li>';
					    echo $ivrit;  
					    echo '</li></ul>';
					    }
			if ($show_lv_h) { 
					    echo $latviesu;
					    }
			if ($show_lv_v) { 
					    echo '<ul><li>';
					    echo $latviesu;  
					    echo '</li></ul>';
					    }
			if ($show_lt_h) { 
					    echo $lietuviu;
					    }
			if ($show_lt_v) { 
					    echo '<ul><li>';
					    echo $lietuviu;  
					    echo '</li></ul>';
					    }
			if ($show_ko_h) { 
					    echo $hangugeo;
					    }
			if ($show_ko_v) { 
					    echo '<ul><li>';
					    echo $hangugeo;  
					    echo '</li></ul>';
					    }
			if ($show_hu_h) { 
					    echo $magyar;
					    }
			if ($show_hu_v) { 
					    echo '<ul><li>';
					    echo $magyar;  
					    echo '</li></ul>';
					    }
			if ($show_mk_h) { 
					    echo $makedonski;
					    }
			if ($show_mk_v) { 
					    echo '<ul><li>';
					    echo $makedonski;  
					    echo '</li></ul>';
					    }
			if ($show_ml_h) { 
					    echo $malayalam;
					    }
			if ($show_ml_v) { 
					    echo '<ul><li>';
					    echo $malayalam;
					    echo '</li></ul>';
					    }
			if ($show_mt_h) { 
					    echo $malti;
					    }
			if ($show_mt_v) { 
					    echo '<ul><li>';
					    echo $malti;  
					    echo '</li></ul>';
					    }
			if ($show_nl_h) { 
					    echo $nederlands;
					    }
			if ($show_nl_v) { 
					    echo '<ul><li>';
					    echo $nederlands; 
					    echo '</li></ul>';
					    }
			if ($show_ja_h) { 
					    echo $nihongo;
					    }
			if ($show_ja_v) { 
					    echo '<ul><li>';
					    echo $nihongo;  
					    echo '</li></ul>';
					    }
			if ($show_no_h) { 
					    echo $norsk;
					    }
			if ($show_no_v) { 
					    echo '<ul><li>';
					    echo $norsk;  
					    echo '</li></ul>';
					    }
			if ($show_pl_h) { 
					    echo $polski;
					    }
			if ($show_pl_v) { 
					    echo '<ul><li>';
					    echo $polski;  
					    echo '</li></ul>';
					    }
			if ($show_pt_h) { 
					    echo $portugues;
					    }
			if ($show_pt_v) { 
					    echo '<ul><li>';
					    echo $portugues;  
					    echo '</li></ul>';
					    }
			if ($show_ro_h) { 
					    echo $romana;
					    }
			if ($show_ro_v) { 
					    echo '<ul><li>';
					    echo $romana;  
					    echo '</li></ul>';
					    }
			if ($show_ru_h) { 
					    echo $russkij;
					    }
			if ($show_ru_v) { 
					    echo '<ul><li>';
					    echo $russkij;  
					    echo '</li></ul>';
					    }
			if ($show_sk_h) { 
					    echo $slovencina;
					    }
			if ($show_sk_v) { 
					    echo '<ul><li>';
					    echo $slovencina;  
					    echo '</li></ul>';
					    }
			if ($show_sl_h) { 
					    echo $slovenscina;
					    }
			if ($show_sl_v) { 
					    echo '<ul><li>';
					    echo $slovenscina;  
					    echo '</li></ul>';
					    }
			if ($show_sq_h) { 
					    echo $shqip;
					    }
			if ($show_sq_v) { 
					    echo '<ul><li>';
					    echo $shqip;  
					    echo '</li></ul>';
					    }
			if ($show_sr_h) { 
					    echo $srpski;
					    }
			if ($show_sr_v) { 
					    echo '<ul><li>';
					    echo $srpski;  
					    echo '</li></ul>';
					    }
			if ($show_fi_h) { 
					    echo $suomi;
					    }
			if ($show_fi_v) { 
					    echo '<ul><li>';
					    echo $suomi;  
					    echo '</li></ul>';
					    }
			if ($show_sv_h) { 
					    echo $svenska;
					    }
			if ($show_sv_v) { 
					    echo '<ul><li>';
					    echo $svenska;  
					    echo '</li></ul>';
					    }
			if ($show_sw_h) {
					    echo $swahili;
					    }
			if ($show_sw_v) { 
					    echo '<ul><li>';
					    echo $swahili;  
					    echo '</li></ul>';
					    }
			if ($show_th_h) { 
					    echo $thai;
					    }
			if ($show_th_v) { 
					    echo '<ul><li>';
					    echo $thai;  
					    echo '</li></ul>';
					    }
			if ($show_tl_h) { 
					    echo $tagalog;
					    }
			if ($show_tl_v) { 
					    echo '<ul><li>';
					    echo $tagalog;  
					    echo '</li></ul>';
					    }
			if ($show_tr_h) { 
					    echo $turkce;
					    }
			if ($show_tr_v) { 
					    echo '<ul><li>';
					    echo $turkce;  
					    echo '</li></ul>';
					    }
			if ($show_uk_h) { 
					    echo $ukrainska;
					    }
			if ($show_uk_v) { 
					    echo '<ul><li>';
					    echo $ukrainska;  
					    echo '</li></ul>';
					    }
			if ($show_yi_h) { 
					    echo $yidis;
					    }
			if ($show_yi_v) { 
					    echo '<ul><li>';
					    echo $yidis;  
					    echo '</li></ul>';
					    }
			if ($show_vi_h) { 
					    echo $viet;
					    }
			if ($show_vi_v) { 
					    echo '<ul><li>';
					    echo $viet;  
					    echo '</li></ul>';
					    }
			if ($show_zh_h) { 
					    echo $zhongwen;
					    }
			if ($show_zh_v) { 
					    echo '<ul><li>';
					    echo $zhongwen;  
					    echo '</li></ul>';
					    }
			if ($show_zt_h) { 
					    echo $zhongwent;
					    }
			if ($show_zt_v) { 
					    echo '<ul><li>';
					    echo $zhongwent;  
					    echo '</li></ul>';
					    }
			echo $after_widget;
		}

	function widget_indoeuropean_control() {
		$options = $newoptions = get_option('widget_indoeuropean');
		if ( $_POST["indoeuro_submit"] ) {
			$newoptions['title']	= strip_tags(stripslashes($_POST["indoeuro_title"]));
			$newoptions['show_en_h']	= isset($_POST['indoeuro_show_en_h']);
			$newoptions['show_en_v']	= isset($_POST['indoeuro_show_en_v']);
			$newoptions['show_af_h']	= isset($_POST['indoeuro_show_af_h']);
			$newoptions['show_af_v']	= isset($_POST['indoeuro_show_af_v']);
			$newoptions['show_ar_h']	= isset($_POST['indoeuro_show_ar_h']);
			$newoptions['show_ar_v']	= isset($_POST['indoeuro_show_ar_v']);
			$newoptions['show_be_h']	= isset($_POST['indoeuro_show_be_h']);
			$newoptions['show_be_v']	= isset($_POST['indoeuro_show_be_v']);
			$newoptions['show_bg_h']	= isset($_POST['indoeuro_show_bg_h']);
			$newoptions['show_bg_v']	= isset($_POST['indoeuro_show_bg_v']);
			$newoptions['show_ca_h']	= isset($_POST['indoeuro_show_ca_h']);
			$newoptions['show_ca_v']	= isset($_POST['indoeuro_show_ca_v']);
			$newoptions['show_cs_h']	= isset($_POST['indoeuro_show_cs_h']);
			$newoptions['show_cs_v']	= isset($_POST['indoeuro_show_cs_v']);
			$newoptions['show_cy_h']	= isset($_POST['indoeuro_show_cy_h']);
			$newoptions['show_cy_v']	= isset($_POST['indoeuro_show_cy_v']);
			$newoptions['show_da_h']	= isset($_POST['indoeuro_show_da_h']);
			$newoptions['show_da_v']	= isset($_POST['indoeuro_show_da_v']);
			$newoptions['show_de_h']	= isset($_POST['indoeuro_show_de_h']);
			$newoptions['show_de_v']	= isset($_POST['indoeuro_show_de_v']);
			$newoptions['show_el_h']	= isset($_POST['indoeuro_show_el_h']);
			$newoptions['show_el_v']	= isset($_POST['indoeuro_show_el_v']);
			$newoptions['show_et_h']	= isset($_POST['indoeuro_show_et_h']);
			$newoptions['show_et_v']	= isset($_POST['indoeuro_show_et_v']);
			$newoptions['show_es_h']	= isset($_POST['indoeuro_show_es_h']);
			$newoptions['show_es_v']	= isset($_POST['indoeuro_show_es_v']);
			$newoptions['show_fa_h']	= isset($_POST['indoeuro_show_fa_h']);
			$newoptions['show_fa_v']	= isset($_POST['indoeuro_show_fa_v']);
			$newoptions['show_fr_h']	= isset($_POST['indoeuro_show_fr_h']);
			$newoptions['show_fr_v']	= isset($_POST['indoeuro_show_fr_v']);
			$newoptions['show_ga_h']	= isset($_POST['indoeuro_show_gl_h']);
			$newoptions['show_ga_v']	= isset($_POST['indoeuro_show_gl_v']);
			$newoptions['show_gl_h']	= isset($_POST['indoeuro_show_gl_h']);
			$newoptions['show_gl_v']	= isset($_POST['indoeuro_show_gl_v']);
			$newoptions['show_hi_h']	= isset($_POST['indoeuro_show_hi_h']);
			$newoptions['show_hi_v']	= isset($_POST['indoeuro_show_hi_v']);
			$newoptions['show_hr_h']	= isset($_POST['indoeuro_show_hr_h']);
			$newoptions['show_hr_v']	= isset($_POST['indoeuro_show_hr_v']);
			$newoptions['show_id_h']	= isset($_POST['indoeuro_show_id_h']);
			$newoptions['show_id_v']	= isset($_POST['indoeuro_show_id_v']);
			$newoptions['show_is_h']	= isset($_POST['indoeuro_show_is_h']);
			$newoptions['show_is_v']	= isset($_POST['indoeuro_show_is_v']);
			$newoptions['show_it_h']	= isset($_POST['indoeuro_show_it_h']);
			$newoptions['show_it_v']	= isset($_POST['indoeuro_show_it_v']);
			$newoptions['show_he_h']	= isset($_POST['indoeuro_show_he_h']);
			$newoptions['show_he_v']	= isset($_POST['indoeuro_show_he_v']);
			$newoptions['show_lv_h']	= isset($_POST['indoeuro_show_lv_h']);
			$newoptions['show_lv_v']	= isset($_POST['indoeuro_show_lv_v']);
			$newoptions['show_lt_h']	= isset($_POST['indoeuro_show_lt_h']);
			$newoptions['show_lt_v']	= isset($_POST['indoeuro_show_lt_v']);
			$newoptions['show_ko_h']	= isset($_POST['indoeuro_show_ko_h']);
			$newoptions['show_ko_v']	= isset($_POST['indoeuro_show_ko_v']);
			$newoptions['show_hu_h']	= isset($_POST['indoeuro_show_hu_h']);
			$newoptions['show_hu_v']	= isset($_POST['indoeuro_show_hu_v']);
			$newoptions['show_mk_h']	= isset($_POST['indoeuro_show_mk_h']);
			$newoptions['show_mk_v']	= isset($_POST['indoeuro_show_mk_v']);
			$newoptions['show_ml_h']	= isset($_POST['indoeuro_show_ml_h']);
			$newoptions['show_ml_v']	= isset($_POST['indoeuro_show_ml_v']);
			$newoptions['show_mt_h']	= isset($_POST['indoeuro_show_mt_h']);
			$newoptions['show_mt_v']	= isset($_POST['indoeuro_show_mt_v']);
			$newoptions['show_nl_h']	= isset($_POST['indoeuro_show_nl_h']);
			$newoptions['show_nl_v']	= isset($_POST['indoeuro_show_nl_v']);
			$newoptions['show_ja_h']	= isset($_POST['indoeuro_show_ja_h']);
			$newoptions['show_ja_v']	= isset($_POST['indoeuro_show_ja_v']);
			$newoptions['show_no_h']	= isset($_POST['indoeuro_show_no_h']);
			$newoptions['show_no_v']	= isset($_POST['indoeuro_show_no_v']);
			$newoptions['show_pl_h']	= isset($_POST['indoeuro_show_pl_h']);
			$newoptions['show_pl_v']	= isset($_POST['indoeuro_show_pl_v']);
			$newoptions['show_pt_h']	= isset($_POST['indoeuro_show_pt_h']);
			$newoptions['show_pt_v']	= isset($_POST['indoeuro_show_pt_v']);
			$newoptions['show_ro_h']	= isset($_POST['indoeuro_show_ro_h']);
			$newoptions['show_ro_v']	= isset($_POST['indoeuro_show_ro_v']);
			$newoptions['show_ru_h']	= isset($_POST['indoeuro_show_ru_h']);
			$newoptions['show_ru_v']	= isset($_POST['indoeuro_show_ru_v']);
			$newoptions['show_sk_h']	= isset($_POST['indoeuro_show_sk_h']);
			$newoptions['show_sk_v']	= isset($_POST['indoeuro_show_sk_v']);
			$newoptions['show_sl_h']	= isset($_POST['indoeuro_show_sl_h']);
			$newoptions['show_sl_v']	= isset($_POST['indoeuro_show_sl_v']);
			$newoptions['show_sq_h']	= isset($_POST['indoeuro_show_sq_h']);
			$newoptions['show_sq_v']	= isset($_POST['indoeuro_show_sq_v']);
			$newoptions['show_sr_h']	= isset($_POST['indoeuro_show_sr_h']);
			$newoptions['show_sr_v']	= isset($_POST['indoeuro_show_sr_v']);
			$newoptions['show_fi_h']	= isset($_POST['indoeuro_show_fi_h']);
			$newoptions['show_fi_v']	= isset($_POST['indoeuro_show_fi_v']);
			$newoptions['show_sv_h']	= isset($_POST['indoeuro_show_sv_h']);
			$newoptions['show_sv_v']	= isset($_POST['indoeuro_show_sv_v']);
			$newoptions['show_sw_h']	= isset($_POST['indoeuro_show_sw_h']);
			$newoptions['show_sw_v']	= isset($_POST['indoeuro_show_sw_v']);
			$newoptions['show_th_h']	= isset($_POST['indoeuro_show_th_h']);
			$newoptions['show_th_v']	= isset($_POST['indoeuro_show_th_v']);
			$newoptions['show_tl_h']	= isset($_POST['indoeuro_show_tl_h']);
			$newoptions['show_tl_v']	= isset($_POST['indoeuro_show_tl_v']);
			$newoptions['show_tr_h']	= isset($_POST['indoeuro_show_tr_h']);
			$newoptions['show_tr_v']	= isset($_POST['indoeuro_show_tr_v']);
			$newoptions['show_uk_h']	= isset($_POST['indoeuro_show_uk_h']);
			$newoptions['show_uk_v']	= isset($_POST['indoeuro_show_uk_v']);
			$newoptions['show_vi_h']	= isset($_POST['indoeuro_show_vi_h']);
			$newoptions['show_vi_v']	= isset($_POST['indoeuro_show_vi_v']);
			$newoptions['show_yi_h']	= isset($_POST['indoeuro_show_yi_h']);
			$newoptions['show_yi_v']	= isset($_POST['indoeuro_show_yi_v']);
			$newoptions['show_zh_h']	= isset($_POST['indoeuro_show_zh_h']);
			$newoptions['show_zh_v']	= isset($_POST['indoeuro_show_zh_v']);
			$newoptions['show_zt_h']	= isset($_POST['indoeuro_show_zt_h']);
			$newoptions['show_zt_v']	= isset($_POST['indoeuro_show_zt_v']);
		}
		if ( $options != $newoptions ) {
			$options = $newoptions;
			update_option('widget_indoeuropean', $options);
		}
		$title			  = htmlspecialchars($options['title'], ENT_QUOTES);
		$show_en_h	  = $options['show_en_h'] ? 'checked="checked"' : '';
		$show_en_v	  = $options['show_en_v'] ? 'checked="checked"' : ''; 
		$show_af_h	  = $options['show_af_h'] ? 'checked="checked"' : '';
		$show_af_v	  = $options['show_af_v'] ? 'checked="checked"' : '';   
		$show_ar_h	  = $options['show_ar_h'] ? 'checked="checked"' : '';
		$show_ar_v	  = $options['show_ar_v'] ? 'checked="checked"' : '';
		$show_be_h   = $options['show_be_h'] ? 'checked="checked"' : ''; 
		$show_be_v  = $options['show_be_v'] ? 'checked="checked"' : ''; 
		$show_bg_h   = $options['show_bg_h'] ? 'checked="checked"' : ''; 
		$show_bg_v  = $options['show_bg_v'] ? 'checked="checked"' : ''; 
		$show_ca_h   = $options['show_ca_h'] ? 'checked="checked"' : ''; 
		$show_ca_v  = $options['show_ca_v'] ? 'checked="checked"' : ''; 
		$show_cs_h   = $options['show_cs_h'] ? 'checked="checked"' : ''; 
		$show_cs_v  = $options['show_cs_v'] ? 'checked="checked"' : ''; 
		$show_cy_h   = $options['show_cy_h'] ? 'checked="checked"' : ''; 
		$show_cy_v  = $options['show_cy_v'] ? 'checked="checked"' : ''; 
		$show_da_h  = $options['show_da_h'] ? 'checked="checked"' : ''; 
		$show_da_v = $options['show_da_v'] ? 'checked="checked"' : ''; 
		$show_de_h   = $options['show_de_h'] ? 'checked="checked"' : ''; 
		$show_de_v  = $options['show_de_v'] ? 'checked="checked"' : ''; 
		$show_el_h   = $options['show_el_h'] ? 'checked="checked"' : ''; 
		$show_el_v  = $options['show_el_v'] ? 'checked="checked"' : '';
		$show_et_h   = $options['show_et_h'] ? 'checked="checked"' : ''; 
		$show_et_v  = $options['show_et_v'] ? 'checked="checked"' : '';
		$show_es_h   = $options['show_es_h'] ? 'checked="checked"' : ''; 
		$show_es_v  = $options['show_es_v'] ? 'checked="checked"' : '';
		$show_fa_h  = $options['show_fa_h'] ? 'checked="checked"' : ''; 
		$show_fa_v = $options['show_fa_v'] ? 'checked="checked"' : ''; 
		$show_fr_h  = $options['show_fr_h'] ? 'checked="checked"' : ''; 
		$show_fr_v = $options['show_fr_v'] ? 'checked="checked"' : ''; 
		$show_ga_h   = $options['show_ga_h'] ? 'checked="checked"' : ''; 
		$show_ga_v  = $options['show_ga_v'] ? 'checked="checked"' : '';
		$show_gl_h   = $options['show_gl_h'] ? 'checked="checked"' : ''; 
		$show_gl_v  = $options['show_gl_v'] ? 'checked="checked"' : '';
		$show_hi_h   = $options['show_hi_h'] ? 'checked="checked"' : ''; 
		$show_hi_v  = $options['show_hi_v'] ? 'checked="checked"' : ''; 
		$show_hr_h   = $options['show_hr_h'] ? 'checked="checked"' : ''; 
		$show_hr_v  = $options['show_hr_v'] ? 'checked="checked"' : '';
		$show_id_h   = $options['show_id_h'] ? 'checked="checked"' : ''; 
		$show_id_v  = $options['show_id_v'] ? 'checked="checked"' : ''; 
		$show_is_h   = $options['show_is_h'] ? 'checked="checked"' : ''; 
		$show_is_v  = $options['show_is_v'] ? 'checked="checked"' : '';
		$show_it_h   = $options['show_it_h'] ? 'checked="checked"' : ''; 
		$show_it_v  = $options['show_it_v'] ? 'checked="checked"' : '';
		$show_he_h   = $options['show_he_h'] ? 'checked="checked"' : ''; 
		$show_he_v  = $options['show_he_v'] ? 'checked="checked"' : ''; 
		$show_lv_h   = $options['show_lv_h'] ? 'checked="checked"' : ''; 
		$show_lv_v  = $options['show_lv_v'] ? 'checked="checked"' : ''; 
		$show_lt_h   = $options['show_lt_h'] ? 'checked="checked"' : ''; 
		$show_lt_v  = $options['show_lt_v'] ? 'checked="checked"' : '';  
		$show_ko_h   = $options['show_ko_h'] ? 'checked="checked"' : ''; 
		$show_ko_v  = $options['show_ko_v'] ? 'checked="checked"' : ''; 
		$show_hu_h   = $options['show_hu_h'] ? 'checked="checked"' : ''; 
		$show_hu_v  = $options['show_hu_v'] ? 'checked="checked"' : ''; 
		$show_mk_h   = $options['show_mk_h'] ? 'checked="checked"' : ''; 
		$show_mk_v  = $options['show_mk_v'] ? 'checked="checked"' : ''; 
		$show_ml_h   = $options['show_ml_h'] ? 'checked="checked"' : ''; 
		$show_ml_v  = $options['show_ml_v'] ? 'checked="checked"' : ''; 
		$show_mt_h   = $options['show_mt_h'] ? 'checked="checked"' : ''; 
		$show_mt_v  = $options['show_mt_v'] ? 'checked="checked"' : ''; 
		$show_nl_h   = $options['show_nl_h'] ? 'checked="checked"' : ''; 
		$show_nl_v  = $options['show_nl_v'] ? 'checked="checked"' : ''; 
		$show_ja_h	  = $options['show_ja_h'] ? 'checked="checked"' : '';
		$show_ja_v	  = $options['show_ja_v'] ? 'checked="checked"' : '';
		$show_no_h   = $options['show_no_h'] ? 'checked="checked"' : ''; 
		$show_no_v  = $options['show_no_v'] ? 'checked="checked"' : ''; 
		$show_pl_h   = $options['show_pl_h'] ? 'checked="checked"' : ''; 
		$show_pl_v  = $options['show_pl_v'] ? 'checked="checked"' : '';
		$show_pt_h   = $options['show_pt_h'] ? 'checked="checked"' : ''; 
		$show_pt_v  = $options['show_pt_v'] ? 'checked="checked"' : ''; 
		$show_ro_h  = $options['show_ro_h'] ? 'checked="checked"' : ''; 
		$show_ro_v = $options['show_ro_v'] ? 'checked="checked"' : ''; 
		$show_ru_h   = $options['show_ru_h'] ? 'checked="checked"' : ''; 
		$show_ru_v  = $options['show_ru_v'] ? 'checked="checked"' : '';
		$show_sk_h   = $options['show_sk_h'] ? 'checked="checked"' : ''; 
		$show_sk_v  = $options['show_sk_v'] ? 'checked="checked"' : '';
		$show_sl_h   = $options['show_sl_h'] ? 'checked="checked"' : ''; 
		$show_sl_v  = $options['show_sl_v'] ? 'checked="checked"' : '';
		$show_sq_h   = $options['show_sq_h'] ? 'checked="checked"' : ''; 
		$show_sq_v  = $options['show_sq_v'] ? 'checked="checked"' : '';
		$show_sr_h   = $options['show_sr_h'] ? 'checked="checked"' : ''; 
		$show_sr_v  = $options['show_sr_v'] ? 'checked="checked"' : '';
		$show_fi_h   = $options['show_fi_h'] ? 'checked="checked"' : ''; 
		$show_fi_v  = $options['show_fi_v'] ? 'checked="checked"' : '';
		$show_sv_h   = $options['show_sv_h'] ? 'checked="checked"' : ''; 
		$show_sv_v  = $options['show_sv_v'] ? 'checked="checked"' : ''; 
		$show_sw_h   = $options['show_sw_h'] ? 'checked="checked"' : ''; 
		$show_sw_v  = $options['show_sw_v'] ? 'checked="checked"' : ''; 
		$show_th_h   = $options['show_th_h'] ? 'checked="checked"' : ''; 
		$show_th_v  = $options['show_th_v'] ? 'checked="checked"' : ''; 
		$show_tl_h   = $options['show_tl_h'] ? 'checked="checked"' : ''; 
		$show_tl_v  = $options['show_tl_v'] ? 'checked="checked"' : ''; 
		$show_tr_h   = $options['show_tr_h'] ? 'checked="checked"' : ''; 
		$show_tr_v  = $options['show_tr_v'] ? 'checked="checked"' : ''; 
		$show_uk_h   = $options['show_uk_h'] ? 'checked="checked"' : ''; 
		$show_uk_v  = $options['show_uk_v'] ? 'checked="checked"' : ''; 
		$show_vi_h   = $options['show_vi_h'] ? 'checked="checked"' : ''; 
		$show_vi_v  = $options['show_vi_v'] ? 'checked="checked"' : ''; 
		$show_yi_h   = $options['show_yi_h'] ? 'checked="checked"' : ''; 
		$show_yi_v  = $options['show_yi_v'] ? 'checked="checked"' : ''; 
		$show_zh_h   = $options['show_zh_h'] ? 'checked="checked"' : ''; 
		$show_zh_v  = $options['show_zh_v'] ? 'checked="checked"' : ''; 
		$show_zt_h   = $options['show_zt_h'] ? 'checked="checked"' : ''; 
		$show_zt_v  = $options['show_zt_v'] ? 'checked="checked"' : ''; 
	?>
				<p>Title: <input style="width: 250px;" id="indoeuro_title" name="indoeuro_title" type="text" value="<?php echo $title; ?>" /></p>
				<p>Please CHECK ONE AND ONLY ONE BOX, with the language you write your blog in and your preferred output (vertical OR horizontal)</p>
				<p style="text-align:right;margin-right:40px;">
				Afrikaans: Horizontal <input class="checkbox" type="checkbox" <?php echo $show_af_h; ?>id="indoeuro_show_af_h" name="indoeuro_show_af_h" />
 						   / Vertical <input class="checkbox" type="checkbox" <?php echo $show_af_v; ?>id="indoeuro_show_af_v" name="indoeuro_show_af_v" />
 						    </p>
 				<p style="text-align:right;margin-right:40px;">
				  :العربية
				Horizontal <input class="checkbox" type="checkbox" <?php echo $show_ar_h; ?>id="indoeuro_show_ar_h" name="indoeuro_show_ar_h" />
 						   / Vertical <input class="checkbox" type="checkbox" <?php echo $show_ar_v; ?>id="indoeuro_show_ar_v" name="indoeuro_show_ar_v" />
 						   </p>
 				<p style="text-align:right;margin-right:40px;">
				Беларуская: Horizontal <input class="checkbox" type="checkbox" <?php echo $show_be_h; ?>id="indoeuro_show_be_h" name="indoeuro_show_be_h" />
 						   / Vertical <input class="checkbox" type="checkbox" <?php echo $show_be_v; ?>id="indoeuro_show_be_v" name="indoeuro_show_be_v" />
 						   </p>
 				<p style="text-align:right;margin-right:40px;">
				Български: Horizontal <input class="checkbox" type="checkbox" <?php echo $show_bg_h; ?>id="indoeuro_show_bg_h" name="indoeuro_show_bg_h" />
 						   / Vertical <input class="checkbox" type="checkbox" <?php echo $show_bg_v; ?>id="indoeuro_show_bg_v" name="indoeuro_show_bg_v" />
 						   </p>
				<p style="text-align:right;margin-right:40px;">
				Català: Horizontal <input class="checkbox" type="checkbox" <?php echo $show_ca_h; ?>id="indoeuro_show_ca_h" name="indoeuro_show_ca_h" />
 						   / Vertical <input class="checkbox" type="checkbox" <?php echo $show_ca_v; ?>id="indoeuro_show_ca_v" name="indoeuro_show_ca_v" />
 						   </p>
				<p style="text-align:right;margin-right:40px;">
				Česky: Horizontal <input class="checkbox" type="checkbox" <?php echo $show_cs_h; ?>id="indoeuro_show_cs_h" name="indoeuro_show_cs_h" />
 						   / Vertical <input class="checkbox" type="checkbox" <?php echo $show_cs_v; ?>id="indoeuro_show_cs_v" name="indoeuro_show_cs_v" />
 						   </p>
				<p style="text-align:right;margin-right:40px;">
				Cymraeg: Horizontal <input class="checkbox" type="checkbox" <?php echo $show_cy_h; ?>id="indoeuro_show_cy_h" name="indoeuro_show_cy_h" />
 						   / Vertical <input class="checkbox" type="checkbox" <?php echo $show_cy_v; ?>id="indoeuro_show_cy_v" name="indoeuro_show_cy_v" />
 						   </p>
				<p style="text-align:right;margin-right:40px;">
				Dansk: Horizontal <input class="checkbox" type="checkbox" <?php echo $show_da_h; ?>id="indoeuro_show_da_h" name="indoeuro_show_da_h" />
 						   / Vertical <input class="checkbox" type="checkbox" <?php echo $show_da_v; ?>id="indoeuro_show_da_v" name="indoeuro_show_da_v" />
 						   </p>
				<p style="text-align:right;margin-right:40px;">
				Deutsch: Horizontal <input class="checkbox" type="checkbox" <?php echo $show_de_h; ?>id="indoeuro_show_de_h" name="indoeuro_show_de_h" />
 					       /  Vertikal <input class="checkbox" type="checkbox" <?php echo $show_de_v; ?>id="indoeuro_show_de_v" name="indoeuro_show_de_v" />
 					       </p>
				<p style="text-align:right;margin-right:40px;">
				Ελληνικά: Horizontal <input class="checkbox" type="checkbox" <?php echo $show_el_h; ?>id="indoeuro_show_el_h" name="indoeuro_show_el_h" />
 						   / Vertical <input class="checkbox" type="checkbox" <?php echo $show_el_v; ?>id="indoeuro_show_el_v" name="indoeuro_show_el_v" />
 						   </p>
				<p style="text-align:right;margin-right:40px;">
				Eesti: Horizontal <input class="checkbox" type="checkbox" <?php echo $show_et_h; ?>id="indoeuro_show_et_h" name="indoeuro_show_et_h" />
 						   / Vertical <input class="checkbox" type="checkbox" <?php echo $show_et_v; ?>id="indoeuro_show_et_v" name="indoeuro_show_et_v" />
 						   </p>
				<p style="text-align:right;margin-right:40px;">
				English: Horizontal <input class="checkbox" type="checkbox" <?php echo $show_en_h; ?> id="indoeuro_show_en_h" name="indoeuro_show_en_h" />
                         / Vertical <input class="checkbox" type="checkbox" <?php echo $show_en_v; ?> id="indoeuro_show_en_v" name="indoeuro_show_en_v" />
                         </p>
				<p style="text-align:right;margin-right:40px;">فارسی:
				Horizontal <input class="checkbox" type="checkbox" <?php echo $show_fa_h; ?>id="indoeuro_show_fa_h" name="indoeuro_show_fa_h" />
 						    / Vertical <input class="checkbox" type="checkbox" <?php echo $show_fa_v; ?>id="indoeuro_show_fa_v" name="indoeuro_show_fa_v" />
 						    </p>
				<p style="text-align:right;margin-right:40px;">
				Español: Horizontal <input class="checkbox" type="checkbox" <?php echo $show_es_h; ?>id="indoeuro_show_es_h" name="indoeuro_show_es_h" />
 						    / Vertical <input class="checkbox" type="checkbox" <?php echo $show_es_v; ?>id="indoeuro_show_es_v" name="indoeuro_show_es_v" />
 						    </p>
				<p style="text-align:right;margin-right:40px;">
				Français: Horizontale <input class="checkbox" type="checkbox" <?php echo $show_fr_h; ?> id="indoeuro_show_fr_h" name="indoeuro_show_fr_h" />
                          / Verticale <input class="checkbox" type="checkbox" <?php echo $show_fr_v; ?>id="indoeuro_show_fr_v" name="indoeuro_show_fr_v" />
                          </p>
				<p style="text-align:right;margin-right:40px;">
				Gaeilge: Horizontal <input class="checkbox" type="checkbox" <?php echo $show_ga_h; ?>id="indoeuro_show_ga_h" name="indoeuro_show_ga_h" />
 						   / Vertical <input class="checkbox" type="checkbox" <?php echo $show_ga_v; ?>id="indoeuro_show_ga_v" name="indoeuro_show_ga_v" />
 						   </p>
				<p style="text-align:right;margin-right:40px;">
				Galego: Horizontal <input class="checkbox" type="checkbox" <?php echo $show_gl_h; ?>id="indoeuro_show_gl_h" name="indoeuro_show_gl_h" />
 						   / Vertical <input class="checkbox" type="checkbox" <?php echo $show_gl_v; ?>id="indoeuro_show_gl_v" name="indoeuro_show_gl_v" />
 						   </p>
				<p style="text-align:right;margin-right:40px;">
				हिन्दी: Horizontal <input class="checkbox" type="checkbox" <?php echo $show_hi_h; ?>id="indoeuro_show_hi_h" name="indoeuro_show_hi_h" />
 						   / Vertical <input class="checkbox" type="checkbox" <?php echo $show_hi_v; ?>id="indoeuro_show_hi_v" name="indoeuro_show_hi_v" />
 						   </p>
				<p style="text-align:right;margin-right:40px;">
				Hrvatski: Horizontal <input class="checkbox" type="checkbox" <?php echo $show_hr_h; ?>id="indoeuro_show_hr_h" name="indoeuro_show_hr_h" />
 						   / Vertical <input class="checkbox" type="checkbox" <?php echo $show_hr_v; ?>id="indoeuro_show_hr_v" name="indoeuro_show_hr_v" />
 						   </p>
				<p style="text-align:right;margin-right:40px;">
				Bahasa Indonesia: Horizontal <input class="checkbox" type="checkbox" <?php echo $show_id_h; ?>id="indoeuro_show_id_h" name="indoeuro_show_id_h" />
 						   / Vertical <input class="checkbox" type="checkbox" <?php echo $show_id_v; ?>id="indoeuro_show_id_v" name="indoeuro_show_id_v" />
 						   </p>
				<p style="text-align:right;margin-right:40px;">
				Íslenska: Horizontal <input class="checkbox" type="checkbox" <?php echo $show_is_h; ?>id="indoeuro_show_is_h" name="indoeuro_show_is_h" />
 						   / Vertical <input class="checkbox" type="checkbox" <?php echo $show_is_v; ?>id="indoeuro_show_is_v" name="indoeuro_show_is_v" />
 						   </p>
				<p style="text-align:right;margin-right:40px;">
				Italiano: Orizzontale <input class="checkbox" type="checkbox" <?php echo $show_it_h; ?>id="indoeuro_show_it_h" name="indoeuro_show_it_h" />
 						    / Verticale <input class="checkbox" type="checkbox" <?php echo $show_it_v; ?>id="indoeuro_show_it_v" name="indoeuro_show_it_v" />
 						    </p>
				<p style="text-align:right;margin-right:40px;">עברית: 
				Horizontal <input class="checkbox" type="checkbox" <?php echo $show_he_h; ?>id="indoeuro_show_he_h" name="indoeuro_show_he_h" />
 						    / Vertical <input class="checkbox" type="checkbox" <?php echo $show_he_v; ?>id="indoeuro_show_he_v" name="indoeuro_show_he_v" />
 						    </p>
				<p style="text-align:right;margin-right:40px;">
				Latviešu: Horizontal <input class="checkbox" type="checkbox" <?php echo $show_lv_h; ?>id="indoeuro_show_lv_h" name="indoeuro_show_lv_h" />
 						   / Vertical <input class="checkbox" type="checkbox" <?php echo $show_lv_v; ?>id="indoeuro_show_lv_v" name="indoeuro_show_lv_v" />
 						   </p>
				<p style="text-align:right;margin-right:40px;">
				Lietuvių: Horizontal <input class="checkbox" type="checkbox" <?php echo $show_lt_h; ?>id="indoeuro_show_lt_h" name="indoeuro_show_lt_h" />
 						   / Vertical <input class="checkbox" type="checkbox" <?php echo $show_lt_v; ?>id="indoeuro_show_lt_v" name="indoeuro_show_lt_v" />
 						   </p>
				<p style="text-align:right;margin-right:40px;">
				한국어: Horizontal <input class="checkbox" type="checkbox" <?php echo $show_ko_h; ?>id="indoeuro_show_ko_h" name="indoeuro_show_ko_h" />
 						   / Vertical <input class="checkbox" type="checkbox" <?php echo $show_ko_v; ?>id="indoeuro_show_ko_v" name="indoeuro_show_ko_v" />
 						   </p>
				<p style="text-align:right;margin-right:40px;">
				Magyar: Horizontal <input class="checkbox" type="checkbox" <?php echo $show_hu_h; ?>id="indoeuro_show_hu_h" name="indoeuro_show_hu_h" />
 						   / Vertical <input class="checkbox" type="checkbox" <?php echo $show_hu_v; ?>id="indoeuro_show_hu_v" name="indoeuro_show_hu_v" />
 						   </p>
				<p style="text-align:right;margin-right:40px;">
				Македонски: Horizontal <input class="checkbox" type="checkbox" <?php echo $show_mk_h; ?>id="indoeuro_show_mk_h" name="indoeuro_show_mk_h" />
 						   / Vertical <input class="checkbox" type="checkbox" <?php echo $show_mk_v; ?>id="indoeuro_show_mk_v" name="indoeuro_show_mk_v" />
 						   </p>
				<p style="text-align:right;margin-right:40px;">
				മലയാളം: Horizontal <input class="checkbox" type="checkbox" <?php echo $show_ml_h; ?>id="indoeuro_show_ml_h" name="indoeuro_show_ml_h" />
 						   / Vertical <input class="checkbox" type="checkbox" <?php echo $show_ml_v; ?>id="indoeuro_show_ml_v" name="indoeuro_show_ml_v" />
 						   </p>
				<p style="text-align:right;margin-right:40px;">
				Malti: Horizontal <input class="checkbox" type="checkbox" <?php echo $show_mt_h; ?>id="indoeuro_show_mt_h" name="indoeuro_show_mt_h" />
 						   / Vertical <input class="checkbox" type="checkbox" <?php echo $show_mt_v; ?>id="indoeuro_show_mt_v" name="indoeuro_show_mt_v" />
 						   </p>
				<p style="text-align:right;margin-right:40px;">
				Nederlands: Horizontale <input class="checkbox" type="checkbox" <?php echo $show_nl_h; ?>id="indoeuro_show_nl_h" name="indoeuro_show_nl_h" />
 						  / Verticale <input class="checkbox" type="checkbox" <?php echo $show_nl_v; ?>id="indoeuro_show_nl_v" name="indoeuro_show_nl_v" />
 						  </p>
				<p style="text-align:right;margin-right:40px;">
				日本語: Horizontal <input class="checkbox" type="checkbox" <?php echo $show_ja_h; ?>id="indoeuro_show_ja_h" name="indoeuro_show_ja_h" />
 						   / Vertical <input class="checkbox" type="checkbox" <?php echo $show_ja_v; ?>id="indoeuro_show_ja_v" name="indoeuro_show_ja_v" />
 						   </p>
				<p style="text-align:right;margin-right:40px;">
				Norsk: Horizontal <input class="checkbox" type="checkbox" <?php echo $show_no_h; ?>id="indoeuro_show_no_h" name="indoeuro_show_no_h" />
 						   / Vertical <input class="checkbox" type="checkbox" <?php echo $show_no_v; ?>id="indoeuro_show_no_v" name="indoeuro_show_no_v" />
 						   </p>
				<p style="text-align:right;margin-right:40px;">
				Polski: Horizontal <input class="checkbox" type="checkbox" <?php echo $show_pl_h; ?>id="indoeuro_show_pl_h" name="indoeuro_show_pl_h" />
 						   / Vertical <input class="checkbox" type="checkbox" <?php echo $show_pl_v; ?>id="indoeuro_show_pl_v" name="indoeuro_show_pl_v" />
 						   </p>
				<p style="text-align:right;margin-right:40px;">
				Português: Horizontal <input class="checkbox" type="checkbox" <?php echo $show_pt_h; ?>id="indoeuro_show_pt_h" name="indoeuro_show_pt_h" />
 						   / Vertical <input class="checkbox" type="checkbox" <?php echo $show_pt_v; ?>id="indoeuro_show_pt_v" name="indoeuro_show_pt_v" />
 						   </p>
				<p style="text-align:right;margin-right:40px;">
				Română: Horizontal <input class="checkbox" type="checkbox" <?php echo $show_ro_h; ?>id="indoeuro_show_ro_h" name="indoeuro_show_ro_h" />
 						   / Vertical <input class="checkbox" type="checkbox" <?php echo $show_ro_v; ?>id="indoeuro_show_ro_v" name="indoeuro_show_ro_v" />
 						   </p>
				<p style="text-align:right;margin-right:40px;">
				Русский: Horizontal <input class="checkbox" type="checkbox" <?php echo $show_ru_h; ?>id="indoeuro_show_ru_h" name="indoeuro_show_ru_h" />
 						   / Vertical <input class="checkbox" type="checkbox" <?php echo $show_ru_v; ?>id="indoeuro_show_ru_v" name="indoeuro_show_ru_v" />
 						   </p>
				<p style="text-align:right;margin-right:40px;">
				Slovenčina: Horizontal <input class="checkbox" type="checkbox" <?php echo $show_sk_h; ?>id="indoeuro_show_sk_h" name="indoeuro_show_sk_h" />
 						   / Vertical <input class="checkbox" type="checkbox" <?php echo $show_sk_v; ?>id="indoeuro_show_sk_v" name="indoeuro_show_sk_v" />
 						   </p>
				<p style="text-align:right;margin-right:40px;">
				Slovenščina: Horizontal <input class="checkbox" type="checkbox" <?php echo $show_sl_h; ?>id="indoeuro_show_sl_h" name="indoeuro_show_sl_h" />
 						   / Vertical <input class="checkbox" type="checkbox" <?php echo $show_sl_v; ?>id="indoeuro_show_sl_v" name="indoeuro_show_sl_v" />
 						   </p>
				<p style="text-align:right;margin-right:40px;">
				Shqip: Horizontal <input class="checkbox" type="checkbox" <?php echo $show_sq_h; ?>id="indoeuro_show_sq_h" name="indoeuro_show_sq_h" />
 						   / Vertical <input class="checkbox" type="checkbox" <?php echo $show_sq_v; ?>id="indoeuro_show_sq_v" name="indoeuro_show_sq_v" />
 						   </p>
				<p style="text-align:right;margin-right:40px;">
				Srpski: Horizontal <input class="checkbox" type="checkbox" <?php echo $show_sr_h; ?>id="indoeuro_show_sr_h" name="indoeuro_show_sr_h" />
 						   / Vertical <input class="checkbox" type="checkbox" <?php echo $show_sr_v; ?>id="indoeuro_show_sr_v" name="indoeuro_show_sr_v" />
 						   </p>
				<p style="text-align:right;margin-right:40px;">
				Suomi: Horizontal <input class="checkbox" type="checkbox" <?php echo $show_fi_h; ?>id="indoeuro_show_fi_h" name="indoeuro_show_fi_h" />
 						   / Vertical <input class="checkbox" type="checkbox" <?php echo $show_fi_v; ?>id="indoeuro_show_fi_v" name="indoeuro_show_fi_v" />
 						   </p>
				<p style="text-align:right;margin-right:40px;">
				Svenska: Horizontal <input class="checkbox" type="checkbox" <?php echo $show_sv_h; ?>id="indoeuro_show_sv_h" name="indoeuro_show_sv_h" />
 						   / Vertical <input class="checkbox" type="checkbox" <?php echo $show_sv_v; ?>id="indoeuro_show_sv_v" name="indoeuro_show_sv_v" />
 						   </p>
				<p style="text-align:right;margin-right:40px;">
				Kiswahili: Horizontal <input class="checkbox" type="checkbox" <?php echo $show_sw_h; ?>id="indoeuro_show_sw_h" name="indoeuro_show_sw_h" />
 						   / Vertical <input class="checkbox" type="checkbox" <?php echo $show_sw_v; ?>id="indoeuro_show_sw_v" name="indoeuro_show_sw_v" />
 						   </p>
				<p style="text-align:right;margin-right:40px;">
				ไทย: Horizontal <input class="checkbox" type="checkbox" <?php echo $show_th_h; ?>id="indoeuro_show_th_h" name="indoeuro_show_th_h" />
 						   / Vertical <input class="checkbox" type="checkbox" <?php echo $show_th_v; ?>id="indoeuro_show_th_v" name="indoeuro_show_th_v" />
 						   </p>
				<p style="text-align:right;margin-right:40px;">
				Tagalog: Horizontal <input class="checkbox" type="checkbox" <?php echo $show_tl_h; ?>id="indoeuro_show_tl_h" name="indoeuro_show_tl_h" />
 						   / Vertical <input class="checkbox" type="checkbox" <?php echo $show_tl_v; ?>id="indoeuro_show_tl_v" name="indoeuro_show_tl_v" />
 						   </p>
				<p style="text-align:right;margin-right:40px;">
				Türkçe: Horizontal <input class="checkbox" type="checkbox" <?php echo $show_tr_h; ?>id="indoeuro_show_tr_h" name="indoeuro_show_tr_h" />
 						   / Vertical <input class="checkbox" type="checkbox" <?php echo $show_tr_v; ?>id="indoeuro_show_tr_v" name="indoeuro_show_tr_v" />
 						   </p>
				<p style="text-align:right;margin-right:40px;">
				Українська: Horizontal <input class="checkbox" type="checkbox" <?php echo $show_uk_h; ?>id="indoeuro_show_uk_h" name="indoeuro_show_uk_h" />
 						   / Vertical <input class="checkbox" type="checkbox" <?php echo $show_uk_v; ?>id="indoeuro_show_uk_v" name="indoeuro_show_uk_v" />
 						   </p>
				<p style="text-align:right;margin-right:40px;">
				Tiếng Việt: Horizontal <input class="checkbox" type="checkbox" <?php echo $show_vi_h; ?>id="indoeuro_show_vi_h" name="indoeuro_show_vi_h" />
 						   / Vertical <input class="checkbox" type="checkbox" <?php echo $show_vi_v; ?>id="indoeuro_show_vi_v" name="indoeuro_show_vi_v" />
 						   </p>
				<p style="text-align:right;margin-right:40px;">ייִדיש:
				Horizontal <input class="checkbox" type="checkbox" <?php echo $show_yi_h; ?>id="indoeuro_show_yi_h" name="indoeuro_show_yi_h" />
 						   / Vertical <input class="checkbox" type="checkbox" <?php echo $show_yi_v; ?>id="indoeuro_show_yi_v" name="indoeuro_show_yi_v" />
 						   </p>
				<p style="text-align:right;margin-right:40px;">
				中文: Horizontal <input class="checkbox" type="checkbox" <?php echo $show_zh_h; ?>id="indoeuro_show_zh_h" name="indoeuro_show_zh_h" />
 						   / Vertical <input class="checkbox" type="checkbox" <?php echo $show_zh_v; ?>id="indoeuro_show_zh_v" name="indoeuro_show_zh_v" />
 						   </p>
				<p style="text-align:right;margin-right:40px;">
				漢語: Horizontal <input class="checkbox" type="checkbox" <?php echo $show_sv_h; ?>id="indoeuro_show_zt_h" name="indoeuro_show_zt_h" />
 						   / Vertical <input class="checkbox" type="checkbox" <?php echo $show_sv_v; ?>id="indoeuro_show_zt_v" name="indoeuro_show_zt_v" />
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