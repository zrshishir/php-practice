<?php

const ONE = 10;

class Foo {
    const TWENTY = ONE * 2;
    const SIXTY = self::TWENTY * 3;
    const RESULT = "The total value is: " . self::SIXTY;
}

echo Foo::RESULT . "\n";