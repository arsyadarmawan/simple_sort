<?php

$list = array();
echo "How many times you will input  : ";
$input = rtrim(fgets(STDIN));

if ($input == 0) {
    return false;
}

for ($i=1; $i <= $input ; $i++) { 
    echo "enter value " . $i. " : ";
    $data = fscanf(STDIN, "%d\n", $number);
    if ($data == 1) {
        $list[] = $number;
    }
}

$n = sizeof($list);
for($i = 0; $i < $n; $i++)
{
    for ($j = 0; $j < $n - $i - 1; $j++)
    {
        if ($list[$j] > $list[$j+1])
        {
            $t = $list[$j];
            $list[$j] = $list[$j+1];
            $list[$j+1] = $t;
        }
    }
}
print_r($list);