<?php 
namespace Kd\Pwd;
class Util{
    public static function str_random($len){
        $strs="QWERTYUIOPASDFGHJKLZXCVBNM1234567890qwertyuiopasdfghjklzxcvbnm";
        $name=substr(str_shuffle($strs),mt_rand(0,strlen($strs)-($len+1)),$len);
        return $name;
    }
}
?>