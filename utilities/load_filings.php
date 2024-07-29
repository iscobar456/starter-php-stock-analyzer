<?php

// Imports
require 'vendor/autoload.php';

// Use statements
use PhpOffice\PhpSpreadsheet;


// Scan filings
$filingsDirectory = __DIR__ . "/../filings/";
$filings = scandir($filingsDirectory);

foreach ($filings as $filingPath) {
    $sheet = PhpSpreadsheet::IOFactory::load($filingPath);
    
}