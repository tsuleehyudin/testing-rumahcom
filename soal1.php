<?php 
/**
* @author : asep solehudin
* @description : testing number 1
*/
function fb($from = 0,$to = 0){
	$text = '';
	$from = (int) $from; #set to integer
	$to = (int) $to; #set to integer
	
	if($from > $to || $from < 0 || $to < 0) return $text; #$from should be greater than $to $the data should positif
	
	for($i=$from;$i <= $to;$i++){
		if($i % 3 === 0) $text.='Fizz';
		if($i % 5  === 0) $text.='Buzz';
		if($i % 5  !== 0 && $i % 3 !== 0) $text.=$i;
		$text.=' ';
	}
	
	return $text;
}

$from = 12;
$to = 30;
echo fb($from,$to);

?>
