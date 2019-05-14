<?php

class LogWriterExperimental{
    public $fn = 'log.txt';
    public $message;
    public $currentTimeAndDate;

    public function __construct($message){
        $this->message = $message;
        $this->currentTimeAndDate = date('H:i:s; d.m.Y', time());
    }

    public function openFileForWriting(){
        $fh = fopen($this->fn, 'a');
        return $fh;
    }

    public function writeIntoFile($fh){
        fwrite($fh, '[' . $this->currentTimeAndDate . ']' .  $this->message . "\n");
        fclose($fh);
    }

    public function createLog(){
        $a = $this->openFileForWriting();
        $b = $this->writeIntoFile($a);
    }
}



?>