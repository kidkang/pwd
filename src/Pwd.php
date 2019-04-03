<?php
namespace Kd\Pwd;

class Pwd
{
    /**
     * [生成密码]
     * @param  [type]  $pwd    [原始密码]
     * @param  boolean $is_md5 [description]
     * @return [type]          [description]
     */
    public static function build($pwd,$is_md5 = false)
    {
        $salt = Util::str_random(8);
        $pwd  = $is_md5 ? $pwd : md5($pwd);
        $pwd  = md5($pwd . $salt);
        return [
            'pwd'  => $pwd,
            'salt' => $salt,
        ];
    }
    /**
     * 验证密码的正确
     * @param  [type]  $pwd   [输入的密码]
     * @param  [type]  $rpwd  [数据库密码]
     * @param  [type]  $salt  [盐池]
     * @param  boolean $is_md [是否md5加密]
     * @return [type]         [bool 密码是否相等]
     */
    public static function check($pwd,$rpwd,$salt,$is_md5 = false){
        $pwd = $is_md5 ? $pwd : md5($pwd);
        $pwd = md5($pwd .$salt);

        return $pwd === $rpwd;
    }
}
