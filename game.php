<?php 
include "includes/head.php";
include 'includes/functions.php';
?>

<a type="button" class="btn btn-outline-light" href="leederbord.php">Leederbord</a>
<a type="button" class="btn btn-outline-light" href="pregame.php">Play game</a>

<?php 
if (!isset($_SESSION)) { session_start(); }
echo $_SESSION['word'];



if (isset($_GET['letter'])) {
   array_push($_SESSION['clickedLetters'], $_GET['letter']);
   lettercheck($_GET['letter']);
}

?>

<div>
<img src="includes/png/<?php echo $_SESSION['error'] ?>.png" height="400" weight="400">
<p><?php echo implode(" ",$_SESSION['hiddenWord']). "<p></p>ERROR: ".$_SESSION['error']; ?></p>
<!-- implode pravi mmasiva hiddenword na string -->
</div>

<div class="letter"> 
<form class="letter" action="game.php" method="get">
<?php 
  $i=0;
  for ($letter='a'; $letter != 'aa'; $letter++) { 
    if ($i % 10 == 0) {
      echo "<br>";
    }
    if(in_array($letter, $_SESSION['clickedLetters'])){
      echo "<input type='submit'  name='letter' value='".$letter."' class='btn btn-light clicked' disabled>";
    }else{
       echo "<input type='submit'  name='letter' value='".$letter."' class='btn btn-light'>";
    }
    $i++;
  }   
?>

</form> 
</div>
</body>


<?php
if (!in_array('_', $_SESSION['hiddenWord'])) {
  $end = hrtime(true) / 1000000000;
  $_SESSION['time'] = $end - $_SESSION['startTime'];
  saveResult();
  echo "<div class='win'> 
  <h1>Congratulations!</h1>";

  echo "<h4>Your time is:" . timeFormatter($_SESSION['time']) . "</h4>";
  echo "<a type='button' class='btn btn-outline-light' href='leederbord.php'>Leederbord</a></div>";
}elseif ($_SESSION['error'] > 6) {
  echo "<div class='win'> game over</div>";
}
?>

