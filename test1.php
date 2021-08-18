<?php
// class A {

// };
// class B1 extends A {

// };
// class_alias('A', 'B2');
// $b1 = new B1;
// echo get_class($b1);
// $b2 = new B2;
// echo get_class($b2);
// $values = array(
//     10,
//     20,
//     '0',
//     '10hello',
//     'hello10'
// );
// echo array_sum($values);
// var_dump($values);
$str = 'val1,val2,,val4,';
echo count(explode(',',$str));
?>
