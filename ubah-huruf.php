<?php
function ubah_huruf($string)
{
    //kode di sini
    $newString = '';
    $temp = '';
    $result = '';

    for ($x = 0; $x < strlen($string); $x++) :
        $temp = $string[$x];
        $temp = ord($temp) + 1;
        $newString = chr($temp);
        $result .= $newString;

    endfor;

    return "<b>" . $string . "</b> diubah menjadi <b>" . $result . "</b><br>";
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu
