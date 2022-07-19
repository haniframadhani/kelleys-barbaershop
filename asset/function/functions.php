<?php

$costumer = [];
$new = [];

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

function readBook()
{
	global $costumer;
	$i = 0;
	$book = fopen("book.txt", "r") or die("Unable to open file!");
	while (!feof($book)) {
		$costumer[$i] = fgets($book);
		$i++;
	}
	fclose($book);
	array_pop($costumer);
}

function into2d()
{
	global $costumer, $new;
	$k = 0;
	for ($i = 0; $i < (sizeof($costumer) / 3); $i++) {
		for ($j = 0; $j < 3; $j++) {
			$new[$i][$j] = $costumer[$k];
			$k++;
		}
	}
}
