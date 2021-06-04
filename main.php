<?php

$list = array();
echo "How many times you will input  : ";
$input = rtrim(fgets(STDIN));

for ($i=1; $i <= $input ; $i++) { 
    echo "enter value " . $i. " : ";
    $data = rtrim(fgets(STDIN));
    $list[] = $data;
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