<?php

function palindrome_angka($angka)
{
    // tulis kode di sini
    $loop = $angka;
    while (true) {
        $loop++;
        $cek1 = "$loop";
        $cek2 = '';

        for ($x = strlen($cek1) - 1; $x >= 0; $x--) :
            $cek2 .= $cek1[$x];
        endfor;

        if ($cek1 == $cek2) {

            $result = "palindrome angka <b>$angka</b>, adalah <b>$cek1</b><br>";
            // return $result;
            break;
        }

        // if ($cek == 10)
        //     break;
    }

    return $result;
}

// palindrome_angka(175);
// TEST CASES
echo palindrome_angka(8); // 9
echo palindrome_angka(10); // 11
echo palindrome_angka(117); // 121
echo palindrome_angka(175); // 181
echo palindrome_angka(1000); // 1001
