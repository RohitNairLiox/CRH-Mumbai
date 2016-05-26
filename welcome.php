<html>
<body>



<?php
if ($_POST["name"]=="" or $_POST["email"]=="" or $_POST["role"]==""){
	echo '<script type="text/javascript">alert("All The Fields are Necessary! \n\n Please fill the form again :) ");  </script>';
	echo '<script type="text/javascript">window.location = "subscribe.html";  </script>';
}
else{


$servername = "localhost";
$username = "puthenrohit";
$password = "love2play";
$dbname = "subc";
$subusername= $_POST["name"];
$subusermail= $_POST["email"];
$subusernumber= $_POST["number"];	
$subuserrole= $_POST["role"];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO subscribers(Name, Email, Number, Role)
VALUES ('$subusername', '$subusermail', '$subusernumber', '$subuserrole')";

if (mysqli_query($conn, $sql)) {
    echo '<script type="text/javascript">alert("Thanks to your willingness to help! \n\n Your personal information wont be shared with anyone and we wont spam you either.\n\n We will get back to you with all the breakups and details, within a week :) ");  </script>';
	echo '<script type="text/javascript">window.location = "index.html";  </script>';
	
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
?> 




















</body>
</html> 