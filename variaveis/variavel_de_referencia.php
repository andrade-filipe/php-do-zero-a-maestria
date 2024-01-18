<?php
class ValueHolder
{
    public $value;
}

$var = new ValueHolder();
$var->value = 10;

$sync =& $var;

echo $var->value;
echo "<br>";
echo $sync->value;
echo "<br>";

$sync->value = 15;

echo $var->value;
echo "<br>";
echo $sync->value;
echo "<br>";

$var->value = 20;

echo $var->value;
echo "<br>";
echo $sync->value;
echo "<br>";
?>
