<?php

/*
 * $regex string Regex pattern to match output
 * $length int Length of returned output
 *
 */
function regex_gen( $regex = "[A-Za-z0-9]+", $length = 8, $output = '' ){

	while(true){
	
		$string = base64_encode(sha1(microtime(true) . rand(0, 9999)));
		$string .= file_get_contents("/dev/random", false, NULL, 0, 2048);
		$string .= base64_encode(sha1(microtime(true) . rand(0, 9999)));

		preg_match_all("/($regex)/", $string, $match);
		
		$output .= implode("", $match[1]);

		if(strlen($output) < $length){
			return regex_gen($regex, $length, $output);
		}
		elseif(strlen($output) == $length){
			return $output;
		}
		else{
			return substr($output, 0, $length);
		}
	}
}
