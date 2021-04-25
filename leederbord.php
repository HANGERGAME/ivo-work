<div class="card text-white bg-dark mb-3" style="max-width: 50rem;">
  <div class="card-header"></div>
  <div class="card-body">
<h1> Leederbord </h1>
		<figure class="text-end">
  		<blockquote class="blockquote">
  	</blockquote>
  	<figcaption class="blockquote-footer">

    <strong>homepage  You can see where are you in the </strong> <cite title="Source Title">Ranking</cite>
  </figcaption>
</figure>
</head>
<body>
</div>
	<?php  include "includes/head.php" ;
	include "includes/connection.php" ;
	include "includes/functions.php" ;?>

	<div class="d-grid gap-2">
  		<a button class="btn btn-success" type="button" href= Leederbord_easy.php>Easy</button></a>
  	 	<a button class="btn btn-primary" type="button" href= Leederbord_medium.php>Medium</button></a>
  	 	<a button class="btn btn-danger" type="button" href= Leederbord_hard.php>Hard</button></a>
  </p>
  <a button class="btn btn-danger" type="button" href= index.php>Exit</button></a>
  	
  <?php 
	$read_query = "SELECT game_levels.game_level_id, player_name, leederbord.time ,game_levels.game_level_choice ,game_genres.game_genre_name FROM players JOIN leederbord ON players.player_id = leederbord.player_id JOIN game_levels ON game_levels.game_level_id = leederbord.game_level_id JOIN game_genres ON game_genres.game_genre_id = leederbord.game_genre_id";
	$result = mysqli_query($conn, $read_query);?>
	
		<?php
			if(mysqli_num_rows($result) > 0){

			echo "<table class='table table-dark table-striped'>";
				echo "<thead>";
					echo "<tr>";
						echo "<th>id</th>";
						echo "<th>name</th>";
						//echo "<th>email</th>";
						echo "<th>time</th>";
						echo "<th>game level</th>";
						echo "<th>game genre</th>";		

					echo "</tr>";
				echo "</thead>";
			echo "<tbody>";

			while($row = mysqli_fetch_assoc($result)){
				echo "<tr>";
					echo "<td>".$row['game_level_id']."</td>";
					echo "<td>".$row['player_name']."</td>";
					//echo "<td>".$row['player_email']."</td>";
					echo "<td>".timeFormatter($row['time'])."</td>";
					echo "<td>".$row['game_level_choice']."</td>";
					echo "<td>".$row['game_genre_name']."</td>";
					echo "<td></td>";
					echo "</tr>";
			}
		}?>

		<?php  include "includes/footer.php" ;?>