<?php  
include "includes/head.php";
include "includes/connection.php";
include "includes/loginCheck.php" ;
?>

<h3> PREGAME </h3>
<form  action="word_select.php" method="post">
	<?php
		$game_genre = "SELECT game_genre_id, game_genre_name FROM game_genres";
		$result = mysqli_query( $conn, $game_genre );
		?>

			<div class="btn-group">
				<select class="form-control" name="game_genre">
					

			<?php
			if( mysqli_num_rows( $result ) > 0 ){
				while( $row = mysqli_fetch_assoc( $result ) ){
					echo "<option value=".$row['game_genre_id']." >".$row['game_genre_name']."</option>";

				}
			} 
			else {
				die('Query failed!' . mysqli_error($conn));
			}
			?>
			</select>
	
	<?php
		$game_levels = "SELECT game_level_id, game_level_choice FROM game_levels";
		$result = mysqli_query( $conn, $game_levels );?>

		<div class="form-group">
			<select class="form-control" name="game_level"><p>plase choose level</p>
			
	<?php
		if( mysqli_num_rows( $result ) > 0 ){
		 while( $row = mysqli_fetch_assoc( $result ) ){
			echo "<option value=".$row['game_level_id']." >".$row['game_level_choice']."</option>";
				
			}

			}
			else {
				die('Query failed!' . mysqli_error($conn));
			}
			?>
		</select>
		<p>
		<input type="submit" value="play" name="submit">
	</form>

  		<a type="button" class="btn btn-outline-light" href="index.php">Back</a>
	
<?php

if (isset($_POST['submit'])) {
	$_SESSION['time'] = hrtime(true);
	$start = hrtime(true);
}




