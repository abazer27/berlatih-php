<?php
function tentukan_nilai($number)
{
    if (($number >= 85) && ($number <=100)){
        echo "Sangat Baik";
        echo "<br>";
    }
    else if (($number >= 70) && ($number <85)){
        echo "Baik";
        echo "<br>";
    }
    else if (($number >= 60) && ($number <70)){
        echo "Cukup";
        echo "<br>";
    }
    else if ($number <60){
        echo "Kurang";
        echo "<br>";
    }
}

//TEST CASES
echo tentukan_nilai(98); //Sangat Baik
echo tentukan_nilai(76); //Baik
echo tentukan_nilai(67); //Cukup
echo tentukan_nilai(43); //Kurang
?>