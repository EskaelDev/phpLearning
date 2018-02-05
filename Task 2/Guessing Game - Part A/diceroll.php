<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dice roll</title>
</head>
<body>

<form method="get" action="diceroll.php">
    <label for="guess" class="mark-label">Your guess:</label>
    <input type="text" size="14" name="guess" id="guess">
    <input type="submit" value="Submit">
</form>

<?php
$guess = $_GET["guess"];
$dice = rand(1, 6);

echo 'Guess - ' . $guess.'<br>';
echo 'Dice roll - ' . $dice.'<br>';
if ($guess == $dice) {
    echo " You guessed! ";
}
else
    echo ' Try again ';
?>

</body>
</html>