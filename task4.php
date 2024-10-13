<?php
$str = "Привет, мир!";
function convertToLatin(string $str): string {
    $alfabet = [
        'а' => 'a',   'б' => 'b',   'в' => 'v',
        'г' => 'g',   'д' => 'd',   'е' => 'e',
        'ё' => 'e',   'ж' => 'zh',  'з' => 'z',
        'и' => 'i',   'й' => 'y',   'к' => 'k',
        'л' => 'l',   'м' => 'm',   'н' => 'n',
        'о' => 'o',   'п' => 'p',   'р' => 'r',
        'с' => 's',   'т' => 't',   'у' => 'u',
        'ф' => 'f',   'х' => 'h',   'ц' => 'c',
        'ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch',
        'ь' => '\'',  'ы' => 'y',   'ъ' => '\'',
        'э' => 'e',   'ю' => 'yu',  'я' => 'ya'
    ];
    $result = '';
    $arr = mb_str_split( $str);
    for( $i = 0; $i < count( $arr ); $i++ ) {
        if (array_key_exists( $arr[$i], $alfabet )) {
            $result .= $alfabet[$arr[$i]];
        }
        else if (array_key_exists(mb_strtolower($arr[$i]), $alfabet)) {
            $result .= mb_strtoupper($alfabet[mb_strtolower($arr[$i])]);
        }
        else {
            $result .= $arr[$i];
        }
    }

    return $result;
}

echo convertToLatin($str);
