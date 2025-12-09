<?php
declare(strict_types=1);

class MyClass {
    public $value;

    public function isValueAnInteger() {
        // Fonction qui vérifie que la variable value est bien un Integer
        if($this->isValid()){
            return is_int($this->value);
        }
        return "Valeur invalide";
    }

    public function square() {
        // Fonction qui met au carré la variable value
        if($this->isValid()){
            return $this->value * $this->value;
        }
        return "Valeur invalide";
    }

    public function isValid() {
        return $this->value <= 10;
    }
}

$class = new MyClass();

$class = 2;
echo $class->square().PHP_EOL;

?>