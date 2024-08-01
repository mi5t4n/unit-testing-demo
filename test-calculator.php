<?php

require_once 'test-methods.php';
require_once 'calculator.php';

test(
    "When 2 and 3 are summed, should return 5", function () {
        $result = add(2, 3);

        expect_to_be_equal(5, 5);
    }
);
