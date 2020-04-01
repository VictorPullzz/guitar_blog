<?php

$pagesFolder = glob("./pages/*.php");
$currentPage = $_SERVER["REQUEST_URI"];

if ($currentPage === '/') {
    $currentPage = '/home';
}

$page = null;

foreach($pagesFolder as $filename) {
    if (strpos($filename, $currentPage)) {
        $page = $currentPage;
        break;
    }
}

if (is_null($page)) {
    header('Location: 404');
}

$PAGE = "pages$page.php";