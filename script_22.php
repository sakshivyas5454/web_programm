<html>
<form method=post>
<h1><b>Area of circle</h1></b>
   enter Radius:<input type=number name=red/>
   <input type=submit name=submit value=count/>
   </html>
<?php

   $r=$_REQUEST['rad'];
   $cir=3.14*$r*$r;
   echo "area of circle:".$cir;
   ?>