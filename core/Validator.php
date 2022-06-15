<?php

namespace App\Core;

class Validator
{
    static function clean($value = []) {
        foreach($value as $data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = strip_tags($data);
            $data = htmlspecialchars($data);
            if(empty($data)) {
                return false;
            }
        }

        return $value;
    }

    static function check_length($value = "", $min, $max) {
        $result = (mb_strlen($value) < $min || mb_strlen($value) > $max);
        return !$result;
    }
}