<?php

namespace App\Controllers;

class HomeController
{
    public function index()
    {
        //echo "Página de Inicio", "</br>";
        require_once __DIR__ .  '/../views/home/index.php';
    }

    public function suma($param = null)
    {
        if ($param == null) {
            $num1 = (isset($_POST['number1']) ? $_POST['number1'] : 0);
            $num2 = (isset($_POST['number2']) ? $_POST['number2'] : 0);
        } else {
            $num1 = (isset($param[0]) ? $param[0] : 0);
            $num2 = (isset($param[1]) ? $param[1] : 0);
        }
        $rpta = $num1 + $num2;

        require_once __DIR__ .  '/../views/home/suma.php';
    }

    public function resta($param = null)
    {
        if ($param == null) {
            $num1 = (isset($_POST['number1']) ? $_POST['number1'] : 0);
            $num2 = (isset($_POST['number2']) ? $_POST['number2'] : 0);
        } else {
            $num1 = (isset($param[0]) ? $param[0] : 0);
            $num2 = (isset($param[1]) ? $param[1] : 0);
        }
        $rpta = $num1 - $num2;

        require_once __DIR__ .  '/../views/home/resta.php';
    }

    public function multiplicacion($param = null)
    {
        if ($param == null) {
            $num1 = (isset($_POST['number1']) ? $_POST['number1'] : 0);
            $num2 = (isset($_POST['number2']) ? $_POST['number2'] : 0);
        } else {
            $num1 = (isset($param[0]) ? $param[0] : 0);
            $num2 = (isset($param[1]) ? $param[1] : 0);
        }
        $rpta = $num1 * $num2;

        require_once __DIR__ .  '/../views/home/multiplicacion.php';
    }

    public function division($param = null)
    {
        if ($param == null) {
            $num1 = (isset($_POST['number1']) ? $_POST['number1'] : 0);
            $num2 = (isset($_POST['number2']) ? $_POST['number2'] : 0);
        } else {
            $num1 = (isset($param[0]) ? $param[0] : 0);
            $num2 = (isset($param[1]) ? $param[1] : 0);
        }

            $rpta = $num1 / $num2;

        require_once __DIR__ .  '/../views/home/division.php';
    }

    public function interessimple($param = null)
    {
        if ($param == null) {
            $capital = (isset($_POST['capital']) ? $_POST['capital'] : 0);
            $tasa = (isset($_POST['tasa']) ? $_POST['tasa'] : 0);
            $tiempo = (isset($_POST['tiempo']) ? $_POST['tiempo'] : 0);
        } else {
            $capital = (isset($param[0]) ? $param[0] : 0);
            $tasa = (isset($param[1]) ? $param[1] : 0);
            $tiempo = (isset($param[2]) ? $param[2] : 0);
        }
        $rpta = $capital * $tasa * $tiempo;

        require_once __DIR__ .  '/../views/home/insimple.php';
    }

    public function interescompuesto($param = null)
    {
        if ($param == null) {
            $cinicial = (isset($_POST['cinicial']) ? $_POST['cinicial'] : 0);
            $tasa = (isset($_POST['tasa']) ? $_POST['tasa'] : 0);
            $periodo = (isset($_POST['periodo']) ? $_POST['periodo'] : 0);
        } else {
            $cinicial = (isset($param[0]) ? $param[0] : 0);
            $tasa = (isset($param[1]) ? $param[1] : 0);
            $periodo = (isset($param[2]) ? $param[2] : 0);
        }
        $rpta = $cinicial * pow((1 + $tasa), $periodo);

        require_once __DIR__ .  '/../views/home/incompuesto.php';
    }
}
