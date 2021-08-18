<?php  
class StopWatch {
    private $startTime;
    private $endTime;

    public function __construct() 
    {
        $this->startTime = date('Y-m-d H:i:s');
    }

    public function start() {
        $this->startTime = date('Y-m-d H:i:s');
    }

    public function stop() {
        $this->endTime = date('Y-m-d H:i:s');
    }

    public function setStartTime($time) {
        $this->startTime = $time;
    }

    public function getStartTime() {
        echo $this->startTime;
        return $this->startTime;
    }

    public function setEndTime($time) {
        $this->endTime = $time;
    }

    public function getEndTime() {
        echo "<br/>" . $this->endTime;
        return $this->endTime;
    }

    public function getElapsedTime() {
        return $this->getEndTime() - $this->getStartTime();
    }
}

$stop1 = new StopWatch();
$stop1->start();

for ($i=0; $i< 100000; $i++) {
    $start = microtime(true);

}

$stop1->stop();
echo $stop1->getElapsedTime();

sleep(2);
$end = (microtime(true) -$start);
echo  "elapsed time: $end";
?>