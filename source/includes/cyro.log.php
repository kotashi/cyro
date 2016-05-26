<?php
// Log all requests to the Cyro system.
$line = date('Y-m-d H:i:s') . " - $_SERVER[REMOTE_ADDR] accessed $_SERVER['REQUEST_URI'].";
file_put_contents('cyro.access', $line . PHP_EOL, FILE_APPEND);
?>