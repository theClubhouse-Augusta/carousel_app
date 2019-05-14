<?php

echo 'Hola';

if (!empty($user)) {
    echo "User @$user has been accessed";
} else {
    echo "<br>Testing Invokable $invoke";
    if (!empty($url)) {
        echo '<br>';
        var_dump($url);
    }
}
