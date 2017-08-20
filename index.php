<?php

//connection
mysql_connect("localhost","root","");

//select db
mysql_select_db("stage1db");

$sql = mysql_query("SELECT * FROM users ORDER BY id ASC");

?>

<html>
<head>
<title>HNG stage 1</title>
</head>
<body>
<table width="600" border="1" cellpadding="1" cellspacing="1">

<tr>
<th>Name</th>
<th>Gender</th>
<th>Email</th>
<tr>

<?php
while($user=mysql_fetch_assoc($sql)){
    echo "<tr>";
    echo "<td>".$user['username']."</td>";
    echo "<td>".$user['gender']."</td>";
    echo "<td>".$user['email']."</td>";
    echo "</tr>";

}//end while

?>
</body>

</html>