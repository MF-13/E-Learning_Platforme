<?php
$array = array('ayman','maryame','asar','ema','raed');



shuffle($array);
$i=0;
foreach ($array as $rep) {
	echo '<input type="radio" value="'.$rep.'"  name="'.$i.'"  >'.$rep.'<br>';
	$i++;

}

?>