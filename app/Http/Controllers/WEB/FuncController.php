<?php

namespace App\Http\Controllers\WEB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FuncController extends Controller
{
    public function test()
    {
        $a = 1;
        $b = 1;
        $c = 1;
        $d = 1;
        $e = 1;


        function test2($a, $b, $c, $d, $e)
        {

            for ($a; $a < 6; $a++) {
                echo $a;
                echo " ";
            }
            echo "<br>";
            for ($b; $b < 6; $b++) {
                echo $b * 2;
                echo " ";
            }
            echo "<br>";
            for ($c; $c < 6; $c++) {
                echo $c * 3;
                echo " ";
            }
            echo "<br>";
            for ($d; $d < 6; $d++) {
                echo $d * 4;
                echo " ";
            }
            echo "<br>";
            for ($e; $e < 6; $e++) {
                echo $e * 5;
                echo " ";
            }
        }

        return test2($a, $b, $c, $d, $e);
    }
}
