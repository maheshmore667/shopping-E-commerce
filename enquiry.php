

<?php

$name=$_POST['name'];
$email=$_POST['email'];
$category=$_POST['category'];
$description=$_POST['description'];
$conn=new mysqli('localhost','root','','shopping') or die("Unable to connect");
if(empty($name)||empty($email)||empty($category)||empty($description)){
	header("Location: enquiry.html");
}
else
{
	$stmt=$conn->prepare("insert into enquiry(name,email,category,description)values(?,?,?,?)");
	$stmt->bind_param("ssss",$name,$email,$category,$description);
	$stmt->execute();
	function function_alert($message)
	{
	echo "<script>alert('Enquiry Registered Successfully.');</script>";
	}
	$stmt->close();
	$conn->close();
	
}
function_alert("Enquiry Registered Successfully.");

?>

