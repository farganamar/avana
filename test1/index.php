<?php
function findClosingPosition($str, $position) {
    if ($str[$position] !== '(' ) {
        echo "Could not find open bracket";
        return false;
    }

    $width  = 1;
    for ($i=$position+1; $i < strlen($str) ; $i++) { 
        if ($str[$i] ===  '(' ) {
            ++$width;
        } else if($str[$i] === ')' ) {
            --$width;
        }

        if ($width === 0) {
            return $i;
        }
    }
    return -1;
}

$string = "a (b c (d e (f) g) h) i (j k)";
$position   = 2;

echo findClosingPosition($string, $position);
?>