<?php

define('PROJECT_DIRECTORY', '/path/to/project/directory');
define('PRIVATE_DIRECTORY', '/path/to/private/directory');
define('SHARED_DIRECTORY', '/path/to/shared/directory');

$projectDir = PROJECT_DIRECTORY;
$privateDir = PRIVATE_DIRECTORY;
$sharedDir = SHARED_DIRECTORY;

echo $_SERVER['SCRIPT_NAME'] . "<br>";
echo $_SERVER['DOCUMENT_ROOT'] . "<br>";
echo __FILE__ . "<br>";

echo "PROJECT_DIRECTORY: " . PROJECT_DIRECTORY . "<br>";
echo "PRIVATE_DIRECTORY: " . PRIVATE_DIRECTORY . "<br>";
echo "SHARED_DIRECTORY: " . SHARED_DIRECTORY . "<br>";


?>