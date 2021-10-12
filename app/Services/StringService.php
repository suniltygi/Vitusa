<?php 

namespace App\Services;

class StringService {


    /**
     * Compare two strings
     */
    public function StringCompare($request)
    {
        $str1 = str_split($request->str1);
        $str2 = str_split($request->str2);

        $opt1 = array();

        foreach($str1 as $p){
            if(in_array($p,$str2)){
                $index = array_search($p, $str2);
                unset($str2[$index]);
            }else{
                array_push($opt1, $p);
            }
        }

        $opt1 = implode('', $opt1);
        $opt1 = $opt1 == "" ? null : $opt1;
        $opt2 = implode('', $str2);

        return ['opt1'=> $opt1, 'opt2'=> $opt2];
    }

}