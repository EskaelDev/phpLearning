<?php 
class Magic_Set
{
public $pubvar = 'Public';
private $privar = 'Private';

public function __set($varName, $value)
{
if (property_exists($this, $varName)) {
echo 'editing ['.$varName.'='.$this->$varName.']
to ['.$varName.'='.$value.']';
}
else {
echo 'defining ['.$varName.'='.$value.']';
}
$this->$varName = $value;
}
}

$test = new Magic_Set();

$test->pubvar = 'Something else';
$test->privar = 'A different Value';
$test->mellemnavn = 'A new Variable';
?>