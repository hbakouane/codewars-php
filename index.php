<?php

class Exercice
{
    public function spinWords($str)
    {
        $exploded = explode(' ', $str);
        foreach ($exploded as $key => $item) {
            if (strlen($item) >= 5) {
                $splitted = str_split($item);
                $reversed = array_reverse($splitted);
                $exploded[$key] = implode($reversed);
            }
        }
        return implode(' ', $exploded);
    }
}

$instance = new Exercice();
echo $instance->spinWords('Hey fellow warriors');
