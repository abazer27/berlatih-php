<?php
function ubah_huruf($string){
    $hurufselanjutnya ="";
    for($i=0; $i < strlen($string); $i++){
        $hurufselanjutnya .= chr(ord($string[$i])+1);
    }
    return $hurufselanjutnya ."<br>";
}


// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu

?>