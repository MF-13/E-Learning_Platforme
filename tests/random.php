<?php
$array = array('ayman','maryame','asar','ema','raed');



shuffle($array);
foreach ($array as $rep) {
	echo '<input type="radio" value="'.$rep.'"  name="q"  >'.$rep.'<br>';
	
}

?>