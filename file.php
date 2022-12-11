<?php

function read_dir($path)
{

    $files = scandir($path);

    return array_slice($files, 2);
}