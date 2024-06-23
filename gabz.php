<?php
$links = [
    'abc' => 'https://www.youtube.com/@gabzin1/'
];

$code = $_GET['code'];

if (array_key_exists($code, $links)) {
    header("Location: " . $links[$code]);
    exit();
} else {
    echo "Eehh, didnt worked ;(";
}
?>
