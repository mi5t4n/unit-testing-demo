<?php
function expect_to_be_equal( $expected, $value )
{
    if ($expected === $value ) {
        return true;
    }

    throw new Exception(
        join(
            PHP_EOL,
            [
            "Expected Value = {$expected}",
            "Passed Value = {$value}",
            ]
        )
    );
}

function test( $text, callable $function )
{
    try {
        call_user_func($function);
        echo "PASS: {$text}";
    } catch( Exception $e) {
        echo "FAIL: {$text}" . PHP_EOL;
        echo $e->getMessage();
    }
}
