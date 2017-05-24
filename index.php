<?php
//
//test pcntl 
$pid=pcntl_fork();
switch($pid){

case-1:

    echo"couldn't fork";

    break;

case0:

    echo"I'm parent";

    break;

default:

    echo"I'm child";

}

?>
