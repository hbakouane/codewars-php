<?php

class Exercice
{

    /**
     * @param $str
     * @return string
     */
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


    /**
     * @param string $code
     * @return string
     */
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

    // An isogram is a word that has no repeating letters, consecutive or non-consecutive. Implement a
    // function that determines whether a string that contains only letters is an isogram. Assume the
    // empty string is an isogram. Ignore letter case.
    //
    // isIsogram "Dermatoglyphics" == true
    // isIsogram "aba" == false
    // isIsogram "moOse" == false -- ignore letter case

    /**
     * @param $string
     * @return bool
     */
    public function isIsogram($string)
    {
        $lowcases = strtolower($string);
        $splitted = str_split($lowcases);
        // Count the array before removing the letters
        $count = count($splitted);
        // Remove each letter from the string
        foreach ($splitted as $key => $value) {
            $check = array_filter($splitted, function ($letter) use ($value) {
                return $letter != $value;
            });
            if (count($check) != $count-1) {
                return false;
            }
        }
        return true;
    }

    //    Simple, given a string of words, return the length of the shortest word(s).
    //
    //    String will never be empty and you do not need to account for different data types.
    public function findShort($str) {
        $str = explode(' ', $str);
        $new_array = [];
        foreach ($str as $key => $value) {
            $new_array[$value] = strlen($value);
        }
        return min($new_array);
    }
}

$instance = new Exercice();
echo $instance->findShort('bitcoin take over the world maybe who knows perhaps');
