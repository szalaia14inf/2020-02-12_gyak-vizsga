<?php

 $res = mysql_query(" SELECT nev, targy, email FROM tanarok, kapocs, targy WHERE tanarok.id = kapocs.tanar AND kapocs.targy = targy.tid AND besorolas='Pedagogus II'");


echo'<table>';
		echo'<tr>';
			echo'<td><b>Név</b></td>';
			echo'<td><b>Tárgy</b></td>';
			echo'<td><b>E-Mail</b></td>';
		echo'</tr>';
		while($row = mysql_fetch_array($res))
		{
			echo'<tr>';
				echo'<td>'.$row['nev']Nev.'</td>';
				echo'<td><center>'.$row['targy']Targy.'</center></td>';
				echo'<td><center>'.$row['email']Email.'</center></td>';
			echo'</tr>';
		}
echo'</table>';

?>