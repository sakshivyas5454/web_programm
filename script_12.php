<html>
  <body>
  
      <form method=post>
	  enter stirng 1:<input type=text name='stirng1'
	  enter stirng 2:<input type=text name='stirng2'
   <input type=submit name='submit'>
   </form>
</body>
</html>

<?php>

$str1=$_REQUEST['stirng1'];
$str2=$_REQUEST['stirng2'];

$cstr=$str." ".str2;
   echo  "cobined string: ".$cstr;

?>