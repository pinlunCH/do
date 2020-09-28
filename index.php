<?php
include ("libs/functions.php");

$_GET['pageID'] = (isset($_GET['pageID']))?$_GET['pageID']:1;

makePage($_GET['pageID']);
?>