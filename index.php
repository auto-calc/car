<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/kickstart.css" media="all" /> <!-- KICKSTART -->
<title>Auto Calc</title>
</head>

<body>
<!--<form method="post" action="">
<label for="text2">Car name</label>
<input id="text2" type="text" placeholder="Enter a car name" /><br><br>
<label for="text3">- максимальной мощности, об/мин:</label>
<input id="text3" type="text" placeholder="Placeholder Text" /><br>
<label for="text4">- максимальном крутящем моменте, об/мин:</label>
<input id="text4" type="text" placeholder="Placeholder Text" /><br>
<label for="text5">- срабатывании ограничителя частоты вращения , об/мин:</label>
<input id="text5" type="text" placeholder="Placeholder Text" /><br>

Передаточные числа коробки передач:<textarea id="textarea1" placeholder="3.545
2.048
1.346
0.971
0.763"></textarea>
</form>-->
<form id="SpeedRPMForm" name="SpeedRPMForm" method="post" action="/my_templates/speed-rpm_chart.php" target="calcwin">
<table border="0" cellspacing="1" bordercolor="#000000" width="100%">
<tr>
<td>Наименование автомобиля:<br /><i><small>(будет выведено на странице с результатами)</small></i></td>
<td><input type="text" name="fld_carname" id="fld_carname" value="Автомобиль для примера" /></td>
</tr>
<tr>
<td>Частота вращения вала двигателя при: </td>
<td>&nbsp;</td>
</tr>
<tr>
<td>   - максимальной мощности, об/мин:</td>
<td><input type="text" name="fld_power" id="fld_power" value="5800" /></td>
</tr>
<tr>
<td>   - максимальном крутящем моменте, об/мин:</td>
<td><input type="text" name="fld_torq" id="fld_torq" value="3400" /></td>
</tr>
<tr>
<td>   - срабатывании ограничителя частоты вращения , об/мин:</td>
<td><input type="text" name="fld_eng_max" id="fld_eng_max" value="6700" /></td>
</tr>
<tr>
<td>Передаточные числа коробки передач:</td>
<td>
<p><textarea name="textarea" id="textarea" cols="7" rows="7">3.545
2.048
1.346
0.971
0.763</textarea>
</td>
</tr>
<tr>
<td>Передаточное число главной передачи:</td>
<td><input type="text" name="fld_gp" id="fld_gp" value="4.176" /></td>
</tr>
<tr>
<td>Размер шин:</td>
<td><input name="fld_tyre1" type="text" id="fld_tyre1" size="3" maxlength="3" value="175" />/<input name="fld_tyre2" type="text" id="fld_tyre2" size="2" maxlength="2" value="70" /> -R<input name="fld_tyre3" type="text" id="fld_tyre3" size="2" maxlength="2" value="13" /></td>
</tr>
<tr>
<td>Шаг частоты вращения вала для расчета скорости:<br /><i><small>(определяет подробность данных в таблице с результатами)</small></i></td>
<td><input type="text" name="fld_rescool" id="fld_rescool" value="500" /></td>
</tr>
<tr>
<td><input type="button" name="startbutton" id="startbutton" value="Рассчитать" onClick="OpenChkDigResult(2)" /></td>
<td>&nbsp;</td>
</tr>
</table>
</form>
<?php 
	if(isset($_POST[startbutton])) // проверка нажатия кнопки Рассчитать
	{
		echo "<table border='1' width='200' height='200'>
			<tr><td>Длина окружности</td><td>L</td></tr>
			</table>";
	}
?>
</body>
</html>
