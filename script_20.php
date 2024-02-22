<html>
 <form method=post>
 <h1>Factorial</h1>
 Enter number:<input type=number name=num />
 <input type=submit name=submit value="check"/>
 </form>
</html>



<?php
error_reporting(0)
    $n=$REQUEST['num'];
    $fact=1;
for($i=$n;$i>=1;$i--)
{
	$fact=$fact=$i;
}
echo "factorial of $n is $fact";


?>