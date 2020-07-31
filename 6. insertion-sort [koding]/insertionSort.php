<?php

$numbers = [7, 2, 10, 6, 5, 4];

function sorting($data)
{
    for ($i = 1; $i < count($data); $i++) {
        $selected = $data[$i];

        echo "\nIterasi ke - $i \n";
        echo "Data yang dipilih : $selected \n";

        $j = $i - 1;
        while (($j >= 0) && ($data[$j] > $selected)) {
            echo join(",", $data) . "\n";
            $data[$j + 1] = $data[$j];
            $data[$j] = $selected;
            $j--;
        }
        $data[$j + 1] = $selected;
        echo join(",", $data) . "\n";
    }
    return $data;
}
echo "Data Acak : " . join(",", $numbers);
echo "\n";
$sorted = sorting($numbers);
echo "\n";
echo "Data Urut : " . join(",", $sorted);
echo "\n";
