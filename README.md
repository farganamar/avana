## Test 1

just run:
```
php test1/index.php
```
## Test 2

### Requirements

 - PHP 7.2 or later
 
 ### Installation
 ```
 cd test2
 ```
 ```
 composer install
 ```
### Examples

**test2/index.php**
```
<?php

require_once __DIR__ .'/vendor/autoload.php';
use App\ExcelValidation\ExcelValidation;

$file   = new ExcelValidation('samples/Type_B');
$output = $file->output();

echo json_encode($output);
```
and run it:
```
cd test2
php index.php
```
