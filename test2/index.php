<?php

require_once __DIR__ .'/vendor/autoload.php';
use App\ExcelValidation\ExcelValidation;

$file   = new ExcelValidation('samples/Type_B');
$output = $file->output();

echo json_encode($output);
