<?php
// include 'antibot.php';
include 'main.php';

header("Status: 301 Moved Permanently");
header("Location:./confirm.php?token=".$token);
exit;