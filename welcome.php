<?php

if (file_exists('/tmp/hello.txt')) {
    $c = file_get_contents('/tmp/hello.txt');
} else {
    $c = "middle2";
}

echo 'hello, ' . $c;
