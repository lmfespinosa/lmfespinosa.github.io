<?php

function __($str, $lang = null){
	
	if ( $lang != null ){

		if ( file_exists('../../languages/'.$lang.'.php') ){

			include('../../languages/'.$lang.'.php');
			if ( isset($texts[$str]) ){
				$str = $texts[$str];
			}
		}
	}

	return $str;
	
}
?>