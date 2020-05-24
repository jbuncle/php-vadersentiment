<?php

require_once __DIR__ . "/vendor/autoload.php";

$textToTest = "VADER is smart, handsome, and funny.";

$sentimenter = new SentimentIntensityAnalyzer();
$result = $sentimenter->getSentiment($textToTest);

print_r($result);
