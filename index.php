<?php

function __autoload($className){
    $className = str_replace('..', '', $className);
    require_once("classes/$className.php");
}




if (isset($_POST['Abutton'])) {
    $message = ' A button is clicked';
}

if (isset($_POST['Bbutton'])) {
    $message = ' B button is clicked';
}

if (isset($_POST['Cbutton'])) {
    $message = ' C button is clicked';
}

if (isset($_POST['Dbutton'])) {
    $message = ' D button is clicked';
}

$logWriter = new LogWriterExperimental();
$logWriter->createLog($message);
writeToDB::connectToDb()->recordDataToDB($message);




require 'index.view.php';

?>