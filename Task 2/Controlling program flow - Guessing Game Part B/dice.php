<html>
<head>

</head>
<body>

<form method="get" action="dice.php">
    <label for="guess">How many times 6 rolled in 10 rolled of the dice</label>
    <input type="text" id="guess" name="guess">
    <input type="submit" name="Name" value="Value">
</form>
</body>
</html>

<?php
$guess = $_GET["guess"];
$sixes = 0;
 for ($i = 0; $i<10; $i++){
     $roll = rand(1, 6);
     if($roll==6)
         $sixes++;
 }
 echo 'Your guess: '.$guess.'<br>';
 echo 'Result: '.$sixes.'<br>';
 if($guess==$sixes)
     echo 'Correct!';
 else
     echo 'Wrong!';


/**
 * Created by PhpStorm.
 * User: Tomek
 * Date: 06.02.2018
 * Time: 15:17
 */
