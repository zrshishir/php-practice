<?php

function MathChallenge($num)
{
    // code goes here
    $expectedDigit = 0;
    while ($num != 0) {
        $lastDigit = lastTwoDigit($num);

        if ($expectedDigit == 0) {
            $num = (int)($num / 10);
            $expectedDigit = lastTwoDigit($num);
        }

        $expectedDigit = $expectedDigit < $lastDigit ? $lastDigit : $expectedDigit;
        $num = (int)($num / 10);
    }

    return $expectedDigit;

}

function lastTwoDigit($num)
{
    return ($num % 10) + (($num / 10) % 10) * 10;
}

// keep this function call here
echo MathChallenge(87653456891234);
//echo MathChallenge(fgets(fopen('php://stdin', 'r')));


