<html>
<body>
<form>
		enter number 1:<input type="number" name="num1">
		enter number 2:<input type="number" name="num2">
		<input type="submit" name="submit">
</form>
</body>
</html>

<?php
error_reporting(0);
 $myval1=$_REQUEST['num1'];
 $myval2=$_REQUEST['num2'];

function addb2($myval1,$myval2)
{
	return $myval1+$myval2;
}
$sum=addb2($myval1,$myval2);
echo $sum;

echo "<br>";
function subb2($myval1,$myval2)
{
	return $myval1-$myval2;
}
$sub=subb2($myval1,$myval2);
echo $sub;

echo "<br>";
function mulb2($myval1,$myval2)
{
	return $myval1*$myval2;
}
$mul=mulb2($myval1,$myval2);
echo $mul;

?>