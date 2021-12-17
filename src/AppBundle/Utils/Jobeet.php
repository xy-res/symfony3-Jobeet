<?php

namespace AppBundle\Utils;

class Jobeet
{
    static public function slugify($text)
    {
        // replace non letter or digits by -
        $text = preg_replace('#[^\\pL\d]+#u', '-', $text);
        // replace all non letters or digits by -
       // $text = preg_replace('/\W+/', '-', $text);
        $text = trim($text, '-');

        // transliterate
        if (function_exists('iconv'))
        {
            $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
        }
        // trim and lowercase
        $text = strtolower(trim($text, '-'));
        // remove unwanted characters
        $text = preg_replace('#[^-\w]+#', '', $text);

        if (empty($text))
        {
            return 'n-a';
        }

        return $text;
    }
}