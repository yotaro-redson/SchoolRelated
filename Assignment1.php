<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<?php


function word_count($sentence) {
    $words = explode(" ", $sentence);
    $word_count = array();

    foreach ($words as $word) {
        if (!array_key_exists($word, $word_count)) {
            $word_count[$word] = 1;
        } else {
            $word_count[$word]++;
        }
    }
    return $word_count;
}

function print_count($word_count) {
    foreach ($word_count as $word => $count) {
        echo "$word: $count\n";
    }
}

$sentence = "This is a test sentence that I typed. This sentence was typed by me.";

$word_count = word_count($sentence);

print_count($word_count);


?>