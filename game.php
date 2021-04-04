<?php include "includes/head.php";?>

<body>
<h1>Hang Game</h1>
<p class="font-weight-bold">Suggest a word:</p>
<img src="image.png" height="400" weight="400">
<p>_ _ _ _ _ _ _</p>

<div>
	<a type="button" class="btn btn-outline-light" onclick="wordcheck(А)" href="#">А</a>
	<a type="button" class="btn btn-outline-light" onclick="wordcheck(Б)" href="#">Б</a>
	<a type="button" class="btn btn-outline-light" onclick="wordcheck(В)" href="#">В</a>
	<a type="button" class="btn btn-outline-light" onclick="wordcheck(Г)" href="#">Г</a>
	<a type="button" class="btn btn-outline-light" onclick="wordcheck(Д)" href="#">Д</a>
	<a type="button" class="btn btn-outline-light" onclick="wordcheck(Ж)" href="#">Ж</a>
	<a type="button" class="btn btn-outline-light" onclick="wordcheck(З)" href="#">З</a>
	<a type="button" class="btn btn-outline-light" onclick="wordcheck(И)" href="#">И</a>
	<a type="button" class="btn btn-outline-light" onclick="wordcheck(Й)" href="#">Й</a>
	<a type="button" class="btn btn-outline-light" onclick="wordcheck(К)" href="#">К</a>
	<a type="button" class="btn btn-outline-light" onclick="wordcheck(Л)" href="#">Л</a>
	<a type="button" class="btn btn-outline-light" onclick="wordcheck(М)" href="#">М</a>
	<a type="button" class="btn btn-outline-light" onclick="wordcheck(Н)" href="#">Н</a>
	<a type="button" class="btn btn-outline-light" onclick="wordcheck(О)" href="#">О</a>
	<a type="button" class="btn btn-outline-light" onclick="wordcheck(П)" href="#">П</a>
	<a type="button" class="btn btn-outline-light" onclick="wordcheck(Р)" href="#">Р</a>
	<p></p> 
	<a type="button" class="btn btn-outline-light" onclick="wordcheck(С)" href="#">С</a>
	<a type="button" class="btn btn-outline-light" onclick="wordcheck(Т)" href="#">Т</a>
	<a type="button" class="btn btn-outline-light" onclick="wordcheck(У)" href="#">У</a>
	<a type="button" class="btn btn-outline-light" onclick="wordcheck(Ф)" href="#">Ф</a>
	<a type="button" class="btn btn-outline-light" onclick="wordcheck(Х)" href="#">Х</a>
	<a type="button" class="btn btn-outline-light" onclick="wordcheck(Ч)" href="#">Ч</a>
	<a type="button" class="btn btn-outline-light" onclick="wordcheck(Ш)" href="#">Ш</a>
	<a type="button" class="btn btn-outline-light" onclick="wordcheck(Щ)" href="#">Щ</a>
	<a type="button" class="btn btn-outline-light" onclick="wordcheck(Ъ)" href="#">Ъ</a>
	<p></p> 
	<a type="button" class="btn btn-outline-light" onclick="wordcheck(Ь)" href="#">Ь</a>
	<a type="button" class="btn btn-outline-light" onclick="wordcheck(Ю)" href="#">Ю</a>
	<a type="button" class="btn btn-outline-light" onclick="wordcheck(Я)" href="#">Я</a>	
	</div>
	<a type="button" class="btn btn-outline-light" href="index.php">Back</a>
</body>
	
<?php

session_start();
 
 //$_SESSION[$error]++; 
 //var_dump($_SESSION);

function wordcheck($letter){
	$word = $_SESSION['word'];
	$position = strpos($word, $letter);
	//var_dump($letter);

	if ($poistion == false) {
		$_SESSION['error']++;
} else{
	echo $position;
}
}



// <!-- showletter function  -->
// <!-- letter i position  -->
// <!-- echo position i letter -->
// <!--  -->


