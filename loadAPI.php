<?php

$APIs = array(
"jquery.min",
"global",
"settings",
"bootstrap.min",
"bootstrap-colorpicker.min",
"toastr.min",
"switchery.min",
"rangeslider.min",
"perfect-scrollbar.jquery.min",
"Youtubeiframe_api",
"key-event",
"LanguagePackEnglish",
"LMexpress.sniff2",
"i18n",
"ogario/ogario.v4.master.regionobj",
"ogario/ogario.v4.master");

foreach($APIs as $API){
     echo '<script src="'.$srv.'/'.$API.'.js?ver='.getRandomStr().'"></script>'."\r\n";
}
?>