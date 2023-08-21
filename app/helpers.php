<?php

use Illuminate\Support\Carbon;

if(!function_exists('formatDate')) {
    function formatDate(string $date, string $format = 'D m Y H:i') : string {
        return Carbon::parse($date)->translatedFormat($format);
    }
}

if(!function_exists('code_generator')) {
    function code_generator(string|null $code) : string{
        $r = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
        if($code === null){
            $code = 'AA-00-AA-00';
        }
        else{
            $table = [
                ($code[0]), ($code[1]),
                ((int) ($code[3] . $code[4])),
                ($code[6]), ($code[7]),
                ((int) ($code[9] . $code[10]))
            ];
            $table_reverse = array_reverse($table);
            $l = null;
            $a = '';
            $rr = [];
            foreach ($table_reverse as $key => $val) {
                if ($l == null || $l == 0 || $l == 'A') {
                    $m = 0;
                    if(is_int($val)){
                        $m = $l === null || (isset($table_reverse[$key - 1]) && $table_reverse[$key - 1] != $l) ? (($val + 1) == 100 ? 0 : $val + 1) : $val;
                    }
                    else{
                        $k = array_search(strtolower($val), $r) + 1;
                        if($l === null || (isset($table_reverse[$key - 1]) && $table_reverse[$key - 1] != $l)){
                            if(isset($r[$k])){
                                $m = strtoupper($r[$k]);
                            }
                            else{
                                $m = strtoupper($r[0]);
                            }
                        }
                        else{
                            $m = strtoupper($val);
                        }
                    }
                    $rr[] = is_int($m) ? ($m <= 9 ? '0' . $m : $m) : $m;
                    $l = $m;
                } else {
                    $rr[] = is_int($val) ? ($val <= 9 ? '0' . $val : $val) : $val;
                    $l = $val;
                }
            }
            $rr = array_reverse($rr);
            $code = $rr[0] . $rr[1] . '-' . $rr[2] . '-' . $rr[3] . $rr[4] . '-' . $rr[5];
        }
        return $code;
    }
}
