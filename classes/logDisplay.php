<?php

class LogDisplay{
	public $fn = 'log.txt';

    public function openFileForReading(){
        $fh = fopen($this->fn, 'r');
        return $fh;
    }

    public function readThis($fh){
        $content = fread($fh, filesize($this->fn));
        fclose($fh);
        return $content;
    }

    public function show($content){
    	echo nl2br($content);//nl2br() will display text with original line-breaks. Without nl2br() this would be an unformatted text without line breaks.
    }

    public function displayAllLogs(){
    	$a = $this->openFileForReading();
    	$b = $this->readThis($a);
    	$this->show($b);

    }
}



?>