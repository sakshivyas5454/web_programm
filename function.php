<?php 
$a=abs(-10);
echo $a;
echo "<br>";
?>

<?php
$a=sqrt(16);
echo $a;
echo "<br>";
?>

<?php
$a=rand(15,25);
echo $a;
echo "<br>";
?>

<?php
$a=ceil(3.5);
$b=floor(3.5);

echo $a;
echo "<br>";
echo $b;
echo "<br>";
?>

<?php
$a=round(3.7);
echo $a;
echo "<br>";
?>

<?php
$a=pow(2,3);
echo $a;
echo "<br>";
?>

<?php
$a=max(5,8,3);
echo $a;
echo "<br>";
?>

<?php
$a=min(5,8,3);
echo $a;
echo "<br>";
?>

<?php
$a=strlen("HELLO WORLD");
echo $a;
echo "<br>";
?>

<?php
$a=strpos("Hello,World!","World");
echo $a;
echo "<br>";
?>

<?php
$a=str_replace("World","Universe","Hello,World!");
echo $a;
echo "<br>";
?>

<?php
$a=substr("HELLO WORLD!",0,5);
echo $a;
echo "<br>";
?>

<?php
$a=strtoupper("Hello,World!");
echo $a;
echo "<br>";
?>

<?php
$a=strtolower("Hello,World!");
echo $a;
echo "<br>";
?>

<?php
$a=ucfirst("hello world");
echo $a;
echo "<br>";
?>

<?php
$a=strrev("hello");
echo $a;
echo "<br>";
?>

<?php
$a=trim("hello world");
echo $a;
echo "<br>";
?>

<?php
$a=date("Y-m-d H:i:s");
echo $a;
echo "<br>";
?>

<?php
$a=time();
echo $a;
echo "<br>";
?>