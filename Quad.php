<?php 
class QuadraticEquation {
    private $a;
    private $b;
    private $c;

    function get_a() {
        return $this->a;
    }

    function get_b() {
        return $this->b;
    }

    function get_c() {
        return $this->c;
    }
     
    
}

$result = '';
if (isset($_POST['calculate'])) {
    $a =isset($_POST['a']) ? $_POST['a'] : '';
    $b =isset($_POST['b']) ? $_POST['b'] : '';
    $c =isset($_POST['c']) ? $_POST['c'] : '';

    $delta = ($b * $b) - (4 * $a * $c);
    var_dump($delta);

    if ($delta < 0) {
        $result = 'Phương trình vô nghiệm';
    }
    else if ($delta == 0) {
        $result = 'Phương trình có nghiệm kép x1 = x2 =' . (-$b/2*$a);
    }
    else {
        $result ='Phương trình có hai nghiệm phân biệt: x1 = ' .  ((-$b + sqrt($delta))/2*$a);
        $result .=', x2 = ' .  ((-$b - sqrt($delta))/2*$a);
    }
}
 echo $result;
?>