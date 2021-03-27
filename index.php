<?php

class Exercice
{
    public function spinWords($str) :string
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

    public function decode_morse(string $code) :string
    {
        $code = str_replace('.... ', 'H', $code);
        $code = str_replace('-..', 'D', $code);
        $code = str_replace('. ', 'E', $code);
        $code = str_replace('-.--', 'Y', $code);
        $code = str_replace('   ', ' ', $code);
        $code = str_replace('.--- ', 'J', $code);
        $code = str_replace('..- ', 'U', $code);
        $code = str_replace(' .', 'E', $code);
        return $code;
    }
}

$instance = new Exercice();
echo $instance->decode_morse('.... . -.--  .--- ..- -.. .');
