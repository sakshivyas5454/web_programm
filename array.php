<?php
$student=array("1","r","hey","090.99","220801400"
               ,"u","har","dhruvi","rutvi","arti");
print_r($student)

?>

<?php
$student=array("name"=>"palak","rollno"=>"56","division"=>"b2","department"=>"BCA"
              ,"faculty"=>"sc&it","university"=>"atmiya","enroll"=>"220801400"
			  ,"city"=>"rajkot","country"=>"india","surname"=>"yagnik");
//print_r($student)
foreach($student as $student=>$temp)
{
	echo "$student";
	
	echo "$temp";
	echo "<br>";
}
?>

<?php
$student_master=array(
         array("rollno"=>"56"),
		 array("division"=>"b2"),
         array("department"=>"BCA"),
         array("faculty"=>"sc&it"),
         array("university"=>"atmiya"),
         array("enroll"=>"220801400"),
         array("city"=>"rajkot"),
		 array("country"=>"india")
		 );
		// print_r($student_master)
		foreach($student_master as $mytemp)
		{
			print_r($mytemp);
			echo "<br>";
		}
?>