<?php

    if (!function_exists('custom_translate_db')) {
        function custom_translate_db($word, $locale){
            return $word.'_'.$locale;
        }
    }

    if (!function_exists('cutText')) {
        function cutText($inputText, $start, $length) {
            $temp = $inputText;
            $res = array();
            while (strpos($temp, '>')) {
              $ts = strpos($temp, '<');
              $te = strpos($temp, '>');
              if ($ts > 0) $res[] = substr($temp, 0, $ts);
              $res[] = substr($temp, $ts, $te - $ts + 1);
              $temp = substr($temp, $te + 1, strlen($temp) - $te);
              }
            if ($temp != '') $res[] = $temp;
            $pointer = 0;
            $end = $start + $length - 1;
            foreach ($res as &$part) {
              if (substr($part, 0, 1) != '<') {
                $l = strlen($part);
                $p1 = $pointer;
                $p2 = $pointer + $l - 1;
                $partx = "";
                if ($start <= $p1 && $end >= $p2) $partx = "";
                else {
                  if ($start > $p1 && $start <= $p2) $partx .= substr($part, 0, $start-$pointer);
                  if ($end >= $p1 && $end < $p2) $partx .= substr($part, $end-$pointer+1, $l-$end+$pointer);
                  if ($partx == "") $partx = $part;
                  }
                $part = $partx;
                $pointer += $l;
                }
              }
            return join('', $res);
        }
    }
