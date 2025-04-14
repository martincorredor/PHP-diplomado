<?php
class Calculadora {
    private $numero1;
    private $numero2;
    private $operador;


    public function __construct($numero1, $numero2, $operador) {
        $this->numero1 = $numero1;
        $this->numero2 = $numero2;
        $this->operador = $operador;
    }

    public function operacion(){
        switch ($this->operador)
        {
            case '+':
                $this->suma();
                break;
            case '-':
                $this->resta();
                break;
            case '*':
                $this->multiplicacion();
                break;
            case '/':
                $this->division();
                break;
            default:
                return "Operador no válido.";
        }
    }

    public function suma () {
        $resultado = $this->numero1 + $this->numero2;
        echo $this->numero1 . $this->operador . $this->numero2 . " = " . $resultado . "<br>";
    }
    public function resta () {
        $resultado = $this->numero1 - $this->numero2;
        echo $this->numero1 . $this->operador . $this->numero2 . " = " . $resultado . "<br>";
    }
    public function multiplicacion () {
        $resultado = $this->numero1 * $this->numero2;
        echo $this->numero1 . $this->operador . $this->numero2 . " = " . $resultado . "<br>";
    }
    public function division () {
        if ($this->numero2 != 0) {
            $resultado = $this->numero1 / $this->numero2;
            echo $this->numero1 . $this->operador . $this->numero2 . " = " . $resultado . "<br>";
        } else {
            echo "Error: División por cero.<br>";
        }
    }
}
?>