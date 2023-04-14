<?php

$comma_separated = 'pen,pineapple,apple,pen';
echo "{$comma_separated}<hr>";

$separate = explode(',', $comma_separated);
foreach ($separate as $item) {
    echo "{$item}<br>";
}
echo '<hr>';

$space_separated = implode(' ', $separate);
echo $space_separated;