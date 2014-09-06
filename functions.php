<?php


function kucult($kelime){
		$kucuk=array('i','ı','ğ','ö','ü','ş','ç');
		$buyuk=array('İ','I','Ğ','Ö','Ü','Ş','Ç');
		$kelime=str_replace($buyuk,$kucuk,$kelime);
		$kelime=strtolower($kelime);
		
		
		return $kelime ;
}

function utf8_strrev($str){
               
		 preg_match_all('/./us', $str, $ar);
		 return implode(array_reverse($ar[0]));
                                
								}

function get_last_word_in_string($string){

    $dizi = array();
    $dizi	= explode(' ', $string); 
 
    $count_item = count($dizi);
     return $dizi[$count_item-1] ;    
		
}


?>