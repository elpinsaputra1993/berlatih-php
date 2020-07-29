<?php
function pasangan_terbesar($angka)
{
    // kode di sini

    $str = "$angka";
    $pjg = strlen($str);
    $pjg = ($pjg % 2 == 1) ? $pjg + 1 : $pjg;
    $str = ($pjg % 2 == 1) ? $str + "0" : $str;

    $temp = '';
    $max = '';

    $result = '';
    for ($x = 0; $x < $pjg; $x += 2) :
        if ($x == 0) {

            $max = substr($str, $x, 2);
        } else {
            $temp = substr($str, $x, 2);

            if ($temp > $max)
                $max = $temp;
        }

    endfor;

    return "Pasangan terbesar adalah <b>" . $max . "</b><br>";
}

// TEST CASES
echo pasangan_terbesar(641573); // 73
echo pasangan_terbesar(12783456); // 83
echo pasangan_terbesar(910233); // 91
echo pasangan_terbesar(71856421); // 85
echo pasangan_terbesar(79918293); // 99
