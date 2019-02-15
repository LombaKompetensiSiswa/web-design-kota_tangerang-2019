<?php

class API{
    public static function valid($post = '', $arr = ''){
        if(is_array($post)){
            $x = false;
            foreach($post as $key => $value){
                if($value == ''||$key == ''){
                    $x = true;
                }
            }
            if($x == true){
                return false;
                throw new Exception('POST ERROR');
            }else{
                return true;
            }
        }else{
            throw new Exception('POST ERROR');
        }
    }
}