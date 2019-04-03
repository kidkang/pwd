<?php 
require __DIR__.'/../vendor/autoload.php';
use Kd\Pwd\Pwd;
$pwd = '123456';
print_r(Pwd::build(md5($pwd),1));
print_r(Pwd::build($pwd));
print_r(Pwd::check('123456','2cf00cf95e2080376bae4f6fa24e4f91','3nzgY0bm'));
print_r(Pwd::check(md5('123456'),'2cf00cf95e2080376bae4f6fa24e4f91','3nzgY0bm',1));
?>