
function multiexplode ($delimiters,$string) {
    
    $ready = str_replace($delimiters, $delimiters[0], $string);
	
	
    $launch = explode($delimiters[0], $ready);
    return  $launch;
}

$text ="0-100,101-200" ;
$exploded = multiexplode(array("-",","),$text);
print_r($exploded);

