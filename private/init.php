<?php

// define('PROJECT_DIRECTORY', '/path/to/project/directory');
define("PRIVATE_PATH", dirname( __FILE__));
define('PROJECT_DIRECTORY', dirname(PRIVATE_PATH));
define("SHARED_PATH", PRIVATE_PATH . '/shared');

// echo PROJECT_DIRECTORY, '<br>';
// echo PRIVATE_PATH . '/shared';

// define('PRIVATE_DIRECTORY', '/path/to/private/directory');
// define('SHARED_DIRECTORY', '/path/to/shared/directory');

// $projectDir = PROJECT_DIRECTORY;
// $privateDir = PRIVATE_DIRECTORY;
// $sharedDir = SHARED_DIRECTORY;

// echo $_SERVER['SCRIPT_NAME'] . "<br>";
// echo $_SERVER['DOCUMENT_ROOT'] . "<br>";
// echo __FILE__ . "<br>";

// echo "PROJECT_DIRECTORY: " . PROJECT_DIRECTORY . "<br>";
// echo "PRIVATE_DIRECTORY: " . PRIVATE_DIRECTORY . "<br>";
// echo "SHARED_DIRECTORY: " . SHARED_DIRECTORY . "<br>";

$root = substr($_SERVER['SCRIPT_NAME'],
    0,
    strpos($_SERVER['SCRIPT_NAME'], '/public') + 7);
define("ROOT_URL", $root);
echo $root;




function url_path($path) {
    if($path[0] != '/') {
        $path = "/" . $path;
    }
    return ROOT_URL . $path;
}


?>