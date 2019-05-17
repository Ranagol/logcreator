<?php

class LogWriterExperimental{
    public $fn = 'log.txt';

    public function openFileForWriting(){
        return fopen($this->fn, 'a');
    }

    public function writeIntoFile($fh, $message){
        $currentTimeAndDate = date('H:i:s; d.m.Y', time());
        fwrite($fh, '[' . $currentTimeAndDate . ']' .  $message . "\n");
        fclose($fh);
    }

    public function createLog($message){
        $a = $this->openFileForWriting();
        $b = $this->writeIntoFile($a, $message);
    }
}



?>