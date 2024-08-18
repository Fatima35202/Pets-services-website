<?php
include("connect.php");

$sql = "SELECT * FROM users";

$result = mysqli_query($conn,$sql);

if($result){
?>
<br>
<table class="table table_hover" width="80%" border="1%" cellspacing="10%">
<tr class="bg_dark text_light">
<th>ID<th>
<th>Username<th>
<th>Email<th>
<th>Password<th>
<th>Edit<th>
<th>Delete<th>
</tr>
<?php
	while($row=mysqli_fetch_assoc($result)){
	$id=$row["id"];
?>
	<tr>
	<td><?php echo $row["id"];?><td>
	<td><?php echo $row["username"];?><td>
	<td><?php echo $row["email"];?><td>
	<td><?php echo $row["password"];?><td>
	<td><a href="edit.php?id=<?php echo $id;?>">Edit</a></td>
	<td><a href="delete.php?id=<?php echo $id;?>">Delete</a></td>
	</tr>
<?php
}
?>
	</table>
<?php
}else{
	echo "Error".mysqli_error($conn);
	}

mysqli_close($conn);
?>




