<?php
require __DIR__ . "/../vendor/autoload.php";

use App\Controllers\NoteController;

$Controller = new NoteController;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $Controller->handlePOST();
}
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $Controller->handleGET($_GET);
}

header("Location: " . $_SERVER['HTTP_REFERER']);
exit;
?>