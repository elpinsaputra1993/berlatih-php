<?php
function skor_terbesar($arr)
{
    //kode di sini

    // $group = [];
    $max = [];
    $temp = '';
    $nil = '';
    $kls = '';
    // foreach($arr as $k=>$v):
    //     if(!(in_array($v['kelas'],$group))
    //         $group[] = $v['kelas'];

    // endforeach;

    foreach ($arr as $k => $v) :
        if (array_key_exists($v['kelas'], $max)) {

            $kls = $v['kelas'];
            $nil = $max[$kls]['nilai'];
            $temp = $v['nilai'];
            if ($nil < $temp) {
                // unset($max[$kls]);

                $max[$kls] = $v;
            }
        } else {
            $kls = $v['kelas'];
            // unset($max[$kls]);
            $max[$kls] = $v;
        }

    endforeach;





    return $max;
}

// TEST CASES
$skor = [
    [
        "nama" => "Bobby",
        "kelas" => "Laravel",
        "nilai" => 78
    ],
    [
        "nama" => "Regi",
        "kelas" => "React Native",
        "nilai" => 86
    ],
    [
        "nama" => "Aghnat",
        "kelas" => "Laravel",
        "nilai" => 90
    ],
    [
        "nama" => "Indra",
        "kelas" => "React JS",
        "nilai" => 85
    ],
    [
        "nama" => "Yoga",
        "kelas" => "React Native",
        "nilai" => 77
    ],
];


echo "<pre>";

print_r(skor_terbesar($skor));
echo "</pre>";
/* OUTPUT
  Array (
    [Laravel] => Array
              (
                [nama] => Aghnat
                [kelas] => Laravel
                [nilai] => 90
              )
    [React Native] => Array
                  (
                    [nama] => Regi
                    [kelas] => React Native
                    [nilai] => 86
                  )
    [React JS] => Array
                (
                  [nama] => Indra
                  [kelas] => React JS
                  [nilai] => 85
                )
  )
*/
