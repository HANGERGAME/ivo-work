
<?php 
include "includes/head.php";
include "includes/connection.php";

if (isset($_SESSION)) { session_destroy(); }
// check
if (!empty($_POST['player_name'])) {
	
	$userName = $_POST['player_name'];
	$userPassword = $_POST['player_password'];


	//READ
	$read_query = "SELECT * FROM `players` WHERE `player_name` = '$userName' AND `player_password` = '$userPassword'";

	$result = mysqli_query($conn, $read_query);

	if (mysqli_num_rows($result) > 0) {
		$player = mysqli_fetch_assoc($result);
		session_start();
		$_SESSION['player_id'] = $player['player_id'];
		$_SESSION['player_name'] = $player['player_name'];
		header('Location:pregame.php');

		
	}else{
		echo "<p>INCCORECT username/password!</p>";

	}
}
?>

<body>
	<h1>Login</h1>
<form action="#" method="post" class="form">
	<p>First name</p><input type="text" name="player_name">
	<p>Password</p><input type="Password" name="player_password">
	<p></p>
	<input type="submit" value="submit" >
</form>
</body>
</html>


	
	