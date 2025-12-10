#!/usr/bin/php script.php
<?php
declare(strict_types=1);

class MyClass {
    public $value;

    public function isValueAnInteger()
    {
        return is_int($this->value);
    }

    public function square()
    {
        return $this->value * $this->value;
    }
}

$myClass = new MyClass();

// $myClass->value = '5';
// echo $myClass->isValueAnInteger().PHP_EOL; // true
// echo $myClass->square().PHP_EOL; // 4

// $myClass->value = 'iut';
// echo $myClass->isValueAnInteger().PHP_EOL; // false

//==============================================================================================================================
//==============================================================================================================================
//==============================================================================================================================

$dt = new DateTime(); // Instanciation de la Class datetime - Default current timestamp

echo $dt->format('Y-m-d').PHP_EOL;

$dt->add(new DateInterval("P1D"));
// Le add(new DateInterval("P[*][**]")), permet d'ajouter simplement une date
// Le P est obligatoire, il correspond a la periode
// Pour *, on indique le nombre de fois de la tranche de periode
// Pour **, on indique le type de changement (Y pour years, D pour days, W pour weeks, etc...) 
// C'est a dire que si on souhaite ajouter deux semaines, on écrirais => add(new DateInterval("P2W"))
echo $dt->format('Y-m-d').PHP_EOL;

$dt->add(new DateInterval("P1W"));
echo $dt->format('Y-m-d').PHP_EOL;

$dt->add(new DateInterval("P1M"));
echo $dt->format('Y-m-d').PHP_EOL;

$dt->add(new DateInterval("P1Y"));
echo $dt->format('Y-m-d').PHP_EOL;

//==============================================================================================================================
//==============================================================================================================================
//==============================================================================================================================






?>