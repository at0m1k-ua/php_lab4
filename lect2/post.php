<?php

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    echo 'Use POST query (button below)';
} else {
    session_start();
    setcookie('session_id', session_id(), time() + 3600, "/");

    $counter = $_COOKIE['counter'];

    $counter++;

    if (!$counter) {
        setcookie('counter', 1, time() + 300, "/");
    } else {
        setcookie('counter', $counter, time() + 300, "/");
    }

    echo $counter . '<br>';
}

echo '<form action="post.php" method="POST"><button type="submit">Add</button></form>';