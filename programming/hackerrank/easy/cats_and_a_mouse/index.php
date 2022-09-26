<?php


/**
 * Undocumented function
 *
 * @param int $x
 * @param int $y
 * @param int $z
 * 
 * @return string
 */
function catAndMouse( $x, $y, $z ) {
    
    $catA = abs( $x - $z );
    $catB = abs( $y - $z );

    if ( $catA < $catB ) {
        return 'Cat A';
    }
    if ( $catB < $catA) {
        return 'Cat B';
    }

    return 'Mouse C';
}

$fptr = fopen(("output.txt"), "w");
$n = intval( trim( fgets( STDIN ) ));

while( $n > 0) {

    fscanf(STDIN, "%[^\n]", $xyz_temp);
    $xyz = explode(' ', $xyz_temp);

    $x = intval($xyz[0]);
    $y = intval($xyz[1]);
    $z = intval($xyz[2]);

    $result = catAndMouse($x, $y, $z);

    fwrite($fptr, $result . "\n");
    
    $n--;
}

fclose($fptr);
