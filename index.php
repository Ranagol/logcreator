<?php

function __autoload($className){
    $className = str_replace('..', '', $className);
    require_once("classes/$className.php");
}

//var_dump($_POST);

if (isset($_POST['Abutton'])) {
    $message = ' A button is clicked';
    $logWriter = new LogWriterExperimental($message);
    $logWriter->createLog();
}

if (isset($_POST['Bbutton'])) {
    $message = ' B button is clicked';
    $logWriter = new LogWriterExperimental($message);
    $logWriter->createLog();
}

if (isset($_POST['Cbutton'])) {
    $message = ' C button is clicked';
    $logWriter = new LogWriterExperimental($message);
    $logWriter->createLog();
}

if (isset($_POST['Dbutton'])) {
    $message = ' D button is clicked';
    $logWriter = new LogWriterExperimental($message);
    $logWriter->createLog();
}




require 'index.view.php';

?>