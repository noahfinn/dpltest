<?php
require 'vendor/autoload.php';
try {
    $mc = new Mailchimp('');
} catch (Mailchimp_Error $e) {
    echo 'You have not set an API key';
}
echo "ok";
?>