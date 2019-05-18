<?php

$num_char 	 = ; 
// persegi_var nantinya nilainya bisa bertambah / berkurang, sedangkan half tetap
$persegi 	 = floor($num_char / 2);
$persegi_var = $persegi;
$char1 		 = '=';
$char2 		 = 'x';

echo '<div style="font:bold 16px courier new; line-height:10px">';
// loop baris
for ($row  = 1; $row <= $num_char; $row++)
{
	// loop kolom
	for ($col = 1; $col <= $num_char; $col++)
	{
		$char =	$col > $persegi_var && $col <= ($num_char - $persegi_var) ? $char2 : $char1;
		echo $char;	
	}
	$row <= $persegi_var ? $persegi_var-- : $persegi_var ++;	
	echo '<br/>';
}
echo '</div>';
?>