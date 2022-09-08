<html>
<head>
	<link rel="Stylesheet" href="FPStyle.css" />
</head>
<body>
<?php

$dbhost = 'localhost';
$dbname = 'it 222';
$username = 'root';
$pw = '';
$connection = mysqli_connect($dbhost, $username, $pw, $dbname);
	
if(isset($_POST['btn_submit']))
{
    $UNAME = $_POST['uname'];
	$EMAIL = $_POST['ema'];
	$COMMENT = $_POST['comm'];

	$sql5 = "INSERT INTO fpcomments (username, email, comment) VALUES ('$UNAME', '$EMAIL', '$COMMENT')";
	
	if (mysqli_query($connection, $sql5)) 
	{
		echo "<br>"; echo "Thank you ... Your comment uploaded successfully!";
	}
	else
	{
		echo "<br>"; echo "Error: " . $sql5 . "<br>" . mysqli_error($connection);
	}
}

mysqli_close($connection);
?>

</body>
</html>