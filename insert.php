<?php
	$con = mysqli_connect('127.0.0.1','phearum','123');
	if (!$con) {
		echo 'Note Conecting to Database';
	}
	if (!mysqli_select_db($con,'mydb')) {
		# code...
		echo 'Database not connected';
	}
	$id = $_POST['id'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$sql = "INSERT INTO users (id,name,email,password) VALUES ('$id','$name','$email','$password')";
	if (!mysqli_query($con,$sql)) {
		# code...
		echo 'Not Inserted';
	}
	else{
		echo "Inserted";
		/*<table>
			<tr>
				<th>ID</th>
				<th>Username</th>
				<th>Passsword</th>
			</tr>

			$sqli = "SELECT  id, name, password FROM user";
			$result = mysqli_query($con, $sqli);

			if (mysqli_query($con, $sqli)) {
				# code...
				echo "connected";
			}
			if ($result -> num_rows > 0){
				while ($row = $result -> fetch_assoc()) {
					echo '<tr><td>'.$row['id'].'</tr><td>'.$row['name'].'</td></td>'.$row['password'].'</td></tr>';
				}
				echo '</table>';
			}
			else{
				echo '0 result';
			}
			$con ->close();
		</table>*/
	}
	header("refresh:5; url=index1.html");
?>