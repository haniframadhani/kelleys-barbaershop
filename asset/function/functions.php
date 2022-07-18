<?php

$isi = 0;

function book($data)
{
    $name = htmlspecialchars($data["name"]) . "\n";
    $phone = htmlspecialchars($data["phone"]) . "\n";
    $time = explodeTime($data["time"]);
    $time = implode(" ", $time) . "\n";
    $book = fopen("book.txt", "a") or die("unable to open file");
    fwrite($book, $name);
    fwrite($book, $phone);
    fwrite($book, $time);
    fclose($book);
}

function explodeTime($data)
{
    $separator = "/[T]/";

    $data = preg_split($separator, $data);

    return $data;
}
