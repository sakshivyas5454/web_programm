<html>
    <form method=post>
	<h1>square root</h1>
	enter number:<input type=number name=num/>
	<input type=submit name=submit value="count square root"/>
	</form>
 </html>


<?php
 $n=$_REQUEST['num'];
 $sqr=sqrt($n);
 echo "square root of $n is $sqr";
 ?>