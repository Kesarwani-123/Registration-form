<?php
$fp = fsockopen('smtp.gmail.com', 587, $errno, $errstr, 30);
if (!$fp) {
    echo "Failed to connect: $errstr ($errno)";
} else {
    echo "Connected to SMTP server";
    fclose($fp);
}
?>
