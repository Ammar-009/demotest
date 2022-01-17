<?php
  $fn = fopen("myfile.txt","r");
  
  while(! feof($fn))  {
	$line = fgets($fn);

  preg_match_all("^\[(.*)\]^",$line,$vresults, PREG_PATTERN_ORDER);
  	echo $result;
  }

  fclose($fn);
?>
