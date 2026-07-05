<?php
$seconds = 60 * 60 * 24 * 7;   // cache for 1 week
header("Cache-Control: public, max-age=$seconds");
header('Expires: ' . gmdate('D, d M Y H:i:s', time() + $seconds) . ' GMT');
