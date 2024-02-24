<?php
$name=$_REQUEST['my_name'];
$city=$_GET['my_city'];

echo "<table border=1 bordercolor=blue>
<tr><td><b>Name:</b></td>
<td>$name</td></tr>
<tr><td>City:</td>
<td>$city</td></tr>
</table>";
?>