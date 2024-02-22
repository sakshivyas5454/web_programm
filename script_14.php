<html>
     <body>
	   <form method=post>
	   enter temprature: <input type="number" name="celsius"><br>
	   <input type="submit" value="submit">

		</form>
		</body>
</html>	

<?php
   $c=$_REQUEST['celsius'];
   $f=($c*9/5)+32;
  echo "temprature in fahrenheit:".$f."F";
  ?>