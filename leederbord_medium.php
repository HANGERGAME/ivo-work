<div class="card text-white bg-dark mb-3" style="max-width: 50rem;">
  <div class="card-header"></div>
  <div class="card-body">
	<h1> Leederbord </h1>
	<figure class="text-end">
  <blockquote class="blockquote">
  </blockquote>
  <figcaption class="blockquote-footer">
    Level <cite title="Source Title">Medium</cite>
  </figcaption>
</figure>
</head>
<body>
</div>
	<a button class="btn btn-primary" type="button" href= Leederbord.php>Back</button></a>
	
	<?php  
	include "includes/head.php";
	include "includes/connection.php" ; 
	include "includes/functions.php" ;
	$read_query = "SELECT * FROM players JOIN leederbord ON players.player_id = leederbord.player_id WHERE leederbord.game_level_id = 2";
	$result = mysqli_query($conn, $read_query);?>

	<a button class="btn btn-danger" type="button" href= index.php>Exit</button></a>
	<?php
		$read_query = "SELECT game_levels.game_level_id, player_name, leederbord.time ,game_levels.game_level_choice ,game_genres.game_genre_name FROM players JOIN leederbord ON players.player_id = leederbord.player_id JOIN game_levels ON game_levels.game_level_id = leederbord.game_level_id JOIN game_genres ON game_genres.game_genre_id = leederbord.game_genre_id WHERE leederbord.game_level_id = 2";
			
		$result = mysqli_query($conn, $read_query);?>
		<?php
	
			if(mysqli_num_rows($result) > 0){

			echo "<table class='table table-dark table-striped'>";
				echo "<thead>";
					echo "<tr>";
						echo "<th>name</th>";
						echo "<th>time</th>";
						echo "<th>game level</th>";
						echo "<th>game genre</th>";		
					echo "</tr>";
				echo "</thead>";
			echo "<tbody>";

			while($row = mysqli_fetch_assoc($result)){
				echo "<tr>";
					echo "<td>".$row['player_name']."</td>";
					echo "<td>".timeFormatter($row['time'])."</td>";
					echo "<td>".$row['game_level_choice']."</td>";
					echo "<td>".$row['game_genre_name']."</td>";
					echo "<td></td>";
					echo "</tr>";
			}
		}?>
<p>
	<div class="d-grid gap-2">
  		<a button class="btn btn-primary" type="button" href= pregame.php>Play again</button></a>
  	 	<a button class="btn btn-danger" type="button" href= index.php>Exit</button></a>
  </p>
	<?php  include "includes/footer.php" ;?>