<html>
<head><title>register</title>
	
	<script type="text/javascript">
	function valid()
		{
			
		}
    </script>
</head>
<body>
    <center>
        <h1>Registration Form</h1>
        <br>
	<form action="" method="POST">
Name:<input type="text" name="name" value=""><br><br>
Age:<input type="number" name="age" value=""><br><br>
<input type="submit" name="submit" value="accept">
<input type="submit" name="reject" value="reject">
<input type="reset" name="res" value="cancel">
	</form>
    <a href="display.php">View</a>
        </center>
</body>
</html>
<?php
if(isset($_POST['submit']))	
   {
	 $name=$_POST['name'];	
	 $age=$_POST['age'];
	 include_once("query.php");	
	 $obj=new database();
	 $exe=$obj->insert($name,$age);	
    header("location:display.php");
}
if(isset($_POST['reject']))
{
	header("location:display.php");
}
?>